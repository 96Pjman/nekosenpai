<?php

	/*
===============================================================================
          THE MAIN CONTROLLER FUNCTION OF THE WEBSITE
===============================================================================
*/

defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
     function __construct()
	 {
		 parent::__construct();
		 $this->load->helper('url');
		 $this->load->library('form_validation');
		$this->load->model('auth');
		$this->load->library('email');
	 }
////////////// LOGIN PAGE FUNCTION ////////////////
	public function index()
	{
		if(isset($_SESSION['user_id'])){
			redirect('index.php/Home/panel');	
		}      
		$this->load->view('layout/header');
		$this->load->view('auth/login');	
	}
////////////// REGISTRATION PAGE FUNCTION ////////////////
	public function register_page()
{
	$this->load->view('layout/header');
	$this->load->view('auth/register');

}

	/*
===============================================================================
                   login function
===============================================================================
*/

public function login()
	{
		$this->form_validation->set_rules('u_mail','Email','required|valid_email');
		$this->form_validation->set_rules('u_password','Password','required');	  
		if($this->form_validation->run()==false){

		} else {	

		$user_data=array(
			'user_mail' => $this->input->post('u_mail'),
			'user_pswd' => $this->input->post('u_password')
		);

		$result=$this->auth->login_check('neko_user_data',$user_data);

    if($result){
			$this->session->set_flashdata('success','login successfully' );
   			foreach($result as $user);
						$sess_data=array(
								'user_id' => $user['id'],
								'user_email' => $user['user_mail'],
								'user_fname' => $user['user_first_name'],
								'user_lname' => $user['user_last_name'],
								'user_name' => $user['user_name'],
								'user_city' => $user['user_city'],
								'user_state' => $user['user_state'],
								'user_gender' => $user['user_gender'],			    		
								'user_country' => $user['user_country'],
								'user_points' => $user['user_points'],								
								'ques_asked'=>$user['ques_asked'],
								'ques_ansd'=>$user['ques_answered'],							
								'ques_bookmarked'=>$user['ques_bookmarked'],
								'best_ans'=>$user['best_answers'],
								'user_img'=>$user['user_profile_img'],
										);
						$this->session->set_userdata($sess_data);
							redirect('index.php/Home/panel');
						}else{
								$this->session->set_flashdata('error','user data not found' );
								 }
				}
		$this->load->view('layout/header');
		$this->load->view('auth/login');
	}


	/*
===============================================================================
                   registration function
===============================================================================
*/

public function register()
{
	$login_points=10;
	$this->form_validation->set_rules('u_fname','First Name','required');
	$this->form_validation->set_rules('u_lname','Last Name','required');
	$this->form_validation->set_rules('u_username','Username','required|min_length[6]|max_length[16]');
	$this->form_validation->set_rules('u_email','Email','required|valid_email');
	$this->form_validation->set_rules('u_gender','Gender','required');
	if($this->form_validation->run()==false){		
	}
	else{
	$upassword='qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXVBNM1234567890!@#$%^&*';
	$user_password=substr(str_shuffle($upassword),0,8);
	$username=$this->input->post('u_username');
	$user_id=strtolower('neko.'.$username);
		$check_user_mail=array('user_mail' => $this->input->post('u_email')	);
		$user_name=array('user_name' => $username);
		$check_user_mail=$this->auth->login_check('neko_user_data',$check_user_mail);				
		$user_name=$this->auth->login_check('neko_user_data',$user_name);			
			if(($user_name)&&($check_user_mail))
			{ 			
				$this->session->set_flashdata('error','Username and Email Address ALready Exist' );
			}else{
				if($user_name){
					$this->session->set_flashdata('error','Username  ALready Exist' );
				}else if($check_user_mail)
				{
					$this->session->set_flashdata('error',' Email Address ALready Exist' );
				}else{				
					$userdata=array(
						'user_register_id' => $user_id,
						'user_first_name' => $this->input->post('u_fname'),
						'user_last_name' => $this->input->post('u_lname'),
						'user_name' => $username,
						'user_gender' =>  $this->input->post('u_gender'),
						'user_city' => $this->input->post('u_city'),
						'user_state' =>  $this->input->post('u_state'),
						'user_country' =>  $this->input->post('u_country'),
						'user_profile_img'=> rand(1,10).".gif",						
						'user_mail' => $this->input->post('u_email'),
						'user_pswd' => $user_password,
						'user_points' =>$login_points
					);			
					$result=$this->auth->insert_data('neko_user_data',$userdata);
					$tomail=	$this->input->post('u_email');
					$subject="Your Account Information";
					$mail_message="Your Login ID : ".$this->input->post('u_email')."<br>Password : ". $user_password ."<br> Please Kindly Change Your Pawwsord After login . <br> Thank You ! for joining Neko.com ";
			$this->send_mail($tomail,$subject,$mail_message);
				}
			}
		}		
		$this->load->view('layout/header');
		$this->load->view('auth/register');			
	}
