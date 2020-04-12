<?php
class pages extends Controller{
    public function __construct(){  
   }
        //calling the page name as a function here eg index.php insidee of pages folder

    public function index(){
        $data=[
            'title' => 'sharedpost',
            'description' =>'this is what i have been looking for',
        ];
        $this->view('pages/index', $data);
        
    }
    //calling the page name as a function here eg about.php insidee of pages folder
    public function about(){
        $data=[
            'title' => 'About us',
            'description' =>'about us file',

        ];
        // loading the view page
        $this->view('pages/about',$data);


        
    }
}


?>