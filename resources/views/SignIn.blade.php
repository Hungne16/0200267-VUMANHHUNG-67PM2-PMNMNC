<!DOCTYPE html>
<html>
<head><title>Sign In</title></head>
<body>
    <h2>Đăng ký tài khoản</h2>
    <form action="{{ route('auth.check') }}" method="POST">
        @csrf
        <label>Username:</label> <input type="text" name="username" required><br><br>
        <label>Password:</label> <input type="password" name="password" required><br><br>
        <label>Re-pass:</label> <input type="password" name="repass" required><br><br>
        <label>MSSV:</label> <input type="text" name="mssv" required><br><br>
        <label>Lớp MH:</label> <input type="text" name="lopmonhoc" required><br><br>
        <label>Giới tính:</label> <input type="text" name="gioitinh"><br><br>
        
        <button type="submit">Sign In</button>
    </form>
</body>
</html>