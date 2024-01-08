<?php
function oddOrEven($var)
{
  $var= $_GET["data"];

  if ($var % 2 === 0) {
    echo "$var" . ' est paire';
  } else {
    echo "$var" . ' est impaire';
  }

}

oddOrEven($number)

?>
