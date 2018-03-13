@extends('main')
@section('title', '| Contact')
@section('content')
      <div class="row">
        <div class="col-md-12">
          <h1>Contact Me</h1>
          <hr />
          <form>
            <div class="form-group">
              <label name="email">Email:</label>
              <input id="email" name="email" class="form-control" />
            </div>
            <div class="form-group">
              <label name="subject">Subject:</label>
              <textarea id="subject" name="subject" class="form-control" placeholder="Type your message..."></textarea>
            </div>
            <input type="submit" value="Send Message"/>
          </form>
        </div>
      </div>

@endsection
