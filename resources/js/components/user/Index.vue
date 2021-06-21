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
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="user in users">
                                <td>
                                    STT
                                </td>
                                <td>
                                    <a href="" class="table-title-link">
                                        {{ user.name }}
                                    </a>
                                </td>
                                <td>
                                    {{ user.email }}
                                </td>
                                <td>
                                    <div>
                                            <span class="edit">
                                                <a @click="">Sửa</a>
                                            </span>
                                        |
                                        <span class="delete">
                                                    <a @click.prevent="deleteItem(user.id)">Xóa</a>
                                            </span>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div v-if="users.length == 0" class="alert alert-danger" role="alert">
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
        name: "index",
        data(){
            return {
                users: [],
            }
        },
        created() {
            Request.get('/api/user/')
                .then(res => {
                    this.users = res.data.data;
                });
        },
        methods: {
            deleteItem(itemId){
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                })
                    .then(result => {
                        if (result.isConfirmed){
                            Request.delete()
                        }
                    })
            }
        }


    }
</script>

<style scoped>

</style>
