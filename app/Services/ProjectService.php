<?php
/**
 * Created by PhpStorm.
 * User: Guga
 * Date: 27/07/2015
 * Time: 10:11
 */

namespace Curso\Services;

use Curso\Interfaces\ProjectInterface;
use Curso\Validators\ProjectValidator;

class ProjectService {

    /**
     * @var ProjectInterface
     */
    private $repository;
    /**
     * @var ProjectValidator
     */
    private $validator;

    /**
     * @param ProjectInterface $repository
     * @param ProjectValidator $validator
     */
    public function __construct(ProjectInterface $repository, ProjectValidator $validator){
        $this->repository = $repository;
        $this->validator = $validator;
    }

    /**
     * @param array $data
     * @return array
     */
    public function create(array $data){
        try{
            $this->validator->with($data)->passesOrFail();
            return $this->repository->create($data);
        } catch(ValidatorException $e){
            return [
                'error' => true,
                'message' => $e->getMessageBag()
            ];
        }
    }

    public function update(array $data, $id){
        try{
            $this->validator->with($data)->passesOrFail();
            return $this->repository->update($data, $id);
        } catch(ValidatorException $e){
            return [
                'error' => true,
                'message' => $e->getMessageBag()
            ];
        }
    }

}