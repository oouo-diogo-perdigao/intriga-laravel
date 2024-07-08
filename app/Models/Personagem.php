<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personagem extends Model
{
	use HasFactory;

	protected $table = 'personagem';

	protected $fillable = [
		'nome',
		'imagem'
	];
}
