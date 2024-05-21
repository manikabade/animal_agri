<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Reg\StoreRegValidation;
use App\Http\Requests\Admin\Reg\UpdateRegValidation;
use App\Models\Admin\Reg;
use Illuminate\Http\Request;

class RegController extends Controller
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
            $regs =Reg::latest()->paginate(1000);
            $edit =0;
            return view('admin.reg.index',compact('regs','edit'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $edit =0;
        return view('admin.reg.create',compact('edit'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRegValidation $request)
    {
        $data = $request->validated();
        $reg =Reg::create($request->validated());

        return redirect()->route('admin.reg.index')
            ->with($reg? 'success' :'error', $reg? 'Created Successfully' :'Error Creating Data');
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
        $data['row']=Reg::find($id);
        $edit =1;
        return view('admin.reg.edit',compact('data','edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRegValidation $request, Reg $reg)
    {
        $data = $request->validated();
        $reg->update($data);
        return redirect()->route('admin.reg.index')
            ->with($reg? 'success' : 'error', $reg ? 'Updated Successfully' : 'Error Creating Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reg $reg)
    {
        $reg->delete();
        return redirect()->route('admin.reg.index')->with('sucess','register has been deleted sucessfully');
    }
}
