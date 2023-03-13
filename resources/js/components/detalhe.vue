<template>


  <div  ref="section" >





       <section class="fancy-text-block fancy-text-block-v2 pt-210 pb-90"  id="sectiontopo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="img-holder mb-50 wow fadeInLeft" data-wow-delay=".2s">
                            <img src="/assets/images/about/img-5.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-wrapper mb-50 wow fadeInRight" data-wow-delay=".4s">
                            <div class="section-title mb-30">
                                <!-- <span class="sub-title st-one">What We Do</span> -->
                                <h2>{{ detalhe.titulo }}</h2>
                                <!-- <p class="blue-dark">Professional Design Agency to provide solutions</p> -->
                            </div>
                            <p>
                                {{ detalhe.descricao }}
                            </p>
                            <!-- <a href="about.html" class="main-btn arrow-btn">Ler mais</a> -->
                        </div>
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

            detalhe:''

        }

    },

    created(){
  	let id = this.$route.params.id
  	axios.get('/detalhe/'+id)
  	.then(({data}) => (this.detalhe = data))
  	.catch(console.log('error'))
  },

    mounted() {



        /*      setInterval(() => {
                this.showMessages(this.selectedUserId);
             },1000); */

        // this.detalhe();

    },

    methods: {}



}











</script>

