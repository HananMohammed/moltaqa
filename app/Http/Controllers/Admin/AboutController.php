<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AboutRequest;
use App\Models\Admin\About;
use App\Traits\ImageProcess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    use ImageProcess;
    /**
     * Display about view.
     *
     * @return view
     */
    public function index()
    {
        $about = About::first();
        if (!empty($about))
        {
            return view('admin.about.edit',compact('about')) ;
        }
        else
        {
            $about = new About();
            return view('admin.about.create',compact('about')) ;
        }
    }
    /**
     * Store a newly created About in storage.
     *
     * @param  AboutRequest  $request
     * @return Response
     */
    public function store(AboutRequest $request)
    {
        $about = new About();

        $about->title = [ 'en' => $request->title[0], 'ar' => $request->title[1]];

        $about->text = ['en' => $request->text[0], 'ar' => $request->text[1] ];

        if ($request->hasFile('image'))
            $about->image = $this->upload_image($request->file('image'));

        $about->save();

        return back()->with(["success" => "About Us Created Successfully"]);
    }

    /**
     * Update the specified About in storage.
     *
     * @param  AboutRequest  $request
     * @param  About  $about
     * @return Response
     */
    public function update(AboutRequest $request, About $about)
    {
        $about->title = [ 'en' => $request->title[0], 'ar' => $request->title[1]];

        $about->text = ['en' => $request->text[0], 'ar' => $request->text[1] ];

        if ($request->hasFile('image'))
            $about->image = $this->upload_image($request->file('image'));

        $about->save();

        return back()->with(["success" => "About Us Updated Successfully"]);

    }
}
