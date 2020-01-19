<template>
    <div >
        <div class="">
            <nav class="navbar navbar-expand-lg navbar-light bg-info sticky-top">
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
                            <li class="nav-item">
                                <router-link class="nav-link text-white" to="">Logout</router-link>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>


    </div>
</template>


<script>
export default {
    data (){
        return {
            isLoggedIn : localStorage.user? true: false
        }
    }
}
</script>

<style lang="stylus" scoped>

</style>
