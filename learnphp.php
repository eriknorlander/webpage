<html>

<?php
  /* Employee ska hålla all nödvändig information for en anställd.
     Jag använder mig här av standardmetoder i PHP.
  */
  class Employee {
      protected $name;
      protected $birthday;
      protected $sales;
      protected $id;

      public static $employer = "me";

      function __construct() {
          $this->id = rand(100,1000000);
          echo $this->id . " has been assigned" . "</br>";
      }

      public function __destruct() {
          echo $this->name . " is being destroyed :(";
      }

      function __get($name){
          echo $name . "<\br>";
          return $this->$name;
      }

      function __set($name, $value){
          switch($name){
              case "name" :
                  $this->name = $value;
                  break;
              case "birthday" :
                  $this->birthday = $value;
                  break;
              case "id" :
                  $this->id = $value;
                  break;
              default :
                  echo "$name" . " Not Found" . "</br>";
          }
      echo "Set " . $name . " to " . $value . "</br>";
    }

  }

/*$employee_one = new Employee();
$employee_one->name = "Markus";
$employee_one->birthday = "01-01-1993";

//echo "It is " . $employee_one->birthday . " that is " . $employee_one->name . ", id " . $employee_one-> id . " birthday!" . "</br>";
*/


?>

</html>
