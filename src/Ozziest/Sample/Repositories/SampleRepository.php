<?php namespace Ozziest\Sample\Repositories;

use Eloquent;

class SampleRepository implements SampleRepositoryInteface {

	/**
	 * Construct 
	 *
	 * @param  Eloquent 	$model 
	 * @return null
	 */
	public function __construct(Eloquent $model)	
	{
		$this->model = $model;
	}

	/**
	 * Insert 
	 *
	 * @return null
	 */
	public function insert()
	{
		$sample = $this->model;
		$sample->name = 'Ozzy';
		$sample->save();
	}

}