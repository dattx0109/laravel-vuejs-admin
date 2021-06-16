<template>
    <div class="loginColumns animated fadeInDown">
        <div class="row">
            <div class="col-md-6">
                <h2 class="font-bold">Welcome to Samacom system </h2>

                <p>
                    Samacom trực thuộc Công ty Cổ phần đào tạo Nguồn nhân lực HRP Việt Nam, đơn vị tiên phong cung ứng và đào tạo nhân viên kinh doanh máu lửa, nhiệt huyết, có thái độ tốt và kỹ năng chuyên môn bài bản cho các doanh nghiệp, tổ chức tại Việt Nam.
                </p>

                <p>
                    Sứ mệnh: Là đơn vị kết nối nhân sự về Sales với chất lượng và sự phù hợp tốt nhất cho các doanh nghiệp Việt Nam, nâng tầm sự phát triển của các doanh nghiệp Việt vươn tầm thế giới.
                </p>

            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <form class="m-t" role="form" @submit.prevent="login">
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" v-model="form.email" placeholder="Email hoặc số điện thoại">
                            <p v-if="errors.email" class="text-danger pull-right">{{ errors.email[0] }}</p>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" value="" name="password" v-model="form.password" placeholder="Password">
                            <p v-if="errors.password" class="text-danger pull-right">{{ errors.password[0] }}</p>
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                        <button class="btn btn-sm btn-white" type="button"><router-link to="/register">Đăng ký</router-link></button>
                    </form>
                    <p class="m-t">
                        <small>Thông tin liên lạc liên hệ SAMACOM TEAM</small>
                        <br/>
                        <small class="text-danger">Phone: 0868888336</small>
                    </p>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Copyright SAF Company
                <a href="https://samacom.com.vn">
                    <small class="text-info"> Samacom</small>
                </a>
            </div>
            <div class="col-md-6 text-right">
                <small>© 2019-2020</small>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "login",
        created(){
          if (User.loggedIn()){
              this.$router.push({name: 'home'})
          }
        },
        data(){
            return {
                form: {
                    email: null,
                    password: null
                },
                errors: {}
            }
        },
        methods: {
            login(){
                axios.post('/api/auth/login', this.form)
                    .then(res => {
                        User.responseAfterLogin(res);
                        Toast.fire({
                            icon: 'success',
                            title: 'Đăng nhập thành công'
                        });
                        this.$router.push({name: 'home'});
                    })
                    .catch(error => {
                        this.errors = error.response.data.errors !== undefined? error.response.data.errors: {};
                        Toast.fire({
                            icon: 'warning',
                            title: 'Email hoặc mật khẩu không đúng'
                        });
                    })
            }
        }
    }
</script>

<style scoped>

</style>
