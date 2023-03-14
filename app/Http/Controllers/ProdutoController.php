<?php

namespace App\Http\Controllers;

use App\Models\Imagem;
use App\Models\Produto;
use App\Models\Imagemproduto;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Validator;
use Image;
use DB;

class ProdutoController extends Controller
{

    public function index(){

        /*$artigos = Produto::orderBy('id', 'desc')->get();
        */

        $artigos = DB::table('produtos')
         ->join('imagems','produtos.imagem_id','imagems.id')
         ->select('imagems.imagem_padrao','imagems.imagem_mini','produtos.*')
        ->orderBy('produtos.id','DESC')
        ->get();
       // return response()->json($product);
       return view('admin.produto.index', compact('artigos'));

     //  return $artigos;
    }



        public function infopro($id){

            $infopro = DB::table('produtos')
            ->where('produtos.id',$id)
            ->join('imagems','produtos.imagem_id','imagems.id')
            ->select('imagems.imagem_padrao','imagems.imagem_mini','imagems.imagem_um','imagems.imagem_dois','produtos.*')
            ->where('produtos.status',0)
           ->orderBy('produtos.id','DESC')
           ->first();


            // $infopro = Produto::find($id); // para vue js
            return  response()->json($infopro);

        }


        public function segeridos($id){

            $segeridos = DB::table('produtos')
            ->where('produtos.id','!=',$id)
            ->join('imagems','produtos.imagem_id','imagems.id')
            ->select('imagems.imagem_padrao','imagems.imagem_mini','produtos.*')
            ->orderBy('produtos.id','DESC')
            ->limit(4)
            ->get();

           return  response()->json($segeridos);

        }


        public function produtoprincipals(){


            $produtoprincipals = DB::table('produtos')
            ->join('imagems','produtos.imagem_id','imagems.id')
            ->select('imagems.imagem_padrao','imagems.imagem_mini','imagems.imagem_um','imagems.imagem_dois','produtos.*')
            ->orderBy('produtos.id','DESC')
            ->get();

                // return response()->json($produtoinicios);

            //  $produtoinicios = Produto::where('status',0)->orderBy('id','desc')->get(); // para vue js
            return $produtoprincipals;
        }





    public function accao(Request $request,$id){

            $pegaartigo = Produto::find($id);
            if ($pegaartigo->status ==0 ) {
                $pegaartigo->update(['status' => 1]);
                return redirect()->route('produto.index')->withSuccessMessage('produto Desativado com êxito');

            } else {
                $pegaartigo->update(['status' => 0]);
                return redirect()->route('produto.index')->withSuccessMessage('produto Activado com êxito');
            }

    }


    public function create(){
        return view('admin.produto.create');
    }


     public function accaomodulo(Request $request,$id){

       $pegaproduto = Produto::find($id);
        if ($pegaproduto->status ==0 ) {
           $pegaproduto->update(['status' => 1]);
           return redirect()->route('produto.index')->withSuccessMessage('produto Desativado com êxito');

        } else {
            $pegaproduto->update(['status' => 0]);
            return redirect()->route('produto.index')->withSuccessMessage('produto Activado com êxito');
        }

     }


    public function store(Request $request){

        $validacao = $request->validate(
            [
                'nome' => 'required',
                'descricao' => 'required',
            ],

            [
                'nome.required' => ' O nome do produto é obrigatório ',
                'descricao.required' => ' A descrição é obrigatório ',
            ]

        );


        if (!empty($request->file('imagem_produto'))) {

            // IMAGEM 1
            $img_um = $request->file('imagem_produto');
            $nome_500_um = hexdec(uniqid()) . '.' . $img_um->getClientOriginalExtension();
            Image::make($img_um)->resize(640,421)->save('levelschool/img/produtos/500/500v712_' . $nome_500_um);
            $nm_500_um = 'img/produtos/500/500v712_' . $nome_500_um;

            // IMAGEM 2
            $img_um = $request->file('imagem_produto');
            $nome_370_um = hexdec(uniqid()) . '.' . $img_um->getClientOriginalExtension();
            Image::make($img_um)->resize(380,230)->save('levelschool/img/produtos/370/370v370_' . $nome_370_um);
            $nm_370_um = 'img/produtos/370/370v370_' . $nome_370_um;

            // IMAGEM 3
            $img_um = $request->file('imagem_produto');
            $nome_598_um = hexdec(uniqid()) . '.' . $img_um->getClientOriginalExtension();
            Image::make($img_um)->resize(598,564)->save('levelschool/img/produtos/598/598v598_' . $nome_598_um);
            $nm_598_um = 'img/produtos/598/598v598_' . $nome_598_um;

            // IMAGEM 4
            $nome_100_um = hexdec(uniqid()) . '.' . $img_um->getClientOriginalExtension();
            Image::make($img_um)->resize(100, 60)->save('levelschool/img/produtos/100/100v60_' . $nome_100_um);
            $nm_100_um = 'img/produtos/100/100v60_' . $nome_100_um;

        } else {
            $nm_500_um = '';
            $nm_370_um ='';
            $nm_598_um='';
            $nm_100_um = '';
        }

        $Imageprod =Imagem::create([

            'imagem_padrao'=>$nm_500_um,
            'imagem_mini'=>$nm_100_um,
            'imagem_um'=>$nm_370_um,
            'imagem_dois'=>$nm_598_um,
            'status'=>0,
        ]);


        if ($Imageprod) {

            $pegaimg = Imagem::orderBy('id','desc')->first();

            $nome = $request->nome;
            $descricao = $request->descricao;
            $nome_dois = $request->nome_dois;

            $PageProduto =Produto::create([
                'imagem_id'=>$pegaimg->id,
                'nome'=>$nome,
                'nome_dois'=>$nome_dois,
                'descricao'=>$descricao,
                'status'=>0,
            ]);

        }

        return redirect()->route('produto.index')->withSuccessMessage('produto postado com êxito');

    }



