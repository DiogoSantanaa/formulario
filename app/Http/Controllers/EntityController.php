<?php

namespace App\Http\Controllers;

use App\Entity;
use Illuminate\Http\Request;
use App\Http\Requests\EntityRequest;

class EntityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('entity.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dd(auth()->user());
        return view('entity.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EntityRequest $request)
    {


        $dataForm = $request->all();
        $dataForm['active'] = filter_var($dataForm['active'], FILTER_VALIDATE_BOOLEAN);
        $dataForm['access_application'] = filter_var($dataForm['access_application'], FILTER_VALIDATE_BOOLEAN);

        $dataForm['created_by'] = auth()->user()->id;
        $dataForm['updated_by'] = auth()->user()->id;

        $entity = Entity::create($dataForm);

        return redirect()->route('entity.show', $entity->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entity  $entity
     * @return \Illuminate\Http\Response
     */
    public function show(Entity $entity)
    {
        $entity->typeCompanyPreview = self::previewTypeCompany($entity->type_company);

        $data = [
            'entity' => $entity
        ];

        return view('entity.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entity  $entity
     * @return \Illuminate\Http\Response
     */
    public function edit(Entity $entity)
    {
        $entity->typeCompanyPreview = self::previewTypeCompany($entity->type_company);


        return view('entity.edit', compact('entity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entity  $entity
     * @return \Illuminate\Http\Response
     */
    public function update(EntityRequest $request, Entity $entity)
    {

        $entity->name = $request->name;
        $entity->social_denomination = $request->input('social_denomination');
        $entity->nif = $request->input('nif');
        $entity->type_company = $request->input('type_company');
        $entity->access_application = filter_var($request->input('access_application'), FILTER_VALIDATE_BOOLEAN);
        $entity->active = filter_var($request->input('ative'), FILTER_VALIDATE_BOOLEAN);
        $entity->updated_by = auth()->user()->id;

        $entity->update();

        return redirect()->route('entity.show', $entity->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entity  $entity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entity $entity)
    {
        $entity->deleted_by = auth()->user()->id;
        $entity->update();
        $entity->delete();

        return redirect()->route('entity.create');
    }

    protected function previewTypeCompany($typeCompany)
    {
        switch ($typeCompany) {
            case 'fornecedor':
                $typeCompanyPreview = 'Fornecedor';
                break;
            case 'transportador':
                $typeCompanyPreview = 'Transportador';
                break;
            case 'cliente':
                $typeCompanyPreview = 'Cliente';
                break;
            default:
                $typeCompanyPreview = '';
        }
        return $typeCompanyPreview;
    }
}
