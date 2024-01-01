<?php 
namespace Product;
    interface Chair{
      public function hasLegs();
    }
    interface Sofa{
      public function hasCushion();
    }
    interface Table{
      public function hasPlane();
    }
    class ModernChair implements Chair{
      public function hasLegs(){
        return array("legs"=> "4");
      }
    }
    class VintageChair implements Chair{
      public function hasLegs(){
        return array("legs"=> "5");
    }
  }
    class ModernSofa implements Sofa{
      public function hasCushion(){
        return array("legs"=> "4");
    }
  }
  class VintageSofa implements Sofa {
    public function hasCushion(){
      return array("cushion"=> "Yes");
    }
  }

  class ModernTable implements Table{
    public function hasPlane(){
      return array("Plane Faces"=> "Yes");
  }
}
  
  class VintageTable implements Table{
    public function hasPlane(){
      return array("PlaneFAces"=> "3");
    }
  }


?>