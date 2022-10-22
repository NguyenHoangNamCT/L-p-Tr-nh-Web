function check(){
    var
    hoTen = f.txtHoTen.value,
    diaChi = f.txtDiaChi.value,
    email = f.txtEmail.value,
    dienThoai = f.txtDienThoai.value;

    var 
    EmailRegularExpression = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/,
    PhoneNumberRegularExpression = /(84|0[3|5|7|8|9])+([0-9]{8})\b/g;

    if(hoTen == "" || diaChi == "" || email == "" || dienThoai == ""){
        alert("Vui lòng nhập đủ thông tin");
        return false;
    }

    if(!EmailRegularExpression.test(email)){
        alert("Email không hợp lệ, vui lòng nhập lại");
        return false;
    }
    if(!PhoneNumberRegularExpression.test(dienThoai)){
        alert("Số điện thoại không hợp lệ, vui lòng nhập lại");
        return false;
    }
    return true;
}