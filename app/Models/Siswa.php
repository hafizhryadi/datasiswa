<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;



class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswas';
    protected $guarded = [];


    /**
     * Get all of the ekskul for the Siswa
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ekskul(): HasMany
    {
        return $this->hasMany(Ekskul::class, );
    }
}
