<div>
    <form id="form1" onsubmit="return false" action="##" method="post">
        <p>用户名：<input name="userName" type="text" id="txtUserName" tabindex="1" size="15" value=""/></p>
        <p>密　码：<input name="password" type="password" id="TextBox2" tabindex="2" size="16" value=""/></p>
        <p><input type="button" value="登录" onclick="send()">&nbsp;<input type="reset" value="重置"></p>
    </form>
</div>

<script>
    function send()
    {
        $.ajax({
            type: 'POST',
            url: '/SYSC',
            data: $('#form1').serialize(),
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            success: function(data){
                console.log(data.status);
            },
            error: function(xhr, type){
                alert('Ajax error!')
            }
        });
    }
</script>