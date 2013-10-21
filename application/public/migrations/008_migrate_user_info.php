<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Migrate_user_info extends CI_Migration
{
    public function up()
    {


        $qs = $this->db->query("SELECT * , eu.id_user user_id, eu.datetime_add dadd, eu.datetime_update dupdate
                                FROM `entity_user` eu
                                LEFT JOIN user_info ui ON eu.id_user = ui.id_user
                                LEFT JOIN user_fb uf ON eu.id_user = uf.id_user
                                LEFT JOIN user_dp ud ON eu.id_user = ud.id_user");

        foreach($qs->result_array() as $row)
        {

            $user = array();

            $user['user_full_name']     = $row['full_name'];
            $user['user_first_name']    = $row['first_name'];
            $user['user_last_name']     = $row['last_name'];
            $user['user_email']         = $row['email'];
            $user['user_datetime_add']      = strtotime($row['dadd']);
            $user['user_datetime_update']   = strtotime($row['dupdate']);
            $user['user_about_me']      = $row['about_me'];
            $user['user_height']        = (int)$row['height'];
            $user['user_height_type']   = (int)$row['height_type'];
            $user['user_active']        = (int)$row['active'];
            $user['user_timezone_id']   = $row['timezone_id'];
            $user['user_height_inches'] = (int)$row['height_inches'];
            $user['user_gender']        = $row['gender'];
            $user['user_id_age_range']  = $row['id_age_range'];
            $user['user_id_loc_city']   = $row['id_loc_city'];
            $user['user_email_notification']    = $row['email_notification'];
            $user['user_fitness_level']         = $row['fitness_level'];
            $user['user_Weight']                = (int)$row['Weight'];
            $user['user_weight_type']           = (int)$row['weight_type'];
            $user['user_date_of_birth']         = $row['date_of_birth'];

            $uimage = $this->db->query("select url from user_dp ud left join media_image mi on ud.id_media = mi.id_media where ud.id_user = ".$row['user_id']);

            $image = '';
            if($uimage->num_rows() > 0)
            {
                $img = $uimage->row_array();
                $image = $img['url'];
            }

            $user['user_image'] = $image;

            $id = $this->mongo_db->insert('user_info',$user);

            $user = array();

            $user['user_id']            = $id;
            $user['user_logWeight']     = (int)$row['logWeight'];
            $user['user_logWorkout']    = (int)$row['logWorkout'];
            $user['user_logMeal']       = (int)$row['logMeal'];
            $user['user_logText']       = (int)$row['logText'];
            $user['user_logPicture']    = (int)$row['logPicture'];
            $user['user_logVideo']      = (int)$row['logVideo'];
            $this->mongo_db->insert('user_settings',$user);

            $user = array();
            $user['user_id']            = $id;
            $user['user_login_type']    = (int)$row['login_type']; // login from our site/ from facebook
            $user['user_pass']          = $row['pass'];
            $user['user_id_fb']         = $row['id_fb'];
            $this->mongo_db->insert('user_login_info',$user);

            $user = array();
            $user['user_new_id']    = $id;
            $user['user_id']        = (int)$row['user_id'];
            $this->mongo_db->insert('user_id_mapping',$user);



        }


/*

        $qs = $this->db->query("SELECT * , eu.id_user user_id, eu.datetime_add dadd, eu.datetime_update dupdate
                                FROM `entity_user` eu
                                LEFT JOIN user_info ui ON eu.id_user = ui.id_user
                                LEFT JOIN user_fb uf ON eu.id_user = uf.id_user
                                LEFT JOIN user_dp ud ON eu.id_user = ud.id_user");

        $i = 0;
        foreach($qs->result_array() as $row)
        {
            $user = array();

            $id = "";
            $this->mongo_db->select('*');
            $this->mongo_db->where(array('user_id'=> (int)$row['id_user']));
            $data = $this->mongo_db->get('user_id_mapping');
            if(isset($data[0]['user_new_id']))
            {

                $id = $data[0]['user_new_id'];

                $rw = $this->db->query("select id_user from user_followers where id_user_followed = ".$row['user_id']);

                $user_follows_me = array();

                foreach($rw->result_array() as $r)
                {
                    $this->mongo_db->select('*');
                    $this->mongo_db->where(array('user_id'=> (int)$r['id_user']));
                    $data = $this->mongo_db->get('user_id_mapping');


                    if(isset($data[0]['user_id']))
                    {
                        $user_follows_me[] = $data[0]['user_new_id'];
                    }
                    else{
                        echo "not found following= ".$r['id_user']."<br />";
                    }

                }
                $user['following'] = $user_follows_me;

                $rw = $this->db->query("select id_user_followed from user_followers where id_user = ".$row['user_id']);

                $user_me_follows = array();
                foreach($rw->result_array() as $r)
                {
                    $this->mongo_db->select('*');
                    $this->mongo_db->where(array('user_id'=> (int)$r['id_user_followed']));
                    $data = $this->mongo_db->get('user_id_mapping');

                    if(isset($data[0]['user_new_id']))
                    {
                        $user_me_follows[] = $data[0]['user_new_id'];
                    }else{
                        echo "not found follower = ".$r['id_user_followed']."<br />";
                    }
                }
                $user['follower'] = $user_me_follows;

                $this->mongo_db->where(array('_id' => new MongoId($id)));
                $this->mongo_db->set($user);
                $this->mongo_db->update('user_info');
            }
            else{

                echo "Id not found = ".$row['id_user']."<br />";
            }


        }*/

    }

    public function down()
    {
        $this->mongo_db->drop_db('user_info');
        $this->mongo_db->drop_db('user_settings');
        $this->mongo_db->drop_db('user_login_info');
        $this->mongo_db->drop_db('user_id_mapping');
    }
}