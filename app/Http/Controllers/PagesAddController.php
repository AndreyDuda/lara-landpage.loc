<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use Validator;

class PagesAddController extends Controller
{
    //
    public function execute(Request $request){

        if($validator->fails()){
            return redirect()->route('pagesAdd')->withErrors($validator)->withInput();
        }

        if( $request->isMethod('post') ){
           $input = $request->except('_token');
           $validator = Validator::make($input, [
               'name'  => 'required|max:255',
               'alias' => 'required|max:255|unique:pages',
               'text'  => 'required'
           ]);

           if($request->hasFile('images')){
               $file = $request->file('images');
               $input['images'] = $file->getClientOriginalName();
               $file->move(public_path() . '/assets/img', $input['images'] );
           }

           $page = new Page();
           $page->fill($input);
           if( $page->save() ){
               return redirect('admin')->with('status', 'Cтраница добавлена');
           }
        }


        if(view()->exists('admin.pages_add')){

            $data =[
                'title' => 'Новая страница',
            ];
            return view('admin.pages_add', $data);
        }
        abort(404);
    }
}
