<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegD390
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $cst_icms
 * @property string|null $cfop
 * @property float|null $aliq_icms
 * @property float|null $vl_opr
 * @property float|null $vl_bc_issqn
 * @property float|null $aliq_issqn
 * @property float|null $vl_issqn
 * @property float|null $vl_bc_icms
 * @property float|null $vl_icms
 * @property string|null $cod_obs
 *
 * @package App\Models
 */
class RegD390 extends Model
{
	protected $table = 'reg_d390';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'aliq_icms' => 'float',
		'vl_opr' => 'float',
		'vl_bc_issqn' => 'float',
		'aliq_issqn' => 'float',
		'vl_issqn' => 'float',
		'vl_bc_icms' => 'float',
		'vl_icms' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'cst_icms',
		'cfop',
		'aliq_icms',
		'vl_opr',
		'vl_bc_issqn',
		'aliq_issqn',
		'vl_issqn',
		'vl_bc_icms',
		'vl_icms',
		'cod_obs'
	];
}