<?php
namespace App\Posting\Controllers\Web;

use Core\Modules\Posting\Requests\CommentRequest;
use Core\Modules\Posting\Services\CommentService;
use Phalcon\Mvc\Controller;

/**
 * Class InventoryController
 * @property CommentService commentService
 */
class CommentController extends Controller
{

    public function indexAction() {
        $request = $this->request->getPost();
        $response = $this->response;

        $cRequest = new CommentRequest();
        $cRequest->setKomentator($request['komentator']);
        $cRequest->setIsiKomen($request['isi_komen']);
        $cRequest->setIdPost($request['post_id']);
        $this->commentService->addComment($cRequest);
        $response->redirect('http://localhost/posting/posting');
        $response->send();
    }


}
