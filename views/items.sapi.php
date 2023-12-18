<body>
  <?php require ROOT . '/views/components/navbar.sapi.php'?>
  <div class="bg-violet-100 flex flex-col items-stretch">
    <div class="justify-between w-full px-20 py-12 max-md:max-w-full max-md:px-5">
      <div class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0">
        <div class="flex flex-col items-stretch w-3/5 max-md:w-full max-md:ml-0">
          <div class="items-stretch flex flex-col max-md:max-w-full max-md:mt-10">
            <div class="text-violet-700 text-7xl font-bold leading-[79px] mt-20 max-md:max-w-full max-md:text-4xl max-md:leading-[54px] max-md:mt-10">
              List of Recent Reported Lost Items
            </div>
            <div class="text-gray-900 text-2xl leading-8 mt-9 max-md:max-w-full">
              List of recent lost items we receive every day, and we have set up
              this dedicated section that allows internet users to consult the
              most recent reports from website.
            </div>
          </div>
        </div>
        <div class="flex flex-col items-stretch w-2/5 ml-5 max-md:w-full max-md:ml-0">
          <div class="flex-col overflow-hidden relative flex min-h-[420px] justify-center items-center px-16 py-12 max-md:max-w-full max-md:mt-10 max-md:px-5">
            <img loading="lazy" srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/80e3bd0a304a617386e6c647ef978639f6aaaadb671f9bc5e81103e4b2ac2f5c?apiKey=f1a9489e42624277a4277c6751b4869b&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/80e3bd0a304a617386e6c647ef978639f6aaaadb671f9bc5e81103e4b2ac2f5c?apiKey=f1a9489e42624277a4277c6751b4869b&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/80e3bd0a304a617386e6c647ef978639f6aaaadb671f9bc5e81103e4b2ac2f5c?apiKey=f1a9489e42624277a4277c6751b4869b&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/80e3bd0a304a617386e6c647ef978639f6aaaadb671f9bc5e81103e4b2ac2f5c?apiKey=f1a9489e42624277a4277c6751b4869b&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/80e3bd0a304a617386e6c647ef978639f6aaaadb671f9bc5e81103e4b2ac2f5c?apiKey=f1a9489e42624277a4277c6751b4869b&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/80e3bd0a304a617386e6c647ef978639f6aaaadb671f9bc5e81103e4b2ac2f5c?apiKey=f1a9489e42624277a4277c6751b4869b&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/80e3bd0a304a617386e6c647ef978639f6aaaadb671f9bc5e81103e4b2ac2f5c?apiKey=f1a9489e42624277a4277c6751b4869b&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/80e3bd0a304a617386e6c647ef978639f6aaaadb671f9bc5e81103e4b2ac2f5c?apiKey=f1a9489e42624277a4277c6751b4869b&" class="absolute h-full w-full object-cover object-center inset-0" />
            <img loading="lazy" srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/2bd42d2bbf35515bf594e476bd1a0ec86e08ebbdbc484af29497e34f2dea53cd?apiKey=f1a9489e42624277a4277c6751b4869b&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/2bd42d2bbf35515bf594e476bd1a0ec86e08ebbdbc484af29497e34f2dea53cd?apiKey=f1a9489e42624277a4277c6751b4869b&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/2bd42d2bbf35515bf594e476bd1a0ec86e08ebbdbc484af29497e34f2dea53cd?apiKey=f1a9489e42624277a4277c6751b4869b&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/2bd42d2bbf35515bf594e476bd1a0ec86e08ebbdbc484af29497e34f2dea53cd?apiKey=f1a9489e42624277a4277c6751b4869b&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/2bd42d2bbf35515bf594e476bd1a0ec86e08ebbdbc484af29497e34f2dea53cd?apiKey=f1a9489e42624277a4277c6751b4869b&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/2bd42d2bbf35515bf594e476bd1a0ec86e08ebbdbc484af29497e34f2dea53cd?apiKey=f1a9489e42624277a4277c6751b4869b&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/2bd42d2bbf35515bf594e476bd1a0ec86e08ebbdbc484af29497e34f2dea53cd?apiKey=f1a9489e42624277a4277c6751b4869b&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/2bd42d2bbf35515bf594e476bd1a0ec86e08ebbdbc484af29497e34f2dea53cd?apiKey=f1a9489e42624277a4277c6751b4869b&" class="aspect-square object-contain object-center w-[180px] overflow-hidden max-w-full mb-24 max-md:mb-10" />
          </div>
        </div>
      </div>
    </div>
    <div class="items-center flex w-full flex-col pl-20 pr-20 py-12 max-md:max-w-full max-md:px-5">
      <div class="text-indigo-900 text-4xl font-semibold leading-10 self-stretch whitespace-nowrap max-md:max-w-full max-md:mr-2">
        Table of Recently Lost Items
      </div>
      <br>

      <table class="table w-full justify-center text-center border-2 border-black">
        <tr class="border border-black rounded-lg">
          <th class="bg-[#c2aae6]">Name</th>
          <th class="bg-[#c2aae6]">Description</th>
          <th class="bg-[#c2aae6]">Place</th>
          <th class="bg-[#c2aae6]">Time</th>
        </tr>
        <tr class="border border-black">
          <td>Charger laptop</td>
          <td>ASUS ROG laptop charger</td>
          <td>Room F 3.2</td>
          <td>10 : 00 WIB</td>
        </tr>
        <tr class="border border-black">
          <td>Binder book</td>
          <td>Blue color with sticker</td>
          <td>Room F 2.1</td>
          <td>12 : 30 WIB</td>
        </tr>
        <tr class="border border-black">
          <td>Earbuds</td>
          <td>Airboom Nano Z</td>
          <td>Laboratory G 1.2</td>
          <td>09 : 30 WIB</td>
        </tr>
        <tr class="border border-black">
          <td>Item name</td>
          <td>Item Description</td>
          <td>Place last seen</td>
          <td>Time of lost</td>
        </tr>
        <tr class="border border-black">
          <td>Item name</td>
          <td>Item Description</td>
          <td>Place last seen</td>
          <td>Time of lost</td>
        </tr>
        <tr class="border border-black">
          <td>Item name</td>
          <td>Item Description</td>
          <td>Place last seen</td>
          <td>Time of lost</td>
        </tr>

      </table>

      <div class="justify-center items-stretch flex gap-3 mt-6">
        <div class="text-indigo-900 text-2xl font-semibold leading-8 whitespace-nowrap">
          &lt;
          10/100 entries
          &gt;
        </div>
      </div>
    </div>
    <div class="justify-between w-full px-20 py-12 max-md:max-w-full max-md:px-5">
      <div class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0">
        <div class="flex flex-col items-stretch w-[35%] max-md:w-full max-md:ml-0">
          <img loading="lazy" srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/b3e1c77bc3baa3cd930cb9334b7c0b1d6c5777afb9e9f8a6fc1d9fb19b9cf9c4?apiKey=f1a9489e42624277a4277c6751b4869b&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/b3e1c77bc3baa3cd930cb9334b7c0b1d6c5777afb9e9f8a6fc1d9fb19b9cf9c4?apiKey=f1a9489e42624277a4277c6751b4869b&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/b3e1c77bc3baa3cd930cb9334b7c0b1d6c5777afb9e9f8a6fc1d9fb19b9cf9c4?apiKey=f1a9489e42624277a4277c6751b4869b&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/b3e1c77bc3baa3cd930cb9334b7c0b1d6c5777afb9e9f8a6fc1d9fb19b9cf9c4?apiKey=f1a9489e42624277a4277c6751b4869b&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/b3e1c77bc3baa3cd930cb9334b7c0b1d6c5777afb9e9f8a6fc1d9fb19b9cf9c4?apiKey=f1a9489e42624277a4277c6751b4869b&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/b3e1c77bc3baa3cd930cb9334b7c0b1d6c5777afb9e9f8a6fc1d9fb19b9cf9c4?apiKey=f1a9489e42624277a4277c6751b4869b&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/b3e1c77bc3baa3cd930cb9334b7c0b1d6c5777afb9e9f8a6fc1d9fb19b9cf9c4?apiKey=f1a9489e42624277a4277c6751b4869b&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/b3e1c77bc3baa3cd930cb9334b7c0b1d6c5777afb9e9f8a6fc1d9fb19b9cf9c4?apiKey=f1a9489e42624277a4277c6751b4869b&" class="aspect-square object-contain object-center w-full overflow-hidden max-md:mt-10" />
        </div>
        <div class="flex flex-col items-stretch w-[65%] ml-5 max-md:w-full max-md:ml-0">
          <div class="flex flex-col my-auto pr-12 items-start max-md:max-w-full max-md:mt-10 max-md:pr-5">
            <div class="self-stretch text-violet-700 text-5xl font-bold leading-[62px] max-md:max-w-full max-md:text-4xl max-md:leading-[53px]">
              Didn't Find Your Item?
            </div>
            <div class="self-stretch text-gray-900 text-xl font-medium leading-6 mt-6 max-md:max-w-full">
              If your lost item is not in the list, you can use the online
              reporting service on our platform. Simply fill out the form
              explaining the lost item and the location of the potential loss.
            </div>
            <div class="text-violet-100 text-xl font-bold leading-6 whitespace-nowrap justify-center items-stretch bg-gray-900 mt-11 px-8 py-4 rounded-3xl max-md:mt-10 max-md:px-5">
              <a href="">Create reports</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php require ROOT . '/views/components/footer.sapi.php'?>
  </div>
</body>
