<?php

namespace Core\Modules\Posting\Models;


class Comment
{
    private $id, $isi_komen,$komentator, $postId;

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
    public function setId($id)
    {
        $this->id = $id;
    }

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
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * @param mixed $postId
     */
    public function setPostId($postId)
    {
        $this->postId = $postId;
    }


}