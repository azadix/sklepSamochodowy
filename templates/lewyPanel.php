<?php
    function dodajListeSamochodow(){
        $numeracja = 1;
        foreach ($GLOBALS['listaSamochodow'] as $klucz => $nazwa) {
            echo "<a href='?car={$klucz}'><li>{$numeracja} {$nazwa}</li></a>";
            $numeracja++;
        }
    }    

?>

<div id="lewyPanel">
    <h2>Wykaz samochodów</h2>
    <ul>
        <?php dodajListeSamochodow();?>
    </ul>

    <h2>Zamówienia</h2>
    <ul>
        <li>3 Anna Kowalska</li>
        <li>6 Jan Nowakowski</li>
        <li>8 Marcin Kolwal</li>
    </ul>
</div>