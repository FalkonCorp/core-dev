<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class VDDTest extends TestCase
{
    public function testCallerFile(): void
    {
        $this->expectOutputRegex('/(VDD)/');
        VD('XXX');
    }
    
    
    //public function testInteger(): void
    //{
    //    //$this->expectOutputRegex(string $regularExpression);
    //    //
    //    //VD(1);
    //}
}
