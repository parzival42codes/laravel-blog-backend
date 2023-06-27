<?php

namespace parzival42codes\LaravelBlogBackend\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use parzival42codes\LaravelBlogBackend\App\Models\PageTags;

class PageTagsFactory extends Factory
{
    protected $model = PageTags::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tag' => $this->faker->text(10),
            'page_id' => 1,
        ];
    }
}
