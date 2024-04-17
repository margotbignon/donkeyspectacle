const currentDate = document.querySelector('.current-date');
const daysTag = document.querySelector('.days');
const prevNextIcon = document.querySelectorAll('.icons span');

let date = new Date(),
currYear = date.getFullYear(),
currMonth = date.getMonth();

const months = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];

const renderCalendar = () => {
    let lastDateOfMonth = new Date(currYear, currMonth + 1, 0).getDate();
    let firstDayOfMonth = new Date(currYear, currMonth, 1).getDay();
    let lastDayOfMonth = new Date(currYear, currMonth, lastDateOfMonth).getDay();
    let lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate();
    let liTag = "";
    for (let i = firstDayOfMonth; i > 0; i--) {
        liTag += `<li class="day-inactive">${lastDateofLastMonth - i + 1}</li>`;
    }

    for (let i = 1; i <= lastDateOfMonth; i++) {
        liTag += `<li>${i}</li>`;
    }



    currentDate.innerText = `${months[currMonth]} ${currYear}`;
    daysTag.innerHTML = liTag;
}

renderCalendar();

prevNextIcon.forEach(icon => {
    icon.addEventListener('click', () => {
        currMonth = icon.id === 'prev' ? currMonth - 1 : currMonth + 1;
        renderCalendar();
    })
})
