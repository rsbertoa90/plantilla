<template>
    
    <div class="row">
             <div class="col-12">
            <a href="/admin/lista-de-precios" class="btn btn-outline-info">  
                Refrescar Lista de Precios
            </a>
            <a href="/super/failed-jobs" class="btn btn-outline-danger">  
                Failed jobs
            </a>
        </div>
        
        <div class="col-12">
            <hr>
            <super-categories></super-categories>
            <hr>
        </div>
        <div class="col-12 mt-4">
            <hr>
            <super-metadata></super-metadata>
            <hr>
        </div>
        
    </div>
</template>

<script>
import superCategories from './categories.vue';
import superMetadata from './metadata.vue'
export default {
    components : {
        superCategories,
        superMetadata
    },
    data(){
        return{
            
        }
    }

}
</script>
