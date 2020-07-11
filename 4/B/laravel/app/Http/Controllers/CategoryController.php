<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $data = [
            'category' => DB::table('category')->get()
        ];

        return view('category.index', $data);
    }

    public function add()
    {
        return view('category.add');
    }

    public function store(Request $request)
    {
        $objek = [
            'name' => $request->name,
        ];

        DB::table('category')->insert($objek);

        return redirect()->route('category');
    }

    public function delete($id)
    {
        DB::table('category')
            ->where('id', $id)
            ->delete();
        return redirect('/category');
    }


    public function edit($id)
    {
        $data = [
            'category' => DB::table('category')
                ->where('id', $id)
                ->first()
        ];
        return view('category.edit', $data);
    }

    public function update(Request $request)
    {
        $objek = [
            'name' => $request->name,
        ];

        DB::table('category')->where('id',$request->id)->update($objek);

        return redirect()->route('category');
    }
}
