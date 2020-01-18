<template>
    <div id='nav-header'>
        <nav>
            <!-- Icon -->
            <div id='nav-icon' class="nav-settings">
                <a href="/">
                    <img src="">
                </a>
            </div>
            <!-- Search Bar -->
            <div  class="nav-settings">
                <form action="" id='nav-search'>
                    <input type="text" name="search" v-model="navProperties.navSearch">
                    <input type="submit" value="Search">
                </form>
            </div>
            <!-- User auth -->
            <div id='nav-list' class="nav-settings">
                <ul>
                    <li>
                        <router-link to='/'>Home</router-link>
                    </li>
                    <li v-show="navProperties.isLoggedin">
                        <router-link to='/profile'>
                            Profile
                        </router-link>
                    </li>
                    <li v-show="!navProperties.isLoggedin">
                        <router-link to='/register'>
                            Register
                        </router-link>
                    </li>
                    <li v-show="navProperties.isLoggedin">
                        <router-link to='/logout'>
                            Logout
                        </router-link>
                    </li>
                    <li v-show="!navProperties.isLoggedin">
                        <router-link :to="{name : 'login'}">
                            Login
                        </router-link>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</template>


<script >
export default {
    data() {
        return {
            navProperties : {
                navSearch : 'Gelo',
                isLoggedIn : localStorage.user ? true : false

            },
        }
    }
};
</script>

<style scoped>
    nav {
        display: grid;
        grid-template-columns : 2fr 4fr 3fr;
        grid-gap: 1em;
        height: 40px !important;
    }

    ul {
        text-decoration: none;
    }
    ul li {
        display: grid;
        list-style: none;
        float: left;
        width: 33%;
    }

    input[type="text"] {
        padding-right: 50px;
    }

    input[type="submit"] {
        margin-left: -50px;
    }

    /* Checking */
    nav :nth-child(odd){
        background-color: gray;
    }

    #nav-search {
        display: grid;
        grid-template-columns:  6fr 1fr;
        height : 20px;
        margin: 10px;
    }


</style>
