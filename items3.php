<?php
//items3.php here is what I've been workin on but I don't know yet how the pieces fit together. 
//Hope this helps one of you to continue with it. 



$myItem = new Item(1,"Sundae","Three Scoops and custom toppers!",5.95);
$myItem->addExtra("Chocolate Sauce",0.49);
$myItem->addExtra("Caramel Sauce",0.49);
$myItem->addExtra("Strawberry Sauce",0.49);
$myItem->addExtra("Marshmallow Cream",0.49);
$myItem->addExtra("Whipped Cream",0.49);
$myItem->addExtra("Sprinkles",0.49);
$myItem->addExtra("Chopped Peanuts",0.49);
$myItem->addExtra("Chopped Almonds",0.49);
$myItem->addExtra("Cherry",0.49);
$items[] = $myItem;

$myItem = new Item(2,"Double Scoop","Two scoops in a cup!",4.95);
$myItem->addExtra("Chocolate Sauce",0.49);
$myItem->addExtra("Marshmallow Cream",0.49);
$myItem->addExtra("Whipped Cream",0.49);
$myItem->addExtra("Sprinkles",0.49);
$myItem->addExtra("Chopped Peanuts",0.49);
$myItem->addExtra("Chopped Almonds",0.49);
$items[] = $myItem;

$myItem = new Item(3,"Single Scoop","Delicious homemade ice cream!",3.95);
$myItem->addExtra("Chocolate Sauce",0.49);
$myItem->addExtra("Marshmallow Cream",0.49);
$myItem->addExtra("Whipped Cream",0.49);
$items[] = $myItem;


//create a counter to load the ids... (I don't know yet how to do this)
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


