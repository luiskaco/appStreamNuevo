<?php

namespace App\Http\Controllers\Image;

use App\Models\Images;
use App\Models\Comment;
use App\Models\ImageLike;
use Illuminate\Http\Request;
use App\Models\Image_comment;
use PhpParser\Node\Stmt\TryCatch;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = null)
    {
        $resultImage = Images::orderBy('created_at', 'desc')->paginate();
        return view('muro.index', compact('resultImage'));
    }

    public function eventID($id){

        $resultImage = Images::where('group', $id)->orderBy('created_at', 'desc')->paginate();



        return view('muro.index', compact('resultImage'));
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

       if($request->ajax()){

                $data = request()->validate([
                    'desc' => 'required|min:6',
                    'imagen' => 'required'
                ]);

                $userID = Auth::user()->id;

            try{


               $image_id = Images::create([
                    'url' => $data['imagen'],
                    'status' => 1,
                  'user_id' => $userID,
                    'group' => getDateEvent()
                ]);

                $comment_id = Comment::create(['desc' => $request->desc, 'user_id' =>  $userID]);

                Image_comment::create(['image_id' => $image_id->id, 'comment_id' => $comment_id->id]);

                return response()->json(["msg" => "Se ha guardado satisfactoriamente", "valid"=> false], 200);

            } catch (\Exception $e) {

                return response()->json(["msg" =>  "Tenemos problema para procesar sus datos", "valid"=> false], 401);

            }


            return $request->all();

       }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Images  $images
     * @return \Illuminate\Http\Response
     */
    public function show(Images $images)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Images  $images
     * @return \Illuminate\Http\Response
     */
    public function edit(Images $images)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Images  $images
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Images $images)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Images  $images
     * @return \Illuminate\Http\Response
     */
    public function destroy(Images $images)
    {
        //
    }

    /***  CONTENTEDOR CARD  ***/
    public function cardList(Request $request){
        $resultImage = Images::orderBy('created_at', 'desc')->paginate();

            $html='';

            foreach($resultImage as $value){

                // return response()->json($value);

                 $html.="<div class='content'>
                        <img loading='lazy' src='".Storage::url('fotos/'.$value->url)."' alt='imagen-".$value->id."' class='sizeTemporal'>
                        <div class=''>
                            <input type='checkbox' name='like' class='btnCheckLike' data-id='".$value->like."'>
                            <span id='count-".$value->id."'>$value->like</span> Me gusta
                        </div>
                        <span class=''>".$value->created_at->format('Y/m/d h:i')."</span>
                        <h3>".$value->user_link->name."<h3>
                        <form class='form'>
                            <textarea  name='desc'
                                rows='1'
                                name='comentarios'
                                required value=''
                                id='input-".$value->id."'
                                ></textarea>
                            <p class='error-".$value->id." errorInput'>No puede quedar vacio</p>
                            <button type='submit'
                                    class='btn btn-primary btnClickComment'
                                    data-id='".$value->id."'>
                                ADD
                            </button>
                        </form>
                        <div>
                            <a class='linkComentario btnSearchComment'
                                data-toggle='modal'
                                data-target='#commentId'
                                data-id='".$value->id."'
                                >Ver los COUNT comentarios
                            </a>
                        </div>
                    </div>";
            }

        return response()->json($html, 200);
    }


    public function likeStore(Request $request){

        if($request->ajax()){

            $userID = Auth::user()->id;

            $result = ImageLike::where('image_id',  $request->id)->where('user_id', $userID)->get();

            if(count($result)>0){
                $flag = 1;

                ImageLike::where('image_id',  $request->id)->where('user_id', $userID)->delete();
                $image = Images::find($request->id);
                $image->like = $image->like - 1;
                $image->save();

            }else{
                $flag = 0;
                ImageLike::create(['image_id' =>$request->id, 'user_id' =>$userID ]);
                $image = Images::find($request->id);
                $image->like = $image->like + 1;
                $image->save();

            }


            return response()->json(['like'=> $image->like, $flag], 200);
        }

    }

    public function commentQuery(Request $request){

        if($request->all()){

            $commetResult= [];

            $result = Image_comment::where('image_id', $request->id)->get();

            foreach($result as $value){
                $commetResult[] = Comment::where('id', $value->comment_id)->with('user_link')->get();
            }

            if(count($commetResult)>0){
                return response()->json([ $commetResult, "error" => false], 200);
            }else{
                return response()->json(["error" => true], 401);
            }


        }

    }

    public function commentStore(Request $request){

        if($request->ajax()){

            try {
                $userID = Auth::user()->id;

                $commentId = Comment::create(['desc' => $request->value, 'user_id' =>  $userID]);

                Image_comment::create(['image_id' =>  $request->id, 'comment_id' => $commentId->id]);

                $commentCount = Image_comment::where('image_id', $request->id)->get()->count();

                return response()->json(['commentary' => $commentCount, 'error' => false], 200);

            } catch (\Throwable $th) {
                return response()->json(['error' => true], 500);
            }

        }

    }


    /** MANEJO DE  ***/
    public function uploadPhoto(Request $request)
    {
        if($request->ajax()){
            try{
                                /** CODIGO INTERESANTE */
                    $imagen = $request->file('file');
                    //$imagen->extension();
                    // Str::uuid().'-'.

                    $nombreImagen = time() . '.'. $imagen->extension();

                    // Meotod que me gusta
                    // $nombreImagen = $imagen->store('vacantes', 'public');

                    // Metodo del profe
                    $imagen->move(public_path('storage/fotos'), $nombreImagen );

                    return response()->json(['correcto' => $nombreImagen]);

            } catch (\Exception $e) {
                return response()->json(["msg" =>  "Tenemos problema para procesar sus datos"], 401);
            }



        }
    }

        // Borrar imagen via ajax
    public function drophoto(Request $request){
        if($request->ajax()) {
            $imagen = $request->get('imagen');

            if( File::exists( 'storage/fotos/' . $imagen ) ) {
                File::delete( 'storage/fotos/' . $imagen );
            }

            return response()->json([
                                    'msg'=>'Su foto fue eliminada correctamente',
                                    'data' => $imagen],
                                    200);
        }
    }
}
