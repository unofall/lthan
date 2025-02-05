<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    function index(){
        $data['blog'] = Blog::all();
        $topic = Topic::all();
        return view('index', $data, compact('topic'));
    }

    function show(){
        $data['blog'] = Blog::all();
        return view('travel', $data);
    }

    function create(){
        return view('create');
    }

    function add(Request $request){
        $request->validate([
            'foto' => 'required|image|mimes:png,jpg,jpeg,',
            'title' => 'required|string',
            'description' => 'required|string',
            'location' => 'required|string'
        ]);


        $filename = '';

        if ($request->hasfile('foto')) {
            $extfile = $request->file('foto')->getClientOriginalExtension();
            $filename = time().".".$extfile;
            $request->file('foto')->storeAs('foto',$filename);
        }

        Blog::create([
            'foto' => $filename,
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location
        ]);

        return redirect('/travel    ');

    }

    function edit(Request $request){
        $data['blog'] = Blog::find($request->id);
        return view('update', $data);
    }

    function update(Request $request){
        $filename = '';

        if ($request->file('foto')) {
            $extfile = $request->file('foto')->getClientOriginalExtension();
            $filename = time().".".$extfile;
            $request->file('foto')->storeAs('foto',$filename);
        }

        Blog::where('id', $request->id)->update([
            'foto' => $filename,
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location

        ]);

        return redirect('/travel');
    }

    function delete(Request $request){
        $blog = Blog::find($request->id);
        $delete = Blog::where('id', $request->id)->delete();

        if ($delete) {
            if ($blog->foto) {
                Storage::delete('foto/', $blog->foto);
            }
        }

        return redirect('/travel');
    }

    function detail(Request $request){
        $data['blog'] = Blog::find($request->id);
        return view('detail',$data);
    }


}
