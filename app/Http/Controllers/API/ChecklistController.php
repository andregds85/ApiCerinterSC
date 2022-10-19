<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Validator;
use App\Models\Checklist;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use DB;

use App\Models\Relacao;
use App\Http\Resources\Relacao as RelacaoResource;
use App\Http\Resources\Checklist as ChecklistResource;
   
class ChecklistController extends BaseController
{

       public function index()
    {
        echo  $authUser = Auth::user();  
        echo  $id = $authUser->id; 
        $relacao = Relacao::all(); 

        $Relacao1=Relacao::where('model_id',$id)->get(); 
        $Relacao1;

        
       
        $checks = Checklist::all();
        return $this->sendResponse(ChecklistResource::collection($checks), 'Todos os CheckList Listados.');
    }
   
    public function show($id)
    {
        return Checklist::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
         $list = Checklist::findOrFail($id);
         $list->update($request->all());
    }

    public function store(Request $request)
     {
        Checklist::create($request->all());
      /*echo "CheckList inserido com Sucesso"; */
     }

    public function destroy($id)
    {
         $list = Checklist::findOrFail($id);
         $list->delete();
    }
    
}