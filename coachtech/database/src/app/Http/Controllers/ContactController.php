<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// フォームリクエストの読み込み
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        return view('confirm', compact('contact'));
    }

    public function store(Request $request)
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
    }
}
