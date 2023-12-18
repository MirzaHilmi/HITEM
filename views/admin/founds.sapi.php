<body class="bg-[#A887DC] flex">
    <?php require ROOT . '/views/components/admin/navbar.sapi.php';?>
    <main class="flex flex-col justify-start gap-8 p-12">
        <p class="text-violet-100 text-6xl font-black whitespace-nowrap">
            Found Items
        </p>
        <div>
            <table class="table-fixed w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xl text-slate-950 font-bold uppercase">
                    <tr>
                        <th scope="col" class="px-6 py-3 w-[10%]">
                            Owner
                        </th>
                        <th scope="col" class="px-6 py-3 w-[10%]">
                            Finder
                        </th>
                        <th scope="col" class="px-6 py-3 w-[10%]">
                            Finder Contact
                        </th>
                        <th scope="col" class="px-6 py-3 w-[10%]">
                            Item
                        </th>
                        <th scope="col" class="px-6 py-3 w-[10%]">
                            Lost At
                        </th>
                        <th scope="col" class="px-6 py-3 w-[10%]">
                            Found At
                        </th>
                        <th scope="col" class="px-6 py-3 w-[10%]">
                            Last Location
                        </th>
                        <th scope="col" class="px-6 py-3 w-[10%]">
                            Found Location
                        </th>
                        <th scope="col" class="px-6 py-3 w-[10%]">
                            Ticket
                        </th>
                        <th scope="col" class="px-6 py-3 w-[10%]">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody class="text-lg font-bold text-white">
                    <tr class="border-b">
                        <th scope="row" class="px-6 py-4">
                            Mirza
                        </th>
                        <td class="px-6 py-4">
                            Ferdinand Prabeswarawiri
                        </td>
                        <td class="px-6 py-4">
                            0812121212
                        </td>
                        <td class="px-6 py-4">
                            Bolpoint Joyko
                        </td>
                        <td class="px-6 py-4">
                            2023-12-21 12:00 AM
                        </td>
                        <td class="px-6 py-4">
                            2023-12-21 13:00 AM
                        </td>
                        <td class="px-6 py-4">
                            GKM
                        </td>
                        <td class="px-6 py-4">
                            Monas
                        </td>
                        <td class="px-6 py-4">
                            <a class="text-center hover:underline" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="inline" height="16" width="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M579.8 267.7c56.5-56.5 56.5-148 0-204.5c-50-50-128.8-56.5-186.3-15.4l-1.6 1.1c-14.4 10.3-17.7 30.3-7.4 44.6s30.3 17.7 44.6 7.4l1.6-1.1c32.1-22.9 76-19.3 103.8 8.6c31.5 31.5 31.5 82.5 0 114L422.3 334.8c-31.5 31.5-82.5 31.5-114 0c-27.9-27.9-31.5-71.8-8.6-103.8l1.1-1.6c10.3-14.4 6.9-34.4-7.4-44.6s-34.4-6.9-44.6 7.4l-1.1 1.6C206.5 251.2 213 330 263 380c56.5 56.5 148 56.5 204.5 0L579.8 267.7zM60.2 244.3c-56.5 56.5-56.5 148 0 204.5c50 50 128.8 56.5 186.3 15.4l1.6-1.1c14.4-10.3 17.7-30.3 7.4-44.6s-30.3-17.7-44.6-7.4l-1.6 1.1c-32.1 22.9-76 19.3-103.8-8.6C74 372 74 321 105.5 289.5L217.7 177.2c31.5-31.5 82.5-31.5 114 0c27.9 27.9 31.5 71.8 8.6 103.9l-1.1 1.6c-10.3 14.4-6.9 34.4 7.4 44.6s34.4 6.9 44.6-7.4l1.1-1.6C433.5 260.8 427 182 377 132c-56.5-56.5-148-56.5-204.5 0L60.2 244.3z"/></svg>
                                &nbsp;
                                #1
                            </a>
                        </td>
                        <td class="px-6 py-4">
                            <form action="/admin/founds" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="id">
                                <button type="button" class="bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg px-5 py-2.5 text-center inline-flex items-center me-2">
                                    <svg class="w-3.5 h-3.5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512">
                                        <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
                                    </svg>
                                    Invalidate
                                </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </main>
</body>