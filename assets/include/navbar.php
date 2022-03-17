  <?php if(isset($_SESSION['pseudo'])){ 
    echo "  <nav id='navbar'>
        <a id='nav-toggle-button'>
            <span class='nav-toggle-bar1'></span>
            <span class='nav-toggle-bar2'></span>
            <span class='nav-toggle-bar3'></span>
        </a> 
       <a href='index.php'><img id='nav-logo' src='assets/img/logo.jpg' alt='Logo YP'></a>
       <div id='nav-links1'>
       <ul>
       <li><a href='compte.php'> ",$_SESSION['pseudo'] ,"</a></li>
        </ul>
         </div> 
       <div id='nav-links2'>
           <ul>
                <li><a href='connecter.php'>Metropolis</a></li>
            </ul>
        </div>
        <div id='nav-links'> 
            <ul>
                <li><a href='assets/include/traitement-session.php'> Deconnexion</a></li>  
                        </ul>
                    </div>
            </nav>";
                }else{
                    echo "  <nav id='navbar'>
                    <a id='nav-toggle-button'>
                        <span class='nav-toggle-bar1'></span>
                        <span class='nav-toggle-bar2'></span>
                        <span class='nav-toggle-bar3'></span>
                    </a> 
                   <a href='index.php'><img id='nav-logo' src='assets/img/logo.jpg' alt='Logo YP'></a>
                     <div id='nav-links1'>
                       <ul>
                            <li><a href='inscription.php?id=#'>Inscription</a></li>
                        </ul>
                    </div>
                    <div id='nav-links2'>
                       <ul>
                            <li><a href='connecter.php'>Metropolis</a></li>
                        </ul>
                    </div>
                    <div id='nav-links'> 
                        <ul><li> <a href='identifier.php?id=#'>S'identifier</a></li>
                                    </ul>
                                </div>
                        </nav>";
             
              
          
  } ?>