@extends('main')

@section('title', '| View Post')

@section('content')
  <div class="row">
    <div class="col-md-8">
      <h1>{{ $post->title }}</h1>
      <p class="lead">
        {{ $post->body }}
      </p>
    </div>
    <div class="col-md-4">
      <div class="well">
          <dl class="dl">
            <dt>Url:</dt>
            <dd><a href="{{ route('blog.single', $post->slug) }}">{{ route('blog.single', $post->slug) }}</a></dd>
          </dl>
          <dl class="dl">
            <dt>Category:</dt>
            <dd>{{ $post->category->name }}</dd>
          </dl>
          <dl class="dl">
            <dt>Created At:</dt>
            <dd>{{ date('M j, Y H:i', strtotime($post->created_at)) }}</dd>
          </dl>
          <dl class="dl">
            <dt>Last updated:</dt>
            <dd>{{ date('M j, Y H:i', strtotime($post->updated_at)) }}</dd>
          </dl>
          <hr />
          <div class="row">
            <div class="col-sm-6">
              {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
            </div>
            <div class="col-sm-6">
              {!! Form::open(array('route' => ['posts.destroy', $post->id], 'method' => 'DELETE')) !!}
              {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
              {!! Form::close() !!}
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              {!! Html::linkRoute('posts.index', '<< See all Posts', null, array('class' => 'btn btn-default btn-block btn-see-all-posts')) !!}
            </div>
          </div>

      </div>
    </div>
  </div>
@endsection
