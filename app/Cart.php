<?php

namespace App;

use App\Book;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
    	'book_id',
    	'quantity',
    ];

    public function book() {
    	return $this->belongsTo(Book::class, 'book_id');
    }
}
