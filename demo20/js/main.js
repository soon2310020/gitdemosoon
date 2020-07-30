// code js để xử lý ajax thêm danh
// chờ html tải xong thì code js ms chạy

$(document).ready(function () {
//    code js
//    xử lý lưu dữ liệu khi user submit form
//    các trình duyêt có cơ chế lưu lại cache css và js, các bạn cần xóa cache trình duyệt
    $('#ajax-link').click(function () {
       // alert('clicked');
        var obj_ajax =
            {
                url: 'get_category_ajax.php',
                method: 'get',
                dataType: 'text',
                data: {

                },
            //    với chức năng liệt kê thì không cần gửi dữ liệu gì lên
            //    với các chức năng cập nhập và xóa cần phải id nên sẽ phải truyền tham số lên
                success:function (data) {
                    //biến chính là kết quẩ trả về của response của tab network
                    // console.log(data);
                    $('#result-ajax').html(data);
                }


            }
        $.ajax(obj_ajax);
    });

    $('#form').submit(function () {
        event.preventDefault();
        // alert('submiited') ;
        // lấy tất cả dữ liệu từ form
        // dùng hàm serialize không lấy được dữ liệu định dạng file

        var form_data = $(this).serialize();
        console.log(form_data);
        var obj_ajax =
            {
                //file xử lý
                url: 'ajax_create.php',
                //phương thức xử lý
                method: 'post',
                data: form_data,
                success: function (data) {
                    console.log(data);
                    if (data == 1) {
                        $('#form').before('insert thành công');

                    }
                    else {
                        $('#form').before('insert thất bại');

                    }

                }


            }
        //        gọi ajax
        $.ajax(obj_ajax);

        //    cách debug ajax chạy trên trang dựa vào inspect HTML
        //    ,tab network,phàn xhr chứa tất cả các url liên quan đến ajax nếu có

    });
});
