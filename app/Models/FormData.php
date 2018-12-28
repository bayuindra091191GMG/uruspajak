<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 28 Dec 2018 06:22:57 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class FormData
 * 
 * @property int $id
 * @property string $type
 * @property string $zip
 * @property string $who
 * @property string $income
 * @property string $tax_report
 * @property string $omzet
 * @property string $package
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property string $business
 * @property string $city
 * @property string $state
 * @property string $company_name
 * @property string $when
 * @property \Carbon\Carbon $created_at
 *
 * @package App\Models
 */
class FormData extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'type',
		'zip',
		'who',
		'income',
		'tax_report',
		'omzet',
		'package',
		'first_name',
		'last_name',
		'email',
		'phone',
		'business',
		'city',
		'state',
		'company_name',
		'when'
	];
}
