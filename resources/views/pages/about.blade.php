@extends('main')
@section('title', '| About')
@section('content')
      <div class="row">
        <div class="col-md-12">
          <h1>About Me</h1>
          <p>
            &lt;{{ $data['fullname'] }}&gt; <a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a>
          </p>
        </div>
      </div>
@endsection
