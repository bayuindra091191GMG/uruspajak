<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\FooterDatum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FooterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the footer setting
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footerData = FooterDatum::all();

        $columnParagraph1 = $footerData->where('column', 1)
            ->where('index', 0)
            ->first();

        $columnTitle2 = $footerData->where('column', 2)
            ->where('index', 0)
            ->first();

        $columnTitle3 = $footerData->where('column', 3)
            ->where('index', 0)
            ->first();

        $addressLine1 = $footerData->where('field', 'address_line_1')
            ->first();

        $addressLine2 = $footerData->where('field', 'address_line_2')
            ->first();

        $addressLine3 = $footerData->where('field', 'address_line_3')
            ->first();

        $contactPhone = $footerData->where('field', 'contact_phone')
            ->first();

        $contactEmail = $footerData->where('field', 'contact_email')
            ->first();

        $column2Contents = $footerData->where('column', 2)
            ->where('index', '>=', 1)
            ->sortBy('index');

        $column3Contents = $footerData->where('column', 3)
            ->where('index', '>=', 1)
            ->sortBy('index');

        $column2AutoIndex = $column2Contents->count() + 1;
        $column3AutoIndex = $column3Contents->count() + 1;

        $data = [
            'columnParagraph1'  => $columnParagraph1->content,
            'columnTitle2'      => $columnTitle2->content,
            'columnTitle3'      => $columnTitle3->content,
            'addressLine1'      => $addressLine1->content,
            'addressLine2'      => $addressLine2->content,
            'addressLine3'      => $addressLine3->content,
            'contactPhone'      => $contactPhone->content,
            'contactEmail'      => $contactEmail->content,
            'column2Contents'   => $column2Contents,
            'column3Contents'   => $column3Contents,
            'column2AutoIndex'  => $column2AutoIndex,
            'column3AutoIndex'  => $column3AutoIndex
        ];

        return view('admin.footer.index')->with($data);
    }

    public function update(Request $request){
        $footerData = FooterDatum::all();

        $columnParagraph1 = $footerData->where('column', 1)
            ->where('index', 0)
            ->first();
        $columnParagraph1->content = $request->input('column_1_paragraph') ?? "";
        $columnParagraph1->save();

        $columnTitle2 = $footerData->where('column', 2)
            ->where('index', 0)
            ->first();
        $columnTitle2->content = $request->input('column_title_2') ?? "";
        $columnTitle2->save();

        $columnTitle3 = $footerData->where('column', 3)
            ->where('index', 0)
            ->first();
        $columnTitle3->content = $request->input('column_title_3') ?? "";
        $columnTitle3->save();

        $addressLine1 = $footerData->where('field', 'address_line_1')
            ->first();
        $addressLine1->content = $request->input('address_line_1') ?? "";
        $addressLine1->save();

        $addressLine2 = $footerData->where('field', 'address_line_2')
            ->first();
        $addressLine2->content = $request->input('address_line_2') ?? "";
        $addressLine2->save();

        $addressLine3 = $footerData->where('field', 'address_line_3')
            ->first();
        $addressLine3->content = $request->input('address_line_3') ?? "";
        $addressLine3->save();

        $contactPhone = $footerData->where('field', 'contact_phone')
            ->first();
        $contactPhone->content = $request->input('contact_phone') ?? "";
        $contactPhone->save();

        $contactEmail = $footerData->where('field', 'contact_email')
            ->first();
        $contactEmail->content = $request->input('contact_email') ?? "";
        $contactEmail->save();

        Session::flash('success', 'Successfully update footer');
        return redirect()->route('admin.footer.index');
    }

    public function storeColumnItem(Request $request){
        $newIndex = intval($request->input('added_index'));
        $newColumn = $request->input('added_column');

        $columnContents = FooterDatum::where('column', $newColumn)
            ->where('index', '>=', 1)
            ->get();

        if($newIndex <= 0 || $newIndex > $columnContents->count() + 1){
            $newIndex = $columnContents->count() + 1;
        }

        $rowAfters = FooterDatum::where('index', '>=', $newIndex)
            ->where('field', 'navigation')
            ->where('column', $newColumn)
            ->get();

        if($rowAfters->count() > 0){
            foreach ($rowAfters as $row){
                $row->index = $row->index + 1;
                $row->save();
            }
        }

        $newFooterData = FooterDatum::create([
            'column'        => $newColumn,
            'index'         => $newIndex,
            'field'         => 'navigation',
            'content'       => $request->input('added_content') ?? "",
            'link'          => $request->input('added_linkt') ?? "",
        ]);

        Session::flash('success', 'Successfully added new column 2 item');
        return redirect()->route('admin.footer.index');
    }

    public function updateColumnItem(Request $request){
        $editedColumnItem = FooterDatum::find($request->input('edited_id'));
        $editedColumnItem->content = $request->input('edited_content') ?? "";
        $editedColumnItem->link = $request->input('edited_link') ?? "";

        $editedIndex = intval($request->input('edited_index'));

        $columnContents = FooterDatum::where('column', $editedColumnItem->column)
            ->where('index', '>=', 1)
            ->get();

        if($editedIndex <= 0 || $editedIndex > $columnContents->count()){
            $editedIndex = $editedColumnItem->index;
        }

        if($editedColumnItem->index != $editedIndex){
            //dd("true");
            if($editedColumnItem->index - 1 == $editedIndex || $editedColumnItem->index + 1 == $editedIndex){
                $tmpColumnItem = FooterDatum::where('index', $editedIndex)
                    ->where('column', $editedColumnItem->column)
                    ->first();

                $tmpColumnItem->index = $editedColumnItem->index;
                $tmpColumnItem->save();
            }
            else {
                if($editedIndex > $editedColumnItem->index){
                    $changedColumnItems = FooterDatum::where('index', '>', $editedColumnItem->index)
                        ->where('index', '<=', $editedIndex)
                        ->get();

                    foreach ($changedColumnItems as $columnItem){
                        $columnItem->index -= 1;
                        $columnItem->save();
                    }
                }
                else if($editedIndex < $editedColumnItem->index){
                    $changedColumnItems = FooterDatum::where('index', '<=', $editedColumnItem->index)
                        ->where('index', '>', $editedIndex)
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

        Session::flash('success', 'Successfully updated new column 2 item');
        return redirect()->route('admin.footer.index');
    }
}