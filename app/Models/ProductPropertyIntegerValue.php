<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 06 Dec 2018 06:52:28 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ProductPropertyIntegerValue
 * 
 * @property int $id
 * @property int $property_id
 * @property int $product_id
 * @property int $value
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Product $product
 * @property \App\Models\Property $property
 *
 * @package App\Models
 */
class ProductPropertyIntegerValue extends Eloquent
{
	protected $casts = [
		'property_id' => 'int',
		'product_id' => 'int',
		'value' => 'int'
	];

	protected $fillable = [
		'property_id',
		'product_id',
		'value'
	];

	public function product()
	{
		return $this->belongsTo(\App\Models\Product::class);
	}

	public function property()
	{
		return $this->belongsTo(\App\Models\Property::class);
	}
}
