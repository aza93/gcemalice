<?php

namespace Ad\UploadBundle\Handler;


use ExploitBundle\Classes\Functionsverif;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\PropertyAccess\PropertyAccess;
use ExploitBundle\Controller\PreparationController;

class UploadHandler{


    private $accessor;


    public function __construct()
    {
        $this->accessor = PropertyAccess::createPropertyAccessor();
    }


    public function uploadFile($entity, $property, $annotation){

        $file = $this->accessor->getValue($entity, $property);
        if ($file instanceof UploadedFile) {
//                $filename = $file->getClientOriginalName();
            $sup = new Functionsverif();
            $filenameOrigine = $sup->suppr_accents($file->getClientOriginalName());
            $filename = md5(uniqid()) . '_' . $filenameOrigine;
            $file->move($annotation->getPath(), $filename);

            $this->accessor->setValue($entity, $annotation->getFilename(), $filename);
        }
    }

    public function setFileFromFilename($entity, $property, $annotation)
    {

        $file = $this->gerFileFromFilename($entity, $annotation);
        $this->accessor->setValue($entity, $property, $file);
    }

    /**
     * @param $entity
     * @param $annotation
     * @throws \TypeError
     */
    public function removeoldFile($entity, $annotation)
    {
        $file = $this->gerFileFromFilename($entity, $annotation);

        if($file !== null){

            @unlink($file->getRealPath());
        }
    }

    /**
     * @param $entity
     * @param $annotation
     * @return null|File
     * @throws \TypeError
     */
    private function gerFileFromFilename($entity,  $annotation){

        $filename = $this->accessor->getValue($entity, $annotation->getFilename());

        if(empty($filename)){
            return null;
        }else{

            return new File($annotation->getPath() . DIRECTORY_SEPARATOR . $filename);
        }


    }

    public function removeFile($entity, $property)
    {
        $file = $this->accessor->getValue($entity, $property);

        if($file instanceof File){
            @unlink($file->getRealPath());
        }
    }
}