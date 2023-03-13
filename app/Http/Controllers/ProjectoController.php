<?php

namespace App\Http\Controllers;

use App\Models\Projecto;
use App\Models\Imagem;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Validator;
use Image;
use DB;

class ProjectoController extends Controller{

    public function index(){
        $artigos =Projecto::orderBy('id','desc')->get();
        return view('admin.projecto.index',compact('artigos'));
    }

   //


   public function projectopricis(){


    $projectopricis = Projecto::orderBy('id','desc')->get();

           // return response()->json($produtoinicios);

  //  $produtoinicios = Produto::where('status',0)->orderBy('id','desc')->get(); // para vue js
   return $projectopricis;
}

    public function accaopro(Request $request,$id){

        $pegaartigo = Projecto::find($id);
         if ($pegaartigo->status ==0 ) {
            $pegaartigo->update(['status' => 1]);
            return redirect()->route('projecto.index')->withSuccessMessage('projecto Desativado com êxito');

         } else {
             $pegaartigo->update(['status' => 0]);
             return redirect()->route('projecto.index')->withSuccessMessage('projecto Activado com êxito');
         }

      }






     public function seguprojectos(){
        $seguprojectos = Projecto::where('numero_setion',2)->orderBy('id','desc')->get(); // para vue js
        return $seguprojectos;
    }






    public function create(){
        return view('admin.projecto.create');
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

                 if (!empty($request->file('imagem_produto') ) ) {

             // IMAGEM 1
             $img_um = $request->file('imagem_produto');
             $nome_500_um = hexdec(uniqid()).'.'.$img_um->getClientOriginalExtension();
             Image::make($img_um)->resize(670,405)->save('levelschool/img/produtos/500/500v712_'.$nome_500_um);
             $nm_500_um = 'img/produtos/500/500v712_'.$nome_500_um;

             $nome_100_um = hexdec(uniqid()).'.'.$img_um->getClientOriginalExtension();
             Image::make($img_um)->resize(100,60)->save('levelschool/img/produtos/100/100v60_'.$nome_100_um);
             $nm_100_um = 'img/produtos/100/100v60_'.$nome_100_um;

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

                $pegaimgpro = Imagem::orderBy('id','desc')->first();

                $titulo = $request->titulo;
                $descricao = $request->descricao;
                $seccao = $request->seccao;

                $PageProjecto = Projecto::create([
                    'imagem_id'=>$pegaimgpro->id,
                    'titulo'=>$titulo,
                    'descricao'=>$descricao,
                    'numero_setion'=>$seccao,
                    'status'=>0,
                 ]);


            }



            return redirect()->route('projecto.index')->withSuccessMessage('Projecto postado com êxito');

    }


    public function show(Projecto $projecto){
        return view('admin.projecto.show', compact('projecto'));
    }


    public function edit($id){
        $projecto = Projecto::find($id);
        return view('admin.projecto.edit',compact('projecto'));
    }


    public function update(Request $request, $id){

        $Projecto = Projecto::find($id);
        $titulo = $Projecto->titulo;
        $descricao = $Projecto->descricao;
        $numero_setion = $Projecto->numero_setion;
        $data = $request->all();

        $seccao = $request->seccao;
        $data['numero_setion'] = $seccao;

            $pegaProjecto = Projecto::find($id);


           // $pegaproduto = Produto::where('id',$id)->first();
            $pagaImgpro = Imagem::where('id',$pegaProjecto->imagem_id)->first();

            if (!empty($request->file('imagem_produto'))) {

                if (unlink('levelschool/' . $pagaImgpro->imagem_padrao) && unlink('levelschool/' . $pagaImgpro->imagem_mini)) {
                    $img_um = $request->file('imagem_produto');
                    $nome_500_um = hexdec(uniqid()) . '.' . $img_um->getClientOriginalExtension();
                    Image::make($img_um)->resize(500, 712)->save('levelschool/img/produtos/500/500v712_' . $nome_500_um);
                    $nm_500_um = 'img/produtos/500/500v712_' . $nome_500_um;
                    $data['imagem_padrao'] = $nm_500_um;

                    $nome_100_um = hexdec(uniqid()) . '.' . $img_um->getClientOriginalExtension();
                    Image::make($img_um)->resize(100, 60)->save('levelschool/img/produtos/100/100v60_' . $nome_100_um);
                    $nm_100_um = 'img/produtos/100/100v60_' . $nome_100_um;
                    $data['imagem_mini'] = $nm_100_um;
                } else {
                    $nm_500_um = '';
                    $nm_100_um = '';
                }

                $pagaImgpro->update(
                    [
                        'imagem_padrao'=>$nm_500_um,
                        'imagem_mini'=>$nm_100_um,
                    ]
                );


            }


            if ($Projecto->update($data)) {
                return redirect()->route('projecto.index')->withSuccessMessage('projecto atualizado com êxito');
            }
    }


    public function destroy($id){

        $pegaServico = Projecto::find($id);

        if (unlink('levelschool/'.$pegaServico->imagem_artigo) && unlink('levelschool/'.$pegaServico->imagem_mini)) {
           $pegaServico->delete();
           return redirect()->route('projecto.index')->withSuccessMessage('Excluido com êxito');

        }
    }
}
