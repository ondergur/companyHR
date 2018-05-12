<?php

use App\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Company::truncate();
        DB::table('companies')->insert([
            'name' => 'Company 1',
            'email' => 'company@admin.com',
            'phone' => '054462444552',
            'address' => 'ataturk mah.',
            'logo' => '',
            'website' => '',


        ]);
    }
}
