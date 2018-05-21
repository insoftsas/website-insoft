<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EnterpriseApiTest extends TestCase
{
    use MakeEnterpriseTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateEnterprise()
    {
        $enterprise = $this->fakeEnterpriseData();
        $this->json('POST', '/api/v1/enterprises', $enterprise);

        $this->assertApiResponse($enterprise);
    }

    /**
     * @test
     */
    public function testReadEnterprise()
    {
        $enterprise = $this->makeEnterprise();
        $this->json('GET', '/api/v1/enterprises/'.$enterprise->id);

        $this->assertApiResponse($enterprise->toArray());
    }

    /**
     * @test
     */
    public function testUpdateEnterprise()
    {
        $enterprise = $this->makeEnterprise();
        $editedEnterprise = $this->fakeEnterpriseData();

        $this->json('PUT', '/api/v1/enterprises/'.$enterprise->id, $editedEnterprise);

        $this->assertApiResponse($editedEnterprise);
    }

    /**
     * @test
     */
    public function testDeleteEnterprise()
    {
        $enterprise = $this->makeEnterprise();
        $this->json('DELETE', '/api/v1/enterprises/'.$enterprise->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/enterprises/'.$enterprise->id);

        $this->assertResponseStatus(404);
    }
}
