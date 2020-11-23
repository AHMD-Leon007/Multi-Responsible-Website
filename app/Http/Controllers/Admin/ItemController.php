<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;
use Carbon\Carbon;


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        $categories = Category::all();
        return view ('admin.item.index', compact('items', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.item.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'category'   => 'required',
            'image'      => 'required|mimes:png,jpg,jpeg',
            'title'      => 'required',
            'sub_title'  => 'required',
            'image_href' => 'required|mimes:png,jpg,jpeg'
        ]);

        $image = $request->file('image');
        $slug  = str_slug($request->title);

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename   = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
            if (!file_exists('uploads/item')) {
                mkdir('uploads/item', 077, true);
            }
            $image-> move('uploads/item', $imagename);
        }else {
            $imagename = 'default.png';
        }

        $image_href = $request->file('image_href');
        $slug  = str_slug($request->sub_title);

        if (isset($image_href)) {
            $currentDate = Carbon::now()->toDateString();
            $image_hrefname   = $slug.'-'.$currentDate.'-'.'.'.$image_href->getClientOriginalExtension();
            if (!file_exists('uploads/item/href')) {
                mkdir('uploads/item/href', 077, true);
            }
            $image_href-> move('uploads/item/href', $image_hrefname);
        }else {
            $image_hrefname = 'default.png';
        }

        $item       = new Item();
        $item->category_id = $request->category;
        $item->image       = $imagename;
        $item->title       = $request->title;
        $item->sub_title   = $request->sub_title;
        $item->image_href  = $image_hrefname;
        $item->save();

        return redirect()->route('item.index')->with('successMsg', 'Item Created Successfully');
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
        $item = Item::find($id);
        $categories = Category::all();
        return view ('admin.item.edit', compact('item', 'categories'));
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
        $this->validate($request,[
            'category'   => 'required',
            'image'      => 'required|mimes:png,jpg,jpeg',
            'title'      => 'required',
            'sub_title'  => 'required',
            'image_href' => 'required|mimes:png,jpg,jpeg'
        ]);

        $image = $request->file('image');
        $slug  = str_slug($request->title);

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename   = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
            if (!file_exists('uploads/item')) {
                mkdir('uploads/item', 077, true);
            }
            $image-> move('uploads/item', $imagename);
        }else {
            $imagename = 'default.png';
        }

        $image_href = $request->file('image_href');
        $slug  = str_slug($request->sub_title);

        if (isset($image_href)) {
            $currentDate = Carbon::now()->toDateString();
            $image_hrefname   = $slug.'-'.$currentDate.'-'.'.'.$image_href->getClientOriginalExtension();
            if (!file_exists('uploads/item/href')) {
                mkdir('uploads/item/href', 077, true);
            }
            $image_href-> move('uploads/item/href', $image_hrefname);
        }else {
            $image_hrefname = 'default.png';
        }

        $item              = Item::find($id);
        $item->category_id = $request->category;
        $item->image       = $imagename;
        $item->title       = $request->title;
        $item->sub_title   = $request->sub_title;
        $item->image_href  = $image_hrefname;
        $item->save();

        return redirect()->route('item.index')->with('successMsg', 'Item updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);

        if (file_exists('uploads/item/'.$item->image)) {
            unlink('uploads/item/'.$item->image);
        }

        $item->delete();
        return redirect()->back()->with('warningMsg', 'Item Deleted Successfully');
    }
}
