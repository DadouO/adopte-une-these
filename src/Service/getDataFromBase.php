<?php

namespace App\Service;

class getDataFromBase{
     /** @var string */
    private $entity;


    private function getEm(){
        $entityManager=$this->getDoctrine()->getManager();
        $entityRepo = $entityManager->getRepository($this.getEntity::class);
        $entitydata = $entityRepo->findAll();
        return $entitydata;
    }

    public function getDatas(){
        return $this->getEm();
    }

    /**
     * @return string
     */
    public function getEntity(): String {
        return $this->entity;
    }

     /**
     * @param string $entity
     * @return getDataFromBase
     */
    public function setEntity(string $entity): getDataFromBase
    {
        $this->entity = $entity;
        return $this;
    }



}