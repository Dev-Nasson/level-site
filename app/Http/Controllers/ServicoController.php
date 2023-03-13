<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Validator;
use Image;

class ServicoController extends Controller
{

    public function index(){

        $artigos =Servico::orderBy('id','desc')->get();
        return view('admin.servicos.index',compact('artigos'));
    }

    public function prisecservico(){
        $prisecservico = Servico::where('numero_setion',1)->first(); // para vue js
        return $prisecservico;
    }

    public function segusecservico(){
        $segusecservico = Servico::where('numero_setion',2)->first(); // para vue js
        return $segusecservico;
    }

    public function tercservicos(){
        $tercservicos = Servico::where('numero_setion',3)->orderBy('id','asc')->get(); // para vue js
        return $tercservicos;
    }


    public function create(){
        return view('admin.servicos.create');
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
        $descricao = $request->descricao;
        $seccao = $request->seccao;




            if (!empty($request->file('imagem_produto') ) ) { // imagem

                if ($seccao==1) { //seccao

                // IMAGEM 1
                $img_um = $request->file('imagem_produto');
                $nome_500_um = hexdec(uniqid()).'.'.$img_um->getClientOriginalExtension();
                Image::make($img_um)->resize(700,415)->save('levelschool/img/produtos/500/500v712_'.$nome_500_um);
                $nm_500_um = 'img/produtos/500/500v712_'.$nome_500_um;

                $nome_100_um = hexdec(uniqid()).'.'.$img_um->getClientOriginalExtension();
                Image::make($img_um)->resize(100,60)->save('levelschool/img/produtos/100/100v60_'.$nome_100_um);
                $nm_100_um = 'img/produtos/100/100v60_'.$nome_100_um;


            } elseif($seccao==2)  {

                    // IMAGEM 1
                    $img_um = $request->file('imagem_produto');
                    $nome_500_um = hexdec(uniqid()).'.'.$img_um->getClientOriginalExtension();
                    Image::make($img_um)->resize(598,564)->save('levelschool/img/produtos/500/500v712_'.$nome_500_um);
                    $nm_500_um = 'img/produtos/500/500v712_'.$nome_500_um;

                    $nome_100_um = hexdec(uniqid()).'.'.$img_um->getClientOriginalExtension();
                    Image::make($img_um)->resize(100,60)->save('levelschool/img/produtos/100/100v60_'.$nome_100_um);
                    $nm_100_um = 'img/produtos/100/100v60_'.$nome_100_um;

            } //fim seccao

                }else { // fim image

                $nm_500_um ='';
                $nm_100_um ='';
                }

                $PageInicio = Servico::create([
                    'titulo'=>$titulo,
                    'descricao'=>$descricao,
                    'imagem_artigo'=>$nm_500_um,
                    'imagem_mini'=>$nm_100_um,
                    'numero_setion'=>$seccao,
                 ]);

            return redirect()->route('servico.index')->withSuccessMessage('Servico postado com êxito');

    }


    public function show(Servico $servico){

    }


    public function edit($id){

        $servico = Servico::find($id);
        return view('admin.servicos.edit',compact('servico'));

    }


    public function update(Request $request, $id){

        $Servico = Servico::find($id);
        $titulo = $Servico->titulo;
        $descricao = $Servico->descricao;
        $imagem_artigo = $Servico->imagem_artigo;
        $imagem_mini = $Servico->imagem_mini;
        $numero_setion = $Servico->numero_setion;
        $data = $request->all();

        $seccao = $request->seccao;
        $data['numero_setion'] = $seccao;

            $pegaServico = Servico::find($id);

        if (!empty($request->file('imagem_produto') ) ) {

           if (unlink('levelschool/'.$pegaServico->imagem_artigo) && unlink('levelschool/'.$pegaServico->imagem_mini)) {

            $img_um = $request->file('imagem_produto');
            $nome_500_um = hexdec(uniqid()).'.'.$img_um->getClientOriginalExtension();
            Image::make($img_um)->resize(500,712)->save('levelschool/img/produtos/500/500v712_'.$nome_500_um);
            $nm_500_um = 'img/produtos/500/500v712_'.$nome_500_um;
            $data['imagem_artigo'] = $nm_500_um;

            $nome_100_um = hexdec(uniqid()).'.'.$img_um->getClientOriginalExtension();
            Image::make($img_um)->resize(100,60)->save('levelschool/img/produtos/100/100v60_'.$nome_100_um);
            $nm_100_um = 'img/produtos/100/100v60_'.$nome_100_um;
            $data['imagem_mini'] = $nm_100_um;

            }else {
            $nm_500_um ='';
            $nm_100_um ='';
        }

            }

            if ($Servico->update($data)) {
                return redirect()->route('servico.index')->withSuccessMessage('Servico atualizado com êxito');
            }

    }


    public function destroy($id){

        $pegaServico = Servico::find($id);

        if (unlink('levelschool/'.$pegaServico->imagem_artigo) && unlink('levelschool/'.$pegaServico->imagem_mini)) {
           $pegaServico->delete();
           return redirect()->route('servico.index')->withSuccessMessage('Excluido com êxito');

        }



    }
}
