<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\PackageDatum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PackageDataController extends Controller
{
    public function index(){
        $packageData = PackageDatum::all();

        $columnTitle1 = $packageData->where('field', 'package_1_title')
            ->first();

        $columnTitle2 = $packageData->where('field', 'package_2_title')
            ->first();

        $columnTitle3 = $packageData->where('field', 'package_3_title')
            ->first();

        $columnContent1 = $packageData->where('column', 1)
            ->where('field', 'feature')
            ->sortBy('index');;

        $columnContent2 = $packageData->where('column', 2)
            ->where('field', 'feature')
            ->sortBy('index');;

        $columnContent3 = $packageData->where('column', 3)
            ->where('field', 'feature')
            ->sortBy('index');;

        $column1AutoIndex = $columnContent1->count() + 1;
        $column2AutoIndex = $columnContent2->count() + 1;
        $column3AutoIndex = $columnContent3->count() + 1;

        $data = [
            'columnTitle1'      => $columnTitle1->content,
            'columnTitle2'      => $columnTitle2->content,
            'columnTitle3'      => $columnTitle3->content,
            'columnContent1'    => $columnContent1,
            'columnContent2'    => $columnContent2,
            'columnContent3'    => $columnContent3,
            'column1AutoIndex'  => $column1AutoIndex,
            'column2AutoIndex'  => $column2AutoIndex,
            'column3AutoIndex'  => $column3AutoIndex,
        ];

        return view('admin.package.index')->with($data);
    }

    public function update(Request $request){
        $packageData = PackageDatum::all();

        $columnTitle1 = $packageData->where('field', 'package_1_title')
            ->first();
        $columnTitle1 = $request->input('column_title_1');
        $columnTitle1->save();

        $columnTitle2 = $packageData->where('field', 'package_2_title')
            ->first();
        $columnTitle2 = $request->input('column_title_2');
        $columnTitle2->save();

        $columnTitle3 = $packageData->where('field', 'package_3_title')
            ->first();
        $columnTitle3 = $request->input('column_title_3');
        $columnTitle3->save();

        Session::flash('success', 'Successfully updated package data');
        return redirect()->route('admin.package.index');
    }

    public function storeColumnItem(Request $request){
        $newIndex = intval($request->input('added_index'));
        $newColumn = $request->input('added_column');
        //dd($request->input('added_feature_disabled'));

        $columnContents = PackageDatum::where('column', $newColumn)
            ->where('index', '>=', 1)
            ->get();

        if($newIndex <= 0 || $newIndex > $columnContents->count() + 1){
            $newIndex = $columnContents->count() + 1;
        }

        $rowAfters = PackageDatum::where('index', '>=', $newIndex)
            ->where('field', 'feature')
            ->where('column', $newColumn)
            ->get();

        if($rowAfters->count() > 0){
            foreach ($rowAfters as $row){
                $row->index = $row->index + 1;
                $row->save();
            }
        }

        $newPackageData = PackageDatum::create([
            'column'        => $newColumn,
            'index'         => $newIndex,
            'field'         => 'feature',
            'content'       => $request->input('added_content') ?? "",
            'is_disabled'   => $request->input('added_feature_disabled') ?? 0,
        ]);

        Session::flash('success', 'Successfully added new package item');
        return redirect()->route('admin.package.index');
    }

    public function updateColumnItem(Request $request){
        $editedColumnItem = PackageDatum::find($request->input('edited_id'));
        $editedColumnItem->content = $request->input('edited_content') ?? "";
        $editedColumnItem->is_disabled = $request->input('edited_feature_disabled') ?? 0;

        $editedIndex = intval($request->input('edited_index'));

        $columnContents = PackageDatum::where('column', $editedColumnItem->column)
            ->where('index', '>=', 1)
            ->get();

        if($editedIndex <= 0 || $editedIndex > $columnContents->count()){
            $editedIndex = $editedColumnItem->index;
        }

        if($editedColumnItem->index != $editedIndex){
            if($editedColumnItem->index - 1 == $editedIndex || $editedColumnItem->index + 1 == $editedIndex){

                // Switch index
                $tmpColumnItem = PackageDatum::where('index', $editedIndex)
                    ->where('column', $editedColumnItem->column)
                    ->first();

                $tmpColumnItem->index = $editedColumnItem->index;
                $tmpColumnItem->save();
            }
            else {
                if($editedIndex > $editedColumnItem->index){

                    // Reorder index
                    $changedColumnItems = PackageDatum::where('index', '>', $editedColumnItem->index)
                        ->where('index', '<=', $editedIndex)
                        ->where('column', $editedColumnItem->column)
                        ->get();

                    foreach ($changedColumnItems as $columnItem){
                        $columnItem->index -= 1;
                        $columnItem->save();
                    }
                }
                else if($editedIndex < $editedColumnItem->index){

                    // Reorder index
                    $changedColumnItems = PackageDatum::where('index', '<=', $editedColumnItem->index)
                        ->where('index', '>', $editedIndex)
                        ->where('column', $editedColumnItem->column)
                        ->get();

                    foreach ($changedColumnItems as $columnItem){
                        $columnItem->index += 1;
                        $columnItem->save();
                    }
                }
            }

            $editedColumnItem->index = $editedIndex;
        }
        $editedColumnItem->save();

        Session::flash('success', 'Successfully updated package item');
        return redirect()->route('admin.package.index');
    }

    public function destroyColumnItem(Request $request){
        $deletedId = $request->input('deleted_id');
        $deletedColumnItem = PackageDatum::find($deletedId);

        // Reorder index
        $changedColumnItems = PackageDatum::where('index', '>', $deletedColumnItem->index)
            ->where('field', 'feature')
            ->where('column', $deletedColumnItem->column)
            ->get();

        foreach ($changedColumnItems as $columnItem){
            $columnItem->index -= 1;
            $columnItem->save();
        }

        $deletedColumnItem->delete();

        Session::flash('success', 'Successfully removed a package item');
        return redirect()->route('admin.package.index');
    }
}