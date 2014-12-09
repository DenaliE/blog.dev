<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#page-top"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>

                @if (Auth::check())
                <li class="page-scroll">
                    <a href="{{ action('PostsController@create') }}">Create New Posts</a>
                </li>
                <li class="page-scroll">
                    <a href="{{ action('HomeController@doLogout') }}">Logout</a></li>

                @else
                <li class="page-scroll"><a href="{{ action('HomeController@showLogin') }}">Log in</a></li>
                @endif

                <li class="page-scroll">
                    <a href="#portfolio">Portfolio</a>
                </li>
                <li class="page-scroll">
                    <a href="#about">About</a>
                </li>
                <li class="page-scroll">
                    <a href="#contact">Contact</a>
                </li>
                <li class="page-scroll">
                    <a href="{{ action('PostsController@index')}}">Blog</a>

                    <!-- method GET, plus action pointing to PostsController@index allows the search to work on any page. the action redirects it to the index funtion, and the GET function appends the search term to a question mark in the url, aka, a get request.-->
                {{ Form::open(['action' => ['PostsController@index'], 'method' => 'GET', 'class' => "navbar-form navbar-left", 'role' => "search"])}}
                      <div class="form-group">
                        <input type="text" class="form-control" name="search" placeholder="Search">
                      </div>
                      <button type="submit" class="btn btn-default">Submit</button>
               {{ Form::close() }}
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
