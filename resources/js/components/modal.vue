<template>
    <div>
        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="authenticationModal" tabindex="-1" role="dialog" aria-labelledby="authenticationModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title ml-auto" id="authenticationModalTitle">
                        <slot name="modalTitle"/>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <slot name="modalContent"></slot>
                </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    components : {

    }
}
</script>

<style scoped>

</style>
