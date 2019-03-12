<template>
    <div>
        <navAdmin v-if="user && user.role_id < 3"></navAdmin>
        <navUser v-else></navUser>
    </div>
</template>


<script>
import navUser from './nav-user.vue';
import navAdmin from './nav-admin.vue';
export default {
    components:{navUser,navAdmin},
    data(){
        return{
            user:null,
        }
    },
    mounted(){
        this.$http.get('/getuser')
            .then(res => {
                this.user = res.data;
            });

    }

}
</script>
