<p>nhập email vào đây</p>
<input  type="email" placeholder="abc@email.com" id="send_email"> <button onclick="sendMail()">Send</button>

<div id= "done"></div>

<script>
    function sendMail()
    {
        email = $("#send_email").val();
        url = "<?php echo  base_url()."ApiAjax/resetPass" ?>";
        $.ajax({
            method: "POST",
            dataType: "json",
            url:url,
            async: false,
            data:{"email": email}
        }).done(function(callback){
                   
        });
        $("#done").text("Một Đường link thay đổi mật khẩu đã được gửi đến email của bạn đã được gửi đến email của bạn.");   
    }
</script>