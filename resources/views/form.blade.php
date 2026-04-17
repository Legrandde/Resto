<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

       <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body >
        


        <form 
            action="" 
            method="post" 
            class="bg-white gap-6 flex flex-col h-full m-auto w-[50%] p-6"
            enctype="multipart/form-data"
            >
            @csrf
            <input 
                type="text" 
                name="numero_table" 
                placeholder="Entrer le numero de la table"
                class="p-2 bg-gray-200 w-full"
            />
            <input 
                type="number" 
                name="capacite"
                placeholder="Entrer la capacité de la table"
                class="p-2 bg-gray-200 w-full"
            />
            <input 
                type="file" 
                name="photo"
                class="p-2 bg-gray-200 w-full"
            />
            <button class="bg-blue-500 cursor-pointer p-2 w-42 self-end font-bold text-white">creer la table</button>
        </form>


    </body>
</html>
