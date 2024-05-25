document.addEventListener('DOMContentLoaded', function(){

    eventListeners();
    darkMode({})


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

function darkMode (){

    const  userThemeDefault = window.matchMedia('(prefers-color-scheme: dark)');
    
    console.log("darkmode");

    if(userThemeDefault.matches){
        document.body.classList.add('dark-mode');
    }else{
        document.body.classList.remove('dark-mode')
    }

    userThemeDefault.addEventListener('change', function(){
        if(userThemeDefault.matches){
            document.body.classList.add('dark-mode');
        }else{
            document.body.classList.remove('dark-mode')
        }
    })

    const darkMode = document.querySelector('.dark-mode-button')
    darkMode.addEventListener('click', function(){
        document.body.classList.toggle('dark-mode')
    });
}