<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdvantageRequest;
use App\Models\Admin\Advantage;
use App\Traits\ImageProcess;
use Illuminate\Http\Request;

class AdvantageController extends Controller
{
    use ImageProcess;
    /**
     * Display Advantage.
     *
     * @return view
     */
    public function index()
    {
        $advantage = Advantage::first();
        if (!empty($advantage))
        {
            return view('admin.advantage.edit',compact('advantage')) ;
        }
        else
        {
            $advantage = new Advantage();
            return view('admin.advantage.create',compact('advantage')) ;
        }
    }
    /**
     * Store a newly created Advantage in storage.
     *
     * @param  AdvantageRequest $request
     * @return Response
     */
    public function store(Request $request)
    {
        $advantage = new Advantage() ;

        $advantage->title = [ 'en' => $request->title[0], 'ar' => $request->title[1]];

        $advantage->text = ['en' => $request->text[0], 'ar' => $request->text[1] ];

        if ($request->hasFile('image'))
            $advantage->image = $this->upload_image($request->file('image'));

        $advantage->save();

        return back()->with(["success" => "Advantage Created Successfully"]);

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  AdvantageRequest  $request
     * @param  Advantage  $advantage
     * @return Response
     */
    public function update(AdvantageRequest $request, Advantage $advantage)
    {
        $advantage->title = [ 'en' => $request->title[0], 'ar' => $request->title[1]];

        $advantage->text = ['en' => $request->text[0], 'ar' => $request->text[1] ];

        if ($request->hasFile('image'))
            $advantage->image = $this->upload_image($request->file('image'));

        $advantage->save();

        return back()->with(["success" => "Advantage Updated Successfully"]);

    }
}
