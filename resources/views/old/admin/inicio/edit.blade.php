@extends('admin.layouts.master')



@section('content')
    <!-- Sidebar -->




    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">


            <div id="app">


            @include('admin.layouts.navbar')


            <div class="container-fluid" id="container-wrapper">



                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800"> Editar conteudo da pagina Inicial </h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Forms</li>
                    </ol>


                </div>

                <hr>

                <div class="row d-flex justify-content-center ">
                    <div class="col-lg-6">
                        <!-- Form Basic -->
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Editar inicio</h6>
                            </div>
                            <div class="card-body">

                                <form action="{{ route('inicio.update', $Inicio->id) }}" method="post" enctype="multipart/form-data">

                                    @csrf

                                    @method('PUT')

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Titulo</label>
                                        <input type="text" name="titulo" value="{{$Inicio->titulo}}" placeholder="Insira o titulo" class="form-control">





                                    </div>


                                    <div class="form-group">
                                        <label for=""> Descrição </label>
                                        <textarea name="descricao" id=""  rows="3" class="form-control">{{$Inicio->descricao }}</textarea>


                                    </div>

                                    {{--

                                    <div class="form-group mt-4 ">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Selecione a imagem</label>
                                        </div>
                                    </div>

                                    --}}

                                    <imagem-artigo></imagem-artigo>

                                    <div class="form-group mt-4 ">
                                        <label for="">Número de secção</label>

                                        <select  name="seccao" id="" class="custom-select ">
                                            <option value="" selected> Selecione a secção </option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>

                                        </select>




                                    </div>









                                    <button type="submit" class="btn btn-primary mt-2 "> Submeter </button>


                                </form>
                            </div>
                        </div>



                    </div>
                    <!--Row-->



                </div>




            @endsection
