let arrow = document.querySelectorAll(".arrow");
for (var i = 0; i < arrow.length; i++) {
  arrow[i].addEventListener("click", (e) => {
    let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
    arrowParent.classList.toggle("showMenu");
  });
}


$(".profile .icon_wrap").click(function () {
  $(this).parent().toggleClass("active");
  $(".notifications").removeClass("active");
});

$(".notifications .icon_wrap").click(function () {
  $(this).parent().toggleClass("active");
  $(".profile").removeClass("active");
});

$(".show_all .link").click(function () {
  $(".notifications").removeClass("active");
  $(".popup").show();
});


let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".bx-menu");
let sideBarToggler = document.querySelector("#sideBarToggler")
let mobScreen = screen.width
// console.log(sidebarBtn);

if (sidebarBtn) {
  if (mobScreen > 767) {
    sidebar.addEventListener("mouseenter", () => {
      sidebar.classList.toggle("close");
    });

    sidebar.addEventListener("mouseleave", () => {
      sidebar.classList.toggle("close");
    });

    $(".close, .shadow").click(function () {
      $(".popup").hide();
    });
  }

  else {
    $("#navTogglerBtn").on("click", function () {
      $("#sideBarToggler").find(".sidebar").removeClass("close")
    })
  }
}

