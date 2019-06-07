<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PackageDatum;
use App\Models\WpPost;
use App\Models\WpPostmetum;
use App\Models\TestimonialDatum;
use App\Models\CarakerjaDatum;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

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
        $testimonialData = testimonialDatum::all();
        $content = testimonialDatum::select('content')->where('column', 1)->where('index', 1)->first();

        $carakerjaData = carakerjaDatum::all();
        $content = carakerjaDatum::select('content')->where('column', 1)->where('index', 1)->first();

        $data = [
            'testimonials' => $testimonialData,
            'cara_kerja' => $carakerjaData
        ];
        return view('frontend.home')->with($data);

//        return view('frontend.home');

    }

    public function formBusiness1(){
        return view('frontend.form-business.form-business-1');
    }

    public function formBusiness2(){
        return view('frontend.form-business.form-business-2');
    }

    public function formBusiness3(Request $request){
        if(empty($request->tax_report)){
            return Redirect::route('frontend.form.business.2');
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
            'tax_report_option' => $request->tax_report,
            'tax_report'        => $tax_report
        ];

        return view('frontend.form-business.form-business-3')->with($data);
    }

    public function formBusiness4(Request $request){
        if(empty($request->tax_report)){
            return Redirect::route('frontend.form.business.2');
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
            return Redirect::route('frontend.form.business.3', ['tax_report' => $request->tax_report]);
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
                'tax_report'    => $request->tax_report,
                'omzet'         => $request->omzet
            ];

            return Redirect::route('frontend.form.final', $finalData);
        }

        // Read package data
        $packageData = PackageDatum::all();

        $columnTitle1 = $packageData->where('field', 'package_1_title')
            ->first();

        $columnTitle2 = $packageData->where('field', 'package_2_title')
            ->first();

        $columnTitle3 = $packageData->where('field', 'package_3_title')
            ->first();

        $columnContent1 = PackageDatum::where('column', 1)
            ->where('field', 'feature')
            ->orderBy('index')
            ->get();

        $columnContent2 = PackageDatum::where('column', 2)
            ->where('field', 'feature')
            ->orderBy('index')
            ->get();

        $columnContent3 = PackageDatum::where('column', 3)
            ->where('field', 'feature')
            ->orderBy('index')
            ->get();

        $arrCount = array($columnContent1->count(), $columnContent2->count(), $columnContent3->count());
        $maxCount = max($arrCount);
