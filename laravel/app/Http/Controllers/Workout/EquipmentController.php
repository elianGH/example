<?php

namespace App\Http\Controllers\Workout;

use App\Models\Kernel\Anatomy\BodyPart;
use App\Models\Kernel\Anatomy\Muscle;
use App\Models\Kernel\Workout\Equipment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Workout\EquipmentRepository;

class EquipmentController extends Controller
{
    /**
     * @var EquipmentRepository $equipmentRepository
     */
    protected $equipmentRepository;

    /**
     * ProgramController constructor.
     * @param EquipmentRepository $equipmentRepository
     */
    public function __construct(EquipmentRepository $equipmentRepository)
    {
        $this->equipmentRepository = $equipmentRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('modules.workout.equipments.index')
            ->withTable($this->equipmentRepository->getWithTable());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modules.workout.equipments.crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->equipmentRepository->store($request->all());

        return redirect()->route('workout.equipment.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Display the specified resource in modal window.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showInModal($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
