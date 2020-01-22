<template>
    <div >
        <div class="">
            <header class='mb-5'>
                <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
                    <div class="container">
                        <form class="form-inline">
                            <input type="text" name="" id="" class="form-control form-control-sm my-2 mr-sm-2">
                            <button class="btn btn-dark btn-sm">Search</button>
                        </form>
                        <button type="button" class="navbar-toggler" data-toggle='collapse' data-target='#mainNav' aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="mainNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <router-link class="nav-link text-white" to="/" >Home</router-link>
                                </li>
                                <li class="nav-item">
                                    <router-link class="nav-link text-white" to="">Profile</router-link>
                                </li>
                                <li v-if='isLoggedIn' class="nav-item">
                                    <button
                                        type='button'
                                        class="nav-link btn btn-link text-white"
                                        v-on:click='logout'
                                        >
                                        Logout
                                    </button>
                                </li>

                                <li v-else class="nav-item">
                                    <button class='nav-link btn btn-link text-white' data-toggle="modal" data-target="#authenticationModal">
                                        Login
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
        </div>


    </div>
</template>


<script>

export default {
    components : {

    },
    data (){
        return {
            isLoggedIn : localStorage.user? true: false
        }
    },
    methods : {
        logout : function(){
            axios.post('logout')
            .then((response)=>{
                localStorage.clear();
                this.$router.go('/');
            })
            .catch((error)=>{
                console.log(error)
            })
        }
    },
    created : function(){
        console.log('LOGGED IN ? ',this.isLoggedIn);
    }
}
</script>

<style lang="stylus" scoped>

</style>
