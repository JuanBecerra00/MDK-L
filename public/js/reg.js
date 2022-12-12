let regbutton = document.querySelector('.reg-button');
let reg = document.querySelector('.reg');
let regbg = document.querySelector('.reg-bg');
let cancelregbutton = document.querySelector('.cancel-reg-button');
let deletebutton = document.querySelector('.delete-button');
let exportbutton = document.querySelector('.export-button');
let exportformats = document.querySelector('.export-formats');
let mostusedcontainer = document.querySelector('.most-used-container');
let userstable = document.querySelector('.users-table');


regbutton.onclick = function () {
    reg.classList.remove('max-sm:-translate-x-full')
    reg.classList.remove('sm:translate-x-full')
    regbg.classList.add('active')
}
regbg.onclick = function () {
    reg.classList.add('max-sm:-translate-x-full')
    reg.classList.add('sm:translate-x-full')
    regbg.classList.remove('active')
}
cancelregbutton.onclick = function () {
    reg.classList.add('max-sm:-translate-x-full')
    reg.classList.add('sm:translate-x-full')
    regbg.classList.remove('active')
}


exportbutton.onclick = function () {
    exportformats.classList.toggle('active')
    mostusedcontainer.classList.toggle('active')
    userstable.classList.toggle('max-sm:h-[calc(100vh-400px)]')
    userstable.classList.toggle('max-sm:h-[calc(100vh-324px)]')
}
