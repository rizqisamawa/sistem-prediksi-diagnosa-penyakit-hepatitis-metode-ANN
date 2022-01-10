<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    protected $table ='data_penyakit';
    protected $fillable = ['kategory','umur','jenis_kelamin','alb','alp','alt','ast','bil','ggt','status'];
}
