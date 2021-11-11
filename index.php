<?php
// buat class laptop
class laptop {
  
   private $pemilik = "Resita";
   private $merk = "Asus";
   
   public function __construct(){
     echo "Ini berasal dari constructor Laptop";
   }
  
   public function hidupkan_laptop(){
     return "Matikan Laptop $this->merk punya $this->pemilik";
  
   }
   public function __destruct(){
     echo "Ini berasal dari destructor Laptop";
   }
}
  
// buat objek dari class laptop (instansiasi)
$laptop_resita= new laptop();
  
echo "<br />";
echo $laptop_resita->hidupkan_laptop();
echo "<br />";
?>
