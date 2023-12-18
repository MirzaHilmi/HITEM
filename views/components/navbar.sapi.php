<?php use Saphpi\Core\Application;?>

<div class="justify-between items-stretch shadow-sm bg-gray-900 flex w-full gap-5 px-12 py-6 max-md:max-w-full max-md:flex-wrap max-md:px-5">
  <div class="items-stretch flex justify-between gap-1.5">
    <img loading="lazy" srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/1960ca3d3c2b4e838367fb464503445315240c74afc98e4bf26caca44c5ac678?apiKey=f1a9489e42624277a4277c6751b4869b&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/1960ca3d3c2b4e838367fb464503445315240c74afc98e4bf26caca44c5ac678?apiKey=f1a9489e42624277a4277c6751b4869b&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/1960ca3d3c2b4e838367fb464503445315240c74afc98e4bf26caca44c5ac678?apiKey=f1a9489e42624277a4277c6751b4869b&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/1960ca3d3c2b4e838367fb464503445315240c74afc98e4bf26caca44c5ac678?apiKey=f1a9489e42624277a4277c6751b4869b&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/1960ca3d3c2b4e838367fb464503445315240c74afc98e4bf26caca44c5ac678?apiKey=f1a9489e42624277a4277c6751b4869b&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/1960ca3d3c2b4e838367fb464503445315240c74afc98e4bf26caca44c5ac678?apiKey=f1a9489e42624277a4277c6751b4869b&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/1960ca3d3c2b4e838367fb464503445315240c74afc98e4bf26caca44c5ac678?apiKey=f1a9489e42624277a4277c6751b4869b&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/1960ca3d3c2b4e838367fb464503445315240c74afc98e4bf26caca44c5ac678?apiKey=f1a9489e42624277a4277c6751b4869b&" class="aspect-square object-contain object-center w-[52px] justify-center items-center overflow-hidden shrink-0 max-w-full" />
    <div class="text-violet-100 text-3xl font-bold leading-10 grow whitespace-nowrap self-start">
      HITEM
    </div>
  </div>
  <div class="justify-between items-stretch self-center flex gap-5 my-auto max-md:justify-center">
    <div class="text-violet-100 text-xl font-bold leading-6 whitespace-nowrap">
      <a href="/">Home</a>
      <?php if (Application::request()->getPath() === '/'): ?>
      <div class="bg-violet-100 shrink-0 h-px"></div>
      <?php endif;?>
    </div>

    <div class="text-violet-100 text-xl font-bold leading-6 self-start">
      <a href="/contact">Contact</a>
      <?php if (Application::request()->getPath() === '/contact'): ?>
      <div class="bg-violet-100 shrink-0 h-px"></div>
      <?php endif;?>
    </div>

    <div class="text-violet-100 text-xl font-bold leading-6 whitespace-nowrap self-start">
      <a href="/about">About</a>
      <?php if (Application::request()->getPath() === '/about'): ?>
      <div class="bg-violet-100 shrink-0 h-px"></div>
      <?php endif;?>
    </div>
  </div>
</div>