/*
===============================================================================
                   forgot password
===============================================================================
*/
	
	public function forgot_pswd()
	{
		$this->form_validation->set_rules('u_name','User Name','required');
		$this->form_validation->set_rules('u_mail','User Mail','required');
		$id=$this->input->post('u_mail');		
		if($this->form_validation->run()==false){				
		}
		else{
			$user_data=array(
				'user_name' => $this->input->post('u_name'),
				'user_mail' => $this->input->post('u_mail')
			);	
			$result=$this->auth->login_check('neko_user_data',$user_data);
			if($result){			
				$upassword='qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXVBNM1234567890!@#$%^&*';
				$user_password=substr(str_shuffle($upassword),0,8);			
				$data = array( 'user_pswd'	=> 	$user_password );
      $this->db->set( $data);
			$this->db->where('user_mail',$this->input->post('u_mail') );
			$this->db->update('neko_user_data');
	$tomail=$this->input->post('u_mail');
	$subject="Your Account Information";
	$mail_message="Your Login ID : ".$id."<br> Password : ".
	              $user_password."<br> Kindely Change your Password after Login ! Thank You ." ;
    $this->send_mail($tomail,$subject,$mail_message);
			$this->session->set_flashdata('success','Your New Password has been send to your E-Mail' );
				redirect('index.php/home/index');
			} else {
				$this->session->set_flashdata('error','Entered Data dose not matched' );		
				redirect('index.php/home/index');
			} 			
		}
		$this->session->set_flashdata('error','Please enter the Details to Generate New Password ' );
		redirect('index.php/home/index');	
	}
/*
===============================================================================
                   sending password mail function
===============================================================================
*/

public function send_mail($tomail,$subject,$mail_message) {

	$from_email = "prayasjadli18@gmail.com";
	$this->email->from($from_email, 'Identification-Team');
	$this->email->to($tomail);
	$this->email->subject($subject);
	$this->email->message($mail_message);
	if($this->email->send())
			$this->session->set_flashdata("success"," Email Send Successfully.");
	else
			$this->session->set_flashdata("error","You have encountered an error");	
}

/*
===============================================================================
                   query posting function
===============================================================================
*/

public function post_ques()
{
	$status="unsolved";
	$id='qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXVBNM1234567890!@#$%^&*';
		$ques_id=substr(str_shuffle($id),0,8);
		$final_id=$_SESSION['user_name'].$ques_id;
		$this->ques_point_add();	
		$this->ques_count_add();
		$d=$this->input->post('gen_desp');
		if($d==" ")	$d="empty"; 
	$gen_ques_data=array(
		'QUES_ID' => $final_id,	
		'user_mail' => $_SESSION['user_email'],
		'user_id' => $_SESSION['user_id'],
		'QUES_TITLE' => $this->input->post('ques_title'),	
		'QUES_DSRCP' => $d,	
		'CAT_ID' => $this->input->post('cat_name'),
		'USRDEF_ID' => strtolower( $this->input->post('user_tag')),
		'QUES_STATUS'=>$status,
		'LINK_1' => $this->input->post('link_1'),
		'LINK_2' => $this->input->post('link_2'),
		'LINK_3' => $this->input->post('link_3'),
		'LINK_4' => $this->input->post('link_4'),
		'IMG_FILES'=>$this->img_upload(),
		'DOC_FILES'=>$this->doc_upload()	
	);
	$this->db->insert('neko_ques_data', $gen_ques_data);
  redirect('index.php/home/panel', 'refresh');  
}

/*
===============================================================================
                   update profile functions
===============================================================================
*/

