@php
     $pagina='header';
 @endphp

  @if ($pagina=='header' && !isset($reproMobile))


      <?php

            $detect = new Mobile_Detect;
            $deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
            $scriptVersion = $detect->getScriptVersion();
      ?>

      @else

      @endif

        <!-- Sidebar -->

            @if ($deviceType=='computer')

            <ul class="sidebar  navbar-nav ">
                @else

            <ul class="sidebar  navbar-nav toggled">

            @endif


              @if (Auth::check() )  <!--Se existir usuário logado -->

              @php
              $usuario = auth()->user()->estado;
             @endphp

                @if ($usuario=='admin' || $usuario=='funcionario')  <!-- se o usuário for Admin ou funcionário -->


                <li class="nav-item active mt-4">
                    <a class="nav-link" href="{{ url('')}}">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Início</span>
                    </a>
                </li>


                      <!--Cadastrar usuarios-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="categories.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-list-alt"></i>
                    <span>Usuários</span>
                    </a>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('auth/cliente')}}">Cliente</a>
                        <a class="dropdown-item" href="{{url('auth/funcionario')}}">Funcionário</a>
                        <a class="dropdown-item" href="{{url('auth/admin')}}">Admin</a>
                    </div>

                </li>

                        <!--Cadastrar Canais-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="categories.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-list-alt"></i>
                    <span>Canais</span>
                    </a>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('vercanal')}} ">Visualizar</a>
                    </div>

                </li>


                        <!--Cadastrar Categorias-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="categories.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-list-alt"></i>
                    <span>Categorias</span>
                    </a>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('auth/categoria/create')}}">Cadastrar</a>
                        <a class="dropdown-item" href="{{url('auth/categoria')}}">Visualizar</a>
                    </div>

                </li>


                <li class="nav-item active mt-2">
                    <a class="nav-link" href="#">
                    <i class="fas fa-play"></i>
                    <span>Vídeos </span>
                    </a>
                </li>


                    @else <!--Cliente -->



                    <li class="nav-item active mt-4">
                        <a class="nav-link" href="{{ url('')}}">
                        <i class="fas fa-fw fa-home"></i>
                        <span>Início</span>
                        </a>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link" href="{{url('vercanal')}} ">
                        <i class="fas fa-fw fa-users"></i>
                        <span>Canais</span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="{{url('page/musica')}}">
                        <i class="fas fa-music"></i>
                        <span>Música</span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="{{url('page/danca')}}">
                        <i class="fas fa-tint"></i>
                        <span>Dança</span>
                        </a>
                    </li>

{{--
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('page/Desafios')}}">
                        <i class="fas fa-calendar-alt" ></i>
                        <span>Desafios</span>
                        </a>
                    </li>
 --}}

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('historico')}}">
                        <i class="fas fa-fw fa-history"></i>
                        <span>Históricos</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link bg-primary " href="{{url('canaluser?idcanal=99')}}  ">
                            <i class="fas fa-star" style="color: #fff;"> </i>
                        <span  class="text-white" > Desafios </span>
                        </a>
                    </li>


            @endif

            @else  <!--Se não existir usuário logado -->


            <li class="nav-item active mt-4">
                <a class="nav-link" href="{{ url('')}}">
                <i class="fas fa-fw fa-home"></i>
                <span>Início</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="{{url('vercanal')}} ">
                <i class="fas fa-fw fa-users"></i>
                <span>Canais</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="{{url('page/musica')}}">
                <i class="fas fa-music"></i>
                <span>Música</span>
                </a>
           </li>


            <li class="nav-item">
                <a class="nav-link" href="{{url('page/danca')}}">
                <i class="fas fa-tint"></i>
                <span>Dança</span>
                </a>
            </li>

      {{--       <li class="nav-item">
                <a class="nav-link" href="{{url('page/Desafios')}}">
                <i class="fas fa-calendar-alt" ></i>
                <span>Desafios</span>
                </a>
            </li>
 --}}






            @endif





            <li class="nav-item channel-sidebar-list">

            <h6>Canais sugeridos</h6>



            <ul>



                @foreach ($Sugeridos = App\Models\Canal::where('foto','!=','')->orderBy('views','desc')->limit(4)->get(); as $Sugerido)


                <li>
                   <a href="{{url('canaluser')}}?idcanal={{$Sugerido->id}}">
                   <img class="img-fluid" alt="" src="{{ asset('videoplace')}}/{{$Sugerido->foto}}"> {{$Sugerido->nome}} <span class="badge badge-primary">{{$Sugerido->views}} views</span>
                   </a>
               </li>

                @endforeach


            </ul>
            </li>
     </ul>
