<?php 
namespace Factory;
require_once "./product.php";
use Product\Chair;
use Product\Sofa;
use Product\Table;
use Product\ModernChair;
use Product\VintageChair;
use Product\ModernSofa;
use Product\VintageSofa;
use Product\ModernTable;
use Product\VintageTable;

interface FurnitureFactory {

  public function createChair():Chair;
  public function createSofa():Sofa;
  public function createTable():Table;
}

  class ModernFactory implements FurnitureFactory {
    public function createChair():Chair{
      return new ModernChair();
    }
    public function createSofa():Sofa{
      return new ModernSofa();
    }
    public function createTable():Table{
      return new ModernTable();
    }
  }

  class VintageFactory implements FurnitureFactory {
  
    public function createChair():Chair{
      return new VintageChair();
    }
    public function createSofa():Sofa{

      return new VintageSofa();
    }
    public function createTable():Table{
      return new VintageTable();
    }
  }


?>