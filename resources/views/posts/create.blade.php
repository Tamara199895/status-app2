@extends('layouts.app')
@section('content')
<div class="container">
  <h1>Add Status</h1>
  <section class="mt-3">
    <form method="post" action="{{ route('posts.store') }}">
      @csrf
      <!-- Error message when data is not inputted -->
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <div class="card p-3">
        <label for="floatingInput">Status</label>
        <textarea class="form-control" name="status" id="status" cols="30" rows="10"></textarea>
      </div>
      <button class="btn btn-secondary m-3">Add</button>
    </form>
  </section>
    
</div>
@endsection