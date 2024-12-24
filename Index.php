<?php
function CijferMetNormering($goedeVragen,$totaalVragen): float|int
{
    $gemiddelde =$goedeVragen/$totaalVragen*10;
    if($gemiddelde > 6){
        return round($gemiddelde,1);
    }
    else{
        return round($gemiddelde+((6-$gemiddelde)/6),1);
    }
}
//echo CijferMetNormering(goedeVragen: 38, totaalVragen:71,normering: 1);


?>
<style>
    .content{
        margin: auto;
        width: 75%;
        padding: 10px;
    }
</style>
<div class = "content">
<?php if (!empty($_POST)): ?>
    <?php
    
     echo(CijferMetNormering($_POST["goedevragen"],$_POST["totaalvragen"]));
    
   
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
        <br>
        <br>
        <input type="submit" name="confirm"
                class="button" value="bereken" />      
   </form> 
   </div>
   <?php   ?>