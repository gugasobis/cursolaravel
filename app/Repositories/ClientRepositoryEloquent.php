<?php
/**
 * Created by PhpStorm.
 * User: Guga
 * Date: 27/07/2015
 * Time: 10:10
 */

namespace Curso\Repositories;


use Curso\Interfaces\ClientInterface;
use Curso\Models\Client;
use Prettus\Repository\Eloquent\BaseRepository;

class ClientRepositoryEloquent extends BaseRepository implements ClientInterface{

    public function model(){
        return Client::class;
    }

}