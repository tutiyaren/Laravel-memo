<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Domain\MemoCategory\Id;
use App\Domain\MemoCategory\CategoryId;
use App\Domain\MemoCategory\MemoId;

class Memo_Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'memo_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function memo()
    {
        return $this->belongsTo(Memo::class, 'memo_id');
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
    // category_id
    public function setCategoryIdAttribute($value)
    {
        $this->attributes['category_id'] = new CategoryId($value);
    }
    public function getNameAttribute($value)
    {
        return $value instanceof CategoryId ? $value->value() : $value;
    } // mamo_id
    public function setMemoIdAttribute($value)
    {
        $this->attributes['memo_id'] = new MemoId($value);
    }
    public function getMemoIdAttribute($value)
    {
        return $value instanceof MemoId ? $value->value() : $value;
    }
}
