<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class claint extends Model
{
    use HasFactory;

   protected $fillable = [
        'book_id' , 'name', 'email'
   ];

   public function books()
   {
       return $this->belongsToMany(Book::class, 'claint_book', 'claint_id', 'book_id');
   }
   
}
