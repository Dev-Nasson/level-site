
<template>
    <div>

        <!--====== Start About Section ======-->
        <section class="about-area about-area-v1 position-relative pt-130">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="img-holder-box mb-50">


                            <VueSlickCarousel :arrows="true" :dots="true" :infinite="true" :slidesToShow="1"
                                :slidesToScroll="1" :autoplay="true" :speed="2000" :autoplaySpeed="6000" v-bind="settings">

                                <div> <!-- Slide 1 -->

                                    <div class="img-holder wow fadeInLeft"
                                        v-if="inicios.imagem_padrao == null || inicios.imagem_padrao == ''">
                                        <!-- <img src="/assets/images/about/about-1.jpg" alt="Image"> -->

                                    </div>

                                    <div class="img-holder wow fadeInLeft" v-else>
                                        <!-- <img src="/assets/images/about/home.png" alt="Image"> -->
                                        <img :src="'levelschool/' + inicios.imagem_padrao" alt="Image">
                                    </div>

                                </div>


                                <div> <!-- Slide 2 -->

                                    <div class="img-holder wow fadeInLeft"
                                        v-if="inicios.imagem_padrao == null || inicios.imagem_padrao == ''">
                                        <!-- <img src="/assets/images/about/about-1.jpg" alt="Image"> -->

                                    </div>

                                    <div class="img-holder wow fadeInLeft" v-else>
                                        <!-- <img src="/assets/images/about/home.png" alt="Image"> -->
                                        <img :src="'levelschool/' + inicios.imagem_padrao" alt="Image">
                                    </div>

                                </div>

                                <div> <!-- Slide 3 -->

                                    <div class="img-holder wow fadeInLeft"
                                        v-if="inicios.imagem_padrao == null || inicios.imagem_padrao == ''">
                                        <!-- <img src="/assets/images/about/about-1.jpg" alt="Image"> -->

                                    </div>

                                    <div class="img-holder wow fadeInLeft" v-else>
                                        <!-- <img src="/assets/images/about/home.png" alt="Image"> -->
                                        <img :src="'levelschool/' + inicios.imagem_padrao" alt="Image">
                                    </div>

                                </div>

                                <div> <!-- Slide 4 -->

                                    <div class="img-holder wow fadeInLeft"
                                        v-if="inicios.imagem_padrao == null || inicios.imagem_padrao == ''">
                                        <!-- <img src="/assets/images/about/about-1.jpg" alt="Image"> -->

                                    </div>

                                    <div class="img-holder wow fadeInLeft" v-else>
                                        <!-- <img src="/assets/images/about/home.png" alt="Image"> -->
                                        <img :src="'levelschool/' + inicios.imagem_padrao" alt="Image">
                                    </div>

                                </div>


                            

                            </VueSlickCarousel>
                           

                            <div class="shape shape-one">
                                <span class="animate-float-y"><img src="assets/images/shape/circle-logo-2.png"
                                        class="circle-logo" alt="circle logo"></span>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-wrapper mb-50 wow fadeInRight">
                            <div class="section-title mb-15">
                                <span class="sub-title st-one">Quem somos</span>
                                <h2>
                                    {{ inicios.titulo }}
                                </h2>
                            </div>

                            <p>
                                {{ inicios.descricao }}
                            </p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta-area cta-area-v1 pt-100">
            <div class="container-1450" style="padding-left:0; padding-right:0; ">
                <div class="cta-wrapper dark-blue-bg">

                    <div class="row">
                        <div class="col-xl-8 col-lg-12">
                            <div class="text-wrapper wow fadeInUp">
                                <div class="section-title section-title-white mb-55">
                                    <span class="sub-title st-one">Vamos trabalhar juntos </span>
                                    <h2>O cliente é a razão da nossa existência <span class="fill-text"> Entre em contacto
                                        </span> </h2>
                                </div>
                                <a href="#" class="btn btn-dark p-2"> +244 935-543-445 <i class="fal fa-phone"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="service-area pt-90 pb-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center mb-55 wow fadeInUp">
                            <!-- <span class="sub-title st-one">Serviços</span> -->
                            <h2> Nossos Produtos </h2>
                            <p> Tecnologias de Investigação e Desenvolvimento </p>
                        </div>
                    </div>
                </div>


                <div class="row justify-content-center">


                    <!-- <div v-for="(user, index) in users" :keys="index" style=" width:100%; "> -->
                    <!-- @click.prevent="showMessages(user.id); detalhe(user.id); "> -->




                    <div class="card-group">


                        <div class="card mr-3" v-for="(produtoinicio, index) in produtoinicios" :keys="index"  style="border:1px solid rgba(0,0,0,.125);  box-shadow: 0px 6px 12px 0px rgb(0 0 0 / 16%)">


                            <router-link class=" " :to="{ name: 'infopro', params: { id: produtoinicio.id }, hash: '#sectiontopo' }">


                                <img src="/assets/images/portfolio/img-2.jpg" class="card-img-top" alt=""  v-if="produtoinicio.imagem_um == null || produtoinicio.imagem_um == ''"  >

                                <img :src="'levelschool/' + produtoinicio.imagem_um" alt="Image" v-else>


                                <div class="card-body">
                                    <h5 class="card-title">{{ produtoinicio.nome }}</h5>


                                    <p class="card-text" v-if="produtoinicio.descricao.length < 100" style="font-size: 1.1rem; color: #14171d;">
                                        {{produtoinicio.nome_dois }}
                                    </p>

                                    <p class="card-text" v-else  style="font-size: 1.2rem; color: #14171d;">
                                        {{produtoinicio.nome_dois.substring(0, 30) + ".."}}

                                    </p>
                                </div>

                                <div class="card-footer bg-white " style="border-top:1px solid #39f;">

                                    <small class="text-muted d-flex justify-content-center">

                                        <span class="btn btn-primary mt-2  ">Saiba mais</span>

                            <!--          <router-link class="nav-link d-flex justify-content-center " :to="{ name: 'infopro', params: { id: produtoinicio.id }, hash: '#sectiontopo' }">
                                        <span class="btn btn-primary mt-2 ">Saiba mais</span>
                                    </router-link> -->

                                    </small>

                                </div>

                            </router-link> 


                        </div>





                    </div>






                </div>



            </div>
        </section>

    </div>
</template>



<script>

import VueSlickCarousel from 'vue-slick-carousel'
import 'vue-slick-carousel/dist/vue-slick-carousel.css'
// optional style for arrows & dots
import 'vue-slick-carousel/dist/vue-slick-carousel-theme.css'



export default {

    // Estes dois elementos e do slide
    name: 'MyComponent',
    components: { VueSlickCarousel },

    data() {

        return {

            inicios: [],
            produtoinicios: [],

        }

    },


    mounted() {

        axios.get('/priseccao').then((response) => {
            this.inicios = response.data
            console.log(this.inicios);
        }),

            axios.get('/produtoinicios').then((response) => {
                this.produtoinicios = response.data
            })
    },

    methods: {





    }




}






</script>



