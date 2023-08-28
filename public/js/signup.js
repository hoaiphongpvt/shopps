$(document).ready(function() {

    $("#username").blur(function() {
        const username = $(this).val()
        $.post("SignUp/checkUserName", { username: username }, function(data) {
            if (data > 0) {
                $("#msg-username").html("Tên tài khoản đã tồn tại!")
                $("#btnRegister").prop("disabled", true)
            } else {
                $("#msg-username").html("")
                $("#btnRegister").prop("disabled", false)
            }
        })
    })

    $("#btnRegister").click(function() {
        const fullname = $("#fullname").val();
        const email = $("#email").val();
        const phoneNumber = $("#phoneNumber").val();
        const address = $("#address").val();
        const dayOfBirth = $("#dayOfBirth").val();
        const username = $("#username").val();
        const password = $("#password").val();
        const rePassword = $("#repassword").val();
        const cbTerms = $("#Terms").prop("checked")

        if (fullname === '') {
            $("#msg-fullname").html("Bạn phải nhập đầy đủ họ tên!")
        }

        if (email === '') {
            $("#msg-email").html("Bạn phải nhập email!")
        }

        if (phoneNumber === '') {
            $("#msg-phoneNumber").html("Bạn phải nhập số điện thoại!")
        }

        if (address === '') {
            $("#msg-address").html("Bạn phải nhập địa chỉ!")
        }

        if (dayOfBirth === '') {
            $("#msg-dayOfBirth").html("Bạn phải chọn ngày sinh!")
        }

        if (username === '') {
            $("#msg-username").html("Bạn phải nhập tên đăng nhập!")
        }

        if (password === '') {
            $("#msg-password").html("Bạn phải nhập nhập mật khẩu!")
        }

        if (password && rePassword === '') {
            $("#msg-repassword").html("Bạn phải nhập lại mật khẩu!")
        }

        if (rePassword !== password) {
            $("#msg-repassword").html("Mật khẩu nhập lại không đúng!")
        }

        if (!cbTerms) (
            $("#msg-Terms").html("Bạn phải đồng ý với các điều khoản và dịch vụ!")
        )

        $("#fullname").focus(function() {
            $("#msg-fullname").html("")
        });

        $("#email").focus(function() {
            $("#msg-email").html("")
        });

        $("#phoneNumber").focus(function() {
            $("#msg-phoneNumber").html("")
        });

        $("#address").focus(function() {
            $("#msg-address").html("")
        });

        $("#dayOfBirth").focus(function() {
            $("#msg-dayOfBirth").html("")
        });

        $("#username").focus(function() {
            $("#msg-username").html("")
        });

        $("#password").focus(function() {
            $("#msg-password").html("")
        });

        $("#rePassword").focus(function() {
            $("#msg-rePassword").html("")
        });

        $("#Terms").change(function() {
            $("#msg-Terms").html("")
        });

        if (fullname && email && phoneNumber && address && dayOfBirth && username && password && rePassword && cbTerms) {
            $.post("SignUp/Register", { fullname: fullname, email: email, phoneNumber: phoneNumber, address: address, dayOfBirth: dayOfBirth, username: username, password: password }, function(data) {
                $("#modalRegister").show()
            })
        }
    })
})