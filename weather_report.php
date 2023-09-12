<?php

$temperature = 20;

if ($temperature <= 0) {
  echo "It's freezing!";
} elseif ($temperature <= 15) {
  echo "It's cool.";
} else {
  echo "It's warm.";
}

?>