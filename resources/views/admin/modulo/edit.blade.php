
@extends('admin.layouts.master')



@section('content')
    <!-- Sidebar -->







			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title"> Cadastrar Produto  </div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Inicio</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Add Inicio</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Basic Information</header>

									<button id="panel-button"
										class="mdl-button mdl-js-button mdl-button--icon pull-right"
										data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>
									<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
										data-mdl-for="panel-button">
										<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">print</i>Another action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
											here</li>
									</ul>
								</div>
								<div class="card-body" id="bar-parent">


                                    <form action="{{ route('produto.update',$produto->id) }}" method="post" enctype="multipart/form-data"  id="form_sample_1" class="form-horizontal">

                                        @csrf


                                        @method('PUT')


										<div class="form-body">


											<div class="form-group row">

												<label class="control-label col-md-3">Nome do produto
													<span class="required"> * </span>
												</label>

												<div class="col-md-5">
													<input type="text" name="nome" data-required="1"
														placeholder="Insira o nome do produto"
														class="form-control input-height " value="{{ $produto->nome }} " />




												</div>

											</div>


                                        {{--      <div class="form-group row">

                                                    <label class="control-label col-md-3">Selecione o Icone
                                                        <span class="required"> * </span>
                                                    </label>


                                                    <div class="col-md-5">
                                                        <input type="text"  data-required="1"
                                                        name="icone" placeholder="Insira o ícone"
                                                            class="form-control input-height" />
                                                    </div>
                                                </div> --}}


											<div class="form-group row">
												<label class="control-label col-md-3">Descrição
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<textarea name="descricao"  placeholder="Descrição"
														class="form-control-textarea "  rows="5"> {{ $produto->descricao }}  </textarea>





												</div>
											</div>

                                                {{--
                                                        <div class="form-group row">
                                                            <label class="control-label col-md-3">Departments
                                                                <span class="required" aria-required="true"> * </span>
                                                            </label>
                                                            <div class="col-md-5">

                                                                <select  name="seccao" class="form-select input-height @error('seccao') is-invalid @enderror">
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

                                                                @error('seccao')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>
                                                                        {{ $message }}
                                                                    </strong>
                                                                </span>
                                                            @enderror
                                                            </div>
                                                        </div>
                                                --}}


                                            <div class="form-group row">
                                                <label class="control-label col-md-3"> Selecione a imagem
                                                </label>

                                                <div class="col-md-5">
                                                    <input type="file" name="imagem_produto" class="default" >

                                                </div>



                                            </div>





											<div class="form-actions">
												<div class="row">
													<div class="offset-md-3 col-md-9">
														<button type="sutmit"
															class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-circle btn-primary">Submit</button>
														<button type="buttom"
															class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-danger">Cancel</button>
													</div>
												</div>
											</div>

										</div>
									</form>




								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->







        @endsection

