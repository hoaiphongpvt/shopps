$(document).ready(function() {
    // Tăng giảm số lương sản phẩm thêm vào giỏ hàng
    $("#decrease").click(function() {
        var currentQuantity = $("#quantity").val();
        var newQuantity = parseInt(currentQuantity) - 1;
        if (newQuantity < 1) {
            newQuantity = 1;
        }
        $("#quantity").val(newQuantity);
    })

    $("#increase").click(function() {
        var currentQuantity = $("#quantity").val();
        var newQuantity = parseInt(currentQuantity) + 1;
        $("#quantity").val(newQuantity);
    })

    // Tìm kiếm sản phẩm
    $("#btnSearch").click(function(event) {
        var value = $("#keyword").val();
        if (!value) {
            event.preventDefault();
            alert("Vui lòng nhập thông tin cần tìm!");
        }
    });
    
    // Phân trang
    // $(".page-link").click(function() {
    //     const page = $(this).data("page");  // Lấy giá trị của thuộc tính data-page
    //     $.ajax({
    //         url: "./mvc/controller/Home/pagination", // Đường dẫn tới controller xử lý phân trang
    //         type: "POST",
    //         data: { page: page },  // Truyền tham số page
    //         success: function(data) {
    //             // Xử lý dữ liệu trả về từ máy chủ
    //             console.log(data);
    //             // Đổ dữ liệu ra màn hình hoặc thực hiện các xử lý khác tùy theo dữ liệu
    //         },
    //         error: function(error) {
    //             console.error("Error:", error);
    //         }
    //     });
    // });
    
});