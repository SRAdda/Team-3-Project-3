<?php
//items3.php

$myItem = new Item(1,"Sundae","Three Scoops and custom toppers!",5.95);
$myItem->addExtra("Chocolate Sauce");
$myItem->addExtra("Chocolate Sauce");
$myItem->addExtra("Marshmallow Cream");
$myItem->addExtra("Whipped Cream");
$myItem->addExtra("Sprinkles");
$myItem->addExtra("Chopped Peanuts");
$myItem->addExtra("Chopped Almonds");
$myItem->addExtra("Cherry");
$items[] = $myItem;

$myItem = new Item(3,"Double Scoop","Two scoops in a cup!",4.95);
$myItem->addExtra("Chocolate Sauce");
$myItem->addExtra("Marshmallow Cream");
$myItem->addExtra("Whipped Cream");
$myItem->addExtra("Sprinkles");
$myItem->addExtra("Chopped Peanuts");
$myItem->addExtra("Chopped Almonds");
$items[] = $myItem;

$myItem = new Item(3,"Single Scoop","Delicious homemade ice cream!",4.95);
$myItem->addExtra("Chocolate Sauce");
$myItem->addExtra("Marshmallow Cream");
$myItem->addExtra("Whipped Cream");
$items[] = $myItem;


//create a counter to load the ids...
//$items[] = new Item(1,"Taco","Our Tacos are awesome!",4.95);
//$items[] = new Item(2,"Sundae","Our Sundaes are awesome!",3.95);
//$items[] = new Item(3,"Salad","Our Salads are awesome!",5.95);

echo '<pre>';
var_dump($items);
echo '</pre>';


class Item
{
    public $ID = 0;
    public $Name = '';
    public $Description = '';
    public $Price = 0;
    public $Extras = array();
    
    public function __construct($ID,$Name,$Description,$Price)
    {
        $this->ID = $ID;
        $this->Name = $Name;
        $this->Description = $Description;
        $this->Price = $Price;
        
    }#end Item constructor
    
    public function addExtra($extra)
    {
        $this->Extras[] = $extra;
        
    }#end addExtra()

}#end Item class


