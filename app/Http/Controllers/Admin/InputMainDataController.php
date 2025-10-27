<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Brand;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class InputMainDataController extends Controller
{
    //
    public function mainData()
    {
        $brands = Brand::latest()->take(10)->get();
        return view('admin.data.input', compact('brands'));
    }

    public function addData()
    {
        return view('admin.data.form');
    }

    public function storeDataBrand(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'code' => ['required', 'string', ]
        ]);

        Brand::create([
            'name' => $request->name,
            'code' => $request->code
        ]);

        return redirect()->route('admin.data.views')->with('success', 'User berhasil ditambahkan!');
    }
}
