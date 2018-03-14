@extends('main')

@section('title', '| Homepage')

@section('content')

      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
            <h1>Welcome to My Blog!</h1>
            <p class="lead">
              Thank you for visit. This is my test website.
              <br />
              <small><a href="Part 23 - Adding Slugs to our Posts CRUD [How to Build a Blog with Laravel 5 Series]">Part 23 - Adding Slugs to our Posts CRUD [How to Build a Blog with Laravel 5 Series]</a></small>
            </p>
            <p>
              <a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a>
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">

          @foreach ($posts as $post)
            <div class="post">
              <h3>{{ $post->title }}</h3>
              <p>{{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 300 ? '...' : '' }}</p>
              <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
            </div>
          @endforeach

        </div>
        <div class="col-md-3 col-md-offset-1 text-warning" >
          <h2>Sidebar</h2>
        </div>
      </div>
@endsection

@section('scripts')
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script>
    // confirm('I loaded up some JS');
  </script>
@endsection
