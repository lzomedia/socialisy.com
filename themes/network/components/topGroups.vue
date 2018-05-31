<template>
    <div class="notification">
        {{ body }}
        welcome
    </div>
</template>

<script>
    export default {
        data() {
            return {
                body: 'I am a notification.'
            }
        }
    }
</script>

<style>
    .notification {
        background: red;
    }
</style>