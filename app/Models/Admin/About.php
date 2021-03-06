<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class About extends Model
{
    use HasFactory, HasTranslations;
    public $translatable = ['title','text'];

}
