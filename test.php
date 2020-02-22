<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    
    $_POST['number'];
    if($_POST['number']>0){
        echo "Number is Positve";
    }
    else{
        echo "Number is Negative";
    }
    
    
    ?>
    <form action="test.php" method="_post">
    <input type="text" name='number'>
    <input type="submit">
    </form>
    
</body>
</html>