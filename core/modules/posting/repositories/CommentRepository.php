<?php

namespace Core\Modules\Posting\Repositories;


use Core\Modules\Posting\Models\Comment;

interface CommentRepository
{
    function createComment(Comment $comment);
}
