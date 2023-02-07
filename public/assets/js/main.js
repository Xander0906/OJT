$(document).ready(function () {
  function updateState(state) {
    if (state === "closed") {
      $(".text-side").css("display", "none");
      $("#sidebar").removeClass("sidebar").addClass("close-sidebar");
      $("#close-side").removeClass("close-side").addClass("open-side");
      $("#icon-close").removeClass("fa-angle-left").addClass("fa-angle-right");
      $("#profile-close").removeClass("col-2").addClass("col-8 m-auto");
      $("#div-close").removeClass("ms-3");
      $("#main-content")
        .removeClass("main-content col-10")
        .addClass("main-content-lg col-12");
    } else {
      $(".text-side").css("display", "block");
      $("#sidebar").removeClass("close-sidebar").addClass("sidebar");
      $("#close-side").removeClass("open-side").addClass("close-side");
      $("#icon-close").removeClass("fa-angle-right").addClass("fa-angle-left");
      $("#profile-close").removeClass("col-8 m-auto").addClass("col-2");
      $("#div-close").addClass("ms-3");
      $("#main-content")
        .removeClass("main-content-lg col-12 mx-auto")
        .addClass("main-content col-10");
    }
  }

  $("#close-side").on("click", function () {
    let currentState = $("#sidebar").hasClass("sidebar") ? "open" : "closed";
    let newState = currentState === "open" ? "closed" : "open";
    updateState(newState);
    localStorage.setItem("sidebarState", newState);
  });

  let savedState = localStorage.getItem("sidebarState");
  updateState(savedState || "open");
  localStorage.setItem("sidebarState", savedState || "open");
});

$(document).ready(function () {
  $("#example").DataTable();
});

// Save scroll position on beforeunload
window.addEventListener("beforeunload", function () {
  localStorage.setItem("scrollPos", window.pageYOffset);
});

// Restore scroll position on load
window.addEventListener("load", function () {
  setTimeout(function () {
    window.scrollTo(0, localStorage.getItem("scrollPos") || 0);
  }, 0);
});

$(".logout").on("click", function (e) {
  e.preventDefault();
  const href = $(this).attr("href");

  Swal.fire({
    type: "warning",
    icon: "warning",
    title: "Are You Sure?",
    text: "You will be logout",
    showCancelButton: true,
    confirmButtonColor: "#d33",
    cancelButtonColor: "#3085d6",
    confirmButtonText: "Logout",
    customClass: {
      actions: "my-actions",
      cancelButton: "order-1 right-gap",
      confirmButton: "order-2",
      container: "my-swal",
    },
  }).then((result) => {
    if (result.value) {
      document.location.href = href;
    }
  });
});

$(".delete").on("click", function (e) {
  e.preventDefault();
  const href = $(this).attr("href");

  Swal.fire({
    type: "warning",
    icon: "warning",
    title: "Are You Sure?",
    text: "This user will be deleted",
    showCancelButton: true,
    confirmButtonColor: "#d33",
    cancelButtonColor: "#3085d6",
    confirmButtonText: "Delete",
    customClass: {
      actions: "my-actions",
      cancelButton: "order-1 right-gap",
      confirmButton: "order-2",
      container: "my-swal",
    },
  }).then((result) => {
    if (result.value) {
      document.location.href = href;
    }
  });
});

function togglePassword(inputId) {
  var input = $("#" + inputId);
  if (input.attr("type") === "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
}
