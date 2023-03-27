<?php

namespace App\Http\Controllers;

use App\Models\Sobre;
use App\Models\Imagem;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Validator;
use Image;
use DB;
use Illuminate\Http\Request;

class SobreController extends Controller {

    public function index(){

       // $artigos = Sobre::orderBy('id', 'desc')->get();
        //return view('admin.sobre.index',compact('artigos'));

        $artigos = DB::table('sobres')
        ->join('imagems','sobres.imagem_id','imagems.id')
        ->select('imagems.imagem_padrao','imagems.imagem_mini','imagems.imagem_um','imagems.imagem_dois','sobres.*')
        ->where('sobres.status',0)
       ->orderBy('sobres.id','DESC')
       ->get();

        return view('admin.sobre.index',compact('artigos'));
    }


    public function sobrepri(){
        $sobrepri = DB::table('sobres')
        ->join('imagems','sobres.imagem_id','imagems.id')
        ->select('imagems.imagem_padrao','imagems.imagem_mini','sobres.*')
        ->where('sobres.status',0)
        ->where('sobres.numero_setion',1)
        ->first();
        //  $sobres = Inicio::where('numero_setion',1)->first(); // para vue js
        return $sobrepri;
    }



        public function sobressegu(){
            $sobressegu = DB::table('sobres')
            ->join('imagems','sobres.imagem_id','imagems.id')
            ->select('imagems.imagem_padrao','imagems.imagem_mini','sobres.*')
            ->where('sobres.status',0)
            ->where('sobres.numero_setion',2)
            ->first();
            //  $sobres = Inicio::where('numero_setion',1)->first(); // para vue js
            return $sobressegu;
        }

        public function sobrestres(){
            $sobrestres = DB::table('sobres')
            ->join('imagems','sobres.imagem_id','imagems.id')
            ->select('imagems.imagem_padrao','imagems.imagem_mini','sobres.*')
            ->where('sobres.status',0)
            ->where('sobres.numero_setion',3)
            ->orderBy('sobres.id','DESC')
            ->get();
            //  $sobres = Inicio::where('numero_setion',1)->first(); // para vue js
             return $sobrestres;
        }

        public function pegaid($id){
            $pegaid = Sobre::find($id);
            //$sobres = Inicio::where('numero_setion',1)->first(); // para vue js
            return $pegaid;

        }

        public function create(){
            return view('admin.sobre.create');
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
                                Image::make($img_um)->resize(570,415)->save('levelschool/img/produtos/padrao/500v712_'.$nome_500_um); //->resize(570,415)
                                $nm_500_um = 'img/produtos/padrao/500v712_'.$nome_500_um;

                                $nome_100_um = hexdec(uniqid()).'.'.$img_um->getClientOriginalExtension();
                                Image::make($img_um)->resize(100,60)->save('levelschool/img/produtos/100/100v60_'.$nome_100_um);
                                $nm_100_um = 'img/produtos/100/100v60_'.$nome_100_um;

                                } elseif ($seccao==2) {

                                // IMAGEM 2
                                $img_um = $request->file('imagem_produto');
                                $nome_500_um = hexdec(uniqid()).'.'.$img_um->getClientOriginalExtension();
                                Image::make($img_um)->save('levelschool/img/produtos/padrao/500v712_'.$nome_500_um); //->resize(709,669)
                                $nm_500_um = 'img/produtos/padrao/500v712_'.$nome_500_um;

                                $nome_100_um = hexdec(uniqid()).'.'.$img_um->getClientOriginalExtension();
                                Image::make($img_um)->resize(100,60)->save('levelschool/img/produtos/100/100v60_'.$nome_100_um);
                                $nm_100_um = 'img/produtos/100/100v60_'.$nome_100_um;

                                } elseif ($seccao==4) {

                                    // IMAGEM 3
                                    $img_um = $request->file('imagem_produto');
                                    $nome_500_um = hexdec(uniqid()).'.'.$img_um->getClientOriginalExtension();
                                    Image::make($img_um)->save('levelschool/img/produtos/padrao/500v712_'.$nome_500_um); // ->resize(470,580)
                                    $nm_500_um = 'img/produtos/padrao/500v712_'.$nome_500_um;

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

            $PageInicio = Sobre::create([
                'imagem_id'=>$pegaiamgem->id,
                'titulo'=>$titulo,
                'icone'=>$icone,
                'descricao'=>$descricao,
                'numero_setion'=>$seccao,
                'status'=>0,
            ]);

                }

