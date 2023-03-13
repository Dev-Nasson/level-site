<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="levelschool">
      <meta name="author" content="levelschool">
      <title>Levelschool</title>
      <!-- Favicon Icon -->
      <link rel="icon" type="{{asset('levelschool')}}/image/png" href="img/favicon.png">
      <!-- Bootstrap core CSS-->
      <link href="{{asset('levelschool')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom fonts for this template-->
      <link href="{{asset('levelschool')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <!-- Custom styles for this template-->
      <link href="{{asset('levelschool')}}/css/osahan.css" rel="stylesheet">
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="{{asset('levelschool')}}/vendor/owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="{{asset('levelschool')}}/vendor/owl-carousel/owl.theme.css">


   </head>



   <body class="login-main-body">
      <section class="login-main-wrapper">
         <div class="container-fluid pl-0 pr-0">

            <div class="row no-gutters d-flex justify-content-center   ">
               <div class="col-md-4 p-5 bg-white full-height   ">


                <div class="login-main-left ">


                    <div class="text-center mb-5 login-main-left-header pt-1">
                        <img src="{{asset('levelschool')}}/img/logo.png" class="img-fluid" alt="LOGO">

                        <h5 class="mt-1 mb-2">Crie uma conta</h5>

                     </div>


                     <form action="{{ route('register') }}" method="post">

                         @csrf

                        <!--Formulário de cadastro-->

                        <div class="form-group" style="margin-top:-10px;">
                           <label  for="name">Nome do usuário</label>
                           <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>

                                    </span>
                                @enderror



                        </div>


                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>

                            </span>
                        @enderror



                         </div>



                        <div class="form-group">
                           <label for="password">Crie uma senha</label>


                           <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror">

                           @error('password')
                               <span class="invalid-feedback" role="alert">
                                   <strong>
                                       {{ $message }}
                                   </strong>

                               </span>
                           @enderror


                        </div>

                        <div class="form-group">
                           <label for="password_confirmation">Confirmar senha</label>

                           <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror">

                           @error('password_confirmation')

                           @enderror
                        </div>


                        <div class="mt-4">
                           <button type="submit" class="btn btn-primary  btn-block btn-lg">Cadastrar</button>

                           <hr>
                           <button type="submit" class="btn btn-default text-white btn-block mt-3" style="background-color: #369;">Entrar com facebook</button>

                        </div>
                     </form>
                     <div class="text-center mt-3">
                        <p class="light-gray">Já tens uma conta? <a href="login">Entrar</a></p>
                     </div>
                  </div>
               </div>





            </div>
         </div>
      </section>
      <!-- Bootstrap core JavaScript-->
      <script src="{{asset('levelschool')}}/vendor/jquery/jquery.min.js"></script>
      <script src="{{asset('levelschool')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="{{asset('levelschool')}}/vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Owl Carousel -->
      <script src="{{asset('levelschool')}}/vendor/owl-carousel/owl.carousel.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="{{asset('levelschool')}}/js/custom.js"></script>
   </body>
</html>
