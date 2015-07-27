<?php

namespace Curso\Http\Controllers;

use Curso\Interfaces\ProjectInterface;
use Curso\Services\ProjectService;
use Illuminate\Http\Request;

use Curso\Http\Requests;
use Curso\Http\Controllers\Controller;

class ProjectController extends Controller
{

    /**
     * @var ProjectInterface
     */
    private $repository;
    /**
     * @var ProjectService
     */
    private $service;

    /**
     * @param ProjectInterface $repository
     * @param ProjectService $service
     */
    public function __construct(ProjectInterface $repository, ProjectService $service){
        $this->repository = $repository;
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return $this->repository->all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        return $this->service->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return $this->repository->find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        return $this->service->update($request->all(), $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        return $this->repository->find($id)->delete();
    }
}
