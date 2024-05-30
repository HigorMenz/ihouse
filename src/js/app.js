document.addEventListener('DOMContentLoaded', function(){

    eventListeners();
    darkMode()


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


function darkMode () {
    const userThemeDefault = window.matchMedia('(prefers-color-scheme: dark)');
    const darkModeButton = document.querySelector('.dark-mode-button');
    const darkModeEnabled = localStorage.getItem('darkModeEnabled');

    // Verifica se o usuário já selecionou o modo escuro anteriormente
    if (darkModeEnabled === 'true') {
        document.body.classList.add('dark-mode');
    } else if (darkModeEnabled === 'false') {
        document.body.classList.remove('dark-mode');
    } else {
        // Se o usuário não tiver selecionado, usa o tema padrão do sistema
        if (userThemeDefault.matches) {
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }
    }

    // Adiciona um listener para mudanças no tema do sistema
    userThemeDefault.addEventListener('change', function() {
        if (userThemeDefault.matches) {
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }
    });

    // Adiciona um listener para mudanças no botão de modo escuro
    darkModeButton.addEventListener('click', function() {
        const darkModeEnabled = document.body.classList.toggle('dark-mode');
        // Salva a preferência do usuário na localStorage
        localStorage.setItem('darkModeEnabled', darkModeEnabled);
    });
}