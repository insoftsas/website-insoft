<?php

use App\Models\Maker;
use App\Repositories\MakerRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MakerRepositoryTest extends TestCase
{
    use MakeMakerTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var MakerRepository
     */
    protected $makerRepo;

    public function setUp()
    {
        parent::setUp();
        $this->makerRepo = App::make(MakerRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateMaker()
    {
        $maker = $this->fakeMakerData();
        $createdMaker = $this->makerRepo->create($maker);
        $createdMaker = $createdMaker->toArray();
        $this->assertArrayHasKey('id', $createdMaker);
        $this->assertNotNull($createdMaker['id'], 'Created Maker must have id specified');
        $this->assertNotNull(Maker::find($createdMaker['id']), 'Maker with given id must be in DB');
        $this->assertModelData($maker, $createdMaker);
    }

    /**
     * @test read
     */
    public function testReadMaker()
    {
        $maker = $this->makeMaker();
        $dbMaker = $this->makerRepo->find($maker->id);
        $dbMaker = $dbMaker->toArray();
        $this->assertModelData($maker->toArray(), $dbMaker);
    }

    /**
     * @test update
     */
    public function testUpdateMaker()
    {
        $maker = $this->makeMaker();
        $fakeMaker = $this->fakeMakerData();
        $updatedMaker = $this->makerRepo->update($fakeMaker, $maker->id);
        $this->assertModelData($fakeMaker, $updatedMaker->toArray());
        $dbMaker = $this->makerRepo->find($maker->id);
        $this->assertModelData($fakeMaker, $dbMaker->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteMaker()
    {
        $maker = $this->makeMaker();
        $resp = $this->makerRepo->delete($maker->id);
        $this->assertTrue($resp);
        $this->assertNull(Maker::find($maker->id), 'Maker should not exist in DB');
    }
}
