<?php

namespace Core\Modules\Posting\Requests;

class PostingRequest
{
    private $judul,$nama_poster,$isi_post;

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


}