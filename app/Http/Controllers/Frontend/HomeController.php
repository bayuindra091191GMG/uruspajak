<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.home');
    }

    public function formBusiness1(){
        return view('frontend.form-business.form-business-1');
    }

    public function formBusiness2(){
        return view('frontend.form-business.form-business-2');
    }

    public function formBusiness4(){
        return view('frontend.form-business.form-business-4');
    }

    public function formFinal(){
        return view('frontend.form-final');
    }

    public function location(){
        return view('frontend.location');
    }

    public function developer(){
        return view('frontend.developer');
    }

    public function planMaster(){
        return view('frontend.plan-master');
    }

    public function planFloor(){
        return view('frontend.plan-floor');
    }

    public function planUnit(){
        return view('frontend.plan-unit');
    }

    public function features(){
        return view('frontend.features');
    }

    public function contactUs(){
        return view('frontend.contact-us');
    }

    public function saveContactUs(Request $request){
        $data = ContactMessage::create([
            'name'          => $request->input('name'),
            'email'         => $request->input('email'),
            'message'       => $request->input('message'),
            'created_at'    => Carbon::now('Asia/Jakarta')
        ]);

        Session::flash('success', 'Thank you for Contacting us!');
        return redirect()->route('frontend.contactUs');
    }
}
