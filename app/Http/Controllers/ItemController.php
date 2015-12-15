<?php

namespace Register\Http\Controllers;

use Illuminate\Http\Request;

use Register\Http\Requests;
use Register\Http\Controllers\Controller;
use Register\Item;
use Debugbar;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
     public function getIndex(Request $request) {

        $items = Item::all();
        //dump($items->toArray());
        return view('items.index')->with('items',$items);
    }

    public function index()
    {

        $items = Item::all();
        foreach ($items as $item)
        {
            echo $item->name.'<br/>';
        }

        return 'In index page of items';
    }

    public function getCreate() {
        /*$view = '<form method="POST" action="/items/create">';
        $view .= csrf_field();
        $view .= '<input type="text" name="title">';
        $view .= '<input type="submit">';
        $view .= '</form>'; */
        Debugbar::info('test');
        if (isset($request))
            Debugbar::info($request->all());
        return view('items.create');
        //return view('items.create');
    }

    public function postCreate(Request $request) {

        $this->validate(
            $request,
            [
                'school' => 'required|min:5',
                'name' => 'required|min:5',
                'type' => 'required|in:"Dance", "Music", "Skit"',
                'audition_link' => 'required | url',
              ]
        );
        //dump($request->all());
        //Debugbar::info($request->all());
        //var_dump($request->all());
        // Code here to enter item into the database
        $item = new Item();
        $item->school = $request->school;
        $item->name = $request->name;
        $item->type = $request->type;
        $item->audition_link = $request->audition_link;
        $item->participant_count = $request->participant_count;
        $item->user_id = 1001;
        $item->description = $request->description;
        $item->status = 'Incomplete';
        echo 'Status is '.$request->status; //Status is incomplete to start wtih
        if ($request->status == 'yes')
        {
            $item->status = 'Submitted';
        }
        else {
            $item->status = 'Incomplete';# code...
        }
        $item->special_notes = $request->special_notes;
        $item->save();
        \Session::flash('flash_message','You created a new item!');
        // Confirm  was entered:
        //return 'Process adding new item: '.$request->input('title');
        //return view()
        //\Session::flash('flash_message','Your item was added!');
        return view('items.create'); //->with('request', $request);
        //return redirect('/items/create')->with('request', $request);
    }


    public function getEdit($id) {
        /*$view = '<form method="POST" action="/items/edit">';
        $view .= csrf_field();
        $view .= '<input type="text" name="title">';
        $view .= '<input type="submit">';
        $view .= '<form>';

        return $view; */
        return view('items.edit');
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
