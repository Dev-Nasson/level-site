@extends('admin.layouts.master')



@section('content')
    <!-- start page content -->



    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title"> Listar Início </div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i
                                class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Data Tables</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Advance Tables</li>
                    </ol>
                </div>
            </div>



            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-head">
                            <header>MANAGED TABLE</header>
                            <div class="tools">
                                <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                            </div>
                        </div>


                        <div class="card-body ">

                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-6">
                                    <div class="btn-group">
                                        <button id="addRow1" class="btn btn-info">
                                            Add New <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-6">
                                    <div class="btn-group pull-right">
                                        <button class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
                                            data-bs-toggle="dropdown">Tools
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-print"></i> Print </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                            <table class="table table-striped table-bordered table-hover table-checkable order-column"
                                style="width: 100%" id="example4">
                                <thead>
                                    <tr>
                                        <th>
                                            <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                <input type="checkbox" class="group-checkable"
                                                    data-set="#sample_1 .checkboxes" />
                                                <span></span>
                                            </label>
                                        </th>
                                        <th> Titulo </th>
                                        <th> Secção </th>
                                        <th> status </th>
                                        <th> Imagem </th>
                                        <th> Acção </th>

                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach ($Inicios as $Inicio)


                                        <tr class="odd gradeX">
                                            <td>
                                                <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td> {{ $Inicio->titulo }} </td>

                                            <td>
                                                <a href="mailto:shuxer@gmail.com">{{$Inicio->numero_setion}}</a>
                                            </td>

                                            <td>

                                                @if ($Inicio->status==0)
                                                <span class="label label-sm label-success"> Activo </span>

                                                @else
                                                <span class="label label-sm label-danger"> Inactivo </span>
                                                @endif

                                            </td>



                                            <td> <img src="{{asset('levelschool')}}/{{ $Inicio->imagem_mini }}" class=" mx-auto d-block" alt="..."> </td>

                                            <td class="valigntop">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Actions
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu pull-left" role="menu">

                                                        <li>
                                                            <a class="btn btn-white  w-100" href="{{ url('auth/inicio') }}/{{ $Inicio->id }}/edit">
                                                                <i class="icon-docs"></i> Editar </a>
                                                        </li>


                                                        </li>



                                                            <form action="{{ route('inicio.destroy', $Inicio->id) }}" method="post" enctype="multipart/form-data">

                                                                @csrf

                                                                @method('DELETE')


                                                                    <button type="submit" class="btn btn-default p-1  w-100">
                                                                        <i class="fas fa-trash ml-3 "></i> Excluir
                                                                    </button>



                                                            </form>


                                                        </li>



                                                        </li>


                                                            <form class="mt-1" action="{{ route('inicio.accao', $Inicio->id) }}" method="post" enctype="multipart/form-data">

                                                                @csrf

                                                                @if ($Inicio->status == 0)
                                                                    <button type="submit" class="btn btn-primary p-1 w-100"> <i
                                                                            class="fas fa-lock ml-3 "></i> Disativar </button>
                                                                @else
                                                                    <button type="submit" class="btn btn-danger p-1 w-100"> <i
                                                                            class="fas fa-lock ml-3 "></i> Activar </button>
                                                                @endif


                                                            </form>


                                                        </li>



                                                    </ul>
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


        </div>
    </div>
@endsection
