<?php
function CijferMetNormering($goedeVragen,$totaalVragen, $normering): float|int
{
    return round(($goedeVragen/$totaalVragen)*9 + $normering,precision: 1);
}
echo CijferMetNormering(goedeVragen: 38, totaalVragen:71,normering: 1);


?>
<html>
   <form action="" method="POST">
        <input type="text" name = "goedevragen">
   </form> 
</html>