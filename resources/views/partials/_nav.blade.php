
<!-- default bootstrap navbar -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Laravel Blog</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="{{ Request::is('/') ? 'active' : '' }}">
            <a href="/">Home <span class="sr-only">(current)</span></a></li>
          <li class="{{ Request::is('blog') ? 'active' : '' }}">
            <a href="/blog">Blog <span class="sr-only">(current)</span></a></li>
          <li class="{{ Request::is('about') ? 'active' : '' }}">
            <a href="/about">About</a></li>
          <li class="{{ Request::is('contact') ? 'active' : '' }}">
            <a href="/contact">Contact</a></li>
        </ul>
        <form class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <ul class="nav navbar-nav navbar-right">

          @if (Auth::check())

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello {{ Auth::user()->name }} <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('posts.index') }}">Posts</a></li>
                <li><a href="{{ route('categories.index') }}">Categories</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST">

                    @csrf

                    <button type="submit" class="btn btn-link">{{ __('Logout') }}</button>
                  </form>
                </li>
              </ul>
            </li>

          @else

            <a href="{{ route('login') }}" class="btn btn-link navbar-btn">Login</a>

          @endif

        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
