<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heads extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static function tree()
    {
       $allHeads = Heads::get();

       $rootHeads = $allHeads->whereNull('parent_id');
       self::formatTree($rootHeads, $allHeads );

       return $rootHeads;
    }

    private static function formatTree($heads, $allHeads){
        foreach($heads as $head){
            $head->children = $allHeads->where('parent_id',$head->id)->values();

            if($head->children->isNotEmpty()){
                self::formatTree($head->children, $allHeads);
            }
        }
    }

    public function isChild(): bool
    {
        return $this->parent_id !== null;
    }

    protected $casts = [
        "parent"  => "integer",
        "status"  => "integer",
    ];

}
