<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Square</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php 
    $flag1=0;
    $flag2=0;
    for($i=0;$i<4;$i++)
    {
        if($flag1==0||$flag1==3)
        {
            for($j=0;$j<15;$j++)
            {
                echo "*";
            }
            echo "<br />";
        }    
        else
        {
            for($l=0;$l<2;$l++)
            {
                $flag2=0;
                for($k=0;$k<4;$k++)
                {
                    if($flag2==0||$flag2==3)
                    {
                        echo "*";
                    }
                    elseif($flag2==1)
                    {
                        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                    }
                    $flag2++;
                    if($flag2==4)
                    {
                        echo "<br />";
                    }
                }
            }    
        }
        $flag1++;
    }
?>    
</body>
</html>