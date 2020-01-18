<template>
    <div >
        <app-content></app-content>
        <router-view></router-view>
    </div>
</template>


<script>
import Content from './components/content/Content'

export default {
    components : {
        'app-content' : Content
    }
}

</script>


<style >
    #wrapper {
        display: grid;
        /* grid-template-columns : 1fr 3fr 2fr; */
        grid-template-columns : repeat(3, 1fr 3fr 1fr);
        grid-auto-rows: minmax(100px,auto);
        grid-column-gap : 1em;
    }

</style>
