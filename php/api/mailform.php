<?php

    mb_internal_encoding("UTF-8");

$hlaska = '';
if (isset($_GET['uspech']))
    $hlaska = 'Email byl úspěšně odeslán, brzy vám odpovíme.';

    if ($_POST) // V poli _POST něco je, odeslal se formulář
    {
        if (isset($_POST['jmeno']) && $_POST['jmeno'] &&
			isset($_POST['email']) && $_POST['email'] &&
			isset($_POST['zprava']) && $_POST['zprava'] &&
			isset($_POST['rok']) && $_POST['rok'] == date('Y'))
        {
            $hlavicka = 'From:' . $_POST['email'];
            $hlavicka .= "\nMIME-Version: 1.0\n";
            $hlavicka .= "Content-Type: text/html; charset=\"utf-8\"\n";
            $adresa = 'rajmon.josef1999@itrajmon.cz';
            $predmet = 'Kontakt z ITrajmon';
            $uspech = mb_send_mail($adresa, $predmet, $_POST['zprava'], $hlavicka);
            if ($uspech)
            {
                    $hlaska = '<p id="gratule">Email byl úspěšně odeslán, brzy vám odpovíme.</p>';
                header('Location: mailform.php?uspech=ano');
                exit;
            }
            else
                $hlaska = '<p id="itsSad">Email se nepodařilo odeslat. Zkontrolujte adresu.</p>';
                
        }
        else 
            $hlaska = '<p id="itsSad">Formulář není správně vyplněný!</p>';

        
    }

?>

<?php
    if ($hlaska)
        echo($hlaska);

    $jmeno = (isset($_POST['jmeno'])) ? $_POST['jmeno'] : '';
    $email = (isset($_POST['email'])) ? $_POST['email'] : '';
    $zprava = (isset($_POST['zprava'])) ? $_POST['zprava'] : '';
?>

<html lang="cs-CZ">
<head>
    <meta charset="utf-8">
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Formulař pro rychlýkontakt na Rajmona">
    <meta name="author" content="J. P. Rajmon">
    <title>Kontaktní formulář na J. P. Rajmona</title>
    <!-- Font Awesome icons (free version)-->
        <link rel="stylesheet" href="../../css/contaktForm.css">

</head>
<body>
    <nav class="menu center">
          <a  href="../../index.php">HLAVNÍ STRÁNKA</a>
    </nav>
        <div id="Formate">

        <p>Můžete mě kontaktovat pomocí formuláře níže.</p>
        
        <?php 
            if ($hlaska)
                echo( $hlaska);
        ?>  
        

        <form method="POST">
            <table>
            	<tr>
            		<td>Vaše jméno</td>
            		<td><input name="jmeno" type="text" value="<?= htmlspecialchars($jmeno) ?>"/></td>
            	</tr>
            	<tr>
            		<td>Váš email</td>
            		<td><input name="email" type="email" value="<?= htmlspecialchars($email) ?>"/></td>
            	</tr>
				<tr>
            		<td>Aktuální rok</td>
            		<td><input name="rok" type="number" /></td>
            	</tr>
        	</table>
        	<textarea name="zprava" value="<?= htmlspecialchars($zprava) ?>"></textarea><br />
            
            <input type="submit" value="Odeslat" />
        </form>
        </div>
    </body>
</html>