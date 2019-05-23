<?php
namespace App\Posting\Repositories;

use App\Posting\Models\Posting;
use App\Library\Orm\AbstractRepository;
use Core\Modules\Posting\Models\ListOfPosting;
use Core\Modules\Posting\Models\Posting as PostingModel;
use Core\Modules\Posting\Repositories\PostingRepository as PostingRepositoryInterface;
//padlock oauth
class PostingRepository extends AbstractRepository implements PostingRepositoryInterface
{

    /**
     * Model class name for the concrete implementation
     *
     * @return string
     */
    public function modelName()
    {
        return Posting::class;
    }

    static function getCoreModelFrom(Posting $posting): PostingModel
    {
        $newPosting = new PostingModel();
        $newPosting->setId($posting->getIdPost());
        $newPosting->setIsiPost($posting->getIsiPost());
        $newPosting->setView($posting->getView());
        $newPosting->setJudul($posting->getJudulPost());
        $newPosting->setNamaPoster($posting->getNamaPoster());
        return $newPosting;
    }

    function findAllPostingSortByView(bool $isDec): ListOfPosting
    {
        $builder = $this->getQueryBuilder();
        if($isDec){
            $builder->orderBy('view desc');
        }
        else{
            $builder->orderBy('view asc');
        }
        $postings = $builder->getQuery()->execute();

        $listOfPosting = new ListOfPosting();
        /** @var Posting $postings */
        foreach ($postings as $posting){
            $cposting = PostingRepository::getCoreModelFrom($posting);
            foreach ($posting->comment as $comment){
                $cposting->addComment(
                    CommentRepository::getModelFrom($comment)
                );
            }
            $listOfPosting->addPosting(
                $cposting
            );
        }

        return $listOfPosting;
    }

    function createPosting(PostingModel $posting)
    {
        $var = $this->create([
            'judul_post' => $posting->getJudul(),
            'nama_poster' => $posting->getNamaPoster(),
            'isi_post' => $posting->getIsiPost(),
            'view' => $posting->getView()
        ]);
    }

    function findById(int $id): PostingModel
    {
        return PostingRepository::getCoreModelFrom(
            $this->findOne(['id_post'=>$id])
        );
    }

    function save(PostingModel $posting)
    {
        $this->update([
            'id_post' => $posting->getId()],
            [
                'judul_post' => 'hehe',
                'nama_poster' => $posting->getNamaPoster(),
                'isi_post' => $posting->getIsiPost(),
                'view' => $posting->getView()
            ]
        );
    }
}
