<?php



defined('BASEPATH') OR exit('No direct script access allowed');



class Inicio extends CI_Controller {

    

    public function index()

	{

        $this->load->view('inicio/top');
        $this->load->view('inicio/nav');
        $this->load->view('inicio/inicio');
        $this->load->view('inicio/fin');

    }

    
    public function user()

    {
		$this->load->view('inicio/top');
        $this->load->view('inicio/nav');
        $this->load->view('registro/login');
        $this->load->view('inicio/fin');


    }
	
	public function basicos()

    {
		$this->load->view('inicio/top');
        $this->load->view('inicio/nav');
        $this->load->view('registro/basicos');
        $this->load->view('inicio/fin');


    }
	public function avanzados()

    {
		$this->load->view('inicio/top');
        $this->load->view('inicio/nav');
        $this->load->view('registro/avanzados');
        $this->load->view('inicio/fin');


    }

    

    public function socio()

    {

        

       

        

        

        $this->db->where("tipo='2' OR tipo='3' ");         

        $count=$this->db->get("preguntas")->num_rows();        

        $this->db->where("tipo='2' OR tipo='3' ");        

        $this->db->limit(4,0);            

        

        $vars=[         

          "preguntas_d" =>$this->db->get("preguntas")->result()

        ];

                         

        

        $this->db->limit($count-4,4);  

         $this->db->where("tipo='2' OR tipo='3' ");       

        $vars+=['preguntas' => $this->db->get("preguntas")->result()];   

        

        $this->load->view('inicio/top');

        $this->load->view('inicio/nav-socio');

        $this->load->view('info/socio', $vars);

        $this->load->view('inicio/fin'); 

    }

    

     public function hogar()

    {

       $this->load->view('inicio/top');

        $this->load->view('inicio/nav');

        $this->load->view('info/hogar');

        $this->load->view('inicio/fin'); 

    }

    

     public function oficina()

    {

       $this->load->view('inicio/top');

       $this->load->view('inicio/nav');

       $this->load->view('info/oficina');

	   $this->load->view('inicio/fin'); 

    }

    

	public function privacidad()

    {

       $this->load->view('inicio/top');

       $this->load->view('inicio/nav');

       $this->load->view('info/privacidad');

       $this->load->view('inicio/fin'); 

    }

	

	public function oportunidad_laboral()

    {

		$this->db->where("status='0' ");                     

        

        $vars=[         

          "ofertas" =>$this->db->get("oportunidad_laboral")->result()

        ];



        $this->load->view('inicio/top');

        $this->load->view('inicio/nav');

        $this->load->view('info/oportunidad_lab',$vars);

        $this->load->view('inicio/fin'); 

    }

	

	public function preguntas()

    {

		
		//=====================Consulta a la base de datos
        $this->db->select("*");        

        $this->db->order_by('tema');

		$this->db->where("tipo='2' OR tipo='3' ");         

        $count=$this->db->get("preguntas")->num_rows();        
        if(@$this->input->post("temas")){
          $this->db->where("tema",$this->input->post('temas'));
        }else{
        $this->db->where("tipo='2' OR tipo='3' ");        
      }
        $this->db->limit(4,0);
		//====================Termina la consulta 
         $vars=[//---------------------arreglo de datos       

          "preguntas_d" =>$this->db->get("preguntas")->result() //------

        ];                       

        $this->db->limit($count-4,4);
         //$this->db->where("tipo='2' OR tipo='3' ");
        if(@$this->input->post("temas")){
          $this->db->where("tema",$this->input->post('temas'));
        }else{
        $this->db->where("tipo='2' OR tipo='3' ");        
      }
        $vars+=['preguntas' => $this->db->get("preguntas")->result()]; 

	

		$this->db->select("distinct(tema)");

		$this->db->order_by('tema');

        $vars+=[         

          "temas_preg" =>$this->db->get("preguntas")->result()

        ];

		

       $this->load->view('inicio/top');

       $this->load->view('inicio/nav');

       $this->load->view('info/preguntas_f', $vars);

       $this->load->view('inicio/fin'); 

    }



	public function terminos()

    {

       $this->load->view('inicio/top');

       $this->load->view('inicio/nav');

       $this->load->view('info/terminos_cond');

       $this->load->view('inicio/fin'); 

    }

	

