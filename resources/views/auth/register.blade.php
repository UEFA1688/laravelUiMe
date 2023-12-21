@extends('layouts.landing')

@section('content')
<div class="card-glass">
    <div class="text-center">
        <div class="img-fluid img-thumbnail rounded-circle d-flex align-items-center justify-content-center mx-auto" style="width: 100px; height: 100px;">
            <img src="/img/logo.png" alt="logo" style="width: 60px; height: 60px;">
        </div>
        <h1 class="text-white mt-3 fs-4">{{ __('ระบบพนักงาน Measuretronix') }}</h1>
    </div>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label text-white">
                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="20" viewBox="0 0 448 512" class="rounded-circle">
                    <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3"
                        fill="#ffffff"/>
                </svg>
                {{ __('ชื่อ-นามสกุล') }}
            </label>
            <input
                id="name"
                type="text"
                class="form-control
                @error('name') is-invalid
                @enderror" name="name"
                value="{{ old('name') }}"
                required autocomplete="
                name" autofocus
                placeholder="กรอกชื่อ-นามสกุล"
            >
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label text-white">
                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="20" viewBox="0 0 448 512" class="rounded-circle">
                    <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3"
                        fill="#ffffff"/>
                </svg>
                {{ __('อีเมล') }}
            </label>
            <input
                id="email"
                type="email"
                class="form-control
                @error('email') is-invalid
                @enderror" name="email"
                value="{{ old('email') }}"
                required autocomplete="
                email" autofocus
                placeholder="กรอกอีเมล"
            >
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label text-white">
                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="20" viewBox="0 0 512 512">
                    <path d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17v80c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V448h40c13.3 0 24-10.7 24-24V384h40c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z"
                        fill="#ffffff"/>
                </svg>
                รหัสผ่าน
            </label>
            <input
                id="password"
                type="password"
                class="form-control
                @error('password') is-invalid
                @enderror" name="password"
                required
                autocomplete="current-password"
                placeholder="กรอกรหัสผ่าน"
            >
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password-confirm" class="form-label text-white">
                <svg xmlns="http://www.w3.org/2000/svg" height="22" width="20" viewBox="0 0 512 512">
                    <path d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17v80c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V448h40c13.3 0 24-10.7 24-24V384h40c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z"
                        fill="#ffffff"/>
                </svg>
                ยืนยันรหัสผ่าน
            </label>
            <input
                id="password-confirm"
                type="password"
                class="form-control
                @error('password') is-invalid
                @enderror" name="password_confirmation"
                required
                autocomplete="new-password"
                placeholder="ยืนยันรหัสผ่าน"
            >

        </div>

        <div class="row mb-0">
            <div class="d-flex flex-column gap-2 hov">
                <button type="submit" class="btn btn-primary">
                    {{ __('ยืนยันการสมัคร') }}
                </button>
                <hr>

                <a class="btn btn-dark" href="{{ route('welcome') }}">
                    {{ __('ต้องการล็อกอินเข้าสู่ระบบ?') }}
                </a>
            </div>
        </div>
    </form>
</div>

@endsection
