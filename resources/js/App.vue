<template>
    <div id="main">
        <Homepage></Homepage>
        <router-view></router-view>
    </div>
</template>


<script>
import Homepage from './views/homepage';
export default {
    components : {
        Homepage
    }
}

</script>


<style >

</style>
