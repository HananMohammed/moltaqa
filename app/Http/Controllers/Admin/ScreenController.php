<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ScreenRequest;
use App\Models\Admin\Screen;
use App\Traits\ImageProcess;
use Illuminate\Http\Request;

class ScreenController extends Controller
{
    use ImageProcess;
    /**
     * Display a listing of the screens.
     *
     * @return view
     */
    public function index()
    {
        $screens = Screen::all();

        return view('admin.screens.index',compact('screens'));
    }

    /**
     * Show the form for creating a new screen.
     *
     * @return Response
     */
    public function create()
    {
        $screen = new Screen() ;

        return view('admin.screens.create',compact('screen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ScreenRequest  $request
     * @return Response
     */
    public function store(ScreenRequest $request)
    {
        $screen = new Screen();

        $screen->create([
            "image" => $this->upload_image($request->file('image')),
            "created_by" => auth()->user()->id
        ]);

        return redirect(route('admin.screens.index'))->with(["success" => "Screen Added Successfully"]);
    }
    /**
     * Show the form for editing the specified Screen.
     *
     * @param  Screen  $screen
     * @return Response
     */
    public function edit(Screen $screen)
    {
        return view('admin.screens.edit',compact('screen'));

    }

    /**
     * Update the specified Screen in storage.
     *
     * @param  Request  $request
     * @param  Screen  $screen
     * @return Response
     */
    public function update(Request $request, Screen $screen)
    {
        if ($request->hasFile('image'))
        {
            $screen->update([
                'image' => $this->upload_image($request->file('image')),
                'created_by' => auth()->user()->id,
            ]);
        }

        return redirect(route('admin.screens.index'))->with(["success" => "Screen Updated Successfully"]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Screen  $screen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Screen $screen)
    {
        $screen->delete();
        return back()->with(["success" => "Screen Deleted Successfully"]);

    }
}
