<?php

namespace Core\Modules\Posting\Repositories;


use Core\Modules\Posting\Models\ListOfPosting;
use Core\Modules\Posting\Models\Posting;

interface PostingRepository
{
    function findById(int $id) : Posting;
    function findAllPostingSortByView(bool $isDesc) : ListOfPosting;
    function createPosting(Posting $posting);
    function save(Posting $posting);
}