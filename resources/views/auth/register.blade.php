@extends('layouts.login_temp.header')
@section('content')
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(Login_temp/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Register
					</span>
				</div>

				<form class="login100-form validate-form" action="{{route('register')}}" method="POST">
                    @csrf
					<div class="wrap-input100 validate-input m-b-26" data-validate="กรุณากรอกชื่อผู้ใช้งาน">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-26" data-validate="กรุณากรอกชื่อ">
						<span class="label-input100">Name</span>
						<input class="input100" type="text" name="name" placeholder="Enter name">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-26" data-validate="กรุณากรอกอีเมล">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" placeholder="Enter email">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-26" data-validate="กรุณากรอกเบอร์โทรศัพท์">
						<span class="label-input100">Phone</span>
						<input class="input100" type="text" name="phone" placeholder="Enter Phone">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-26" data-validate="กรุณากรอกที่อยู่">
						<span class="label-input100">Address</span>
						<input class="input100" type="text" name="address" placeholder="Enter Address">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "กรุณากรอกรหัสผ่าน">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter Password">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate = "กรุณายืนยันรหัสผ่าน">
						<span class="label-input100">Confirm Password</span>
						<input class="input100" type="password" name="password_confirmation" placeholder="Enter Confirm Password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
                <div class="container">
                    <div class="flex-sb-m w-full p-b-20">
                        <a href="{{url('/')}}">กลับหน้าหลัก</a> <br>
                        <a href="{{route('login')}}">เข้าสู่ระบบ</a>
                    </div>
                </div>
			</div>
		</div>
	</div>

@endsection
