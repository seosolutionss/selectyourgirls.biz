<?php



defined('BASEPATH') or exit('No direct script access allowed');







class ContactCtrl extends CI_Controller



{



	public function __construct()



	{



		parent::__construct();



		$this->load->model('Metadetails_model');

        $this->load->library("email");
        $this->load->model('Prof_model');

		$this->load->model('Category_model');

		$this->load->model('Location_model');



	}











	public function index()



	{





		



			//echo 'hello';die;



			$pg_url = $this->uri->segment(1);

        $tit_id = $this->uri->segment(3);



         $data['row'] = $this->Metadetails_model->get_meta_list(basename($pg_url,$tit_id));


         $data['get_cat']=$this->Category_model->cat_list();
         $data['all_prof'] = $this->Prof_model->get_all_profiles();
         $data['get_loc']=$this->Location_model->get_loc_list();
		

            // print_r($data['row']); die;

		



		$this->load->view("includes/header",$data);



		$this->load->view("contact",$data);



		$this->load->view("includes/footer");



	}

   public function send_mail() {
       
     if(!empty($_POST['submit'])) { 
          $to = "datemetonightgirls@gmail.com";
          $subject = 'Mail from isabasu.com';
          $from = 'bangalore@escortsinchennai.com';
          $message = "<table style='width:50%;border:1px solid black;'>
                  <tr><th style='border:1px solid black;'>Name:</th>
                  <td style='border:1px solid black;'>".$this->input->post('name')."</td>
                  </tr>
                  <tr><th style='border:1px solid black;'>Email:</th>
                  <td style='border:1px solid black;'>".$this->input->post('email')."</td>
                  </tr>
                  <tr><th style='border:1px solid black;'>Message:</th>
                  <td style='border:1px solid black;'>".$this->input->post('message')."</td>
                  </tr>
                  <tr><th style='border:1px solid black;'>phone:</th>
                  <td style='border:1px solid black;'>".$this->input->post('phone')."</td>
                  </tr>
                  <tr><th style='border:1px solid black;'>subject:</th>
                  <td style='border:1px solid black;'>".$this->input->post('subject')."</td>
                  </tr>
                 </table>";
        // print_r($message); die;
           $config['protocol'] = 'SMTP';
           $config['smtp_host'] = 'ssl://smtp.gmail.com';
           $config['smtp_port'] = '465';
           $config['smtp_timeout'] = '60';
           $config['smtp_user'] = 'mumbainames@gmail.com';
           $config['smtp_pass'] = 'mOPO00L00))';
           $config['charset'] = 'utf-8';
           $config['newline'] = "\r\n";
           $config['mailtype'] = 'html';
           $config['validation'] = TRUE;
           $this->email->initialize($config);
           $this->email->set_mailtype("html");
           $this->email->from($from);
           $this->email->to($to);
           $this->email->subject($subject);
           $this->email->message($message);
           if($this->email->send()){
               // echo "mail send";  die;
               redirect(base_url().'bangalore-girls-phone-numbers');
           }else{
              show_error($this->email->print_debugger());
           }
}
else{
    redirect(base_url().'bangalore-girls-phone-numbers');
}
}

}



	



















