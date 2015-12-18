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
 <h3 class="text-info text-center">Register your team for the 2016 talent show
<br/>To be held on March 31st 2016 at Lexington HS, Lexington MA</h3>
 <p class="text-success"><a href="/items">View the currently registered teams and the status of the current registration</a></p>
 <h4 class"text-info text-center">To register your team, please follow the steps below </h4>
     <div class ="row ">
         <ul>
             <li><a href="/register">Register with this site</a> and login</li>
             <li>Register your team from the Items->Create Item menu option</li>
             <li>Edit and update your items from Items->Edit/Delete item option</li>
             <li>You may continue to edit your item until you Submit it for approval</li>
             <li>You're required to submit a video clip of < 10 mins for review</li>
             <li>The organizers will review and update the status of your item in a week</li>
             <li class="text-info">Good luck to your team!!!</li>
         </ul>
    </div>
    <div>
        <h4 class="text-info">Proceeds from this event will be used to support the "Performing Arts Clubs" in our local schools.</h4>
        <h5 class="text-info">We look forward to your continued patronage in this initiative</h5>
        <h5 class="text-danger">Please register your team before Jan 31st, 2016</h5>
        <h5 class
    </div>
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
      <a href=" http://www.ehow.com/list_5809978_kids-talent-show-ideas.html">Read more in ehow.com... </a>
  </p>
  <p class="text-info">The above copy is from ehow.com</p>

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
