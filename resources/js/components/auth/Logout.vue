<template>

</template>

<script>
    export default {
        name: "Logout",
        created() {
            localStorage.removeItem('token');
            localStorage.removeItem('user');
            this.$router.push({name: 'login'});
        }
    }
</script>

<style scoped>

</style>
