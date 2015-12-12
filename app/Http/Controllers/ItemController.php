<?php

namespace Register\Http\Controllers;

use Illuminate\Http\Request;

use Register\Http\Requests;
use Register\Http\Controllers\Controller;
use Register\Item;
class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
     public function getIndex(Request $request) {

        /* $items = \DB::table('items')->get();
         // Output the results
         foreach ($items as $item) {
         echo $item->name.'<br/>';
     } */
        $items = Item::all();
        dump($items->toArray());
        return 'Found items';
    }

    public function index()
    {
        //
            // Use the QueryBuilder to get all the books
        /*$items = \DB::table('items')->get();

        // Output the results
        foreach ($items as $item) {
        echo $item->name.'<br/>';
        */
        $items = \App\Item::all();
        foreach ($items as $item)
        {
            echo $item->name.'<br/>';
        }

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

    public function getEdit($id) {
        $view = '<form method="POST" action="/items/edit">';
        $view .= csrf_field();
        $view .= '<input type="text" name="title">';
        $view .= '<input type="submit">';
        $view .= '<form>';

        return $view;
        //return view('books.create');
    }

    public function posEdit(Request $request)
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
