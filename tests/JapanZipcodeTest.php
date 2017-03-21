<?php
use PHPUnit\Framework\TestCase;

class JapanZipcodeTest extends TestCase {

    public function testFindByZipcode()
    {
        $japanZipcode = new JapanZipcodeCsv();
        $zipcodeInfo = $japanZipcode->findByZipcode('640941');
        $this->assertNotEmpty($zipcodeInfo);
    }
}