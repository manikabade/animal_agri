<?php

namespace App\Http\Controllers;
use App\Http\Requests\Admin\Log\StoreLogValidation;
use App\Http\Requests\Admin\Reg\StoreRegValidation;
use App\Models\Admin\Log;
use App\Models\Admin\Reg;
use App\Models\Admin\AboutUs;
use App\Models\Admin\Photo;
use App\Models\Admin\Video;
use App\Models\Admin\News;
use App\Models\Admin\Item;
use App\Models\Admin\Slider;
use App\Models\Admin\Goat;
use App\Models\Admin\Hen;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class HomeController extends Controller
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
        $data = [] ;
        $data['_aboutus'] = AboutUs::all();
        $data['_sliders'] = Slider::all();
        $data['_items'] = Item::active()->get();
        $data['_photos'] = Photo::active()->get();
        $data['_videos'] = Video::active()->get();
        $data['_news'] = News::active()->get();
        $data['_logs'] = Log::active()->get();
        $data['_regs'] = Reg::active()->get();
        $data['_hens'] = Hen::active()->get();
        $data['_goats'] = Goat::active()->get();
        return view('welcome',compact('data') );
    }

    public function newsDetail($id)
    {
        $news = News::where('id',$id)->first();
        if ($news)
            return view('news-details',compact('news'));
        return abort(404);
    }
    public function log()

    {
        $data['_logs'] =Log::all();

        return view('frontend.log',compact('data'));
    }
    public function logForm(Request $request)
    {
        // dd($request->all());
        try {
            $data = $this->validate($request,[
                    'username'                     => ['required','string'],
                    'password'                     => ['required','min:8'],

                ]);
                $log = Log::create($data);
                $log->assignRole('customer');
                Alert::success('Success', 'Login Successfully.');
                return back();
            } catch (\Exception $e) {
                Alert::error('Error','Login Creation Failed.');
                return back()->withInput($data);
            }
        }

    public function reg()
    {
        $data['_regs'] = Reg::all();
        return view('frontend.reg',compact('data'));
    }
    public function regForm(Request $request)
    {
        try {
            $data = $this->validate($request,[
                'username'                     => ['required','string'],
                'address'                      => ['required','string'],
                'contact_number'               => ['required','string'],
                'email'                        => ['nullable','email','unique:regs'],
                'password'                     => ['required','min:8'],
            ]);
            $reg = Reg::create($data);
            $reg->assignRole('customer');
            Alert::success('Success', 'Register Successfully.');
            return back();
        } catch (\Exception $e) {
            Alert::error('Error','Register Creation Failed.');
            return back()->withInput($data);
        }
    }

    public function item()
    {
        $data['_items'] = Item::all();
        return view('frontend.item',compact('data'));
    }

    public function goat()

    {
        $data['_goats'] = Goat::all();
        return view('frontend.goat',compact('data'));
    }
    public function hen()
    {
        $data['_hens'] = Hen::all();
        return view('frontend.hen',compact('data'));
    }

    public function henDetail($id)
    {
     $hen= Hen::find($id);
     return view('frontend.hen_detail',compact('hen'));
    }

    public function goatDetail($id)
    {
     $goat= Goat::find($id);
     return view('frontend.goat_detail',compact('goat'));
    }

    public function Photo()
    {
        $data['_photos'] =Photo::all();
        return view('frontend.photo',compact('data'));
    }

    public function Video()
    {
        $data['_videos'] =Video::all();
        return view('frontend.video',compact('data'));
    }


}

