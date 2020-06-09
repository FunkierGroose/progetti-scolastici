<html>
    <head>
        <title>Char!</title>
        <link rel="stylesheet" href="stile.css">
    </head>
    <body>
        <?php

           $azione = "";

           if(isset($_POST["azione"]))
           $azione = $_POST["azione"];

          
           print"<h1>Char!<h1>";
           print"<h3 class='h3'>Stampa di un carattere tabulato<h3>";
           print"<br><br>";
           print"<form action='default.php' method='post'>";
           print"<table>";
           print"<tr><td><input type='text' name='char'class='testo1' placeholder='Inserire carattere'></td></tr>";
           print"<tr><td><input type='text' name='rip' class='testo2' placeholder='Inserire la ripetizione'></td></tr>";
           print"</table>";
           print"<input type='submit' value='Click!'>";
           print"<input type='hidden' name=azione value='test'>";
           print"</form>";

           if($azione == "test"){

            $char = $_POST["char"];
            $rip = $_POST["rip"];
            print"<p class='ris'>Risultato</p>";
            print"<table class='table'>";

            for($i = 0; $i < $rip; $i++){

                print"<tr></tr>";

                for($j = 0; $j < $rip; $j++){

                    print"<td>$char</td>";

                }
            }

            print"</table>";

           }




        ?>
    </body>
</html>