                return redirect()->route('sobre.index')->withSuccessMessage('sobre postado com êxito');
        }

        public function show(Sobre $sobre){
        }

        public function edit($id){
            $sobre = sobre::find($id);
            return view('admin.sobre.edit',compact('sobre'));
        }

       public function update(Request $request,$id){

        $pegaInicio = Sobre::find($id);
        $pegaIMG = Imagem::where('id',$pegaInicio->imagem_id)->first();

            /*$pegaInicio = DB::table('inicios')
            ->where('inicios.id',$id)
            ->join('imagems','inicios.imagem_id','imagems.id')
            ->select('imagems.imagem_padrao','imagems.imagem_mini')
            ->first();
             */

            // $Inicio = Inicio::find($id);
            $titulo = $pegaInicio->titulo;
            $descricao = $pegaInicio->descricao;
            $numero_setion = $pegaInicio->numero_setion;
            $nm_500_um = $pegaIMG->imagem_padrao;
            $nm_100_um = $pegaIMG->imagem_mini;
            $data = $request->all();

            $seccao = $request->seccao;
            $data['numero_setion'] = $seccao;

            // $pegaproduto = Produto::where('id',$id)->first();

        if (!empty($request->file('imagem_produto') ) ) {


            if (unlink('levelschool/'.$pegaIMG->imagem_padrao) && unlink('levelschool/'.$pegaIMG->imagem_mini)) {


                        if ($seccao==1) {

                            // IMAGEM 1
                                $img_um = $request->file('imagem_produto');
                                $nome_500_um = hexdec(uniqid()).'.'.$img_um->getClientOriginalExtension();
                                Image::make($img_um)->resize(570,415)->save('levelschool/img/produtos/padrao/500v712_'.$nome_500_um); //->resize(570,415)
                                $nm_500_um = 'img/produtos/padrao/500v712_'.$nome_500_um;
                                $data['imagem_padrao'] = $nm_500_um;

                                $nome_100_um = hexdec(uniqid()).'.'.$img_um->getClientOriginalExtension();
                                Image::make($img_um)->resize(100,60)->save('levelschool/img/produtos/100/100v60_'.$nome_100_um);
                                $nm_100_um = 'img/produtos/100/100v60_'.$nome_100_um;

                                $data['imagem_mini'] = $nm_100_um;


                } elseif ($seccao==2) {


                            // IMAGEM 2
                            $img_um = $request->file('imagem_produto');
                            $nome_500_um = hexdec(uniqid()).'.'.$img_um->getClientOriginalExtension();
                            Image::make($img_um)->save('levelschool/img/produtos/padrao/500v712_'.$nome_500_um); //->resize(709,669)
                            $nm_500_um = 'img/produtos/padrao/500v712_'.$nome_500_um;
                            $data['imagem_padrao'] = $nm_500_um;

                            $nome_100_um = hexdec(uniqid()).'.'.$img_um->getClientOriginalExtension();
                            Image::make($img_um)->resize(100,60)->save('levelschool/img/produtos/100/100v60_'.$nome_100_um);
                            $nm_100_um = 'img/produtos/100/100v60_'.$nome_100_um;
                            $data['imagem_mini'] = $nm_100_um;

                        } elseif ($seccao==4) {

                            // IMAGEM 3
                            $img_um = $request->file('imagem_produto');
                            $nome_500_um = hexdec(uniqid()).'.'.$img_um->getClientOriginalExtension();
                            Image::make($img_um)->save('levelschool/img/produtos/padrao/500v712_'.$nome_500_um); // ->resize(470,580)
                            $nm_500_um = 'img/produtos/padrao/500v712_'.$nome_500_um;
                            $data['imagem_padrao'] = $nm_500_um;

                            $nome_100_um = hexdec(uniqid()).'.'.$img_um->getClientOriginalExtension();
                            Image::make($img_um)->resize(100,60)->save('levelschool/img/produtos/100/100v60_'.$nome_100_um);
                            $nm_100_um = 'img/produtos/100/100v60_'.$nome_100_um;
                            $data['imagem_mini'] = $nm_100_um;

                            }

                        }else {
                        $nm_500_um ='';
                        $nm_100_um ='';
                    }
            }

            if ($pegaInicio->update($data) && $pegaIMG->update($data) ) {
                return redirect()->route('sobre.index')->withSuccessMessage('sobre atualizado com êxito');
            }
    }


    public function destroy($id){

        $idImagem = Sobre::find($id);
        $sobre = DB::table('sobres')
        ->where('sobres.id',$id)
        ->join('imagems','sobres.imagem_id','imagems.id')
        ->select('imagems.imagem_padrao','imagems.imagem_mini')
       ->first();

        //$sobre = DB::table('sobres')->where('id',$id)->first();
        $imgPadrao = $sobre->imagem_padrao;
        $imgMini = $sobre->imagem_mini;

        if ($imgPadrao && $imgMini) {
         // unlink($photo);
          unlink('levelschool/'.$sobre->imagem_padrao);
          unlink('levelschool/'.$sobre->imagem_mini);
          DB::table('sobres')->where('id',$id)->delete();
          DB::table('imagems')->where('id',$idImagem->imagem_id)->delete();

        }else{
         DB::table('sobres')->where('id',$id)->delete();
        }

        return redirect()->route('sobre.index')->withSuccessMessage('Excluido com êxito');

    }
}
