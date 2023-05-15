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
    
    
    //public function testInteger(): void
    //{
    //    //$this->expectOutputRegex(string $regularExpression);
    //    //
    //    //VD(1);
    //}
}
