<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store (Request $request)
    {
        $validatedData = $request->validate ([
            'author' => 'string|required',
            'body' => 'required|max:255',
            'client_id' => 'required',
        ]);

        $comment = new Comment([
            'author' => $validatedData['author'],
            'body' => $validatedData['body'],
            'client_id' => $validatedData['client_id'],
        ]);

        $comment->save();

        return redirect()->back();
    }

}
