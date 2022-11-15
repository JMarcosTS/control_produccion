<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Turno
 * 
 * @property int $id
 * @property string $nombre
 * 
 * @property Collection|RegTrefiladora[] $reg_trefiladoras
 *
 * @package App\Models
 */
class Turno extends Model
{
	protected $table = 'turno';
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
		return $this->hasMany(RegTrefiladora::class, 'id_turno');
	}
}
