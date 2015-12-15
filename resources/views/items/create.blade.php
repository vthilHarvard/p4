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
    <h2 class="text-muted text-center">Add a new item</h2>

    @if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <form class="form-horizontal" method='POST' action='/items/create'>
        <input type='hidden' value='{{ csrf_token() }}' name='_token'>
        <div class="form-group">
            <label class="col-sm-2 control-label" for='school'>* School name:</label>
            <div class="col-sm-4">
                <input class="form-control"
                    size="35"
                    type='text'
                    id='school'
                    name='school'
                    value='{{ old('school','') }}'
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
                value='{{ old('name','') }}'
            >
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for='type'>* Item type:</label>
            <div class="col-sm-2">
                <select class="form-control input-sm" id='type' name='type' value='{{ old('type','Dance') }}'>
                  <option value="Dance">Dance</option>
                  <option value="Music">Music</option>
                  <option value="Skit">Skit</option>
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
                value= '{{old('participant_count', 2) }}'>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for='audition_link'>* URL To audition clip:</label>
            <div class="col-sm-8">
            <input class="form-control input-sm"
                type='text'
                id='audition_link'
                name='audition_link'
                value='{{ old('audition_link','') }}'>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for='description'>Description of the item</label>
            <div class="col-sm-8">
            <input class="form-control input-sm"
                type='text'
                id='description'
                name='description'
                value='{{ old('description','') }}'>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for='special_notes'>Special notes about the performers</label>
            <div class="col-sm-8">
            <textarea class="form-control" rows="3"
                id='special_notes'
                name='special_notes'
                value='{{ old('special_notes','') }}'>
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
                value='{{ old('status', 'yes' ) }}'>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Register</button>
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
