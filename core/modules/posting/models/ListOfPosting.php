<?php

namespace Core\Modules\Posting\Models;


class ListOfPosting
{
    private $list = array();


    function addPosting(Posting $posting){
        array_push($this->list, $posting);
    }

    /**
     * @return array
     */
    public function getList(): array
    {
        return $this->list;
    }


}