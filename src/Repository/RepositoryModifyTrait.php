<?php


namespace App\Repository;


/**
 * Trait RepositoryModifyTrait
 * Общие методы изменения состояния сущностей.
 * @package App\Repository
 */
trait RepositoryModifyTrait
{
    public function save(object $object): void
    {
    }

    public function remove(object $object): void
    {
    }

    public function saveAndCommit(object $object): void
    {
    }

    public function removeAndCommit(object $object): void
    {
    }

    public function commit(): void
    {
    }
}