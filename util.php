<?php
function math($x)
{
    if ($x <= 10) {
        $upper = 5 - $x;
        $bottom = 1 - ($x / 5);
        if ($bottom == 0) {
            return "error";
        }

        return round($upper / $bottom, 3);
    }

    if ($x < 20) {
        return round((($x * $x) / 4) + 7, 3);
    }

    return round(2 * $x - 21, 3);
}

function formatBlock($type)
{

}

function formatEntry($type, $x, $f, $n)
{
    switch ($type) {
        case 'A':
            echo 'f(' . $x . ')=' . $f . '<br>';
            break;

        case 'B':
        case 'C':
            echo "<li>f(" . $x . ")=" . $f . "</li>";
            break;

        case 'D':
            echo "<tr><td>{$n}</td><td>{$x}</td><td>{$f}</td></tr>";
            break;

        case 'E':
            echo "<div class='function-block'>f({$x})={$f}</div>";
            break;

        default:
            break;
    }
}
?>