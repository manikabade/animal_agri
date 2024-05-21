<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Log\StoreLogValidation;
use App\Http\Requests\Admin\Log\UpdateLogValidation;
use App\Models\Admin\Log;
use Illuminate\Http\Request;

class LogController extends Controller
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
        {
            $logs =Log::latest()->paginate(1000);
            $edit =0;
            return view('admin.log.index',compact('logs','edit'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $edit =0;
        return view('admin.log.create',compact('edit'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLogValidation $request)
    {
        $data = $request->validated();
        $log =Log::create($request->validated());
        return redirect()->route('admin.log.index')
            ->with($log? 'success' :'error', $log? 'Created Successfully' :'Error Creating Data');
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
        $data = [];
        $data['row']=Log::find($id);
        $edit =1;
        return view('admin.log.edit',compact('data','edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLogValidation $request,Log $log)
    {
        $data = $request->validated();
        $log->update($data);
        return redirect()->route('admin.log.index')
            ->with($log? 'success' : 'error', $log ? 'Updated Successfully' : 'Error Creating Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Log $log)
    {
        $log->delete();
        return redirect()->route('admin.log.index')->with('sucess','log has been deleted sucessfully');
    }
}
