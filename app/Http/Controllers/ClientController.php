<?php

namespace Curso\Http\Controllers;

use Curso\Interfaces\ClientInterface;
use Curso\Services\ClientService;
use Illuminate\Http\Request;

use Curso\Http\Requests;
use Curso\Http\Controllers\Controller;

class ClientController extends Controller
{

    /**
     * @var ClientInterface
     */
    private $repository;

    /**
     * @var ClientService
     */
    private $service;

    /**
     * @param ClientInterface $repository
     * @param ClientService $service
     */
    public function __construct(ClientInterface $repository, ClientService $service){
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
