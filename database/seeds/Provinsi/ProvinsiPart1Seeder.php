<?php

use App\Provinsi;
use Illuminate\Database\Seeder;

class ProvinsiPart1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = '[{"id":"11","nama":"Aceh"},{"id":"12","nama":"Sumatera Utara"},{"id":"13","nama":"Sumatera Barat"},{"id":"14","nama":"Riau"},{"id":"15","nama":"Jambi"},{"id":"16","nama":"Sumatera Selatan"},{"id":"17","nama":"Bengkulu"},{"id":"18","nama":"Lampung"},{"id":"19","nama":"Kepulauan Bangka Belitung"},{"id":"21","nama":"Kepulauan Riau"},{"id":"31","nama":"DKI Jakarta"},{"id":"32","nama":"Jawa Barat"},{"id":"33","nama":"Jawa Tengah"},{"id":"34","nama":"DI Yogyakarta"},{"id":"35","nama":"Jawa Timur"},{"id":"36","nama":"Banten"},{"id":"51","nama":"Bali"},{"id":"52","nama":"Nusa Tenggara Barat"},{"id":"53","nama":"Nusa Tenggara Timur"},{"id":"61","nama":"Kalimantan Barat"},{"id":"62","nama":"Kalimantan Tengah"},{"id":"63","nama":"Kalimantan Selatan"},{"id":"64","nama":"Kalimantan Timur"},{"id":"65","nama":"Kalimantan Utara"},{"id":"71","nama":"Sulawesi Utara"},{"id":"72","nama":"Sulawesi Tengah"},{"id":"73","nama":"Sulawesi Selatan"},{"id":"74","nama":"Sulawesi Tenggara"},{"id":"75","nama":"Gorontalo"},{"id":"76","nama":"Sulawesi Barat"},{"id":"81","nama":"Maluku"},{"id":"82","nama":"Maluku Utara"},{"id":"91","nama":"Papua Barat"},{"id":"92","nama":"Papua"}]';

		foreach(json_decode($array) as $val) { Provinsi::create( (array) $val ); }		
    }
}