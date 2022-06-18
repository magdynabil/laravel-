<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
class Upload extends Controller
{
    public function upload_file()
    {
        $nice_name=[];
        $i=0;
        foreach (request()->file('file') as $file)
        {
            $nice_name['file.'.$i]='file'.($i+1);
            $i++;
        }

        $this->validate(request(), [
            'file.*' => 'required|image|mimes:jpg,jpeg,png'


        ],
            [],
            $nice_name);
        $files=request()->file('file');
        foreach ($files as $file)
        {
            $name = $file->getClientOriginalName();
            $ext = $file->getClientOriginalExtension();
            $size = $file->getSize();
            $type = $file->getMimeType();
            $real_path = $file->getRealPath();
            $file->move(public_path('upload'), $name.time() . '.' . $ext);
        }
        return back();

    }public function upload_text()
    {
        storage::disk('local')->put('textfile.txt',request('text'));
        return Storage::download('textfile.txt');



    }
    //
}
