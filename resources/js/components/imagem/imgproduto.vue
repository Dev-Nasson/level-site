
<template>
    <div>


        <div class="form-group row">
            <label class="control-label col-md-3"> Selecione a imagem
            </label>

            <div class="col-md-5">
                <input type="file" name="imagem_produto" class="default" id="" @change="onFileChange">
                <div class="preview mt-2 ">
                    <img class="" v-if="url" :src="url" alt="" accept="image/*" style="width:100px; height:60px;">
                </div>
            </div>



        </div>





    <!--
        <label>

            <span>
                imagem 1
                <input type="file" name="img_um" hidden @change="onFileChange" class="form-control hidden verificar">
            </span>

            <i class=" fa fa-check ml-2 checar hidden" style="color:#39f;"></i>

        </label>

        <div class="preview">
            <img class="rounded" v-if="url" :src="url" alt="" accept="image/*" style="width:100px; height:60px;">
        </div>
     -->


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
