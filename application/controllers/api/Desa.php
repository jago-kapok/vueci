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
		$id 	= $this->get('id');
		$limit 	= $this->get('limit');
		$offset	= $this->get('offset');
		$order	= $this->get('order');
		$sort	= $this->get('sort');
		
		if(!empty($id)) {
			$this->db->order_by($order, $sort);
			$data = $this->db->get_where("ref_desa", ['id' => $id], $limit, $offset)->row_array();
		} else {
			$this->db->limit($limit, $offset);
			$data = $this->db->get("ref_desa")->result();
		}

		$totalRows = count($data);
		$data = array(
			"rows"	=> $data,
			"count"	=> $totalRows
		);

		header('Content-Type: application/json; charset=utf-8');
		$this->response($data, 200);
	}
}
