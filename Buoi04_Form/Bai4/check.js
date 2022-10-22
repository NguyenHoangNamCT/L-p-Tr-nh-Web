function kiemtra(){
    var hoten = f.txtHoTen.value;
    var 
    ngay = f.Ngay.value,
    thang = f.Thang.value
    nam = f.Nam.value;
    if(hoten=="" || ngay=="" || thang=="" || nam=="")
    {
        alert("Vui lòng điền đủ thông tin");
        return false;
    }
    return true;
}