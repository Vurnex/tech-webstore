<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
  
class Privacy extends Controller
{
    public function index()
    {
        $session = session();

        $currentUser = $session->get('user_name');
        
        echo view('templates/header');
        echo view('privacy');
        echo view('templates/footer');
 
    }
    
}