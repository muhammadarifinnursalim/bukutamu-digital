<?php
	class Model_bukutamu extends CI_Model {

		public function add_bukutamu($data)
		{
			$this->db->insert('list', $data);
		}

		public function get_bukutamu($start_row)
		{
			$query = $this->db->get('list', LIST_PER_PAGE, $start_row);
			return $query->result();
		}

		public function count_bukutamu()
		{
			return $this->db->count_all_results('list');
		}
	}