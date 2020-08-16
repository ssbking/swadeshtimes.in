var cacheName = 'sdTimes';
var filesToCache = [
    '/css/modern-business',
    '/includes/footer.php',
    '/includes/header.php',
    '/includes/sidebar.php',
    '/js/index.js',
    '/js/contact_me.js',
    '/js/jqBootstrapValidation.js',
    '/imagesfavicon.png',
    '/images/logo.png',
    '/images/swlogo.PNG',
    '/images/usericon.png',
    '/about-us.php',
    '/index.php',
    '/contact-us.php',
    '/news-details.php',
    '/search.php',
    '/category.php',
    '/about.html',
    '/mail/contact_me.php',
    '/vendor/',
    '/plugins/'
  ]

/* Start the service worker and cache all of the app's content */
self.addEventListener('install', function(e) {
    e.waitUntil(
      caches.open(cacheName).then(function(cache) {
        return cache.addAll(filesToCache);
      })
    );
  });
  
  /* Serve cached content when offline */
  self.addEventListener('fetch', function(e) {
    e.respondWith(
      caches.match(e.request).then(function(response) {
        return response || fetch(e.request);
      })
    );
  });