    public function show($id){

      //$produto = Produto::find($id);
       $produtoId = request('idpro');

     $produtos =  DB::table('produtos')
      ->where('produtos.id',$produtoId)
      ->join('imagems','produtos.imagem_id','imagems.id')
      ->select('imagems.imagem_padrao','imagems.imagem_mini','imagems.imagem_um','imagems.imagem_dois','produtos.*')
     ->orderBy('produtos.id','DESC')
     ->first();

        return view('admin.produto.show',compact('produtos'));

         //return $idpro;
    }


    public function edit($id)
    {
        $produto = Produto::find($id);
        return view('admin.produto.edit', compact('produto'));
    }


    public function update(Request $request, $id){

            $produto = Produto::find($id);
            $pegaIMG = Imagem::where('id',$produto->imagem_id)->first();
            $nome = $produto->nome;
            $descricao = $produto->descricao;
            $nome_dois = $produto->nome_dois;
            $nm_500_um = $pegaIMG->imagem_padrao;
            $nm_100_um = $pegaIMG->imagem_mini;
            $nm_370_um = $pegaIMG->imagem_um;
            $nm_598_um = $pegaIMG->imagem_dois;
            $data = $request->all();

            // $pegaproduto = Produto::where('id',$id)->first();
            //  $pagaImgpro = Imagem::where('id',$pegaproduto->imagem_id)->first();

        if (!empty($request->file('imagem_produto'))) {

            if (unlink('levelschool/' . $pegaIMG->imagem_padrao) && unlink('levelschool/' . $pegaIMG->imagem_mini) && unlink('levelschool/' . $pegaIMG->imagem_um) && unlink('levelschool/' . $pegaIMG->imagem_dois) ) {

                // IMAGEM 1
               $img_um = $request->file('imagem_produto');
               $nome_500_um = hexdec(uniqid()) . '.' . $img_um->getClientOriginalExtension();
               Image::make($img_um)->resize(640,421)->save('levelschool/img/produtos/500/500v712_' . $nome_500_um);
               $nm_500_um = 'img/produtos/500/500v712_' . $nome_500_um;
               $data['imagem_padrao'] = $nm_500_um;

                // IMAGEM 1
                $nome_100_um = hexdec(uniqid()) . '.' . $img_um->getClientOriginalExtension();
                Image::make($img_um)->resize(100, 60)->save('levelschool/img/produtos/100/100v60_' . $nome_100_um);
                $nm_100_um = 'img/produtos/100/100v60_' . $nome_100_um;
                $data['imagem_mini'] = $nm_100_um;

               // IMAGEM 2
               $img_um = $request->file('imagem_produto');
               $nome_370_um = hexdec(uniqid()) . '.' . $img_um->getClientOriginalExtension();
               Image::make($img_um)->resize(380,230)->save('levelschool/img/produtos/370/370v370_' . $nome_370_um);
               $nm_370_um = 'img/produtos/370/370v370_' . $nome_370_um;
               $data['imagem_um'] = $nm_370_um;

               // IMAGEM 3
               $img_um = $request->file('imagem_produto');
               $nome_598_um = hexdec(uniqid()) . '.' . $img_um->getClientOriginalExtension();
               Image::make($img_um)->resize(598,564)->save('levelschool/img/produtos/598/598v598_' . $nome_598_um);
               $nm_598_um ='img/produtos/598/598v598_' . $nome_598_um;
               $data['imagem_dois'] = $nm_598_um;

           } else {
               $nm_500_um = '';
               $nm_370_um ='';
               $nm_598_um='';
               $nm_100_um = '';
           }

        }

        if ($produto->update($data) &&  $pegaIMG->update($data)) {
            return redirect()->route('produto.index')->withSuccessMessage('produto atualizado com êxito');
        }

    }


    public function destroy($id){

        $idImagem = Produto::find($id);

        $produto = DB::table('produtos')
        ->where('produtos.id',$id)
        ->join('imagems','produtos.imagem_id','imagems.id')
        ->select('imagems.imagem_padrao','imagems.imagem_mini','imagems.imagem_um','imagems.imagem_dois')
       ->first();

        //$inicio = DB::table('produtos')->where('id',$id)->first();
        $imgPadrao = $produto->imagem_padrao;
        $imgMini = $produto->imagem_mini;
        $imagem_um = $produto->imagem_um;
        $imagem_dois = $produto->imagem_dois;


        if ($imgPadrao && $imgMini && $imagem_um && $imagem_dois) {
         // unlink($photo);
          unlink('levelschool/'.$produto->imagem_padrao);
          unlink('levelschool/'.$produto->imagem_mini);
          unlink('levelschool/'.$produto->imagem_um);
          unlink('levelschool/'.$produto->imagem_dois);
          DB::table('produtos')->where('id',$id)->delete();
          DB::table('imagems')->where('id',$idImagem->imagem_id)->delete();

        }else{
         DB::table('produtos')->where('id',$id)->delete();
        }

        return redirect()->route('produto.index')->withSuccessMessage('Excluido com êxito');





    }
}
