<?php
  
namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;
use App\Models\Wishlist;
use App\Models\Coupon;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);
    
        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
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
            'product_name' => 'required',
            'product_code' => 'required',
            'product_color'=>'required',
            'size'=>'required',
            'price'=> 'required',
            'quantity' =>'required',
            'user_email'=>'required',
            'session_id'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Product::create($input);
     
        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'product_name' => 'required',
            'product_code' => 'required',
            'product_color'=>'required',
            'size'=>'required',
            'price'=> 'required',
            'quantity' =>'required',
            'user_email'=>'required',
            'session_id'=>'required'
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
          
        $product->update($input);
    
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
     
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
   
     public  function addtocart(Request $request)
      {
        $data = $request->all();
        //echo "<pre>"; print_r($data);die;
        if(empty($data['user_email']))
        {
            $data['user_email'] ='';
        }
        
        $session_id = Str::random(40); 
        Session::put('session_id',$session_id);
      // $sizeArr = explode(".",$data['size']);

       DB::table('carts')->insert(['product_id'=>$data['product_id'],'product_name'=>$data['product_name'],
      'product_code'=>$data['product_code'],'product_color'=>$data['product_color'],
      'price'=>$data['price'],'size'=>0,'quantity'=>$data['quantity'],
      'user_email'=>$data['user_email'],'session_id'=>$session_id]);

      return redirect('cart')->with('flash_message_success','product has been added in cart');
    }

    public function productdetails($id = null)
    {
     $productdetails = Product::where('id',$id)->first();
     return view('frontends.productdetails')->with(compact('productdetails'));
    }

    public function cart()
    {
        $session_id = Session::get('session_id');
        $carts = DB::table('carts')->where(['session_id' => $session_id])->get();
        foreach ($carts as $key=>$product)
         {
            $productdetails =Product::where('id',$product->product_id)->first();
            $carts[$key]->image = $productdetails->image;
         }
    /*$carts = Cart::select('id','product_id','product_name','product_code','product_color'
    ,'size','price','quantity','user_email','session_id')->get();*/
    return view('frontends.cart')->with(compact('carts'));
    }


    public function deleteCartProduct($id=null)
         {
         DB::table('carts')->where('id',$id)->delete();
         return redirect('cart')->with('flash_message_success','product deleted successfully');
         }
    public function updateCartQuantity($id=null,$quantity=null)
       {
        DB::table('carts')->where('id',$id)->increments('quantity',$quantity);
        return redirect('cart')->with('flash_message_success','product quantity updated successfully');
       }

    public function order_review(Request $request)
    {
       $session_id = Session::get('session_id');
       $carts = DB::table('carts')->where(['session_id' => $session_id])->get();
       $carts = Cart::select('id','product_id','product_name','product_code','product_color','size','price','quantity','user_email','session_id')->get();
       foreach ($carts as $key=>$product)
       {
            $productdetails =Product::where('id',$product->product_id)->first();
            $carts[$key]->image = $productdetails->image;
       }
       return view('frontends.order_review')->with(compact('carts'));
    }
    public function place_order(Request $request)
    {
    if($request->isMethod('post'))
      {
       $data = $request->all();
      }
       //return redirect('place_order');
    }
   public function placeorder()
    {
        return view('frontends.placeorder');
    }
    public function search(Request $request) 
    {
        $data = $request->all();
        $categories = Category::select('id','name')->get();
        $products= Product::select('id','product_name','image','price')->get();
       // return view('frontends.search');
     return view('frontends.search')->with(compact('products','categories'));
     }
    public function wishlist()
    {
     $session_id = Session::get('session_id');
     $wishlists = DB::table('wishlists')->where(['session_id' => $session_id])->get();
     $wishlists = Wishlist::select('id','product_id','product_name','product_code','product_color','size',
     'price','quantity','user_email','session_id')->get();
     foreach ($wishlists as $key=>$product)
    {
          $productdetails =Product::where('id',$product->product_id)->first();
          $wishlists[$key]->image = $productdetails->image;
    }
      return view('frontends.wishlist')->with(compact('wishlists'));

     /* $wishlists= Wishlist::select('id','product_id','product_name','product_code','product_color','size','price',
      'quantity','user_email','session_id')->get();
      return view('frontends.wishlist')->with(compact('wishlists'));*/
    }


    public function check()
    {
      return view('frontends.check');
    }

    
    public function applyCoupon(Request $request)
    {
      $data = $request->all();
      $couponCount=Coupon::where('coupon_code',$data['coupon_code'])->count();
      if($couponCount == 0)
    {
          return redirect('frontends.cart')->back()->with('flash_message_error','Coupon is not valid');
    }
      else
    {
        echo "success"; die;
    }
      return view('frontends.cart');
    } 
      

    public function myaccount(Request $request)
    {
       
        return view('frontends.myaccount');
    }

     public function myorder()
       {
        $session_id = Session::get('session_id');
        $carts = DB::table('carts')->where(['session_id' => $session_id])->get();
       $carts = Cart::select('id','product_id','product_name','product_code','product_color','size','price','quantity','user_email','session_id')->get();
        foreach ($carts as $key=>$product)
        {
            $productdetails =Product::where('id',$product->product_id)->first();
            $carts[$key]->image = $productdetails->image;
        }
        return view('frontends.myorder')->with(compact('carts'));
       }



     public function orderPlace(Request $request)
        { 
        return $request->input();
       }
 }
   