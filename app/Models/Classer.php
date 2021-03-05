<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classer extends Model
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
        'school_id',
        'grade_id',
        'start_date',
        'end_date',
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
        'school_id' => 'integer',
        'grade_id' => 'integer',
        'start_date' => 'timestamp',
        'end_date' => 'timestamp',
        'created_date' => 'timestamp',
        'created_by' => 'timestamp',
        'last_modified_date' => 'timestamp',
        'modified_by' => 'timestamp',
        'deleted_at' => 'timestamp',
    ];


    public function school()
    {
        return $this->belongsTo(\App\Models\School::class);
    }

    public function grade()
    {
        return $this->belongsTo(\App\Models\Grade::class);
    }
}
