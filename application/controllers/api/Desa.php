<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Desa extends RestController {

	public function __construct()
    {
        parent::__construct();
    }

	public function index_get()
	{
		$id = $this->get('id');
		
		if(!empty($id)) {
			$data = $this->db->get_where("ref_desa", ['id' => $id])->row_array();
		} else {
			$data = $this->db->get("ref_desa")->result();
		}

		header('Content-Type: application/json; charset=utf-8');
		$this->response($data, 200);
	}
}
