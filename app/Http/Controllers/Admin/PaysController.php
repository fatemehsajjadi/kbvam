<?php

namespace App\Http\Controllers\Admin;

use App\Models\Alarms;
use App\Models\Payments;
use App\Models\Settings;
use Ellumilel\ExcelWriter;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PaysController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list_pays_index(Request $request)
    {
        $setting = Settings::first();
        $setting_queue = $setting->queue;
        $payments = Payments::with('pay_status')->where('is_used', 1)
//            ->where('payment_status',2)
//            ->orWhere('payment_status',3)
//            ->orWhere( [ ['payment_status', '=', 2],
//                ['payment_status', '=', 3]])
            ->where('payment_status',3)
            ->orderBy('id', 'asc')
            ->paginate(15);

        return view('admin.page.payments.list_payed', compact('payments','setting_queue'));
    }

    public function list_not_pays_index(Request $request)
    {
        $setting = Settings::first();
        $setting_queue = $setting->queue;
        $payments = Payments::with('pay_status')
            ->where('is_used', 0)
//            ->where('payment_status',2)
//            ->orWhere('payment_status',3)
//            ->orWhere( [ ['payment_status', '=', 2],
//                ['payment_status', '=', 3]])
            ->where('payment_status',3)
            ->orderBy('payment_status', 'desc')
            ->orderBy('id', 'asc')
            ->paginate(15);

        return view('admin.page.payments.list_not_payed', compact('payments','setting_queue'));
    }

    public function show($pay)
    {

        return redirect()->to('/followup/tracking-code/' . $pay);
        /*$queue = 0;
        $pay_queue = Payments::where('payment_status', 3)->where('is_used', 0)->orderBy('id', 'ASC')->get();
        foreach ($pay_queue as $qu) {
            $queue++;
            if ($qu->id == $pay)
                break;
        }
        $pay_id = $pay;
        $payments = Payments::with('pay_status')->find($pay);
        return view('admin.page.payments.show_pay',compact('payments', 'queue', 'pay_id'));*/
    }

    public function edit($pay)
    {

    }

    public function delete(Payments $pay)
    {
        $pay->delete();
        return redirect()->back();
    }

    public function set_not_pay(Payments $pay)
    {
        $pay->is_used = 0;
        $pay->save();
        return redirect()->back();
    }

    public function set_pay(Payments $pay)
    {
        $pay->is_used = 1;
        $pay->save();
        return redirect()->back();
    }


    public function export_excel(Request $request, $choose)
    {
        $file_name = '';
        if ($choose == 'payed') {
            $file_name ='report_payed';
            $payments = Payments::with('pay_status')->where('is_used', 1)
                ->Where('payment_status',3)
                ->get();
        } else if ($choose == 'not-payed') {
            $file_name ='report_not_payed';
            $payments = Payments::with('pay_status')->where('is_used', 0)
                ->Where('payment_status',3)
                ->get();
        } else {
            $file_name ='report_all';
            $payments = Payments::with('pay_status')
                ->Where('payment_status',3)
                ->get();
        }


        $header = [
            'نام' => 'string',
            'نام خانوادگی' => 'string',
            'نام پدر' => 'string',
            'شماره شناسنامه' => 'string',
            'کد ملی' => 'string',
            'کد مستمری' => 'string',
            'شماره موبایل' => 'string',
            'شماره کارت' => 'string',
            'انقضای کارت' => 'string',
            'شماره تراکنش' => 'string',
            'مبلغ' => 'string',
            'وضعیت پرداخت مشتری' => 'string',
            'وضعیت بررسی وام' => 'string',
            'تاریخ ثبت وام' => 'string',

        ];

        $wExcel = new ExcelWriter();
        $wExcel->writeSheetHeader('Sheet1', $header);
        $wExcel->setAuthor('Your name here');
        foreach ($payments as $pay) {
            $is_used = $pay->is_used;
            $used_msg = '';
            if ($is_used == 1)
                $used_msg = 'وام بررسی شده';
            else if ($is_used == 0)
                $used_msg = 'بررسی نشده';

            $wExcel->writeSheetRow('Sheet1', [
                $pay->first_name,
                $pay->last_name,
                $pay->father_name,
                $pay->shenasname,
                $pay->idcard,
                $pay->mostamari,
                $pay->mobile,
                $pay->card_number,
                \Morilog\Jalali\CalendarUtils::strftime('Y/m/d', strtotime($pay->card_expire_date)),
                $pay->reference_id,
                $pay->price,
                $pay->pay_status->status,
                $used_msg
            ]);
        }

        $wExcel->writeToFile('excells/' . $file_name . ".xlsx");
        return redirect()->to('/excells/'.$file_name.'.xlsx');
    }
}
