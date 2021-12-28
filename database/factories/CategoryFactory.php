<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category = ['Струнные', 'Духовые', 'Ударные', 'Клавишные', 'Язычковые'];
        return [
            'namecategory' => $category[mt_rand(0, count($category)-1)],
        ];
    }
}

