<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

    <input type="number" name="num" placeholder="enter number"> <br>
    <input type="submit" value="submit" name="submit">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $num=$_POST['num'];
        echo facto($num);
    }
   function facto($num){
        $fact=1;
        for($i=$num;$i>1;$i--){
            $fact*=$i;
        }
        echo $fact . " is the factorial of " . $num;
    };
    
    
    ?>
</body>
</html>