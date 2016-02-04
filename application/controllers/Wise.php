<?php

class Wise extends Application
{
	public function bingo()
	{
		$this->data['pagebody'] = 'justone';
		
		$source = $this->quotes->get(6);
		
		$this->data['mug'] = $source['mug'];

        $this->data['who'] = $source['who'];

        $this->data['what'] = $source['what'];

        $this->render();
	}
}