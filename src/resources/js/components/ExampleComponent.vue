<template>
<div class="col-md-4">
    <div class="card mb-3">
      <div class="card-header">
        <button type="button" class="btn btn-md btn-success" @click="click">Clear Cache</button>
      </div>
      <div class="card-body bg-dark text-white">
            {{ output }}
      </div>
    </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                output:'dsd',
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            click(){
                axios.get('/artisan-ui/cache_clear').then((response)=>{
                    this.output=response.data;
                }).catch((err)=>{
                    console.log(err);
                });
            }
        }
    }
</script>
