<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Goat\StoreGoatValidation;
use App\Http\Requests\Admin\Goat\UpdateGoatValidation;
use App\Models\Admin\Goat;
use Illuminate\Http\Request;

class GoatController extends Controller
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
        $goats =Goat::latest()->paginate(1000);
        $edit =0;
        return view('admin.goat.index',compact('goats','edit'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $edit =0;
        return view('admin.goat.create',compact('edit'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGoatValidation $request)
    {
        if($request->hasFile('main_photo'))
        {
            $data =$request->validated();
            $file=$request->main_photo;
            $file_name=$file->getClientOriginalName();
            if (!file_exists(public_path('images/goat')))
                @mkdir(public_path('images/goat'));
            $file->move(public_path('images/goat'),$file_name);
            $data['image'] =$file_name;
        }
        $goat =Goat::create($data);
        return redirect()->route('admin.goat.index')
            ->with($goat? 'success' :'error', $goat? 'Created Successfully' :'Error Creating Data');
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
        $data['row']=Goat::find($id);
        $edit =1;
        return view('admin.goat.edit',compact('data','edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGoatValidation $request,Goat $goat)
    {
        $data = $request->validated();

        if($request->hasFile('main_photo'))
        {

            $data =$request->validated();
            $file=$request->main_photo;
            $file_name=$file->getClientOriginalName();
            if (!file_exists(public_path('/images/goat')))
                @mkdir(public_path('/images/goat'));
            $file->move(public_path('images/goat'),$file_name);
            $data['image'] =$file_name;
            $old_Slider =Goat::where('id',$request['id'])->first();

            $old_path ='images/goat/'.$old_Slider->image;

            if (file_exists(public_path($old_path))) {

                //File::delete($image_path);
                unlink(public_path($old_path));
            }

        }
        $goat->update($data);
        return redirect()->route('admin.goat.index')
            ->with($goat ? 'success' : 'error', $goat ? 'Updated Successfully' : 'Error Creating Data');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Goat $goat)
    {
        $goat->delete();
        return redirect()->route('admin.goat.index')->with('sucess','goat has been deleted sucessfully');
    }

}
