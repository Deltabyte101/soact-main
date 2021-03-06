<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clubs extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','facebook','phone','vdo','faction','open','picture','QR'];
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $table = 'clubs';
    protected $casts = [
        'open' => 'boolean'
    ];
}