public function update_profile()
{
		$fname=$this->input->post('fname');
		$lname=$this->input->post('lname');	
		$uname=$this->input->post('uname');	
		$city=$this->input->post('city');	
		$state=$this->input->post('state');
		$country=$this->input->post('country');	
		$gender=$this->input->post('gender');
	$info=array(
		'user_first_name'=>	$fname,
		'user_last_name'=>$lname,	
		'user_city'=>$city,		
		'user_state'=>$state,		
		'user_country'=>$country,		
		'user_gender'=>$gender,		
		'user_name'=>$uname					
	);
				$this->db->set($info);
				$this->db->where("user_mail=",$_SESSION['user_email']);
				$this->db->update('neko_user_data');
				$url="index.php/home/user_profile";
				redirect($url,'refresh');
	}

	public function update_profile_password()
	{
		$old=$this->input->post('oldpswd');
		$new=$this->input->post('newpswd');
		$c_new=$this->input->post('cnewpswd');	
		$this->db->select("user_mail");
		$this->db->where("user_pswd=",$old);
		$this->db->from('neko_user_data');
		$query=$this->db->get();
		$row=$query->num_rows();	
		if($row==0)
		{
			$this->session->set_flashdata('error','Old Password is Incorect' );
			$url="index.php/home/user_profile";
			redirect($url,'refresh');
		}else{
			if($new==$c_new)
			{
				$up=array("user_pswd"=>$new);
				$this->db->set($up);
				$this->db->where("user_mail=",$_SESSION['user_email']);
				$this->db->update('neko_user_data');			
				$url="index.php/home/user_profile";
				redirect($url,'refresh');
			} else {
				$this->session->set_flashdata('error','New Pasword dose not match' );
				$url="index.php/home/user_profile";
				redirect($url,'refresh');
			}
		}
	}

	public function update_profile_image()
	{
		 $image=array('user_profile_img'=>$this->pro_img_upload());
		 $this->db->set($image);
		 $this->db->where('user_mail=',$_SESSION['user_email']);
		 $this->db->update('neko_user_data');
		 $url="index.php/home/user_profile";
		 redirect($url,'refresh');
	}

	
	
public function pro_img_upload(){
	$filen="qwertyuioplkjhgfdsazcvbnm0123456789";
	$filex=substr(str_shuffle($filen),0,8);	
		$_FILES['file']['name']       = $_FILES['image_file']['name'];
		$_FILES['file']['type']       = $_FILES['image_file']['type'];
		$_FILES['file']['tmp_name']   = $_FILES['image_file']['tmp_name'];
		$_FILES['file']['error']      = $_FILES['image_file']['error'];
		$_FILES['file']['size']       = $_FILES['image_file']['size'];
		// File upload configuration
		$uploadPath = './assets/images/proimages/';
		$config['upload_path'] = $uploadPath;
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['file_name'] = $filex;		
		// Load and initialize upload library
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		// Upload file to server
		if($this->upload->do_upload('file')){
			// Uploaded file data
			$imageData = $this->upload->data();
			$uploadData= $imageData['file_name'];
			return 	$uploadData;
}      
	
}


/*
===============================================================================
                   send mail invitation function
===============================================================================
*/

	public function  send_invite()
	{
		$this->db->where('user_mail=',$this->input->get('invite_mail'));
		$query=$this->db->get('neko_user_data');
		$row= $query->num_rows();
		if($row==0)
		{
			$tomail=$this->input->post('invite_mail');
			$subject="Invitation";
			$mail_message="You Got an invitation from : ". $_SESSION['user_fname']." ".$_SESSION['user_lname']." to join triyontech.com/neko " ;
			$this->send_mail($tomail,$subject,$mail_message);
			$this->session->set_flashdata('success','Invitation Send' );
		} else {
			$this->session->set_flashdata('success','Already A Member' );	
		}
		redirect('index.php/home/panel');
	}

/*
===============================================================================
                   image upload function
===============================================================================

*/

