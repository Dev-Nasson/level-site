<template>
    <div>

        <!--====== Start Page-banner section ======-->
        <section class="page-banner bg_cover position-relative z-1">
            <div class="shape shape-one scene"><span data-depth="1"><img src="/assets/images/shape/shape-1.png"
                        alt=""></span></div>
            <div class="shape shape-two scene"><span data-depth="2"><img src="/assets/images/shape/shape-2.png"
                        alt=""></span></div>
            <div class="shape shape-three scene"><span data-depth="3"><img src="/assets/images/shape/shape-3.png"
                        alt=""></span></div>
            <div class="shape shape-four scene"><span data-depth="4"><img src="/assets/images/shape/shape-2.png"
                        alt=""></span></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-title">


                            <h1 v-if="sedois.titulo == null || sedois.titulo == ''"> Produtos da Levelsoft </h1>

                            <h1 v-else>{{ sedois.titulo }} </h1>

                            <ul class="breadcrumbs-link">
                                <li><a href="index.html">Início</a></li>
                                <li class="active">Projectos</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="page-banner-img" v-if="sedois.imagem_padrao == null || sedois.imagem_padrao == ''">
                            <img src="/assets/images/breadcrumb/img-3.jpg" alt="">
                        </div>


                        <div class="page-banner-img" v-else>
                            <img :src="'levelschool/' + sedois.imagem_padrao" alt="Image">
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!--====== Start Portfolio Section ======-->
        <section class="portfolio-area portfolio-area-v1 light-gray-bg pt-210 pb-130">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title mb-45 text-center wow fadeInUp">
                            <!-- <span class="sub-title st-one">Latest Work</span> -->
                            <h2> Trabalhos já concebidos </h2>
                            <p>Tecnologias de Investigação e Desenvolvimento</p>
                        </div>
                    </div>
                </div>

                <!-- <div class="row">

                <div class="col-lg-12">
                    <div class="portfolio-filter-button text-center mb-40 wow fadeInUp">
                        <ul class="filter-btn mb-30">
                            <li data-filter="*" class="active">Show All</li>
                            <li data-filter=".cat-1">Design</li>
                            <li data-filter=".cat-2">Branding</li>
                            <li data-filter=".cat-3">Development</li>
                            <li data-filter=".cat-4">SEO</li>
                            <li data-filter=".cat-5">UX/UI Design</li>
                        </ul>
                    </div>
                </div>
            </div> -->

                <div class="row portfolio-grid">




                    <div class="card-group">

<div class="card mr-3" v-for="(produtoprincipal, index) in produtoprincipals" :keys="index"  style="border:1px solid rgba(0,0,0,.125);  box-shadow: 0px 6px 12px 0px rgb(0 0 0 / 16%)">

    <img src="/assets/images/portfolio/img-2.jpg" class="card-img-top" alt=""  v-if="produtoprincipal.imagem_um == null || produtoprincipal.imagem_um == ''"  >

    <img :src="'levelschool/' + produtoprincipal.imagem_um" alt="Image" v-else>


    <div class="card-body">
        <h5 class="card-title">{{ produtoprincipal.nome }}</h5>

        
        <p class="card-text" v-if="produtoprincipal.descricao.length < 100" style="font-size: 1.1rem; color: #14171d;">
            {{produtoprincipal.nome_dois }}
        </p>

        <p class="card-text" v-else  style="font-size: 1.2rem; color: #14171d;">
            {{produtoprincipal.nome_dois.substring(0, 30) + ".."}}
                                               
        </p>
    </div>
    <div class="card-footer bg-white " style="border-top:1px solid #39f;">

        <small class="text-muted">

            <router-link class="nav-link d-flex justify-content-center " :to="{ name: 'infopro', params: { id: produtoprincipal.id }, hash: '#sectiontopo' }">
            <span class="btn btn-primary mt-2 ">Saiba mais</span>
           </router-link>

        </small>
        
    </div>
</div>





</div>







                </div>


                <!--        <div class="row">
                <div class="col-lg-12">
                    <div class="button-box text-center wow fadeInUp">
                        <a href="projects.html" class="main-btn arrow-btn"> Ver mais </a>
                    </div>
                </div>
            </div> -->


            </div>
        </section>
        <!--====== End Portfolio Section ======-->

    </div>
</template>





<script>

export default {

    data() {

        return {

            sedois: [],
            produtoprincipals: [],
        }
    },

    mounted() {

        /*       axios.get('/priprojecto').then((response) => {
                  this.priprojecto = response.data
                  console.log(this.priprojecto);
              }), */

        axios.get('/seguseccao').then((response) => {
            this.sedois = response.data
            console.log(this.sedois);
        }),

            // seguseccao

            axios.get('/produtoprincipals').then((response) => {
                this.produtoprincipals = response.data
                console.log(this.produtoprincipals);
            })

    },

    methods: {}
}

</script>

<style>
.portfolio-column {
    padding: 10px;
}

.cor_port {
    background: #fbfbfb;
    padding: 10px;
    border-bottom-left-radius: 7%;
    border-bottom-right-radius: 7%;
}


.estilo-img {
    border-top-left-radius: 7%;
    border-top-right-radius: 7%;
    border-top: 1px solid #ebebeb;
    border-left: 1px solid #ebebeb;
    border-right: 1px solid #ebebeb;
}
</style>

