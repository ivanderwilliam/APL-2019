<?php

namespace Core\Modules\Posting\Models;

class Posting
{
    private $id, $judul,$nama_poster,$isi_post,$view;
    private $comments = array();

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getJudul()
    {
        return $this->judul;
    }

    /**
     * @param mixed $judul
     */
    public function setJudul($judul)
    {
        $this->judul = $judul;
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
    public function getView() : int
    {
        return $this->view;
    }

    /**
     * @param mixed $view
     */
    public function setView(int $view)
    {
        $this->view = $view;
    }

    /**
     * @return mixed
     */
    public function getComments()
    {
        return $this->comments;
    }

    public function addComment(Comment $comment){
        array_push($this->comments, $comment);
    }





}