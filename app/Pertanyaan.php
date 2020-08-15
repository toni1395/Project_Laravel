<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table ='pertanyaan';
    protected $fillable = ['nama' , 'pertanyaan', 'tanggal_buat' , 'tanggal_update', 'jawaban', 'email'];
}
