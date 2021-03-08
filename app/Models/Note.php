<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the card of note
     */
    public function card()
    {
    	return $this->belongsTo(Card::class);
    }
}
