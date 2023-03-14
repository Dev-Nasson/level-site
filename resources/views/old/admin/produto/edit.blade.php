@extends('admin.layouts.master')



@section('content')
    <!-- Sidebar -->




    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">


            <div id="app">


            @include('admin.layouts.navbar')


            <div class="container-fluid" id="container-wrapper">



                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800"> Editar conteudo da pagina de produtos </h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Serviços </li>
                    </ol>


                </div>

                <hr>

                <div class="row d-flex justify-content-center ">
                    <div class="col-lg-6">
                        <!-- Form Basic -->
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Editar Serviços</h6>
                            </div>
                            <div class="card-body">

                                <form action="{{ route('produto.update', $produto->id) }}" method="post" enctype="multipart/form-data">

                                    @csrf

                                    @method('PUT')

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nome do produto</label>
                                        <input type="text" name="nome" value="{{$produto->titulo}}" placeholder="Insira o nome do produto" class="form-control">


                                    </div>


                                    <div class="form-group">
                                        <label for=""> Descrição </label>
                                        <textarea name="descricao" id=""  rows="3" class="form-control">{{$produto->descricao }}</textarea>


                                    </div>

                                    <imagem-artigo></imagem-artigo>


                                    <button type="submit" class="btn btn-primary mt-2 "> Submeter </button>


                                </form>
                            </div>
                        </div>



                    </div>
                    <!--Row-->



                </div>




            @endsection
