let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .nav');
let header = document.querySelector('.header');

menu.onclick = () => {
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
}

window.onscroll = () => {
  menu.classList.remove('fa-times');
  navbar.classList.remove('active');

  if (window.scrollY > 0) {
    header.classList.add('active');
  } else {
    header.classList.remove('active');
  }
}

function getTipoSeguro() {
  let tipoSeguro = document.getElementById('tipo_seguro_id').value;
  myElement = document.forms['contact-form']['valorTipoSeguro'];
  
  if (tipoSeguro == "basico") {
    myElement.setAttribute('value','$ 500');
    console.log("Basico");
  } else if (tipoSeguro == "intermedio") {
    myElement.setAttribute('value','$ 1000');
    console.log("Intermedio");
  } else if (tipoSeguro == "premium") {
    myElement.setAttribute('value','$ 1500');
    console.log("Premium");
  }
}