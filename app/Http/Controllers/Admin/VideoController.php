<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Video\StoreVideoValidation;
use App\Http\Requests\Admin\Video\UpdateVideoValidation;
use App\Models\Admin\Video;

class VideoController extends Controller
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
        $videos =Video::latest()->paginate(1000);
        $edit =0;
        return view('admin.video.index',compact('videos','edit'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $edit =0;
        return view('admin.video.create',compact('edit'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVideoValidation $request)
    {
        if($request->hasFile('main_video'))
        {
            $data =$request->validated();
            $file=$request->main_video;
            $file_name=$file->getClientOriginalName();
            if (!file_exists(public_path('videos/video')))
                @mkdir(public_path('videos/video'));
            $file->move(public_path('videos/video'),$file_name);
            $data['video'] =$file_name;
        }
        $video =Video::create($data);
        return redirect()->route('admin.video.index')
            ->with($video? 'success' :'error', $video? 'Created Successfully' :'Error Creating Data');
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
        $data['row']=Video::find($id);
        $edit =1;
        return view('admin.video.edit',compact('data','edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVideoValidation $request,Video $video)
    {
        $data = $request->validated();

        if($request->hasFile('main_video'))
        {

            $data =$request->validated();
            $file=$request->main_video;
            $file_name=$file->getClientOriginalName();
            if (!file_exists(public_path('/videos/video')))
                @mkdir(public_path('/videos/video'));
            $file->move(public_path('videos/video'),$file_name);
            $data['video'] =$file_name;
            $old_Slider =Video::where('id',$request['id'])->first();

            $old_path ='videos/video/'.$old_Slider->video;

            if (file_exists(public_path($old_path))) {

                //File::delete($image_path);
                unlink(public_path($old_path));
            }
        }
        $video->update($data);
        return redirect()->route('admin.video.index')
            ->with($video ? 'success' : 'error', $video ? 'Updated Successfully' : 'Error Creating Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('admin.video.index')->with('sucess','video has been deleted sucessfully');
    }

}

