<?php
require_once 'DBConnection.php';
require_once 'common/General.php';

class Topsoil extends Connection{

    private $measureUnit;
    private $depthUnit;
    private $width;
    private $length;
    private $depth;
    private $dimension;
    private $bagsNum;
    //setters
    public function setMeasureUnit($unit)
    {
       $this->measureUnit = $unit;
    }
    public function setDepthMeasureUnit($unit)
    {
        $this->depthUnit = $unit;
        } 
        public function setDimensions($width,$length,$depth)
        {
            //calculate to meter
            switch ($this->depthUnit) {
                case 'cm':
                    $this->depth = $depth*0.01;
                    break;
                case 'inche':
                    $this->depth = $depth*0.0254;
                    break;
                case 'meter':
                    $this->depth = $depth;
                    break;
            }
            //calculate to meter
            switch ($this->measureUnit) {
                case 'feet':
                    $this->width = $width*0.3048;
                    $this->length = $length*0.3048;
                    break;
                case 'yard':
                    $this->width = $width*0.9144;
                    $this->length = $length*0.9144;
                    break;
                case 'meter':
                    $this->width = $width;
                   $this->length = $length;
                    break;
            }

           
            $this->dimension = $this->width * $this->length * $this->depth;
        } 
    //getters
    public function getMeasureUnit()
    {
        return $this->measureUnit;
    }
  
    public function getDepthMeasureUnit()
    {
        return $this->depthUnit;
    } 
    public function getDimensions()
    {
        return $this->dimension;
    }
    // count and return the number of Bags needed
    public function calBagsNums()
    {
       $x =  $this->dimension * 0.025;
       $this->bagsNum = ceil($x * 1.4);
       return $this->bagsNum;
    }
    //save the value to database
    public function saveToDb($bagsnum)
    {
        $isAdded = false;
        try {
            $stmt = $this->connection->prepare("INSERT INTO `bags` (`bags`) VALUES (?)");
            $stmt->bind_param("i", $bagsnum);
            $stmt->execute();

            if ($stmt->insert_id > 0) {
                $isAdded = true;
            } else {
                General::writeEvent("insert Bags Number error" . $stmt->error);
            }
            $stmt->close();
        } catch (Exception $e) {
            General::writeEvent("insert Bags Number error" . $e->getMessage());
        }

        return $isAdded;
    }



}

