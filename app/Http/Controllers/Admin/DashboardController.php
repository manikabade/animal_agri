<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\Hen;
use App\Models\Admin\Goat;
use App\Models\Admin\Photo;
use App\Models\Admin\Video;
use App\Models\Admin\News;
use App\Models\Admin\Reg;


use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $data = [];
        $data['_hen'] = Hen::count();
        $data['_goat'] = Goat::count();
        $data['_photo'] = Photo::count();
        $data['_video'] = Video::count();
        $data['_news'] = News::count();
        $data['_reg'] = Reg::count();
        return view('admin.index',compact('data'));
    }
}
