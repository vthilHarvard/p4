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
                'participant_count' => 'required | integer| min:1, max:8 '
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
        $item->user_id = \Auth::user()->id;
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



    /**
    * Responds to requests to GET /items/edit/{$id}
    */
    public function getEdit($id = null) {
        $item = new Item();
        $item = Item::find($id);
        if(is_null($item)) {
            \Session::flash('flash_message','Item not found.');
            return redirect('/items');
        }
        //var_dump($item->toArray());

        //return 'ready to edit item';
        //return $item->school.' '.$item->name;
        return view('items.edit')->with('item', $item);

    }

    public function postEdit(Request $request)
    {

        echo 'In post edit';
        $item = Item::find($request->id);
       $this->validate(
            $request,
            [
                'school' => 'required|min:5',
                'name' => 'required|min:5',
                'type' => 'required|in:"Dance", "Music", "Skit"',
                'audition_link' => 'required | url',
                'participant_count' => 'required | integer| min:1, max:8 '
              ]
        );
        //dump($request->all());
        //Debugbar::info($request->all());
        //var_dump($request->all());
        // Code here to enter item into the database
        $item->school = $request->school;
        $item->name = $request->name;
        $item->type = $request->type;
        $item->audition_link = $request->audition_link;
        $item->participant_count = $request->participant_count;
        $item->user_id = \Auth::user()->id;
        $item->description = $request->description;
        //echo 'Status is '.$request->status;
        if ($request->status == 'yes')
        {
            $item->status = 'Submitted';
        }
        else {
            $item->status = 'Incomplete';
        }
        $item->special_notes = $request->special_notes;
        $item->save();
        //\Session::flash('flash_message','You updated your item '.$item->name);
        // Confirm  was entered:
        //return 'Process adding new item: '.$request->input('title');
        //return view()
        //\Session::flash('flash_message','Your item was added!'); */
        //return redirect('/items/edit/'.$request->id);
        return redirect('/items/show-update');
    }

    /**
	*
	*/
    public function getConfirmDelete($item_id) {
        $item = Item::find($item_id);
        //var_dump($item->toArray());
        return view('items.delete')->with('item', $item);
    }
    /**
	*
	*/
    public function getDoDelete($item_id) {
        $item = Item::find($item_id);
        if(is_null($item)) {
            \Session::flash('flash_message','item not found.');
            return redirect('/items');
        }

        $item->delete();
        \Session::flash('flash_message',"Item ".$item->name.' was deleted.');
        return redirect('/items');
    }
    public function getShowUpdate(Request $request) {

      // $items = Item::all();
       $items = Item::where('user_id','=',\Auth::user()->id)
       ->where('status','=', 'Incomplete')
       ->get();
       //dump($items->toArray());
       if (count($items) > 0)
       {
           return view('items.show-update')->with('items',$items);
       }
       else {
        \Session::flash('flash_message',"You have no items for updates.");
        return redirect('/items');
       }
   }

    public function destroy($id)
    {
        //
    }
}
