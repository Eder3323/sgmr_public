<?php

namespace App\Models\Reglamentos\Inspector;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreRegistrationLicense extends Model
{
    use HasFactory;
    protected $fillable = [
        'owner_name',
        'company_name',
        'rfc',
        'business_type',
        'street_name',
        'street_number',
        'locality',
        'municipality',
        'cp',
    ];
}
