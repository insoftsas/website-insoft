<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class QualifyApiTest extends TestCase
{
    use MakeQualifyTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateQualify()
    {
        $qualify = $this->fakeQualifyData();
        $this->json('POST', '/api/v1/qualifies', $qualify);

        $this->assertApiResponse($qualify);
    }

    /**
     * @test
     */
    public function testReadQualify()
    {
        $qualify = $this->makeQualify();
        $this->json('GET', '/api/v1/qualifies/'.$qualify->id);

        $this->assertApiResponse($qualify->toArray());
    }

    /**
     * @test
     */
    public function testUpdateQualify()
    {
        $qualify = $this->makeQualify();
        $editedQualify = $this->fakeQualifyData();

        $this->json('PUT', '/api/v1/qualifies/'.$qualify->id, $editedQualify);

        $this->assertApiResponse($editedQualify);
    }

    /**
     * @test
     */
    public function testDeleteQualify()
    {
        $qualify = $this->makeQualify();
        $this->json('DELETE', '/api/v1/qualifies/'.$qualify->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/qualifies/'.$qualify->id);

        $this->assertResponseStatus(404);
    }
}
