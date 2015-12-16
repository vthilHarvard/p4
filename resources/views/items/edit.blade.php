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
                    value='{{ $item->school) }}'
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
                value='{{ $item->name) }}'
            >
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
