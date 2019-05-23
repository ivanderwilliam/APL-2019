<?php

namespace Core\Modules\Posting\Requests;


class CommentRequest
{
    private $id_post, $isi_komen, $komentator;

    /**
     * @return mixed
     */
    public function getIsiKomen()
    {
        return $this->isi_komen;
    }

    /**
     * @param mixed $isi_komen
     */
    public function setIsiKomen($isi_komen)
    {
        $this->isi_komen = $isi_komen;
    }

    /**
     * @return mixed
     */
    public function getKomentator()
    {
        return $this->komentator;
    }

    /**
     * @param mixed $komentator
     */
    public function setKomentator($komentator)
    {
        $this->komentator = $komentator;
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