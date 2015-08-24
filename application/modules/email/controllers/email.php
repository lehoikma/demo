<?php
class Email extends CI_Controller{
    function __construct(){
        parent::__construct();
    }

function index()
{

    $config=array(
        'protocol'	=>	'smtp',
        "smtp_host"	=>	"smtp.gmail.com",
        "smtp_port"	=>	465,
        "smtp_user"	=>	"hatrachnhoem@gmail.com", // tài khoản gmail
        "smtp_pass"	=>	"handoivodoi123", // password của gmail
        //'smtp_timeout' => 30,
        'newline' => "\r\n",
        'smtp_crypto' => 'ssl',
        //'mailtype'=>'html'

);
    $this->load->library('email', $config);


    $this->email->from('hatrachnhoem@gmail.com', 'Jeffrey Way');
    $this->email->to('hatrachnhoem@gmail.com');
    $this->email->subject('This is an email test');
    $this->email->message('It is working. Great!');
    $path = $this->config->item('server_root');//Test đường dẫn thì echo nó ra,rùi   dùng die(); nếu hiện ra đường dẫn thì ok xóa bỏ nó

    $this->email->attach('C:\xampp\htdocs\quanlynhansu_ci\attachments\hihi.pdf');
    if ($this->email->send())
    {

        echo 'Your email was sent!!';

    } else {

        echo $this->email->print_debugger();

    }


}}
?>
