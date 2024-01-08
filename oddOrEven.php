<?php
function oddOrEven($var)
{
  if ($var % 2 === 0) {
    echo "$var" . ' est paire';
  } else {
    echo "$var" . ' est impaire';
  }

}
$number= $_GET["data"];

oddOrEven($number)

?>
