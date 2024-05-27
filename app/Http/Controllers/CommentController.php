<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        // Valide os dados do formulário
        $request->validate([
            'name' => 'required',
            'message' => 'required',
        ]);

        // Salve o comentário no banco de dados
        Comment::create([
            'name' => $request->name,
            'message' => $request->message,
        ]);

        // Redirecione de volta para a página anterior
        return back()->with('success', 'Comment submitted successfully!');
    }
}
