<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
</head>
<body class="h-screen ">
    <div class="h-screen flex justify-center items-center bg-gray-100">
        <div class="w-11/12 p-5 md:w-3/6 h-fit pb-12 m-auto border border-gray-200 bg-white rounded-lg shadow-lg">
            <h1 class="text-center mt-5 text-4xl font-extrabold text-gray-600">Tienda rosas</h1>

            <form action="" class="mt-16 flex flex-col gap-7" method="POST">
                @csrf

                <div class="flex flex-col sm:flex-row gap-3 items-center">
                    <label for="" class="text-gray-600 w-3/12 text-xl font-bold text-center">Email: </label>
                    <input type="text" name="email" class="bg-gray-100 w-11/12 rounded-md sm:w-6/12 p-3 border px-3" placeholder="Ingresa tu correo">
                </div>
                @error('email')
                <x-mostrar-alertas :message="$message"/>
                @enderror
     
                <div class="flex flex-col sm:flex-row gap-3 items-center">
                    <label for="" class="text-gray-600 w-3/12 text-xl font-bold text-center">Password: </label>
                    <input type="password" name="password" class="bg-gray-100 w-11/12 rounded-md sm:w-6/12 py-3 border px-3" placeholder="Ingresa tu password">
                </div>
                @error('password')
                <x-mostrar-alertas :message="$message"/>
                @enderror

                <div class="flex mt-5 items-center justify-center">
                    <input type="submit" value="Ingresar" class="bg-black py-2 px-5 mt-2 rounded-md  text-white shadow">
                </div>
            </form>
        </div>


    </div>
</body>
</html>