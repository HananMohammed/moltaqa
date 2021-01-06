<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\HowWorkRequest;
use App\Models\Admin\HowWork;
use App\Models\Admin\Icon;
use Illuminate\Http\Request;

class HowWorkController extends Controller
{
    /**
     * Display a listing of the How It Work .
     *
     * @return view
     */
    public function index()
    {
        $data = HowWork::all();

        return view('admin.how_work.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $howWork = new HowWork();
        $icons = Icon::all();

        return view('admin.how_work.create',compact('howWork','icons'));
    }

    /**
     * Store a newly created How It Work Section in storage.
     *
     * @param  HowWorkRequest  $request
     * @return Response
     */
    public function store(HowWorkRequest $request)
    {
        HowWork::create([
            'title' => [
                'en' => $request->title[0],
                'ar' => $request->title[1]
            ],
            'description' => [
                'en' => $request->description[0],
                'ar' => $request->description[1]
            ],
            'icon_id' => $request->icon,
            'created_by' => auth()->user()->id,
        ]);

        return redirect(route('admin.how-work.index'))->with(["success" => "How It Work Section Added Successfully"]);

    }
    /**
     * Show the form for editing the specified How it work Section.
     *
     * @param  HowWork  $howWork
     * @return \Illuminate\Http\Response
     */
    public function edit(HowWork $howWork)
    {
        $icons = Icon::all();
        return view('admin.how_work.edit',compact('howWork', 'icons'));
    }

    /**
     * Update the specified How Work in storage.
     *
     * @param  HowWorkRequest $request
     * @param  HowWork  $howWork
     * @return Response
     */
    public function update(HowWorkRequest $request, HowWork $howWork)
    {
        $howWork->update([
            'title' => [
                'en' => $request->title[0],
                'ar' => $request->title[1]
            ],
            'description' => [
                'en' => $request->description[0],
                'ar' => $request->description[1]
            ],
            'icon_id' => $request->icon,
            'created_by' => auth()->user()->id,
        ]);
        return redirect(route('admin.how-work.index'))->with(["success" => "How It Work Section Updated Successfully"]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  HowWork  $howWork
     * @return
     */
    public function destroy(HowWork $howWork)
    {
        $howWork->delete();

        return back()->with(["success" => "Section Deleted Successfully"]);
    }
}
