<?php
/**
 * Created by PhpStorm.
 * User: aboussadia
 * Date: 03/04/2018
 * Time: 13:16
 */
namespace Ad\UploadBundle\Annotation;


use Doctrine\Common\Annotations\AnnotationReader;


class UploadAnnotationReader{


    /**
     * @var AnnotationReader
     */
    private $reader;

    public function __construct(AnnotationReader $reader)
    {

        $this->reader = $reader;
    }

    /**
     * @var boolean
     */
    public function isUploadable($entity) {

        $reflection = new \ReflectionClass(get_class($entity));
       $annotations = $this->reader->getClassAnnotation($reflection, Uploadable::class) !== null;

        return $annotations;
    }

    /**
     * @param $entity/array
     */
    public function getUploadableField($entity)
    {
        $reflection = new \ReflectionClass(get_class($entity));
        if(!$this->isUploadable($entity)){
            return [];
        }
        $properties = [];
        foreach ($reflection->getProperties() as $property){
        $annotation =     $this->reader->getPropertyAnnotation($property, UploadableField::class);
        if($annotation !== null){
            $properties[$property->getName()] = $annotation;
        }

        }

        return $properties;
    }
}