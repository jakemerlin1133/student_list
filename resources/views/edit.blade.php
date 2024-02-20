@include('partials.header')

<header class="max-w-lg mx-auto mt-6">
    <h1 class="text-5xl font-extrabold text-center mx-6">
        Update Student Information
    </h1>
</header>

<main>
    <section class="max-w-96 mx-auto text-center m-6">
    <form action="/edit/{{ $student['id'] }}" method="POST" id="add-form" class="text-center mt-4 flex flex-col">
        @method('PUT')
        @csrf
        <div class="mt-4 px-2">
            <input type="text" name="firstname" id="firstname" class="mx-auto text-gray-500 w-full h-14 pl-2 rounded font-semibold focus:outline-none" placeholder="Firstname" value="{{ $student['firstname'] }}">
        </div>

        @error('firstname')
        <p class="text-red-600 text-sm font-semibold mt-2">
             {{ $message }}
        </p>
        @enderror

        <div class="mt-4 px-2">
            <input type="text" name="lastname" id="lastname" class="mx-auto text-gray-500 w-full h-14 pl-2 rounded font-semibold focus:outline-none" placeholder="Lastname" value="{{ $student['lastname'] }}">
        </div>

        @error('lastname')
        <p class="text-red-600 text-sm font-semibold mt-2">
             {{ $message }}
        </p>
        @enderror

    <div class="mt-4 px-2">
        <input type="number" name="age" id="age" class="mx-auto text-gray-500 w-full h-14 pl-2 rounded font-semibold focus:outline-none" placeholder="Age" value="{{ $student['age'] }}" onkeydown="return event.key !== 'e' && event.key !== 'E';">
    </div>

    @error('age')
    <p class="text-red-600 text-sm font-semibold mt-2">
         {{ $message }}
    </p>
    @enderror


    <div class="mt-4 px-2">
        <select name="gender" id="gender" class="mx-auto text-gray-500 w-full h-14 pl-2 rounded font-semibold focus:outline-none" placeholder="Password">
            <option value="">Choose your Gender</option>
            <option value="Male" {{ $student->gender === 'Male' ? 'selected' : '' }}>Male</option>
            <option value="Female" {{ $student->gender === 'Female' ? 'selected' : '' }}>Female</option>
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
            <option value="Block-1" {{ $student->block === 'Block-1' ? 'selected' : '' }}>Block-1</option>
            <option value="Block-2" {{ $student->block === 'Block-2' ? 'selected' : '' }}>Block-2</option>
            <option value="Block-3" {{ $student->block === 'Block-3' ? 'selected' : '' }}>Block-3</option>
        </select>
    </div>

    @error('block')
    <p class="text-red-600 text-sm font-semibold mt-2">
         {{ $message }}
    </p>
    @enderror

    <div class="mt-4 px-2">
        <button type="submit" id="submit-add" class=" w-full bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200">Update Student</button>
    </div>
    </form>
    </section>
    </main>

@include('partials.footer')
