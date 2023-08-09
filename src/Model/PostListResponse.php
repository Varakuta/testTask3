<?php


namespace App\Model;


/**
 * Class PostListResponse
 * @package App\Model
 */
class PostListResponse
{
    private [] $items;

    /**
     * PostListResponse constructor.
     * @param PostListItem[]
     */
    public function __construct($items)
    {
        $this->items = $items;
    }

    /**
     * Возвращает массив PostListItem
     * @return PostListItem[]
     */
    public function getItems() : array
    {
        return $this->items;
    }

}