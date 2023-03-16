<template>
    <div ref="section">

        <section class="fancy-text-block fancy-text-block-v2 pt-210 pb-20" id="sectiontopo">
            <div class="container">
                <div class="row">


                    <div class="col-lg-6">






                        <div class="img-holder mb-50 wow fadeInLeft" data-wow-delay=".2s"
                            v-if="infopro.imagem_dois == null || infopro.imagem_dois == ''">
                            <img src="/assets/images/about/img-5.png" alt="">
                        </div>


                        <div class="img-holder mb-50 wow fadeInLeft" data-wow-delay=".2s" v-else>
                            <img :src="'/levelschool/' + infopro.imagem_dois" alt="Image">

                        </div>




                    </div>



                    <div class="col-lg-6">
                        <div class="text-wrapper mb-50 wow fadeInRight" data-wow-delay=".4s">
                            <div class="section-title mb-30">
                                <!-- <span class="sub-title st-one">What We Do</span> -->
                                <h2>{{ infopro.nome }}</h2>
                                <!-- <p class="blue-dark">Professional Design Agency to provide solutions</p> -->
                            </div>

                            <p style="text-align: justify;">
                                {{ infopro.descricao }}
                            </p>

                             <div v-if="infopro.nome=='Level School'">

                            <h5 class="pb-3" style="border-bottom: 2px solid #ebebeb;"> <i class="far fa-arrow-alt-circle-right"> </i> Visão estratégica de gestão académica</h5>

                            <h5 class="pb-3" style="border-bottom: 2px solid #ebebeb;"> <i class="far fa-arrow-alt-circle-right"> </i> Processos académicos optimizados</h5>
                            <h5 class="pb-3" style="border-bottom: 2px solid #ebebeb;"> <i class="far fa-arrow-alt-circle-right"> </i> Segurança de dados</h5>
                            <h5 class="pb-3" style="border-bottom: 2px solid #ebebeb;"> <i class="far fa-arrow-alt-circle-right"> </i> Suporte humanizado</h5>
                            <h5 class="pb-3" style="border-bottom: 2px solid #ebebeb;"> <i class="far fa-arrow-alt-circle-right"> </i> Facturas</h5>
                            <h5 class="pb-3" style="border-bottom: 2px solid #ebebeb;"> <i class="far fa-arrow-alt-circle-right"> </i> Aprimoramento na captação de alunos</h5>
                            <h5 class="pb-3" style="border-bottom: 2px solid #ebebeb;"> <i class="far fa-arrow-alt-circle-right"> </i> Comunicação assertiva com pais e estudantes</h5>

                             </div>

                             <div v-else>

                             </div>



                            <!-- <a href="about.html" class="main-btn arrow-btn">Ler mais</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

       <hr>

       <section class="team-area team-area-v2 pt-30 pb-70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center mb-55 wow fadeInUp">
                            <h3> Projectos sugeridos</h3>
                        </div>
                    </div>
                </div>
                <div class="row">


                    <div class="col-lg-3 col-md-6 col-sm-12" v-for="(segerido, index) in segeridos" :keys="index">


                        <router-link class="nav-link d-flex justify-content-center " :to="{ name: 'infopro', params: { id: segerido.id }, hash: '#sectiontopo' }">

                        <div class="team-item mb-55 wow fadeInUp" data-wow-delay=".2s">


                            <div class="img-holder" data-wow-delay=".2s"
                            v-if="segerido.imagem_padrao == null || segerido.imagem_padrao == ''">
                            <img src="/assets/images/team/img-1.jpg" alt="">
                           </div>


                        <div class="img-holder" data-wow-delay=".2s" v-else>
                            <img :src="'/levelschool/' + segerido.imagem_padrao" >

                        </div>






                            <div class="text text-center">



                                <h4 class="mt-4" ><a href="team.html"> {{segerido.nome}} </a></h4>



                                <p class="position" v-if="segerido.descricao.length < 100">
                                    {{segerido.nome_dois}}
                                </p>

                                <p class="position" v-else> {{ segerido.nome_dois.substring(0,20) + ".." }} </p>




                            </div>




asdasdas dkahdsadas
dasdasdsadsadsadsad
dsfsdfsdfsdfsdfsd
fdsfsdfdsgfsgsfgsgfsd
fsdfsdfsdfdf








                        </div>

                    </router-link>


                    </div>


                </div>
            </div>
        </section>

    </div>
</template>


<script>

//import moment from 'moment';

export default {

    data() {

        return {

            priprojecto: [],
            infopro: '',
            segeridos:[]
        }

    },

    created() {
        let id = this.$route.params.id

        axios.get('/infopro/' + id)
            .then(({ data }) => (this.infopro = data))
            .catch(console.log('error'))

            axios.get('/segeridos/'+id).then((response) => {
            this.segeridos = response.data
            console.log(this.segeridos);
        })
    },

    mounted() {

        axios.get('/priprojecto').then((response) => {
            this.priprojecto = response.data
            console.log(this.priprojecto);
        }),

        axios.get('/segeridos/'+id).then((response) => {
            this.segeridos = response.data
            console.log(this.segeridos);
        }),

            axios.get('/seguprojectos').then((response) => {
                this.seguprojectos = response.data
                console.log(this.seguprojectos);
            })

            /*setInterval(() => {
                this.showMessages(this.selectedUserId);
             },1000); */

            // this.detalhe();

    },

    methods: {}



}











</script>

