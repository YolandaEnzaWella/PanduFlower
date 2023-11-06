<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'cart';
    protected $fillable = ['flower_id', 'user_id', 'qty'];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['price'];

    // Getters
    public function getPriceAttribute()
    {
        return $this->flower()->first()->price * $this->qty;
    }
    // Relations
    public function flower()
    {
        return $this->belongsTo(Flower::class);
    }
}
