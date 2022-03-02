<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    protected $table = 'collections';

    protected $fillable = ['name', 'created_at', 'updated_at'];

    public function comics()
    {
        return $this->hasMany(Comic::class, 'collection_id', 'id');
    }
}
