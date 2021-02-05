<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Samsung Mobile',
                "price"=>"25000",
                "description"=>"A smart phone with much more feature.",
                 'category'=>'Mobile',
                 "galary"=>"https://bsmedia.business-standard.com/media-handler.php?mediaPath=https://bsmedia.business-standard.com/_media/bs/img/article/2020-02/25/full/1582632833-9463.jpg&width=1200"
           ],
           [
            'name'=>'LG Mobile',
            "price"=>"20000",
            "description"=>"A smart phone with much more feature.",
             'category'=>'Mobile',
             "galary"=>"https://img.etimg.com/thumb/msid-53519051,width-640,resizemode-4,imgsize-20558/lg-x-screen-dual-screen-smartphone-for-rs-12000.jpg"
             ],
            [
                'name'=>'IPhone Mobile',
                "price"=>"25000",
                "description"=>"A smart phone with much more feature.",
                'category'=>'Mobile',
                "galary"=>"https://fdn2.gsmarena.com/vv/pics/apple/apple-iphone-x-new-1.jpg"
             ],
            [
                 'name'=>'Sonny TV',
                 "price"=>"25000",
                 "description"=>"A smart TV with much more feature.",
                  'category'=>'Television',
                  "galary"=>"https://images-na.ssl-images-amazon.com/images/I/71VC9cPNy6L._AC_SL1080_.jpg"
            ],
            [
                'name'=>'Panasonic TV',
                "price"=>"20000",
                "description"=>"A screen touch TV with advance features",
                 'category'=>'Television',
                 "galary"=>"https://i.ytimg.com/vi/1lY92VtnB0I/maxresdefault.jpg"

            ],
            [
                'name'=>'Panasonic Fridge ',
                "price"=>"1000",
                "description"=>"Afridge with much more advanced features",
                 'category'=>'Fridge',
                 "galary"=>"https://www.dvdoverseas.com/resize/Shared/Images/Product/Panasonic-NR-BJ226-2-Door-Sleek-Refrigerator/NR-BJ226SN3.jpg?bw=500&bh=500"

           ]
        ]);
    }
}
