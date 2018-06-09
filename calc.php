<!DOCTYPE html>
<html>
<head>
</head>
<body>
   <?php 
        if(empty($_GET["valueA"])|| empty ($_GET["valueB"]) ){
           echo"<div>I cannot calculate without values</div>";
       }
        if ($_GET["checkbox"]==false){ 
           echo"<div>You have to check the checkbox</div>";
}
        else {
         
          $a=$_GET["valueA"];
          $b=$_GET["valueB"];

           if ($_GET["stav"]==1){
           $v=$a+$b;
            echo"<div>Sucet: ".$a."+".$b."=".$v."</div>";
           $v=$a-$b;
            echo"<div>Sucin: ".$a."-".$b."=".$v."</div>";
         }
            if($_GET["stav"]==2){
           
           $v=$a*$b;
            echo"<div>Rozdiel: ".$a."*".$b."=".$v."</div>";
           $v=$a-$b;
            echo "<div>Delenie:".$a."/".$b."=".$v."</div>";

           
     
   }

}
?>

</body>
</html>