function centerNavbar() {
  const logo = document.getElementById("logo");
  const navbar = document.getElementById("navbar");
  const offset = logo.clientWidth / 2;
  navbar.style.marginRight = `${offset}px`;
}

document.addEventListener("DOMContentLoaded", () => centerNavbar())
