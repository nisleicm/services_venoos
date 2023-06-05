<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegD605
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $cod_class
 * @property float|null $vl_item
 * @property float|null $vl_desc
 * @property string|null $cst_cofins
 * @property float|null $vl_bc_cofins
 * @property float|null $aliq_cofins
 * @property float|null $vl_cofins
 * @property string|null $cod_cta
 *
 * @package App\Models
 */
class ContRegD605 extends Model
{
	protected $table = 'cont_reg_d605';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_item' => 'float',
		'vl_desc' => 'float',
		'vl_bc_cofins' => 'float',
		'aliq_cofins' => 'float',
		'vl_cofins' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'cod_class',
		'vl_item',
		'vl_desc',
		'cst_cofins',
		'vl_bc_cofins',
		'aliq_cofins',
		'vl_cofins',
		'cod_cta'
	];
}
