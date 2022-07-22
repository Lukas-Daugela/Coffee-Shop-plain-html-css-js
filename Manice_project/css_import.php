<?php

include 'function.php';

//   CSS auto-versioning
const CSS = array(
	'./assets\css\style.css',
	'./assets\css\queries.css'
);

foreach (CSS as $css)	
  echo '<link rel="stylesheet" href="' . auto_version($css) . '" type="text/css">';

?>