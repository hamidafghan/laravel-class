<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email'];

    /**
     * Get the list of all projects done by emoloyee
     */
    public function projects()
    {
    	return $this->belongsToMany(Project::class);
    }
}
