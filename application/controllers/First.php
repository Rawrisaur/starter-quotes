<?php

class First extends Application 
{
    function __construct()
    {
        parent::__construct();
    }

    function gimme($id)
    {

        $this->data['pagebody'] = 'justone'; 

        $source = $this->quotes->get($id);
       
        $this->data['mug'] = $source['mug'];

        $this->data['who'] = $source['who'];

        $this->data['what'] = $source['what'];

        $this->render();
        
    }

}