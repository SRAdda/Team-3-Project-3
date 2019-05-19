<?php
/**
 * items.php just a list of menu items
 * this list is a feed, not programmatic perse.
 * To add items, copy an item block to the bottom of the list, 
 * increment the item number so not to duplicate
 * the menu items are processed into the Class Item array  in biz_logic.php
 * @author David Nguyen davidnguyen234@gmail.com
 * @author Sally Ross sraddabbo@hotmail.com
 * @author Sekllan Chenruan xirenchen94@gmail.com
 * @version 1 2019/05/18
 * @license https://www.apache.org/licenses/LICENSE-2.0
 * @todo None
 */
/*
*
* Class structure for reference only
*
* see class Item in biz_logic.php
* 
* public $ID = 0;
* public $SingularName = '';
* public $PluralName = '';
* public $Description = '';
* public $Price = 0;
* public $Extras = array();
*
*/
$myItem = new Item(1, "Melted Chocolate", "Melted Chocolate", "Most chocolate ice creams are made using cocoa powder, but we use 70% dark, organic, fair trade Theo Chocolate. We melt the chocolate bars using a hot mixture of cream, milk and sugar and the result is a dense, extra fudgy chocolate ice cream unlike any other.", 4.95);
$myItem->addExtra("Chocolate Sauce");
$myItem->addExtra("Marshmallow Cream");
$myItem->addExtra("Whipped Cream");
$config->items[] = $myItem;
$myItem = new Item(2, "Salted Caramel", "Salted Caramel", "Our salted caramel dares to be saltier than all the others! We use kosher sea salt and homemade caramel, made from organic, local cream and butter and non-GMO cane sugar.", 3.95);
$myItem->addExtra("Chocolate Sauce");
$myItem->addExtra("Marshmallow Cream");
$myItem->addExtra("Whipped Cream");
$config->items[] = $myItem;
$myItem = new Item(3, "Honey Lavender", "Honey Lavender", "Inspired by the flavors of the Pacific Northwest, we use locally harvested wild honey and bits of organic lavender from Sequim, on the Olympic Peninsula.", 5.95);
$myItem->addExtra("Chocolate Sauce");
$myItem->addExtra("Marshmallow Cream");
$myItem->addExtra("Whipped Cream");
$myItem->addExtra("Chopped Peanuts");
$config->items[] = $myItem;
$myItem = new Item(4, "Double Fold Vanilla", "Double Fold Vanilla", "This delicious and simple flavor highlights the purity of our local dairy with a touch of sugar and salt. This flavor pairs well with everything!", 7.95);
$myItem->addExtra("Chocolate Sauce");
$myItem->addExtra("Marshmallow Cream");
$myItem->addExtra("Whipped Cream");
$myItem->addExtra("Chopped Peanuts");
$config->items[] = $myItem;
$myItem = new Item(5, "Almond Brittle with Salted Ganache", "Almond Brittle with Salted Ganache", "Salted chocolate ganache and mixed delicious chunks into a creamy vanilla ice cream.", 6.95);
$myItem->addExtra("Chocolate Sauce");
$myItem->addExtra("Marshmallow Cream");
$myItem->addExtra("Whipped Cream");
$myItem->addExtra("Chopped Peanuts");
$config->items[] = $myItem;
?>