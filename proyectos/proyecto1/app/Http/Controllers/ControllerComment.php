<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class ControllerComment extends Controller
{

    public function index(){
        $comments = Comment::all();
        return view('comments.index', compact('comments'));
    }

        public function create(){
        return view('comments.create');
    }

    public function store(Request $request){
        Comment::create([
            'note' => $request->input('note'),
        ]);

        return redirect('/comments');
    }

    public function delete(Comment $comment){
        return view('comments.delete', ['comment' => $comment]);
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect('/comments');
    }

        public function show(Comment $comment)
    {
        return view('comments.show', compact('comment'));
    }

        public function update(Request $request, Comment $comment)
    {
        $comment->update([
            'note' => $request->input('note'),
        ]);
        return redirect('/comments');
    }

        public function edit(Comment $comment)
    {
        return view('comments.edit', compact('comment'));
    }

}
