<?php

namespace App\Test\Controller;

use App\Entity\Chicken;
use App\Repository\ChickenRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ChickenControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private ChickenRepository $repository;
    private string $path = '/chicken/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Chicken::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Chicken index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $originalNumObjectsInRepository = count($this->repository->findAll());

        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'chicken[email]' => 'Testing',
            'chicken[roles]' => 'Testing',
            'chicken[password]' => 'Testing',
        ]);

        self::assertResponseRedirects('/chicken/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Chicken();
        $fixture->setEmail('My Title');
        $fixture->setRoles('My Title');
        $fixture->setPassword('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Chicken');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Chicken();
        $fixture->setEmail('My Title');
        $fixture->setRoles('My Title');
        $fixture->setPassword('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'chicken[email]' => 'Something New',
            'chicken[roles]' => 'Something New',
            'chicken[password]' => 'Something New',
        ]);

        self::assertResponseRedirects('/chicken/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getEmail());
        self::assertSame('Something New', $fixture[0]->getRoles());
        self::assertSame('Something New', $fixture[0]->getPassword());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Chicken();
        $fixture->setEmail('My Title');
        $fixture->setRoles('My Title');
        $fixture->setPassword('My Title');

        $this->repository->save($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/chicken/');
    }
}
