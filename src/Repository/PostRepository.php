<?php


namespace App\Repository;

use App\Entity\Post;
use App\Model\PostListResponse;

/**
 * Class PostRepository
 * Служит репозиторием для сущности Post. С помощью любой ORM получается из базы и мапится на сущность.
 * Как пример тут используется EntitiManager из Doctrine.
 * @package App\Repository
 */
class PostRepository
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
     * @param int $user_id
     * @return PostListResponse
     */
    public function findPostsByUserId(int $user_id) : PostListResponse
    {}

    /**
     * @param int $id
     * @return Post
     */
    public function findPostById(int $id) : Post
    {}

    /**
     * @param int $id
     * @return Post
     */
    public function findPostByIdWithAuthor(int $id) : Post
    {}
}