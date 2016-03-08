<?php

namespace Application\Service;
use Doctrine\ORM\EntityRepository;
class UserManager
{
	/** @var  EntityRepository */
	protected $repository;

	public function setRepository(EntityRepository $repository)
	{
		$this->repository = $repository;

		return $this;
	}
	public function getList()
	{
		return $this->repository->findAll();
	}
}