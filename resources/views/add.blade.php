@include('partials.header')

<header class="max-w-lg mx-auto mt-6">
    <h1 class="text-6xl font-extrabold text-center mx-6">
        Add Student
    </h1>
</header>

<main>
    <section class="max-w-96 mx-auto text-center m-6">
    <form action="/add/student" method="POST" id="add-form" class="text-center mt-4 flex flex-col">
    @csrf
        <div class="mt-4 px-2">
            <input type="text" name="firstname" id="firstname" class="mx-auto text-gray-500 w-full h-14 pl-2 rounded font-semibold focus:outline-none" placeholder="Firstname" value="{{ old('firstname') }}">
        </div>

        @error('firstname')
        <p class="text-red-600 text-sm font-semibold mt-2">
             {{ $message }}
        </p>
        @enderror

        <div class="mt-4 px-2">
            <input type="text" name="lastname" id="lastname" class="mx-auto text-gray-500 w-full h-14 pl-2 rounded font-semibold focus:outline-none" placeholder="Lastname" value="{{ old('lastname') }}">
        </div>

        @error('lastname')
        <p class="text-red-600 text-sm font-semibold mt-2">
             {{ $message }}
        </p>
        @enderror

    <div class="mt-4 px-2">
        <input type="number" name="age" id="age" class="mx-auto text-gray-500 w-full h-14 pl-2 rounded font-semibold focus:outline-none" placeholder="Age" onkeydown="return event.key !== 'e' && event.key !== 'E';">
    </div>

    @error('age')
    <p class="text-red-600 text-sm font-semibold mt-2">
         {{ $message }}
    </p>
    @enderror


    <div class="mt-4 px-2">
        <select name="gender" id="gender" class="mx-auto text-gray-500 w-full h-14 pl-2 rounded font-semibold focus:outline-none" placeholder="Password">
            <option value="">Choose your Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
    </div>

    @error('gender')
    <p class="text-red-600 text-sm font-semibold mt-2">
         {{ $message }}
    </p>
    @enderror

    <div class="mt-4 px-2">
        <select name="block" id="block" class="mx-auto text-gray-500 w-full h-14 pl-2 rounded font-semibold focus:outline-none" placeholder="Password">
            <option selected value="">Choose your Block</option>
            <option value="Block-1">Block-1</option>
            <option value="Block-2">Block-2</option>
            <option value="Block-3">Block-3</option>
        </select>
    </div>

    @error('block')
    <p class="text-red-600 text-sm font-semibold mt-2">
         {{ $message }}
    </p>
    @enderror

    <div class="mt-4 px-2">
        <button type="submit" id="submit-add" class=" w-full bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200">Add New Student</button>
    </div>
    </form>
    </section>
    </main>

@include('partials.footer')
