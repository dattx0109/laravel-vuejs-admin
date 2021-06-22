<template>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="single-info-page dashboard-page">
            <h3 class="dashboard-page-title">Chi tiết tài khoản</h3>
            <div class="dashboard-page-container">
                <form method="post" class="form-horizontal">
                    <table class="dashboard-frm-table form-table">
                        <tr>
                            <th scope="row">
                                <label>Tên người dùng</label>
                            </th>
                            <td>
                                <input value="" v-model="this.form.name"  name="name" type="text" class="form-control">
<!--                                <span class=" alert-form help-block m-b-none alert alert-danger alert-name"></span>-->
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">
                                <label>Email</label>
                            </th>
                            <td>
                                <input value="" v-model="this.form.email" name="email" type="text" class="form-control">
<!--                                <span class="help-block m-b-none alert alert-danger alert-form alert-email"></span>-->
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">
                                <label>Số điện thoại</label>
                            </th>
                            <td>
                                <input value="" v-model="this.form.phone "name="phone" type="text" class="form-control">
<!--                                <span class="alert-form help-block m-b-none alert alert-danger alert-phone"></span>-->
                            </td>
                        </tr>

<!--                        <tr>-->
<!--                            <th scope="row">-->
<!--                                <label>Trạng thái</label>-->
<!--                            </th>-->
<!--                            <td>-->
<!--                                <span class="label label-danger">Đã xóa</span>-->
<!--                                <span class="label label-primary">đang hoạt động</span>-->
<!--                            </td>-->
<!--                        </tr>-->

<!--                        <tr>-->
<!--                            <th scope="row">-->
<!--                                <label>Vai trò</label>-->
<!--                            </th>-->
<!--                            <td>-->
<!--                                <select name="role" data-placeholder="Chọn vai ..." class="chosen-select" multiple style="width:350px;" tabindex="4">-->
<!--                                    <option value="">Select</option>-->
<!--                                </select>-->
<!--                            </td>-->
<!--                        </tr>-->
                    </table>
                </form>
                <div class="dashboard-btn-group">
                    <button class="btn btn-primary btn-update" type="button">Lưu lại  </button>
                    <button class="btn btn-danger btn-delete" type="button" data-toggle="modal" data-target="#modal_delete_user"> Xóa tài khoản</button>
                    <button class="btn btn-warning btn-reset-password" type="button" data-toggle="modal" data-target="#modal_reset_user"> Đặt lại mật khẩu </button>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="modal_delete_user" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Xác nhận xóa tài khoản</h4>
                    </div>
                    <div class="modal-body">
                        <p>Bạn có chắc xóa tài khoản này</p>
                    </div>
                    <div class="modal-footer">
                        <div class="text-center">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary btn-delete-user" data-dismiss="modal">OK</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="modal_reset_user" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Xác nhận đặt lại mật khẩu</h4>
                    </div>
                    <div class="modal-body">
                        <p>Bạn có chắc đăt lại mật khẩu</p>
                    </div>
                    <div class="modal-footer">
                        <div class="text-center">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary btn-reset-user" data-dismiss="modal">OK</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "edit",
        data(){
          return {
              form: {
                  name: '',
                  email: '',
                  phone: ''
              }
          }
        },
        created() {
            if (!User.loggedIn()){
                this.$router.push({name: 'login'})
            }
            let id = this.$route.params.id;
            Request.get('/api/user/'+id)
                .then(res => {
                    this.form = res.data;
                })
        }
    }
</script>

<style scoped>

</style>
