let submenubutton = document.querySelector('.header-submenu-button');
let submenubuttonlocker = document.querySelector('.header-submenu-button-locker');
let submenu = document.querySelector('.header-submenu');
let profile = document.querySelector('.submenu-profile');
let settings = document.querySelector('.submenu-settings');
let exit = document.querySelector('.submenu-exit');

let mobilemoduleusers = document.querySelector('.mobile-module-users');
let mobilemoduleclients = document.querySelector('.mobile-module-clients');
let mobilemodulecars = document.querySelector('.mobile-module-cars');
let mobilemodulebuy = document.querySelector('.mobile-module-buy');
let mobilemodulestorage = document.querySelector('.mobile-module-storage');
let mobilemodulesell = document.querySelector('.mobile-module-sell');
let usermobile = document.querySelector('.user-mobile');


let headeruser = document.querySelector('.header-user');
let headeruserx = document.querySelector('.header-user-x');
submenubutton.onclick = function () {
    submenubutton.classList.add('active')
    submenu.focus()

    usermobile.classList.toggle('max-sm:translate-x-full')


    headeruser.classList.toggle('max-sm:opacity-0')
    headeruserx.classList.toggle('max-sm:opacity-0')
    headeruserx.classList.toggle('max-sm:opacity-1')
}
submenubuttonlocker.onclick = function () {
    submenubutton.classList.add('active')
    submenubuttonlocker.classList.remove('active')
    submenubuttonlocker.classList.add('opacity-0')
}
submenu.onfocus = function () {
    submenu.classList.toggle('active')
    submenubuttonlocker.classList.add('active')
    submenubuttonlocker.classList.remove('opacity-0')
}
submenu.onblur = function () {
    submenubutton.classList.remove('active')
    submenu.classList.remove('active')
    submenubuttonlocker.classList.remove('active')
    submenubuttonlocker.classList.add('opacity-0')
}
