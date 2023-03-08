// sidebar toggle js
const toggleBar = document.querySelector("#toggle-bar");
const toggleSidebar = document.querySelector(".sidebar-wrapper");
const toggleMainPage = document.querySelector(".main-body-wrapper"); 

function sidebarExpand(){
    toggleSidebar.classList.toggle("sidebar-custom-width");
    toggleMainPage.classList.toggle("main-page-width");
} 

toggleBar.addEventListener("click",sidebarExpand);
