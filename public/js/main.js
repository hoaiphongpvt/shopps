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
        }
    });

    //Lọc
    $('#formFilter').submit(function(event) {
        var price = $('select[name="price"]').val();
        var ram = $('select[name="ram"]').val();
        var storage = $('select[name="storage"]').val();
    
        if (price === "" && ram === "" && storage === "") {
          $(".modal").show();
          event.preventDefault(); // Ngăn chặn việc gửi biểu mẫu nếu chưa chọn gì
        }
    });

    // Close modal
    $(".btn-close").click(function() {
        $(".modal").hide();
    })

});