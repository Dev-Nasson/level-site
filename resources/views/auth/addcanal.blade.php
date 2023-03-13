<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="videoplace">
      <meta name="author" content="videoplace">
      <title>Videoplace</title>
      <!-- Favicon Icon -->
      <link rel="icon" type="{{asset('videoplace')}}/image/png" href="img/favicon.png">
      <!-- Bootstrap core CSS-->
      <link href="{{asset('videoplace')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom fonts for this template-->
      <link href="{{asset('videoplace')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <!-- Custom styles for this template-->
      <link href="{{asset('videoplace')}}/css/osahan.css" rel="stylesheet">
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="{{asset('videoplace')}}/vendor/owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="{{asset('videoplace')}}/vendor/owl-carousel/owl.theme.css">
   </head>
   <body class="login-main-body">
      <section class="login-main-wrapper ">
         <div class="container-fluid pl-0 pr-0">
            <div class="row no-gutters">
               <div class="col-md-12 p-5 bg-white full-height">


                  <div class="login-main-left">
                     <div class="text-center mb-5 login-main-left-header pt-4">
                        <img src="{{asset('videoplace')}}/img/favicon.png" class="img-fluid" alt="LOGO">
                        <h5 class="mt-3 mb-3">Seja bem vindo</h5>

                        <p>	Agora já podes veres  todas as categorias
                            <br>de vídeos que o vídeoplace reservou para si.</p>


                     </div>





                     <form action="{{ route('canal.store') }}" method="post">

                        @csrf


                        <div class="form-group">
                           <label><h6><i class="fab fa-youtube mr-1" style=" color:#39f; font-size:1.3rem;"></i> Crie um nome para o seu canal</h6></label>
                   <input type="text" name="nome" class="form-control  @error('nome') is-invalid @enderror">


                           @error('nome')
                           <span class="invalid-feedback" role="alert">
                               <strong>
                                   {{ $message }}
                               </strong>

                           </span>
                       @enderror


                        </div>

                        <div class="form-group mt-3">

                            <label><h6> <i class="fas fa-globe-africa mr-1" style=" color:#39f; font-size:1.3rem;"></i> Categoria</h6> </label>
                            <select name="categoria" id="ola" class="form-control @error('categoria') is-invalid @enderror">





                              <option selected value="" >Selecionar...</option>
                          @php
                              $id_proibido = array(12,11);
                          @endphp
                        @foreach (App\Models\Categoria::where('id','!=',12)->where('id','!=',11)->get() as $categoria)

                        <option value="{{$categoria->id}}">{{$categoria->nome}} </option>

                        @endforeach


                            </select>

                            @error('categoria')
                            <span class="invalid-feedback" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>

                            </span>
                        @enderror
                          </div>


                        <div class="mt-4">
                           <div class="row">
                              <div class="col-12">
                                 <button type="submit" class="btn btn-primary btn-block btn-lg">Entrar</button>

                              </div>
                           </div>
                        </div>
                     </form>

                     <div class="text-center mt-5">
                        <p class="light-gray"> Queres sair da sua conta ? <a href="logar">Termine a sessão</a></p>
                     </div>
                  </div>
               </div>




            </div>
         </div>
      </section>
      <!-- Bootstrap core JavaScript-->
      <script src="{{asset('videoplace')}}/vendor/jquery/jquery.min.js"></script>
      <script src="{{asset('videoplace')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="{{asset('videoplace')}}/vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Owl Carousel -->
      <script src="{{asset('videoplace')}}/vendor/owl-carousel/owl.carousel.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="{{asset('videoplace')}}/js/custom.js"></script>
   </body>
</html>
