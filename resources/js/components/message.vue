<template>
    <div>
        <p class="list-group-item"><slot></slot></p>
        <small class="" >You</small>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style>
    small{
        float: right;
        background-color: #55CEFF;
        color: white;
        padding:3px;
        /*font-size:1.2rem;*/
       font-weight: bold;
        border-radius: 4px;
    }
</style>