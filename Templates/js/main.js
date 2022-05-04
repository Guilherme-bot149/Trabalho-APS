function validar(){
    var password = formuser.password.value;
    var password_confirm = formuser.password_confirm.value;

    if(password != password_confirm){
        alert("Senha diferente");
        form1.password.focus();
        return false;
    }
}