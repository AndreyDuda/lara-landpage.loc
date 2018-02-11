<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
{
    //
    public function execute($alias){

        if(!$alias){
            abort(404);
        }
        if(view()->exists('site.page')){
            $page = Page::where('alias', $alias)->first();

            return view('site.page', ['page'=>$page]);
        }

    }
}
