@include('partials.header')
@include('partials.header')

<header class="max-w-lg mx-auto mt-6">
    <h1 class="text-6xl font-extrabold text-center mx-6">
        Student Registration
    </h1>
</header>

<main>

<section class="max-w-96 mx-auto text-center m-6">
<form action="/register/store" method="POST" class="text-center mt-4 flex flex-col">
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
    <input type="Email" name="email" id="email" class="mx-auto text-gray-500 w-full h-14 pl-2 rounded font-semibold focus:outline-none" placeholder="Email" value="{{ old('email') }}">
</div>

@error('email')
<p class="text-red-600 text-sm font-semibold mt-2">
     {{ $message }}
</p>
@enderror

<div class="mt-4 px-2">
    <input type="Password" name="password" id="password" class="mx-auto text-gray-500 w-full h-14 pl-2 rounded font-semibold focus:outline-none" placeholder="Password">
</div>

@error('password')
<p class="text-red-600 text-sm font-semibold mt-2">
     {{ $message }}
</p>
@enderror

<div class="mt-4 px-2">
    <input type="Password" name="password_confirmation" id="password_confirmation" class="mx-auto text-gray-500 w-full h-14 pl-2 rounded font-semibold focus:outline-none" placeholder="Confirm Password">
</div>

@error('password')
<p class="text-red-600 text-sm font-semibold mt-2">
     {{ $message }}
</p>
@enderror

<div class="mt-4 px-2">
    <button type="submit" class=" w-full bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200">Register</button>
</div>

</form>
</section>
</main>


      @include('partials.footer')



@include('partials.footer')
