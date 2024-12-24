<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="bg-gradient-to-b from-slate-500 to-slate-700 bg-no-repeat h-[100vh]">
    <div class="w-[50%] absolute top-[20%] left-[25%] shadow-2xl h-[60vh] flex flex-col justify-center items-center bg-white rounded-lg">
        <h1 class="mb-5 font-bold text-[28px]">Login to continue</h1>
        <form class="">
            <div class="mb-5 w-[40vw]">
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
              <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
            </div>
            <div class="mb-5 w-[40vw]">
              <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
              <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm sm:w-auto px-7 py-2.5 text-center">Submit</button>
        </form>  
    </div>
</body>
</html>