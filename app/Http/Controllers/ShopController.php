<?php

namespace App\Http\Controllers;

use App\Shop;
use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;
use App\Http\Requests\CreateShop;
use Illuminate\Support\Facades\Storage;

class ShopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $q = \Request::query();

        if (isset($q['category_id']))
        {
            $shops = Shop::latest()->where('category_id', $q['category_id'])->paginate(5);
            $shops->load('category', 'user');
            return view('index', ['shops' => $shops]);
        }
        elseif (isset($q['subcategory_id']))
        {
            $shops = Shop::latest()->where('subcategory_id', $q['subcategory_id'])->paginate(5);
            $shops->load('category','subcategory', 'user');
            return view('index', ['shops' => $shops]);
        } else {
            $shops = Shop::latest()->paginate(5);
            $shops->load('category', 'subcategory', 'user');
            return view('index', ['shops' => $shops]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $shop = new Shop();
        $shop->name = $request->name;
        $categories = Category::all()->pluck('name', 'id');
        $subcategories = SubCategory::all()->pluck('name', 'id');
        return view('new', [
            'categories' => $categories, 'subcategories' => $subcategories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateShop $request)
    {
        $shop = new Shop;
        $user = \Auth::user();

        $shop->name = request('name');
        $shop->address = request('address');
        $shop->category_id = request('category_id');
        $shop->subcategory_id = request('subcategory_id');
        $shop->user_id = $user->id;

        $uploadImg = $shop->image = $request->file('image');
        // ファイルのアップロード
        $path = Storage::disk('s3')->putFile('/image', $uploadImg, 'public');
        // 保存したファイルの絶対バスの取得
        $shop->image = Storage::disk('s3')->url($path);
;

        $shop->review = request('review');
        $shop->save();
        return redirect()->route('shop.detail', ['id' => $shop->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shop = Shop::find($id);
        $user = \Auth::user();
        if ($user) {
            $login_user_id = $user->id;
        } else {
            $login_user_id = '';
        }

        return view('show', ['shop' => $shop, 'login_user_id' => $login_user_id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop, $id)
    {
        $shop = Shop::find($id);
        $categories = Category::all()->pluck('name', 'id');
        $subcategories = SubCategory::all()->pluck('name', 'id');
        return view('edit', ['shop' => $shop, 'categories' => $categories, 'subcategories' => $subcategories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(CreateShop $request, Shop $shop, $id)
    {
        $shop = Shop::find($id);
        // $user = \Auth::user();

        $shop->name = request('name');
        $shop->address = request('address');
        $shop->category_id = request('category_id');
        $shop->subcategory_id = request('subcategory_id');
        // $shop->user_id = $user->id;
        $filename = $request->file('image')->store('public/image');
        $shop->image = basename($filename);
        $shop->review = request('review');
        $shop->save();
        return redirect()->route('shop.detail', ['id' => $shop->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shop = Shop::find($id);
        $shop->destroy($id);
        return redirect('/shops');
    }
}
