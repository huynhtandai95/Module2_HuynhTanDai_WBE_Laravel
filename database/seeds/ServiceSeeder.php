<?php

use Illuminate\Database\Seeder;
use App\Services;
class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $Services = new Services();
//        $Services->NameService = "BIỆT THỰ HƯỚNG BIỂN";
//        $Services->AreaUsed  = "900";
//        $Services->MaxPeople  = "10";
//        $Services->Standard  = "5 Sao";
//        $Services->Convenient  = "Có";
//        $Services->NumberFloors  = "3";
//        $Services->AreaPool  = "30";
//        $Services->TypeRent_id  = "5";
//        $Services->TypeOfService_id  = "1";
//        $Services->save();
//
//        $Services = new Services();
//        $Services->NameService = "BIỆT THỰ HƯỚNG VƯỜN";
//        $Services->AreaUsed  = "800";
//        $Services->MaxPeople  = "10";
//        $Services->Standard  = "5 Sao";
//        $Services->Convenient  = "Có";
//        $Services->NumberFloors  = "2";
//        $Services->AreaPool  = "25";
//        $Services->TypeRent_id  = "5";
//        $Services->TypeOfService_id  = "1";
//        $Services->save();

        $Services = new Services();
        $Services->NameService = "House 1";
        $Services->AreaUsed  = "200";
        $Services->MaxPeople  = "5";
        $Services->Standard  = "4 Sao";
        $Services->Convenient  = "Có";
        $Services->NumberFloors  = "2";
        $Services->TypeRent_id  = "6";
        $Services->TypeOfService_id  = "2";
        $Services->save();

        $Services = new Services();
        $Services->NameService = "House 2";
        $Services->AreaUsed  = "150";
        $Services->MaxPeople  = "5";
        $Services->Standard  = "3 Sao";
        $Services->Convenient  = "Có";
        $Services->NumberFloors  = "1";
        $Services->TypeRent_id  = "8";
        $Services->TypeOfService_id  = "2";
        $Services->save();

        $Services = new Services();
        $Services->NameService = "House 1";
        $Services->AreaUsed  = "200";
        $Services->MaxPeople  = "4";
        $Services->Standard  = "4 Sao";
        $Services->Convenient  = "Có";
        $Services->NumberFloors  = "2";
        $Services->TypeRent_id  = "8";
        $Services->TypeOfService_id  = "2";
        $Services->save();

        $Services = new Services();
        $Services->NameService = "Room 1";
        $Services->AreaUsed  = "150";
        $Services->MaxPeople  = "2";
        $Services->TypeRent_id  = "9";
        $Services->TypeOfService_id  = "3";
        $Services->save();
    }
}
