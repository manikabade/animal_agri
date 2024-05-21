<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Item\StoreItemValidation;
use App\Http\Requests\Admin\Item\UpdateItemValidation;
use App\Models\Admin\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items =Item::latest()->paginate(1000);
        $edit =0;
        return view('admin.item.index',compact('items','edit'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $edit =0;
        return view('admin.item.create',compact('edit'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemValidation $request)
    {
        if($request->hasFile('main_photo'))
        {
            $data =$request->validated();
            $file=$request->main_photo;
            $file_name=$file->getClientOriginalName();
            if (!file_exists(public_path('images/item')))
                @mkdir(public_path('images/item'));
            $file->move(public_path('images/item'),$file_name);
            $data['image'] =$file_name;
        }
        $item =Item::create($data);
        return redirect()->route('admin.item.index')
            ->with($item? 'success' :'error', $item? 'Created Successfully' :'Error Creating Data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $data=[];
        $data['row']=Item::find($id);
        $edit =1;
        return view('admin.item.edit',compact('data','edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemValidation $request,Item $item)
    {
        $data = $request->validated();

        if($request->hasFile('main_photo'))
        {

            $data =$request->validated();
            $file=$request->main_photo;
            $file_name=$file->getClientOriginalName();
            if (!file_exists(public_path('/images/item')))
                @mkdir(public_path('/images/item'));
            $file->move(public_path('images/item'),$file_name);
            $data['image'] =$file_name;
            $old_Slider =Item::where('id',$request['id'])->first();

            $old_path ='images/item/'.$old_Slider->image;

            if (file_exists(public_path($old_path))) {

                //File::delete($image_path);
                unlink(public_path($old_path));
            }



        }
        $item->update($data);
        return redirect()->route('admin.item.index')
            ->with($item ? 'success' : 'error', $item ? 'Updated Successfully' : 'Error Creating Data');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('admin.item.index')->with('sucess','item has been deleted sucessfully');
    }

}
