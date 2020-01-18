<template>
    <div id="content">
        <div id='content-header'>
            <nav-header></nav-header>
        </div>
        <div id='content-container'>
            <div id='content-sidebar'>
                <nav-sidebar></nav-sidebar>
            </div>
        </div>
        <div>
            <router-view></router-view>
        </div>
    </div>
</template>

<script>

import NavHeader from './../header/Header';
import NavSidebar from './../sidebar/Sidebar';

export default {
    components : {
        'nav-header' : NavHeader,
        'nav-sidebar' : NavSidebar
    }
}
</script>

<style scoped>
    #content-container {
        display: grid;
        grid-template-columns : 2fr 6fr 1fr;
        grid-column-gap : 1em;
    }
    #content-header {
        display: grid;
        grid-template-columns: 1fr;
    }
    #content-sidebar {

    }
    #content-body {

    }
</style>
