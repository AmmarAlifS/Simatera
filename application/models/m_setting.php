<?php

class m_setting extends CI_Model
{
	private $_table = "setting";

	public function input($setting)
	{
		return $this->db->insert($this->_table, $article);
	}

	public function tampil()
	{
		$query = $this->db->get($this->_table);
		return $query->result();
	}

	public function update($setting)
	{
		if (!isset($setting['id_setting'])) {
			return;
		}

		return $this->db->update($this->_table, $setting, ['id_setting' => $setting['id_setting']]);
	}
}