<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Models\FormData;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Validator;

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

    public function formBusiness2(Request $request){
        if(empty($request->zip)){
            return Redirect::route('frontend.form.business.1');
        }

        $zip = $request->zip;

        return view('frontend.form-business.form-business-2', compact('zip'));
    }

    public function formBusiness3(Request $request){
        if(empty($request->zip)){
            return Redirect::route('frontend.form.business.1');
        }

        $zip = $request->zip;

        if(empty($request->tax_report)){
            return Redirect::route('frontend.form.business.2', ['zip' => $zip]);
        }

        if($request->tax_report == 'option1'){
            $tax_report = "Lapor Pajak Bulanan";
        }
        else if($request->tax_report == 'option2') {
            $tax_report = "Lapor Pajak Tahunan";
        }
        else{
            $tax_report = "Laporan Keuangan Bulanan";
        }

        $data = [
            'zip'               => $zip,
            'tax_report_option' => $request->tax_report,
            'tax_report'        => $tax_report
        ];

        return view('frontend.form-business.form-business-3')->with($data);
    }

    public function formBusiness4(Request $request){
        if(empty($request->zip)){
            return Redirect::route('frontend.form.business.1');
        }

        $zip = $request->zip;

        if(empty($request->tax_report)){
            return Redirect::route('frontend.form.business.2', ['zip' => $zip]);
        }

        if($request->tax_report == 'option1'){
            $tax_report = "Lapor Pajak Bulanan";
        }
        else if($request->tax_report == 'option2') {
            $tax_report = "Lapor Pajak Tahunan";
        }
        else{
            $tax_report = "Laporan Keuangan Bulanan";
        }

        if(empty($request->omzet)){
            return Redirect::route('frontend.form.business.3', ['zip' => $zip, 'tax_report' => $request->tax_report]);
        }

        if($request->omzet == 'option1'){
            $omzet = "0 - 50 juta";
        }
        else if($request->omzet == 'option2') {
            $omzet = "50 - 400 juta";
        }
        else{
            $finalData = [
                'type'          => 'business',
                'zip'           => $zip,
                'tax_report'    => $request->tax_report,
                'omzet'         => $request->omzet
            ];

            return Redirect::route('frontend.form.final', $finalData);
        }

        $data = [
            'zip'                   => $zip,
            'tax_report'            => $tax_report,
            'tax_report_option'     => $request->tax_report,
            'omzet'                 => $omzet,
            'omzet_option'          => $request->omzet
        ];

        return view('frontend.form-business.form-business-4')->with($data);
    }

    public function formIndividual1(){
        return view('frontend.form-individual.form-individual-1');
    }

    public function formIndividual2(Request $request){
        if(empty($request->zip)){
            return Redirect::route('frontend.form.individual.1');
        }

        $zip = $request->zip;

        return view('frontend.form-individual.form-individual-2', compact('zip'));
    }

    public function formIndividual3(Request $request){
        if(empty($request->zip)){
            return Redirect::route('frontend.form.individual.1');
        }

        $zip = $request->zip;

        if(empty($request->who)){
            return Redirect::back();
        }

        if($request->who == 'option1'){
            $who = "Karyawan";
        }
        else if($request->who == 'option2') {
            $who = "Freelancer";
        }
        else if($request->who == 'option3') {
            $who = "Wiraswasta";
        }
        else{
            $finalData = [
                'type'          => 'individual',
                'zip'           => $zip,
                'who'           => $request->who
            ];

            return Redirect::route('frontend.form.final', $finalData);
        }

        $data = [
            'zip'       => $zip,
            'who'       => $who,
            'who_option'    => $request->who
        ];

        return view('frontend.form-individual.form-individual-3')->with($data);
    }

    public function formFinal(Request $request){
        if(empty($request->type) || empty($request->zip)){
            return Redirect::back();
        }

        if($request->type == 'individual'){
            if(empty($request->who)){
                return Redirect::back();
            }

            // Set default business form values
            $tax_report = 'default';
            $omzet = 'default';
            $package = 'default';

            // Filter who variable
            if($request->who == 'option1'){
                $who = "Karyawan";

                // Filter income for Karyawan
                if($request->income == 'option1'){
                    $income = "<60 juta setahun";
                }
                else if($request->income == 'option2'){
                    $income = "60 - 250 juta setahun";
                }
                else{
                    $income = ">250 juta setahun";
                }
            }
            else if($request->who == 'option2') {
                $who = "Freelancer";

                // Filter income for Freelancer
                if($request->income == 'option1'){
                    $income = "<200 juta setahun";
                }
                else if($request->income == 'option2'){
                    $income = "200 - 400 juta setahun";
                }
                else{
                    $income = ">400 juta setahun";
                }
            }
            else if($request->who == 'option3') {
                $who = "Wiraswasta";

                // Filter income for Wiraswasta
                if($request->income == 'option1'){
                    $income = "<500 juta setahun";
                }
                else if($request->income == 'option2'){
                    $income = "500 - 4,8 miliar setahun";
                }
                else{
                    $income = ">4,8 miliar setahun";
                }
            }
            else{
                $who = "Karyawan >1 tempat kerja";
                $income = 'default';
            }

            $data = [
                'type'          => $request->type,
                'zip'           => $request->zip,
                'who'           => $who,
                'income'        => $income,
                'tax_report'    => $tax_report,
                'omzet'         => $omzet,
                'package'       => $package
            ];
        }
        else{
            if(empty($request->tax_report) || empty($request->omzet)){
                return Redirect::back();
            }

            // Set default individual form values
            $who = 'default';
            $income = 'default';

            // Filter tax report variable
            if($request->tax_report == 'option1'){
                $tax_report = "Lapor Pajak Bulanan";
            }
            else if($request->tax_report == 'option2') {
                $tax_report = "Lapor Pajak Tahunan";
            }
            else{
                $tax_report = "Laporan Keuangan Bulanan";
            }

            // Filter omzet variable
            if($request->omzet == 'option1'){
                $omzet = "0 - 50 juta";
            }
            else if($request->omzet == 'option2') {
                $omzet = "50 - 400 juta";
            }
            else{
                $omzet = ">400 juta";
            }

            // Filter package variable
            if(empty($request->package)){
                $package = 'default';
            }
            else{
                $package = $request->package;
            }

            $data = [
                'type'          => $request->type,
                'zip'           => $request->zip,
                'tax_report'    => $tax_report,
                'omzet'         => $omzet,
                'package'       => $package,
                'who'           => $who,
                'income'        => $income,
            ];
        }

        return view('frontend.form-final')->with($data);
    }

    public function storeForm(Request $request){
        $validator = Validator::make($request->all(),[
            'fname'         => 'required|max:30',
            'lname'         => 'required|max:30',
            'email'         => 'required|max:30',
            'phone'         => 'required|max:20',
            'business'      => 'required|max:30',
            'city'          => 'required|max:20',
            'state'         => 'required|max:20',
            'zip'           => 'required|max:10'
        ],[
            'fname.required'        => 'Nama Pertama wajib diisi',
            'fname.max'             => 'Nama Pertama tidak boleh melebihi 30 huruf',
            'lname.required'        => 'Nama Belakang wajib diisi',
            'lname.max'             => 'Nama Belakang tidak boleh melebihi 30 huruf',
            'email.required'        => 'Alamat email wajib diisi',
            'email.max'             => 'Alamat email tidak boleh melebihi 30 karakter',
            'phone.required'        => 'Nomor Telpon wajib diisi',
            'phone.max'             => 'Nomor Telpon tidak boleh melebihi 20 karakter',
            'business.required'     => 'Bisnis wajib diisi',
            'business.max'          => 'Bisnis tidak boleh melebihi 30 huruf',
            'city.required'         => 'Kota wajib diisi',
            'city.max'              => 'Kota tidak boleh melebihi 20 huruf',
            'state.required'        => 'Provinsi wajib diisi',
            'state.max'             => 'Provinsi tidak boleh melebihi 20 huruf',
            'zip.required'          => 'Kode Pos wajib diisi',
            'zip.max'               => 'Kode Pos tidak boleh melebihi 10 karakter'
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $now = Carbon::now('Asia/Jakarta');

        FormData::create([
            'type'          => $request->input('type'),
            'zip'           => $request->input('zip'),
            'who'           => $request->input('who') === 'default' ? null : $request->input('who'),
            'income'        => $request->input('income') === 'default' ? null : $request->input('income'),
            'tax_report'    => $request->input('tax_report') === 'default' ? null : $request->input('tax_report'),
            'omzet'         => $request->input('omzet') === 'default' ? null : $request->input('omzet'),
            'package'       => $request->input('package') === 'default' ? null : $request->input('package'),
            'fname'         => $request->input('fname'),
            'lname'         => $request->input('lname'),
            'email'         => $request->input('email'),
            'phone'         => $request->input('phone'),
            'business'      => $request->input('business'),
            'city'          => $request->input('city'),
            'state'         => $request->input('state'),
            'company_name'  => $request->input('company_name'),
            'when'          => $request->input('when'),
            'created_at'    => $now->toDateTimeString()
        ]);

        return redirect()->route('frontend.form.thank_you', ['type' => $request->input('type')]);
    }

    public function formThankYou(Request $request){
        if(empty($request->type)){
            return Redirect::back();
        }

        $type = $request->type;
        return view('frontend.form-thankyou', compact('type'));
    }
}
