<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class gasto extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'descripcion',       
        'monto',
        'fecha',
        'establecimiento',
        'efectivo'
    ];

    public function categoria() : BelongsTo
    {
        return $this->BelongsTo(categoria::class);
    }
    public function user() : BelongsTo
    {
        return $this->belongsTo(user::class);
    }
}
