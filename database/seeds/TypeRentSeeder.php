<?php

use Illuminate\Database\Seeder;
use App\TypeRent;
class TypeRentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $TypeRent = new TypeRent();
        $TypeRent->TypeRent = "Villa Theo Giờ";
        $TypeRent->price  = "500000";
        $TypeRent->Unit  = "Giờ";
        $TypeRent->save();

        $TypeRent = new TypeRent();
        $TypeRent->TypeRent = "Villa Theo ngày";
        $TypeRent->price  = "10000000";
        $TypeRent->Unit  = "Ngày";
        $TypeRent->save();

        $TypeRent = new TypeRent();
        $TypeRent->TypeRent = "House theo Giờ";
        $TypeRent->price  = "250000";
        $TypeRent->Unit  = "Giờ";
        $TypeRent->save();

        $TypeRent = new TypeRent();
        $TypeRent->TypeRent = "House theo Ngày";
        $TypeRent->price  = "3000000";
        $TypeRent->Unit  = "Ngày";
        $TypeRent->save();

        $TypeRent = new TypeRent();
        $TypeRent->TypeRent = "Room theo Giờ";
        $TypeRent->price  = "150000";
        $TypeRent->Unit  = "Giờ";
        $TypeRent->save();

        $TypeRent = new TypeRent();
        $TypeRent->TypeRent = "Room theo Ngày";
        $TypeRent->price  = "1000000";
        $TypeRent->Unit  = "Ngày";
        $TypeRent->save();


    }
}
