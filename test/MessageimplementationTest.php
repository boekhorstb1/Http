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
        $request = $this->requestFactory->createServerRequest('GET', 'https://w\rww.horde.org/');
        $headers = $request->getHeaders();
        $name = key($headers);
        $value = $headers['host'];
        //check if request ist refused
        // ....

        
        // this is not possible because storeHeader() is a private method
        //$storedvalue = $request->storeHeader($name, $value);
        // So: find a way to test this private mehtod, or test all methods that require this function
    }
}
