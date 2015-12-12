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
  Register to participate
@stop

@section('content')
<div class="row">
<!-- <div class="col-md-8 col-md-offset-2"> -->
  @if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
 @endif
 <h3 class="text-info text-center">Register your team for the 2016 talent show</h3>
  <form class="form-vertical" method="POST" action="/">
  <input type='hidden' name='_token' value='{{ csrf_token() }}'>
  <div class="form-group">
    <label for="para">Home page</label>
    <div class="input-group">
    <input type="text" class="form-control" id="para" name="para" placeholder="3">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Show Items</button>
  </form>
<!-- </div> -->
</div>
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <!-- <script src="/js/books/show.js"></script> -->
@stop
