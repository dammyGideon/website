<?php

namespace App\Http\Controllers\Role;

use App\Http\Controllers\Controller;
use App\Http\Requests\Role\StoreRoleRequest;
 use App\Http\Resources\RoleResource;
use App\Models\Role;
use APP\Repository\RoleRepository;
use Illuminate\Http\Request;

class Roles_Permissions extends Controller
{

    public function index()
    {
        $response = RoleResource::collection(Role::all());
        return $response;
    }

    public function store(StoreRoleRequest $request, RoleRepository $roleRepository)
    {
        $response=$roleRepository->store($request);
        return $response;
    }



    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
