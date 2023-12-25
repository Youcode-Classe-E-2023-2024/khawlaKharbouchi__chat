<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/home.css">
    <link rel="icon" href="logo.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <title>home</title>
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>

</head>

<body>
    <div class="app-container">
        <div class="app-left">
            <a href="home.php"><div class="app-left-header">
                <div class="app-logo">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <defs></defs>
                        <path class="path-1" fill="#3eb798"
                            d="M448 193.108h-32v80c0 44.176-35.824 80-80 80H192v32c0 35.344 28.656 64 64 64h96l69.76 58.08c6.784 5.648 16.88 4.736 22.528-2.048A16.035 16.035 0 00448 494.868v-45.76c35.344 0 64-28.656 64-64v-128c0-35.344-28.656-64-64-64z"
                            opacity=".4"></path>
                        <path class="path-2" fill="#3eb798"
                            d="M320 1.108H64c-35.344 0-64 28.656-64 64v192c0 35.344 28.656 64 64 64v61.28c0 8.832 7.168 16 16 16a16 16 0 0010.4-3.84l85.6-73.44h144c35.344 0 64-28.656 64-64v-192c0-35.344-28.656-64-64-64zm-201.44 182.56a22.555 22.555 0 01-4.8 4 35.515 35.515 0 01-5.44 3.04 42.555 42.555 0 01-6.08 1.76 28.204 28.204 0 01-6.24.64c-17.68 0-32-14.32-32-32-.336-17.664 13.712-32.272 31.376-32.608 2.304-.048 4.608.16 6.864.608a42.555 42.555 0 016.08 1.76c1.936.8 3.76 1.808 5.44 3.04a27.78 27.78 0 014.8 3.84 32.028 32.028 0 019.44 23.36 31.935 31.935 0 01-9.44 22.56zm96 0a31.935 31.935 0 01-22.56 9.44c-2.08.24-4.16.24-6.24 0a42.555 42.555 0 01-6.08-1.76 35.515 35.515 0 01-5.44-3.04 29.053 29.053 0 01-4.96-4 32.006 32.006 0 01-9.28-23.2 27.13 27.13 0 010-6.24 42.555 42.555 0 011.76-6.08c.8-1.936 1.808-3.76 3.04-5.44a37.305 37.305 0 013.84-4.96 37.305 37.305 0 014.96-3.84 25.881 25.881 0 015.44-3.04 42.017 42.017 0 016.72-2.4c17.328-3.456 34.176 7.808 37.632 25.136.448 2.256.656 4.56.608 6.864 0 8.448-3.328 16.56-9.28 22.56h-.16zm96 0a22.555 22.555 0 01-4.8 4 35.515 35.515 0 01-5.44 3.04 42.555 42.555 0 01-6.08 1.76 28.204 28.204 0 01-6.24.64c-17.68 0-32-14.32-32-32-.336-17.664 13.712-32.272 31.376-32.608 2.304-.048 4.608.16 6.864.608a42.555 42.555 0 016.08 1.76c1.936.8 3.76 1.808 5.44 3.04a27.78 27.78 0 014.8 3.84 32.028 32.028 0 019.44 23.36 31.935 31.935 0 01-9.44 22.56z">
                        </path>
                    </svg>
                </div></a>
                <h1>QuickChat</h1>
            </div>
            <div class="app-profile-box">
                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=2250&amp;q=80"
                    alt="profile">
                <div class="app-profile-box-name">
                    khawla kha
                </div>
                <p class="app-profile-box-title">UI Designer</p>
                <div class="switch-status">
                    <input type="checkbox" name="switchStatus" id="switchStatus" checked="">
                    <label class="label-toggle" for="switchStatus"></label>
                    <span class="toggle-text toggle-online">Online</span>
                    <span class="toggle-text toggle-offline">Offline</span>
                </div>
            </div>


            <div class="app-theme-selector">
                <button class="theme-color indigo" data-color="indigo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"
                        title="Indigo">
                        <defs></defs>
                        <path fill="#fff"
                            d="M451.648.356c-25.777 2.712-56.79 19.872-94.811 52.46-68.786 58.958-149.927 160.756-202.185 234-38.158-5.951-78.375 10.368-102.187 40.133C8.758 381.584 45.347 430.34 4.12 473.811c-7.179 7.569-4.618 20.005 4.98 24.114 67.447 28.876 153.664 10.879 194.109-31.768 24.718-26.063 38.167-64.54 31.411-100.762 72.281-55.462 172.147-140.956 228.7-211.885 31.316-39.277 47.208-70.872 48.584-96.59C513.759 22.273 486.87-3.346 451.648.356zM181.443 445.511c-27.362 28.85-87.899 45.654-141.767 31.287 30.12-48.043 4.229-91.124 36.214-131.106 26.246-32.808 79.034-41.993 109.709-11.317 35.839 35.843 19.145 86.566-4.156 111.136zm3.07-148.841c7.354-10.167 18.887-25.865 33.29-44.659l49.22 49.224c-18.125 14.906-33.263 26.86-43.077 34.494-8.842-15.879-22.526-30.108-39.433-39.059zM481.948 55.316c-3.368 63.004-143.842 186.021-191.797 226.621l-53.785-53.79c39.458-49.96 155.261-191.312 218.422-197.954 16.851-1.775 28.03 8.858 27.16 25.123z">
                        </path>
                    </svg>
                </button>
                <button class="theme-color pink" data-color="pink" title="Pink">
                    <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512">
                        <defs></defs>
                        <path fill="#fff"
                            d="M451.648.356c-25.777 2.712-56.79 19.872-94.811 52.46-68.786 58.958-149.927 160.756-202.185 234-38.158-5.951-78.375 10.368-102.187 40.133C8.758 381.584 45.347 430.34 4.12 473.811c-7.179 7.569-4.618 20.005 4.98 24.114 67.447 28.876 153.664 10.879 194.109-31.768 24.718-26.063 38.167-64.54 31.411-100.762 72.281-55.462 172.147-140.956 228.7-211.885 31.316-39.277 47.208-70.872 48.584-96.59C513.759 22.273 486.87-3.346 451.648.356zM181.443 445.511c-27.362 28.85-87.899 45.654-141.767 31.287 30.12-48.043 4.229-91.124 36.214-131.106 26.246-32.808 79.034-41.993 109.709-11.317 35.839 35.843 19.145 86.566-4.156 111.136zm3.07-148.841c7.354-10.167 18.887-25.865 33.29-44.659l49.22 49.224c-18.125 14.906-33.263 26.86-43.077 34.494-8.842-15.879-22.526-30.108-39.433-39.059zM481.948 55.316c-3.368 63.004-143.842 186.021-191.797 226.621l-53.785-53.79c39.458-49.96 155.261-191.312 218.422-197.954 16.851-1.775 28.03 8.858 27.16 25.123z">
                        </path>
                    </svg>
                </button>
                <button class="theme-color navy-dark active" data-color="navy-dark" title="Navy Dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512">
                        <defs></defs>
                        <path fill="#fff"
                            d="M451.648.356c-25.777 2.712-56.79 19.872-94.811 52.46-68.786 58.958-149.927 160.756-202.185 234-38.158-5.951-78.375 10.368-102.187 40.133C8.758 381.584 45.347 430.34 4.12 473.811c-7.179 7.569-4.618 20.005 4.98 24.114 67.447 28.876 153.664 10.879 194.109-31.768 24.718-26.063 38.167-64.54 31.411-100.762 72.281-55.462 172.147-140.956 228.7-211.885 31.316-39.277 47.208-70.872 48.584-96.59C513.759 22.273 486.87-3.346 451.648.356zM181.443 445.511c-27.362 28.85-87.899 45.654-141.767 31.287 30.12-48.043 4.229-91.124 36.214-131.106 26.246-32.808 79.034-41.993 109.709-11.317 35.839 35.843 19.145 86.566-4.156 111.136zm3.07-148.841c7.354-10.167 18.887-25.865 33.29-44.659l49.22 49.224c-18.125 14.906-33.263 26.86-43.077 34.494-8.842-15.879-22.526-30.108-39.433-39.059zM481.948 55.316c-3.368 63.004-143.842 186.021-191.797 226.621l-53.785-53.79c39.458-49.96 155.261-191.312 218.422-197.954 16.851-1.775 28.03 8.858 27.16 25.123z">
                        </path>
                    </svg>
                </button>
                <button class="theme-color dark" data-color="dark" title="Dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512">
                        <defs></defs>
                        <path fill="currentColor"
                            d="M451.648.356c-25.777 2.712-56.79 19.872-94.811 52.46-68.786 58.958-149.927 160.756-202.185 234-38.158-5.951-78.375 10.368-102.187 40.133C8.758 381.584 45.347 430.34 4.12 473.811c-7.179 7.569-4.618 20.005 4.98 24.114 67.447 28.876 153.664 10.879 194.109-31.768 24.718-26.063 38.167-64.54 31.411-100.762 72.281-55.462 172.147-140.956 228.7-211.885 31.316-39.277 47.208-70.872 48.584-96.59C513.759 22.273 486.87-3.346 451.648.356zM181.443 445.511c-27.362 28.85-87.899 45.654-141.767 31.287 30.12-48.043 4.229-91.124 36.214-131.106 26.246-32.808 79.034-41.993 109.709-11.317 35.839 35.843 19.145 86.566-4.156 111.136zm3.07-148.841c7.354-10.167 18.887-25.865 33.29-44.659l49.22 49.224c-18.125 14.906-33.263 26.86-43.077 34.494-8.842-15.879-22.526-30.108-39.433-39.059zM481.948 55.316c-3.368 63.004-143.842 186.021-191.797 226.621l-53.785-53.79c39.458-49.96 155.261-191.312 218.422-197.954 16.851-1.775 28.03 8.858 27.16 25.123z">
                        </path>
                    </svg>
                </button>
            </div>

        </div>
        <div class="app-main">

            <div class="bg-white w-full flex flex-col gap-5 px-3 md:px-16 rounded-xl h-auto lg:px-28 md:flex-row text-[#161931]">
                <aside class="hidden py-4 md:w-1/3 lg:w-1/4 md:block">
                </aside>
                <main class="w-full min-h-screen py-1 md:w-2/3 lg:w-3/4">
                    <div class="p-2 md:p-4">
                        <div class="w-full px-6 pb-8 mt-8 sm:max-w-xl sm:rounded-lg">
                            <h2 class="pl-6 text-2xl font-bold sm:text-xl">Public Profile</h2>

                            <div class="grid max-w-2xl mx-auto mt-8">
                                <div class="flex flex-col items-center space-y-5 sm:flex-row sm:space-y-0">

                                    <img class="object-cover w-40 h-40 p-1 rounded-full ring-2 ring-indigo-300 dark:ring-indigo-500"
                                        src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGZhY2V8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                                        alt="Bordered avatar">

                                    <div class="flex flex-col space-y-5 sm:ml-8">
                                        <button type="button"
                                            class="py-3.5 px-7 text-base font-medium text-indigo-900 focus:outline-none bg-white rounded-lg border border-indigo-200 hover:bg-indigo-900 hover:text-white focus:z-10 focus:ring-4 focus:ring-indigo-200 ">
                                            Change picture
                                        </button>
                                        <button type="button"
                                            class="py-3.5 px-7 text-base font-medium text-indigo-900 focus:outline-none bg-white rounded-lg border border-indigo-200 hover:bg-indigo-900 hover:text-white focus:z-10 focus:ring-4 focus:ring-indigo-200 ">
                                            Delete picture
                                        </button>
                                    </div>
                                </div>

                                <div class="items-center mt-8 sm:mt-14 text-[#202142]">

                                    <div
                                        class="flex flex-col items-center w-full mb-2 space-x-0 space-y-2 sm:flex-row sm:space-x-4 sm:space-y-0 sm:mb-6">
                                        <div class="w-full">
                                            <label for="first_name"
                                                class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">Your
                                                first name</label>
                                            <input type="text" id="first_name"
                                                class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 "
                                                placeholder="Your first name" value="Jane" required>
                                        </div>

                                        <div class="w-full">
                                            <label for="last_name"
                                                class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">Your
                                                last name</label>
                                            <input type="text" id="last_name"
                                                class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 "
                                                placeholder="Your last name" value="Ferguson" required>
                                        </div>

                                    </div>

                                    <div class="mb-2 sm:mb-6">
                                        <label for="email"
                                            class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">Your
                                            email</label>
                                        <input type="email" id="email"
                                            class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 "
                                            placeholder="your.email@mail.com" required>
                                    </div>
                                    <div class="mb-6">
                                        <label for="message"
                                            class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">Bio</label>
                                        <textarea id="message" rows="4"
                                            class="block p-2.5 w-full text-sm text-indigo-900 bg-indigo-50 rounded-lg border border-indigo-300 focus:ring-indigo-500 focus:border-indigo-500 "
                                            placeholder="Write your bio here..."></textarea>
                                    </div>

                                    <div class="flex justify-end">
                                        <button type="submit"
                                            class="text-white bg-indigo-700  hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">Save</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>


        </div>

        <script>
            let title = document.querySelectorAll(".chat-list-header");
            let totalHeight = 0;

            for (let i = 0; i < title.length; i++) {
                let totalHeight = 0;
                title[i].addEventListener("click", function () {
                    let result = this.nextElementSibling;
                    let activeSibling = this.nextElementSibling.classList.contains('active');
                    this.classList.toggle('active');
                    result.classList.toggle("active");
                    if (!activeSibling) {
                        for (i = 0; i < result.children.length; i++) {
                            totalHeight = totalHeight + result.children[i].scrollHeight + 40;
                        }
                    } else {
                        totalHeight = 0;
                    }
                    result.style.maxHeight = totalHeight + "px";
                });
            }

            const themeColors = document.querySelectorAll('.theme-color');

            themeColors.forEach(themeColor => {
                themeColor.addEventListener('click', (e) => {
                    themeColors.forEach(c => c.classList.remove('active'));
                    const theme = themeColor.getAttribute('data-color');
                    document.body.setAttribute('data-theme', theme);
                    themeColor.classList.add('active');
                });
            });
        </script>