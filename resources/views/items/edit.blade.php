@extends('layouts.master')

@section('title')
    America's kids got talent
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
    <!-- <link href="/css/books/show.css" type='text/css' rel='stylesheet'> -->
@stop

@section('sub-heading')
  Edit an item
@stop


@section('content')
    <h2 class="text-muted text-center">Edit an item</h2>
     @if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

   <form class="form-horizontal" method='POST' action='/items/edit'>
        <input type='hidden' value='{{ csrf_token() }}' name='_token'>
       <input type='hidden' name='id' value='{{ $item->id }}'>
        <div class="form-group">
            <label class="col-sm-2 control-label" for='school'>* School name:</label>
            <div class="col-sm-4">
                <input class="form-control"
                    size="35"
                    type='text'
                    id='school'
                    name='school'
                    value='{{ $item->school }}'
                >
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for='name'>* Item name:</label>
            <div class="col-sm-4">
            <input class="form-control"
                type='text'
                id='name'
                name="name"
                value='{{ $item->name }}'
            >
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for='type'>* Item type:</label>
            <div class="col-sm-2">
                <select class="form-control input-sm" id='type' name='type' value='{{ $item->type }}'>
                  <option value="Dance" {{$item->type=='Dance'? 'selected':''}}>Dance</option>
                  <option value="Music" {{$item->type=='Music'? 'selected':''}}>Music</option>
                  <option value="Skit" {{$item->type=='Skit'? 'selected':''}}>Skit</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for='participant_count'>*Number of participants</label>
            <div class="col-sm-2">
            <input class="form-control input-sm" type="number"
                name = "participant_count"
                id="participant_count"
                min=1
                max=8
                value= '{{$item->participant_count}}'>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for='audition_link'>* URL To audition clip:</label>
            <div class="col-sm-8">
            <input class="form-control input-sm"
                type='text'
                id='audition_link'
                name='audition_link'
                value='{{ $item->audition_link }}'>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for='description'>Description of the item</label>
            <div class="col-sm-8">
            <input class="form-control input-sm"
                type='text'
                id='description'
                name='description'
                value='{{$item->description }}'>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for='special_notes'>Special notes about the performers</label>
            <div class="col-sm-8">
            <textarea class="form-control" rows="3"
                id='special_notes'
                name='special_notes'
                value='{{ $item->special_notes }}'>{{ $item->special_notes }}
            </textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for='status'>Submit entry for approval?</label>
            <div class="col-sm-2">
            <input class="form-control input-sm"
                type='checkbox'
                id='status'
                name='status'
                {{ ($item->status == 'Submitted')?'checked':"" }}
                value='{{ ($item->status == 'Submitted')?'yes':"" }}'>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@stop

{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    {{-- --}}
@stop
