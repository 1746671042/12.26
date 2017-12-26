<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <table border="1px">
            {foreach from=$list item=value}
            <tr>
                <td>管理员:{$value.admin_name}</td>
                <td>密码:{$value.admin_pwd}</td>
                <td>时间:{$value.admin_time}</td>
            </tr>
            {/foreach}
        </table>
    </body>
</html>

