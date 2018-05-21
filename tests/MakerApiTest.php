<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MakerApiTest extends TestCase
{
    use MakeMakerTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateMaker()
    {
        $maker = $this->fakeMakerData();
        $this->json('POST', '/api/v1/makers', $maker);

        $this->assertApiResponse($maker);
    }

    /**
     * @test
     */
    public function testReadMaker()
    {
        $maker = $this->makeMaker();
        $this->json('GET', '/api/v1/makers/'.$maker->id);

        $this->assertApiResponse($maker->toArray());
    }

    /**
     * @test
     */
    public function testUpdateMaker()
    {
        $maker = $this->makeMaker();
        $editedMaker = $this->fakeMakerData();

        $this->json('PUT', '/api/v1/makers/'.$maker->id, $editedMaker);

        $this->assertApiResponse($editedMaker);
    }

    /**
     * @test
     */
    public function testDeleteMaker()
    {
        $maker = $this->makeMaker();
        $this->json('DELETE', '/api/v1/makers/'.$maker->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/makers/'.$maker->id);

        $this->assertResponseStatus(404);
    }
}
