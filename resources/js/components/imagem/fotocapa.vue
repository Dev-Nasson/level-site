
<template>
    <div class="">


        <div id="visualiza-capa ">
            <img class="rounded position-absolute comprimento" v-if="url" :src="url" alt="" accept="image/*">

        </div>


        <!--Vingular uma foto de capa -->
        <form class="float-right mt-0 position-absolute mb-3 mr-4" method="POST" id="carregar_capa"
            style="right:0; z-index:999; bottom:0; ">




            <label style="width: auto;">
                <span class="bg-dark p-2 text-white  ">
                    <input type="file" id="capa" name="visualizarcapa" hidden @change="onFileChange"
                        class="custom-file-upload" required="">
                    Trocar foto de capa</span>
            </label>

        </form>





    </div>
</template>

<script>
export default {

    data() {
        return {
            url: ''
        }
    },
    methods: {
        onFileChange(e) {
            const file = e.target.files[0];
            this.url = URL.createObjectURL(file)
        }
    }

}
</script>