public function img_upload(){
	$image = array();
	$ImageCount = count($_FILES['image_file']['name']);	
	$filen="0123456789876543210";
	$filex=substr(str_shuffle($filen),0,8);
        for($i = 0; $i < $ImageCount; $i++){
            $_FILES['file']['name']       = $_FILES['image_file']['name'][$i];
            $_FILES['file']['type']       = $_FILES['image_file']['type'][$i];
            $_FILES['file']['tmp_name']   = $_FILES['image_file']['tmp_name'][$i];
            $_FILES['file']['error']      = $_FILES['image_file']['error'][$i];
            $_FILES['file']['size']       = $_FILES['image_file']['size'][$i];
            // File upload configuration
						$uploadPath = './asset/images/ques_images/';
						$config['upload_path'] = $uploadPath;
						$config['allowed_types'] = 'jpg|jpeg|png|gif';
						$config['file_name'] = $filex;            
            // Load and initialize upload library
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            // Upload file to server
						if($this->upload->do_upload('file')){
							// Uploaded file data
							$imageData = $this->upload->data();
							$uploadData[$i]= $imageData['file_name'];						
			}
				}		
				if(	empty($uploadData))
				{}else{
				 $docdata=implode(",",	$uploadData);				
									return  $docdata; }      
	}

/*
===============================================================================
                   document upload function
===============================================================================

*/
public function doc_upload() {
	$document = array();
	$DocumentCount = count($_FILES['doc_file']['name']);
	$doclen="qwertyuiopasdfghjklzcvbnmnbvcxzlkjhgfdsapoiuytrewq";
	$docx=substr(str_shuffle($doclen),0,12);
        for($i = 0; $i < $DocumentCount; $i++){
            $_FILES['file']['name']       = $_FILES['doc_file']['name'][$i];
            $_FILES['file']['type']       = $_FILES['doc_file']['type'][$i];
            $_FILES['file']['tmp_name']   = $_FILES['doc_file']['tmp_name'][$i];
            $_FILES['file']['error']      = $_FILES['doc_file']['error'][$i];
            $_FILES['file']['size']       = $_FILES['doc_file']['size'][$i];
            // File upload configuration
						$uploadPath = './asset/documents/ques_files';
						$config['upload_path'] = $uploadPath;
						$config['allowed_types'] = 'doc|docx|pdf|zip';
						$config['file_name'] = $docx;            
            // Load and initialize upload library
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            // Upload file to server
						if($this->upload->do_upload('file')){
							// Uploaded file data
							$docData = $this->upload->data();
							$docuploadData[$i]= $docData['file_name'];						
			}

				}		
				if(	empty($docuploadData))
					{}else{
					 $docdata=implode(",",	$docuploadData);
	      	return  $docdata; }
}

	/*
===============================================================================
                   home page function
===============================================================================

*/

	public function panel()
	{
	  	if(!isset($_SESSION['user_id'])){
			$this->session->set_flashdata('error','Login For Access Acount' );
			redirect(base_url());	
		}
		$mail=$_SESSION['user_email'];
		$data['admin']=$this->auth->fetch_data('neko_user_type');
		$data['ques']=$this->auth->fetch_data('neko_ques_data');
		$data['star_ques']=$this->auth->fetch_data('bookstar_ques');
		$data['noans_ques']=$this->auth->fetch_data('reply_ques');
		$data['stats']=$this->auth->fetch_data_stats('neko_user_data',$_SESSION['user_email']);
		$data['points']=$this->auth->fetch_data_highpoints('neko_user_data');
		$this->load->view('layout/panel_header',$data);
		$this->load->view('home',$data);
		$this->load->view('layout/side-bar',$data);
		$this->load->view('layout/footer');
	}


	/*
===============================================================================
                 logout function  
===============================================================================

*/
		public function logout()
	{
		$logid= $this->input->get('uid');
		if($logid){
			session_destroy();
			$this->session->set_flashdata('error','Logout Successfully');
			redirect(base_url());
		}	      
		$this->load->view('layout/header');
		$this->load->view('auth/login');	
	}

		/*
===============================================================================
                   timeline function
===============================================================================
*/	
		public function answer()
		{
			$data['user']=$this->auth->fetch_data2('neko_user_data');
			$data['ques']=$this->auth->fetch_data('neko_ques_data');		
			$data['stats']=$this->auth->fetch_data_stats('neko_user_data',$_SESSION['user_email']);
			$this->load->view('layout/two-layer-header',$data);
			$this->load->view('answers',$data);
			$data['points']=$this->auth->fetch_data_highpoints('neko_user_data');		
			$this->load->view('layout/side-bar',$data);
			$this->load->view('layout/footer');
		
		}

	/*
===============================================================================
                   viewing other users profile function
===============================================================================
*/	

		public function user_profile()
		{
			$mail=$_SESSION['user_email'];
			$st['stats']=$this->auth->fetch_data_stats('neko_user_data',$mail);		
			$this->load->view('layout/two-layer-header',$st);
			$this->load->view('user-profile',$st);
			$data['points']=$this->auth->fetch_data_highpoints('neko_user_data');		
			$this->load->view('layout/side-bar',$data);
			$this->load->view('layout/footer');
		
		}

