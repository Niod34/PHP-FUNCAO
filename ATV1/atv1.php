<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="atv1.css">
</head>
<body>
    <main>


<?php


    $temp = $_POST['temp'];


    if(isset($_POST['btn']))
    FtoC($temp);
    {


function FtoC ($temp){
return ($temp-32)*5/9;


}
echo "A temperatura em Celsius é: ".FtoC($temp);
}  
?>


</main>
   
</body>
</html>