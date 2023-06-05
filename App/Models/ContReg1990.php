<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContReg1990
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $qtd_lin_1
 *
 * @package App\Models
 */
class ContReg1990 extends Model
{
	protected $table = 'cont_reg_1990';
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
		'qtd_lin_1'
	];
}
