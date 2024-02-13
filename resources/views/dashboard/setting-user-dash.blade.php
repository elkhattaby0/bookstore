@extends('dashboard.user-dash')
@section('user_dash')
<div
    class="w-[90%] h-[100%] overflow-y-scroll" 
    >
    <ul class=" mb-[1%] text-gray-600 leading-5">
        <h1 class="text-[35px] text-blue-600">Setting</h1><br/>
        <li class=" list-disc ml-[20px]">You can change your information.</li>
        <li class=" list-disc ml-[20px]">To change your password must enter old one.<li>
    </ul>
    @if (session()->has('error'))
        <x-alert color='red'>
            {{ session('error') }}
        </x-alert>
    @endif
    <form
        method="POST"
        action="{{ route('user-update-setting') }}"
        enctype="multipart/form-data"
        class="w-[100] flex flex-col justify-between items-center"
    >
        @csrf
        @method("PUT")
        <div class="w-[25%] flex items-center">
            <label class="w-[100%] ">
                <img 
                    src="https://cdn-icons-png.flaticon.com/512/149/149071.png"
                    alt=""
                    class="w-[150px] rounded-lg"
                />
            </label>
        </div>
        <div class="w-[70%] flex flex-wrap justify-between ">
            <label class="w-[48%] h-[70px] flex flex-col justify-between my-[20px]">
                <p>Image</p>
                <input
                    type="file"
                    name="image"
                    class="border-[1px] border-gray-600 h-[41px] rounded-lg bg-white"
                />
                <p>
                    @error('image')
                        {{ $message }}
                    @enderror
                </p>
            </label>
            <label class="w-[48%] h-[70px] flex flex-col justify-between my-[20px]">
                <p>First name</p>
                <input
                    type="text"
                    name="fname"
                    class=" rounded-lg"
                    value="{{ old('fname', Auth::user()->fname) }}"
                />
                <p>
                    @error('fname')
                        {{ $message }}
                    @enderror
                </p>
            </label>
            <label class="w-[48%] h-[70px] flex flex-col justify-between my-[20px]">
                <p>Last name</p>
                <input
                    type="text"
                    name="lname"
                    class=" rounded-lg"
                    value="{{ old('lname', Auth::user()->lname) }}"
                />
                <p>
                    @error('lname')
                        {{ $message }}
                    @enderror
                </p>
            </label>
            <label class="w-[48%] h-[70px] flex flex-col justify-between my-[20px]">
                <p>Date Birth</p>
                <input
                    type="date"
                    name="dateBirth"
                    class=" rounded-lg"
                    value="{{ old('dateBirth', Auth::user()->dateBirth) }}"
                />
                <p>
                    @error('dateBirth')
                        {{ $message }}
                    @enderror
                </p>
            </label>
            <label class="w-[48%] h-[70px] flex flex-col justify-between my-[20px]">
                <p>Gender</p>
                <select
                    name="gender"
                    class=" rounded-lg"
                >
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <p>
                    @error('gender')
                        {{ $message }}
                    @enderror
                </p>
            </label>
            <label class="w-[48%] h-[70px] flex flex-col justify-between my-[20px]">
                <p>Email</p>
                <input
                    type="email"
                    name="email"
                    class=" rounded-lg"
                    value="{{ old('email', Auth::user()->email) }}"
                />
                <p>
                    @error('email')
                        {{ $message }}
                    @enderror
                </p>
            </label>
            <label class="w-[48%] h-[70px] flex flex-col justify-between my-[20px]">
                <p>Old password</p>
                <input
                    type="password"
                    name="old_password"
                    class=" rounded-lg"
                />
                <p>
                    @error('old_password')
                        {{ $message }}
                    @enderror
                </p>
            </label>
            <label class="w-[48%] h-[70px] flex flex-col justify-between my-[20px]">
                <p>New password</p>
                <input
                    type="password"
                    name="password"
                    class=" rounded-lg"
                />
                <p>
                    @error('password')
                        {{ $message }}
                    @enderror
                </p>
            </label>
            <label class="w-[48%] h-[41px] flex flex-col justify-between my-[20px] text-white font-bold">
                <button
                    class="bg-blue-600 hover:bg-blue-500 h-[45px] rounded-lg shadow-md"
                >
                    Change
                </button>
            </label>
        </div>
    </form>
    </div>
@endsection