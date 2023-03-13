<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use App\Models\Imagem;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Validator;
use Image;

class ContactoController extends Controller
{

    public function index()
    {
        $artigos = Contacto::orderBy('id', 'desc')->get();
        return view('admin.contacto.index', compact('artigos'));
    }


    public function accaocontacto(Request $request,$id){

        $pegaartigo = Contacto::find($id);
        if ($pegaartigo->status ==0 ) {
            $pegaartigo->update(['status' => 1]);
            return redirect()->route('contacto.index')->withSuccessMessage('contacto Desativado com êxito');

        } else {
            $pegaartigo->update(['status' => 0]);
            return redirect()->route('contacto.index')->withSuccessMessage('contacto Activado com êxito');
        }

}




    public function contacpris(){
        $contacpris = Contacto::where('numero_setion',2)->orderBy('id','asc')->first(); // para vue js
        return $contacpris;
    }


    //


    public function create(){
        return view('admin.contacto.create');
    }


    public function store(Request $request){


        $validacao = $request->validate(
            [
                'localizacao' => 'required',
                'icone' => 'required',
                'endereco_email' => 'required',
                'telefone' => 'required',
                'horas_trabalho' => 'required',
                // 'descricao' => 'required',
                'seccao' => 'required',

            ],

            [
                'localizacao.required' => ' A localização é obrigatório ',
                'icone.required' => ' O ícone é obrigatório ',
                'endereco_email.required' => ' O endereço de email é obrigatório ',
                'telefone.required' => 'O telefone é obrigatório',
                'horas_trabalho.required' => 'A hora de trabalho é obrigatório',
                // 'descricao.required' => 'A descricao é obrigatório',
                'seccao.required' => ' A secção  é obrigatório',

            ]

        );

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

        $localizacao = $request->localizacao;
        $endereco_email = $request->endereco_email;
        $telefone = $request->telefone;
        $horas_trabalho = $request->horas_trabalho;
        $seccao = $request->seccao;


        $Imageprod =Imagem::create([
            'imagem_padrao'=>$nm_500_um,
            'imagem_mini'=>$nm_100_um,
            'status'=>0,
        ]);


        if ($Imageprod) {

            $pegaimg = Imagem::orderBy('id','desc')->first();

        $PageContacto = Contacto::create([
            'imagem_id'=>$pegaimg->id,
            'localizacao'=>$localizacao,
            'email_address'=>$endereco_email,
            'telefone'=>$telefone,
            'horas_trabalho'=>$horas_trabalho,
            'numero_setion' => $seccao,
            'status'=>0,
        ]);

    }

        return redirect()->route('contacto.index')->withSuccessMessage('contacto postado com êxito');
    }


    public function show(Contacto $contacto)
    {
        return view('contacto.show', compact('contacto'));
    }


    public function edit($id)
    {

        $contacto = Contacto::find($id);
        return view('admin.contacto.edit', compact('contacto'));
    }


    public function update(Request $request, $id)
    {

        $contacto = Contacto::find($id);
        $numero_setion = $contacto->numero_setion;
        $data = $request->all();

        $seccao = $request->seccao;
        $data['numero_setion'] = $seccao;



        if ($contacto->update($data)) {
            return redirect()->route('contacto.index')->withSuccessMessage('contacto atualizado com êxito');
        }
    }








    public function destroy($id)
    {
        $pegaServico = Contacto::find($id);

        if (unlink('levelschool/' . $pegaServico->imagem_artigo) && unlink('levelschool/' . $pegaServico->imagem_mini)) {
            $pegaServico->delete();

            return redirect()->route('contacto.index')->withSuccessMessage('Excluido com êxito');
        }
    }
}