/*
===============================================================================
                   filling query page function
===============================================================================
*/
public function ask_question()
		{		
			$data['cat']=$this->auth->fetch_data('neko_category');
			$st['stats']=$this->auth->fetch_data_stats('neko_user_data',$_SESSION['user_email']);
			$this->load->view('layout/two-layer-header',$st);
			$this->load->view('ask-question',$data);
			$this->load->view('layout/footer');			
		} 

/*
===============================================================================
                  deleting question function
===============================================================================
*/

		public function del_ques()
		{
			$id=$this->input->get('id');		
			$this->auth->delete_data($id);
			$this->ques_point_sub();		
			$this->ques_count_sub();
			redirect('index.php/home/answer','refresh');
		}

/*
===============================================================================
                  deleting reply function
===============================================================================
*/

public function reply_delete()
{
	$this->auth->delete_reply($this->input->get('rid'),$_SESSION['user_id']);
	$this->reply_count_sub($this->input->get('qid'));
	$this->	answer_count_sub($this->input->get('qid'));
	$url=base_url('index.php/home/ques_open?id='.$this->input->get('qid'));
  redirect($url);	
}

/*
===============================================================================
                  reporting reply function
===============================================================================
*/

public function reply_report()
{
	$this->db->where('user_id=',$_SESSION['user_id']);
	$this->db->where('reply_id=',$this->input->get('rid'));
	$query=$this->db->get('report_reply');
	$row= $query->num_rows();
	if($row==0)
	{
	$report=array(
		 'user_id'=>$_SESSION['user_id'],
		 'user_mail'=>$_SESSION['user_email'],
		 'ques_id'=>$this->input->get('qid'),
		 'reply_id'=>$this->input->get('rid'),
		 'report_value'=>1
	);
	$this->auth->insert_data('report_reply',$report);
	$this->db->set('report_count', 'report_count + 1', FALSE);	
	$this->db->where("ID=",$this->input->get('rid'));
	$this->db->update('reply_ques');
	$this-> report_reply_check($this->input->get('qid'));
}
$url=base_url('index.php/home/ques_open?id='.$this->input->get('qid'));
redirect($url);	
}

/*
===============================================================================
                  question opening for viewing  function
===============================================================================
*/

public function ques_open()
{

	$data['particular_ques']=$this->auth->fetch_ques($this->input->get('id'));

	$this->db->select('user_mail');
	$query = $this->db->get_where( 'neko_ques_data', array('ID' =>$this->input->get('id') ) );
	$var = $query->row('user_mail');
	$data['username']=$this->auth->fetch_uname($var);            
		$data['get_reply']=$this->auth->fetch_reply($this->input->get('id'));
	$data['check_star']=$this->auth->fetch_star_ques($this->input->get('id'),$_SESSION['user_id']);
	$this->view_count($this->input->get('id'));
	$st['stats']=$this->auth->fetch_data_stats('neko_user_data',$_SESSION['user_email']);
	$this->load->view('layout/two-layer-header',$st);
	$this->load->view('questionis',$data);
}

/*
===============================================================================
                  reporting question function
===============================================================================
*/

public function report_ques()
{
	$this->db->where('user_id=',$_SESSION['user_id']);
	$this->db->where('ques_id=',$this->input->get('qid'));
	$query=$this->db->get('report_ques');
	$row= $query->num_rows();
	if($row==0)
	{
	$report=array(
		 'user_id'=>$_SESSION['user_id'],
		 'user_mail'=>$_SESSION['user_email'],
		 'ques_id'=>$this->input->get('qid')
	);
	$this->auth->insert_data('report_ques',$report);
	$this->db->set('report_count', 'report_count + 1', FALSE);	
	$this->db->where("ID=",$this->input->get('qid'));
	$this->db->update('neko_ques_data');

	$this-> report_ques_check($this->input->get('qid'));
}
$url=base_url('index.php/home/ques_open?id='.$this->input->get('qid'));
redirect($url);	

}

/*
===============================================================================
                  bookmarking question function
===============================================================================
*/

