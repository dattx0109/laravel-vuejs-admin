<template>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="single-info-page dashboard-page">
            <h3 class="dashboard-page-title">Thêm mới tài khoản</h3>
            <div class="dashboard-page-container">
                <div class="alert alert-success alert-dismissible" id="alert-created-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong>
                </div>
                <form action="" method="post" class="form-horizontal">
                    @csrf
                    <table class="dashboard-frm-table form-table">
                        <tr>
                            <th scope="row">
                                <label for="name">Tên người dùng</label>
                            </th>
                            <td>
                                <input value=""  name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nguyễn Văn A">
                                <span class="help-block m-b-none alert alert-danger"></span>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <label for="name">Email</label>
                            </th>
                            <td>
                                <input value="" name="email" type="text" class="form-control @error('email') is-invalid @enderror" placeholder="vana@gmail.com">
                                <span class="help-block m-b-none alert alert-danger"></span>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <label for="name">Số điện thoại</label>
                            </th>
                            <td>
                                <input value="" type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="0991225777">
                                <span class="help-block m-b-none alert alert-danger"></span>
                            </td>
                        </tr>
                    </table>
                    <div class="dashboard-btn-group">
                        <button class="btn btn-white" type="reset">Reset</button>
                        <button class="btn btn-primary" type="submit">Lưu lại  </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "store"
    }
</script>

<style scoped>

</style>
