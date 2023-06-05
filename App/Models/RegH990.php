<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegH990
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $qtd_lin_h
 *
 * @package App\Models
 */
class RegH990 extends Model
{
	protected $table = 'reg_h990';
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
		'reg',
		'qtd_lin_h'
	];
}
