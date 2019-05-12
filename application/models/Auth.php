<?php




class Auth extends CI_Model {



    public function login_check($table_name,$user_data){
      

        $this->db->select('*');
        $this->db->from($table_name);
        $this->db->where($user_data);
      
      $sql=$this->db->get();

      if($sql->num_rows()==1){

        return  $sql->result_array();
      
      }else{
      
       
      } 

    }


    public function fetch_data($table_name){

    $this->db->select('*');
    $this->db->from($table_name);
    $this->db->order_by("ID", "desc"); 
    $sql=$this->db->get();
     return $sql->result();  

    }
    public function fetch_data2($table_name){

      $this->db->select('*');
      $this->db->from($table_name);
    
      $sql=$this->db->get();
       return $sql->result();  
  
      }
    public function fetch_ques_data($table_name){

      $this->db->select('*');
      $this->db->from($table_name);
    
      $sql=$this->db->get();
       return $sql->result();  
  
      }


    
    public function fetch_data_feeds($table_name){

      $this->db->select('*');
      $this->db->from($table_name);
      $this->db->where('status=','1');
      $this->db->order_by("id", "desc"); 
      $sql=$this->db->get();
       return $sql->result();  
  
      }

      
    public function fetch_data_unsolvedfeeds($table_name){

      $this->db->select('*');
      $this->db->from($table_name);
      $this->db->where('status=','0');
      $this->db->order_by("id", "desc"); 
      $sql=$this->db->get();
       return $sql->result();  
  
      }
      public function fetch_data_query($table_name){

        $this->db->select('*');
        $this->db->from($table_name);     
        $this->db->order_by("user_points", "desc"); 
        $sql=$this->db->get();
         return $sql->result(); 
    
        }

    
  


    public function fetch_user_data($id){

      $this->db->select('*');
      $this->db->from('neko_user_data');
      $this->db->where('id =',$id);
      $sql=$this->db->get();
       return $sql->result();  
  
      }

      public function fetch_follow_data($id){

        $this->db->select('*');
        $this->db->from('follow_data');
        $this->db->where('followingid =',$id);
        $sql=$this->db->get();
         return $sql->result();  
    
        }

      public function fetch_tag_ques($tagname){

        $this->db->select('*');
        $this->db->from('neko_ques_data');       
        $where = "CAT_ID='$tagname' OR USRDEF_ID='$tagname'";       
        $this->db->where($where);
        $this->db->order_by("ID", "desc"); 
        $sql=$this->db->get();
         return $sql->result();  
    
        }
        public function fetch_user_ques($id){

          $this->db->select('*');
          $this->db->from('neko_ques_data');       
          $this->db->where('user_id =',$id);
          $this->db->order_by("ID", "desc"); 
          $sql=$this->db->get();
           return $sql->result();  
      
          }

    public function fetch_data_stats($table_name,$sessionmail){

      $this->db->select('*');
      $this->db->from($table_name);
      $this->db->where('user_mail =',$sessionmail);
      $sql=$this->db->get();
       return $sql->result();
    
  
      } 
      
      
      public function fetch_data_highpoints($table_name){

        $this->db->select('*');
        $this->db->from($table_name);
        $this->db->order_by("user_points", "desc"); 
        $sql=$this->db->get();
         return $sql->result();
      
    
        } 

      public function fetch_ques($id){

        $this->db->select('*');
        $this->db->from('neko_ques_data');
        $this->db->where('ID=',$id); 
        $this->db->order_by("ID", "desc");      
        $sql=$this->db->get();
         return $sql->result();
      
    
        } 
        public function fetch_reply($id){

          $this->db->select('*');
          $this->db->from('reply_ques');
          $this->db->where('Quesid=',$id); 
          $this->db->order_by("ID", "desc");     
          $sql=$this->db->get();
           return $sql->result();
        
      
          } 

          public function fetch_star_ques($id,$sesid){

            $this->db->select('*');
            $this->db->from('bookstar_ques');
            $this->db->where('ques_id=',$id); 
            $this->db->where('user_id=',$sesid);
            $this->db->order_by("ID", "desc");        
            $sql=$this->db->get();
             return $sql->result();
          
        
            } 
          
            public function fetch_uname($mail){
              $this->db->select('*');
              $this->db->from('neko_user_data');
              $this->db->where('user_mail=',$mail);
              $sql=$this->db->get();
              return $sql->result();
            }
           
       

    public function insert_data($table_name,$user_data){
     
       $data=$this->db->insert($table_name,$user_data);
       return $data;
  }


  public function delete_data($id){
    $this->db->where('ID=',$id);
    $this->db->delete('neko_ques_data');
    $this->db->where('Quesid=',$id);
    $this->db->delete('reply_ques');
    $this->db->where('ques_id=',$id);
    $this->db->delete('report_reply');
      }

      public function delete_star_ques($id,$sesid){
        $this->db->where('ques_id=',$id);
        $this->db->where('user_id=',$sesid);
        $this->db->delete('bookstar_ques');
       
          }
          public function delete_reply($id,$sesid){
            $this->db->where('ID=',$id);
            $this->db->where('Userid=',$sesid);
            $this->db->delete('reply_ques');
            $this->db->where('reply_id=',$id);
            $this->db->delete('report_reply');
           
              }











}