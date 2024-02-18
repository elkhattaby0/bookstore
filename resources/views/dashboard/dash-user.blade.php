@extends('dashboard.user-dash')
@section('user_dash')
    <div
        class="w-[95%] h-[82vh] rounded-xl flex justify-between"
    >
        <section class="w-[72%]">
            <div class="w-[100%] h-[200px] bg-orange-300 rounded-xl text-gray-800 flex justify-around items-center px-[20px]">

                <label 
                    class="w-[65%] h-[85%] flex flex-col items-center justify-around text-left	 float-left"
                >
                    <h1 class="font-bold text-[25px] text-gray-800 text-left w-[100%]">Hello {{ Auth()->user()->fname }}!</h1>
                    <p class="font-bold text-[14px] text-gray-600 text-left w-[100%]">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt at dolore eos sapiente, aliquid ipsam.
                    </p>
                    <span class=" text-left w-[100%]">
                        <button class="bg-gray-800 hover:bg-gray-900 text-gray-300 w-[150px] h-[40px] rounded-xl">
                            Write new post
                        </button>
                    </span>
                    
                </label>
                    <img
                        src="https://img.freepik.com/free-vector/man-using-laptop-cartoon_1308-119061.jpg?w=740&t=st=1708295928~exp=1708296528~hmac=40290c40c12a1467638c0e6ca8b31e95d27ce029adb2b536b58babf6ef91c12e"
                        alt=""
                        class="w-[37%] mix-blend-multiply"
                    />
            </div>
        </section>
        <section class="w-[27%] ">
            <div class="flex items-center h-[80px] justify-around bg-blue-500 rounded-xl mb-[15px]">
                <img 
                    src="https://cdn-icons-png.flaticon.com/512/10319/10319812.png"
                    class="w-[40px] bg-gray-800 rounded-xl p-[10px]"
                />
                <label class="leading-6">
                    <h2 class="text-[25px] text-gray-800 font-bold">$100</h2>
                    <p class="text-[13px] text-gray-600 font-bold">Total earnings</p>
                </label>
            </div>
            <div class="flex items-center h-[80px] justify-around bg-blue-400 rounded-xl mb-[15px]">
                <img 
                    src="https://cdn-icons-png.flaticon.com/512/207/207114.png"
                    class="w-[40px] bg-gray-800 rounded-xl p-[10px]"
                />
                <label class="leading-6">
                    <h2 class="text-[25px] text-gray-800 font-bold">13</h2>
                    <p class="text-[13px] text-gray-600 font-bold">Articles request</p>
                </label>
            </div>
            <div class="flex items-center h-[80px] justify-around bg-pink-300 rounded-xl mb-[15px]">
                <img 
                    src="https://cdn-icons-png.flaticon.com/512/8988/8988242.png"
                    class="w-[40px] bg-gray-800 rounded-xl p-[10px]"
                />
                <label class="leading-6">
                    <h2 class="text-[25px] text-gray-800 font-bold">3</h2>
                    <p class="text-[13px] text-gray-600 font-bold">Pending articles</p>
                </label>
            </div>
        </section>
    </div>
@endsection