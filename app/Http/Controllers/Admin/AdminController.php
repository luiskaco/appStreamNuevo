<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\FromView;
use App\Models\Images;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

// Excel
class InvoicesExport implements FromView
{
    public $data;

    public function __construct($data){
      $this->data = $data;
    }

    public function view(): View
    {
        return view('admin.excel', [
            'Users' => $this->data,
        ]);
    }
}



class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /** USUARIO  */
    public function index()
    {
        return view('admin.index');
    }


    public function excelUser (Request $request) {
        $value = $request->groupExcel;

        if($value == 0){
            $user =  User::where('group', '!=', $value)->get();
        }else{
            $user = User::where('group', $value)->get();
        }

        if(!count($user) > 0){
            return  redirect()->route('admin.index');
        }else{
            return Excel::download(new InvoicesExport($user), 'Encuentros2022.xlsx');
        }

    }


    public function getTable(Request $request,  $group = null){


        if($request->ajax()){


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
                        return ucfirst(strtolower($val->name));
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

                        if($val->status){
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

    public function indexUploadVideo(){
        return view('admin.video.index');
    }



    public function indexUploadImage(){
        return view('admin.image.index');
    }
    

    public function getTableListImage(Request $request){

        if($request->ajax()){

            $images = Images::with('user_link')->get();

            return Datatables($images)

            ->addColumn('id2', function ($val) {
                return $val->id;
            })
            ->addColumn('name', function ($val) {
                return $val->user_link->name;
            })
            ->addColumn('dni', function ($val) {
                return $val->user_link->dni;
            })
            ->addColumn('group2', function ($val) {
                return getSerarhName($val->group);
            })
            ->addColumn('path', function ($val) {
                return "<img src='".Storage::url('fotos/'.$val->url)."' alt='".$val->name."'  width='100%' height='60px;' />";
            
            })
            ->addColumn('action', function ($val){
                return "<span class='btn btn-outline-danger btn-sm' data-id='".$val->id."' id='listID' >Eliminar</span>";

            })
            ->rawColumns(['action','path'])

            ->make(true);
         }
    }


    public function deleListImage(Request $request){

        if($request->ajax()){

            try {
                $img = Images::find($request->id);

                // Eliminar del servidor
                if( File::exists( 'storage/fotos/' . trim($img->url) ) ) {
                    File::delete( 'storage/fotos/' . trim($img->url) );
                }
                // Elimianr de la DB
                $img->delete();
    
                return response()->json( "Correcto", 200);
                
            } catch (\Throwable $th) {
                throw $th;
            }
           
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
