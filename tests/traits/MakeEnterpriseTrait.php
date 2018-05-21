<?php

use Faker\Factory as Faker;
use App\Models\Enterprise;
use App\Repositories\EnterpriseRepository;

trait MakeEnterpriseTrait
{
    /**
     * Create fake instance of Enterprise and save it in database
     *
     * @param array $enterpriseFields
     * @return Enterprise
     */
    public function makeEnterprise($enterpriseFields = [])
    {
        /** @var EnterpriseRepository $enterpriseRepo */
        $enterpriseRepo = App::make(EnterpriseRepository::class);
        $theme = $this->fakeEnterpriseData($enterpriseFields);
        return $enterpriseRepo->create($theme);
    }

    /**
     * Get fake instance of Enterprise
     *
     * @param array $enterpriseFields
     * @return Enterprise
     */
    public function fakeEnterprise($enterpriseFields = [])
    {
        return new Enterprise($this->fakeEnterpriseData($enterpriseFields));
    }

    /**
     * Get fake data of Enterprise
     *
     * @param array $postFields
     * @return array
     */
    public function fakeEnterpriseData($enterpriseFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'razon_social_propietario' => $fake->word,
            'nit' => $fake->word,
            'representante_legal' => $fake->word,
            'actividad_comercial' => $fake->word,
            'sector_productivo' => $fake->word,
            'city_id' => $fake->randomDigitNotNull,
            'neigboard' => $fake->word,
            'address' => $fake->word,
            'phone' => $fake->word,
            'email' => $fake->word,
            'file_rut' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $enterpriseFields);
    }
}
