<?php

use Illuminate\Database\Seeder;
use App\City;
class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $city = new City();
        $city->name = "Hà Nội";
        $city->slug = str_slug($city->name);
        $city->save();

        $city = new City();
        $city->name = "TP. Hồ Chí Minh";
        $city->slug = str_slug($city->name);
        $city->save();

        $city = new City();
        $city->name = "Hải Phòng";
        $city->slug = str_slug($city->name);
        $city->save();

        $city = new City();
        $city->name = "Đà Nẵng";
        $city->slug = str_slug($city->name);
        $city->save();

        $city = new City();
        $city->name = "Bắc Ninh";
        $city->slug = str_slug($city->name);
        $city->save();

        $city = new City();
        $city->name = "Bắc Giang";
        $city->slug = str_slug($city->name);
        $city->save();

        $city = new City();
        $city->name = "Nghê An";
        $city->slug = str_slug($city->name);
        $city->save();

        $city = new City();
        $city->name = "Thanh Hoá";
        $city->slug = str_slug($city->name);
        $city->save();
    }
}
