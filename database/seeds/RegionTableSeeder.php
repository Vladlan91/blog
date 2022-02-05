<?php
use App\Entity\Region;
use Illuminate\Database\Seeder;

class RegionTableSeeder extends Seeder
{
    public function run()
    {
        Region::create(['id'=>'1', 'name'=>'Івано-Франківська область','slag'=>'ivano-frankivska-oblast',  'created_at'=>'2019-01-13 11:51:28', 'updated_at'=>'2019-01-13 11:51:28' ]);
        Region::create(['id'=>'2', 'name'=>'Волинська область','slag'=>'volinska-oblast', 'created_at'=>'2019-01-13 11:51:28', 'updated_at'=>'2019-01-13 11:51:28' ]);
        Region::create(['id'=>'3', 'name'=>'Житомирська область','slag'=>'zhitomirska-oblast', 'created_at'=>'2019-01-13 11:51:28', 'updated_at'=>'2019-01-13 11:51:28' ]);
        Region::create(['id'=>'4', 'name'=>'Кіровоградська область','slag'=>'kirovogradska-oblast', 'created_at'=>'2019-01-13 11:51:28', 'updated_at'=>'2019-01-13 11:51:28' ]);
        Region::create(['id'=>'5', 'name'=>'Луганська область','slag'=>'luganska-oblast', 'created_at'=>'2019-01-13 11:51:28', 'updated_at'=>'2019-01-13 11:51:28' ]);
        Region::create(['id'=>'6', 'name'=>'Одеська область','slag'=>'odeska-oblast', 'created_at'=>'2019-01-13 11:51:28', 'updated_at'=>'2019-01-13 11:51:28' ]);
        Region::create(['id'=>'7', 'name'=>'Сумська область','slag'=>'sumska-oblast', 'created_at'=>'2019-01-13 11:51:28', 'updated_at'=>'2019-01-13 11:51:28' ]);
        Region::create(['id'=>'8', 'name'=>'Херсонська область','slag'=>'hersonska-oblast', 'created_at'=>'2019-01-13 11:51:28', 'updated_at'=>'2019-01-13 11:51:28' ]);
        Region::create(['id'=>'9', 'name'=>'Чернівецька область','slag'=>'chernivecka-oblast', 'created_at'=>'2019-01-13 11:51:28', 'updated_at'=>'2019-01-13 11:51:28' ]);
        Region::create(['id'=>'10', 'name'=>'АР Кримь','slag'=>'ar-krim', 'created_at'=>'2019-01-13 11:51:28', 'updated_at'=>'2019-01-13 11:51:28' ]);
        Region::create(['id'=>'11', 'name'=>'Дніпропетровська область','slag'=>'dnipropetrovska-oblast', 'created_at'=>'2019-01-13 11:51:28', 'updated_at'=>'2019-01-13 11:51:28' ]);
        Region::create(['id'=>'12', 'name'=>'Закарпатська область','slag'=>'zakarpatska-oblast', 'created_at'=>'2019-01-13 11:51:28', 'updated_at'=>'2019-01-13 11:51:28' ]);
        Region::create(['id'=>'13', 'name'=>'Київська область','slag'=>'kiyivska-oblast', 'created_at'=>'2019-01-13 11:51:28', 'updated_at'=>'2019-01-13 11:51:28' ]);
        Region::create(['id'=>'14', 'name'=>'Львівська область','slag'=>'lvivska-oblast', 'created_at'=>'2019-01-13 11:51:28', 'updated_at'=>'2019-01-13 11:51:28' ]);
        Region::create(['id'=>'15', 'name'=>'Полтавська область','slag'=>'poltavska-oblast', 'created_at'=>'2019-01-13 11:51:28', 'updated_at'=>'2019-01-13 11:51:28' ]);
        Region::create(['id'=>'16', 'name'=>'Тернопільська область','slag'=>'ternopilska-oblast', 'created_at'=>'2019-01-13 11:51:28', 'updated_at'=>'2019-01-13 11:51:28' ]);
        Region::create(['id'=>'17', 'name'=>'Хмельницька область','slag'=>'hmelnicka-oblast', 'created_at'=>'2019-01-13 11:51:28', 'updated_at'=>'2019-01-13 11:51:28' ]);
        Region::create(['id'=>'18', 'name'=>'Чернігівська область','slag'=>'chernigivska-oblast', 'created_at'=>'2019-01-13 11:51:28', 'updated_at'=>'2019-01-13 11:51:28' ]);
        Region::create(['id'=>'19', 'name'=>'Вінницька область','slag'=>'vinnicka-oblast', 'created_at'=>'2019-01-13 11:51:28', 'updated_at'=>'2019-01-13 11:51:28' ]);
        Region::create(['id'=>'20', 'name'=>'Донецька область','slag'=>'donecka-oblast', 'created_at'=>'2019-01-13 11:51:28', 'updated_at'=>'2019-01-13 11:51:28' ]);
        Region::create(['id'=>'21', 'name'=>'Запорізька область','slag'=>'zaporizka-oblast', 'created_at'=>'2019-01-13 11:51:28', 'updated_at'=>'2019-01-13 11:51:28' ]);
        Region::create(['id'=>'22', 'name'=>'Курорт Буковель','slag'=>'kurort-bukovel', 'created_at'=>'2019-01-13 11:51:28', 'updated_at'=>'2019-01-13 11:51:28' ]);
        Region::create(['id'=>'23', 'name'=>'Миколаївська область','slag'=>'mikolayivska-oblast', 'created_at'=>'2019-01-13 11:51:28', 'updated_at'=>'2019-01-13 11:51:28' ]);
        Region::create(['id'=>'24', 'name'=>'Рівненська область','slag'=>'rivnenska-oblast', 'created_at'=>'2019-01-13 11:51:28', 'updated_at'=>'2019-01-13 11:51:28' ]);
        Region::create(['id'=>'25', 'name'=>'Харківська область','slag'=>'harkivska-oblast', 'created_at'=>'2019-01-13 11:51:28', 'updated_at'=>'2019-01-13 11:51:28' ]);
        Region::create(['id'=>'26', 'name'=>'Черкаська область','slag'=>'cherkaska-oblast', 'created_at'=>'2019-01-13 11:51:28', 'updated_at'=>'2019-01-13 11:51:28' ]);
    }
}
