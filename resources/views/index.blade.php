@include('partials.header')

<header class="max-w-lg mx-auto mt-24">
    <h1 class="text-6xl font-extrabold text-center mx-6">
        Student Login
    </h1>
</header>

<main>
    <section class="text-center text-white mx-6 mt-8">
        <h3 class="text-4xl font-bold mb-2">Welcome to Student List System</h3>
    </section>

    <section class="max-w-96 mx-auto text-center">

        <form action="/login/store" method="POST" class="text-center flex flex-col">
            @csrf
            <div class="mt-2 px-2">
                <input type="Email" name="email" id="email" class="mx-auto text-gray-500 w-full h-14 pl-2 rounded font-semibold focus:outline-none" placeholder="Email">
            </div>

            @if($errors->has('email') || $errors->has('password'))
                <p class="text-red-600 text-sm font-semibold mt-2">
                     Username or password incorrect
                </p>
            @endif

            <div class="mt-4 px-2">
                <input type="Password" name="password" id="password"
                    class="mx-auto text-gray-500 w-full h-14 pl-2 rounded font-semibold focus:outline-none"
                    placeholder="Password">
            </div>

            <h6 class="font-medium text-white my-1">Haven't you already an account? <a href="/register" class="font-bold text-amber-300 hover:text-amber-500">Register Now</a></h6>

            <div class="mt-1 px-2">
                <button type="submit" class=" w-full bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200">Login</button>
            </div>
        </form>
    </section>
</main>


@include('partials.footer')
