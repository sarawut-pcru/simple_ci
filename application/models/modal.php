<?php
class Member_model extends CI_Model
{
    public function addmember()
    {
        $fname = $this->input->post('fname');
        $lname = $this->input->post('lname');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // $this->load->view('frm',$data); /// frm ที่ส้งไป , data

        if (empty($fname) || empty($lname) || empty($email) || empty($phone) || empty($username) || empty($password)) {

            echo "<script>alert('False')</script>";
        } else {
            $data = array(
                'u_fname' =>  $fname,
                'u_lname' => $lname,
                'u_email' => $email,
                'u_phone' => $phone,
                'username' => $username,
                'password' => $password,
            );
            $query = $this->db->insert('tbl_users', $data);
            if ($query) {
                echo "<script>alert('Success')</script>";
                $this->load->view('signup');
            }
        }
    }
}
