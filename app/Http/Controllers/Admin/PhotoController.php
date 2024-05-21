<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Photo\StorePhotoValidation;
use App\Http\Requests\Admin\Photo\UpdatePhotoValidation;
use App\Models\Admin\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PhotoController extends Controller
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
    $photos =Photo::latest()->paginate(1000);
    $edit =0;
    return view('admin.photo.index',compact('photos','edit'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $edit =0;
    return view('admin.photo.create',['edit'=>$edit]);
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePhotoValidation $request)
{
    if($request->hasFile('main_photo'))
    {
        $data =$request->validated();
        $file=$request->main_photo;
        $file_name=$file->getClientOriginalName();
        if (!file_exists(public_path('images/photo')))
            @mkdir(public_path('images/photo'));
        $file->move(public_path('images/photo'),$file_name);
        $data['image'] =$file_name;


    }
      $photo =Photo::create($data);
     return redirect()->route('admin.photo.index')
        ->with($photo? 'success' :'error', $photo? 'Created Successfully' :'Error Creating Data');
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
    $data['row']=Photo::find($id);
    $edit =1;

    return view('admin.photo.edit',compact('data','edit'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePhotoValidation $request,Photo $photo)
{
    $data = $request->validated();

    if($request->hasFile('main_photo'))
    {

        $data =$request->validated();
        $file=$request->main_photo;
        $file_name=$file->getClientOriginalName();
        if (!file_exists(public_path('/images/photo')))
            @mkdir(public_path('/images/photo'));
        $file->move(public_path('images/photo'),$file_name);
        $data['image'] =$file_name;
        $old_Photo =Photo::where('id',$request['id'])->first();

        $old_path ='images/photo/'.$old_Photo->image;

          if (file_exists(public_path($old_path))) {

            //File::delete($image_path);
            unlink(public_path($old_path));
        }
    }
    $photo->update($data);
    return redirect()->route('admin.photo.index')
        ->with($photo ? 'success' : 'error', $photo ? 'Updated Successfully' : 'Error Creating Data');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Photo $photo)
{
    $photo->delete();
    return redirect()->route('admin.photo.index')->with('sucess','photo has been deleted sucessfully');
}
}
