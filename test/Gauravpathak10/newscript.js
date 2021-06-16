burger = document.querySelector('.burger')
navbar = document.querySelector('.navbar')
navlist = document.querySelector('.nav-list')


 burger.addEventlistener('click', ()=>{
     navbar.classlist.toggle('h-nav-resp');
     navlist.classlist.toggle('v-class-resp');

})

