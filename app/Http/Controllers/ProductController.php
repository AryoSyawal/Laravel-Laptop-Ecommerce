<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Item;
use App\Models\Produk;
use Illuminate\Http\Request;
use App\Exports\ProdukExport;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = Produk::with('item')->get();

        return view('pages.product', compact('index'));
    }

    public function export(){
        $time = Carbon::now();
        $namafile = "ExportProduk_".$time.".xlsx";
        return Excel::download(new ProdukExport, $namafile);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Item::all();
        return view('produkspages.createproduk', ['data' => $items]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'item_id'=> 'required',
            'codename'=> 'required',
            'type'=> 'required',
            'image'=> 'image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            'price'=> 'required',
            'stock'=> 'required',
        ]);

        $input = $request->all();
        $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('uploads',$fileName,'public');
        $input['image'] = '/storage/'.$path;
        Produk::create($input);

        return redirect()->route('showproduct')->with('success', json_encode([
        'Your data has been created'
        ]), 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::findOrFail($id);

        return view('produkspages.detailproduk', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $maman = Produk::findOrFail($id);
        $item = Item::all();

        return view('produkspages.edit', compact('maman', 'item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = Produk::findOrFail($id);
        $request->validate([
            'codename'=> 'required',
            'type'=> 'required',
            'image'=> 'required',
            'price'=> 'required',
            'stock'=> 'required',
        ]);

        

        $input = $request->all();
        $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('uploads',$fileName,'public');
        $input['image'] = '/storage/'.$path;
        $data->update($input);

        return redirect()->route('showproduct')->with('update', json_encode([
            'Data Berhasil Di update',
            ]), 200);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect()->route('showproduct')->with('delete', json_encode([
        'Data Berhasil Di Hapus',
        ]), 200);
    }

    public function search($id)
    {
        $search = Produk::findOrFail($id);

        return view('produkspages.detailproduk', compact('produk'));
    }
}
