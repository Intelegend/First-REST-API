<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NotebookRequest;
use App\Models\Notebook;
use Illuminate\Support\Facades\DB;

class NotebookController extends Controller
{
    public function __construct(Notebook $model, NotebookRequest $request)
    {
        $this->model = $model;
    }
    /**
     * @param FreelancerRequest $request
     * @return mixed
     */
    public function createRecord(NotebookRequest $request)
    {

        return $this->create($request);
    }

    /**
     * @param int $entityId
     * @param FreelancerRequest $request
     * @return mixed
     */
    public function updateRecord(int $entityId, NotebookRequest $request)
    {

        return parent::update($entityId, $request);
    }
}
