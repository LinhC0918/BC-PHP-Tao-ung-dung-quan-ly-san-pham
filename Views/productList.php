<?php

echo '<table border="1">';
foreach ($products as $key) {
    echo '<tr>';
    echo '<td><a href="/?id=' . $key->id . '">' . $key->name . '</a></td>';
    echo '<td>' . $key->price . '</td>';
    echo '<td>' . $key->description . '</td>';
    echo '<td>' . $key->producer . '</td>';
    echo '</tr>';
}
echo '</table>';