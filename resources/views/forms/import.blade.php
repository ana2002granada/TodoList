<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Tailwind File Upload by shuvro_008. </title>
        <link href="https://unpkg.com/tailwindcss@0.3.0/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="bg-gray-200">
    <v-header/>
    <form action="{{ route('todo.import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex w-full h-screen items-center justify-center bg-grey-lighter">
            <label class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">
                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z"></path>
                </svg>
                <span class="mt-2 text-base leading-normal">Select a file</span>
                <input type="file" name="import" accept='.xlsx, .xls' class="hidden">
            </label>
        </div>
        <button type="submit">Boton</button>
    </form>
    </body>
</html>
