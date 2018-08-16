<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Swastik</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        function dots($d=0){
            for($i=0;$i<$d;$i++)
            {
                echo("*");
            }
        }
        function spaces($s=0){
            for($i=0;$i<=$s;$i++)
            {
                echo("&nbsp&nbsp");
            }
        }
        function nline(){
                echo("<br />");
        }
        dots(1);spaces(8);dots(10);nline();
        for($j=0;$j<3;$j++){
            dots(1);spaces(8);dots(1);nline();
        }
        dots(1);dots(19);nline();
        for($k=0;$k<3;$k++){
            spaces(9);dots(1);spaces(7);dots(1);nline();
        }
        dots(11);spaces(7);dots(1);nline();
    ?>
</body>
</html>