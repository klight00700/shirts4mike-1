<?php

    // these two constants are used to create root-relative web addresses
    // and absolute server paths throughout all the code

	define("BASE_URL","/shirts4mike/");
	define("ROOT_PATH",$_SERVER["DOCUMENT_ROOT"] . "/shirts4mike/");

	define("DB_HOST","localhost");
	define("DB_NAME","shirts4mike");
	define("DB_USER","root");
	define("DB_PASS","root");