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


      public function sendemail(){
      $subject = $this->input->post('subject');
      $message = $this->input->post('isi');

      $conn = mysqli_connect("localhost","root","","subscriber");


      $sql = "SELECT email FROM email";
      $result = $conn->query($sql) or die(mysql_error());
      while($row = mysqli_fetch_array($result))
         {
         $addresses[] = $row['email'];
         }
         $to = implode(", ", $addresses);
 
         $config = Array(
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
         $this->session->set_flashdata('message', 'Email sent');
       }
       else{
         $this->session->set_flashdata('message', show_error($this->email->print_debugger()));
 
       }
 
       redirect('/');
 
   } 
   } 
?>