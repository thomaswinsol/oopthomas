
<?php
/*
 * require the needed objects
 */ 
ini_set('display_erros', 1);
require_once 'includes/Vehicle.php';
?>
<!doctype html>
<html>
    
    <head>
        <title>
            Vehicle
        </title>        
    </head>    
    <body>
    <?php
        /*
         * instantiate object $car
        */
        $car = new Vehicle(); 
        
        $car->setColor('White');
        $car->setBrand('Porshe');
        $car->setShape('coupé');
        $car->setprice(50000);
        $car->setNumDoors(2);
        
        /*$car->shape     = 'coupé';
        $car->color     = 'White';
        $car->num_doors = 2;
        $car->price     = 500000;*/
       
        $car->showPrice();
        $car->numDoors();
        $car->drive();
        echo "color : " . $car->getColor(). '<br/>';
        echo "brand : " . $car->getBrand(). '<br/>'
        
    ?>
    </body>
</html>


