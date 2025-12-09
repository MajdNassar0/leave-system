  const menuBtn = document.querySelector(".navbar button");
  const sideNav = document.querySelector(".side-nav");
  const mainContent = document.querySelector(".mn-inner");

  menuBtn.addEventListener("click", () => {
    // إظهار/إخفاء القائمة
    sideNav.classList.toggle("d-none");

    // عندما تظهر القائمة -> يصير عرضها 2 كولوم
    // والمحتوى يصبح 10 كولوم
    if (!sideNav.classList.contains("d-none")) {
      sideNav.classList.add("col-md-2");
      mainContent.classList.remove("col-md-12");
      mainContent.classList.add("col-md-10");
    } else {
      // إخفاء القائمة -> يرجع كل شيء كما كان
      sideNav.classList.remove("col-md-2");
      mainContent.classList.remove("col-md-10");
      mainContent.classList.add("col-md-12");
    }
  });
