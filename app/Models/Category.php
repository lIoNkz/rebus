<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\NodeTrait;

/**
 * Class Category
 * @package App\Models
 * @version July 11, 2018, 1:34 am UTC
 *
 * @property string name
 * @property integer parent_id
 */
class Category extends Model
{
    use SoftDeletes;
    use NodeTrait;

    public $table = 'categories';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'img',
        'parent_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'img' => 'string',
        'parent_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'img' => 'required'
    ];

    public function attributes()
    {
        return $this->morphMany('App\Models\Attribute', 'attributable');
    }    

    public function products()
    {
        return $this->morphMany('App\Models\Product', 'category');
    }   

    public static function depth($id) {
        return Category::withDepth()->find($id)->depth;
    }

    public static function children($id) {
        
    
        $parent = Category::find($id);

            if($parent->hasChildren()) {
                $categories = $parent->descendants->all();
            }

            $elder = 99999;
            $elderId = 0;
            foreach($categories as $cat) {
                $dep = Category::withDepth()->find($cat->id)->depth;
                if($dep < $elder) {

                    $elder = $dep;
                    $elderId = $cat->id;
                }

            }

            $sibling  = Category::find($elderId);
            $children = Category::find($elderId)->siblings()->get();

            $children->push($sibling);


            return $children;
    } 

    public static function select() {
        $res = self::withDepth()->having('depth','>=', 0)->get();
        return ['' => 'Верхний уровень'] + $res->pluck('name', 'id')->all();
    }

    public static function arrayOfNestedSets() {
        $res = self::withDepth()->having('depth','=', 0)->get();
        return ['' => 'Верхний уровень'] + $res->pluck('name', 'id')->all();
    }
}
