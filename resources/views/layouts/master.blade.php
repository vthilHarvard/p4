<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to "Programmer's best friend" --}}
        @yield('title',"America's kids got talent")
    </title>

    <meta charset='utf-8'>
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/darkly/bootstrap.min.css" type='text/css' rel='stylesheet'>
  <link href="/css/custom.css" type='text/css' rel='stylesheet'>
    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>
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
                <a class="navbar-brand" href="#">Brand</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            	<ul id="mainnav" class="nav navbar-nav">
            		<li class="{{ Request::is('/') ? 'active' :'' }}"><a href="/">Home</a></li>
            		<li class="{{ Request::is('items') ? 'active' :'' }}"><a href=#>Items</a></li>
                    <li class="dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Items <span class="caret"></span></a>
                       <ul class="dropdown-menu">
                         <li><a href="/items">Show</a></li>
                         <li><a href="/items/create">New Item</a></li>
                         <li><a href="/items/edit">Edit Item</a></li>
                         <li><a href="/items/delete">Delete Item</a></li>
                         <li role="separator" class="divider"></li>
                         <li><a href="#">One more separated link</a></li>
                       </ul>
                     </li>
            		<li class="{{ Request::is('users') ? 'active' :'' }}"><a href="/users">Random Users</a></li>
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
                <img src="/images/SiteCover_small.jpg" class="img-responsive"/>
                <img src="/images/Anish_Sax_small.jpg" class="img-responsive"/>
                <img src="/images/Lasya_Dance_small.jpg" class="img-responsive"/>
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
        <p class="text-center"><a href="https://openclipart.org/detail/3580/pluged-in-coder">Logo image from open clipart library</a></p>
      </div>
    </footer>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>
