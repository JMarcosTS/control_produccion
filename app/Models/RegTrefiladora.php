<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegTrefiladora
 * 
 * @property int $id
 * @property int|null $nalambron
 * @property Carbon $fecha
 * @property int|null $id_producto
 * @property int|null $diametro
 * @property int|null $id_turno
 * @property int|null $id_operador
 * @property int|null $horas
 * @property int|null $kg
 * @property string|null $opservaciones
 * 
 * @property Producto|null $producto
 * @property Turno|null $turno
 * @property Operador|null $operador
 *
 * @package App\Models
 */
class RegTrefiladora extends Model
{
	protected $table = 'reg_trefiladora';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'nalambron' => 'int',
		'id_producto' => 'int',
		'diametro' => 'int',
		'id_turno' => 'int',
		'id_operador' => 'int',
		'horas' => 'int',
		'kg' => 'int'
	];

	protected $dates = [
		'fecha'
	];

	protected $fillable = [
		'nalambron',
		'fecha',
		'id_producto',
		'diametro',
		'id_turno',
		'id_operador',
		'horas',
		'kg',
		'opservaciones'
	];

	public function producto()
	{
		return $this->belongsTo(Producto::class, 'id_producto');
	}

	public function turno()
	{
		return $this->belongsTo(Turno::class, 'id_turno');
	}

	public function operador()
	{
		return $this->belongsTo(Operador::class, 'id_operador');
	}
}
