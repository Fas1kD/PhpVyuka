<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">     <!--Nastavení přiblížení a oddálení-->
    <title>KalkulackaPHP</title>     <!--Nadpis-->
</head>
<body>
    <body style="background-color:powderblue;">

    
    <!-- Nadpis -->

    <h1>PHP KALKULAČKA</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  <!--PHP? FORMULÁŘ (CHAT BOT)-->

         <!-- Input pro první číslo -->

        <input type="text" name ="cislo1" placeholder="Zde zadejte první číslo">

        <!-- Operace - výběr operace (+,-,/,*) -->

        <select name ="operace">      <!-- "select" - vytvoření výběrového řádku, "option value" - výber -->
            <option value = "+">+</option>
            <option value = "-">-</option>
            <option value = "*">*</option>
            <option value = "/">/</option>
            <option value = "**">2</option>     <!-- na několikátou (index nahoře) -->
        </select>

        <!-- Input pro druhé číslo -->

        <input type = "text" name = "cislo2" placeholder = "Zde zadejte druhé číslo">

        <!-- Tlačítko pro počítání -->

        <input type = "submit" name ="submit" value ="Spočítej">   <!--Tlačítko pro spočítání-->
    </form>     <!--Konec Formulářů-->


    <!-- PHP funkce-->

    <?php
    function spocitej($cislo1, $cislo2, $operace){          //Funkce, která využívá číslo1

        //Operace v PHP + - * / ** (na několikátou, index nahoře)

        //Vyhází ze zvoleni operaca ("case" = "if")
        // return - vrací hodnotu výpočtu čísla1 a čísla2
        switch ($operace) { 

            //Operace plus
            case "+":
                return $cislo1 + $cislo2;
                
            //Operace minus
            case "-":
                return $cislo1 - $cislo2;

            //Operac krát
            case "*":
                return $cislo2 * $cislo1;

            //Operace děleno
            case "/":
                return $cislo1 / $cislo2;

            //Na několikátou, index nahoře
            case "**":
                return $cislo1 ** $cislo2;

            }

    }



    // Kontola inputu přepis (CHAT GPT)
    if(isset($_POST['submit'])) {    //Systémová proměná POST (něco jako string), POST = pošta, posílá operace čísla atd...
        $cislo1 = $_POST['cislo1'];
        $cislo2 = $_POST['cislo2'];
        $operace = $_POST['operace'];

        // Kontrola inputu a výpočet
        // is_numeric - ověří zda se jedná o číslo
        if(is_numeric($cislo1) && is_numeric($cislo2)) {    

            // Počítání kalkulačky
            $result = spocitej($cislo1, $cislo2, $operace);
            echo "<p style=\"border: 2px solid DodgerBlue;\" >Velký počítání: $cislo1 $operace $cislo2 = $result</p> <br> <p style=\"color: red; font-size: 300%; text-align:center;\">VÝSLEDEK: $result</p>"; //Výsledek (output), vypíše výpočet a následně i výsledek
        }
    }

    ?>

          <!-- http://dominikphp.infinityfreeapp.com/index.php - odkaz na stránku -->

</body>
</html>

