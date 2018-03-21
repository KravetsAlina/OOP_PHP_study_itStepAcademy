<?php
		/**	
		*точка входа на сайт
		*архитектура сайта PageController
		*/
	require("system/classes/PageController.php");
	$page = new PageController();
	$page->load();  //run
	