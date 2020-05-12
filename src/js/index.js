const get = (el) => {
  const isMany = document.querySelectorAll(el).length > 1

  if (isMany) return document.querySelectorAll(el)
  return document.querySelector(el)
}

let navigation = get('.navigation')
let navigation_content = get('.navigation-content')
let navigation_item = get('.navigation-content__item')

navigation.onclick = () => {
  navigation.classList.toggle('navigation--active')
  navigation_content.classList.toggle('navigation-content--active')
  if (navigation_content.classList.contains('navigation-content--active') && window.innerWidth <= 768) {
    document.querySelectorAll('body')[0].style.overflow = 'hidden'
    document.querySelectorAll('html')[0].style.overflow = 'hidden'
  } else {
    document.querySelectorAll('body')[0].style.overflow = 'auto'
    document.querySelectorAll('html')[0].style.overflow = 'auto'
  }
}

for (let i = 0; i < navigation_item.length; i++) {
  navigation_item[i].onclick = () => {
    navigation.classList.toggle('navigation--active')
    navigation_content.classList.remove('navigation-content--active')
    document.querySelectorAll('body')[0].style.overflow = 'auto'
    document.querySelectorAll('html')[0].style.overflow = 'auto'
  }
}

$(document).on('click', 'a[href^="#"]', function (event) {
  event.preventDefault();

  $('html, body').animate({
    scrollTop: $($.attr(this, 'href')).offset().top
  }, 700);
});

let link_list = get('.pml-links')

window.onscroll = () => {
  if (window.innerWidth <= 768 && window.pageYOffset > 30) {
    link_list.classList.add('pml-links--remove')
  } else {
    link_list.classList.remove('pml-links--remove')
  }
}

let contact_input = get('.pml-contact__input')
let contact_content = get('.pml-contact__message')
let contact_btn = get('.button--submit')

let contact_name = get('.contact-name')
let contact_email = get('.contact-email')
let contact_msg = get('.contact-msg')

let emailValidation = false

contact_btn.setAttribute('disabled', true)
contact_btn.value = `
can't submit ...
`

contact_input[0].onkeyup = () => {
  emailValidation = validateEmail(contact_input[1].value)

  if (!contact_input[0].value == '' && !contact_input[1].value == '' && !contact_content.value == '' && emailValidation) {
    contact_btn.classList.remove('button--disabled')
    contact_btn.value = `submit`
    contact_btn.removeAttribute('disabled')
  } else {
    contact_btn.setAttribute('disabled', true)
    contact_btn.classList.add('button--disabled')
    contact_btn.value = `
    can't submit ...
    `
  }

  if (!contact_input[0].value == '') {
    contact_name.style.opacity = 0
    contact_name.style.transform = 'translateX(-20px)'
  } else {
    contact_name.style.opacity = 1
    contact_name.style.transform = 'translateX(0)'
  }
}

contact_input[1].onkeyup = () => {
  emailValidation = validateEmail(contact_input[1].value)

  if (!contact_input[0].value == '' && !contact_input[1].value == '' && !contact_content.value == '' && emailValidation) {
    contact_btn.classList.remove('button--disabled')
    contact_btn.value = `submit`
    contact_btn.removeAttribute('disabled')
  } else {
    contact_btn.setAttribute('disabled', true)
    contact_btn.classList.add('button--disabled')
    contact_btn.value = `
    can't submit ...
    `
  }

  if (!contact_input[1].value == '' && emailValidation) {
    contact_email.style.opacity = 0
    contact_email.style.transform = 'translateX(-20px)'
  } else {
    contact_email.style.opacity = 1
    contact_email.style.transform = 'translateX(0)'
  }
}

contact_content.onkeyup = () => {
  emailValidation = validateEmail(contact_input[1].value)

  if (!contact_input[0].value == '' && !contact_input[1].value == '' && !contact_content.value == '' && emailValidation) {
    contact_btn.classList.remove('button--disabled')
    contact_btn.value = `submit`
    contact_btn.removeAttribute('disabled')
  } else {
    contact_btn.setAttribute('disabled', true)
    contact_btn.classList.add('button--disabled')
    contact_btn.value = `
    can't submit ...
    `
  }

  if (!contact_content.value == '') {
    contact_msg.style.opacity = 0
    contact_msg.style.transform = 'translateX(-20px)'
  } else {
    contact_msg.style.opacity = 1
    contact_msg.style.transform = 'translateX(0)'
  }
}

//removing scroll on innerheight less than 750

let scroll = get('.pml-scroll')

if (window.innerHeight < 750) {
  scroll.style.display = 'none'
}

// phone animation

let phone_btn = get('.phone-btn')
let phone_nav = get('.pml-phone__nav')
let phone = get('.pml-phone')
let phone_click = 2

phone_btn.onclick = () => {
  phone_nav.classList.toggle('pml-phone__nav--active')

  if (phone_click%2 == 0) {
    phone.style.animationPlayState = 'paused'
    phone_btn.innerHTML = 'PLAY'
  } else {
    phone.style.animationPlayState = 'running'
    phone_btn.innerHTML = 'PAUSE'
  }
  phone_click++
}


// functions

function validateEmail(email) {
  var isEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return isEmail.test(String(email).toLowerCase());
}
