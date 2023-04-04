<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('items')->insert(
            [
                'name' => 'Концерт МОТ в Алматы 2',
                'description' =>'МОТ — популярный артист, сочетающий хип-хоп и RnB-нулевых. Артист популярен благодаря своим лирическим трекам. Его размышления об отношениях мужчины и женщины складываются в большие хиты и находят отклик в сердцах поклонниц по всему миру.',
                'images' => 'assets/img/1653289163zikjn.webp',
            ]
        );
        DB::table('items')->insert(
            [
                'name' => 'Александр Филиппенко в Алматы',
                'description' =>'В своей искрометной программе Александр Филиппенко объединяет двух любимых и близких по духу авторов — Михаила Михайловича Зощенко и Михаила Михайловича Жванецкого.',
                'images' => 'assets/img/166056319042bg7.webp',
            ]
        );
        DB::table('items')->insert(
            [
                'name' => 'Пацанская история',
                'description' =>'Трое друзей решаются на опасную авантюру, чтобы начать новую жизнь. Тима, Рус и Каир должны перевезти через границу незаконный груз. Но в дороге все идет не по плану. Теперь от успеха дела зависит не только их будущее, но и жизни.',
                'images' => 'assets/img/6ea4833c0e3f8842d6765bcfd63ad686.webp',
            ]
        );

    }
}
