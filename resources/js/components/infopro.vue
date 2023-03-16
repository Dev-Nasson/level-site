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

                            <!-- <a href="about.html" class="main-btn arrow-btn">Ler mais</a> -->


                            <div keys="0" class="features-area ml-6" v-if="infopro.nome == 'Level School'">

                                <div class="features-item ">
                                    <div class="text">
                                        <h4>Visão estratégica de gestão académica </h4>
                                    </div>
                                </div>

                                <div class="features-item ">
                                    <div class="text">
                                        <h4>Processos académicos optimizados </h4>
                                    </div>
                                </div>

                                <div class="features-item ">
                                    <div class="text">
                                        <h4>Segurança de dados </h4>
                                    </div>
                                </div>

                                <div class="features-item ">
                                    <div class="text">
                                        <h4> Suporte humanizado</h4>
                                    </div>
                                </div>

                                <div class="features-item ">
                                    <div class="text">
                                        <h4>Facturas </h4>
                                    </div>
                                </div>

                                <div class="features-item ">
                                    <div class="text">
                                        <h4>Aprimoramento na captação de alunos </h4>
                                    </div>
                                </div>

                                <div class="features-item ">
                                    <div class="text">
                                        <h4>Comunicação assertiva com pais e estudantes </h4>
                                    </div>
                                </div>

                            </div>


                            <div keys="0" class="features-area ml-6" v-else-if="infopro.nome == 'Level-Learning'">

                                <div class="features-item ">
                                    <div class="text">
                                        <h4>Catálogo de Cursos e Disciplinas </h4>
                                        <p>Oferece seus conteúdos em um catálogo de cursos online que podem ser filtrados
                                            por categoria ou tema.</p>
                                    </div>
                                </div>

                                <div class="features-item ">
                                    <div class="text">
                                        <h4>Inscrições e Matriculas </h4>
                                        <p>Possiblita a inscrição em cursos e matriculas.</p>
                                    </div>
                                </div>


                                <div class="features-item ">
                                    <div class="text">
                                        <h4>Player de Aulas e Conteúdos </h4>
                                        <p>Disponibiliza conteúdos de maneira mais interativa e em qualquer formato com
                                            recursos de vídeo, PDF e muito mais.</p>
                                    </div>
                                </div>


                                <div class="features-item ">
                                    <div class="text">
                                        <h4>Textos Recomendados </h4>
                                        <p>Recomenda conteúdos de acordo com as preferências de cada aluno.</p>
                                    </div>
                                </div>

                                <div class="features-item ">
                                    <div class="text">
                                        <h4>Certificados </h4>
                                        <p>Emita certificados automaticamente para a conclusão de cada curso ou treinamento.
                                        </p>
                                    </div>
                                </div>

                                <div class="features-item ">
                                    <div class="text">
                                        <h4>Questões e Avaliações </h4>
                                        <p>Aplica avaliações com questões e alternativas em um ambiente controlado e seguro
                                            contra as colas​.</p>
                                    </div>
                                </div>

                                <div class="features-item ">
                                    <div class="text">
                                        <h4>Mural da Turma </h4>
                                        <p> Assume-se como uma rede social de aprendizagem usando nosso sistema de fórum,
                                            tópicos e mural da turma.</p>
                                    </div>
                                </div>

                            </div>


                            <div keys="0" class="features-area ml-6" v-else-if="infopro.nome == 'Level-People'">

                                <div class="features-item ">
                                    <div class="text">
                                        <h4>Registo de Funcionários e arquivo de coumentos obrigatorios </h4>
                                    </div>
                                </div>


                                <div class="features-item ">
                                    <div class="text">
                                        <h4>Registo de Docentes </h4>
                                    </div>
                                </div>

                                <div class="features-item ">
                                    <div class="text">
                                        <h4>Gestao de Assuduídade</h4>
                                    </div>
                                </div>

                                <div class="features-item ">
                                    <div class="text">
                                        <h4>Gestão de dados académicos de docentes. Listagens, cargos académicos, registos
                                            de obras publicadas, Niveis académicos</h4>
                                    </div>
                                </div>

                                <div class="features-item ">
                                    <div class="text">
                                        <h4>Gestão Individual de progressão e carreira</h4>
                                    </div>
                                </div>


                                <div class="features-item ">
                                    <div class="text">
                                        <h4>Folhas salariais</h4>
                                    </div>
                                </div>

                                <div class="features-item ">
                                    <div class="text">
                                        <h4>Mapas de Pagamento Bancário</h4>
                                    </div>
                                </div>

                                <div class="features-item ">
                                    <div class="text">
                                        <h4>Recibos</h4>
                                    </div>
                                </div>

                                <div class="features-item ">
                                    <div class="text">
                                        <h4>Gestão de contencioso</h4>
                                    </div>
                                </div>

                                <div class="features-item ">
                                    <div class="text">
                                        <h4>Contratos/Alertas prazos e arquivo digital do contrato</h4>
                                    </div>
                                </div>

                                <div class="features-item ">
                                    <div class="text">
                                        <h4>Mapas para remessa automática Segurança Social</h4>
                                    </div>
                                </div>

                                <div class="features-item ">
                                    <div class="text">
                                        <h4>Mapas para remessa automática à AGT</h4>
                                    </div>
                                </div>

                                <div class="features-item ">
                                    <div class="text">
                                        <h4>Modelo 2 para remessa à AGT</h4>
                                    </div>
                                </div>

                            </div>


                            <div keys="0" class="features-area ml-6" v-else>

                            </div>






                        </div>








                    </div>







                </div>
            </div>
        </section>








        <section class="service-area pt-50 "
            style="background-color:#fbfbfb; border-top: 1px solid #ebebeb; border-bottom: 1px solid #ebebeb;">

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


                        <router-link class="nav-link d-flex justify-content-center "
                            :to="{ name: 'sugerido', params: { id: segerido.id }, hash: '#sectiontopo' }">

                            <div class="team-item mb-55 wow fadeInUp" data-wow-delay=".2s">


                                <div class="img-holder" data-wow-delay=".2s"
                                    v-if="segerido.imagem_padrao == null || segerido.imagem_padrao == ''">
                                    <img src="/assets/images/team/img-1.jpg" alt="">
                                </div>


                                <div class="img-holder" data-wow-delay=".2s" v-else>
                                    <img :src="'/levelschool/' + segerido.imagem_padrao">

                                </div>


                                <div class="text text-center">

                                    <h4 class="mt-4"><a href="team.html"> {{ segerido.nome }} </a></h4>

                                    <p class="position" v-if="segerido.descricao.length < 100">
                                        {{ segerido.nome_dois }}
                                    </p>

                                    <p class="position" v-else> {{ segerido.nome_dois.substring(0, 20) + ".." }} </p>



                                </div>
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
            segeridos: []
        }
    },

    created() {
        let id = this.$route.params.id

        axios.get('/infopro/' + id)
            .then(({ data }) => (this.infopro = data))
            .catch(console.log('error'))

        axios.get('/segeridos/' + id).then((response) => {
            this.segeridos = response.data
            console.log(this.segeridos);
        })
    },

    mounted() {

        axios.get('/priprojecto').then((response) => {
            this.priprojecto = response.data
            console.log(this.priprojecto);
        }),

            axios.get('/segeridos/' + id).then((response) => {
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

<style>
.features-item {
    border-bottom: 1px solid #ccc;
}</style>