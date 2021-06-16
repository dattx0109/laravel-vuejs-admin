<template>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="single-info-page dashboard-page">
            <h3 class="dashboard-page-title">Đăng ký tài khoản</h3>
            <form class="m-t" role="form" @submit.prevent="register">
                <div class="form-group">
                    <input type="text" class="form-control" v-model="form.name" name="name" placeholder="Họ và tên" >
                    <p v-if="errors.name" class="text-danger">{{errors.name[0]}}</p>
                    <p v-if="errorClient.name" class="text-danger">{{errorClient.name}}</p>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" v-model="form.email" name="email" placeholder="Email" >
                    <p v-if="errors.email" class="text-danger ">{{errors.email[0]}}</p>
                    <p v-if="errorClient.email" class="text-danger ">{{errorClient.email}}</p>
                </div>
                <div class="form-group">
               <input type="password" class="form-control" v-model="form.password" name="password" placeholder="Mật khẩu" >
                    <p v-if="errors.password" class="text-danger ">{{errors.password[0]}}</p>
                    <p v-if="errorClient.password" class="text-danger ">{{errorClient.password}}</p>
                </div>
               <div class="form-group">
                <input type="password" class="form-control" v-model="form.confirm_password" name="confirm_password" placeholder="Nhập lại mật khẩu" >
                   <p v-if="errors.confirm_password" class="text-danger ">{{errors.confirm_password[0]}}</p>
                   <p v-if="errorClient.confirm_password" class="text-danger ">{{errorClient.confirm_password}}</p>
               </div>
                <div class="form-group">
                <div class="checkbox i-checks"><label> <input type="checkbox" v-model="accepted" true-value='yes' false-value='no'><i></i> Agree the terms and policy </label>
                    <p v-if="errorClient.accepted" class="text-danger ">{{errorClient.accepted}}</p>
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
                accepted: 'no',
                errors : {},
                errorClient: {}
            }
        },
        methods: {
            register(){
                let isValid = this.validate();
                if (isValid){
                    axios.post('/api/auth/register', this.form)
                        .then(res => {
                            User.responseAfterLogin(res);
                            Toast.fire({
                                icon: 'success',
                                title: 'Đăng ký thành công'
                            });
                            this.$router.push({name: 'home'});
                        })
                        .catch(error => {
                            this.errors = error.response.data.errors !== undefined? error.response.data.errors: {};
                            Toast.fire({
                                icon: 'error',
                                title: 'Đăng ký thất bại'
                            });
                        })
                }
            },
            validate(){
                let isValid = true;
                let errors = {};
                if (this.form.name == undefined){
                    isValid = false;
                    errors.name = 'Đây là trường bắt buộc';
                }
                if (this.form.email == undefined){
                    isValid = false;
                    errors.email = 'Đây là trường bắt buộc';
                }
                if (this.form.password == undefined){
                    isValid = false;
                    errors.password = 'Đây là trường bắt buộc';
                }
                if (this.form.confirm_password == undefined){
                    isValid = false;
                    errors.confirm_password = 'Đây là trường bắt buộc';
                }
                if (this.accepted == 'no'){
                    isValid = false;
                    errors.accepted = 'Bạn chưa đồng ý điều khoản';
                }
                this.errorClient = errors;
                return isValid;
            }
        }

    }
</script>

<style scoped>

</style>
