<!DOCTYPE html>
<html class="h-full">

    <head>
        <meta
            http-equiv="Content-Type"
              content="text/html;charset=UTF-8"
            >

        <title>Mail Lesson</title>
        <link href="#" rel="stylescheet">
    </head>

    <body class="bg-gray-100 flex items-center justify-center h-full">
    <form
        method="POST"
        action="/contact"
        class="bg-white p-6rounded shadow-md"
        style="width:300px"
    >
        @csrf

        <div class="mb-5">
            <label
                for="email"
                class="block text-xs uppercase font-semibold mb-1"
                >
                Email Adress
            </label>

            <input
                type="text"
                id="email"
                name="email"
                class="border px-2 py-1 text-sm a-full"
            >
            @error('email')
                <div>{{ $message }}</div>
            @enderror

            <button
                type="submit"
                class="bg-blue-500 py-2 text-white rounded-full text-sm n-full"
                >
                Email
            </button>
        </div>


    @if(session('message'))

        <div>
            {{ session('message') }}
        </div>

    @endif
    </form>
    </body>


</html>
