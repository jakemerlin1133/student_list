@include('partials.header')

<form action="/logout" method="POST">
    @csrf
    <div class="fixed top-4 left-4">
        <button>
            <i class="fa-solid fa-power-off text-2xl font-bold"></i>
        </button>
    </div>
</form>

<header class="max-w-lg mx-auto my-8">
    <h1 class="text-6xl font-extrabold text-center mx-6">
        Student List
    </h1>
</header>

<div class="overflow-x-auto my-4 mx-8 rounded-md">

        <div class="flex justify-end">
            <a href="/add">
                <button class="focus:outline-none text-white bg-cyan-900 hover:bg-cyan-800 font-medium rounded-lg text-sm px-2 py-2.5 my-2 dark:bg-cyan-1000 dark:hover:bg-cyan-700">Add Student <i class="fa-solid fa-plus"></i></button>
            </a>
        </div>

    <table class="w-full">
        <thead class="bg-slate-200">
            <tr>
                <th class="text-left p-2">Firstname</th>
                <th class="text-left p-2">Lastname</th>
                <th class="text-left p-2">Age</th>
                <th class="text-left p-2">Gender</th>
                <th class="text-left p-2">Block</th>
                <th class="text-left p-2 pl-14">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-cyan-800 text-white">
                <td class="p-2">Jake Russel</td>
                <td class="p-2">Merlin</td>
                <td class="p-2">23</td>
                <td class="p-2">Male</td>
                <td class="p-2">Block 1</td>
                <td class="p-2 flex gap-2">
                    <form action="">
                        <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Edit</button> &nbsp;
                    </form>

                    <form action="">
                        <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@include('partials.footer')
