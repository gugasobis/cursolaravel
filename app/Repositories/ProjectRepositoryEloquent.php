<?php
/**
 * Created by PhpStorm.
 * User: Guga
 * Date: 27/07/2015
 * Time: 10:10
 */

namespace Curso\Repositories;


use Curso\Interfaces\ProjectInterface;
use Curso\Models\Project;
use Prettus\Repository\Eloquent\BaseRepository;

class ProjectRepositoryEloquent extends BaseRepository implements ProjectInterface {

    public function model(){
        return Project::class;
    }

}