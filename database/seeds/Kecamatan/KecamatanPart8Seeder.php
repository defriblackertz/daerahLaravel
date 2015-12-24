<?php

use App\Kecamatan;
use Illuminate\Database\Seeder;

class KecamatanPart8Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = '[{"id":"920706","kabupaten_id":"9207","nama":"Rumberpon"},{"id":"920707","kabupaten_id":"9207","nama":"Naikere"},{"id":"920708","kabupaten_id":"9207","nama":"Rasiei"},{"id":"920709","kabupaten_id":"9207","nama":"Kuri Wamesa"},{"id":"920710","kabupaten_id":"9207","nama":"Roon"},{"id":"920711","kabupaten_id":"9207","nama":"Roswar"},{"id":"920712","kabupaten_id":"9207","nama":"Nikiwar"},{"id":"920713","kabupaten_id":"9207","nama":"Soug Jaya"},{"id":"920801","kabupaten_id":"9208","nama":"Kaimana"},{"id":"920802","kabupaten_id":"9208","nama":"Buruway"},{"id":"920803","kabupaten_id":"9208","nama":"Teluk Arguni Atas"},{"id":"920804","kabupaten_id":"9208","nama":"Teluk Etna"},{"id":"920805","kabupaten_id":"9208","nama":"Kambrau"},{"id":"920806","kabupaten_id":"9208","nama":"Teluk Arguni Bawah"},{"id":"920807","kabupaten_id":"9208","nama":"Yamor"},{"id":"920901","kabupaten_id":"9209","nama":"Fef"},{"id":"920902","kabupaten_id":"9209","nama":"Miyah"},{"id":"920903","kabupaten_id":"9209","nama":"Yembun"},{"id":"920904","kabupaten_id":"9209","nama":"Kwoor"},{"id":"920905","kabupaten_id":"9209","nama":"Sausapor"},{"id":"920906","kabupaten_id":"9209","nama":"Abun"},{"id":"920907","kabupaten_id":"9209","nama":"Syujak"},{"id":"920908","kabupaten_id":"9209","nama":"Moraid"},{"id":"920909","kabupaten_id":"9209","nama":"Kebar"},{"id":"920910","kabupaten_id":"9209","nama":"Amberbaken"},{"id":"920911","kabupaten_id":"9209","nama":"Senopi"},{"id":"920912","kabupaten_id":"9209","nama":"Mubrani"},{"id":"920913","kabupaten_id":"9209","nama":"Bikar"},{"id":"920914","kabupaten_id":"9209","nama":"Bamusbama"},{"id":"920915","kabupaten_id":"9209","nama":"Ases"},{"id":"920916","kabupaten_id":"9209","nama":"Miyah Selatan"},{"id":"920917","kabupaten_id":"9209","nama":"Ireres"},{"id":"920918","kabupaten_id":"9209","nama":"Tobouw"},{"id":"920919","kabupaten_id":"9209","nama":"Wilhem Roumbouts"},{"id":"920920","kabupaten_id":"9209","nama":"Tinggouw"},{"id":"920921","kabupaten_id":"9209","nama":"Kwesefo"},{"id":"920922","kabupaten_id":"9209","nama":"Mawabuan"},{"id":"920923","kabupaten_id":"9209","nama":"Kebar Timur"},{"id":"920924","kabupaten_id":"9209","nama":"Kebar Selatan"},{"id":"920925","kabupaten_id":"9209","nama":"Manekar"},{"id":"920926","kabupaten_id":"9209","nama":"Mpur"},{"id":"920927","kabupaten_id":"9209","nama":"Amberbaken Barat"},{"id":"920928","kabupaten_id":"9209","nama":"Kasi"},{"id":"920929","kabupaten_id":"9209","nama":"Selemkai"},{"id":"921001","kabupaten_id":"9210","nama":"Aifat"},{"id":"921002","kabupaten_id":"9210","nama":"Aifat Utara"},{"id":"921003","kabupaten_id":"9210","nama":"Aifat Timur"},{"id":"921004","kabupaten_id":"9210","nama":"Aifat Selatan"},{"id":"921005","kabupaten_id":"9210","nama":"Aitinyo Barat"},{"id":"921006","kabupaten_id":"9210","nama":"Aitinyo"},{"id":"921007","kabupaten_id":"9210","nama":"Aitinyo Utara"},{"id":"921008","kabupaten_id":"9210","nama":"Ayamaru"},{"id":"921009","kabupaten_id":"9210","nama":"Ayamaru Utara"},{"id":"921010","kabupaten_id":"9210","nama":"Ayamaru Timur"},{"id":"921011","kabupaten_id":"9210","nama":"Mare"},{"id":"921012","kabupaten_id":"9210","nama":"Aifat Timur Tengah"},{"id":"921013","kabupaten_id":"9210","nama":"Aifat Timur Jauh"},{"id":"921014","kabupaten_id":"9210","nama":"Aifat Timur Selatan"},{"id":"921015","kabupaten_id":"9210","nama":"Ayamaru Selatan"},{"id":"921016","kabupaten_id":"9210","nama":"Ayamaru Jaya"},{"id":"921017","kabupaten_id":"9210","nama":"Ayamaru Selatan Jaya"},{"id":"921018","kabupaten_id":"9210","nama":"Ayamaru Timur Selatan"},{"id":"921019","kabupaten_id":"9210","nama":"Ayamaru Utara Timur"},{"id":"921020","kabupaten_id":"9210","nama":"Ayamaru Tengah"},{"id":"921021","kabupaten_id":"9210","nama":"Ayamaru Barat"},{"id":"921022","kabupaten_id":"9210","nama":"Aitinyo Tengah"},{"id":"921023","kabupaten_id":"9210","nama":"Aitinyo Raya"},{"id":"921024","kabupaten_id":"9210","nama":"Mare Selatan"},{"id":"921101","kabupaten_id":"9211","nama":"Ransiki"},{"id":"921102","kabupaten_id":"9211","nama":"Oransbari"},{"id":"921103","kabupaten_id":"9211","nama":"Neney"},{"id":"921104","kabupaten_id":"9211","nama":"Dataran Isim"},{"id":"921105","kabupaten_id":"9211","nama":"Momi Waren"},{"id":"921106","kabupaten_id":"9211","nama":"Tahota"},{"id":"921201","kabupaten_id":"9212","nama":"Anggi"},{"id":"921202","kabupaten_id":"9212","nama":"Anggi Gida"},{"id":"921203","kabupaten_id":"9212","nama":"Membey"},{"id":"921204","kabupaten_id":"9212","nama":"Sururey"},{"id":"921205","kabupaten_id":"9212","nama":"Didohu"},{"id":"921206","kabupaten_id":"9212","nama":"Taige"},{"id":"921207","kabupaten_id":"9212","nama":"Catubouw"},{"id":"921208","kabupaten_id":"9212","nama":"Testega"},{"id":"921209","kabupaten_id":"9212","nama":"Minyambaouw"},{"id":"921210","kabupaten_id":"9212","nama":"Hingk"},{"id":"927101","kabupaten_id":"9271","nama":"Sorong"},{"id":"927102","kabupaten_id":"9271","nama":"Sorong Timur"},{"id":"927103","kabupaten_id":"9271","nama":"Sorong Barat"},{"id":"927104","kabupaten_id":"9271","nama":"Sorong Kepulauan"},{"id":"927105","kabupaten_id":"9271","nama":"Sorong Utara"},{"id":"927106","kabupaten_id":"9271","nama":"Sorong Manoi"},{"id":"927107","kabupaten_id":"9271","nama":"Sorong Kota"},{"id":"927108","kabupaten_id":"9271","nama":"Klaurung"},{"id":"927109","kabupaten_id":"9271","nama":"Malaimsimsa"},{"id":"927110","kabupaten_id":"9271","nama":"Maladum Mes"}]';

		foreach(json_decode($array) as $val) { Kecamatan::create( (array) $val ); }		
    }
}