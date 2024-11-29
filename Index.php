<?php
function CijferMetNormering($goedeVragen,$totaalVragen, $normering): float|int
{
    return ($goedeVragen/$totaalVragen)*9 + $normering;
}
echo CijferMetNormering(goedeVragen: 39, totaalVragen:71,normering: 1);
?>