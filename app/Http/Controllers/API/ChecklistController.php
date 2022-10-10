<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Validator;
use App\Models\Checklist;
use App\Http\Resources\Checklist as ChecklistResource;

   
class ChecklistController extends BaseController
{
    public function index()
    {
        $checks = Checklist::all();
        return $this->sendResponse(ChecklistResource::collection($checks), 'Todos os CheckList Listados.');
    }

   


    
}
