<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Busquedaarchivo extends CI_Controller 
{
	public function __construct()
	{
        parent::__construct();
    }
	public function index()
	{
		$this->load->view('archivo_personal/busqueda_archivo_nombre');
	}
	 /*CONSULTAS*/

    public function busca_nombre()
		{
			/*$query = $this->input->post('nombre');
		    if($query)
		    {
		    	$result = $this->personal_model->busca_nombre($query);
		        if ($result != FALSE)
		        	{
		        		$data = array('result' => $result);
		        	}
		        	else
		        	{
		        		$data = array('result' =>'' );
		        	}
		    }*/
		 //	$this->load->view('archivo_personal/archivo_grilla');
		    echo "da";
	    }
	
}