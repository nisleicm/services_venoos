<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContRegM100
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $cont_reg
 * @property string|null $cod_cred
 * @property string|null $ind_cred_ori
 * @property float|null $vl_bc_cred
 * @property float|null $aliq_pis
 * @property float|null $quant_bc_pis
 * @property float|null $aliq_pis_quant
 * @property float|null $vl_cred
 * @property float|null $vl_ajus_acres
 * @property float|null $vl_ajus_reduc
 * @property float|null $vl_cred_dif
 * @property float|null $vl_cred_disp
 * @property string|null $ind_desc_cred
 * @property float|null $vl_cred_desc
 * @property float|null $sld_cred
 *
 * @package App\Models
 */
class ContRegM100 extends Model
{
	protected $table = 'cont_reg_m100';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int',
		'vl_bc_cred' => 'float',
		'aliq_pis' => 'float',
		'quant_bc_pis' => 'float',
		'aliq_pis_quant' => 'float',
		'vl_cred' => 'float',
		'vl_ajus_acres' => 'float',
		'vl_ajus_reduc' => 'float',
		'vl_cred_dif' => 'float',
		'vl_cred_disp' => 'float',
		'vl_cred_desc' => 'float',
		'sld_cred' => 'float'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'cont_reg',
		'cod_cred',
		'ind_cred_ori',
		'vl_bc_cred',
		'aliq_pis',
		'quant_bc_pis',
		'aliq_pis_quant',
		'vl_cred',
		'vl_ajus_acres',
		'vl_ajus_reduc',
		'vl_cred_dif',
		'vl_cred_disp',
		'ind_desc_cred',
		'vl_cred_desc',
		'sld_cred'
	];
}
