<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 23 May 2019 08:05:27 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PackageDatum
 * 
 * @property int $id
 * @property int $column
 * @property int $index
 * @property string $field
 * @property string $content
 * @property int $is_disabled
 *
 * @package App\Models
 */
class PackageDatum extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'column' => 'int',
		'index' => 'int',
		'is_disabled' => 'int'
	];

	protected $fillable = [
		'column',
		'index',
		'field',
		'content',
		'is_disabled'
	];
}
