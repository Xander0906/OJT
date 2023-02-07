<?php
require_once '../config/config.php';

if (isset($_POST['login'])) : //check if the button is click
    if ($_SERVER['REQUEST_METHOD'] === 'POST') { //check if the method is post

        $username = $_POST['username'];
        $password = $_POST['password'];

        //sample $first = first('users', ['username'=>$username]);  return the first value find
        if ($user = first('users', ['username' => $username])) { //find the first value or row of the query where username=$username
            if (password_verify($password, $user['password'])) { //password_verify built in php function to compare hashpasswords

                $session = [
                    'id'        => $user['id'],
                    'name'      => $user['name'],
                    'username'  => $user['username'],
                    'email'     => $user['email'],
                    'role'      => $user['role'],
                    'isLogin'   => true,
                ];

                $session = setSession($session); //set the $session array
                // var_dump($_SESSION); //use to test the session variables
                setFlash('success', 'Welcome' . ' ' . $user['name']); //set message
                redirect('home'); //shortcut for header('location:index.php'); //uncomment to use if you have page to redirect
            } else {
                retainValue();
                $errors['password'] = 'Incorrect password';
                redirect('index', $errors);
            }
        } else {
            $errors['username'] = 'Username do not exist';
            redirect('index', $errors);
        }
    }

endif;
