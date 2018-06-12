<?php

use App\Models\Qualify;
use App\Repositories\QualifyRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class QualifyRepositoryTest extends TestCase
{
    use MakeQualifyTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var QualifyRepository
     */
    protected $qualifyRepo;

    public function setUp()
    {
        parent::setUp();
        $this->qualifyRepo = App::make(QualifyRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateQualify()
    {
        $qualify = $this->fakeQualifyData();
        $createdQualify = $this->qualifyRepo->create($qualify);
        $createdQualify = $createdQualify->toArray();
        $this->assertArrayHasKey('id', $createdQualify);
        $this->assertNotNull($createdQualify['id'], 'Created Qualify must have id specified');
        $this->assertNotNull(Qualify::find($createdQualify['id']), 'Qualify with given id must be in DB');
        $this->assertModelData($qualify, $createdQualify);
    }

    /**
     * @test read
     */
    public function testReadQualify()
    {
        $qualify = $this->makeQualify();
        $dbQualify = $this->qualifyRepo->find($qualify->id);
        $dbQualify = $dbQualify->toArray();
        $this->assertModelData($qualify->toArray(), $dbQualify);
    }

    /**
     * @test update
     */
    public function testUpdateQualify()
    {
        $qualify = $this->makeQualify();
        $fakeQualify = $this->fakeQualifyData();
        $updatedQualify = $this->qualifyRepo->update($fakeQualify, $qualify->id);
        $this->assertModelData($fakeQualify, $updatedQualify->toArray());
        $dbQualify = $this->qualifyRepo->find($qualify->id);
        $this->assertModelData($fakeQualify, $dbQualify->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteQualify()
    {
        $qualify = $this->makeQualify();
        $resp = $this->qualifyRepo->delete($qualify->id);
        $this->assertTrue($resp);
        $this->assertNull(Qualify::find($qualify->id), 'Qualify should not exist in DB');
    }
}
