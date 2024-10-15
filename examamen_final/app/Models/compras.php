<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    use HasFactory;

    
      //Definimos que tabla es de la base de datos
      protected $table = "compras";

      //Definimos el primary key de la tabla
      protected $primaryKey = "id";
  
      //Dehabilitar los campos de created_at y update_at
      public $timestamps = false;
  
      //Definimos las demas columnas que tenemos en la tabla
      protected $fillable = [
          'nombre',
          "descripcion",
          "precio",
          "imagen"
         
      ];




}