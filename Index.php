<?php
function CijferMetNormering($goedeVragen,$totaalVragen, $normering): float|int
{
    return round(($goedeVragen/$totaalVragen)*9 + $normering,precision: 1);
}
//echo CijferMetNormering(goedeVragen: 38, totaalVragen:71,normering: 1);


?>
<?php if (!empty($_POST)): ?>
    <?php
    if(isset($_POST["totaalvragen"])) {
     echo(CijferMetNormering($_POST["goedevragen"],$_POST["totaalvragen"],normering: $_POST["normering"]));
    }
    ?>
<?php endif; ?>
   <form action="" method="POST">
        aantal vragen goed <br>
        <input type="text" name = "goedevragen">
        <br>
        totaal aantal vragen <br>
        <input type="text" name = "totaalvragen"> 
        <br>
        de normering<br>
        <input type="text" name=   "normering" >
        <input type="submit" name="confirm"
                class="button" value="bevestig" />      
   </form> 
   <?php  ?>