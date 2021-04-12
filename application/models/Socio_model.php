<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Socio_model extends CI_Model {                
    
    public function index(){ 
     
     
     }
 
    /*      INICIO SOCIO 	   */
    
     public function get_socio_by_id($identificador)
     {         
      $this->db->where("correo", $identificador);         
      return $this->db->get("persona")->row();        
     }
    
    
    
    
     public function relacion_socio($identificador)
     {
      $this->db->select("*");     
      $this->db->from("persona as p");
      $this->db->join('direcciones as d', 'd.id_persona = p.id_persona', 'inner');     
      $this->db->join('colonia as c', 'c.id_municipio = d.id_municipio', 'inner');          
      //$this->db->join('referencias as r', 'r.id_persona = p.id_persona', 'inner'); 
      $this->db->where("correo", $identificador);
      return $this->db->get()->row();      
     } 
    
    
    public function referencias_socio($identificador)
     {
      $this->db->select("*");     
      $this->db->from("persona as p");                
      $this->db->join('referencias as r', 'r.id_persona = p.id_persona', 'inner'); 
      $this->db->where("correo", $identificador);
      return $this->db->get()->row();      
     }
    
    
    
    /*      FIN SOCIO    */
    
   
 
     /*     INICIO HELPERS SOCIO    */
    
     public function get_municipios()
     {
      return $this->db->get("municipio")->result();    
     }
    
    
     /*    FIN HELPERS SOCIO    */
    
    
 
    /*     VISTA  SERVICIO SOCIO   */
	
    public function get_servicios($inicio="")
    {
     $id=$this->session->id;                 
     
     $fecha_inicio=date("Y-m-d", strtotime("last Sunday"));                       
     $dato=array();                  
       
     if($inicio!=""){
       $fecha_inicio=$inicio;        
     } 
                                             
     for($i=0; $i<7; $i++){           
      
      if($inicio=="" || $i>0){
      $fecha_inicio=date("Y-m-d", strtotime("+1 day", strtotime(($fecha_inicio))));    
       }
      
      $dato+=array($i => $this->db->query("SELECT fecha, sum(total_pago) total_pago FROM servicio  where fecha='$fecha_inicio' AND id_afiliado='$id'")->result_array());            
      
     }
     
     return $dato;                              
    
    }
    
    public function total($inicio="")
    {
          
     $id=$this->session->id;                 
     $this->db->where("id_afiliado", $id); 
     $fecha_inicio=date("Y-m-d", strtotime("last Sunday"));                                           
     if($inicio!=""){
       $fecha_inicio=$inicio;        
     }else{
     $fecha_inicio=date("Y-m-d", strtotime("+1 day", strtotime(($fecha_inicio))));         
     }   
                      
     $fecha_fin=date("Y-m-d", strtotime("+7 day", strtotime(($fecha_inicio))));       
     
     $this->db->select_sum('total_pago');
     $this->db->where("fecha >= '$fecha_inicio' AND fecha <= '$fecha_fin' ");
     $res = $this->db->get('servicio')->row();
     
     return $res->total_pago;
     
    }
    
    /* FIN VISTA  SERVICIO SOCIO */
    
    /*   VISTA PUNTAJE ===========================================   */
    
    //Mostrar todos los puntajes para el afiliado
    public function get_puntaje($fecha_inicio="", $fecha_fin="")
    {
     
        $id_user=$this->session->id;        
        $this->db->select('*');
        $this->db->from('puntuacion as p');
        $this->db->join('persona as pe', 'pe.id_persona = p.id_afiliado', 'inner');
        
        if($fecha_inicio=="" && $fecha_fin==""){
        $this->db->limit(5);
        $this->db->where("p.id_afiliado", $id_user);     
        }else{        
         
        $this->db->where("p.fecha>= '$fecha_inicio' AND p.fecha<= '$fecha_fin'");     
        } 
        return $this->db->get();        
        
    }
   
    public function total_servicios()
    {
     $id_user=$this->session->id;  
     $this->db->where("id_afiliado", $id_user); 
     return $this->db->get("puntuacion")->num_rows();    
    }
    
    //Sacar el promedio de estrellas 
    public function promedio_puntaje()
    {
        $id_user=$this->session->id;        
        $this->db->select_avg('puntuacion');
        $this->db->where("id_afiliado", $id_user);
        $query=$this->db->get('puntuacion')->row();  
        return $query=round($query->puntuacion, 1, PHP_ROUND_HALF_UP);                
        
    }
    
    //Sacar el ultimo registro
    public function fecha_ultimo_puntaje()
    {
       $id_user=$this->session->id;          
                                              
       $this->db->select("fecha");     
       $this->db->from("servicio");    
       $this->db->order_by('id_servicio', 'DESC');
       $this->db->where("id_afiliado", $id_user);        
       return $this->db->get()->row();                       
        
    }
    
     /*   FIN VISTA PUNTAJE ===========================================    */
    
   
     /*  INICIO VISTA SEGURIDAD ===========================================   */
        //contactos de emergencia
    public function get_ce($id)
    {
        
    $this->db->where("id_persona", $id); 
    return $this->db->get("contacto_emergencia")->result();    
        
    }
    /*  FIN VISTA SEGURIDAD ===========================================    */
 
 
     /*  INICIO VISTA CUPONES ===========================================  */
        //contactos de emergencia
    public function get_cupones($id)
    {
        
      $this->db->select("*");     
      $this->db->from("cupones as c");                
      $this->db->join('promociones as p', 'c.cupon = p.cupon', 'inner'); 
      $this->db->where("id_persona ='$id' AND dirigido='2' AND c.status='0'");
      return $this->db->get()->result();   
       
    }
    /*    FIN VISTA CUPONES ===========================================   */ 
	
	//mostrar imagen
//    public function get_image(){
//		$id=6;
//       $this->db->where('id_persona', $id);
//       $result = $this->db->get('persona')->result();
//       //header("Content-type: image/jpeg");
//       echo $result['foto'];
//	}
    
    
}

?>