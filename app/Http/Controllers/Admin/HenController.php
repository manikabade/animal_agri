<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Hen\StoreHenValidation;
use App\Http\Requests\Admin\Hen\UpdateHenValidation;
use App\Models\Admin\Hen;
use App\Models\Admin\BaseModel;
use Illuminate\Http\Request;

class HenController extends Controller
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
        $hens =Hen::latest()->paginate(1000);
        $edit =0;
        return view('admin.hen.index',compact('hens','edit'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $edit =0;
        return view('admin.hen.create',compact('edit'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHenValidation $request)
    {
        if($request->hasFile('main_photo'))
        {
            $data =$request->validated();
            $file=$request->main_photo;
            $file_name=$file->getClientOriginalName();
            if (!file_exists(public_path('images/hen')))
                @mkdir(public_path('images/hen'));
            $file->move(public_path('images/hen'),$file_name);
            $data['image'] =$file_name;
        }
        $hen =Hen::create($data);
        return redirect()->route('admin.hen.index')
            ->with($hen? 'success' :'error', $hen? 'Created Successfully' :'Error Creating Data');
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
        $data['row']=Hen::find($id);
        $edit =1;
        return view('admin.hen.edit',compact('data','edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHenValidation $request,Hen $hen)
    {
        $data = $request->validated();

        if($request->hasFile('main_photo'))
        {

            $data =$request->validated();
            $file=$request->main_photo;
            $file_name=$file->getClientOriginalName();
            if (!file_exists(public_path('/images/hen')))
                @mkdir(public_path('/images/hen'));
            $file->move(public_path('images/hen'),$file_name);
            $data['image'] =$file_name;
            $old_Slider =Hen::where('id',$request['id'])->first();

            $old_path ='images/hen/'.$old_Slider->image;

            if (file_exists(public_path($old_path))) {

                //File::delete($image_path);
                unlink(public_path($old_path));
            }



        }
        $hen->update($data);
        return redirect()->route('admin.hen.index')
            ->with($hen ? 'success' : 'error', $hen ? 'Updated Successfully' : 'Error Creating Data');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hen $hen)
    {
        $hen->delete();
        return redirect()->route('admin.hen.index')->with('sucess','hen has been deleted sucessfully');
    }

}
