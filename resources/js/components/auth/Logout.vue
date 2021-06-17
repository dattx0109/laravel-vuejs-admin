<template>

</template>

<script>
    export default {
        name: "Logout",
        created() {
            localStorage.removeItem('token');
            localStorage.removeItem('user');
            Toast.fire({
                icon: 'success',
                title: 'Đăng xuất thành công'
            });
            this.$router.push({name: 'login'});
        }
    }
</script>

<style scoped>

</style>
