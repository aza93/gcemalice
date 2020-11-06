<?php

namespace Ad\UploadBundle\Listener;


use Ad\UploadBundle\Annotation\UploadAnnotationReader;
use Ad\UploadBundle\Handler\UploadHandler;
use Doctrine\Common\EventArgs;
use Doctrine\Common\EventSubscriber;




class UploadSubsciber implements EventSubscriber
{


    /**
     * @var UploadAnnotationReader
     */
    private $reader;
    /**
     * @var UploadHandler
     */
    private $handler;

    public function __construct(UploadAnnotationReader $reader, UploadHandler $handler)
    {
        $this->reader = $reader;
        $this->handler = $handler;
    }

    /**
     * Returns an array of events this subscriber wants to listen to.
     *
     * @return array
     */
    public function getSubscribedEvents()
    {
        return [
            'prePersist',
            'preUpdate',
            'postLoad',
            'postRemove'
        ];
    }

    /**
     * @param EventArgs $event
     * @throws \Exception
     */
    public function prePersist(EventArgs $event)
    {
        $this->preEvent($event);
    }

    /**
     * @param EventArgs $event
     * @throws \Exception
     */
    public function preUpdate(EventArgs $event){

        $this->preEvent($event);
    }


    /**
     * @param EventArgs $event
     * @throws \Exception
     */
    private function preEvent(EventArgs $event)
    {
        $entity = $event->getEntity();
        foreach ($this->reader->getUploadableField($entity) as $property => $annotation) {

            $this->handler->removeoldFile($entity,$annotation);
            $this->handler->uploadFile($entity, $property,$annotation);
        }

//        throw new \Exception('attention');
    }

    /**
     * @param EventArgs $event
     */
    public function postLoad(EventArgs $event)
    {

        $entity = $event->getEntity();
        foreach ($this->reader->getUploadableField($entity) as $property => $annotation) {

            $this->handler->setFileFromFilename($entity,$property, $annotation);

        }

    }

    /**
     * @param EventArgs $event
     * @throws \Exception
     */
    public function postRemove(EventArgs $event)
    {
        $entity = $event->getEntity();
        foreach ($this->reader->getUploadableField($entity) as $property => $annotation) {

            $this->handler->removeFile($entity,$property);

        }

//        throw new \Exception('attention');
    }
}