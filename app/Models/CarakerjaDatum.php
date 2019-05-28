<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 27 May 2019 08:47:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CarakerjaDatum
 * 
 * @property int $id
 * @property int $column
 * @property int $index
 * @property string $field
 * @property string $content
 *
 * @package App\Models
 */
class CarakerjaDatum extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'column' => 'int',
		'index' => 'int'
	];

	protected $fillable = [
		'column',
		'index',
		'field',
		'content'
	];
}
