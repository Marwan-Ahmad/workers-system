<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'client_id',
    ];
    protected $guarded = ['status'];

    public function client()
    {
        return $this->belongsTo(client::class);
    }

    public function post()
    {
        return $this->belongsTo(post::class);
    }
}
