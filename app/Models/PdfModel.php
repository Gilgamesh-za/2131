<?php
public function print($id){
    $query = "SELECT * FROM tb_perjalanan WHERE id_perjalanan='$id'";
    return $this->db->$query($query)->getResulstArray();
}
