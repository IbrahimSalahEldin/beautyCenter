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

   public function books(){
    return $this->hasMany(makeupbook::class, 'makeupbook_id', 'id');
   }
   
}
