
<h2>Вход</h2>
<form action="?testReg" method="post" onsubmit="checkData(); return false;">
    <p>
        <label>Ваш логин:<br></label>
        <input name="login" id="login" type="text" size="15" maxlength="15">
    </p>
    <p>

        <label>Ваш пароль:<br></label>
        <input name="password" id="password" type="password" size="15" maxlength="15">
    </p>
    <p>
        <input type="submit" name="submit" value="Войти"><br>
    </p></form>
<script>

    // todo: validation
    // empty fields
    function checkData(){
        if(document.getElementById("login").value.toString() == "" || document.getElementById("password").value.toString() == ""){
            alert("empty");
        }
        alert("full");


    }
</script>
