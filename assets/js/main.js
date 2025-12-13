  const menuBtn = document.querySelector(".navbar button");
  const sideNav = document.querySelector(".side-nav");

  menuBtn.addEventListener("click", () => {
    // إظهار/إخفاء القائمة
    sideNav.classList.toggle("d-none");

  });
