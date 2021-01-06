<?php


namespace App\Traits;


use App\Models\Admin\About;
use App\Models\Admin\Advantage;
use App\Models\Admin\HowWork;
use App\Models\Admin\Screen;


class ViewData
{
    /**
     * @return array
     */
    public Static function HomepageData()
    {
        $locale = app()->getLocale() ;

        $about = About::select("title","text","image")->get();
        $howWork = HowWork::select("title", "description", "icon_id")->get();
        $advantage = Advantage::all();
        $screens = Screen::all();
        $data = [
            "about" => $about,
            "howWork" => $howWork,
            "advantage" => $advantage,
            "screens" =>$screens
        ];
        return $data ;
    }
}
