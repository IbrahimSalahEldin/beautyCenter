<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'title' ,'description' , 'price'
   ];

   public function claints()
    {
        return $this->belongsToMany(claint::class, 'claint_book', 'book_id', 'claint_id');
    }
   

}
