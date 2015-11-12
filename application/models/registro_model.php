<?php if ( ! defined('BASEPATH')) exit('No tiene acceso a este modulo');
$id_car=0;
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

           return true;
        }
        else
        {
          
           return false;
        }
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
    /*INSERTA RESOLUCION*/
    public function inserta_documento($resolucion, $memorandum, $informe_tecnico, $minuta, $testimonio, $certificado_np)
    {
        $tipo=$_POST['tip_doc'];
        if($tipo == 'Resolucion')
        {
            if($this->db->insert('resolucion',$resolucion))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            if($tipo == 'Memorandum')
            {
                if($this->db->insert('memorandum',$memorandum))
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
            else
            {
                 if($tipo == 'Informe Tecnico')
                 {
                    if($this->db->insert('informe_tecnico',$informe_tecnico))
                    {
                        return true;
                    }
                    else
                    {
                        return false;
                    }
                 }
                 else
                 {
                   if($tipo == 'Minuta')
                   {
                        if($this->db->insert('minuta',$minuta))
                        {
                            return true;
                        }
                        else
                        {
                            return false;
                        }
                   }
                    else
                   {
                        if($tipo == 'Testimonio')
                        {
                            if($this->db->insert('testimonio',$testimonio))
                            {
                                return true;
                            }
                            else
                            {
                                return false;
                            }
                        }
                        else
                        {
                            if($tipo == 'Certificado de no propiedad')
                            {
                                if($this->db->insert('certificado_np',$certificado_np))
                                {
                                    return true;
                                }
                                else
                                {
                                    return false;
                                }
                            }
                            else
                            {
                                return false;
                            }
                        }

                   }
                 }

            }
        }
    }
/*INSERTA UBICACION*/
    public function inserta_ubicacion($ubicacion)
    {
        if($this->db->insert('ubicacion_topografica',$ubicacion))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /*INSERTA AREA*/
    public function inserta_productor($area)
    {
        if($this->db->insert('area',$area))
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