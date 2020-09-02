<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index(){
        $data['main'] = 'home_view';
        $this->load->view('layouts/main_view', $data);
    }

    function send(){

          
          $nombre = $_POST["name"];
          $a = $_POST["to"];
          $asunto = $_POST["subject"];
          $mensaje = $_POST["message"];

    	$data = $this->input->post();
        $this->load->config('email');
        $this->load->library('email');


        $from = $this->config->item('smtp_user');
        $name = $this->input->post('name');
        $to = $this->input->post('to');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to("contacto@jesasoftwaresolutions.com");
        $this->email->subject($asunto);
        $this->email->message("Mi nombre es:"."\r\n".$nombre."."."\r\n".$mensaje."."."\r\n"."\r\n"."\r\n"."\r\n"."Espero su respuesta en el siguiente correo:"."\r\n".$a);
       

        if ($this->email->send()) {
            $this->email->to("contactojesa@gmail.com"); 
        } else {
            
            echo 'no fue posible enviar el mensaje';
        }
    }
}

?>