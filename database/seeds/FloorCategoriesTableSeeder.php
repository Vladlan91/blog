<?php


use Illuminate\Database\Seeder;
use \App\Entity\Floor\Category;

class FloorCategoriesTableSeeder extends Seeder
{
    public function run()
    {
        Category::create(['id'=>'29', 'name'=>'Медицина','slag'=>'meditsina', '_lft'=>'1', '_rgt'=>'14','parent_id'=>'0' ]);
        Category::create(['id'=>'30', 'name'=>'Промисловість','slag'=>'promislovist', '_lft'=>'15', '_rgt'=>'26','parent_id'=>'0' ]);
        Category::create(['id'=>'31', 'name'=>'Харчова промисловість','slag'=>'kharchova-promislovist', '_lft'=>'16', '_rgt'=>'17','parent_id'=>'30' ]);
        Category::create(['id'=>'32', 'name'=>'Легка промисловість','slag'=>'legka-promislovist', '_lft'=>'18', '_rgt'=>'19','parent_id'=>'30' ]);
        Category::create(['id'=>'33', 'name'=>'Хімічна промисловість','slag'=>'khimichna-promislovist', '_lft'=>'20', '_rgt'=>'21','parent_id'=>'30' ]);
        Category::create(['id'=>'34', 'name'=>'Машинобудування','slag'=>'mashinobuduvannya', '_lft'=>'22', '_rgt'=>'23','parent_id'=>'30' ]);
        Category::create(['id'=>'35', 'name'=>'Паливно-енергетичний комплекс','slag'=>'palivno-energetichniy-kompleks', '_lft'=>'24', '_rgt'=>'25','parent_id'=>'30' ]);
        Category::create(['id'=>'36', 'name'=>'Автоіндустрія','slag'=>'avtoidustria', '_lft'=>'27', '_rgt'=>'36','parent_id'=>'0' ]);
        Category::create(['id'=>'37', 'name'=>'Заклади харчування','slag'=>'zakladi-kharchuvannya', '_lft'=>'37', '_rgt'=>'50','parent_id'=>'0' ]);
        Category::create(['id'=>'38', 'name'=>'Складські приміщення','slag'=>'skladski-primishchennya', '_lft'=>'51', '_rgt'=>'116','parent_id'=>'0' ]);
        Category::create(['id'=>'39', 'name'=>'Навантаження-розвантаження','slag'=>'navantazhennya-rozvantazhennya', '_lft'=>'52', '_rgt'=>'67','parent_id'=>'38' ]);
        Category::create(['id'=>'40', 'name'=>'Прийому','slag'=>'priyomu', '_lft'=>'68', '_rgt'=>'83','parent_id'=>'38' ]);
        Category::create(['id'=>'41', 'name'=>'Зберігання','slag'=>'zberigannya', '_lft'=>'84', '_rgt'=>'99','parent_id'=>'38' ]);
        Category::create(['id'=>'42', 'name'=>'Сортування вантажу','slag'=>'sortuvannya-vantazhu', '_lft'=>'100', '_rgt'=>'115','parent_id'=>'38' ]);
        Category::create(['id'=>'44', 'name'=>'Неопалювані','slag'=>'neopalyuvani-1', '_lft'=>'53', '_rgt'=>'60','parent_id'=>'39' ]);
        Category::create(['id'=>'45', 'name'=>'Неопалювані','slag'=>'neopalyuvani-2', '_lft'=>'69', '_rgt'=>'76','parent_id'=>'40' ]);
        Category::create(['id'=>'46', 'name'=>'Неопалювані','slag'=>'neopalyuvani-3', '_lft'=>'85', '_rgt'=>'92','parent_id'=>'41' ]);
        Category::create(['id'=>'47', 'name'=>'Неопалювані','slag'=>'neopalyuvani-4', '_lft'=>'101', '_rgt'=>'108','parent_id'=>'42' ]);
        Category::create(['id'=>'48', 'name'=>'Опалюванні','slag'=>'opalyuvanni-1', '_lft'=>'61', '_rgt'=>'62','parent_id'=>'39' ]);
        Category::create(['id'=>'49', 'name'=>'Опалюванні','slag'=>'opalyuvanni-2', '_lft'=>'77', '_rgt'=>'78','parent_id'=>'40' ]);
        Category::create(['id'=>'50', 'name'=>'Опалюванні','slag'=>'opalyuvanni-3', '_lft'=>'93', '_rgt'=>'94','parent_id'=>'41' ]);
        Category::create(['id'=>'51', 'name'=>'Опалюванні','slag'=>'opalyuvanni-4', '_lft'=>'109', '_rgt'=>'110','parent_id'=>'42' ]);
        Category::create(['id'=>'52', 'name'=>'Холодильні склади','slag'=>'kholodilni-skladi-1', '_lft'=>'63', '_rgt'=>'64','parent_id'=>'39' ]);
        Category::create(['id'=>'53', 'name'=>'Холодильні склади','slag'=>'kholodilni-skladi-2', '_lft'=>'79', '_rgt'=>'80','parent_id'=>'40' ]);
        Category::create(['id'=>'54', 'name'=>'Холодильні склади','slag'=>'kholodilni-skladi-3', '_lft'=>'95', '_rgt'=>'96','parent_id'=>'41' ]);
        Category::create(['id'=>'55', 'name'=>'Холодильні склади','slag'=>'kholodilni-skladi-4', '_lft'=>'111', '_rgt'=>'112','parent_id'=>'42' ]);
        Category::create(['id'=>'56', 'name'=>'Мультитемпературні','slag'=>'multitemperaturni-1', '_lft'=>'65', '_rgt'=>'66','parent_id'=>'39' ]);
        Category::create(['id'=>'57', 'name'=>'Мультитемпературні','slag'=>'multitemperaturni-2', '_lft'=>'81', '_rgt'=>'82','parent_id'=>'40' ]);
        Category::create(['id'=>'58', 'name'=>'Мультитемпературні','slag'=>'multitemperaturni-3', '_lft'=>'97', '_rgt'=>'98','parent_id'=>'41' ]);
        Category::create(['id'=>'59', 'name'=>'Мультитемпературні','slag'=>'multitemperaturni-4', '_lft'=>'113', '_rgt'=>'114','parent_id'=>'42' ]);
        Category::create(['id'=>'60', 'name'=>'Відкриті','slag'=>'vidkriti-1', '_lft'=>'54', '_rgt'=>'55','parent_id'=>'44' ]);
        Category::create(['id'=>'61', 'name'=>'Відкриті','slag'=>'vidkriti-2', '_lft'=>'70', '_rgt'=>'71','parent_id'=>'45' ]);
        Category::create(['id'=>'62', 'name'=>'Відкриті','slag'=>'vidkriti-3', '_lft'=>'86', '_rgt'=>'87','parent_id'=>'46' ]);
        Category::create(['id'=>'63', 'name'=>'Відкриті','slag'=>'vidkriti-4', '_lft'=>'102', '_rgt'=>'103','parent_id'=>'47' ]);
        Category::create(['id'=>'64', 'name'=>'З навісом','slag'=>'z-navisom-1', '_lft'=>'72', '_rgt'=>'73','parent_id'=>'45' ]);
        Category::create(['id'=>'65', 'name'=>'З навісом','slag'=>'z-navisom-2', '_lft'=>'88', '_rgt'=>'89','parent_id'=>'46' ]);
        Category::create(['id'=>'66', 'name'=>'З навісом','slag'=>'z-navisom-3', '_lft'=>'104', '_rgt'=>'105','parent_id'=>'47' ]);
        Category::create(['id'=>'67', 'name'=>'З навісом','slag'=>'z-navisom-4', '_lft'=>'56', '_rgt'=>'57','parent_id'=>'44' ]);
        Category::create(['id'=>'68', 'name'=>'Закриті','slag'=>'zakriti-1', '_lft'=>'58', '_rgt'=>'59','parent_id'=>'44' ]);
        Category::create(['id'=>'69', 'name'=>'Закриті','slag'=>'zakriti-2', '_lft'=>'74', '_rgt'=>'75','parent_id'=>'45' ]);
        Category::create(['id'=>'70', 'name'=>'Закриті','slag'=>'zakriti-3', '_lft'=>'90', '_rgt'=>'91','parent_id'=>'46' ]);
        Category::create(['id'=>'71', 'name'=>'Закриті','slag'=>'zakriti-4', '_lft'=>'106', '_rgt'=>'107','parent_id'=>'47' ]);
        Category::create(['id'=>'72', 'name'=>'Відділення','slag'=>'viddilennya', '_lft'=>'2', '_rgt'=>'3','parent_id'=>'29' ]);
        Category::create(['id'=>'73', 'name'=>'Приміщення персоналу','slag'=>'primishchennya-personalu', '_lft'=>'4', '_rgt'=>'5','parent_id'=>'29' ]);
        Category::create(['id'=>'74', 'name'=>'Приймальне відділення','slag'=>'priymalne-viddilennya', '_lft'=>'6', '_rgt'=>'7','parent_id'=>'29' ]);
        Category::create(['id'=>'75', 'name'=>'Операційні блоки','slag'=>'operatsiyni-bloki', '_lft'=>'8', '_rgt'=>'9','parent_id'=>'29' ]);
        Category::create(['id'=>'76', 'name'=>'Палати','slag'=>'palati', '_lft'=>'10', '_rgt'=>'11','parent_id'=>'29' ]);
        Category::create(['id'=>'77', 'name'=>'Коридори','slag'=>'koridori', '_lft'=>'12', '_rgt'=>'13','parent_id'=>'29' ]);
        Category::create(['id'=>'78', 'name'=>'Шиномонтаж','slag'=>'shinomontazh', '_lft'=>'28', '_rgt'=>'29','parent_id'=>'36' ]);
        Category::create(['id'=>'79', 'name'=>'Автосервіс','slag'=>'avtoservis', '_lft'=>'30', '_rgt'=>'31','parent_id'=>'36' ]);
        Category::create(['id'=>'80', 'name'=>'Автомийки','slag'=>'avtomiyki', '_lft'=>'32', '_rgt'=>'33','parent_id'=>'36' ]);
        Category::create(['id'=>'81', 'name'=>'Автомагаизини','slag'=>'avtomagaizini', '_lft'=>'34', '_rgt'=>'35','parent_id'=>'36' ]);
        Category::create(['id'=>'82', 'name'=>'Ресторан','slag'=>'restoran', '_lft'=>'38', '_rgt'=>'39','parent_id'=>'37' ]);
        Category::create(['id'=>'83', 'name'=>'Кафе','slag'=>'kafe', '_lft'=>'40', '_rgt'=>'41','parent_id'=>'37' ]);
        Category::create(['id'=>'84', 'name'=>'Бар','slag'=>'bar', '_lft'=>'42', '_rgt'=>'43','parent_id'=>'37' ]);
        Category::create(['id'=>'85', 'name'=>'Їдальня','slag'=>'idalnya', '_lft'=>'44', '_rgt'=>'45','parent_id'=>'37' ]);
        Category::create(['id'=>'86', 'name'=>'Буфет','slag'=>'bufet', '_lft'=>'46', '_rgt'=>'47','parent_id'=>'37' ]);
        Category::create(['id'=>'87', 'name'=>'Кафетерій','slag'=>'kafeteriy', '_lft'=>'48', '_rgt'=>'49','parent_id'=>'37' ]);
        Category::create(['id'=>'88', 'name'=>'Приватний сектор','slag'=>'privatniy-sektor', '_lft'=>'117', '_rgt'=>'150','parent_id'=>'' ]);
        Category::create(['id'=>'89', 'name'=>'Будинки','slag'=>'privatniy-sektor', '_lft'=>'118', '_rgt'=>'129','parent_id'=>'88' ]);
        Category::create(['id'=>'90', 'name'=>'Квартири','slag'=>'kvartiri', '_lft'=>'130', '_rgt'=>'137','parent_id'=>'88' ]);
        Category::create(['id'=>'91', 'name'=>'Заміський будинок','slag'=>'zamiskiy-budinok', '_lft'=>'138', '_rgt'=>'149','parent_id'=>'88' ]);
        Category::create(['id'=>'92', 'name'=>'Тераса','slag'=>'terasa-1', '_lft'=>'139', '_rgt'=>'140','parent_id'=>'91' ]);
        Category::create(['id'=>'93', 'name'=>'Тераса','slag'=>'terasa-2', '_lft'=>'119', '_rgt'=>'120','parent_id'=>'89' ]);
        Category::create(['id'=>'94', 'name'=>'Гараж','slag'=>'garazh-1', '_lft'=>'141', '_rgt'=>'142','parent_id'=>'91' ]);
        Category::create(['id'=>'95', 'name'=>'Гараж','slag'=>'garazh-2', '_lft'=>'121', '_rgt'=>'122','parent_id'=>'89' ]);
        Category::create(['id'=>'96', 'name'=>'Відкриті балкони','slag'=>'vidkriti-balkoni-1', '_lft'=>'143', '_rgt'=>'144','parent_id'=>'91' ]);
        Category::create(['id'=>'97', 'name'=>'Відкриті балкони','slag'=>'vidkriti-balkoni-2', '_lft'=>'123', '_rgt'=>'124','parent_id'=>'89' ]);
        Category::create(['id'=>'98', 'name'=>'Відкриті балкони','slag'=>'vidkriti-balkoni-3', '_lft'=>'131', '_rgt'=>'132','parent_id'=>'90' ]);
        Category::create(['id'=>'99', 'name'=>'Санвузли','slag'=>'sanvuzli-1', '_lft'=>'145', '_rgt'=>'146','parent_id'=>'91' ]);
        Category::create(['id'=>'100', 'name'=>'Санвузли','slag'=>'sanvuzli-2', '_lft'=>'125', '_rgt'=>'126','parent_id'=>'89' ]);
        Category::create(['id'=>'101', 'name'=>'Санвузли','slag'=>'sanvuzli-3', '_lft'=>'133', '_rgt'=>'134','parent_id'=>'90' ]);
        Category::create(['id'=>'102', 'name'=>'Вітальня','slag'=>'vitalnya-1', '_lft'=>'147', '_rgt'=>'148','parent_id'=>'91' ]);
        Category::create(['id'=>'103', 'name'=>'Вітальня','slag'=>'vitalnya-2', '_lft'=>'135', '_rgt'=>'136','parent_id'=>'90' ]);
        Category::create(['id'=>'104', 'name'=>'Вітальня','slag'=>'vitalnya-3', '_lft'=>'127', '_rgt'=>'128','parent_id'=>'89' ]);

    }



}
