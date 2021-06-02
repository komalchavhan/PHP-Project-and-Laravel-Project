<?php
namespace App\Http\Controllers;
use App\Models\Coupon;
use Illuminate\Http\Request;
use App\Exports\couponsExport;
use Maatwebsite\Excel\Facades\Excel;
class CouponController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons = Coupon::latest()->paginate(5);
        return view('coupons.index', compact('coupons'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coupons.create');
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
            'coupon_code'   => 'required',
            'coupon_amount' => 'required',
            'amount_type'   => 'required',
            'expiry_date'   => 'required'
        ]);

        Coupon::create($request->all());

        return redirect()->route('coupons.index')
            ->with('success', 'coupon created successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function show(Coupon $coupon)
    {
        return view('coupons.show', compact('coupon'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupon $coupon)
    {
        return view('coupons.edit', compact('coupon'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coupon $coupon)
    {
        $request->validate([
            'coupon_code'   => 'required',
            'coupon_amount' => 'required',
            'amount_type'   => 'required',
            'expiry_date'   => 'required'
        ]);
        $coupon->update($request->all());
        return redirect()->route('coupons.index')
            ->with('success', 'coupon updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupon $coupon)
    {
        $coupon->delete();
        return redirect()->route('coupons.index')
            ->with('success', 'coupon deleted successfully');
    }
   /* public function applyCoupon(Request $request)
    {
     $data = $request->all();
     /*echo"<pre>"; print_r($data);die;
     $couponCount Coupon::where('coupon_code',$data['coupon_code'])->count();
     
    }*/
    public function exportCoupons()
    {
     return Excel::download(new couponsExport,'coupons.xlsm');
    }
}