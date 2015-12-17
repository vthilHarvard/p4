@extends('layouts.master')

@section('content')

    <p>Don't have an account? <a href='/register'>Register here...</a></p>

    <h1>Login</h1>

    @if(count($errors) > 0)
        <ul class='errors'>
            @foreach ($errors->all() as $error)
                <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method='POST' action='/login'>

        {!! csrf_field() !!}

        <div class='form-group'>
            <label class="col-sm-2" for='email'>Email</label>
            <div class=class="col-sm-4">
                <input type='text' name='email' id='email' value='{{ old('email') }}'>
            </div>
        </div>

        <div class='form-group'>
            <label class="col-sm-2" for='password'>Password</label>
            <div class=class="col-sm-4">
                <input type='password' name='password' id='password' value='{{ old('password') }}'>
            </div>
        </div>

        <div class='form-group'>
            <input class="col-sm-2" type='checkbox' name='remember' id='remember'>
            <div class=class="col-sm-4">
                <label for='remember' class='checkboxLabel'>Remember me</label>
            </div>
        </div>

        <button type='submit' class='btn btn-primary'>Login</button>

    </form>
@stop
