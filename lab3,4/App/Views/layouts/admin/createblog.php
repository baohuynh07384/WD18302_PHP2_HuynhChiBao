<?php

use App\Core\Sessions;
?>
<div class="content-wrapper">
    <form action="?url=BlogController/create" enctype="multipart/form-data" method="post" class="container-fluid">
        <div class="card card-primary mb-0">
            <div class="card-header">
                <h3 class="card-title">Thêm bài viết</h3>
            </div>
            <div class="card-body ">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tiêu đề</label>
                    <input type="text" name="name" class="form-control" placeholder="Nhập tên tiêu đề" value="">
                    <?php if (isset($_SESSION['tiêu đề'])) : ?>
                        <p style="color: red; margin: 0px;">
                            <?php echo Sessions::display_session('tiêu đề'); ?>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="exampleInputFile">Ảnh đại diện</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="image" onchange="updateFileName(this)">
                                <label class="custom-file-label" for="customFile">Chọn hình ảnh</label>
                            </div>
                        </div>
                        <?php if (isset($_SESSION['ảnh'])) : ?>
                            <p style="color: red; margin: 0px;">
                                <?php echo Sessions::display_session('ảnh'); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                    <div class="form-group col-6">
                        <label for="quantity">Tác giả</label>
                        <input type="text" name="author" class="form-control" placeholder="Nhập tác giả" value="<?= $_SESSION['user']['name'];?>">
                        <?php if (isset($_SESSION['tác giả'])) : ?>
                            <p style="color: red; margin: 0px;">
                                <?php echo Sessions::display_session('tác giả'); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="">Thể loại</label>
                        <input type="text" name="new_type" class="form-control" placeholder="Nhập loại tin" value="">
                        <?php if (isset($_SESSION['thể loại'])) : ?>
                            <p style="color: red; margin: 0px;">
                                <?php echo Sessions::display_session('thể loại'); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                    <div class="form-group col-6">
                        <label for="status">Trạng thái</label>
                        <select name="status" class="form-control">
                            <option value="1">Hiện</option>
                            <option value="0">Ẩn</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Nội dung</label>
                    <textarea id="summernote" name="content"></textarea>
                    <?php if (isset($_SESSION['nội dung'])) : ?>
                        <p style="color: red; margin: 0px;">
                            <?php echo Sessions::display_session('nội dung'); ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" name="upload" class="btn btn-primary">Tải lên</button>
            </div>
        </div>
    </form>
</div>