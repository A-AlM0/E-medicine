let userBox = document.querySelector('.header .header-2 .user-box');
let navbar = document.querySelector('.header .header-2 .navbar');

document.querySelector('#user-btn').onclick = () =>{
   userBox.classList.toggle('active');
   navbar.classList.remove('active');
}

document.querySelector('#menu-btn').onclick = () =>{
   navbar.classList.toggle('active');
   userBox.classList.remove('active');
}

window.onscroll = () =>{
   userBox.classList.remove('active');
   navbar.classList.remove('active');

   if(window.scrollY > 60){
      document.querySelector('.header .header-2').classList.add('active');
   }else{
      document.querySelector('.header .header-2').classList.remove('active');
   }
}
let featuedImg = document.getElementById('featured-image');
let smallImgs = document.getElementsByClassName('small-Img');

smallImgs[0].addEventListener('click', () => {
    featuedImg.src = smallImgs[0].src;
    smallImgs[0].classList.add('sm-card')
    smallImgs[1].classList.remove('sm-card')
    smallImgs[2].classList.remove('sm-card')
    smallImgs[3].classList.remove('sm-card')
    smallImgs[4].classList.remove('sm-card')
})
smallImgs[1].addEventListener('click', () => {
    featuedImg.src = smallImgs[1].src;
    smallImgs[0].classList.remove('sm-card')
    smallImgs[1].classList.add('sm-card')
    smallImgs[2].classList.remove('sm-card')
    smallImgs[3].classList.remove('sm-card')
    smallImgs[4].classList.remove('sm-card')
})
smallImgs[2].addEventListener('click', () => {
    featuedImg.src = smallImgs[2].src;
    smallImgs[0].classList.remove('sm-card')
    smallImgs[1].classList.remove('sm-card')
    smallImgs[2].classList.add('sm-card')
    smallImgs[3].classList.remove('sm-card')
    smallImgs[4].classList.remove('sm-card')
})
smallImgs[3].addEventListener('click', () => {
    featuedImg.src = smallImgs[3].src;
    smallImgs[0].classList.remove('sm-card')
    smallImgs[1].classList.remove('sm-card')
    smallImgs[2].classList.remove('sm-card')
    smallImgs[3].classList.add('sm-card')
    smallImgs[4].classList.remove('sm-card')
})
smallImgs[4].addEventListener('click', () => {
    featuedImg.src = smallImgs[4].src;
    smallImgs[0].classList.remove('sm-card')
    smallImgs[1].classList.remove('sm-card')
    smallImgs[2].classList.remove('sm-card')
    smallImgs[3].classList.remove('sm-card')
    smallImgs[4].classList.add('sm-card')
})