//        dd($maxCount);

        $data = [
            'tax_report'            => $tax_report,
            'tax_report_option'     => $request->tax_report,
            'omzet'                 => $omzet,
            'omzet_option'          => $request->omzet,
            'columnTitle1'          => $columnTitle1->content,
            'columnTitle2'          => $columnTitle2->content,
            'columnTitle3'          => $columnTitle3->content,
            'columnContent1'        => $columnContent1,
            'columnContent2'        => $columnContent2,
            'columnContent3'        => $columnContent3,
            'maxCount'              => $maxCount
        ];

        return view('frontend.form-business.form-business-4')->with($data);
    }

    public function formIndividual1(){
        return view('frontend.form-individual.form-individual-1');
    }

    public function formIndividual2(){
        return view('frontend.form-individual.form-individual-2');
    }

    public function formIndividual3(Request $request){
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
                'who'           => $request->who
            ];

            return Redirect::route('frontend.form.final', $finalData);
        }

        $data = [
            'who'           => $who,
            'who_option'    => $request->who
        ];

        return view('frontend.form-individual.form-individual-3')->with($data);
    }

    public function formFinal(Request $request){
        if(empty($request->type)){
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

        $newWpPost = WpPost::create([
            'post_author'       => 2,
            'post_date'         => $now->toDateTimeString(),
            'post_date_gmt'     => $now->toDateTimeString(),
            'post_content'      => "",
            'post_title'        => "",
            'post_excerpt'      => "",
            'post_status'       => "publish",
            'comment_status'    => "closed",
            'ping_status'       => "closed",
            'post_password'     => "",
            'to_ping'           => "" ,
            'pinged'            => "",
            'post_modified'     => $now->toDateTimeString(),
            'post_modified_gmt' => $now->toDateTimeString(),
            'post_content_filtered' => "",
            'post_parent'       => 0,
            'menu_order'        => 0,
            'post_type'         => "nf_sub",
            'post_mime_type'    => "",
            'comment_count'     => 0
        ]);

        $newWpPost->post_name = $newWpPost->ID;
        $newWpPost->guid = 'http://blog.uruspajak.id/index.php/nf_sub/'. $newWpPost->ID. '/';
        $newWpPost->save();

        WpPostmetum::create([
            'post_id'       => $newWpPost->ID,
            'meta_key'      => '_field_6',
            'meta_value'    => $request->input('type')
        ]);

        WpPostmetum::create([
            'post_id'       => $newWpPost->ID,
            'meta_key'      => '_field_5',
            'meta_value'    => $request->input('zip')
        ]);

        WpPostmetum::create([
            'post_id'       => $newWpPost->ID,
            'meta_key'      => '_field_17',
            'meta_value'    => $request->input('who') === 'default' ? '' : $request->input('who')
        ]);

        WpPostmetum::create([
            'post_id'       => $newWpPost->ID,
            'meta_key'      => '_field_18',
            'meta_value'    => $request->input('income') === 'default' ? '' : $request->input('income')
        ]);

        WpPostmetum::create([
            'post_id'       => $newWpPost->ID,
            'meta_key'      => '_field_19',
            'meta_value'    => $request->input('tax_report') === 'default' ? '' : $request->input('tax_report')
        ]);

        WpPostmetum::create([
            'post_id'       => $newWpPost->ID,
            'meta_key'      => '_field_20',
            'meta_value'    => $request->input('omzet') === 'default' ? '' : $request->input('omzet')
        ]);

        WpPostmetum::create([
            'post_id'       => $newWpPost->ID,
            'meta_key'      => '_field_7',
            'meta_value'    => $request->input('package') === 'default' ? '' : $request->input('package')
        ]);

        WpPostmetum::create([
            'post_id'       => $newWpPost->ID,
            'meta_key'      => '_field_8',
            'meta_value'    => $request->input('fname')
        ]);

        WpPostmetum::create([
            'post_id'       => $newWpPost->ID,
            'meta_key'      => '_field_9',
            'meta_value'    => $request->input('lname')
        ]);

        WpPostmetum::create([
            'post_id'       => $newWpPost->ID,
            'meta_key'      => '_field_2',
            'meta_value'    => $request->input('email')
        ]);

        WpPostmetum::create([
            'post_id'       => $newWpPost->ID,
            'meta_key'      => '_field_10',
            'meta_value'    => $request->input('phone')
        ]);

        WpPostmetum::create([
            'post_id'       => $newWpPost->ID,
            'meta_key'      => '_field_11',
            'meta_value'    => $request->input('business')
        ]);

        WpPostmetum::create([
            'post_id'       => $newWpPost->ID,
            'meta_key'      => '_field_12',
            'meta_value'    => $request->input('city')
        ]);

        WpPostmetum::create([
            'post_id'       => $newWpPost->ID,
            'meta_key'      => '_field_13',
            'meta_value'    => $request->input('state')
        ]);

        WpPostmetum::create([
            'post_id'       => $newWpPost->ID,
            'meta_key'      => '_field_15',
            'meta_value'    => $request->input('company_name')
        ]);

        WpPostmetum::create([
            'post_id'       => $newWpPost->ID,
            'meta_key'      => '_field_1',
            'meta_value'    => $request->input('when')
        ]);

        WpPostmetum::create([
            'post_id'       => $newWpPost->ID,
            'meta_key'      => '_form_id',
            'meta_value'    => '1'
        ]);

        // Get last sequence number
        $postMetaList = WpPostmetum::where('meta_key', '_seq_num')
            ->orderBy('post_id', 'desc')
            ->get();

        $lastSeqNum = $postMetaList->first()->meta_value;
        $lastSeqNumInt = (int) $lastSeqNum;
        $lastSeqNumInt++;

        WpPostmetum::create([
            'post_id'       => $newWpPost->ID,
            'meta_key'      => '_seq_num',
            'meta_value'    => $lastSeqNumInt. ''
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
