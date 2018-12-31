<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 28 Dec 2018 14:30:36 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WpPostmetum
 * 
 * @property int $meta_id
 * @property int $post_id
 * @property string $meta_key
 * @property string $meta_value
 *
 * @package App\Models
 */
class WpPostmetum extends Eloquent
{
	protected $primaryKey = 'meta_id';
	public $timestamps = false;

	protected $casts = [
		'post_id' => 'int'
	];

	protected $fillable = [
		'post_id',
		'meta_key',
		'meta_value'
	];
}
