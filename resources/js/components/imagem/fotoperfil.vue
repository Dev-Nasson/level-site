  
  <template>




                <div style="width:100%;">  

                              
        

       
                                                    

                        </div>







</template>

<script>
  export default {

    data(){
      return {
        url:'',
      }
    },
    methods:{
      onFileChange(e){
      const file = e.target.files[0];
      this.url = URL.createObjectURL(file)
      }
    }

  }
</script>
