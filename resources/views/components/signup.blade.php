<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>LOGO - SIGN UP</title>
</head>
<body>
    <div class='flex w-[100%] h-[100vh] bg-white-100 '>
        <div 
            class='w-[40%] h-[100%] p-[0px] m-[0px]'
            id='leftContent'
        >
            <img 
                src='https://img.freepik.com/free-photo/international-day-education-cartoon-style-with-boy-student_23-2151007434.jpg?t=st=1706718623~exp=1706722223~hmac=e533a7363626f32f5f3e1aae0e3edd0703ba924eb45f864d0785f8e5698a5f2c&w=740'
                alt=''
                class='h-[100%]'
            />
        </div>
    
        <div 
            class='w-[60%] h-[100%] flex flex-col justify-around items-center'
            id='rightContent'
        >              
            <h2
                class='text-[30px] font-bold' 
            >Welcome, </h2>
            <form
                onSubmit={submit}
                class='w-[90%] h-[60%] flex flex-wrap justify-around'
            >
                <label class='p-[0px] m-[0px] w-[45%]'>
                    <p>First Name</p>
                    <input 
                        type='text'
                        class='w-[100%] rounded'
                        placeholder="Alex"
                    />
                </label>
                <label class='p-[0px] m-[0px] w-[45%]'>
                    <p>Last Name</p>
                    <input 
                        type='text'
                        class='w-[100%] rounded'
                        placeholder="Tent"
                    />
                </label>
                <label class='p-[0px] m-[0px] w-[45%]'>
                    <p>Date Birth</p>
                    <input 
                        type='date'
                        class='w-[100%] rounded'
                    />
                </label>
                <label class='p-[0px] m-[0px] w-[45%]'>
                    <p>Gender</p>
                    <select
                        class='w-[100%] rounded'
                    >
                        <option value=''>Choose gender</option>
                        <option value='male'>Male</option>
                        <option value='female'>Female</option>
                    </select>
                </label>
                <label class='p-[0px] m-[0px] w-[45%]'>
                    <p>Email Address</p>
                    <input 
                        type='email'
                        class='w-[100%] rounded'
                        placeholder="Example@gmail.com"
                    />
                </label>
                <label class='p-[0px] m-[0px] w-[45%]'>
                    <p>Password</p>
                    <input 
                        type='password'
                        class='w-[100%] rounded'
                    />
                </label>
                <label class='p-[0px] m-[0px] w-[45%]'>
                    <p>Re-Password</p>
                    <input 
                        type='password'
                        class='w-[100%] rounded'
                    />
                </label>
                <label class='p-[0px] m-[0px] w-[45%]'>
                    <br />
                    <input
                        type='submit'
                        class='w-[100%] rounded bg-blue-500 hover:bg-blue-600 h-[43px] cursor-pointer text-white shadow-md'
                    />
                </label>
                <a href='/sginIn'>Already i have an account</a>
            </form>
            
        </div> 
    </div>
</body>
</html>