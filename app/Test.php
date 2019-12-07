<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'test';
    protected $fillable = ['text', 'is_enabled'];
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $casts = [
        'is_enabled' => 'boolean',
    ];

    public static function find_max_id()
    {
        $id = Test::max('id');
        $Row = Test::find($id);
        $Copy = $Row->attributes;

        $Row->attributes['text'] = 'So what about pepito?';
        $Row->attributes['is_enabled'] = 1;
        $Row->save();

        return $Copy;
    }

    public static function find_by_id($in_id)
    {
        $Row = Test::find($in_id);
        if ($Row === null){
            return null;
        }
        return $Row->attributes;
    }

    public static function find_by_text($in_text)
    {
        $Collection = Test::where('text', 'like', '%'.$in_text.'%')->get();
        if (count($Collection) > 0){
            $ResultCollection = array();
            foreach($Collection as $item){
                $ResultCollection[] = $item->attributes;
            }
            return $ResultCollection;
        }
        return null;
    }
}
