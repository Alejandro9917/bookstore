<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $table = 'purchases';

    protected $fillable = ['client_id', 'comic_id', 'state', 'created_at', 'updated_at']; 

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }

    public function comic()
    {
        return $this->belongsTo(Comic::class, 'comic_id', 'id');
    }
}
