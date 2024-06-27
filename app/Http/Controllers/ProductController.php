<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use DataTables; 

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
     public function index(Request $request)
    {
        $product = Product::all();
        if ($request->ajax()) {
                return Datatables::of($product)
                ->addIndexColumn()
                ->addColumn('foto', function($row){
                    return '<img src="assets/fotoproduct/' . $row->product_foto . '" class="img-thumbnail" width="100px" height="100px">';
                })
                ->addColumn('action', function($row){
                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">Edit</a>';
                    $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';
                    return $btn;
                })
            ->rawColumns(['action', 'foto'])
            ->make(true);
        }
        return view('product',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        
        $imageName = time() . '.' . $request->product_foto->extension();  
        $request->product_foto->move(public_path('assets/fotoproduct'), $imageName);
        
        $product = Product::updateOrCreate(
            ['id' => $request->id],
            [
                'product_name' => $request->product_name,
                'product_foto' => $imageName, 
                'product_desc' => $request->product_desc, 
                'product_varian' => $request->product_varian,
                'product_varian_desc' => $request->product_varian_desc,
                'product_price' => $request->product_price,
                'product_stock' => $request->product_stock,
            ]
        );        
        
        return response()->json(['success' => 'Product saved successfully.']);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return response()->json(['success'=>'Product deleted successfully.']);
    }
}
