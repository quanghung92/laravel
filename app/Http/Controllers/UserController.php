<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdduserRequest;// sử dụng request với tên addUserResquest để bắt lỗi
class UserController extends Controller
{
    function getUser() {
        return view('user');// gọi ra resource/ view/ user.blade.php
    }

    function getAddUser() {
        return view('add_user');// gọi ra resource/ view/ add_userr.blade.php

    }
    function postAddUser ( AdduserRequest $r) {
        // sử dụng request để kiểm tra lỗi
        // dd($r->all());// kiểm tra gữ liệu, request se nhận giá trị trong ô input còn không có request mà chỉ có biến thì sẽ nhận biến
        // $r->validate([
        //     // bắt lỗi
        //     'full'=>'required|min:5',// với full là name của ô input và cũng là key trong mảng, requeired là bắt buộc phải có dữ liệu
        //     // min:5 là bắt buộc ít nhất 5 ký tự
        //     'phone'=>'required | min:10 | numeric',// numerric là yêu cầu phải là dạng số
        //     'address'=>'required',
        //     'id_number'=>'required|numeric'
        // ],[
        //     // sửa hiển thị lỗi bằng tiếng việt
        //     'full.required'=>'Họ và tên không được để trống',
        //     'full.min'=>'Họ và tên ít nhất 5 ký tự',
        //     'phone.required'=>'SDT không được để trống',
        //     'phone.min'=>'SDT ít nhất 5 ký tự',
        //     'phone.numeric'=>'SDT Phải là số',
        //     'address.required'=>'Địa chỉ không được để trống',
        //     'id_number.required'=>'CMT không được để trống',
        //     'id_number.numeric'=>'CMT Phải là số',
        // ]);
    }

    function getEditUser() {
        return view('edit_user');// gọi ra resource/ view/ edit_user.blade.php

    }
    function postEditUser (Request $r) {
        //dd($r->all());// kiểm tra gữ liệu, request se nhận giá trị trong ô input còn không có request mà chỉ có biến thì sẽ nhận biến
    }


}
