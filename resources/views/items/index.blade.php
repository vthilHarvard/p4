@extends('layouts.master')

@section('title')
    List of items
@stop

@section('content')

    <h2 class="text-center text-muted">Items registered to date</h2>
    <table class="table table-responsive table-bordered table-striped table-condensed table-hover">
      <thead>
      <tr>
         <th>Item</th>
         <th>Creator</th>
         <th>School</th>
         <th>Name</th>
         <th>Type</th>
         <th>Performers</th>
         <th>Status</th>
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
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->user->name }}</td>
                  <td>{{ $item->school }}</td>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->type }}</td>
                  <td>{{ $item->participant_count }}</td>
                  <td>{{ $item->status }}</td>
              </tr>
          @endforeach
      </tbody>
    </table>
@stop
