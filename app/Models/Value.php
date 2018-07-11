<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Value
 * @package App\Models
 * @version July 11, 2018, 1:44 am UTC
 *
 * @property integer product_id
 * @property string attr_name
 * @property string attr_value
 */
class Value extends Model
{
    use SoftDeletes;

    public $table = 'values';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'product_id',
        'attr_name',
        'attr_value'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'product_id' => 'integer',
        'attr_name' => 'string',
        'attr_value' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product_id' => 'required',
        'attr_name' => 'required'
    ];

    public function attributable()
    {
        return $this->morphTo();
    }
    
}
