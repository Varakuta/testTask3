<?php


namespace App\Repository;


use App\Entity\User;
use App\Model\PostListResponse;

/**
 * Class UserRepository
 * лужит репозиторием для сущности User. С помощью любой ORM получается из базы и мапится на сущность.
 * Как пример тут используется EntitiManager из Doctrine.
 * @package App\Repository
 */
class UserRepository
{
    use RepositoryModifyTrait;
    /**
     * @var EntitiManager
     */
    private EntitiManager $em;

    /**
     * PostRepository constructor.
     * @param EntitiManager $em
     */
    public function __construct(EntitiManager $em)
    {
        $this->em = $em;
    }

    /**
     * @param User $user
     * @return PostListResponse
     */
    public function findUsersPosts(User $user) : PostListResponse
    {}
}