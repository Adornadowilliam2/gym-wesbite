<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $table = "transactions";
    protected $fillable = [
        "name",
        "email",
        "message"
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
