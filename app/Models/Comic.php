<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    protected $table = 'comics';

    protected $fillable = ['tag_id', 'collection_id', 'name', 'author', 'price', 'description', 'publisher', 'type', 'edition', 'image', 'state', 'created_at', 'updated_at']; 

    public function tag()
    {
        return $this->belongsTo(Tag::class, 'tag_id', 'id');
    }

    public function collection()
    {
        return $this->belongsTo(Collection::class, 'collection_id', 'id');
    }
}
