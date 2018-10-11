<?php

class Model_Conférences extends CI_Model
{
    public function getAllConferences()
    {
        $sql = $this->db->query("select TITRE, NBVOTES from conference ");
        return $sql->result();
    }
}
?>