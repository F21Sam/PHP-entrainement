<?php
$tab0 = ['Goodbye', 'Dennis'];
$tab1 = ['U', 'DUN', 'GOOFED'];
$tab2 = ['name' => 'Glenn', 'first_name' => 'kenny', 'pets' => 'dusty', 'crime' => 'animal abuse', 'achievement' => 'goofed'];
$tab3 = ['bananas', 'apple', 'fish' => 'sharktopus', 'lemon', 'pineapple', 'pear', 'cherry'];
$tab4 = ['x-men', 'spiderman', 'great sayaman', 'iron man', 'superman', 'batman', 'wolverine', 'hulk'];

function myArrayPrint($var)
{
    
    foreach($var as $key => $value)
    {
    echo ($key . '=>' .$value.'<br>');
    
    }
    echo '<br>';
    
}
myArrayPrint($tab0);
myArrayPrint($tab1);
myArrayPrint($tab2);
myArrayPrint($tab3);
myArrayPrint($tab4);

?>