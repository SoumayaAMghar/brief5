<?php

class UsersController {
    public function auth(){
        if(isset($_POST['submit'])){
            $data['username'] = $_POST['username'];
            // die(print_r($data));
            $result = User::login($data);
            if($result->username === $_POST['username'] && password_verify($_POST['password'], $result->password))
            {
                $_SESSION['login'] = true;
                $_SESSION['username'] = $result->username;
                Redirect::to('home');
            }else{
                Session::set('error','Pseudo ou mode de pass est incorrect');
                Redirect::to('login');
            }
        }
    }
    public function register(){
        if(isset($_POST['submit'])){
            $options = [
              'cost' => 12
            ];
            $password = password_hash($_POST['password'],PASSWORD_BCRYPT,$options);
            $data = array(
                'fullname' => $_POST['fullname'],
                'username' => $_POST['username'],
                'password' => $password,
            );
            $result = User::createUser($data);
            if($result === 'ok'){
                Session::set('success','compte crée');
                Redirect::to('login');
            }else{
                echo $result;
            }
        }
    }
    static public function logout(){
        session_destroy();
    }
}