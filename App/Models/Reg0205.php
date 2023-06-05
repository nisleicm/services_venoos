<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Reg0205
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $descr_ant_item
 * @property Carbon|null $dt_ini
 * @property Carbon|null $dt_fim
 * @property string|null $cod_ant_item
 *
 * @package App\Models
 */
class Reg0205 extends Model
{
	protected $table = 'reg_0205';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'dt_ini' => 'datetime',
		'dt_fim' => 'datetime'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'descr_ant_item',
		'dt_ini',
		'dt_fim',
		'cod_ant_item'
	];
}
