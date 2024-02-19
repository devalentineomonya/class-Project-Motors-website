// 
// CHANGE COLOR ON SCROLL FROM WHITE TO RED
// 
window.addEventListener('scroll', function () {
  var element = document.getElementById('scrollTarget');
  var scrollPosition = window.scrollY;
  var threshold = 200;
  if (scrollPosition > threshold) {
    element.classList.add('scrolled');
  } else {
    element.classList.remove('scrolled');
  }
});


// 
// SIDEBAR OVERLAY
// 
const sidebarOverlay = document.getElementById("sidebarOverlay");
const openSidebarOverlay = document.getElementById("openSidebarOverlay");
const closeSidebarOverlay = document.getElementById("closeSidebarOverlay");
const mobileSidebar = document.getElementById("mobileSidebar");

openSidebarOverlay.addEventListener("click", function () {
  setTimeout(() => {
    sidebarOverlay.classList.add("active")
    closeSidebarOverlay.style.right = "10px";
    setTimeout(() => {
      mobileSidebar.classList.add("open");
    }, 500);
  }, 500);

})


closeSidebarOverlay.addEventListener("click", function () {
  setTimeout(() => {
    mobileSidebar.classList.remove("open")
    setTimeout(function () {
      sidebarOverlay.classList.remove("active");
      closeSidebarOverlay.style.right = "-30px";

    }, 500);
  }, 1000);
});

// 
//SEARCH OVERLAY 
//
const closeSearchOverlay = document.getElementById("closeSearchOverlay");
const searchOverlay = document.getElementById("searchOverlay");
const openSearchOverlay = document.getElementById("openSearchOverlay");
const searchContent = document.getElementById("searchContent");
const searchInput = document.querySelector("#searchContent input");

openSearchOverlay.addEventListener("click", function () {
  setTimeout(() => {
    searchOverlay.classList.add("active");
    closeSearchOverlay.style.right = "10px";
    searchContent.classList.remove("closed");
    searchInput.focus();
  }, 500);
});



closeSearchOverlay.addEventListener("click", function () {
  setTimeout(() => {
    searchOverlay.classList.remove("active");
    closeSearchOverlay.style.right = "-20px";
    searchContent.classList.add("closed")
  }, 500);
})


// 
// VIDEO PLAYER
// 

const viewDemoButtons = document.querySelectorAll('.view-demo-btn');
const openCheckOverlayBtns = document.querySelectorAll('#openCheckBox');
const videoOverlay = document.querySelector('.video-overlay');
const closeVideoBtns = document.querySelectorAll('.close-video-btn');
const checkOverlays = document.querySelectorAll('.check-overlay');
const closeCheckOverlayBtns = document.querySelectorAll("#checkCloseBtn");

viewDemoButtons.forEach(function (button) {
  button.addEventListener('click', function () {
    videoOverlay.classList.add("active");
  });
});

openCheckOverlayBtns.forEach(function (button) {
  button.addEventListener('click', function () {
    const index = Array.from(openCheckOverlayBtns).indexOf(button);
    checkOverlays[index].classList.add("active");
  });
});

closeVideoBtns.forEach(function (btn) {
  btn.addEventListener('click', function () {
    videoOverlay.classList.remove("active");
  });
});

closeCheckOverlayBtns.forEach(function (btn) {
  btn.addEventListener("click", function () {
    checkOverlays.forEach(function (overlay) {
      overlay.classList.remove("active");
    });
  });
});



// 
// LOGIN SIGNUP FORM TOGGLER
// 

const loginBtn = document.getElementById("loginBtn");
const registerBtn = document.getElementById("registerBtn");
const loginForm = document.getElementById("loginForm");
const registerForm = document.getElementById("registerForm");
const btnOverlay = document.getElementById("btnOverlay");

registerBtn.addEventListener("click", function () {
  loginForm.style.left = "-400px"
  registerForm.style.left = "50px"
  btnOverlay.style.left = "110px"
})
loginBtn.addEventListener("click", function () {
  loginForm.style.left = "50px"
  registerForm.style.left = "-400px"
  btnOverlay.style.left = "0px"
})

