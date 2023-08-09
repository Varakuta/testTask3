<?php


namespace App\Service;

use App\Repository\PostRepository;
use App\Entity\Post;
use App\Repository\UserRepository;

/**
 * Class PostService
 * Сервисный класс управления Постами. Может содержать логику.
 * @package App\Service
 */
class PostService
{
    /**
     * @var PostRepository
     */
    private $postRepository;

    private $userRepository;

    /**
     * PostService constructor.
     * @param PostRepository $postRepository
     */
    public function __construct(PostRepository $postRepository, UserRepository $userRepository)
    {
        $this->postRepository = $postRepository;
        $this->userRepository = $userRepository;
    }

    /**
     * @param $params
     * @return Post
     */
    public function createPost($params) : Post
    {
    }

    /**
     * @param Post $post
     */
    public function updatePost(Post $post) : Post
    {}


    /**
     * @param $post_id
     */
    public function removePost($post_id)
    {}

    /**
     * @param $post_id
     * @param $new_user_id
     */
    public function changeAuthor($post_id, $new_user_id)
    {
        $post = $this->postRepository->findPostById($post_id);
        $post->setUserId($new_user_id);
        $this->updatePost($post);
    }

    /**
     * @param $user_id
     */
    public function findPosstByAuthor($user_id)
    {}

    /**
     * @param $id
     */
    public function findPostById($id)
    {}

}