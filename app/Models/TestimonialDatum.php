<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 24 May 2019 04:20:27 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TestimonialDatum
 * 
 * @property int $id
 * @property int $column
 * @property int $index
 * @property string $field
 *
 * @package App\Models
 */
class TestimonialDatum extends Eloquent
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
		'name1',
		'name2',
		'content'
	];
}
