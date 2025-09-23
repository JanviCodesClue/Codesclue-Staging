(function () {
  const version = Date.now(); // or use your own version string
  const cssLinks = document.querySelectorAll('link[rel="stylesheet"]');
  const loadPromises = [];

  cssLinks.forEach((oldLink) => {
    const href = oldLink.getAttribute('href');
    if (!href) return;

    const cleanHref = href.split('?')[0];
    const newLink = document.createElement('link');
    newLink.rel = 'stylesheet';
    newLink.href = `${cleanHref}?v=${version}`;

    const promise = new Promise((resolve) => {
      newLink.onload = resolve;
      newLink.onerror = resolve; // always resolve to prevent hang
    });

    loadPromises.push(promise);
    oldLink.parentNode.insertBefore(newLink, oldLink.nextSibling);
  });

  Promise.all(loadPromises).then(() => {
    // Show body by removing `loading` class from <html>
    document.documentElement.classList.remove('loading');
  });
})();