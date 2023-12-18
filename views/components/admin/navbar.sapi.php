<?php use Saphpi\Core\Application;?>
<aside class="relative top-0 left-0 z-20 h-screen w-64 flex-col items-center justify-between gap-4 border-b border-gray-100 bg-[#6930C3] p-4 flex">
  <div class="flex flex-col w-full">

    <div class="flex flex-col items-center gap-4 px-8 md:px-2">
      <div class="mb-4 p-8 flex justify-center gap-8">
        <img loading="lazy" srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/1960ca3d3c2b4e838367fb464503445315240c74afc98e4bf26caca44c5ac678?apiKey=f1a9489e42624277a4277c6751b4869b&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/1960ca3d3c2b4e838367fb464503445315240c74afc98e4bf26caca44c5ac678?apiKey=f1a9489e42624277a4277c6751b4869b&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/1960ca3d3c2b4e838367fb464503445315240c74afc98e4bf26caca44c5ac678?apiKey=f1a9489e42624277a4277c6751b4869b&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/1960ca3d3c2b4e838367fb464503445315240c74afc98e4bf26caca44c5ac678?apiKey=f1a9489e42624277a4277c6751b4869b&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/1960ca3d3c2b4e838367fb464503445315240c74afc98e4bf26caca44c5ac678?apiKey=f1a9489e42624277a4277c6751b4869b&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/1960ca3d3c2b4e838367fb464503445315240c74afc98e4bf26caca44c5ac678?apiKey=f1a9489e42624277a4277c6751b4869b&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/1960ca3d3c2b4e838367fb464503445315240c74afc98e4bf26caca44c5ac678?apiKey=f1a9489e42624277a4277c6751b4869b&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/1960ca3d3c2b4e838367fb464503445315240c74afc98e4bf26caca44c5ac678?apiKey=f1a9489e42624277a4277c6751b4869b&" class="aspect-square object-contain object-center w-[52px] justify-center items-center overflow-hidden shrink-0 max-w-full" />
        <div class="text-violet-100 text-3xl font-black leading-10 grow whitespace-nowrap self-start">
          HITEM
        </div>
      </div>
      <a class="flex w-full justify-center gap-4 <?=Application::request()->getPath() === '/admin/founds' ? 'bg-gray-900 rounded-lg p-2' : ''?>" href="/admin/founds">
        <svg xmlns="http://www.w3.org/2000/svg"fill="#9F9CEE" class="ml-2" height="32" width="32" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
        <p class="text-white text-base font-bold leading-5 grow whitespace-nowrap my-auto">
          Found Items
        </p>
      </a>
      <a class="flex w-full justify-center gap-4 <?=Application::request()->getPath() === '/admin/items' ? 'bg-gray-900 rounded-lg p-2' : ''?>" href="/admin/items">
        <img loading="lazy" srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/fdbc75492a97dc37f508df055e827973eda84b55be66e64fecb4519a8b1a84ca?apiKey=f1a9489e42624277a4277c6751b4869b&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/fdbc75492a97dc37f508df055e827973eda84b55be66e64fecb4519a8b1a84ca?apiKey=f1a9489e42624277a4277c6751b4869b&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/fdbc75492a97dc37f508df055e827973eda84b55be66e64fecb4519a8b1a84ca?apiKey=f1a9489e42624277a4277c6751b4869b&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/fdbc75492a97dc37f508df055e827973eda84b55be66e64fecb4519a8b1a84ca?apiKey=f1a9489e42624277a4277c6751b4869b&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/fdbc75492a97dc37f508df055e827973eda84b55be66e64fecb4519a8b1a84ca?apiKey=f1a9489e42624277a4277c6751b4869b&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/fdbc75492a97dc37f508df055e827973eda84b55be66e64fecb4519a8b1a84ca?apiKey=f1a9489e42624277a4277c6751b4869b&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/fdbc75492a97dc37f508df055e827973eda84b55be66e64fecb4519a8b1a84ca?apiKey=f1a9489e42624277a4277c6751b4869b&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/fdbc75492a97dc37f508df055e827973eda84b55be66e64fecb4519a8b1a84ca?apiKey=f1a9489e42624277a4277c6751b4869b&" class="aspect-square object-contain object-center w-11 justify-center items-center overflow-hidden shrink-0 max-w-full" />
        <p class="text-white text-base font-bold leading-5 grow whitespace-nowrap my-auto">
          Lost Items
        </p>
      </a>
      <a class="flex w-full flex-row justify-center gap-4 <?=Application::request()->getPath() === '/admin/reports' ? 'bg-gray-900 rounded-lg p-2' : ''?>" href="/admin/reports">
        <img loading="lazy" srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/a42a639efb093ad23b75c529f6a94a17f0f9288828b4e4d13042e0a85f1baf6d?apiKey=f1a9489e42624277a4277c6751b4869b&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/a42a639efb093ad23b75c529f6a94a17f0f9288828b4e4d13042e0a85f1baf6d?apiKey=f1a9489e42624277a4277c6751b4869b&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/a42a639efb093ad23b75c529f6a94a17f0f9288828b4e4d13042e0a85f1baf6d?apiKey=f1a9489e42624277a4277c6751b4869b&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/a42a639efb093ad23b75c529f6a94a17f0f9288828b4e4d13042e0a85f1baf6d?apiKey=f1a9489e42624277a4277c6751b4869b&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/a42a639efb093ad23b75c529f6a94a17f0f9288828b4e4d13042e0a85f1baf6d?apiKey=f1a9489e42624277a4277c6751b4869b&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/a42a639efb093ad23b75c529f6a94a17f0f9288828b4e4d13042e0a85f1baf6d?apiKey=f1a9489e42624277a4277c6751b4869b&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/a42a639efb093ad23b75c529f6a94a17f0f9288828b4e4d13042e0a85f1baf6d?apiKey=f1a9489e42624277a4277c6751b4869b&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/a42a639efb093ad23b75c529f6a94a17f0f9288828b4e4d13042e0a85f1baf6d?apiKey=f1a9489e42624277a4277c6751b4869b&" class="aspect-square object-contain object-center w-11 justify-center items-center overflow-hidden shrink-0 max-w-full" />
        <p class="text-white text-base font-bold leading-5 self-center grow whitespace-nowrap my-auto">
          Reports
        </p>
      </a>
    </div>
  </div>

  <form action="" method="POST" class="flex w-full justify-center gap-4 mb-6">
    <img loading="lazy" srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/9c81c8a2e114a6c2ad4584c13cb629b8e78e1078eeda1a3bf15ef32de1161b9c?apiKey=f1a9489e42624277a4277c6751b4869b&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/9c81c8a2e114a6c2ad4584c13cb629b8e78e1078eeda1a3bf15ef32de1161b9c?apiKey=f1a9489e42624277a4277c6751b4869b&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/9c81c8a2e114a6c2ad4584c13cb629b8e78e1078eeda1a3bf15ef32de1161b9c?apiKey=f1a9489e42624277a4277c6751b4869b&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/9c81c8a2e114a6c2ad4584c13cb629b8e78e1078eeda1a3bf15ef32de1161b9c?apiKey=f1a9489e42624277a4277c6751b4869b&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/9c81c8a2e114a6c2ad4584c13cb629b8e78e1078eeda1a3bf15ef32de1161b9c?apiKey=f1a9489e42624277a4277c6751b4869b&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/9c81c8a2e114a6c2ad4584c13cb629b8e78e1078eeda1a3bf15ef32de1161b9c?apiKey=f1a9489e42624277a4277c6751b4869b&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/9c81c8a2e114a6c2ad4584c13cb629b8e78e1078eeda1a3bf15ef32de1161b9c?apiKey=f1a9489e42624277a4277c6751b4869b&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/9c81c8a2e114a6c2ad4584c13cb629b8e78e1078eeda1a3bf15ef32de1161b9c?apiKey=f1a9489e42624277a4277c6751b4869b&" class="aspect-square object-contain object-center w-11 justify-center items-center overflow-hidden shrink-0 max-w-full" />
    <div class="text-white text-base font-bold leading-5 self-center grow whitespace-nowrap my-auto">
      Logout
    </div>

  </form>
</aside>