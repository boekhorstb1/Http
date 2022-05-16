<?php
namespace Horde\Http\Test;

use Phpunit\Framework\TestCase;
use Horde\Http\RequestFactory;
use Horde\Http\ServerRequest;
use \Horde_String;
use \Psr\Http\Message\StreamInterface;

class MessageimplementationTest extends TestCase
{
    public function setUp(): void
    {
        $this->requestFactory = new RequestFactory;
    }

    public function testSomething()
    {
        $request = $this->requestFactory->createServerRequest('GET', 'https://www.horde.org/');
        $headers = $request->getHeaders();
        dd($headers);
    }
}
