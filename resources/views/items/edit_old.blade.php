@extends('layouts.master')

@section('title')
    List of items
@stop

@section('content')
<h2 class="text-muted text-center">Edit your item</h2>

@if(count($errors) > 0)
<ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<!-- <form class="form-horizontal" method='POST' action='/items/edit'>

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

    <div class="form-group">
        <label class="col-sm-2 control-label" for='type'>* Item type:</label>
        <div class="col-sm-2">
            <select class="form-control input-sm" id='type' name='type' value='{{ $item->type }}'>
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
            value='{{ $item->audition_link) }}'>
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
            value='{{ $item->special_notes }}'>
        </textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label" for='status'>Entry submitted for approval?</label>
        <div class="col-sm-2">
        <input class="form-control input-sm"
            type='checkbox'
            id='status'
            name='status'
            value='{{ ($item->status }}'>
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Update</button>
</form> -->
@stop
