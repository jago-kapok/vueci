<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class API extends CI_Controller {

	public function getDesa()
	{
		$desa = $this->get("desa");

		if($desa == "") {
			$data = $this->db->get("ref_desa")->result();
		} else {
			$this->db->like("desa", $desa);
			$data = $this->db->get("ref_desa")->result();
		}

		$this->response($data, 200);
	}
}
