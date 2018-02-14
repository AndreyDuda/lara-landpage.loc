<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PagesEditController extends Controller
{
    //
    public function execute(Page $page, Request $request){

       $old = $page->toArray();
        if(view()->exists('admin.page_edit')){
            $data = [
                'title' => 'Редактирование страницы - ' . $old['name'],
                'data'  => $old
            ];

            return view('admin.page_edit', $data);
        }
    }
}
