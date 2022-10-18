<?php
    
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Relacao;
use App\Http\Resources\Relacao as RelacaoResource;


class RelacaoController extends BaseController
{
  public function index(Request $request)
    {
        $relacao = Relacao::all();
        return $this->sendResponse(RelacaoResource::collection($relacao), 'Todos os Grupos Listados.');
   
    }
}

