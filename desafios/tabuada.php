<?php

function tabuada(float $numb): void
{
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numb * $i;
        echo " $numb X $i = $resultado <br>";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabuada</title>
</head>
<body>
    <h3>
    <table align="left" border="1" cellpadding="12">
        <tr><th>1</th>
        <th>2</th>
        <th>3</th>
        <th>4</th>
        <th>5</th>
        </tr>
        <tr>
        <td><?= tabuada(1);     ?></td>
        <td><?= tabuada(2);     ?></td>
        <td><?= tabuada(3);     ?></td>
        <td><?= tabuada(4);     ?></td>
        <td><?= tabuada(5);     ?></td>
        </tr>
        <tr>
            <th>6</th>
            <th>7</th>
            <th>8</th>
            <th>9</th>
            <th>10</th>
        </tr>
        <tr>
        <td><?= tabuada(6); ?></td>
        <td><?= tabuada(7); ?></td>
        <td><?= tabuada(8); ?></td>
        <td><?= tabuada(9); ?></td>
        <td><?= tabuada(10); ?></td>
        </tr>
    </table>
        <table align="left" border="1" cellpadding="12">
        <tr><th>11</th>
        <th>12</th>
        <th>13</th>
        <th>14</th>
        <th>15</th>
        </tr>
        <tr>
        <td><?= tabuada(11); "<br>"; ?></td>
        <td><?= tabuada(12); "<br>"; ?></td>
        <td><?= tabuada(13); "<br>"; ?></td>
        <td><?= tabuada(14); "<br>"; ?></td>
        <td><?= tabuada(15); "<br>"; ?></td>
        </tr>
        <tr>
            <th>16</th>
            <th>17</th>
            <th>18</th>
            <th>19</th>
            <th>20</th>
        </tr>
        <tr>
        <td><?= tabuada(16); ?></td>
        <td><?= tabuada(17); ?></td>
        <td><?= tabuada(18); ?></td>
        <td><?= tabuada(19); ?></td>
        <td><?= tabuada(20); ?></td>
        </tr>
    </table>
    </h3>
</body>
</html>
