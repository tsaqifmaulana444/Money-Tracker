<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Document</title>
</head>

<body class="flex font-montserrat">
    <aside class="h-[100vh] bg-gray-600 w-[18%]">
        <div class="flex flex-col">
            <div class="w-full px-8 mx-auto mt-8">
                <h1 class="text-white font-extrabold text-[30px]">LKJe</h1>
                <p class="text-white font-semibold text-[12px]">Money Management Web</p>
            </div>
            <div class="flex flex-col w-full px-8 mx-auto mt-7 justify-between h-[25vh]">
                <a href="" class="text-white text-[16px]">Dashboard</a>
                <a href="" class="text-white text-[16px]">Transaction</a>
                <a href="" class="text-white text-[16px]">Report</a>
                <form action="">
                    <button type="submit" class="text-white text-[16px]">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </aside>
    <main>
        <nav>
            <p class="text-bold ml-7 mt-9 text-[22px]">Welcome, Zhang</p>
        </nav>
        <div>
            <div class="flex w-[78vw] mt-4 mx-7 justify-between">
                <div class="w-[23%] h-[18vh] bg-red-600 rounded-lg">
                    <p class="text-[12px] pt-3 pl-3 text-white font-semibold">This Month Income</p>
                    <p class="text-[25px] pt-3 pl-3 text-white font-semibold">Rp 20000</p>
                </div>
                <div class="w-[23%] h-[18vh] bg-yellow-600 rounded-lg">
                    <p class="text-[12px] pt-3 pl-3 text-white font-semibold">This Month Expenses</p>
                    <p class="text-[25px] pt-3 pl-3 text-white font-semibold">Rp 20000</p>
                </div>
                <div class="w-[23%] h-[18vh] bg-blue-600 rounded-lg">
                    <p class="text-[12px] pt-3 pl-3 text-white font-semibold">Report</p>
                    <p class="text-[25px] pt-3 pl-3 text-white font-semibold">Download</p>
                </div>
                <div class="w-[23%] h-[18vh] bg-green-600 rounded-lg">
                    <p class="text-[12px] pt-3 pl-3 text-white font-semibold">Target</p>
                    <p class="text-[25px] pt-3 pl-3 text-white font-semibold">Rp 5000000</p>
                </div>
            </div>
        </div>
        <div class="mt-6">
            <h1 class="ml-7 text-[22px]">Today Activities</h1>
            <div class="relative overflow-x-auto mx-7 mt-3">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Detail
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Income
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Expenses
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b">
                            <th class="px-6 py-4 font-medium text-gray-900">
                                Apple MacBook Pro 17"
                            </th>
                            <td class="px-6 py-4">
                                Silver
                            </td>
                            <td class="px-6 py-4">
                                Laptop
                            </td>
                            <td class="px-6 py-4">
                                $2999
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <th class="px-6 py-4 font-medium text-gray-900">
                                Microsoft Surface Pro
                            </th>
                            <td class="px-6 py-4">
                                White
                            </td>
                            <td class="px-6 py-4">
                                Laptop PC
                            </td>
                            <td class="px-6 py-4">
                                $1999
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex justify-end w-full">
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-7 mt-5">Details</button>
            </div>
        </div>
        <footer>
            <p class="ml-7 mt-10">Created by @Ali Farid, 2024</p>
        </footer>
    </main>
</body>

</html>
