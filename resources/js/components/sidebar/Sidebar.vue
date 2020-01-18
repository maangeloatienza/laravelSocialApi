<template>
    <div id="nav-sidebar">
        <div id='sidebar-user'>
            <h2>{{user.username}}</h2>
        </div>
    </div>
</template>


<script>
export default {
    data () {
        return {
            'user' : {
                username : 'Guest',
                first_name : '',
                last_name : ''
            }
        }
    },
    created : function (){

        if(localStorage.user){
            this.user.username = localStorage.user.username ? localStorage.user.username : 'Guest';
            this.user.first_name = localStorage.user.first_name ? localStorage.user.first_name : '';
            this.user.last_name = localStorage.user.last_name ? localStorage.user.last_name : '';
        }

    }
}
</script>

<style scoped>
    #nav-sidebar {
        display: grid;
        grid-template-columns: 1fr;
        background-color: burlywood;
    }

    #sidebar-user {
        height: 100px;
    }
</style>
