<template>
    <div>
        <form class="form-group" id="custom-form">
            <div id="form-header">
                <slot name="formHeader"></slot>
            </div>
            <div id="form-control">
                <slot name="formField"></slot>
            </div>
            <div id="form-control">
                <slot name="formControl"></slot>
            </div>
            <div id="form-control">
            </div>
        </form>

    </div>
</template>

