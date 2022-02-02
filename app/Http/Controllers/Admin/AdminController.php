<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $userCount = User::all()->count();


        $acountUser = USer::all()->count();

        return view('admin.index', compact('acountUser'));
    }


    public function getTable($group = null){

        if($group == 0){
            $user =  User::where('group', '!=', $group)->get();
        }else{
            $user = User::where('group', $group)->get();
        }


        // 'name', 'email', 'password','dni', 'agency','status','line','role','group'
        return Datatables($user)
            ->addColumn('id', function ($val) {
                return $val->id;
            })
            ->addColumn('name', function ($val) {
                return $val->name;
            })
            ->addColumn('agency', function ($val) {
                return $val->agency;
            })
            ->addColumn('group', function ($val) {
                return  getSerarhName($val->group);
            })
            ->addColumn('line', function ($val) {

                if($val->line){
                    $lin = "<span class='badge badge-pill badge-success'>En Linea</span>";
                }else{
                    $lin = "<span class='badge badge-pill badge-danger'>No conectado</span>";
                }
                return $lin;
            })
            ->addColumn('status', function ($val) {

                if($val->status == 1){
                    $status = "<span class='badge badge-pill badge-primary'>Activa</span>";
                }else{
                    $status = "<span class='badge badge-pill badge-warning'>Inactiva</span>";
                }
                return $status;
            })

            ->addColumn('action', function ($val){
                return "";
            })
            ->rawColumns(['action','line','status'])

            ->make(true);
    }

    public function getCountUser(Request $request) {

        if($request->ajax()){

            try {
                $userCount = User::all()->count();
            } catch (\Throwable $th) {
                throw $th;
            }

            return response()->json($userCount, 200);

        }
    }

    public function getCountUserLine(Request $request) {

        if($request->ajax()){

            try {
                $userLine = User::where('line', 1)->get()->count();
            } catch (\Throwable $th) {
                throw $th;
            }

            return response()->json( $userLine , 200);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
