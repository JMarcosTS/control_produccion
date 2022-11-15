<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Operador
 * 
 * @property int $id
 * @property string $nombre
 * 
 * @property Collection|RegTrefiladora[] $reg_trefiladoras
 *
 * @package App\Models
 */
class Operador extends Model
{
	protected $table = 'operador';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'nombre'
	];

	public function reg_trefiladoras()
	{
		return $this->hasMany(RegTrefiladora::class, 'id_operador');
	}
}
