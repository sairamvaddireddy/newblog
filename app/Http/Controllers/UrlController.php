<?php

namespace App\Http\Controllers;

use App\Url;
use Illuminate\Http\Request;

class UrlController extends Controller
{
    public function submit(Request $request)
    {
        $requestArray = $request->all();
        Url::create($requestArray);
        return redirect('/urls');
    }
    public function url()
    {
        $urls = Url::latest()->get();
        return view('listUrls',compact('urls'));
    }
    public function list($link, $id)
    {
        $data = Url::where('id', $id)->get();
       return view('singlelist',compact('data'));
    }
}
