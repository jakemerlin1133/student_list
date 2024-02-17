@include('partials.header')

<form action="/logout" method="POST">
    @csrf
    <div class="mt-1 px-2">
        <button class=" w-full bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200">Logout</button>
    </div>
</form>

@include('partials.footer')
