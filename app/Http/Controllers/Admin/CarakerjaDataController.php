<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\CarakerjaDatum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CarakerjaDataController extends Controller
{
    public function index(){
        $carakerjaData = carakerjaDatum::all();
        $carakerjaData1 = carakerjaDatum::where('column', 1)->get();
        $carakerjaData2 = carakerjaDatum::where('column', 2)->get();
        $carakerjaData3 = carakerjaDatum::where('column', 3)->get();
        $carakerjaData4 = carakerjaDatum::where('column', 4)->get();

        $columnTitle1 = $carakerjaData->where('column', 1)
            ->first();

        $columnTitle2 = $carakerjaData->where('column', 2)
            ->first();

        $columnTitle3 = $carakerjaData->where('column', 3)
            ->first();
        
        $columnTitle4 = $carakerjaData->where('column', 4)
            ->first();

        $columnContent1 = $carakerjaData->where('column', 1)
            ->where('field', 'feature');

        $columnContent2 = $carakerjaData->where('column',1)
            ->where('field', 'feature');

        $columnContent3 = $carakerjaData->where('column', 1)
            ->where('field', 'feature');
        
        $columnContent4 = $carakerjaData->where('column', 1)
            ->where('field', 'feature');

        $columnContent5 = $carakerjaData->where('column', 1)
            ->where('field', 'name1');

        $columnContent6 = $carakerjaData->where('column', 2)
            ->where('field', 'name1');

        $columnContent7 = $carakerjaData->where('column', 3)
            ->where('field', 'name1');
        
        $columnContent8 = $carakerjaData->where('column', 4)
            ->where('field', 'name1');

        // $column1AutoIndex = $columnContent1->count() + 1;
        // $column2AutoIndex = $columnContent2->count() + 1;
        // $column3AutoIndex = $columnContent3->count() + 1;

        $data = [
            'data'      => $carakerjaData,
            'carakerjaData1'      => $carakerjaData1,
            'carakerjaData2'      => $carakerjaData2,
            'carakerjaData3'      => $carakerjaData3,
            'carakerjaData4'      => $carakerjaData4,
            'columnTitle1'      => $columnTitle1->content,
            'columnTitle2'      => $columnTitle2->content,
            'columnTitle3'      => $columnTitle3->content,
            'columnTitle4'      => $columnTitle4->content,
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

        return view('admin.carakerja.index')->with($data);
    }

    public function update(Request $request){
        
        $editedColumnItem = carakerjaDatum::find($request->input('edited_id'));
        $editedColumnItemBefore = $editedColumnItem;
        $editedColumnItem->title = $request->input('edited_title') ?? "";
        $editedColumnItem->content = $request->input('edited_content') ?? "";
        
        $editedColumnItem->save();
        
        Session::flash('success', 'Successfully update carakerja');
        return redirect()->route('admin.carakerja.index');
    }
}


