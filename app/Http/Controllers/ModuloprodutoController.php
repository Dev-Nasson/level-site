<?php

namespace App\Http\Controllers;
use App\Models\Imagem;
use App\Models\Moduloproduto;
use App\Models\Produto;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Validator;
use Image;
use DB;
class ModuloprodutoController extends Controller
{

    public function index()
    {
        // return view('admin.modulo.index');
        $artigos = Moduloproduto::orderBy('id', 'desc')->get();

        return view('admin.modulo.index', compact('artigos'));
    }



        public function accaomodulo(Request $request,$id){

            $pegaartigo = Moduloproduto::find($id);
            if ($pegaartigo->status ==0 ) {
                $pegaartigo->update(['status' => 1]);
                return redirect()->route('modulo.index')->withSuccessMessage('modulo Desativado com êxito');

            } else {
                $pegaartigo->update(['status' => 0]);
                return redirect()->route('modulo.index')->withSuccessMessage('modulo Activado com êxito');
            }

        }



    public function create(){

        return view('admin.modulo.create');
    }


    public function store(Request $request){

        $validacao = $request->validate(
            [
                'produto' => 'required',
                'nome_modulo' => 'required',
                'descricao' => 'required',
            ],

            [
                'produto.required' => ' O nome do produto é obrigatório',
                'nome_modulo.required' => ' O nome do módulo é obrigatório ',
                'descricao.required' => ' A descrição é obrigatório ',
            ]

        );


        $produto_id = $request->produto;
        $nome_modulo = $request->nome_modulo;
        $descricao = $request->descricao;


        $pegaproduto =  Produto::find($produto_id);



        if (!empty($request->file('imagem_produto'))) {

            // IMAGEM 1
            $img_um = $request->file('imagem_produto');
            $nome_500_um = hexdec(uniqid()) . '.' . $img_um->getClientOriginalExtension();
            Image::make($img_um)->resize(500, 712)->save('levelschool/img/produtos/500/500v712_' . $nome_500_um);
            $nm_500_um = 'img/produtos/500/500v712_' . $nome_500_um;

            $nome_100_um = hexdec(uniqid()) . '.' . $img_um->getClientOriginalExtension();
            Image::make($img_um)->resize(100, 60)->save('levelschool/img/produtos/100/100v60_' . $nome_100_um);
            $nm_100_um = 'img/produtos/100/100v60_' . $nome_100_um;
        } else {
            $nm_500_um = '';
            $nm_100_um = '';
        }


        $Imageprod =Imagem::create([
            'imagem_padrao'=>$nm_500_um,
            'imagem_mini'=>$nm_100_um,
            'status'=>0,
        ]);


        if ($Imageprod) {

            $pegaimg = Imagem::orderBy('id','desc')->first();

            $Inserir_modulo = Moduloproduto::create([
                'imagem_id'=>$pegaimg->id,
                'produto_id'=>$pegaproduto->id,
                'nome_modulo'=>$nome_modulo,
                'descricao'=>$descricao,
                'status' =>0,
            ]);


            }





        if ($Inserir_modulo) {
            return redirect()->route('modulo.index')->withSuccessMessage('modulo postado com êxito');
        }
    }


    public function show(Moduloproduto $moduloproduto){
    }


    public function edit($id){


        $modulo = Moduloproduto::find($id);
        return view('admin.modulo.edit', compact('modulo'));
    }


    public function update(Request $request, $id){


        $validacao = $request->validate(
            [
                'produto_id' => 'required',
            ],

            [
                'produto_id.required' => ' O nome do produto é obrigatório',
            ]

        );


         $moduloProduto = Moduloproduto::find($id);
        $produto_id = $moduloProduto->produto_id;
        $nome_modulo = $moduloProduto->nome_modulo;
        $descricao = $moduloProduto->descricao;
        $data = $request->all();

        if ($moduloProduto->update($data)) {
            return redirect()->route('modulo.index')->withSuccessMessage('modulo atualizado com êxito');
        }

    }


    public function destroy(Moduloproduto $moduloproduto){

    }
}
