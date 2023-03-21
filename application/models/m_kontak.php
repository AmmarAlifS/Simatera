<?php

class m_kontak extends CI_Model
{
	private $_table = "kontak";

	public function insert($kontak)
	{
		if(!$kontak){
			return;
		}

		return $this->db->insert($this->_table, $kontak);
	}

	public function get()
	{
		$query = $this->db->get($this->_table);
		return $query->result();
	}

	public function delete($id_kontak)
	{
		if(!$id_kontak){
			return;
		}

		$this->db->delete($this->_table, ['id_kontak' => $id_kontak]);
	}
}