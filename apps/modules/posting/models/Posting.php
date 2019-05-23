<?php

namespace App\Posting\Models;


use App\Library\Orm\BaseModel;

class Posting extends BaseModel
{

    private $id_post, $judul_post,$nama_poster,$isi_post,$view;

    public function initialize()
    {
        $this->setSource('postings');
        $this->hasMany('id_post',Comment::class,'post_id',array('alias' => 'Comment'));
    }

    public function getIdentifier()
    {
        return $this->id_post;
    }

    /**
     * @return mixed
     */
    public function getJudulPost()
    {
        return $this->judul_post;
    }

    /**
     * @param mixed $judul_post
     */
    public function setJudulPost($judul_post)
    {
        $this->judul_post = $judul_post;
    }

    /**
     * @return mixed
     */
    public function getNamaPoster()
    {
        return $this->nama_poster;
    }

    /**
     * @param mixed $nama_poster
     */
    public function setNamaPoster($nama_poster)
    {
        $this->nama_poster = $nama_poster;
    }

    /**
     * @return mixed
     */
    public function getIsiPost()
    {
        return $this->isi_post;
    }

    /**
     * @param mixed $isi_post
     */
    public function setIsiPost($isi_post)
    {
        $this->isi_post = $isi_post;
    }

    /**
     * @return mixed
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * @param mixed $view
     */
    public function setView($view)
    {
        $this->view = $view;
    }

    /**
     * @return mixed
     */
    public function getIdPost()
    {
        return $this->id_post;
    }

    /**
     * @param mixed $id_post
     */
    public function setIdPost($id_post)
    {
        $this->id_post = $id_post;
    }


}