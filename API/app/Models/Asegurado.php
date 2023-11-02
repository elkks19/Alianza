<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asegurado extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'ci',
        'fecha_nacimiento',
        'domicilio',
        'mail',
        'telefono',
        'celular',
        'NIT',
        'fecha_inicio_seguro',
        'fecha_vencimiento_seguro',
        'password',
    ];

    protected $casts = [
        'fecha_nacimiento' => 'date',
        'fecha_inicio_seguro' => 'datetime',
        'fecha_vencimiento_seguro' => 'date',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'pivot_users_asegurados', 'asegurado_id', 'user_id');
    }
}
