$(document).ready(function() {
    $("#username").focus(function() {
        $("#msg-username").html("")
        $("#msg").html("")
    });

    $("#password").focus(function() {
        $("#msg-password").html("")
        $("#msg").html("")
    });


    // Check Login
    $("#formLogin").submit(function(event) {
        event.preventDefault(); // Ngăn chặn hành vi submit mặc định
    
        const username = $("#username").val();
        const password = $("#password").val();
    
        if (username === '') {
            $("#msg-username").html("Bạn phải nhập tên đăng nhập!");
        }
    
        if (password === '') {
            $("#msg-password").html("Bạn phải nhập mật khẩu!");
        }

        if (username && password) {
            $.post("Login/checkLogin", { username: username, password: password }, function(data) {
                if (data == 0) {
                    $("#msg").html("Tên tài khoản hoặc mật khẩu không đúng!");
                } else {
                    $("#formLogin")[0].submit(); // Gửi form nếu thông tin đúng
                }
            });
        }
    });
})