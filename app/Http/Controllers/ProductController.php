<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function bestseller()
    {
        $product =  Product::where('bestseller', true)->get();
        $dataProduct = [];
        foreach ($product as $p) {
            $row['id'] = $p->id;
            $row['kode'] = $p->kode;
            $row['nama'] = $p->nama;
            $row['harga'] = $p->harga;
            $row['is_ready'] = $p->is_ready;
            $row['gambar'] = asset('assets/images/' . $p->gambar);
            array_push($dataProduct, $row);
        }
        return response()->json($dataProduct);
    }

    public function all(Request $request)
    {
        $productData =  Product::query();
        if (!empty($request['search'])) {
            $search = "%{$request['search']}%";
            $productData->where('nama', 'like', $search);
        }
        // dd('ds');
        $product = $productData->get();
        $dataProduct = [];
        foreach ($product as $p) {
            $row['id'] = $p->id;
            $row['kode'] = $p->kode;
            $row['nama'] = $p->nama;
            $row['harga'] = $p->harga;
            $row['is_ready'] = $p->is_ready;
            $row['gambar'] = asset('assets/images/' . $p->gambar);
            array_push($dataProduct, $row);
        }
        return response()->json($dataProduct);
    }

    public function detail($id)
    {
        $product =  Product::where('id', $id)->first();
        $row['id'] = $product->id;
        $row['kode'] = $product->kode;
        $row['nama'] = $product->nama;
        $row['harga'] = $product->harga;
        $row['is_ready'] = $product->is_ready;
        $row['gambar'] = asset('assets/images/' . $product->gambar);
        return response()->json($row);
    }
}
