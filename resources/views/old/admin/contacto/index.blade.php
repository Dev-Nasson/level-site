@extends('admin.layouts.master')



@section('content')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

            <div id="app">

                @include('admin.layouts.navbar')

                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h2 class="h3 mb-0 text-gray-800"> Dados da página Contacto </h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">Home</a></li>
                            <li class="breadcrumb-item">Tables</li>
                            <li class="breadcrumb-item active" aria-current="page">DataTables</li>
                        </ol>
                    </div>

                    <!-- Row -->
                    <div class="row">

                        <!-- DataTable with Hover -->
                        <div class="col-lg-12">
                            <div class="card mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">DataTables with Hover</h6>

                                    <a href="{{ url('auth/contacto/create') }} " class="btn btn-primary">Cadastrar </a>

                                </div>

                                <hr>


                                <div class="table-responsive p-3">
                                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Titulo</th>
                                                <th>Descrição</th>
                                                <th>Imagem do artigo</th>
                                                <th> Secção </th>
                                                <th>Acção</th>

                                                {{-- <th>Start date</th>
                                                 <th>Salary</th> --}}
                                            </tr>
                                        </thead>


                                        <tbody>

                                            @foreach ($artigos as $artigo)
                                                <tr>
                                                    <td>{{ $artigo->titulo }}</td>
                                                    <td> {{ $artigo->descricao }} </td>
                                                    <td> <img src="{{ asset('levelschool') }}/{{ $artigo->imagem_mini }}"
                                                            class="rounded mx-auto d-block" alt="..."> </td>
                                                    <td> {{ $artigo->numero_setion }} </td>

                                                    <td>

                                                        <div class="btn-group mb-1">

                                                            <button type="button" class="btn btn-primary dropdown-toggle"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="fas fa-tools"></i> Acção
                                                            </button>


                                                            <div class="dropdown-menu" x-placement="bottom-start"
                                                                style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">

                                                                <a class="dropdown-item"
                                                                    href="{{ url('auth/contacto') }}/{{ $artigo->id }}/edit ">
                                                                    <i class="far fa-edit"></i> Editar</a>
                                                                <hr>

                                                                <form action="{{ route('contacto.destroy', $artigo->id) }}" method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger p-1 dropdown-item" style="margin-left:5px;">

                                                                        <i class="far fa-trash-alt"></i> Excluir </button>

                                                                    {{-- <a class="dropdown-item" href="#" id="" > <i class="far fa-trash-alt" ></i>  Excluir</a> --}}

                                                                </form>

                                                            </div>
                                                        </div>


                                                    </td>


                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!--Row-->



                </div>
                <!---Container Fluid-->
            </div>
        @endsection
