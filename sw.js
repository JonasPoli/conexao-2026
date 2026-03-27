const CACHE_NAME = 'conexao-v1';
const ASSETS = [
  './v1.html',
  './assets/js/tailwind.min.js',
  './assets/css/google_fonts.css',
  './assets/css/material_symbols.css',
  './assets/images/logo.svg',
  './assets/images/hero_image.jpg',
  './assets/images/student_placeholder.svg',
  './assets/images/mapa.png',
  './assets/css/all.min.css',
  './assets/webfonts/fa-brands-400.woff2',
  './assets/webfonts/fa-regular-400.woff2',
  './assets/webfonts/fa-solid-900.woff2',
  // Note: I will dynamically add other images here if needed, 
  // but for a true PWA, we usually cache everything in the assets folder.
];

self.addEventListener('install', (event) => {
  event.waitUntil(
    caches.open(CACHE_NAME).then((cache) => {
      return cache.addAll(ASSETS);
    })
  );
});

self.addEventListener('fetch', (event) => {
  event.respondWith(
    caches.match(event.request).then((response) => {
      return response || fetch(event.request);
    })
  );
});
