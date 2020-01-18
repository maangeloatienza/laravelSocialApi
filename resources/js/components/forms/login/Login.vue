<template>
    <div>
        <form action="">
            <input type="text" :model='user.username' placeholder="Username">
            <input type="password" :model='user.password' placeholder="Password">
            <button  v-on:click.prevent="handleSubmit" >Login</button>
        </form>
    </div>
</template>

<script>
export default {
    data () {
        return {
            user : {
                username : '',
                password : ''
            }
        }
    },
    methods : {
        handleSubmit : function (){
        axios.post('/login', {
            'username' : this.user.username,
            'password' : this.user.password,
        })
        .then(function (response) {
            console.log(response);
        })
        .catch(function (error) {
            console.log(error);
        });
    }
    }

}
</script>


<style>

</style>

