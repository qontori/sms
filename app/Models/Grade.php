<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'previous_grade_id',
        'next_grade_id',
        'created_date',
        'created_by',
        'last_modified_date',
        'modified_by',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'previous_grade_id' => 'integer',
        'next_grade_id' => 'integer',
        'created_date' => 'timestamp',
        'created_by' => 'timestamp',
        'last_modified_date' => 'timestamp',
        'modified_by' => 'timestamp',
        'deleted_at' => 'timestamp',
    ];


    public function previousGrade()
    {
        return $this->belongsTo(\App\Models\Grade::class);
    }

    public function nextGrade()
    {
        return $this->belongsTo(\App\Models\Grade::class);
    }
}
