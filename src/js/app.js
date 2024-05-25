document.addEventListener('DOMContentLoaded', function(){

    eventListeners();


});
function eventListeners(){
   const mobileMenu = document.querySelector('.mobile-menu');
  
   mobileMenu.addEventListener('click', responsiveNavigation);
}
function responsiveNavigation(){

    const navbar = document.querySelector('.navbar');
    
    
    navbar.classList.toggle('show')

   /* if(navbar.classList.contains('show')){
        navbar.classList.remove('show');
    }else{
        navbar.classList.add('show');
    } */

}