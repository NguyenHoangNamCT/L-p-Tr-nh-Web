function check(){
    var tdn = f.txtTDN.value,
        pw = f.txtPw.value;
    if(tdn == "" || pw == "")
    {
        alert("Tên đăng nhập và mật khẩu không được bỏ trống!");
        return false;
    }
    return true;
}