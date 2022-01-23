<?php
    function dodajZawartoscNaPodstawieParametru(){
        if (isset($_GET['car'])) {
            echo "<p>" . htmlspecialchars($_GET['car']) . "</p>";
        } else {
            echo "<p>Witamy na stronie głównej komisu.</br>Wybierz auto z lewej strony panelu aby zobaczyć szczegóły</p>";
        }
    }

    function dodajListeSamochodow(){
        $numeracja = 1;
        foreach ($GLOBALS['listaSamochodow'] as $klucz => $nazwa) {
            echo "<a href='?car={$klucz}'><li>{$numeracja} {$nazwa}</li></a>";
            $numeracja++;
        }
    }    
?>


<div id="glownaZawartosc">
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

    <div id="prawyPanel">
        <?php dodajZawartoscNaPodstawieParametru();?>
    </div>
</div>