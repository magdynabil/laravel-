<?php

namespace App\Http\Controllers;
use App\News;
use Illuminate\Http\Request;

class Newscontroller extends Controller
{
    public function all_news()
    {
        $all_news=News::withTrashed()->paginate(10000);
        return view('all_news',compact('all_news'));

    }
    public function insert_news()
    {
        if(request()->ajax()) {
            $validated = $this->validate(request(), [
                'title' => 'required',
                'add_by' => 'required',
                'description' => 'required',
                'content' => 'required',
                'status' => 'required',
            ], [], [
                'title' => 'add_by',
                'add_by' => 'add_by',
                'description' => 'description',
                'content' => 'content',
                'status' => 'status',]);
            $news = News::create($validated);
            $html=view('row_news',compact('news'))->render();
            return response(['status' => true,'result' => $html]);
        }
        /*  $add->title=request('title');
          $add->add_by=request('add_by');
          $add->description=request('description');
          $add->content=request('content');
          $add->status=request('status');
          $add->save();
         */


    }
    public function delete_news($id=null)
    {
        if ($id!=null)
        {
            News::find($id)->delete();
        }
        elseif (request()->has('delete') and request()->has('id'))
        {
            News::destroy(request('id'));

        }
        elseif (request()->has('restore')and request()->has('id'))
        {
            News::whereIn('id',request('id'))->restore();

        }
        elseif (request()->has('force_delete')and request()->has('id'))
        {
            News::whereIn('id',request('id'))->forceDelete();

        }
        return back();
    }
    //
}
