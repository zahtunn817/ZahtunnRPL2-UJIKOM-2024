<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    use HasFactory;
    protected $table = 'stok';
    protected $guarded = ['id'];

    public function menu()
    {
        return $this->hasOne(Menu::class, 'id', 'stok_id');
    }
}
