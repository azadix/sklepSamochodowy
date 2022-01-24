<?php
    function dodajZawartoscNaPodstawieParametru(){
        if (isset($_GET['car'])) {
            echo "<p>Key= " . htmlspecialchars($_GET['car']) . "</p>";
            echo "<p>Value= " . $GLOBALS['listaSamochodow'][$_GET['car']] . "</p>";
        } else {
            echo "<p>Witamy na stronie głównej komisu.</br>Wybierz auto z lewej strony panelu aby zobaczyć szczegóły</p>";
        }
    }

    function dodajListeSamochodow(){
        $numeracja = 0;
        foreach (getSamochody() AS $key => $value) {
            $numeracja++;
            if (is_array($value)){
                echo "<a href='?car={$key}'><li>{$numeracja} {$value[model]}</li>";
                foreach ($value AS $subKey => $subValue ){
                    echo "<li class='subValue'>{$subKey}: {$subValue}</li>"; // STYLE ME PLZ - padding from left or sth
                }
                echo '</a>';
            } else {
                echo "<a href='?car={$key}'><li>{$numeracja} {$value}</li></a>";
            }
        }
    }

    function getSamochod($car){
        return getSamochody()[$car];
    }

    // such array might not be the best solution
    // hovewer, having mixed arrays like these
    // WILL actually happen. And as you can see in
    // changed dodajListeSamochodow() - code can
    // still work well with it
    function getSamochody(){
        return array(
            "panda" => "Fiat Panda",
            "punto" => array(
                'model' => "Fiat Punto",
                'silnik' => '50L',
                'kolor' => 'czerwony'
            ),
            "corsa" => "Opel Corsa",
            "astra" => "Opel Astra",
            "corolla" => "Toyota Corolla",
            "yaris" => "Toyota Yaris"
        );
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