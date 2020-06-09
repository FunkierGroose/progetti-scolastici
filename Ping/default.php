<html>
    <head>
        <title>Calcolo del Ping</title>
    </head>
    <body>
        <?php  
        
              $AZIONE="";
    
              if(isset($_POST['AZIONE'])) $AZIONE=$_POST['AZIONE'];
              
                print "<h1>PING</h1>";
                print "<br><br>";
                print "<h3>COSA FA QUESTA PAGINA WEB?</h3>";
                print "<p>Questa pagina web ti consente di calcolare la velocita' di latenza (PING) di una pagina web generica</p>";
                print "<p class='para'>Non c'e' bisogno che tu scriva l'indirizzo web con il protocollo HTTP, scrivi semplice</p>";
                print "<form action='default.php' method='POST'>";
                print "<div class='buscar-caja'>";
                print "<input type='text' class='buscar-txt' name='url' placeholder='Cerca il sito'/>";
                print "<a class='buscar-btn'>";
                print "<i class='far fa-search'></i>";
                print "</a>";
                print "</div>";
                print "<input type=submit name=AZIONE value=test>";
                print "</form>";
              
                
   
              if($AZIONE=="test"){
              if(!isset($_POST['url']))   die("INSERISCI URL");
              $ch=curl_init($_POST['url']);
              curl_setopt ($ch,CURLOPT_RETURNTRANSFER,1);
              if(curl_exec($ch))
              {
                
                   $info=curl_getinfo($ch);
                   echo '<position top=50% left=50%>Sono necessari '.$info['total_time'].'  secondi per '.$info['url'].'';
              } else  
              echo "<p>Errore</p>";                      
              curl_close($ch);                           
            }    

         ?>
    </body>
</html>