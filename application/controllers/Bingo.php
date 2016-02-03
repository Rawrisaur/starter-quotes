<?php

class Bingo extends Application {

    function index()
    {

        $source = $this->quotes->get(5);

        $this->data['mug'] = $source['mug'];

        $this->data['who'] = $source['who'];
        
        $this->data['what'] = $source['what'];

        $this->data['pagebody'] = 'justone';

        $this->render();
    }

}