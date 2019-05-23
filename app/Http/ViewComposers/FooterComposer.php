<?php


namespace App\Http\ViewComposers;


use App\Models\FooterDatum;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class FooterComposer
{
    public $columnParagraph1;
    public $columnTitle2;
    public $columnTitle3;
    public $addressLine1;
    public $addressLine2;
    public $contactPhone;
    public $contactEmail;
    public $copyright;
    public $facebookLink;
    public $twitterLink;
    public $instagramLink;
    public $column2Contents;
    public $column3Contents;

    public function __construct()
    {
        $footerData = FooterDatum::all();

        $columnParagraph1 = $footerData->where('column', 1)
            ->where('index', 0)
            ->first();
        $this->columnParagraph1 = $columnParagraph1->content;

        $columnTitle2 = $footerData->where('column', 2)
            ->where('index', 0)
            ->first();
        $this->columnTitle2 = $columnTitle2->content;

        $columnTitle3 = $footerData->where('column', 3)
            ->where('index', 0)
            ->first();
        $this->columnTitle3 = $columnTitle3->content;

        $addressLine1 = $footerData->where('field', 'address_line_1')
            ->first();
        $this->addressLine1 = $addressLine1->content;

        $addressLine2 = $footerData->where('field', 'address_line_2')
            ->first();
        $this->addressLine2 = $addressLine2->content;

        $contactPhone = $footerData->where('field', 'contact_phone')
            ->first();
        $this->contactPhone =  $contactPhone->content;

        $contactEmail = $footerData->where('field', 'contact_email')
            ->first();
        $this->contactEmail = $contactEmail->content;

        $copyright = $footerData->where('field', 'copyright')
            ->first();
        $this->copyright = $copyright->content;

        $facebookLink = $footerData->where('field', 'facebook')
            ->first();
        $this->facebookLink = $facebookLink->link;

        $twitterLink = $footerData->where('field', 'twitter')
            ->first();
        $this->twitterLink = $twitterLink->link;

        $instagramLink = $footerData->where('field', 'instagram')
            ->first();
        $this->instagramLink = $instagramLink->link;

        $column2Contents = $footerData->where('column', 2)
            ->where('index', '>=', 1)
            ->sortBy('index');
        $this->column2Contents = $column2Contents;

        $column3Contents = $footerData->where('column', 3)
            ->where('index', '>=', 1)
            ->sortBy('index');
        $this->column3Contents = $column3Contents;
    }

    public function compose(View $view)
    {
        $data = [
            'columnParagraph1'  => $this->columnParagraph1,
            'columnTitle2'      => $this->columnTitle2,
            'columnTitle3'      => $this->columnTitle3,
            'addressLine1'      => $this->addressLine1,
            'addressLine2'      => $this->addressLine2,
            'contactPhone'      => $this->contactPhone,
            'contactEmail'      => $this->contactEmail,
            'copyright'         => $this->copyright,
            'facebookLink'      => $this->facebookLink,
            'twitterLink'       => $this->twitterLink,
            'instagramLink'     => $this->instagramLink,
            'column2Contents'   => $this->column2Contents,
            'column3Contents'   => $this->column3Contents,
        ];
        $view->with($data);
    }
}