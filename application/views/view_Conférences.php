<?php
foreach($lesConferences as $uneConf)
{
    echo "<input checked type='checkbox' name='conference' value='".$uneConf->TITRE."'>".$uneConf->NBVOTES."<br>";
}

echo "<input type='button' value = 'Voter pour les conférences sélectionnées' onclick='VotesConference()'>";
?>