public function starbook_ques()
{
	$this->db->where('user_id=',$_SESSION['user_id']);
	$this->db->where('ques_id=',$this->input->get('qid'));
	$query=$this->db->get('bookstar_ques');
	$row= $query->num_rows();
	if($row==0)
	{
	$report=array(
		 'user_id'=>$_SESSION['user_id'],
		 'user_mail'=>$_SESSION['user_email'],
		 'value'=>1,
		 'ques_id'=>$this->input->get('qid')
	);
	$this->auth->insert_data('bookstar_ques',$report);
	$this->db->set('star_count', 'star_count + 1', FALSE);	
	$this->db->where("ID=",$this->input->get('qid'));
	$this->db->update('neko_ques_data');
	$this->db->set('ques_bookmarked', 'ques_bookmarked + 1', FALSE);	
	$this->db->where("user_mail=",$_SESSION['user_email']);
	$this->db->update('neko_user_data');

} else {
	$this->auth-> delete_star_ques($this->input->get('qid'),$_SESSION['user_id']);
	$this->db->set('star_count', 'star_count - 1', FALSE);	
	$this->db->where("ID=",$this->input->get('qid'));
	$this->db->update('neko_ques_data');
	$this->db->set('ques_bookmarked', 'ques_bookmarked - 1', FALSE);	
	$this->db->where("user_mail=",$_SESSION['user_email']);
	$this->db->update('neko_user_data');
}
$url=base_url('index.php/home/ques_open?id='.$this->input->get('qid'));
redirect($url);	
}

/*
===============================================================================
                    function to check question reported
===============================================================================
*/

public function report_ques_check($qid)
{
	$this->db->where('ques_id=',$qid);
	$query=$this->db->get('report_ques');
	$row= $query->num_rows();
	if($row >= 25)
	{
		$this->auth->delete_data($qid);
	}
}
/*
===============================================================================
                    function to check reply reported
===============================================================================
*/
public function report_reply_check($qid)
{
	$this->db->where('ques_id=',$qid);
	$query=$this->db->get('report_ques');
	$row= $query->num_rows();
	if($row >= 20)
	{
		$this->auth->delete_reply($qid,$_SESSION['user_id']);
	}
}
/*
===============================================================================
                    function to post reply
===============================================================================
*/

public function post_reply()
{
	$qid=$this->input->get('id');
	$reply_data=array(
		'Userid'=>$_SESSION['user_id'],
		'fname'=>	$_SESSION['user_fname'],
		'lname'=>	$_SESSION['user_lname'],
		'Quesid'=>$qid,
		'Reply'=>$this->input->post('reply')
	);
	$this->db->insert('reply_ques',$reply_data);
	$this->reply_count($qid);
	$this->answer_count_add($qid);
	$this->db->set('user_points', 'user_points+2', FALSE);
	$this->db->where('user_mail', $_SESSION['user_email']);
	$this->db->update('neko_user_data');
	$url=base_url('index.php/home/ques_open?id='.$qid);
	redirect($url);	
}

/*
===============================================================================
                    function to update question status
===============================================================================
*/

public function update_stat()
{	
	$stat = array('QUES_STATUS' => $this->input->get('stat'));    
	$this->db->where('id', $this->input->get('id'));
	$this->db->update('neko_ques_data', $stat);	
	$url=base_url('index.php/home/ques_open?id='.$this->input->get('id'));
	redirect($url);	
}
/*
===============================================================================
                    function to mark reply vernuable or not 
===============================================================================
*/

public function reply_valid()
{
	if($this->input->get('stat')=="valued")
	{
	$stat = array('value' => $this->input->get('stat'));    
$this->db->where('ID', $this->input->get('rid'));
$this->db->update('reply_ques', $stat);
	$this->db->select('Userid');
	$this->db->where("Quesid=",$this->input->get('qid'));
	$this->db->from('reply_ques');
	$uid=$this->db->get()->row()->Userid;
	$this->db->set('best_answers', 'best_answers + 1', FALSE);
	$this->db->where('id=',$uid);
	$this->db->update('neko_user_data');
	$this->db->set('user_points', 'user_points+15', FALSE);
	$this->db->where('id=',$uid);
	$this->db->update('neko_user_data');
	}
	if($this->input->get('stat')=="undefined")
	{
	$stat = array('value' => $this->input->get('stat'));    
$this->db->where('ID', $this->input->get('rid'));
$this->db->update('reply_ques', $stat); 
$this->db->select('Userid');
	$this->db->where("Quesid=",$this->input->get('qid'));
	$this->db->from('reply_ques');
	$uid=$this->db->get()->row()->Userid;
	$this->db->set('best_answers', 'best_answers - 1', FALSE);
	$this->db->where('id=',$uid);
	$this->db->update('neko_user_data');
	$this->db->set('user_points', 'user_points-15', FALSE);
	$this->db->where('id=',$uid);
	$this->db->update('neko_user_data');
	}

	$url=base_url('index.php/home/ques_open?id='.$this->input->get('qid'));
	redirect($url);

}

