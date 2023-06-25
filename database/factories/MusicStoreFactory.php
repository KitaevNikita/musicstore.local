<?php

namespace Database\Factories;

use App\Models\MusicStore;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MusicStoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $color = ['Черный', 'Белый', 'Коричневый', 'Дубовый', 'Серый', 'Серебристый'];
        $country = ['Россия', 'Германия', 'Англия', 'Белоруссия', 'Швейцария', 'Украина'];
        $firm = ['Фредерик', 'Вальтер', 'Антон', 'Плейель&Компания', 'Иоганн Петер', 'Koistinen Kantele'];
        $musicname = ['Арфа', 'Гитара', 'Скрипка', 'Флейта', 'Труба', 'Орган', 'Рояль', 'Барабан', 'Тарелка'];
        return [
            'name' => $musicname[mt_rand(0, count($musicname)-1)],
            'countryoforigin' => $country[mt_rand(0, count($country)-1)],
            'manufacturercompany' => $firm[mt_rand(0, count($firm)-1)],
            'colour' => $color[mt_rand(0, count($color)-1)],
            'price' => mt_rand(0, 100000),
        ];
    }
}

