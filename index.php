<html>
<head>
<style>
    body{
        background-color: blue;
        background-size: cover;
    }
  
    button:hover{
        cursor: pointer;
        background-color: pink;
        color: white;
    }
    
    </style>
</head>
<body>
<center>
    <br><br><br><div style="color white; border:5px solid black; font-family: sans-serif; background:yellow;width:400px;position:absolute;margin-left:500px;">
    <h3 style="color: black;">
        
   <div>
    
    </div>
<?php 
    class vehicle{
        //declaring member variable here
        var $type;
        var $fuel;
        var $capacity;
        var $speed;


        //declaring member functions here
        function setType($typ){
            $this->type = $typ;
        }
        function getType(){
            echo"<p>vehicle type: $this->type</p>";
        }
        function setFuel($gas){
            $this->fuel = $gas;
        }
        function getFuel(){
            echo"<p>fuel type: $this->fuel</p>";
        }
        function setCapacity($cap){
            $this->capacity = $cap;
        }
        function getCapacity(){
            echo"<p>passenger: $this->capacity</p>";
        }
          function setSpeed($spd){
            $this->speed = $spd;
        }
        function getSpeed(){
            echo "<p>speed: $this->speed</p>";
        }

    }
    $physics = new vehicle();
    $physics->setType("Ferrari");
    $physics->getType();

    $physics = new vehicle();
    $physics->setFuel("Premium");
    $physics->getFuel();

    $physics = new vehicle();
    $physics->setCapacity("292");
    $physics->getCapacity();
        
        $physics = new vehicle();
    $physics->setSpeed("349 km/h (217 mph)");
    $physics->getSpeed();
        
        
    
        
    $physics = new vehicle();
    $physics->setType("Suzuki Multicab Carry");
    $physics->getType();

    $physics = new vehicle();
    $physics->setFuel(" turbo Diesel");
    $physics->getFuel();

    $physics = new vehicle();
    $physics->setCapacity("11-13");
    $physics->getCapacity();
        
        $physics = new vehicle();
    $physics->setSpeed("4x4 km/h");
    $physics->getSpeed();
    
        

?>
        </h3>
</div>
    
   
  
</center>
</body>