<?php

class Model_Vote extends CI_Model
{
    public function VoteConference($tabCode,$tabNbVotes)
    {
        $tabCode = explode(',',$tabCode);
        $tabNbVotes = explode(',',$tabNbVotes);

        for($i = 0 ; $i < count($tabNbVotes); $i++)
        {
            $sql = $this->db->query("update conference set NBVOTES =".$tabNbVotes[$i].");
        }
    }
}
?>