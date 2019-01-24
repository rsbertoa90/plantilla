<template>
<div class="container mt-4">
    <div class="mt-4 row">
        <div class="col-12" 
              v-for="category in categories" 
              :key="category.id">
              
            <div class="card" itemscope itemtype="https://schema.org/Product">
                <a :href="category.slug"  class="d-block w-100" itemprop="url">
                    <v-lazy-image itemprop="image" class="card-img-top onhover" :src="category.image" 
                                            :alt="category.name" />
                    <div class="card-body">
                        <h5 class="card-title" itemprop="name"> {{category.name | ucFirst}} </h5>
                        <p v-if="category.homedescription" class="card-text crop-text texto" itemprop="description"> {{category.homedescription}} </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    computed : {
        categories(){
            return this.$store.getters['categories/getCategories'];
        }
    }
}
</script>

<style scoped lang="scss">
        .card-img-top{
            overflow:hidden;
        }

            .onhover:hover{
                 transform: scale(1.2);
                transition: all 1s;
            }           
        
</style>
