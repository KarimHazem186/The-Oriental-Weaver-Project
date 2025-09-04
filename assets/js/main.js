/*================Add To Cart ====================*/
/*============== Favourite ====================*/
/*================ Compare ==================*/
/*==========================================*/



/*=============== SHOW MENU ===============*/
const navMenu = document.getElementById('nav-menu'),
navToggle=document.getElementById('nav-toggle'),
navClose = document.getElementById('nav-close');
/*===== Menu Show =====*/
/* Validate if constant exists */
if (navToggle){
  navToggle.addEventListener('click',()=>{
    navMenu.classList.add('show-menu');
  });
}

/*===== Hide Show =====*/
/* Validate if constant exists */
if (navClose){
  navClose.addEventListener('click',()=>{
    navMenu.classList.remove('show-menu');
  });
}

/*=============== SWIPER Arrivals ===============*/
var swiperProducts = new Swiper(".new-container", {
    spaceBetween:24,
    loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 40,
        },
        1400: {
          slidesPerView: 4,
          spaceBetween: 24,
        },
      },
    });
/*===============  Tabs ===============*/
/*================Account=================*/
const tabs=document.querySelectorAll('[data-target]'),
tabContents = document.querySelectorAll('[content]');
tabs.forEach((tab)=>{
  tab.addEventListener('click',()=>{
    const target = document.querySelector(tab.dataset.target);
    // console.log(target);
    tabContents.forEach((tabContent)=>{
      tabContent.classList.remove('active-tab');
    });
    target.classList.add('active-tab');
    tabs.forEach((tab)=> {
      tab.classList.remove('active-tab');
    });
    tab.classList.add('active-tab');
  });
});



///////////////////////////////////////////////////////
/*const div=document.createElement('div');
div.className="show-Menu";
console.log(div.outerHTML);
div.classList.add('add-Toggle')
console.log(div.outerHTML);*/
///////////////////////////////////////////////////////