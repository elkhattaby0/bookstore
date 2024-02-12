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

    <form
        method="POST"
        action=""
        enctype="multipart/form-data"
        class="w-[100] flex flex-col justify-between items-center"
    >
        @csrf
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
                />
                <p>
                    @error('title')
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
                />
                <p>
                    @error('price')
                        {{ $message }}
                    @enderror
                </p>
            </label>
            <label class="w-[48%] h-[70px] flex flex-col justify-between my-[20px]">
                <p>Date birh</p>
                <input
                    type="date"
                    name="dateBirth"
                    class=" rounded-lg"
                />
                <p>
                    @error('catigory_id')
                        {{ $message }}
                    @enderror
                </p>
            </label>
            <label class="w-[48%] h-[70px] flex flex-col justify-between my-[20px]">
                <p>Gender</p>
                <select
                    type="email"
                    name="email"
                    class=" rounded-lg"
                >
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <p>
                    @error('catigory_id')
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
                />
                <p>
                    @error('catigory_id')
                        {{ $message }}
                    @enderror
                </p>
            </label>
            <label class="w-[48%] h-[70px] flex flex-col justify-between my-[20px]">
                <p>Old password</p>
                <input
                    type="password"
                    name="password"
                    class=" rounded-lg"
                />
                <p>
                    @error('price')
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
                    @error('price')
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