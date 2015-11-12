<?php if ( ! defined('BASEPATH')) exit('No tiene acceso a este modulo');

Class Registro_model extends CI_Model
{
      function __construct()
    {
        parent::__construct();
    }
/*INSERTA PERSONAL*/
 public function inserta_archivo ($archivo)
    {
        /*archivo*/
        if($this->db->insert('archivo',$archivo))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    /*INSERTA DATOS TECNICOS*/
    public function inserta_datotecnico($datos_tecnicos)//dato->id_insertado
    {
          if($this->db->insert('datos_tecnicos',$datos_tecnicos))
        {            
            return true;
        }
        else
        {
            return false;
        }
    }
    /*INSERTA CARPETA*/
    public function inserta_carpeta($carpeta)
    {        
        if($this->db->insert('carpeta',$carpeta))
        {
            $id_car = $this->db->insert_id();
            echo $id_car;
            return $id_car;
            return true;
        }
        else
        {
          
            return false;
        }
    }
      public function retornar_id()
    {
        global $id_car;
        $x=$id_car;
        
        echo $x;

               
    }
    /*INSERTA FECHAS EXTREMAS*/
    public function inserta_fechasextremas($fechas_extremas)
    {
        if($this->db->insert('fechas_extremas',$fechas_extremas))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

  

}
?>