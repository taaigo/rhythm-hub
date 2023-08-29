<?php
function genCssArray($include)
{
    $output = "";
    for ($i = 0; $i < count($include); $i++)
    {
        $output .= '<link rel="stylesheet" href="../styles/'.$include[$i].'.css">';
    }
    return $output;
}
