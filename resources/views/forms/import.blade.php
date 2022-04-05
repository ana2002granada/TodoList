<html lang="en">
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
        <title>Tailwind File Upload by shuvro_008. </title>
        <link href="https://unpkg.com/tailwindcss@0.3.0/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="bg-gray-200 max-h-screen">
    <form action="{{ route('todo.import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex bg-gray-200 items-center justify-center">
            <div class="grid bg-white rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2">
            <div class="flex justify-center py-4">
                <div class="flex bg-purple-200 rounded-full md:p-4 p-2 border-2 border-purple-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                </div>
            </div>
            <div class="flex justify-center">
            <div class="flex">
                <h1 class="text-gray-600 font-bold md:text-2xl text-xl">Import a file</h1>
            </div>
        </div>
            <label class="w-64 flex flex-col justify-center items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">
                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z"></path>
                </svg>
                <span class="mt-2 text-base leading-normal">Select a file</span>
                <input type="file" name="import" accept='.xlsx, .xls' class="hidden">
            </label>
        <div class="flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5">
            <button type="submit" class="w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2">Importar</button>
            </div>
        </div>
    </div>
    </form>
    </body>
</html>



