<?php
/**
 * Created by PhpStorm.
 * User: joffrey
 * Date: 8/03/16
 * Time: 11:03
 */

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class User
 * @package Application\Entity
 * @ORM\Entity
 */
class User
{
	/**
	 * @var int
	 * @ORM\Id
	 * @ORM\Column(type="Int")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

}