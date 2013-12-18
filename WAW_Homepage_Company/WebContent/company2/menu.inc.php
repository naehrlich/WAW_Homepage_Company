<?php 
$menu = new Menu();
//echo "<p style=\"font-size:7em;color=red\">UNDER CONSTRUCTION";
//$menu->renderMenu();
?>


<nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Robertson & Partner Rechtsanw&auml;lte</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
        <?php $menu->renderMenu();?>
         <!-- 
          <ul class="nav navbar-nav">
            <li><a href="index.php?page=home">Home</a></li>            
            <li><a href="index.php?page=team">Team</a></li>            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Beratungsleistungen <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Arbeitsrecht</a></li>
                    <li><a href="#">Mietrecht</a></li>
                    <li><a href="#">Erbrecht</a></li>
                </ul>
            </li>              
            <li><a href="index.php?page=contact">Kontakt</a></li>
            
            
            <li><a href="index.php?page=impressum">Impressum</a></li>
            
          </ul>
          -->
        </div>
    </nav>
   
 
