<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class VDDTest extends TestCase
{
    public function testCallerFile(): void
    {
        $this->expectOutputRegex('/(\/VDDTest\<)/');
        VD('XXX');
    }
    
    public function testCallerFilePath(): void
    {
        $this->expectOutputRegex('/(tests\/VDDTest\<)/');
        VD('XXX');
    }
    
    
    
    public function testTypeString(): void
    {
        $this->expectOutputRegex('/(\>string\<)/');
        VD('XXX');
    }
    
    public function testTypeInteger(): void
    {
        $this->expectOutputRegex('/(\>integer\<)/');
        VD(1);
    }
    
    public function testTypeArray(): void
    {
        $this->expectOutputRegex('/(\>array\<)/');
        VD([]);
    }
    
    public function testTypeObject(): void
    {
        $this->expectOutputRegex('/(\>object\<)/');
        VD((object)[]);
    }
    
    
    
    public function testValueNull(): void
    {
        $this->expectOutputRegex('/(\>NULL\<)/');
        VD(null);
    }
    
    
    public function testValueTrue(): void
    {
        $this->expectOutputRegex('/(\>TRUE\<)/');
        VD(true);
    }
    
    public function testValueFalse(): void
    {
        $this->expectOutputRegex('/(\>FALSE\<)/');
        VD(false);
    }
    
    public function testValueInteger(): void
    {
        $this->expectOutputRegex('/(\>10\<)/');
        VD(10);
    }
    
    public function testValueFloat(): void
    {
        $this->expectOutputRegex('/(\>10.1\<)/');
        VD(10.1);
    }
    
    public function testValueStringEmpty(): void
    {
        $this->expectOutputRegex('/(\>""\<)/');
        VD("");
    }
    
    public function testValueString(): void
    {
        $this->expectOutputRegex('/(\>AAA\<)/');
        VD("AAA");
    }
    
}
