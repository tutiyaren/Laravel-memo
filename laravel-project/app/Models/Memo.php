<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Memo extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'title',
        'content'
    ];

    public function scopeSearch($query, $keyword)
    {
        if($keyword) {
            return $query->where('title', 'like', '%' . $keyword . '%')
                ->orWhere('content', 'like', '%' . $keyword . '%');
        }
    }

    public static function getAllAscCreated()
    {
        return self::orderBy('created_at', 'asc')->get();
    }

    public static function getAllDescCreated()
    {
        return self::orderBy('created_at', 'desc')->get();
    }
}
