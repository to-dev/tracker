<?php

namespace Topoff\Tracker\Models;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'user-tracker';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'domains';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];
}