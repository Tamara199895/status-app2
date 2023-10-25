<?php

namespace App\Http\Controllers;

use App\Http\Requests\StatusRequest;
use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index() {
        $status = Status::orderBy('like', 'desc')->paginate(5);
        return view('posts.index', ['posts' => $status]);
      }

      public function create() {
        return view('posts.create');
      }

      public function store(StatusRequest $request) {
        $validator = $request->validated();      
        $post = new Status;
        $post->status = $request->status;
      
        $post->save();
        return redirect()->route('posts.index')->with('success', 'Status created successfully.');
      }

      public function like(Request $request) {
          $status = Status::find($request->status_id);
          $status->like += 1;
          $status->save();
          return redirect()->route('posts.index');
        
      }
}
