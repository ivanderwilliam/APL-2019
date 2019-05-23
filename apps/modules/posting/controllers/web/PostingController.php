<?php

namespace App\Posting\Controllers\Web;

use Core\Modules\Posting\Requests\PostingRequest;
use Core\Modules\Posting\Services\PostingService;
use Phalcon\Mvc\Controller;

/**
 * @property PostingService postingService
 */
class PostingController extends Controller
{
    public function indexAction(){
        $request = $this->request;
        $response = $this->response;

        if($request->getMethod() == 'POST'){
            $r = $request->getPost();
            $request = new PostingRequest();
            $request->setIsiPost($r['isi_post']);
            $request->setNamaPoster($r['nama_poster']);
            $request->setJudul($r['judul_post']);

            $this->postingService->addPosting($request);
        }

        $this->view->pick('home');
    }

}