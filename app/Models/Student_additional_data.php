<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student_additional_data extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'student_additional_data';
    
    /**
     * Attributes that should be mass-assignable.
     * 
     *
     * @var array
     */
    protected $fillable = ['student_id', 'type_of_device', 'type_of_device_at_home', 'internet_at_home', 'internet_device', 'institution_id', 'tv_at_home', 'satellite_tv__at_home'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];

}
