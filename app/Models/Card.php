<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * Get the notes of card
     */
    public function notes()
    {
    	return $this->hasMany(Note::class);
    }
}
