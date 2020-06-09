<html>
    <head>
        <title>Risposta Server</title>
    </head>
    <body>
        <?php
            $azione = "";
    
            if(isset($_POST['azione']))
            $azione = $_POST['azione'];
            
          
            print"<h1>Server</h1>";
            print"<h3>Calcolo della risposta del server</h3>";
            print"<form action='default.php' method='post'>";
            print"<input type='text' placeholder='Primo sito' name='url1'>";
            print"<input type='text' placeholder='Secondo sito' name='url2'>";
            print"<input type='hidden' name='azione' value='test'>";
            print"<input type='submit' value='Click'>";
            print"</form>";
            
            if($azione == "test"){

                /* riguardante url1 */
            if(!isset($_POST['url1']))
            die("inserisci il primo url");

            $risp1 = curl_init($_POST['url1']);
            curl_setopt($risp1, CURLOPT_RETURNTRANSFER, 1);

            if(curl_exec($risp1)){
                $info1 = curl_getinfo($risp1);
                print"<p class='risp1'>sono passati ".$info1['total_time']." secondi per ottenere una risposta dal sito".$info1['url1']."</p>";
            }
            
            curl_close($risp1);


            /* riguardante unrl2 */
            if(!isset($_POST['url2']))
            die("inserisci il secondo url");

        
            $risp2 = curl_init($_POST['url2']);
            curl_setopt($risp2, CURLOPT_RETURNTRANSFER, 1);

            if(curl_exec($risp2)){
                $info2 = curl_getinfo($risp2);
                print"<p class='risp2'>sono passati ".$info2['total_time']." secondi per ottenere una risposta dal sito".$info2['url2']."</p>";
            }
            curl_close($risp2);



            if($info1['total_time'] < $info2['total_time']){
                print"<p class='confronto'>".$info1['total_time']." e' minore di ".$info2['total_time'];
            }else{
                print"<p class='confronto'>".$info1['total_time']." e' maggiore di ".$info2['total_time'];
            }
            
            }
        ?>
    </body>
</html>