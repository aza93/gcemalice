<?php
/**
 * Created by PhpStorm.
 * User: aboussadia
 * Date: 03/04/2018
 * Time: 13:07
 */
namespace Ad\UploadBundle\Annotation;

use Doctrine\Common\Annotations\Annotation\Target;
use Symfony\Component\Config\Definition\Exception\Exception;


/**
 * @Annotation()
 * @Target("PROPERTY")
 */
class UploadableField{

    /**
     * @var string
     */
    private $filename;

    /**
     * @var string
     */
    private $path;


    public function __construct(array $options)
    {
        if(empty($options['filename'])){
            Throw new \InvalidArgumentException("L'annotation UploadableField doit avoir un attribut 'filename");
        }
        if(empty($options['path'])){
            Throw new \InvalidArgumentException("L'annotation UploadableField doit avoir un attribut 'path' ");
        }
        $this->filename = $options['filename'];
        $this->path = $options['path'];
    }

    /**
     * @return mixed
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

}