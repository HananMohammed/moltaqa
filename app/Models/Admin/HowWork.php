<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class HowWork extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['title','description'];

    protected $fillable = ['title','description','icon_id','created_by'];

    protected $hidden = ['created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class,'created_by');
    }

    public function icon()
    {
        return $this->belongsTo(Icon::class,'icon_id');
    }

}
