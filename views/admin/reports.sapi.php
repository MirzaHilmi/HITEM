<body class="bg-[#A887DC] flex">
    <?php require ROOT . '/views/components/admin/navbar.sapi.php';?>
    <main class="flex flex-col justify-start gap-8 p-12">
        <p class="text-violet-100 text-6xl font-black whitespace-nowrap">
            Report Tickets
        </p>
        <div>
            <table class="table-fixed w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xl text-slate-950 font-bold uppercase">
                    <tr>
                        <th scope="col" class="px-6 py-3 w-[5%]">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3 w-[10%]">
                            Reporter
                        </th>
                        <th scope="col" class="px-6 py-3 w-[10%]">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3 w-[10%]">
                            Phone Number
                        </th>
                        <th scope="col" class="px-6 py-3 w-[10%]">
                            Address
                        </th>
                        <th scope="col" class="px-6 py-3 w-[10%]">
                            Item
                        </th>
                        <th scope="col" class="px-6 py-3 w-[15%]">
                            Characteristic
                        </th>
                        <th scope="col" class="px-6 py-3 w-[10%]">
                            Lost At
                        </th>
                        <th scope="col" class="px-6 py-3 w-[10%]">
                            Last Location
                        </th>
                        <th scope="col" class="px-6 py-3 w-[10%]">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody class="text-lg font-bold text-white">
                    <tr class="border-b">
                        <th scope="row" class="px-6 py-4">
                            1
                        </th>
                        <td class="px-6 py-4">
                            Mirza Hilmi
                        </td>
                        <td class="px-6 py-4 truncate">
                            exquisitemirza@student.ub.ac.id
                        </td>
                        <td class="px-6 py-4">
                            08123456789
                        </td>
                        <td class="px-6 py-4">
                            Jalan Wonogiri
                        </td>
                        <td class="px-6 py-4">
                            Sandal
                        </td>
                        <td class="px-6 py-4">
                            Warnanya Kuning
                        </td>
                        <td class="px-6 py-4">
                            2023-07-12 15:02 AM
                        </td>
                        <td class="px-6 py-4">
                            GKM
                        </td>
                        <td class="px-6 py-4 flex justify-start">
                            <form action="/admin/reports" method="POST">
                                <input type="hidden" name="action" value="ACCEPT">
                                <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2">
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512">
                                        <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
                                    </svg>
                                </button>
                            </form>
                            <form action="/admin/reports" method="POST">
                                <input type="hidden" name="action" value="REJECT">
                                <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z"/></svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </main>
</body>