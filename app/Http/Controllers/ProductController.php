<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Photo;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use function Sodium\compare;

class ProductController extends Controller
{
//    public function product($id){
//        $pro9duct = Product::findorFail($id);
//        $product1 =$product->products()->whereId($id)->get();
//    }
// FOR SINGLE PRODUCT////////////////////////////////////////////////////
    public function productView($id)
    {
        $abc = Product::findorFail($id);
        //$product = $abc->where("is_active","=",1 )->get();
        //$wanted = $product->where("id","=",$id);
        //dd($product);
        return view('oneproduct')->with(array("abc"=>$abc));
    }
//FOR ALL PRODUCTS /////////////////////////////////////////////////////
    public function allProducts()
    {
        $products = Product::all();
        return view('allproducts')->with(array("products"=>$products));
    }


    public function index()
    {
        //
        $products = Product::paginate(5);

        return view('admin.products.index',compact('products'));
    }


    public function create()
    {
        //
        return view('admin.products.create');
    }

    public function store(ProductRequest $request)
    {
        //
        $input = $request->all();
        //dd($input);
        if($file = $request->file('photo_id'))
        {

            $name = time() . $file->getClientOriginalName();

            $file->move('image', $name);

            //$photo = Photo::create(['file'=>$name,'product_id'=>$request->product_id]);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;

        }
        $user = Auth::user();
//        Product::create($input);
        $user->product()->create($input);

        //   Product::create($input);

        return redirect('/admin/products');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $product = Product::findorFail($id);
        return view(' admin.products.edit',compact('product'));

    }

    public function update(ProductRequest $request, $id)
    {
        $input = $request->all();
//dd($input);
        if($file = $request->file('photo_id')) {


            $name = time() . $file->getClientOriginalName();


            $file->move('image',$name);

            $photo = Photo::create(['file' => $name]);


            $input['photo_id'] = $photo->id;
        }
        Auth::user()->product()->whereId($id)->first()->update($input);
        return redirect('admin/products');

    }

    public function destroy($id)
    {
        //
        $product=Product::findorFail($id);
        $product->delete();
        return redirect('admin/products');
    }
}
