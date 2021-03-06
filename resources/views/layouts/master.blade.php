<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to "Programmer's best friend" --}}
        @yield('title',"America's kids got talent")
    </title>

    <meta charset='utf-8'>
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/darkly/bootstrap.min.css" type='text/css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
    <link href="/css/custom.css" type='text/css' rel='stylesheet' property='stylesheet'>
    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>
    @if(\Session::has('flash_message'))
    <div class='flash_message'>
        {{\Session::get('flash_message')}}
    </div>
    @endif
    <header>
      <div class="jumbotron center">
        <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
        <h1 class="text-center text-info">America's kids got talent</h1>
        <section>
          {{-- Sub heading will be yielded here --}}
          <h2 class="text-center text-muted">@yield('sub-heading')</h2>
        </section>
      </div>
      </div>
    </div>
    </header>
  {{-- Navigation bar goes here --}}
    <div class="row">
        <div class="col-md-8 col-md-offset-3">
            <nav class="navbar navbar-default">
            <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            		<span class="sr-only">Toggle navigation</span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
            	</button>
            	<!-- Replace text with image for branding -->
                <a class="navbar-brand" href="/">
                <img id="brand_image" class="img-responsive" alt="Dancing girl" src="/images/Bharatnatyam_logo_32.png">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            	<ul id="mainnav" class="nav navbar-nav">
            		<li class="{{ Request::is('/') ? 'active' :'' }}"><a href="/">Home</a></li>
                    <li class="dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Items <span class="caret"></span></a>
                       <ul class="dropdown-menu">
                         <li><a href="/items">Show All</a></li>
                        @if(\Auth::check())
                            <li role="separator" class="divider"></li>
                            @if(\Auth::user()->role == 'Registered')
                                 <li><a href="/items/create">Create Item</a></li>
                                 <li><a href="/items/show-update">Edit/Delete items</a></li>
                             @elseif(\Auth::user()->role == 'Organizer')
                                 <li><a href="/items/review">Review Items</a></li>
                             @endif
                        @endif
                       </ul>
                     </li>
            	</ul>
                <ul id="login-info" class="navbar-right list-inline ">
                        @if(\Auth::check())
                        <li>You're logged in as {{ \Auth::user()->name }}</li>
                        @if(\Auth::user()->role == 'Organizer')
                            <li>(Organizer)</li>
                        @endif
                        <li><a href='/logout'>Log out</a></li>
                        @else
                        <li><a href='/login'>Log in or</a></li>
                        <li><a href='/register'>Register</a></li>
                        @endif
                </ul>

            </div>
            <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
            </nav>
        </div> <!-- col for navigation>-->
    </div> <!-- row for navigation -->
    <section>
        <div class="row">
            <!-- images on the left -->
            <div class="col-md-2">
                <img alt = "Dancing girls" src="/images/SiteCover_small.jpg" class="img-responsive img-border"/>
                <img alt = "Anish with sax" src="/images/Anish_Sax_small.jpg" class="img-responsive img-border"/>
                <img alt = "Lasya dancing" src="/images/Lasya_Dance_Small.jpg" class="img-responsive img-border"/>
            </div>
            <div class="col-md-8 col-md-offset-1">
            {{-- Main page content will be yielded here --}}
            @yield('content')
            </div>
        </div>
    </section>

    <footer>
      <div class="row center">
       <p class="text-center">&copy; {{ date('Y') }}</p>
        <p class="text-center"><a href="https://commons.wikimedia.org/wiki/File:Bharatnatyam_logo.png">Logo image from Wikimedia commons</a></p>
        <p class="text-center"> Attribution - By AJ.iitm (Own work) [CC BY-SA 3.0 (http://creativecommons.org/licenses/by-sa/3.0)], via Wikimedia Commons</p>
      </div>
    </footer>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>
