<?php

namespace App\Http\Controllers;

use App\Models\Inicio;
use App\Models\Produto;
use App\Models\Imagem;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Validator;
use Image;
use DB;

class InicioController extends Controller{

    public function index(){

       // $Inicios = Inicio::orderBy('id', 'desc')->get();
        $Inicios = DB::table('inicios')
         ->join('imagems','inicios.imagem_id','imagems.id')
         ->select('imagems.imagem_padrao','imagems.imagem_mini','imagems.imagem_um','imagems.imagem_dois','inicios.*')
         ->where('inicios.status',0)
        ->orderBy('inicios.id','DESC')
        ->get();
        return view('admin.inicio.index',compact('Inicios'));

    }

    public function accaoini(Request $request,$id){

        $pegaartigo = Inicio::find($id);
         if ($pegaartigo->status ==0 ) {
            $pegaartigo->update(['status' => 1]);
            return redirect()->route('inicio.index')->withSuccessMessage('inicio Desativado com êxito');

         } else {
             $pegaartigo->update(['status' => 0]);
             return redirect()->route('inicio.index')->withSuccessMessage('inicio Activado com êxito');
         }

      }

    public function produtoinicios(){

        $produtoinicios = DB::table('produtos')
         ->join('imagems','produtos.imagem_id','imagems.id')
         ->select('imagems.imagem_padrao','imagems.imagem_mini','imagems.imagem_um','imagems.imagem_dois','produtos.*')
         ->where('produtos.status',0)
        ->orderBy('produtos.id','DESC')
        ->get();

               // return response()->json($produtoinicios);

      //  $produtoinicios = Produto::where('status',0)->orderBy('id','desc')->get(); // para vue js
       return $produtoinicios;
    }


    public function priseccao(){
        $inicios = DB::table('inicios')
         ->join('imagems','inicios.imagem_id','imagems.id')
         ->select('imagems.imagem_padrao','imagems.imagem_mini','inicios.*')
         ->where('inicios.status',0)
         ->where('inicios.numero_setion',1)
        ->orderBy('inicios.id','DESC')
        ->first();
      //  $inicios = Inicio::where('numero_setion',1)->first(); // para vue js
        return $inicios;
    }


    public function seguseccao(){
        $sedois = DB::table('inicios')
        ->join('imagems','inicios.imagem_id','imagems.id')
        ->select('imagems.imagem_padrao','imagems.imagem_mini','inicios.*')
        ->where('inicios.status',0)
        ->where('inicios.numero_setion',2)
       ->orderBy('inicios.id','DESC')
       ->first();
     //  $inicios = Inicio::where('numero_setion',1)->first(); // para vue js
      //  $sedois = Inicio::where('numero_setion',2)->orderBy('id','asc')->get(); // para vue js
        return $sedois;
    }

    public function priprojecto(){

        $priprojecto = DB::table('inicios')
         ->join('imagems','inicios.imagem_id','imagems.id')
         ->select('imagems.imagem_padrao','imagems.imagem_mini','inicios.*')
         ->where('inicios.status',0)
         ->where('inicios.numero_setion',3)
        ->orderBy('inicios.id','DESC')
        ->first();
       //  $inicios = Inicio::where('numero_setion',1)->first(); // para vue js
       //$priprojecto = Projecto::where('numero_setion',1)->first(); // para vue js
    return $priprojecto;
}

    public function detalhe($id){
        $detalhe = Inicio::find($id); // para vue js
        return  response()->json($detalhe);
    }


    public function create(){
       return view('admin.inicio.create');
    }


