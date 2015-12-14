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
  <div class="row">
      <p>While some kids may have obvious talents (playing the piano or singing), other kids may think there’s nothing special they can do, but almost any child can participate in a talent show. Give them some ideas, encourage them to think creatively, and let them have at it. Remember to teach kids to be a good audience by clapping, cheering or laughing at appropriate places.
    </p>
    <h3>Favorites</h3>
  <p>Traditional favorites include telling jokes, singing, playing an instrument or dancing. Kids don’t have to be the next American Idol to showcase this kind of talent. Most kids can sing in a group. Camp songs, traditional folk songs or Top 40 radio hits are perfect for talent shows.
  </p>
  <h3>Skits</h3>
  <p>Kids can act out scenes from a movie, TV show or book. Camp skits are another possibility, or kids can make up their own stories. Don’t forget props, costumes and makeup.
  </p>
  <h3>Lip Sync</h3>
  <p>For kids who may not have singing talent but love to ham it up, lip syncing is an option. Add costumes and trademark movements to imitate the real singer.
      <a href=" http://www.ehow.com/list_5809978_kids-talent-show-ideas.html">Read more... </a>
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
    <!-- <script src="/js/books/show.js"></script> -->
@stop
