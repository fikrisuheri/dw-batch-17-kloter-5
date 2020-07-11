<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    public function index()
    {
        $data = [
            'video' => DB::table('video')
                ->select('video.*', 'category.name as nama_category')
                ->join('category', 'category.id', '=', 'video.category_id')
                ->get()
        ];

        return view('video.index', $data);
    }

    public function add()
    {
        $data = [
            'category' => DB::table('category')->get()
        ];

        return view('video.add', $data);
    }

    public function store(Request $request)
    {
        $file = $request->file('thumbnail')->store('image');

        $objek = [
            'title' => $request->title,
            'category_id' => $request->category_id,
            'thumbnail' => $file,
            'attache' => $request->attache,
        ];

        DB::table('video')->insert($objek);

        return redirect('/');
    }

    public function detail($id)
    {
        $data = [
            'video' => DB::table('video')
                ->select('video.*', 'category.name as nama_category')
                ->join('category', 'category.id', '=', 'video.category_id')
                ->where('video.id', '=', $id)
                ->first()
        ];

        return view('video.detail', $data);
    }

    public function delete($id)
    {
        DB::table('video')
            ->where('id', $id)
            ->delete();
        return redirect('/');
    }

    public function edit($id)
    {
        $data = [
            'video' => DB::table('video')
                ->select('video.*', 'category.name as nama_category')
                ->join('category', 'category.id', '=', 'video.category_id')
                ->where('video.id', '=', $id)
                ->first(),
            'category' => DB::table('category')->get()
        ];

        return view('video.edit', $data);
    }

    public function update(Request $request)
    {
        if ($request->file('thumbnail')) {
            $file = $request->file('thumbnail')->store('image');
            $objek = [
                'title' => $request->title,
                'category_id' => $request->category_id,
                'thumbnail' => $file,
                'attache' => $request->attache,
            ];
        } else {
            $objek = [
                'title' => $request->title,
                'category_id' => $request->category_id,
                'attache' => $request->attache,
            ];
        }


        DB::table('video')->where('id',$request->id)->update($objek);

        return redirect('/');
    }
}