    public function store(Request $request){

       $validacao = $request->validate(
           [
           'titulo' => 'required',
           'descricao' => 'required',
           'seccao'=>'required',
           ],

           [
               'titulo.required'=>' O titulo é obrigatório ',
               'descricao.required'=>' A descrição é obrigatório ',
               'seccao.required'=>' A secção é obrigatório',

            ]

       );


       $titulo = $request->titulo;
       $icone = $request->icone;
       $descricao = $request->descricao;
       $seccao = $request->seccao;

                if (!empty($request->file('imagem_produto') ) ) {



               if ($seccao==1) {

                           // IMAGEM 1
            $img_um = $request->file('imagem_produto');
            $nome_500_um = hexdec(uniqid()).'.'.$img_um->getClientOriginalExtension();
            Image::make($img_um)->save('levelschool/img/produtos/500/500v712_'.$nome_500_um); //->resize(500,712)
            $nm_500_um = 'img/produtos/500/500v712_'.$nome_500_um;

            $nome_100_um = hexdec(uniqid()).'.'.$img_um->getClientOriginalExtension();
            Image::make($img_um)->resize(100,60)->save('levelschool/img/produtos/100/100v60_'.$nome_100_um);
            $nm_100_um = 'img/produtos/100/100v60_'.$nome_100_um;



               } elseif ($seccao==2) {


                           // IMAGEM 2
                           $img_um = $request->file('imagem_produto');
                           $nome_500_um = hexdec(uniqid()).'.'.$img_um->getClientOriginalExtension();
                           Image::make($img_um)->resize(670,405)->save('levelschool/img/produtos/500/500v712_'.$nome_500_um); //->resize(670,405)
                           $nm_500_um = 'img/produtos/500/500v712_'.$nome_500_um;

                           $nome_100_um = hexdec(uniqid()).'.'.$img_um->getClientOriginalExtension();
                           Image::make($img_um)->resize(100,60)->save('levelschool/img/produtos/100/100v60_'.$nome_100_um);
                           $nm_100_um = 'img/produtos/100/100v60_'.$nome_100_um;


                        } elseif ($seccao==3) {

                           // IMAGEM 3
                           $img_um = $request->file('imagem_produto');
                           $nome_500_um = hexdec(uniqid()).'.'.$img_um->getClientOriginalExtension();
                           Image::make($img_um)->resize(700,415)->save('levelschool/img/produtos/500/500v712_'.$nome_500_um); // ->resize(700,415)
                           $nm_500_um = 'img/produtos/500/500v712_'.$nome_500_um;

                           $nome_100_um = hexdec(uniqid()).'.'.$img_um->getClientOriginalExtension();
                           Image::make($img_um)->resize(100,60)->save('levelschool/img/produtos/100/100v60_'.$nome_100_um);
                           $nm_100_um = 'img/produtos/100/100v60_'.$nome_100_um;


               }




            }else {
            $nm_500_um ='';
            $nm_100_um ='';
            }



            $Imageprod =Imagem::create([
                'imagem_padrao'=>$nm_500_um,
                'imagem_mini'=>$nm_100_um,
                'status'=>0,
            ]);

            if ($Imageprod) {

                $pegaiamgem = Imagem::orderBy('id','desc')->first();

          $PageInicio = Inicio::create([
            'imagem_id'=>$pegaiamgem->id,
            'titulo'=>$titulo,
            'icone'=>$icone,
            'descricao'=>$descricao,
            'numero_setion'=>$seccao,
            'status'=>0,
         ]);

            }

           return redirect()->route('inicio.index')->withSuccessMessage('Inicio postado com êxito');


        }


    public function show(Inicio $inicio){
        //
    }

    public function edit($id){

        $Inicio = Inicio::find($id);
        return view('admin.inicio.edit',compact('Inicio'));

    }


    public function update(Request $request, $id){

        $pegaInicio = Inicio::find($id);
        $pegaIMG = Imagem::where('id',$pegaInicio->imagem_id)->first();

            /*$pegaInicio = DB::table('inicios')
            ->where('inicios.id',$id)
            ->join('imagems','inicios.imagem_id','imagems.id')
            ->select('imagems.imagem_padrao','imagems.imagem_mini')
            ->first(); */

            // $Inicio = Inicio::find($id);
            $titulo = $pegaInicio->titulo;
            $descricao = $pegaInicio->descricao;
            $numero_setion = $pegaInicio->numero_setion;
            $nm_500_um = $pegaIMG->imagem_padrao;
            $nm_100_um = $pegaIMG->imagem_mini;
            $data = $request->all();


            $seccao = $request->seccao;
            $data['numero_setion'] = $seccao;


            //  $pegaproduto = Produto::where('id',$id)->first();

            if (!empty($request->file('imagem_produto') ) ) {

            if (unlink('levelschool/'.$pegaIMG->imagem_padrao) && unlink('levelschool/'.$pegaIMG->imagem_mini)) {

            $img_um = $request->file('imagem_produto');
            $nome_500_um = hexdec(uniqid()).'.'.$img_um->getClientOriginalExtension();
            Image::make($img_um)->save('levelschool/img/produtos/500/500v712_'.$nome_500_um); //->resize(500,712)
            $nm_500_um = 'img/produtos/500/500v712_'.$nome_500_um;
            $data['imagem_padrao'] = $nm_500_um;

            $nome_100_um = hexdec(uniqid()).'.'.$img_um->getClientOriginalExtension();
            Image::make($img_um)->resize(100,60)->save('levelschool/img/produtos/100/100v60_'.$nome_100_um);
            $nm_100_um = 'img/produtos/100/100v60_'.$nome_100_um;
            $data['imagem_mini'] = $nm_100_um;

            }else {
            $nm_500_um ='';
            $nm_100_um ='';

            }

            }

            if ($pegaInicio->update($data) && $pegaIMG->update($data) ) {
                return redirect()->route('inicio.index')->withSuccessMessage('Inicio atualizado com êxito');
            }

         }

        public function destroy($id){

        $idImagem = Inicio::find($id);

        $inicio = DB::table('inicios')
        ->where('inicios.id',$id)
        ->join('imagems','inicios.imagem_id','imagems.id')
        ->select('imagems.imagem_padrao','imagems.imagem_mini')
       ->first();

        //$inicio = DB::table('inicios')->where('id',$id)->first();
        $imgPadrao = $inicio->imagem_padrao;
        $imgMini = $inicio->imagem_mini;

        if ($imgPadrao && $imgMini) {
         // unlink($photo);
          unlink('levelschool/'.$inicio->imagem_padrao);
          unlink('levelschool/'.$inicio->imagem_mini);
          DB::table('inicios')->where('id',$id)->delete();
          DB::table('imagems')->where('id',$idImagem->imagem_id)->delete();

        }else{
         DB::table('inicios')->where('id',$id)->delete();
        }

        return redirect()->route('inicio.index')->withSuccessMessage('Excluido com êxito');

    }
}
