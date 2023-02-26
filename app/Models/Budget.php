<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;

    public function year()
    {
        return $this->belongsTo(SessionYear::class, 'session_id', 'id');
    }

    public function budget_lists()
    {
        return $this->hasMany(BudgetList::class,);
    }
}
