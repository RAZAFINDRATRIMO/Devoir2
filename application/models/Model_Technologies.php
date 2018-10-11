<?php

class Model_technologies extends CI_Model
{
    public function getAllTechnologies()
    {
        $sql = $this->db->query("select IDTECHNO, NOMTECHNO from technologie");
        return $sql->result();
    }
}
?>