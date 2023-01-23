<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
  
class About extends Controller
{
    public function index()
    {
        $session = session();

        $currentUser = $session->get('user_name');
        
        echo view('templates/header');
        echo view('about');
        echo view('templates/footer');
 
    }
    
}