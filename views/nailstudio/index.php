<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blingblingnagelstudiochantal</title>
</head>
<body>
    <h1 style="color: purple;">
        Bling Bling Nail Studio Chantal
    </h1>
<form>
    <h3>
        kies 4 basiskleuren voor uw nagels:
    </h3>
   
    <input type="color" value="#ff0000">
    <input type="color" value="#712995">
    <input type="color" value="#DA98CA">
    <input type="color" value="#ECE46C">
</form> 

    <form>
    <h3>
        Uw telefoonnummer:
    </h3>
    <input type="tel" placeholder="+31 6 2570 51 41" pattern="^+\d{2} \d \d{4} \d{2} \d{2}$" required>
     </form>

    <form>
    <h3>
        Uw e-mailadres:
    </h3>
    <input type="email" placeholder="randomguy@gmail.com" pattern="^[a-zA-Z0-9@]+$" required>
     </form>

    <form>
    <h3>
        Afspraak datum:
    </h3>
    <input type="datetime-local" placeholder="dd-mm-jjjj" required>
    <input type="hidden">
     </form>

    <form>
    <h3>
        soort behandeling:
    </h3>
    <input type="checkbox" id="bahandeling1">
    <label for="behandeling1">Nagelbijt arrangement (termijnbetaling mogelijk) $180</label>
<br>
    <input type="checkbox" id="bahandeling2">
    <label for="behandeling2">Luxe manicure (massage en handpakking) $30,00</label>
<br>
    <input type="checkbox" id="behandeling3">
    <label for="behandeling3">Nagelreparatie per nagel (in eerste week gratis) $5,00</label>
<br>
    <input type="submit" value="Sla op">
    <input type="reset" value="Reset" >
</form>
</body>
</html>