<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
  
class Contact extends Controller
{
    public function index()
    {
        $session = session();

        $currentUser = $session->get('user_name');
        
            echo view('templates/header');
            echo view('contact');
            echo view('templates/footer');
 
    }
    
}