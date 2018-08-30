<?php
echo urldecode(urlencode('http://php.net/conferences/index.php#id2018-+08-14-1.jpg'));


die;


/*
TODO: Dynamic end points

*/
// namespace API\restapi;
include('plugendpoints.php');
include('EndPoints/requests.php');

require_once 'CI_connector.php';

// require 'requests.php'; 


use \API\EndPoints as rq; 

/**
 *
 */
class RestServer 
{

    public function __construct()
    {
        $this->CI = get_instance();
    }

    public function start()
    {
        $plugendpoints = new plugendpoints();
        $endpint = 'users';
        $plugendpoints->call($endpint);
        // call_user_func( array( "rq/" .$endpint, 'execute' ) );
        // die;
        // $plugendpoints->call();
        $rq = new rq\users();
        $rq->execute($this->CI);
    	/*var_dump($rq);
    	var_dump(get_class_methods($rq));*/
    	
    	
    }


}

$RestServer = new RestServer();
$RestServer->start();

die;



// var_dump($CI);

// $CI->load->model('User');

// var_dump($CI->User->getUsers());
/*var_dump($CI->input->get());
$CI->form_validation->set_rules('username', 'Username', 'required|decimal');

if ($CI->form_validation->run() == false) {
    var_dump($CI->form_validation->error_array());
} else {
    echo "Success!";
}
die('asdasedq2e');*/
