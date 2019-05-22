<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 22 May 2019 04:47:38 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class FooterDatum
 * 
 * @property int $id
 * @property int $column
 * @property int $index
 * @property string $field
 * @property string $content
 * @property string $link
 *
 * @package App\Models
 */
class FooterDatum extends Eloquent
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
		'content',
		'link'
	];
}
