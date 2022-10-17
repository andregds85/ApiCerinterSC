<?php
    
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Validator;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Support\Facades\Auth;
use DB;

use App\Http\Resources\Role as RoleResource;

class RoleController extends BaseController
{
  public function index(Request $request)
    {
        $roles = Role::all();
        return $this->sendResponse(RoleResource::collection($roles), 'Todos os Grupos Listados.');
   
    }
}