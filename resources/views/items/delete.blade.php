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
  Delete an item
@stop



@section('content')
    <h2 class="text-muted text-center">Delete an existing item</h2>

    @if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <h1>Delete Item</h1>

    <h3>
        Are you sure you want to delete the item titled "{{$item->name}}"?
    </h3>

    <div class="row">
        <div class="col-sm-3">
            <p class="btn btn-primary">
                <a href='/items'>No, changed my mind</a>
            </p>
        </div>
        <div class="col-sm-2 col-offset-2">
            <p class="btn btn-primary">
                <a href='/items/delete/{{$item->id}}'>Yes</a>
            </p>
        </div>
    </div>

@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    {{-- --}}
@stop