/*
===============================================================================
                    function to update question views
===============================================================================
*/

public function view_count($qid)
{
	$this->db->where('userid=',$_SESSION['user_id']);
	$this->db->where('quesid=',$qid);
	$query=$this->db->get('view_count');
	$row= $query->num_rows();
	if($row==0)
	{		
		$add=array('userid'=>$_SESSION['user_id'],'quesid'=>$qid,'view'=>'1');	
		$this->auth->insert_data('view_count',$add);
		$this->view_count_add($qid);
	}else{
	}	
}

/*
===============================================================================
                    function to update reply view count
===============================================================================
*/
public function reply_count($q)
{
	$this->db->set('reply_count', 'reply_count + 1', FALSE);	
	$this->db->where("ID=",$q);
	$this->db->update('neko_ques_data');
}
/*
===============================================================================
                    function to update reply count
===============================================================================
*/
public function reply_count_sub($q)
{
	$this->db->set('reply_count', 'reply_count - 1', FALSE);	
	$this->db->where("ID=",$q);
	$this->db->update('neko_ques_data');

}
public function view_count_add($q)
{
	$this->db->set('view_count', 'view_count + 1', FALSE);	
	$this->db->where("ID=",$q);
	$this->db->update('neko_ques_data');
}
/*
===============================================================================
                    function to show points
===============================================================================
*/

public function show_points()
{
$pp=$this->auth->fetch_data('neko_user_data');
return $pp;
}

/*
===============================================================================
                    function to update user points for posting ques
===============================================================================
*/

public function ques_point_add()
{
	$this->db->set('user_points', 'user_points+5', FALSE);
	$this->db->where('user_mail', $_SESSION['user_email']);
	$this->db->update('neko_user_data');
}
function ques_point_sub()
{
	$this->db->set('user_points', 'user_points-5', FALSE);
	$this->db->where('user_mail', $_SESSION['user_email']);
	$this->db->update('neko_user_data');
}

/*
===============================================================================
            function to count question replied for user profile
===============================================================================
*/

public function answer_count_add($id)
{
$this->db->select('*');
$this->db->where('Quesid=',$id);
$this->db->where('Userid=',$_SESSION['user_id']);
$query=$this->db->get('reply_ques');
$row= $query->num_rows();
if($row==1)
{
$this->db->set('ques_answered', 'ques_answered + 1', FALSE);	
$this->db->where("ID=",$_SESSION['user_id']);
$this->db->update('neko_user_data');
} else {}
}

public function answer_count_sub($id)
{
$this->db->select('*');
$this->db->where('Quesid=',$id);
$this->db->where('Userid=',$_SESSION['user_id']);
$query=$this->db->get('reply_ques');
$row= $query->num_rows();
if($row==0)
{
$this->db->set('ques_answered', 'ques_answered - 1', FALSE);	
$this->db->where("ID=",$_SESSION['user_id']);
$this->db->update('neko_user_data');
} else {}
}

/*
===============================================================================
            function to update question asked for profile
===============================================================================
*/

public function ques_count_add()
{
	$this->db->set('ques_asked', 'ques_asked+1', FALSE);
	$this->db->where('user_mail', $_SESSION['user_email']);
	$this->db->update('neko_user_data');
}
function ques_count_sub()
{    
	$this->db->set('ques_asked', 'ques_asked-1', FALSE);
	$this->db->where('user_mail', $_SESSION['user_email']);
	$this->db->update('neko_user_data');
}

/*
===============================================================================
            function for posting feedbacks
===============================================================================
*/
public function post_feedback()
{
	$f=$this->input->post('feeddata');	
if($f=!"")
{
		$info=array(
'uid'=>$_SESSION['user_id'],
'email'=>$_SESSION['user_email'],
'feedback'=>$this->input->post('feeddata')
		);
		$this->auth->insert_data('user_feedback',$info);
	}else{ }
	redirect('index.php/home/panel');
}

