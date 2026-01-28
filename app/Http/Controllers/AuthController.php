<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // hien thi form
    public function SignIn() {
        return view('SignIn');
    }

    // ham xu ly dang ky
    public function CheckSignIn(Request $request) {
        // lay thong tin tu form
        $user = $request->input('username');
        $pass = $request->input('password');
        $repass = $request->input('repass');
        $mssv = $request->input('mssv');
        $lop = $request->input('lopmonhoc');
        // $sex = $request->input('gioitinh'); // Có thể lấy nếu cần

        // --- THONG TIN CUA VU MANH HUNG ---
        $myMssv = "0200167";
        $myLop = "67PM2";
        
        // check logic dang ky
        // - mat khau phai giong nhau
        // - mssv va lop phai dung voi thong tin cua VU MANH HUNG
        if ($pass == $repass && $mssv == $myMssv && $lop == $myLop) {
            return "Dang ky thanh cong. chao mung VU MANH HUNG!";
        } else {
            return "Dang ky that bai. Thong tin khong hop le vui long kiem tra lai.";
        }
    }
}