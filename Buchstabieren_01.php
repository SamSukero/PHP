<html>

<head>
  <title>Wuerfeln</title>
</head>

<body>

<?php

var_dump ($_POST);
echo "</br></br>";

$Wort = "Test";
echo "das zu buchstabierende Wort ist: " . $Wort;

$Zeichen = str_split ($Wort);
var_dump($Zeichen);



for ($i = 0; $i <=strlen($Wort); $i++)
 {
    switch($Zeichen)
    {
    case 't':
        echo "Theodor";
        break;
    case 'e':
        $Syno = "Emil";
        echo $Zeichen[$i] . " | " . $Syno;
        break;
    case 's':
        $Syno = "Siegfried";
        echo $Zeichen[$i] . " | " . $Syno;
        break;
        }



 }





?>

</body>

</html>