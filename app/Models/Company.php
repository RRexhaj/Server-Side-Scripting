<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;


    protected $fillable = ['name','address','website','email'];

    // Define a One-to-Many relationship with contacts table
    public function contacts(){
        return $this->hasMany(Contact::class);
        
    }
}
