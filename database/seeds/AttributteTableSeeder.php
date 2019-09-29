<?php

use Illuminate\Database\Seeder;

class AttributteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attributes = [
            "investments" => "Вложения",
            "currentLevel" => "Стадия проекта",
            "experience" => "Есть опыт в данной сфере?",
            "typeInvest" => "Инновация или нет?",
            "typeWork" => "Сетевой или оффлайн?",
            "paybackPeriod" => "Примерный срок окупаемости инвестора",
            "periodProject" => "Продолжительность проекта",
            "fieldActivityIt" => "Выберите сферу ИТ",
            "partnerSkill" => "Уровень мастерства партнера",
            "partnerInvestment" => "Нужны ли вложения от партнера?",
            "timeWork" => "Сколько времени нужно уделять в день?",
            "numberMembers" => "Сколько людей нужно в команду?",
            "nameGame" => "Название игры",
            "shareInvestment" => "Доля партнерства",
            "teamGoal" => "Для чего команда",
            "totalPlayGame" => "Сколько часов наиграно",
            "styleMusic" => "Жанр музыки",
            "roleMusician" => "Задача партнера",
            "summeInvest" => "Примерная сумма инвестиций",
            "typeSport" => "Вид спорта"
        ];

        foreach ($attributes as $key => $attribute) {

            DB::table('attributes')->insert([
                'slug' => $key,
                'name' => $attribute
            ]);
        }
    }
}
