<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: lightblue;
        }
        td{
            width: 50px;
            height: 50px;
            border: 3px solid black;
            text-align: center;
            font-weight: bold;
        }
        table{
            border-collapse: collapse;
            width: 500px;
            height: 500px;
        }
        .whitebox{
            background-color: white;
        }
        .blackbox{
            background-color: grey;
        }
        td.nothing{
            background-color: none;
            border: 2px none;
            padding : 0px;
        }
        
    </style>
</head>
<body>
    <?php
        echo "<table>";
        $letters = array("a","b","c","d","e","f","g","h");
        $letter;
        for($x=8; $x>=0; $x--){
            
            echo "<tr>";
            
            
                
            for($y=0; $y<=8; $y++){
                    
                

                
                if($x==0 && $y==0){
                    echo "<td class='nothing'></td>";
                    
                }elseif($y == 0){
                    echo "<td class='nothing'>$x</td>";

                }elseif($x == 0){   
                    $letter = $letters[$y-1];
                    echo "<td class='nothing'>$letter</td>";

                }elseif(($x + $y) % 2 == 0){
                    $letter = $letters[$y-1];
                    echo "<td class='whitebox'>$letter$x</td>";
                
                }elseif(($x + $y) % 2 == 1){
                    $letter = $letters[$y-1];
                    echo "<td class='blackbox'>$letter$x</td>";
                }   
                
            }
            
            echo "</tr>";
        
        }
        echo "</table>";
    ?>


</body>
</html>