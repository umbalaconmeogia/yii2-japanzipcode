<?php
use PHPUnit\Framework\TestCase;
use umbalaconmeogia\japanzipcode\JapanZipcodeCsv;

class JapanZipcodeCsvTest extends TestCase {

    public function testFindByZipcode()
    {
        $japanZipcode = new JapanZipcodeCsv();
        $zipcodeInfo = $japanZipcode->findByZipcode('640941');
        $this->assertNotEmpty($zipcodeInfo);
    }
}