<template>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title margin-ibox-title">
                    <div class="headerbox-add-box">
                        <h3>User</h3>
                        <div class="ibox-tools">
                            <!-- Button to Open the Modal -->
                            <a href="" class="">
                                <button type="button" class="btn btn-primary ibox-tool-add-new">
                                    <i class="fa fa-plus"></i>Thêm mới
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="headerbox-filter-box">
                        <div class="headerbox-filter-item">
                            <form method="post" action="/user">
                                <select name="role_id" data-placeholder="Chọn chức vụ ..." class="chosen-select"  tabindex="2">
                                    <option value="">Chọn chức vụ </option>
                                    <option>111</option>
                                </select>
                                <button type="submit">Lọc</button>
                            </form>
                        </div>
                        <div class="headerbox-items-count">Hiện có: user</div>
                    </div>
                </div>
                <div class="ibox-content no-padding">
                    <div class="table-responsive">
                        <table class="table table-striped checkbox-table boxshadow-table">
                            <thead>
                            <tr>
                                <th>
                                    STT
                                </th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Phone</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <a href="" class="table-title-link">
                                        2222
                                    </a>
                                    <div class="table-row-action">
                                            <span class="edit">
                                                <a href="">Sửa</a>
                                            </span>
                                        |
                                        <span class="delete">
                                                <a href="">Xóa</a>
                                            </span>
                                    </div>
                                </td>
                                <td>111</td>
                                <td>111</td>
                                <td>111</td>

                                <td>
                                    <span class="label label-danger">đã xóa</span>
                                    <span class="label label-primary">hoạt động</span>
                                </td>
                            </tr>
                            <tr>
                                <td>-
                                    <input class="checkbox-check-all" type="checkbox" value="">
                                    </td>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Phone</th>
                                <th>Status</th>
                                </tr>
                            </tbody>
                        </table>
                        <div class="alert alert-danger" role="alert">
                            Không tìm thấy user
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        name: "index"
    }
</script>

<style scoped>

</style>
