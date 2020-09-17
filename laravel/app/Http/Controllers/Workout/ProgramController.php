<?php

namespace App\Http\Controllers\Workout;

use App\Models\Backend\Workout\Program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Workout\ProgramRepository;

class ProgramController extends Controller
{
    /**
     * @var ProgramRepository $programRepository
     */
    protected $programRepository;

    /**
     * ProgramController constructor.
     * @param ProgramRepository $programRepository
     */
    public function __construct(ProgramRepository $programRepository)
    {
        $this->programRepository = $programRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('modules.workout.programs.index')
            ->withTable($this->programRepository->getWithTable());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modules.workout.programs.crud.create')
            ->withDifficulties(Program::difficulties);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->programRepository->store($request->all());

        return redirect()->route('workout.program.index');
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
     * Show the program calendar for editing.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editCalendar($id)
    {
        return view('modules.workout.programs.calendar.index')
            ->withProgram($this->programRepository->find($id));
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
        if($request->ajax()){
            dd("ajax with id: $id");
        }

        dd($id);
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
