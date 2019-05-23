<?php
namespace App\Posting\Models;

use App\Library\Orm\BaseModel;



class Comment extends BaseModel
{

    private $id, $isi_komen, $komentator;

    public function initialize()
    {
        $this->setSource('comments');
    }

    public function getIdentifier()
    {
        return $this->id_comment;
    }

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



}