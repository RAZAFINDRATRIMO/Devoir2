<?php

echo "Choix des technologies";

foreach($lesTechnos as $uneTechno)
{
    echo "<input checked type='checkbox' name='techno' value='".$uneTechno->IDTECHNO."'>".$uneTechno->NOMTECHNO."<br>";
}

echo "<input type='button' value = 'Insérer une conférence' onclick='InsertionConference()'>";
?>