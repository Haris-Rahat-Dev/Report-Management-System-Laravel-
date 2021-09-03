<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $fillable = [ 'title', 'category', 'report'];

    public static function search($search)
    {
        return empty($search) ? static::query() : static::where('id', 'like', '%'.$search.'%')
            ->orWhere('title', 'like', '%'.$search.'%')
            ->orWhere('category', 'like', '%'.$search.'%')
            ->orWhere('created_at', 'like', '%'.$search.'%')
            ->orWhere('updated_at', 'like', '%'.$search.'%');;
    }
}
