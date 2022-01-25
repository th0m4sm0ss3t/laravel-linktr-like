<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index()
    {
       $links = Link::all();

       // dd($links);

        return view('links', [
            'links' => $links,
        ]);
    }

    public function create()
    {
        return view('form');
    }

    public function createInDB(Request $request)
    {
        // dd($request->url);

        $link = Link::create([
            'title' => $request->title,
            'url' => $request->url,
        ]);

        // dd('lien créé !');

        return redirect()->route('home');
    }

    public function updateOne ($id)
    {
        $link = Link::findOrFail($id);

        return view('link', [
            'link' => $link
        ]);
    }

    public function updateOneInDB ($id, Request $request)
    {
        $link = Link::findOrFail($id);

        // dd($request->url);

        $link->update([
            'title' => $request->title,
            'url' => $request->url,
        ]);

        // dd('lien modifié !');

        return view('link', [
            'link' => $link
        ]);
    }

    public function deleteOne ($id)
    {
        $link = Link::find($id);

        // dd($link);

        $link->delete();
    }
}
