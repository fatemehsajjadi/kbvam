<?php

namespace App\Http\Controllers;

use App\Models\Alarms;
use App\Models\Payment;
use App\Models\Payments;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LoanController extends Controller
{

    public function index()
    {
        $alarms_footer = Alarms::select('*')->orderBy('id','desc')->limit(3)->get();
        $pricing = Settings::first();
        if(isset($pricing->pricing))
            $pricing = $pricing->pricing;
        return view('web.loan.index',compact('alarms_footer','pricing'));
    }

    private function generateRandom($rand){
        $payments = Payments::where('paygiri',$rand)->get();
        if(count($payments)==0)
            return $rand;
        return $this->generateRandom(rand(100000,999999));
    }

    public function store(Request $request)
    {

        $current_date = date('Y-m-d');
        $card_expire_date = $request->card_expire_date;

        $current_date = strtotime($current_date);
        $card_expire_date = strtotime($card_expire_date);


        if(($card_expire_date-$current_date)<=((60*60*24)*31))
            return Redirect::back()->withErrors(['انقضای کارت کانون شما به پایان رسیده یا در یک ماه آینده به پایان میرسد
لطفا پس از صدور کارت کانون جدید مجددا درخواست خود را ثبت کنید']);

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'father_name' => 'required',
            'shenasname' => 'required',
            'idcard' => 'required|min:10',
            'mostamari' => 'required',
            'mobile' => 'required',
            'card_number' => 'required',
            'card_expire_date' => 'required',
        ]);
        $price = Settings::first()->pricing;

        $zarinpal = zarinpal()
            ->amount($price)
            ->request()
            ->zarin()
            ->callback(env('BASE_GATEWAY_URL'))
            ->description('پرداخت مبلغ وام')
            ->email(env('GATEWAY_EMAIL'))
            ->mobile(env('GATEWAY_MOBILE'))
            ->send();


        if (!$zarinpal->success()) {
            return $zarinpal->error()->message();
        }

        $authority = $zarinpal->authority();


        $payment = new Payments();
        $payment->first_name = $request->first_name;
        $payment->last_name = $request->last_name;
        $payment->father_name = $request->father_name;
        $payment->shenasname = $request->shenasname;
        $payment->idcard = $request->idcard;
        $payment->mostamari = $request->mostamari;
        $payment->mobile = $request->mobile;
        $payment->card_number = $request->card_number;
        $payment->card_expire_date = $request->card_expire_date;
        $payment->payment_status = 1;
        $payment->authority = $authority;
        $payment->price = $price;
        $payment->paygiri = $this->generateRandom(rand(100000,999999));
        $payment->save();

        return $zarinpal->redirect();
    }

    public function verification_payment(Request $request)
    {

        $authority = request()->query('Authority'); // دریافت کوئری استرینگ ارسال شده توسط زرین پال

        $payment = Payments::where('authority', $authority)->first();


        $verify = Payments::with('pay_status')->find($payment->id);
//        return  $verify;


        $response = zarinpal()
            ->amount(Settings::first()->pricing)
            ->verification()
            ->authority($authority)
            ->send();


        if (!$response->success()) {
            Payments::where('authority', $authority)
                ->update(['payment_status' => 2, 'reference_id' => $response->referenceId()]);
            return "<a href='" . url('loan-register') . "'>" . $response->error()->message() . ' برای برگشت به صفحه پرداخت کلیک کنید' . '</a>';
        } else {

            Payments::where('authority', $authority)
                ->update(['payment_status' => 3, 'reference_id' => $response->referenceId()]);

            return redirect()->to('/followup/tracking-code/' . $payment->paygiri	);
        }
    }


    public function followup_index(Request $request)
    {
        $alarms_footer = Alarms::select('*')->orderBy('id','desc')->limit(3)->get();
        return view('web.loan.followup',compact('alarms_footer'));
    }


    public function followup_national(Request $request, $id)
    {
        $setting = Settings::first();
        $setting_queue = $setting->queue;
        $alarms_footer = Alarms::select('*')->orderBy('id','desc')->limit(3)->get();
        $queue = 0;
        $pay_queue = Payments::where('payment_status', 3)->where('is_used', 0)->orderBy('id', 'ASC')->get();

        $verify = Payments::with('pay_status')->where('idcard',$id)->orderBy('id','desc')->first();
        if(isset($verify)==0)
            return view('web.loan.not_found');
        foreach ($pay_queue as $qu) {
            $queue++;
            if ($qu->paygiri == $verify->paygiri)
                break;
        }



        $pay_id = $verify->paygiri;
        return view('web.loan.followup_result', compact('verify', 'queue', 'pay_id','alarms_footer','setting_queue'));
    }

    public function followup_tracking(Request $request, $id)
    {
        $setting = Settings::first();
        $setting_queue = $setting->queue;
        $alarms_footer = Alarms::select('*')->orderBy('id','desc')->limit(3)->get();
        $queue = 0;
        $pay_queue = Payments::where('payment_status', 3)->where('is_used', 0)->orderBy('id', 'ASC')->get();
        foreach ($pay_queue as $qu) {
            $queue++;
            if ($qu->paygiri == $id)
                break;
        }
        $pay_id = $id;
        $verify = Payments::with('pay_status')->where('paygiri',$id)->orderBy('id','desc')->first();
        if(isset($verify)==0)
            return view('web.loan.not_found');
        $pay_id = $verify->paygiri;

        return view('web.loan.followup_result', compact('verify', 'queue', 'pay_id','alarms_footer','setting_queue'));
    }

    public function alarms(Request $request)
    {
        $alarms_footer = Alarms::select('*')->orderBy('id','desc')->limit(3)->get();
        $alarms = Alarms::orderBy('id','desc')->paginate(13);
        return view('web.alarms.index',compact('alarms','alarms_footer'));
    }

    public function alarms_show($id)
    {
        $alarms_footer = Alarms::select('*')->orderBy('id','desc')->limit(3)->get();
        $alarms = Alarms::find($id);
        return view('web.alarms.show',compact('alarms','alarms_footer'));
    }
}
