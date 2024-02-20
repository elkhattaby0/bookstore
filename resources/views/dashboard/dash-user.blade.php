@extends('dashboard.user-dash')
@section('user_dash')
    <div
        class="w-[95%] h-[82vh] rounded-xl flex justify-between  overflow-y-scroll"
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
                        <a href="{{ route('create-user-dash') }}">
                        <button class="bg-gray-800 hover:bg-gray-900 text-gray-300 w-[150px] h-[40px] rounded-xl">
                            Write new post
                        </button>
                        </a>
                    </span>
                    
                </label>
                    <img
                        src="https://img.freepik.com/free-vector/man-using-laptop-cartoon_1308-119061.jpg?w=740&t=st=1708295928~exp=1708296528~hmac=40290c40c12a1467638c0e6ca8b31e95d27ce029adb2b536b58babf6ef91c12e"
                        alt=""
                        class="w-[37%] mix-blend-multiply"
                    />
            </div>
            @if (count($books) > 0)
                <h1
                    class="text-[25px] mt-[30px] "
                >My Post(s)</h1>
                <table class="w-[100%] mt-[20px] flex items-center justify-center text-center">
                    <tr class="flex justify-between text-left">
                        <th class="w-[5%]">Id</th>
                        <th class="w-[12%]">Image</th>
                        <th class="w-[17%]">Title</th>
                        <th class="w-[12%]">Price</th>
                        <th class="w-[12%]">Date</th>
                        <th class="w-[12%]">Action</th>
                    </tr>
                    @foreach ($books as $i)
                        <tr class="flex justify-between p-[10px] my-[5px] items-center bg-gray-200 border-2 border-gray-300 rounded-xl">
                            <td class="w-[5%]">{{ $i->id }}</td>
                            <td class="w-[12%]">
                                <img 
                                    src="{{ asset('storage/'.$i->image) }}"
                                    alt=""
                                    class="w-[90%] rounded-md"
                                />
                            </td>
                            <td class="w-[17%] text-left">{{ $i->title }}</td>
                            <td class="w-[12%]">${{ number_format($i->price, 2) }}</td>
                            <td class="w-[12%]">{{ $i->created_at }}</td>
                            <td class="w-[12%]">
                                <a  class="flex items-center justify-center mb-[5px] bg-gray-700 hover:bg-gray-800 h-[33px] w-[60px] text-white rounded-lg" href="{{ route('user-edit',$i->id) }}">Edit</a>
                                <form 
                                    action="{{ route('user-destroy',$i->id) }}"
                                    method="POST"
                                    class="flex items-center justify-center bg-red-600 hover:bg-red-700  h-[33px] w-[60px] text-white rounded-lg"
                                >
                                    @csrf
                                    @method('DELETE')
                                    <button>Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>                
            @endif
            
        </section>

        {{-- RIGHT --}}
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
                    <h2 class="text-[25px] text-gray-800 font-bold">{{ $count }}</h2>
                    <p class="text-[13px] text-gray-600 font-bold">Total books</p>
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