<?php
namespace Dojo;

use PHPUnit_Framework_TestCase;

class DojoTest extends PHPUnit_Framework_TestCase
{
    public function testShouldPrintDefaultHelloWorld() {
        // Set
        $dojo = new Dojo;

        // Actions
        $result = $dojo->helloWorld();

        // Assertions
        $this->assertSame('Hello, Dojo!', $result);
    }

    public function testShouldPrintCustomizedHelloWorld() {
        // Set
        $dojo = new Dojo;

        // Actions
        $result = $dojo->helloWorld('Laravel SP');

        // Assertions
        $this->assertSame('Hello, Laravel SP!', $result);
    }
}