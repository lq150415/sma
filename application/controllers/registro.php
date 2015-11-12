<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registro extends CI_Controller 
{
	public function __construct()
	{
        parent::__construct();
         $this->load->model('registro_model'); 
    	 $this->load->helper('form');
    	 $this->load->helper('date');
      	 $this->load->helper('url');
    	 $this->load->database('default');
    }
	public function index()
	{
		$this->load->view('archivo_personal/registro_archivo');
	}
	public function usuario()
	{
		$this->load->view('archivo_personal/registro_usuario');	
	}
	public function archivo()
	{
		$archivo = array(
			'NCJ_ARC' => $this->input->post('ncj_arc'),
			'NTM_ARC' => $this->input->post('ntm_arc'),
			'FOJ_ARC' => $this->input->post('foj_arc'),
			'CUB_ARC' => $this->input->post('cub_arc'),
		 );
		return $archivo;
	}

	public function datos_tecnicos()
	{
		$datos_tecnicos = array(
			'NPR_DTE' => strtoupper($this->input->post('npr_dte')),
			'LUG_DTE' => $this->input->post('lug_dte'),
			'SEC_DTE' => strtoupper($this->input->post('sec_dte')),
			'PLN_DTE' => strtoupper($this->input->post('pln_dte')),
			'MAN_DTE' => strtoupper($this->input->post('man_dte')),
			'LOT_DTE' => strtoupper($this->input->post('lot_dte')),
		);
		return $datos_tecnicos;
	}

	public function carpeta()
	{
		$carpeta=array(
			'NOM_CAR' => strtoupper($this->input->post('nom_car')),
		);
		return $carpeta;
	}
	
	public function folder()
	{
		$folder=array(
			'CANT_FOL' => $this->input->post('cant_fol'),
		);
		return $folder;
	}

	public function fechas_extremas()
	{
		$fechas_extremas=array(

			'FEC_INI' => $this->input->post('fec_ini'),
			'FEC_FIN' => $this->input->post('fec_fin'),

		);
		return $fechas_extremas;
	}

	public function documento()
	{
		$documento=array(
			'TIP_DOC' => $this->input->post('tip_doc'),
			'FEC_DOC' => (date('Y').'-'.date('m').'-'.date('d')),
			'DES_DOC' => $this->input->post('des_doc'),
		);
		return $documento;
	}
	
	public function area()
	{	
		$area=array(
			'PRO_AREA' => strtoupper($this->input->post('pro_area')),
			'OBS_AREA' => $this->input->post('obs_area')
		 );
		return $area;		
	}
/*FUNCION INSERTA*/
	   public function insertar()
    {  
    	/*Declaracion de arrays*/
         $archivo = array();
         $id_car = $this->registro_model->retornar_id();
         $archivo = $this->archivo();
         $archivo = array('id_car' => $id_car);


         $datos_tecnicos = array();
         $datos_tecnicos = $this->datos_tecnicos();

         $carpeta=array();
         $carpeta = $this->carpeta();

         $fechas_extremas=array();
         $fechas_extremas = $this->fechas_extremas();

         /*Insert*/
          if($this->registro_model->inserta_archivo($archivo))
          {

		  	if($this->registro_model->inserta_datotecnico($datos_tecnicos))
		  	{
		  	   if($this->registro_model->inserta_carpeta($carpeta))
		  	   {
		  	      if($this->registro_model->inserta_fechasextremas($fechas_extremas))
		  	      {
		  	   	  return true;
		  	   	  }
		  	   }
		  	}
          }
          else
          {return false;}
    }
	
}
