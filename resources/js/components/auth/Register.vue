<template>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="single-info-page dashboard-page">
            <h3 class="dashboard-page-title">Đăng ký tài khoản</h3>
            <form class="m-t" role="form" @submit.prevent="register">
                <div class="form-group">
                    <input type="text" class="form-control" v-model="form.name" name="name" placeholder="Họ và tên" >
                    <p v-if="errors.name" class="text-danger">{{errors.name[0]}}</p>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" v-model="form.email" name="email" placeholder="Email" >
                    <p v-if="errors.email" class="text-danger ">{{errors.email[0]}}</p>
                </div>
                <div class="form-group">
               <input type="password" class="form-control" v-model="form.password" name="password" placeholder="Mật khẩu" >
                    <p v-if="errors.password" class="text-danger ">{{errors.password[0]}}</p>
                </div>
               <div class="form-group">
                <input type="password" class="form-control" v-model="form.confirm_password" name="confirm_password" placeholder="Nhập lại mật khẩu" >
                   <p v-if="errors.confirm_password" class="text-danger ">{{errors.confirm_password[0]}}</p>
               </div>
                <div class="form-group">
                <div class="checkbox i-checks"><label> <input type="checkbox" v-model="accepted" true-value=true false-value=false><i></i> Agree the terms and policy </label>
                </div>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Đăng ký</button>
            </form>
        </div>
    </div>

</template>

<script>
    export default {
        name: "Register",
        created() {
            if (User.loggedIn()){
                this.$router.push({name: 'home'})
            }
        },
        data(){
            return {
                form: {
                    name: null,
                    email: null,
                    password: null,
                    confirm_password: null
                },
                accepted: false,
                errors : {}
            }
        },
        methods: {
            register(){
                axios.post('/api/auth/register', this.form)
                    .then(res => {
                        console.log(res)
                    })
                ;
            }
        }
    }
</script>

<style scoped>

</style>
