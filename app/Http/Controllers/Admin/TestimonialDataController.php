<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\TestimonialDatum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TestimonialDataController extends Controller
{
    public function index(){
        $testimonialData = testimonialDatum::all();
        $testimonialData1 = testimonialDatum::where('column', 1)->get();
        $testimonialData2 = testimonialDatum::where('column', 2)->get();
        $testimonialData3 = testimonialDatum::where('column', 3)->get();
        $testimonialData4 = testimonialDatum::where('column', 4)->get();

        // $columnTitle1 = $testimonialData->where('field', 'testimonial_1_title')
        //     ->first();

        // $columnTitle2 = $testimonialData->where('field', 'testimonial_2_title')
        //     ->first();

        // $columnTitle3 = $testimonialData->where('field', 'testimonial_3_title')
        //     ->first();
        
        // $columnTitle4 = $testimonialData->where('field', 'testimonial_4_title')
        //     ->first();

        $columnContent1 = $testimonialData->where('column', 1)
            ->where('field', 'feature');

        $columnContent2 = $testimonialData->where('column',1)
            ->where('field', 'feature');

        $columnContent3 = $testimonialData->where('column', 1)
            ->where('field', 'feature');
        
        $columnContent4 = $testimonialData->where('column', 1)
            ->where('field', 'feature');

        $columnContent5 = $testimonialData->where('column', 1)
            ->where('field', 'name1');

        $columnContent6 = $testimonialData->where('column', 2)
            ->where('field', 'name1');

        $columnContent7 = $testimonialData->where('column', 3)
            ->where('field', 'name1');
        
        $columnContent8 = $testimonialData->where('column', 4)
            ->where('field', 'name1');
        // $column1AutoIndex = $columnContent1->count() + 1;
        // $column2AutoIndex = $columnContent2->count() + 1;
        // $column3AutoIndex = $columnContent3->count() + 1;

        $data = [
            'data'      => $testimonialData,
            'testimonialData1'      => $testimonialData1,
            'testimonialData2'      => $testimonialData2,
            'testimonialData3'      => $testimonialData3,
            'testimonialData4'      => $testimonialData4,
            // 'columnTitle1'      => $columnTitle1->content,
            // 'columnTitle2'      => $columnTitle2->content,
            // 'columnTitle3'      => $columnTitle3->content,
            // 'columnTitle4'      => $columnTitle4->content,
            'columnContent1'    => $columnContent1,
            'columnContent2'    => $columnContent2,
            'columnContent3'    => $columnContent3,
            'columnContent4'    => $columnContent4,
            'columnContent5'    => $columnContent5,
            'columnContent6'    => $columnContent6,
            'columnContent7'    => $columnContent7,
            'columnContent8'    => $columnContent8,
            // 'column1AutoIndex'  => $column1AutoIndex,
            // 'column2AutoIndex'  => $column2AutoIndex,
            // 'column3AutoIndex'  => $column3AutoIndex,
        ];

        return view('admin.testimonial.index')->with($data);
    }

    public function update(Request $request){
        
        $editedColumnItem = testimonialDatum::find($request->input('edited_id'));
        $editedColumnItemBefore = $editedColumnItem;
        $editedColumnItem->content = $request->input('edited_content') ?? "";
        $editedColumnItem->name1 = $request->input('edited_name1') ?? "";
        $editedColumnItem->name2 = $request->input('edited_name2') ?? "";
        
        $editedColumnItem->save();
        
        Session::flash('success', 'Successfully update testimonial');
        return redirect()->route('admin.testimonial.index');
    }
}
