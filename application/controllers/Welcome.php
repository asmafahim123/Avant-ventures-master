<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    var $data;

	public function index()
	{
        $this->data['selected_page'] = 'index';
		$this->load->view('index', $this->data);
	}

    public function about()
    {
        $this->data['selected_page'] = 'about';
        $this->load->view('about', $this->data);
    }

    public function services()
    {
        $this->data['selected_page'] = 'services';
        $this->load->view('services', $this->data);
    }

    public function contact()
    {
        if($_POST)
        {
            $name = $this->input->get_post('name');
            $email = $this->input->get_post('email');
            $phone = $this->input->get_post('phone');
            $message = nl2br($this->input->get_post('message'));

            $email_subject = "$name contacted from ".SYSTEM_NAME;
            $email_body = "<p>You have received a new message from your website contact form.</p>"."Here are the details:<br><br>Name: $name<br><br>Email: $email<br><br>Phone: $phone<br><br>Message:<br>$message";

            $this->load->library('email');

            # Send email to user
            $this->email->clear(TRUE);
            $this->email->set_mailtype("html");
            $this->email->from(SYSTEM_EMAIL, SYSTEM_NAME);
            $this->email->to('fa.farhatali@gmail.com','Farhat Ali');
            $this->email->to('fa.farhatali@avant-ventures.com','Farhat Ali');
            $this->email->to('info@avant-ventures.com','Farhat Ali');
            $this->email->bcc('volcanock@gmail.com','Fahim Ahmed');
            $this->email->subject($email_subject);
            $this->email->message($email_body);
            $this->email->send();

            $_SESSION['msg_success'][] = 'Your message has been sent, You will get response shortly...';
        }

        $this->data['selected_page'] = 'contact';
        $this->load->view('contact', $this->data);
    }

    public function portfolio()
    {
        $this->data['selected_page'] = 'portfolio';
        $this->load->view('portfolio', $this->data);
    }

    public function testemail()
    {
        $email = 'fahim@grappetite.com';
        $this->load->library('email');

        # Send email to user
        $this->email->clear(TRUE);
        $this->email->set_mailtype("html");
        $this->email->from(SYSTEM_EMAIL, SYSTEM_NAME);
        $this->email->to($email);
        $this->email->subject('Test email ');
        $this->email->message(base_url().'<br>'.__FILE__);
        my_var_dump($this->email->send());
        //my_var_dump(mail($email,'test','hello world'));
    }
}
