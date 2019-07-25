<?php

namespace App\Tests;

use App\Entity\Documentation;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FuncTest extends WebTestCase
{
    private $factory;
    public function testSomething()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/form');
        $form = $crawler->selectButton('Register')->form();
        var_dump($form);
        $this->assertSelectorTextContains('h1', 'Register');
    }

    protected function setUp()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/form');
        $form = $crawler->selectButton('Register')->form();
    }
}
