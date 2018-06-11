<?php

use Faker\Factory as Faker;
use App\Models\Qualify;
use App\Repositories\QualifyRepository;

trait MakeQualifyTrait
{
    /**
     * Create fake instance of Qualify and save it in database
     *
     * @param array $qualifyFields
     * @return Qualify
     */
    public function makeQualify($qualifyFields = [])
    {
        /** @var QualifyRepository $qualifyRepo */
        $qualifyRepo = App::make(QualifyRepository::class);
        $theme = $this->fakeQualifyData($qualifyFields);
        return $qualifyRepo->create($theme);
    }

    /**
     * Get fake instance of Qualify
     *
     * @param array $qualifyFields
     * @return Qualify
     */
    public function fakeQualify($qualifyFields = [])
    {
        return new Qualify($this->fakeQualifyData($qualifyFields));
    }

    /**
     * Get fake data of Qualify
     *
     * @param array $postFields
     * @return array
     */
    public function fakeQualifyData($qualifyFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'assistant' => $fake->word,
            'doc_type' => $fake->word,
            'document' => $fake->word,
            'job' => $fake->word,
            'enterprise' => $fake->word,
            'nit' => $fake->word,
            'address' => $fake->word,
            'neighborhood' => $fake->word,
            'city_id' => $fake->randomDigitNotNull,
            'cellphone' => $fake->word,
            'email' => $fake->word,
            'topic_1' => $fake->word,
            'topic_2' => $fake->word,
            'topic_3' => $fake->word,
            'topic_4' => $fake->word,
            'event_1' => $fake->word,
            'event_2' => $fake->word,
            'event_3' => $fake->word,
            'speaker_1' => $fake->word,
            'speaker_2' => $fake->word,
            'speaker_3' => $fake->word,
            'guides_1' => $fake->word,
            'guides_2' => $fake->word,
            'logistics_1' => $fake->word,
            'logistics_2' => $fake->word,
            'logistics_3' => $fake->word,
            'firm' => $fake->word,
            'photo_url' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $qualifyFields);
    }
}
