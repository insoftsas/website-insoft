<?php

use Faker\Factory as Faker;
use App\Models\Group;
use App\Repositories\GroupRepository;

trait MakeGroupTrait
{
    /**
     * Create fake instance of Group and save it in database
     *
     * @param array $groupFields
     * @return Group
     */
    public function makeGroup($groupFields = [])
    {
        /** @var GroupRepository $groupRepo */
        $groupRepo = App::make(GroupRepository::class);
        $theme = $this->fakeGroupData($groupFields);
        return $groupRepo->create($theme);
    }

    /**
     * Get fake instance of Group
     *
     * @param array $groupFields
     * @return Group
     */
    public function fakeGroup($groupFields = [])
    {
        return new Group($this->fakeGroupData($groupFields));
    }

    /**
     * Get fake data of Group
     *
     * @param array $postFields
     * @return array
     */
    public function fakeGroupData($groupFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'leader_id' => $fake->randomDigitNotNull,
            'name' => $fake->word,
            'code' => $fake->word,
            'description' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $groupFields);
    }
}
