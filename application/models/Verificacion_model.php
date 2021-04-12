<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Verificacion_model extends CI_Model {                
    
    public function index(){ 
     
     
     }  

   
    public function get_afiliados_nuevos() //afiliados que apenas se regristraron
    {
	 $this->db->where("tipo_de_persona", 2);         
	 $this->db->where("status", 1);
	 $this->db->order_by('fecha_registro', 'ASC');
	 
     return $this->db->get("persona")->result();    
    }
	
    public function get_afiliados_proceso() //afiliados que apenas se regristraron
    {
	 $this->db->where("tipo_de_persona", 2);         
	 $this->db->where("status", 2);
	 $this->db->order_by('fecha_registro', 'ASC');
	 
     return $this->db->get("persona")->result();    
    }
	
    public function get_afiliados_activo() //afiliados que apenas se regristraron
    {
	 $this->db->where("tipo_de_persona", 2);         
	 $this->db->where("status >= ", 3 );
	 $this->db->where("status < ", 6 );
	 $this->db->order_by('fecha_registro', 'ASC');
	 
     return $this->db->get("persona")->result();    
    }
	
    public function get_afiliados_rechazado() //afiliados que apenas se regristraron
    {
	 $this->db->where("tipo_de_persona", 2);         
	 $this->db->where("status", 6);
	 $this->db->order_by('fecha_registro', 'ASC');
	 
     return $this->db->get("persona")->result();    
    }
	
    public function get_afiliados_inactivo() //afiliados que apenas se regristraron
    {
	 $this->db->where("tipo_de_persona", 2);         
	 $this->db->where("status", 7);
	 $this->db->order_by('fecha_registro', 'ASC');
	 
     return $this->db->get("persona")->result();    
    }
	
	
    public function get_detalles($id) //afiliados que apenas se regristraron
    {
	 $this->db->where("id_personaU", $id);
	 $this->db->where("tipo_de_persona", 2);         
	 //$this->db->where("status", 1);
	 $this->db->limit(1);
     return $this->db->get("persona")->result();    
    }
	
    public function get_dom($id) //afiliados que apenas se regristraron
    {
	 $this->db->where("id_persona", $id);
	 $q	 = $this->db->get("direcciones");
	 $query = $q->result();
	 $cont = $q->num_rows(); 

	 
	 if($cont>0){
	 foreach ($query as $row) {
			
		 $this->db->select("municipio");  
		 $this->db->where("id_municipio", $row -> id_municipio); 
		 $query_ub = $this->db->get("municipio");
		 $row_ub   = $query_ub->row();
		 
		 $this->db->select("colonia");  
		 $this->db->where("id_colonia", $row -> id_colonia_dir); 
		 $query_c = $this->db->get("colonia");
		 $row_c   = $query_c->row();
		 
		 //$nombre = $row_ub -> municipio;

	     $row->municipio = $row_ub -> municipio;
	     $row->colonia   = $row_c  -> colonia;
	 }
	 }
	 return $query;
	
    }
    public function get_ref($id) //afiliados que apenas se regristraron
    {
	 $this->db->where("id_persona", $id);
     $q	= $this->db->get("referencias");
	 $query = $q->result();
	 $cont = $q->num_rows();
		
	 if($cont>0){
	 foreach ($query as $row) {
			
		 $this->db->select("municipio");  
		 $this->db->where("id_municipio", $row -> id_ciudad_ref1); 
		 $query_m1 = $this->db->get("municipio");
		 $row_m1   = $query_m1->row();
		 
		 $this->db->select("colonia");  
		 $this->db->where("id_colonia", $row -> id_colonia_ref1); 
		 $query_c1 = $this->db->get("colonia");
		 $row_c1   = $query_c1->row();
			
		 $this->db->select("municipio");  
		 $this->db->where("id_municipio", $row -> id_ciudad_ref2); 
		 $query_m2 = $this->db->get("municipio");
		 $row_m2   = $query_m2->row();
		 
		 $this->db->select("colonia");  
		 $this->db->where("id_colonia", $row -> id_colonia_ref2); 
		 $query_c2 = $this->db->get("colonia");
		 $row_c2   = $query_c2->row();
		 
		 //$nombre = $row_ub -> municipio;

	     $row->municipio_ref1 = $row_m1 -> municipio;
	     $row->colonia_ref1   = $row_c1  -> colonia;
	     $row->municipio_ref2 = $row_m2 -> municipio;
	     $row->colonia_ref2   = $row_c2  -> colonia;
	 }
	 }
	 return $query;
    }
	
	



  
}
?>