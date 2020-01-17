<template>
    <div id='wrapper'>

    </div>
</template>


<script>
import NavHeader from './components/header/Header'

export default {
    components : {
        'nav-header' : NavHeader
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
