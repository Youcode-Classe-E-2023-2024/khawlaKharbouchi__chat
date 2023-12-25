<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>register</title>

</head>
<body>
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3 rounded-xl">
        <div class="flex justify-center">
            <img
             src="logo.noir.png" class="w-20 h-24 text-blue-600"  />
        </div>

        <form action="" class="">
            <div class="mt-4 rounded-md" >

                <div class="mt-4">
                    <label class="block" for="email">Email<label>
                            <input type="text" placeholder="Email" name="users_email"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="mt-4">
                    <label class="block">Password<label>
                            <input type="password" placeholder="Password" name="users_password"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>

                <span class="text-xs text-red-400">Password must be same!</span>
                <div class="flex">
                    <button class="w-full px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">Login</button>
                </div>
                <div class="mt-6 text-grey-dark">
                    Forgot password
                    <a class="text-blue-600 hover:underline" href="#">
                        Log in
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>

</body>
</html>