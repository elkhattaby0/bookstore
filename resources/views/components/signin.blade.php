<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>LOGO - SIGN IN</title>
</head>
<body>
    <div class='flex w-[100%] h-[100vh] bg-white-100 '>
        <div class='w-[60%] h-[100%] p-[0px] m-[0px]' id='leftContent'>
            <img 
                src='https://img.freepik.com/free-photo/books-with-brain-digital-art-style-education-day_23-2151164350.jpg?t=st=1706807341~exp=1706810941~hmac=7a8feeb54e1be428bfcc485877919080e88f08a2ece14f9269e13c27e7b529e0&w=740'
                alt=''
                class='h-[100%]'
            />
        </div>
        <div class='w-[40%] h-[100%] flex flex-col justify-around items-center' id='reightContent'>
            @if (session()->has('message'))
                <x-alert color='green'>
                    {{ session('message') }}
                </x-alert>
            @endif
            @if (session()->has('Field'))
                <x-alert color='red'>
                    {{ session('Field') }}
                </x-alert>
            @endif
            <h1
                class='text-[30px]'
            >Welcome,</h1>
            <form 
                method="POST"
                action="{{ route('signin_page') }}"
                class='w-[100%] h-[40%] flex flex-wrap justify-around'>
                @csrf
                <label class='p-[0px] m-[0px] w-[80%]'>
                    <p>Email Address</p>
                    <input 
                        type='email'
                        class='w-[100%] rounded'
                        placeholder='example@gmail.com'
                        name="email"
                    />
                    <p class="text-red-500">
                        @error('email')
                            {{$message}}    
                        @enderror
                    </p>
                </label>
                <label class='p-[0px] m-[0px] w-[80%]'>
                    <p>Password</p>
                    <input 
                        type='password'
                        class='w-[100%] rounded'
                        name="password"
                    />
                    <p class="text-red-500">
                        @error('password')
                            {{$message}}    
                        @enderror
                    </p>
                </label>
                <label class='p-[0px] m-[0px] w-[80%]'>
                    <a 
                        href='/'
                    >Forgot password?</a>
                    <input
                        type='submit'
                        value='Sign In'
                        class='w-[100%] rounded bg-blue-500 hover:bg-blue-600 h-[43px] cursor-pointer text-white shadow-md'
                    />
                </label>
                <label class='p-[0px] m-[0px] w-[80%] text-center'>
                    <a 
                        href='/sginUp'
                        class='underline mt-[15px]'
                    >I dont have an Account</a>
                </label>
                
            </form>
        </div>
    </div>
</body>
</html>