<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Room
 * @package App\Models
 * @version September 17, 2021, 1:40 pm UTC
 *
 * @property string $roomNumber
 * @property string $roomName
 * @property string $yourName
 * @property string $yourAddress
 * @property string $Date
 */
class Room extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'room';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'roomNumber',
        'roomName',
        'yourName',
        'yourAddress',
        'Date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'roomNumber' => 'string',
        'roomName' => 'string',
        'yourName' => 'string',
        'yourAddress' => 'string',
        'Date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'roomNumber' => 'required|string|max:100',
        'roomName' => 'required|string|max:100',
        'yourName' => 'required|string|max:100',
        'yourAddress' => 'required|string|max:100',
        'Date' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
