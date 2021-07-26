<?php
namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
 public function run()
     {
        $service1 = Service::create(['name' => 'نقل عادي' ,'english_name' => 'Saudi Arabia','type' => 'local','status'=> 'draft']);
        $service2 = Service::create(['name' => 'نقل طعام' ,'english_name' => 'Egypt','type' => 'local','status'
        =>'draft']);
        $service3 = Service::create(['name' => 'نقل ممتاز عادي','english_name' => 'Palestine','type' =>'local','status'
        => 'draft']);
        $service4 = Service::create(['name' => 'شحن طرود عادي' ,'english_name' => 'Saudi Arabia','type'
        =>'local','status' => 'draft']);
        $service5 = Service::create(['name' => 'نقل أموال ' ,'english_name' => 'Egypt','type' => 'local','status'
        =>'draft']);
        $service6 = Service::create(['name' => 'طرد بريد','english_name' => 'Palestine','type' => 'local','status'
        =>'draft']);
        $service7 = Service::create(['name' => 'نقل خاص ' ,'english_name' => 'Saudi Arabia','type' => 'local','status'=>
        'draft']);
        $service8 = Service::create(['name' => 'نقل سريع ' ,'english_name' => 'Egypt','type' => 'local','status'
        =>'draft']);
        $service9 = Service::create(['name' => 'طرد سريع ','english_name' => 'Palestine','type' => 'local','status' =>
        'draft']);
        $service10 = Service::create(['name' => 'نقل جوي سريع' ,'english_name' => 'Saudi Arabia','type'
        =>'local','status' => 'draft']);
    }
}
