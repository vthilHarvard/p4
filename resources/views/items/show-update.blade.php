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
  Register a new item
@stop

@section('content')

    <h2 class="text-center text-muted">Items registered for update/delete</h2>
    <table class="table table-responsive table-bordered table-striped table-condensed table-hover">
      <thead>
      <tr>
         <th>Edit</th>
         <th>Item</th>
         <th>School</th>
         <th>Name</th>
         <th>Type</th>
         <th>Number of participants</th>
         <th>Status</th>
         <th>Delete</th>
      </tr>
      </thead>
      <tfoot>
      <tr>
          <td>Total</td>
          <td>{{ $items->count() }}</td>
      </tr>
      </tfoot>
      <tbody>
          @foreach($items as $item)
              <tr>
                  <td><a href="/items/edit/{{ $item->id }}">Edit</td>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->school }}</td>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->type }}</td>
                  <td>{{ $item->participant_count }}</td>
                  <td>{{ $item->status }}</td>
                  <td><a href="/items/confirm-delete/{{ $item->id }}">Delete</td>
              </tr>
          @endforeach
      </tbody>
    </table>
@stop
{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    {{-- --}}
@stop
