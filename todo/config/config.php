<?php

require_once("constants.php");
//require_once("errors.php");

//Error reporting and handling
/* error_reporting(E_ALL);
set_error_handler("dev_error_handler");
 */

/**
 * Data source configuration
 * JSON: DATASOURCE_JSON
 * CSV: DATASOURCE_CSV
 * MYSQL: DATASOURCE_MYSQL
 */
define("DATASOURCE_TYPE", DATASOURCE_JSON);



?>