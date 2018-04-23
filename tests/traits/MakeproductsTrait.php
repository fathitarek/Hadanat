<?php

use Faker\Factory as Faker;
use App\Models\products;
use App\Repositories\productsRepository;

trait MakeproductsTrait
{
    /**
     * Create fake instance of products and save it in database
     *
     * @param array $productsFields
     * @return products
     */
    public function makeproducts($productsFields = [])
    {
        /** @var productsRepository $productsRepo */
        $productsRepo = App::make(productsRepository::class);
        $theme = $this->fakeproductsData($productsFields);
        return $productsRepo->create($theme);
    }

    /**
     * Get fake instance of products
     *
     * @param array $productsFields
     * @return products
     */
    public function fakeproducts($productsFields = [])
    {
        return new products($this->fakeproductsData($productsFields));
    }

    /**
     * Get fake data of products
     *
     * @param array $postFields
     * @return array
     */
    public function fakeproductsData($productsFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'name_en' => $fake->word,
            'name_ar' => $fake->word,
            'image' => $fake->text,
            'logo' => $fake->word,
            'desc_en' => $fake->word,
            'desc_ar' => $fake->word,
            'advantages_en' => $fake->text,
            'advantages_en' => $fake->text,
            'address' => $fake->word,
            'latitude' => $fake->word,
            'longitude' => $fake->word,
            'conditions' => $fake->text,
            'conditions' => $fake->text,
            'category_id' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $productsFields);
    }
}
