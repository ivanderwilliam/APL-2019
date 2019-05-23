<?php
namespace App\Posting\Controllers\Api;

use Core\Modules\Posting\Services\PostingService;
use Phalcon\Mvc\Controller;

/**
 * @property PostingService postingService
 */
class PostingController extends Controller
{
    function indexAction(){
        $request = $this->request;

        $this->view->postings = $this->postingService->getPostings(
            ($request->getQuery('sort') == 'true')?true:false
        )->getList();
        $this->view->pick('posting');
    }
}