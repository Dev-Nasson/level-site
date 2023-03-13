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
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-title">
                            <h1>Nossos projectos </h1>
                            <ul class="breadcrumbs-link">
                                <li><a href="index.html">Início</a></li>
                                <li class="active">Serviço</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">



                        <div class="page-banner-img"
                            v-if="priprojecto.imagem_padrao == null || priprojecto.imagem_padrao == ''">
                            <img src="assets/images/breadcrumb/img-2.jpg" alt="">
                        </div>

                        <div class="page-banner-img" v-else>
                            <img :src="'levelschool/' + priprojecto.imagem_padrao" alt="Image">
                        </div>




                    </div>
                </div>
            </div>
        </section><!--====== End Page-banner section ======-->


        <section class="features-area pt-130">
            <div class="container">
                <div class="row">


                    <div class="col-lg-12">

                        <div class="features-list mb-50 wow fadeInRight" v-for="(projectoprici, index) in projectopricis"
                            :keys="index">


                            <div class="features-item mb-30">
                                <div class="text">
                                    <h4> {{ projectoprici.titulo }} </h4>
                                    <p>

                                        <p v-if="projectoprici.descricao.length < 100"> {{projectoprici.descricao }} </p>

                                        <p v-else> {{ projectoprici.descricao.substring(0, 400) + ".." }}</p>




                                    </p>




                                </div>
                            </div>




                        </div>
                    </div>






                </div>
            </div>
        </section><!--====== End Features section ======-->

    </div>
</template>



<script>

//import moment from 'moment';

export default {

    data() {

        return {

            priprojecto: [],
         //   segusecservico: [],
            projectopricis: []
            // messages: [],
            // selectedUserId: '',
            // single: '',
            //  css: "height:600px; width:30%; ",
            //  body:'',
            // moment:moment,
            // image:''
        }

    },


    mounted() {

        axios.get('/priprojecto').then((response) => {
            this.priprojecto = response.data
            console.log(this.priprojecto);
        }),


    /*         axios.get('/segusecservico').then((response) => {
                this.segusecservico = response.data
                console.log(this.segusecservico);
            }),

 */
            axios.get('/projectopricis').then((response) => {
                this.projectopricis = response.data
                console.log(this.projectopricis);
            })



    },

    methods: {}

}


</script>

