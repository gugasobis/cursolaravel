<?php
/**
 * Created by PhpStorm.
 * User: Guga
 * Date: 27/07/2015
 * Time: 09:12
 */

namespace Curso\Services;


use Curso\Interfaces\ClientInterface;
use Curso\Validators\ClientValidator;
use Prettus\Validator\Exceptions\ValidatorException;

class ClientService {

    /**
     * @var ClientInterface
     */
    private $repository;
    /**
     * @var ClientValidator
     */
    private $validator;

    /**
     * @param ClientInterface $repository
     * @param ClientValidator $validator
     */
    public function __construct(ClientInterface $repository, ClientValidator $validator){

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