/*
===============================================================================
            function for displaying particular tag questions
===============================================================================
*/

public function show_tag()
{
	$data['user']=$this->auth->fetch_data2('neko_user_data');
	$data['ques']=$this->auth->fetch_tag_ques($this->input->get('tagid'))	;	
	$data['stats']=$this->auth->fetch_data_stats('neko_user_data',$_SESSION['user_email']);
	$this->load->view('layout/two-layer-header',$data);
	$this->load->view('specifictag',$data);
	$data['points']=$this->auth->fetch_data_highpoints('neko_user_data');		
	$this->load->view('layout/side-bar',$data);
	$this->load->view('layout/footer');
}

/*
===============================================================================
            function for viewing othe profile
===============================================================================
*/
public function view_profile()
{
	$data['star_ques']=$this->auth->fetch_data('bookstar_ques');
	$data['ques2']=$this->auth->fetch_ques_data('neko_ques_data');
	$data['noans_ques']=$this->auth->fetch_data('reply_ques');
	$data['ques']=$this->auth->fetch_user_ques($this->input->get('uid'));
	$data['user_profile']=$this->auth->fetch_user_data($this->input->get('uid'));
	$data['stats']=$this->auth->fetch_data_stats('neko_user_data',$_SESSION['user_email']);
	$this->load->view('layout/two-layer-header',$data);
	$this->load->view('viewprofile',$data);
	$this->load->view('layout/footer');

}

/*
===============================================================================
            admin functions
===============================================================================
*/

public function admin_potral()
{
	$this->db->select('admin_session');
$this->db->where('admin_mail=', $_SESSION['user_email']);
$this->db->from('neko_user_type');
$sql=$this->db->get()->row()->admin_session;
if($sql==0)
{
	$this->load->view('admin/adminlogin');
	$this->load->view('admin/admin-footer');
}else if($sql==1){ redirect('index.php/home/admin_site_users');}
}

public function admin_login_check()
{
$this->db->select('*');
$this->db->where('admin_mail=', $this->input->post('u_mail'));
$this->db->where('admin_pswd=',$this->input->post('u_password'));
$this->db->from('neko_user_type');
$sql=$this->db->get();
if($sql->num_rows()==1){
	$this->db->set('admin_session', '1', FALSE);	
	$this->db->where('admin_mail=', $this->input->post('u_mail'));
	$this->db->update('neko_user_type');
redirect('index.php/home/admin_site_users');
}else{
	$this->session->set_flashdata('error','Your Passwod is Incorect' );
	redirect('index.php/home/admin_potral');
} 
}

public function admin_logout()
{
	$this->db->set('admin_session', '0', FALSE);	
	$this->db->where('admin_mail=',$_SESSION['user_email']);
	$this->db->update('neko_user_type');
	redirect("index.php/home/index");	
}

public function admin_site_users()
{
	$data['users']=$this->auth->fetch_data('neko_user_data');
	$this->load->view('admin/admin-header');
	$this->load->view('admin/siteusers',$data);
	$this->load->view('admin/admin-footer');
}

public function admin_solvedfeedback()
{
	$data['feedback']=$this->auth->fetch_data_feeds('user_feedback');
	$this->load->view('admin/admin-header');
	$this->load->view('admin/feedback',$data);
	$this->load->view('admin/admin-footer');
}

public function admin_unsolvedfeedback()
{
	$data['feedback']=$this->auth->fetch_data_unsolvedfeeds('user_feedback');
	$this->load->view('admin/admin-header');
	$this->load->view('admin/feedback',$data);
	$this->load->view('admin/admin-footer');
}

public function feed_valid()
{
	$this->db->set('status', '1', FALSE);	
	$this->db->where("id=",$this->input->get('fid'));
	$this->db->update('user_feedback');
}

public function feed_del()
{	
	$this->db->where("id=",$this->input->get('fid'));
	$this->db->delete('user_feedback');
}

public function admin_querystats()
{
	$data['query']=$this->auth->fetch_data_query('neko_user_data');
	
	$this->load->view('admin/admin-header');
	$this->load->view('admin/querystats',$data);
	$this->load->view('admin/admin-footer');
}
		
	}