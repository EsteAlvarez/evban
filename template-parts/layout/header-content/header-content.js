document.addEventListener("DOMContentLoaded", function () {
  const toggleButton = document.getElementById("menu-toggle-mobile");
  const offcanvas = document.querySelector(".mobile-offcanvas");
  const closeButton = document.getElementById("offcanvas_close_button");
  const body = document.body;

  toggleButton.addEventListener("click", function () {
    offcanvas.classList.add("open");
    toggleButton.setAttribute("aria-expanded", "true");
    body.classList.add("mobile-menu-open");
  });

  closeButton.addEventListener("click", function () {
    offcanvas.classList.remove("open");
    toggleButton.setAttribute("aria-expanded", "false");
    body.classList.remove("mobile-menu-open");
  });

  // Opcional: cerrar al hacer clic fuera del offcanvas
  document.addEventListener("click", function (e) {
    if (
      offcanvas.classList.contains("open") &&
      !offcanvas.contains(e.target) &&
      !toggleButton.contains(e.target)
    ) {
      offcanvas.classList.remove("open");
      toggleButton.setAttribute("aria-expanded", "false");
      body.classList.remove("mobile-menu-open");
    }
  });
});
