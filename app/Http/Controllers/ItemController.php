<?php

namespace Register\Http\Controllers;

use Illuminate\Http\Request;

use Register\Http\Requests;
use Register\Http\Controllers\Controller;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return 'In index page of items';
    }

    public function getCreate() {
        $view = '<form method="POST" action="/items/create">';
        $view .= csrf_field();
        $view .= '<input type="text" name="title">';
        $view .= '<input type="submit">';
        $view .= '<form>';

        return $view;
        //return view('books.create');
    }

    public function postCreate(Request $request)
    {

       $this->validate(
           $request,
           ['title' => 'required|min:5',  ]
       );

       return 'Process adding new item: '.$request->input('title');
    }

    public function destroy($id)
    {
        //
    }
}
