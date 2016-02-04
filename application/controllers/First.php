<?php
/**
 * Created by PhpStorm.
 * User: brandon
 * Date: 02/02/16
 * Time: 5:19 PM
 */

class First extends Application
{

	function __construct()
	{
		parent::__construct();
	}
	
    public function index()
    {

        $source = $this->quotes->first();

        $this->data['mug']  = $source['mug'];
        $this->data['who']  = $source['who'];
        $this->data['what'] = $source['what'];

        $this->data['pagebody'] = 'justone'; // this is the view we want shown
        $this->render();
    }

    public function gimme($id)
    {

        $this->data['pagebody'] = 'justone';

        $source = $this->quotes->get($id);

        $this->data['mug'] = $source['mug'];

        $this->data['who'] = $source['who'];

        $this->data['what'] = $source['what'];

        $this->render();
    }
	
	
	function zzz()
	{
		$this->data['pagebody'] = 'justone';
		
		$source = $this->quotes->get(1);
		
		$this->data['mug'] = $source['mug'];
		
		$this->data['who'] = $source['who'];
		
		$this->data['what'] = $source['what'];
		
		$this->render();
	}
}
