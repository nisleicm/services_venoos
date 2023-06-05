<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegE312
 * 
 * @property int $id
 * @property int $id_pai
 * @property int $linha
 * @property string|null $reg
 * @property string|null $num_da
 * @property string|null $num_proc
 * @property string|null $ind_proc
 * @property string|null $proc
 * @property string|null $txt_compl
 *
 * @package App\Models
 */
class RegE312 extends Model
{
	protected $table = 'reg_e312';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_pai' => 'int',
		'linha' => 'int'
	];

	protected $fillable = [
		'id_pai',
		'linha',
		'reg',
		'num_da',
		'num_proc',
		'ind_proc',
		'proc',
		'txt_compl'
	];
}
