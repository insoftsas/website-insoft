<?php

use App\Models\Enterprise;
use App\Repositories\EnterpriseRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EnterpriseRepositoryTest extends TestCase
{
    use MakeEnterpriseTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var EnterpriseRepository
     */
    protected $enterpriseRepo;

    public function setUp()
    {
        parent::setUp();
        $this->enterpriseRepo = App::make(EnterpriseRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateEnterprise()
    {
        $enterprise = $this->fakeEnterpriseData();
        $createdEnterprise = $this->enterpriseRepo->create($enterprise);
        $createdEnterprise = $createdEnterprise->toArray();
        $this->assertArrayHasKey('id', $createdEnterprise);
        $this->assertNotNull($createdEnterprise['id'], 'Created Enterprise must have id specified');
        $this->assertNotNull(Enterprise::find($createdEnterprise['id']), 'Enterprise with given id must be in DB');
        $this->assertModelData($enterprise, $createdEnterprise);
    }

    /**
     * @test read
     */
    public function testReadEnterprise()
    {
        $enterprise = $this->makeEnterprise();
        $dbEnterprise = $this->enterpriseRepo->find($enterprise->id);
        $dbEnterprise = $dbEnterprise->toArray();
        $this->assertModelData($enterprise->toArray(), $dbEnterprise);
    }

    /**
     * @test update
     */
    public function testUpdateEnterprise()
    {
        $enterprise = $this->makeEnterprise();
        $fakeEnterprise = $this->fakeEnterpriseData();
        $updatedEnterprise = $this->enterpriseRepo->update($fakeEnterprise, $enterprise->id);
        $this->assertModelData($fakeEnterprise, $updatedEnterprise->toArray());
        $dbEnterprise = $this->enterpriseRepo->find($enterprise->id);
        $this->assertModelData($fakeEnterprise, $dbEnterprise->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteEnterprise()
    {
        $enterprise = $this->makeEnterprise();
        $resp = $this->enterpriseRepo->delete($enterprise->id);
        $this->assertTrue($resp);
        $this->assertNull(Enterprise::find($enterprise->id), 'Enterprise should not exist in DB');
    }
}
