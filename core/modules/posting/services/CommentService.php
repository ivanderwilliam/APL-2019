<?php
namespace Core\Modules\Posting\Services;

use Core\Modules\Posting\Models\Comment;
use Core\Modules\Posting\Repositories\CommentRepository;
use Core\Modules\Posting\Repositories\PostingRepository;
use Core\Modules\Posting\Requests\CommentRequest;

class CommentService
{
    private $postingRepository, $commentRepository;

    public function __construct(PostingRepository $postingRepository, CommentRepository $commentRepository)
    {
        $this->postingRepository = $postingRepository;
        $this->commentRepository = $commentRepository;
    }

    public function addComment(CommentRequest $request){

        $comment = new Comment();
        $comment->setIsiKomen($request->getIsiKomen());
        $comment->setKomentator($request->getKomentator());
        $comment->setPostId($request->getIdPost());
        $this->commentRepository->createComment($comment);

        $posting = $this->postingRepository->findById($request->getIdPost());
        $posting->setView($posting->getView()+1);
        $this->postingRepository->save($posting);
    }


}