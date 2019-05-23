<?php

namespace Core\Modules\Posting\Services;
use Core\Modules\Posting\Models\ListOfPosting;
use Core\Modules\Posting\Models\Posting;
use Core\Modules\Posting\Repositories\PostingRepository;
use Core\Modules\Posting\Requests\PostingRequest;

class PostingService
{

    private $postingRepository;

    public function __construct(PostingRepository $postingRepository)
    {
        $this->postingRepository = $postingRepository;
    }

    function addPosting(PostingRequest $request){
        $posting = new Posting();
        $posting->setIsiPost($request->getIsiPost());
        $posting->setJudul($request->getJudul());
        $posting->setNamaPoster($request->getNamaPoster());
        $posting->setView(0);
        $this->postingRepository->createPosting($posting);

    }

    function getPostings(bool $isDesc) : ListOfPosting
    {
        return $this->postingRepository->findAllPostingSortByView($isDesc);
    }
}