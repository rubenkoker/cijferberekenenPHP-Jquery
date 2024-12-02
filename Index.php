<?php
function CijferMetNormering($goedeVragen,$totaalVragen, $normering): float|int
{
    return ($goedeVragen/$totaalVragen)*9 + $normering;
}
echo CijferMetNormering(goedeVragen: 38, totaalVragen:71,normering: 1);


?>
<html>
   <form action="" method="POST">
        <input type="text" name = "goedevragen">
   </form> 
</html>