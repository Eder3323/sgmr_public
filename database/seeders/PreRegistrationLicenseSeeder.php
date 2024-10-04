<?php

namespace Database\Seeders;

use App\Models\Reglamentos\Inspector\PreRegistrationLicense;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Number;

class PreRegistrationLicenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PreRegistrationLicense::create([
            'owner_name' => 'John Doe',
            'company_name' => 'Doe Industries',
            'rfc' => 'DOE123456789',
            'business_type' => 'Manufacturing',
            'street_name' => 'Main Street',
            'street_number' => '123',
            'locality' => 'Downtown',
            'municipality' => 'Metropolis',
            'cp' => '12345',
        ]);
//        DB::table('pre_registration_licenses')->insert([
//            'owner_name' => Str::random(10),
//            'company_name' => Str::random(10),
//            'rfc' => Str::random(12),
//            'business_type' => Str::random(10),
//            'street_name' => Str::random(10),
//            'street_number' => Str::random(3),
//            'locality' => Str::random(10),
//            'municipality' => Str::random(10),
//            'cp' => Number::clamp(3,1,9),
//
//        ]);
    }
}
