<?php

namespace App\Http\Controllers\Front; 

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Faq;

class FaqController extends Controller
{

    protected $faq;

    public function __construct(Faq $faq)
    {
        $this->faq = $faq;

    }
    
    public function index()
    {

        $view = View::make('front.pages.faqs.index')
        ->with('faq', $this->faq)
        ->with('faqs', $this->faq->where('active', 1)->where('visible', 1)->get());

        return $view;
    }
}