	public function cobertura()

    {

       $this->load->view('inicio/top');

       $this->load->view('inicio/nav');

       $this->load->view('info/cobertura');

       $this->load->view('inicio/fin'); 

    }



	public function conocenos()

    {

       $this->load->view('inicio/top');

       $this->load->view('inicio/nav');

       $this->load->view('info/conocenos');

       $this->load->view('inicio/fin'); 

    }

	

	public function experiencias()

    {

		

      $this->db->select("p.puntuacion,p.comentario,p.fecha,u.nombre,u.apellidos,a.nombre as nafiliado,a.apellidos as aafiliado");     

      //$this->db->from("puntuacion as p");

      $this->db->join('persona as u', 'p.id_usuario = u.id_personaU', 'inner');     

      $this->db->join('persona as a', 'p.id_afiliado = a.id_personaU', 'inner');

        $vars=[         

          "opiniones" =>$this->db->get("puntuacion as p")->result()

        ];

		//

       $this->load->view('inicio/top');

       $this->load->view('inicio/nav');

       $this->load->view('info/experiencias', $vars);

       $this->load->view('inicio/fin'); 

    }



    public function form_recuperar_c($cr="")

    {



      $vars=["cr" => $cr ];  



      $this->load->view('inicio/top');

      $this->load->view('inicio/nav');

      $this->load->view('registro/recuperar_c', $vars);

      $this->load->view('inicio/fin');

    }

    

    //RECUPERAR CONTRASENA 

    public function recuperar_c()

    {





    if($this->input->post('cr')) {   



    $cr = $this->input->post('cr');    



    $vars=["cr" => $cr ];   



    $this->load->library('form_validation'); 

    $this->load->helper('security'); 



    $this->form_validation->set_rules('pass', 'Nueva Contraseña', 'required|trim|xss_clean'); 

    $this->form_validation->set_rules('pass2', 'Confirmar Contraseña', 'required|trim|xss_clean|matches[pass]|min_length[8]'); 



    if($this->form_validation->run()==FALSE)

    {

     

     $this->session->set_flashdata('alert', [

           'type' => "danger",

           'msg'  => validation_errors()

     ]); 

                  

     $vars=[

         "alert" => $this->session->flashdata('alert'),

         "cr"    => $cr 

        ];   



     $this->load->view('inicio/top');

     $this->load->view('inicio/nav');

     $this->load->view('registro/recuperar_c', $vars);

     $this->load->view('inicio/fin');

     

    }else{

       

        $contr= $this->input->post("pass");

        $contr=md5($contr);



        $data=[

            'contraseña'  => $contr

        ];



        $this->db->where("id_persona", $cr);

        if($this->db->update("persona", $data)){



          //Si todo sale bien  



          $this->session->set_flashdata('alert', [

                'type' => "info",

                'msg'  => "Se recuperó su contraseña, inicie sesión"

          ]); 

                       

          $vars=[

              "alert" => $this->session->flashdata('alert'),

              "tipo"    => $cr,

               

             ];   

     

          $this->load->view('inicio/top');

          $this->load->view('inicio/nav');

          $this->load->view('registro/login', $vars);

          $this->load->view('inicio/fin');



        }else{

        //Si la conulta genera un error

        }

    }

    

    }else{



        $this->session->set_flashdata('alert', [

            'type' => "danger",

            'msg'  => "ocurrió un problema"

      ]); 

                   

      $vars=[

          "alert" => $this->session->flashdata('alert'),

          "cr"    => $cr 

         ];   

 

      $this->load->view('inicio/top');

      $this->load->view('inicio/nav');

      $this->load->view('registro/recuperar_c', $vars);

      $this->load->view('inicio/fin');



    }

    } 

 

    //CERRAR SESSION 

     public function logout()

    {



        

        $this->session->sess_destroy();

        redirect("inicio", 'refresh');    



    }

 

    //IMG PERFIL

//     public function foto_perfil()

//    {

//	   $id_user=$this->session->id; 

//       $this->db->select("foto");

//	   $this->db->where("id_persona", $id_user);

//

//

//        $vars=[         

//          "foto_p" =>$this->db->get("persona")->result()

//        ];

//		//

//       $this->load->view('info/foto_persona', $vars);    

//

//    }

 

   



    

}





?>