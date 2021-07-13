<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peopleGest extends Model
{
    use HasFactory;
    //...conexion a la bbdd..???
    protected $table="people"; //la tabla no se llama igual que el modelo

    //protected $guarded = [''];
    protected $fillable = ['name', 'surname', 'date_of_bird', 'phone_number', 'task', 'department', 'aditional_info'];



}
