<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StaffEmergency extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    protected $table = 'staff_emergency_contact';
}
