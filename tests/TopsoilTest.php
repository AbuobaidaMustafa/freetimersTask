<?php
require_once 'model/Topsoil.php';

use PHPUnit\Framework\TestCase;


final class TopsoilTest extends TestCase
{
    public function testSetMeaureUnit(){
        $actual = new Topsoil;
        $actual->setMeasureUnit('meter');
        $this->assertEquals($actual->getMeasureUnit(),'meter');
    }
    public function testSetDepthMeasureUnit(){
        $actual = new Topsoil;
        $actual->setDepthMeasureUnit('meter');
        $this->assertEquals($actual->getDepthMeasureUnit(),'meter');
    }

    public function testSetDimensions(){
        $actual = new Topsoil;
        $actual->setMeasureUnit('feet');
        $actual->setDepthMeasureUnit('cm');
        $actual->setDimensions(2,2,200);
        $this->assertEquals($actual->getDimensions(),0.74322432);
    }
    public function testCalBagsNums(){
        $actual = new Topsoil;
        $actual->setMeasureUnit('meter');
        $actual->setDepthMeasureUnit('meter');
        $actual->setDimensions(5,5,5);
        $this->assertEquals($actual->calBagsNums(),5);
    }
    public function testSaveToDb(){
        $actual = new Topsoil;
        $actual->setMeasureUnit('meter');
        $actual->setDepthMeasureUnit('meter');
        $actual->setDimensions(5,5,5);
        $this->assertTrue($actual->saveToDb($actual->calBagsNums()),"assert value is true or not");
    }
}