<?php

use Faker\Factory as Faker;
use App\Models\Maker;
use App\Repositories\MakerRepository;

trait MakeMakerTrait
{
    /**
     * Create fake instance of Maker and save it in database
     *
     * @param array $makerFields
     * @return Maker
     */
    public function makeMaker($makerFields = [])
    {
        /** @var MakerRepository $makerRepo */
        $makerRepo = App::make(MakerRepository::class);
        $theme = $this->fakeMakerData($makerFields);
        return $makerRepo->create($theme);
    }

    /**
     * Get fake instance of Maker
     *
     * @param array $makerFields
     * @return Maker
     */
    public function fakeMaker($makerFields = [])
    {
        return new Maker($this->fakeMakerData($makerFields));
    }

    /**
     * Get fake data of Maker
     *
     * @param array $postFields
     * @return array
     */
    public function fakeMakerData($makerFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'group_id' => $fake->randomDigitNotNull,
            'first_name' => $fake->word,
            'last_name' => $fake->word,
            'doc_type' => $fake->word,
            'document' => $fake->word,
            'genere' => $fake->word,
            'bird_date' => $fake->word,
            'city_id' => $fake->randomDigitNotNull,
            'email' => $fake->word,
            'phone' => $fake->word,
            'level' => $fake->word,
            'semester' => $fake->word,
            'area' => $fake->word,
            'career' => $fake->word,
            'skills' => $fake->word,
            'bio' => $fake->text,
            'file_document' => $fake->word,
            'file_certificate' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $makerFields);
    }
}
