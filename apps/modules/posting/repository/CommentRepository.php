<?php

namespace App\Posting\Repositories;


use App\Library\Orm\AbstractRepository;
use App\Posting\Models\Comment;
use Core\Modules\Posting\Models\Comment as CommentModel;
use Core\Modules\Posting\Repositories\CommentRepository as CommentRepositoryInterface;

class CommentRepository extends AbstractRepository implements CommentRepositoryInterface
{

    /**
     * Model class name for the concrete implementation
     *
     * @return string
     */
    public function modelName()
    {
        return Comment::class;
    }

    static function getModelFrom(Comment $comment){
        $newComment = new CommentModel();
        $newComment->setId($comment->getId());
        $newComment->setIsiKomen($comment->getIsiKomen());
        $newComment->setKomentator($comment->getKomentator());
        return $newComment;
    }

    function createComment(CommentModel $comment)
    {
        $this->create([
            'post_id' => $comment->getPostId(),
            'isi_komen' => $comment->getIsiKomen(),
            'komentator' => $comment->getKomentator()
        ]);
    }
}