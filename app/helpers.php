<?php

use Carbon\Carbon;
use App\Models\Comment;
use App\Models\ImageLike;
use App\Models\Image_comment;
use Illuminate\Support\Facades\Auth;

if (! function_exists('getCountComent')) {

    function getCountComent($id){
       $count = Image_comment::where('image_id', $id)->get()->count();
        return $count;
    }

}

if (! function_exists('getCheckLike')) {
    function getCheckLike($id){
        $userID = Auth::user()->id;
        $result = ImageLike::where('image_id',  $id)->where('user_id', $userID)->get()->count();

        if($result > 0){
            return "fa-heart";
        }else{
            return "fa-heart-o";
        }
    }
}

if (! function_exists('getFirstComentary')) {
    function getFirstComentary($idImage){
        try {
            $comentID =  Image_comment::where('image_id', $idImage)->get();

            $comentFirst = Comment::find($comentID[0]->id);

            $desc = $comentFirst->desc;

            return $desc;

         } catch (\Throwable $th) {
            return $th;
         }
    }
}

if (! function_exists('getDateEvent')) {

    function getDateEvent(){
         // Asiganmos los grupos
         $today = Carbon::now()->format('Y-m-d');

         if($today <= '2022-02-04')
         {
             $grupo = 4;

         } else if($today <= '2022-02-05')
         {
             $grupo = 5;

         } else if($today <= '2022-02-07')
         {
             $grupo = 7;

         }else if($today <= '2022-02-09')
         {
             $grupo = 9;

         } else{

             $grupo = 10;
         }

         return $grupo;
    }

}

if (! function_exists('getSerarhName')) {
        function getSerarhName($id = null){

            switch ($id) {
                case 4:
                    return "Líderes de agencias y CEAS";
                break;
                case 5:
                    return "División Centro CI , División Oriente CG";
                break;

                case 7:
                    return "Division Nor-Oriente CI , División Norte CG";
                break;

                case 9:
                    return "Division Sur CI , División sur CG";
                break;
                case 10:
                    return "Ceas";
                break;

                default:
                    return "No hay datos";
                break;
            }


    }
}
