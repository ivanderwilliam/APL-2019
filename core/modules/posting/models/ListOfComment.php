<?php

namespace Core\Modules\Posting\Models;


class ListOfComment
{
    private $list = array();

    function addToList(Comment $comment){
        array_push($this->list, $comment);
    }

    /**
     * @return array
     */
    public function getComments(): array
    {
        return $this->list;
    }


}