<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="{{ asset('js/index.js')}}"></script>

@extends('layouts.app') 
@section('content')
<div class="container">
  <div class="titlebar">
    <a class="btn btn-secondary float-end mt-3" href="{{ route('posts.create') }}" role="button">Add Status</a>
    <h1>Status list</h1>
  </div>
    
  <hr>
  <!-- Message if a post is posted successfully -->
  @if ($message = Session::get('success'))  
  <div class="alert alert-success">
    <p>{{ $message }}</p>
  </div>
  @endif
         @if (count($posts) > 0)
    @foreach ($posts as $post)
      <div class="row">
        <div class="col-12">
          <div class="row">
            <div class="col-10" style="display:flex">
              <h4 title="{{$post->status}}" class="title" id="{{$post->id}}">
              <span class ='span1' style="display:none">{{$post->status}}</span>
              <span class = 'span2' style="display:block">{{Str::words($post->status, 5, '...')}}</span>
            </h4>
              <form  action="{{ route('status.like') }}">
                @csrf
                <input type="hidden" name="status_id" value="{{ $post->id }}">
                <button type="submit" class="btn btn-primary"
                style="
                 font: bold 11px Arial;
                background-color: #EEEEEE;
                margin-left:5px;
                color: #333333;
                padding: 2px 6px 2px 6px;
                border-top: 1px solid #CCCCCC;
                border-right: 1px solid #333333;
                border-bottom: 1px solid #333333;
                border-left: 1px solid #CCCCCC; 
                ">
                  Like
                </button>
              </form> 
            </div>
            <p>{{$post->like}} Like</p>           
          </div>
        </div>
      </div>
      @endforeach
      {{ $posts->links() }}
  @else
    <p>No Status found</p>
  @endif
</div>
@endsection