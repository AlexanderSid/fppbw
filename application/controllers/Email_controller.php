<?php 
   class Email_controller extends CI_Controller { 
 
      function __construct() { 
         parent::__construct(); 
         $this->load->library('session'); 
         $this->load->helper('form'); 
      } 
		
      public function index() { 
	
         $this->load->helper('form'); 
         $this->load->view('v_admin'); 
         $this->load->library('email');

         $config = array(
            'mailtype'=>"html",);

               } 
  
     /* public function send_mail() { 

         if(isset($_POST['submit'])) {
         $body = $_POST['isi'];
         $subject = $_POST['subject'];

         $sql = "SELECT email FROM email";
         $result = $conn->query($sql) or die(mysql_error());

         while($row = mysqli_fetch_array($result))
         {
         $addresses[] = $row['email'];
         }
         $to = implode(", ", $addresses);
         mail($to, $subject, $body);
         }
      }*/
      public function sendmsg(){
        $nama = $this->input->post('nama');
        $imail = $this->input->post('email');
        $pesan = $this->input->post('pesan');
        $able= true;

        if (empty($nama)) {
        $this->session->set_flashdata('b', '0');
        $able= false;
        }

        if (empty($imail)) {
        $this->session->set_flashdata('c', '0');
        $able= false;
        }
        else{
          if (!filter_var($imail, FILTER_VALIDATE_EMAIL)) {
          $this->session->set_flashdata('c', '2');
          $able= false;
        }
        }

        if (empty($pesan)) {
        $this->session->set_flashdata('d', '0');
        $able= false;
        }

        


        $config = array(
         'protocol' => 'smtp',
         'smtp_host' => 'ssl://smtp.googlemail.com',
         'smtp_port' => 465,
         'smtp_user' => 'furrieslord01@gmail.com', // change it to yours
         'smtp_pass' => 'furrieslord', // change it to yours
         'mailtype' => 'html',
         'charset' => 'iso-8859-1',
         'wordwrap' => TRUE
        );

       if ($able==true) {
          
       $this->load->library('email', $config);
       $this->email->set_newline("\r\n");
       $this->email->from($config['smtp_user']); // change it to yours
       $this->email->to('furrieslord01@gmail.com');// change it to yours
       $this->email->subject("Equitas - Pesan dari ".$email." - ".$nama);
       $this->email->message($pesan);
       if($this->email->send()){
         $this->session->set_flashdata('kod', '1');
       }
       else{
         $this->session->set_flashdata('kod', '0');
       }}
       else{
          $this->session->set_flashdata('kod', '0');
       }
       redirect('main/contact');

      }

      public function sendemail(){
      $subject = $this->input->post('subject');
      $message = $this->input->post('isi');
      $able=true;

      if (empty($subject)) {
        $this->session->set_flashdata('w', '0');
        $able= false;
        }

      if (empty($message)) {
        $this->session->set_flashdata('e', '0');
        $able= false;
        }


       if ($able==true) {
          
      $conn = mysqli_connect("localhost","root","","subscriber");
      $sql = "SELECT email FROM email";
      $result = $conn->query($sql) or die(mysql_error());
      while($row = mysqli_fetch_array($result))
         {
         $addresses[] = $row['email'];
         }
         $to = implode(", ", $addresses);
 
         $config = array(
         'protocol' => 'smtp',
         'smtp_host' => 'ssl://smtp.googlemail.com',
         'smtp_port' => 465,
         'smtp_user' => 'furrieslord01@gmail.com', // change it to yours
         'smtp_pass' => 'furrieslord', // change it to yours
         'mailtype' => 'html',
         'charset' => 'iso-8859-1',
         'wordwrap' => TRUE
      );
 
       $this->load->library('email', $config);
       $this->email->set_newline("\r\n");
       $this->email->from($config['smtp_user']); // change it to yours
       $this->email->to($addresses);// change it to yours
       $this->email->subject($subject);
       $this->email->message($message);
       if($this->email->send()){
         $this->session->set_flashdata('q', '1');
       }
       else{
         $this->session->set_flashdata('q', '0');
 
       }
       }
       else{

        $this->session->set_flashdata('q', '0');
        
       } 


       redirect('Email_controller');
 
   } 
   } 
?>
