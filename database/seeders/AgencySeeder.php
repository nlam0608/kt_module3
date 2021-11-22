<?php

namespace Database\Seeders;

use App\Models\Agency;
use Illuminate\Database\Seeder;

class AgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $agency = new Agency();
        $agency->name = '102';
        $agency->phone = '1234644';
        $agency->email = 'lam@gmail.com';
        $agency->address = 'Hà Nội';
        $agency->name_manage = 'Nguyễn Văn Lâm';
        $agency->status = 'Hoạt động';
        $agency->save();

    }
}
