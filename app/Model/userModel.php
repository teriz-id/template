<?php

use Zebua\Teriz\App\Database;

class userModel
{
    private $db;
    public $myaccount = baseurl . '/user/my-account';

    public function __construct()
    {
        $this->db = new Database;
    }

    public function profileUser()
    {
        $this->db->query("SELECT * FROM users WHERE user_id = :user_id");
        $this->db->bind('user_id', (isset($_SESSION['app_sess_id']) ? $_SESSION['app_sess_id'] : null));
        $this->db->execute();
        if ($this->db->rowCount() > 0) :
            return $this->db->single();
        else :
            return false;
        endif;
    }

    public function myaccount_Save($data)
    {
        if (!empty($data['oldpass']) && (!empty($data['password']) || !empty($data['confirmpass']))) :
            $check = $this->profileUser();
            if ($check['password'] == md5($data['oldpass'])) :
                if ($data['password'] == $data['confirmpass']) :
                    if ($this->myaccountSavewithPass($data) > 0) :
                        Flasher::setMessage(Lang::bhs('Data '), Lang::bhs('has been updated!'), 'success');
                        header('location: ' . $this->myaccount);
                        exit();
                    else :
                        Flasher::setMessage(Lang::bhs('Data '), Lang::bhs('failed to update!'), 'danger');
                        header('location: ' . $this->myaccount);
                        exit();
                    endif;
                else :
                    Flasher::setMessage(Lang::bhs('Password '), Lang::bhs('does not match!'), 'danger');
                    header('location: ' . $this->myaccount);
                    exit();
                endif;
            else :
                Flasher::setMessage(Lang::bhs('Password '), Lang::bhs('incorrect!'), 'danger');
                header('location: ' . $this->myaccount);
                exit();
            endif;
        endif;

        if ($this->myaccountSavewithoutPass($data) > 0) :
            Flasher::setMessage(Lang::bhs('Data '), Lang::bhs('has been updated!'), 'success');
            header('location: ' . $this->myaccount);
            exit();
        else :
            Flasher::setMessage(Lang::bhs('Data '), Lang::bhs('failed to update!'), 'danger');
            header('location: ' . $this->myaccount);
            exit();
        endif;
    }

    public function myaccountSavewithPass($data)
    {
        $this->db->query('UPDATE users SET nama=:nama, hp=:hp, telegram=:telegram, password=:password WHERE user_id=:user_id');
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('hp', $data['hp']);
        $this->db->bind('telegram', $data['telegram']);
        $this->db->bind('password', md5($data['password']));
        $this->db->bind('user_id', $_SESSION['app_sess_id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function myaccountSavewithoutPass($data)
    {
        $this->db->query('UPDATE users SET nama=:nama, hp=:hp, telegram=:telegram WHERE user_id=:user_id');
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('hp', $data['hp']);
        $this->db->bind('telegram', $data['telegram']);
        $this->db->bind('user_id', $_SESSION['app_sess_id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
