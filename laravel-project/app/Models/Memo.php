<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Domain\Memo\Id;
use App\Domain\Memo\Title;
use App\Domain\Memo\Content;

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

    public function memo_categories()
    {
        return $this->hasMany(Memo_Category::class, 'memo_id');
    }

    // id
    public function setIdAttribute($value)
    {
        $this->attributes['id'] = new Id($value);
    }
    public function getIdAttribute($value)
    {
        return $value instanceof Id ? $value->value() : $value;
    }
    // title
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = new Title($value);
    }
    public function getTitleAttribute($value)
    {
        return $value instanceof Title ? $value->value() : $value;
    }
    // content
    public function setContentAttribute($value)
    {
        $this->attributes['content'] = new Content($value);
    }
    public function getContentAttribute($value)
    {
        return $value instanceof Content ? $value->value() : $value;
    }


    public function scopeSearch($query, $keyword)
    {
        if($keyword) {
            return $query->where('title', 'like', '%' . $keyword . '%')
                ->orWhere('content', 'like', '%' . $keyword . '%');
        }
    }

    public static function getAllAscCreated()
    {
        return self::orderBy('created_at', 'desc')->get();
    }

    public static function getAllDescCreated()
    {
        return self::orderBy('created_at', 'asc')->get();
    }
}
