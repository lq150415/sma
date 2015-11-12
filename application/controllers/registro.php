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
    public function ubicacion()
    {
    	$ubicacion=array(
    	'AMB_UBI' => $this->input->post('amb_ubi'),
    	'EST_UBI' => $this->input->post('est_ubi'),
    	'CUE_UBI' => $this->input->post('cue_ubi'),
    	'BAL_UBI' => $this->input->post('bal_ubi'),
    	);
    	return $ubicacion;
    }
	public function certificado_np()
	{
		$certificado_np=array(
			'DES_CER' => $this->input->post('des_doc'),
			'FEC_CER' => $this->input->post('fec_doc'),
		);
		return $certificado_np;
	}

		public function memorandum()
	{
		$memorandum=array(
			'DES_MEM' => $this->input->post('des_doc'),
			'FEC_MEM' => $this->input->post('fec_doc'),
		);
		return $memorandum;
	}

		public function resolucion()
	{
		$resolucion=array(
			'FEC_RES' => $this->input->post('fec_doc'),
			'DES_RES' => $this->input->post('des_doc'),
		);
		return $resolucion;
	}

	public function minuta()
	{
		$minuta=array(
			'FEC_MIN' => $this->input->post('fec_doc'),
			'TIP_MIN' => $this->input->post('des_doc'),			
		);
		return $minuta;
	}

		public function testimonio()
	{
		$testimonio=array(
			'DES_TES' => $this->input->post('des_doc'),
			'FEC_TES' => $this->input->post('fec_doc'),
		);
		return $testimonio;
	}
		public function informe_tecnico()
	{
		$informe_tecnico=array(
			'DES_INF' => $this->input->post('des_doc'),
			'FEC_INF' => $this->input->post('fec_doc'),
		);
		return $informe_tecnico;
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
         $archivo = $this->archivo();
      
         $datos_tecnicos = array();
         $datos_tecnicos = $this->datos_tecnicos();

         $carpeta = array();
         $carpeta = $this->carpeta();

         $fechas_extremas=array();
         $fechas_extremas = $this->fechas_extremas();

         $resolucion = array();
         $resolucion = $this->resolucion();

         $memorandum = array();
         $memorandum = $this->memorandum();

         $informe_tecnico = array();
         $informe_tecnico = $this->informe_tecnico();

         $minuta = array();
         $minuta = $this->minuta();

         $testimonio=array();
         $testimonio=$this->testimonio();

         $certificado_np = array();
         $certificado_np = $this->certificado_np();

         $ubicacion = array();
         $ubicacion=$this->ubicacion();

         $area = array();
         $area = $this->area();

         /*Insert*/
         if($this->registro_model->inserta_ubicacion($ubicacion))
         {
          if($this->registro_model->inserta_archivo($archivo))
          {

		  	if($this->registro_model->inserta_datotecnico($datos_tecnicos))
		  	{
		  	   if($this->registro_model->inserta_carpeta($carpeta))
		  	   {
		  	      if($this->registro_model->inserta_fechasextremas($fechas_extremas))
		  	      {
		  	      	 if($this->registro_model->inserta_productor($area))
		  	      	 {
		  	      	 	if($this->registro_model->inserta_documento($resolucion, $memorandum, $informe_tecnico, $minuta, $testimonio,$certificado_np))
		  	      	 	{
		  	      	 		
		  	      	 		return true;
		  	      	 		
		  	      	 	}
					 }					 		  	   	  
		  	   	  }
		  	   }
		  	}
          }
      }
          else
          {return false;}
    }


    /*AREA USUARIO*/
    public function reg_usuario()
    {
    	$reg_usuario=array(

    		'CI_USU' => $this->input->post('ci_usu'),
    		'NOM_USU' => $this->input->post('nom_usu'),
    		'APA_USU' => $this->input->post('apa_usu'),
    		'AMA_USU' => $this->input->post('ama_usu'),
    		'PAS_USU' => $this->input->post('pas_usu'),
    		'REG_USU' =>(date('Y').'-'.date('m').'-'.date('d')),
    		);
    	return $reg_usuario;

    }

    public function insertar_usuario()
    {
    	$reg_usuario=array();
    	$reg_usuario=$this->reg_usuario();
    	if($this->registro_model->inserta_usuario($reg_usuario))
    	{
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    }
	
}
