<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Attribute
 * @package App\Models
 * @version July 11, 2018, 1:37 am UTC
 *
 * @property string attr_name
 * @property integer category_id
 */
class Attribute extends Model
{
    use SoftDeletes;

    public $table = 'attributes';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'attr_name',
        'category_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'attr_name' => 'string',
        'category_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'attr_name' => 'required',
        'category_id' => 'required'
    ];

    public function attributable()
    {
        return $this->morphTo();
    }
    
}
