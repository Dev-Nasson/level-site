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
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="page-title text-center">
                            <h1> Contacta-nos </h1>
                            <ul class="breadcrumbs-link">
                                <li><a href="index.html">Início</a></li>
                                <li class="active">Contacta-nos</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--====== End Page-banner section ======-->
        <section class="contact-info-v1 pt-130">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="section-title mb-60">
                            <!-- <span class="sub-title st-one">Get In Touch</span> -->
                            <h2> Informação de contacto </h2>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">


                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="information-item info-item-one mb-30 wow fadeInUp" data-wow-delay=".15s">
                                    <div class="icon">
                                        <i class="far fa-map-marker-alt"></i>
                                    </div>
                                    <div class="info">
                                        <h4> Localização</h4>
                                        <p>{{ contacpris.localizacao }}</p>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="information-item info-item-one mb-30 wow fadeInUp" data-wow-delay=".15s">
                                    <div class="icon">
                                        <i class="far fa-envelope-open-text"></i>
                                    </div>
                                    <div class="info">
                                        <h4> Endereço de email</h4>
                                        <p>{{ contacpris.email_address }}</p>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="information-item info-item-one mb-30 wow fadeInUp" data-wow-delay=".15s">
                                    <div class="icon">
                                        <i class="far fa-phone"></i>
                                    </div>
                                    <div class="info">
                                        <h4> Telemóvel</h4>
                                        <p>{{ contacpris.telefone }}</p>

                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="information-item info-item-one mb-30 wow fadeInUp" data-wow-delay=".15s">
                                    <div class="icon">
                                        <i class="far fa-clock"></i>
                                    </div>
                                    <div class="info">
                                        <h4> Horas de trabalho</h4>
                                        <p>{{ contacpris.horas_trabalho }}</p>

                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="map-box mb-30">
                            <iframe
                                src="https://maps.google.com/maps?q=new%20york&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
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

            contacpris: [],
        }

    },


    mounted() {

        axios.get('/contacpris').then((response) => {
            this.contacpris = response.data
            console.log(this.contacpris);
        })

        /*      setInterval(() => {
                this.showMessages(this.selectedUserId);
             },1000); */

        // this.detalhe();

    },

    methods: {}

}







</script>




