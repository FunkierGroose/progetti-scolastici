<html>
    <head>
        <title>Compito!</title>
        <link rel="stylesheet" href="Stile.css">
    </head>
    <body>
        <?php 

            $azione = "";

            /*
            function elab1($inizio,$fine1,$fine2){

                $ris1 = $inizio - $fine1;
                $ris2 = $inizio - $fine2;
                $finale1 = $ris1 + $ris2;

                return $finale1;
            }

            function elab2($inizio,$fine3,$fine4){

                $ris3 = $inizio - $fine3;
                $ris4 = $inizio - $fine4;
                $finale2 = $ris3 + $ris4;

                return $finale2;
            }
            */
            /*
            function finale($finale1,$finale2){

                return $finale1 + $finale2;
            }
*/
            if(isset($_POST['azione']))
            $azione = $_POST['azione'];

            print"<h1>Logic!</h1>";
            print"<h3>Programma di logica matematica</h3>";
            print"<form action='default.php' method='post'>";
            print"<input type='text' id='inizio' name='inizio' placeholder='inserire il numero di inizio'>";
            print"<input type='text' id='fine1' name='fine1' placeholder='inserire il numero finale'>";
            print"<input type='text' id='fine2' name='fine2' placeholder='inserire il numero finale'>";
            print"<input type='text' id='fine3' name='fine3' placeholder='inserire il numero finale'>";
            print"<input type='text' id='fine4' name='fine4' placeholder='inserire il numero finale'>";
            print"<input type='submit' value='Click!'>";
            print"<input type='hidden' name='azione' value='test'>";
            print"</form>";

            if($azione == "test"){

                $inizio = $_POST['inizio'];
                $fine1 = $_POST['fine1'];
                $fine2 = $_POST['fine1'];
                $fine3 = $_POST['fine3'];
                $fine4 = $_POST['fine4'];

                $ris1 = $inizio - $fine1;
                $ris2 = $inizio - $fine2;
                $ris3 = $inizio - $fine3;
                $ris4 = $inizio - $fine4;

                $finale = $ris1 + $ris2 + $ris3 + $ris4;

                print"<p class='ris'>Il risultato e' ".$finale."</p>";

            }
        ?>
    </body>
</html>