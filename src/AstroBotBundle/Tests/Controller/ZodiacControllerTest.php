<?php

namespace AstroBotBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ZodiacControllerTest extends WebTestCase
{
    public function testGetluckysign()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'lucky-sign');
    }

    public function testGetdailyhoroscope()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/horoscope/:sign/:date');
    }

    public function testGetweeklyhoroscope()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/horoscope/weekly/:sign/:week');
    }

}
