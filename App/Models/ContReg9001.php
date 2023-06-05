<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContReg9001
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $ind_mov
 *
 * @package App\Models
 */
class ContReg9001 extends Model
{
	protected $table = 'cont_reg_9001';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int'
	];

	protected $fillable = [
		'id',
		'id_pai',
		'linha',
		'cont_reg',
		'ind_mov'
	];
}
