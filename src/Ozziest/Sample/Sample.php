<?php namespace Ozziest\Sample;

use Ozziest\Sample\Repositories\SampleRepositoryInteface as RepositoryInterface;

class Sample {

	use \Ozziest\Mocker\TraitMocker;

	public function __construct(RepositoryInterface $repository)
	{
		$this->repository = $repository;
	}

	public function getTrue()
	{
		$this->repository->insert();
		return true;
	}

}