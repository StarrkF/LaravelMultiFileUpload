<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class DocumentController extends Controller
{
    public function store(Request $request){
       
        $documents=$request->documents;

        foreach($documents as $doc)
        {
            // echo $doc->getClientOriginalExtension().'------'. Str::slug($doc->getClientOriginalName())   .'<br/>';
            $path=Str::slug(pathinfo($doc->getClientOriginalName(),PATHINFO_FILENAME)).'.'.$doc->getClientOriginalExtension() ;
            $doc->move(public_path('tasks'),$path);
        }
    }
}
