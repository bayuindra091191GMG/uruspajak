<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\PackageDatum;

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
            ->where('field', 'feature');

        $columnContent2 = $packageData->where('column', 2)
            ->where('field', 'feature');

        $columnContent3 = $packageData->where('column', 3)
            ->where('field', 'feature');

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
}