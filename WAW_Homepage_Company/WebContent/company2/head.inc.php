  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Robertson & Partner Rechtsanw&auml;lte 
    	<?php     	
    		if(isset($_REQUEST["page"]) ){
				switch($_REQUEST["page"]){
					case "team": echo " - Team"; break;
					case "contact": echo " - Kontakt"; break;
					case "impressum": echo " - Impressum"; break;
				}
			}
		?></title>

    <link href='https://fonts.googleapis.com/css?family=Trochut' rel='stylesheet' type='text/css'>
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/business-casual.css" rel="stylesheet">     
    <script src="js/company.js"></script>
  </head>