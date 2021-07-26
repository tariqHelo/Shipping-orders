<?php
namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Models\Area;
use Illuminate\Database\Seeder;

class PlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
 public function run()
     {
        $country01 = Country::create(['name' => 'السعودية' ,'english_name' => 'Saudi Arabia']);

        $city011 = City::create(['name' => 'Riyadh','english_name' => 'Riyadh' ,'country_id' => $country01->id]);
            $district0111 = Area::create(['name' => 'العليا','english_name' => 'Al Olyya'  ,'country_id' =>$country01->id, 'city_id' => $city011->id]);
            $district0112 = Area::create(['name' => 'الشامسي','english_name' => 'Al Shemaysi', 'country_id' =>$country01->id, 'city_id' => $city011->id]);
            $district0113 = Area::create(['name' => 'الملز','english_name' => 'Al Malaz', 'country_id' =>$country01->id, 'city_id' => $city011->id]);

        $city012 = City::create(['name' => 'جدة','english_name' => 'Jeddah', 'country_id' => $country01->id]);
            $district0121 = Area::create(['name' => 'المرجان','english_name' => 'Al Morjan', 'country_id' =>$country01->id, 'city_id' =>$city012->id]);
            $district0122 = Area::create(['name' => 'الخالدية','english_name' => 'Al Khaldeyyah', 'country_id'=>$country01->id, 'city_id' => $city012->id]);
            $district0123 = Area::create(['name' => 'السلامة','english_name' => 'Al Salamah', 'country_id' =>$country01->id, 'city_id' => $city012->id]);

        $city013 = City::create(['name' => 'الدمام','english_name' => 'Dammam', 'country_id' => $country01->id]);
            $district0131 = Area::create(['name' => 'الفيصلية','english_name' => 'Al Fesaleyyah', 'country_id'=>$country01->id, 'city_id' => $city013->id]);
            $district0132 = Area::create(['name' => 'الفخيرية','english_name' => 'Al Fakhreyyah', 'country_id'=>$country01->id, 'city_id' => $city013->id]);
            $district0133 = Area::create(['name' => 'الشاطئ','english_name' => 'Al Shatea', 'country_id' =>$country01->id, 'city_id' => $city013->id]);

       
        $country02 = Country::create(['name' => 'مصر' ,'english_name' => 'Egypt']);
            $city021 = City::create(['name' => 'القاهرة','english_name' => 'Cairo', 'country_id' => $country02->id]);
                $district0211 = Area::create(['name' => 'الزمالك','english_name' => 'Al Zamalik' , 'country_id'=>$country02->id, 'city_id' => $city021->id]);
                $district0212 = Area::create(['name' => 'الشامسي','english_name' => 'Al Shemaysi', 'country_id'=>$country02->id, 'city_id' => $city021->id]);
                $district0213 = Area::create(['name' => 'المعز','english_name' => 'Al Malaz', 'country_id'=>$country02->id, 'city_id' => $city021->id]);

            $city022 = City::create(['name' => 'الإسكندرية','english_name' => 'Alexandria', 'country_id' =>
            $country02->id]);
                $district0221 = Area::create(['name' => 'مركز الإسكندرية','english_name' => 'Al AlexandriaCenter','country_id' => $country02->id, 'city_id' => $city022->id]);
                $district0222 = Area::create(['name' => 'جنوب الإسكندرية','english_name' => 'Al AlexandriaEast','country_id'=> $country02->id, 'city_id' => $city022->id]);
                $district0223 = Area::create(['name' => 'غرب الإسكندرية','english_name' => 'Al AlexandriaWest','country_id'=> $country02->id, 'city_id' => $city022->id]);

            $city023 = City::create(['name' => 'الجيز','english_name' => 'Giza', 'country_id' => $country02->id]);
                $district0231 = Area::create(['name' => 'الدقي','english_name' => 'Al Doggi', 'country_id'=>$country02->id, 'city_id' => $city023->id]);
                $district0232 = Area::create(['name' => 'الجوزة','english_name' => 'Al Agoozah', 'country_id'=>$country02->id, 'city_id' => $city023->id]);
                $district0233 = Area::create(['name' => 'الهرم','english_name' => 'Al haram', 'country_id'=>$country02->id, 'city_id' => $city023->id]);


        $country03 = Country::create(['name' => 'فلسطين','english_name' => 'Palestine']);
            $city031 = City::create(['name' => 'القدس','english_name' => 'Al Quds', 'country_id' => $country03->id]);
                $district0311 = Area::create(['name' => 'السالمي','english_name' => 'Al Islami', 'country_id'=>$country02->id, 'city_id' => $city031->id]);
                $district0312 = Area::create(['name' => 'النصرا','english_name' => 'Al Nasara', 'country_id'=>$country02->id, 'city_id' => $city031->id]);
                $district0313 = Area::create(['name' => 'العرمان','english_name' => 'Al Arman', 'country_id'=>$country02->id, 'city_id' => $city031->id]);

            $city032 = City::create(['name' => 'غزة','english_name' => 'Gaza', 'country_id' => $country03->id]);
                $district0321 = Area::create(['name' => 'الرمال','english_name' => 'Al Remal', 'country_id'=>$country02->id, 'city_id' => $city032->id]);
                $district0322 = Area::create(['name' => 'تل الهوا','english_name' => 'Tal Alhawa', 'country_id'=>$country02->id, 'city_id' => $city032->id]);
                $district0323 = Area::create(['name' => 'النصر','english_name' => 'Al Nasr', 'country_id'=>$country02->id, 'city_id' => $city032->id]);

            $city033 = City::create(['name' => 'نابلس','english_name' => 'Nablus', 'country_id' => $country03->id]);
                $district0331 = Area::create(['name' => 'الهبلية','english_name' => 'Al Habalah', 'country_id'=>$country02->id, 'city_id' => $city033->id]);
                $district0332 = Area::create(['name' => 'تل العقبة','english_name' => 'Tal Aqabah', 'country_id'=>$country02->id, 'city_id' => $city033->id]);
                $district0333 = Area::create(['name' => 'الغرب','english_name' => 'Al Gharb', 'country_id' =>$country02->id, 'city_id' => $city033->id]);


    }
}
