<template>
    <div>


        <!--====== Start Page-banner section ======-->
        <section class="page-banner bg_cover position-relative z-1">
            <div class="shape shape-one scene"><span data-depth="1"><img src="assets/images/shape/shape-1.png"
                        alt=""></span></div>
            <div class="shape shape-two scene"><span data-depth="2"><img src="assets/images/shape/shape-2.png"
                        alt=""></span></div>
            <div class="shape shape-three scene"><span data-depth="3"><img src="assets/images/shape/shape-3.png"
                        alt=""></span></div>
            <div class="shape shape-four scene"><span data-depth="4"><img src="assets/images/shape/shape-2.png"
                        alt=""></span></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="page-title">
                            <h1> Sobre nós </h1>
                            <ul class="breadcrumbs-link">
                                <li><a href="index.html">Home</a></li>
                                <li class="active"> Sobre nós </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="page-banner-img">
                            <img src="assets/images/breadcrumb/img-1.jpg" alt="">
                            <div class="play-content">
                                <a href="https://www.youtube.com/watch?v=AT6oSIDbGkw" class="video-popup"><i
                                        class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Page-banner section ======-->

        <!--====== Start About section ======-->
        <section class="about-area about-area-v3 pt-210 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">


                        <div class="img-holder mb-50 wow fadeInLeft" style="border:1px solid #ebebeb;" v-if="sobressegu.imagem_padrao == null || sobressegu.imagem_padrao == ''">
                            <img src="assets/images/about/sobre.png" alt="">
                        </div>

                        <div class="img-holder mb-50 wow fadeInLeft" style="border:1px solid #ebebeb;" v-else>
                            <img :src="'levelschool/' + sobressegu.imagem_padrao" alt="Image">
                        </div>
                    </div>

                    <div class="col-lg-6">

                        <div class="text-wrapper mb-50 wow fadeInRight">
                            <div class="section-title mb-25">
                                <span class="sub-title st-one"> Sobre nós </span>
                                <h2> Quem somos ? </h2>

                                <p class="blue-dark"> Level-Soft - Tecnologias de Investigação e Desenvolvimento </p>
                            </div>

                            <p style="text-align: justify;" v-show="!descricaosobre">
                                {{ sobressegu.descricao.substring(0,400) + ".." }}
                            </p>

                            <p  v-show="descricaosobre" style="text-align: justify;">
                                {{ sobressegu.descricao }}

                            </p>

                            <a class="btn-link" style="cursor:pointer;" @click.prevent="descricaosobre=true; ">Ler mais</a>

                        </div>


                    </div>


                </div>
            </div>
        </section><!--====== End About section ======-->

        <section class="service-area pt-50 pb-80 " style="background-color:#fbfbfb;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center mb-55 wow fadeInUp">
                            <!-- <span class="sub-title st-one">Serviços</span> -->
                            <!-- <h2>Solução Digital &amp; Design</h2> -->
                            <!-- <p>Levelsoft - Missão,visão e valores </p> -->
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">


                    <div class="col-lg-4 col-md-6 col-sm-12"   v-for="(sobrestre, index) in sobrestres" :keys="index">

                        <div class="service-item service-style-one mb-40 wow fadeInDown" data-wow-delay=".3s">

                            <div class="icon d-flex justify-content-center">
                                <i :class="sobrestre.icone" style="font-size: 2.4rem;"></i>
                            </div>

                            <div class="text ">
                                <h3 class="title d-flex justify-content-center"><a > {{sobrestre.titulo}} </a></h3>

                                <ul class="">

                                    <li  v-if="sobrestre.descricao.length > 50" style="text-align: justify; padding-bottom:10px;" class="mt-2">
                                        {{sobrestre.descricao.substring(0,900) + ".." }}
                                    </li>

                                    <li style="text-align: justify;" v-else>
                                        {{sobrestre.descricao}}
                                    </li>

                                </ul>


                            </div>


                        </div>
                    </div>




                </div>
            </div>
        </section>

    </div>
</template>


<script>

export default {

    data() {

        return {
            sobressegu: '',
            sobrestres:[],
            descricaosobre: false,
        }
    },

    mounted() {

        axios.get('/sobrestres').then((response) => {
                this.sobrestres = response.data
                console.log(this.sobrestres);
            }),

            axios.get('/sobressegu').then((response) => {
                this.sobressegu = response.data
                console.log(this.sobressegu);
            })
    },

    methods: {}
}

</script>
