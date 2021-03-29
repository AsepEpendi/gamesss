<?php

namespace App\Http\Controllers\Web;

use App\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $customer = Customer::orderBy('id', 'DESC')->limit(8)->get();
        // $product = Product::with('product_category', 'product_img')
        //     ->whereHas('product_img', function ($sql) {
        //         $sql->select();
        //     })
        //     ->where('status', 'publish')->orderBy('id', 'DESC')->limit(7)
        //     ->get();
        // $articles = Post::limit(10)->orderBy('id', 'DESC')->get();
        // $testimony_customer = TestimonyCustomer::with('customer')->orderBy('id', 'DESC')->limit(10)->get();
        $banners = Banner::where('status', '1')->get();

        return view('web.page.home', compact('customer', 'product', 'product_category', 'product_images', 'articles', 'testimony_customer', 'banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
