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
    firstDayOfMonth = firstDayOfMonth === 0 ? 6 : firstDayOfMonth -1;
    let lastDayOfMonth = new Date(currYear, currMonth, lastDateOfMonth).getDay();
    let lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate();
    let liTag = "";

    for (let i = firstDayOfMonth; i > 0; i--) {
        liTag += `<li class="day-inactive">${lastDateofLastMonth - i + 1}</li>`;
    }

    for (let i = 1; i <= lastDateOfMonth; i++) {
        let isToday = i === date.getDate() && currMonth === new Date().getMonth() && currYear === new Date().getFullYear() ? "day-active" : "";
        liTag += `<li class="day-click ${isToday}">${i}</li>`;
    }



    currentDate.innerText = `${months[currMonth]} ${currYear}`;
    daysTag.innerHTML = liTag;

    let firstSelectedDate = null; 
let secondSelectedDate = null; 

const dayClickElements = document.querySelectorAll('.day-click');
dayClickElements.forEach((dayClickElement, index)=> {
    dayClickElement.addEventListener('click', function() {
        if (firstSelectedDate && secondSelectedDate) {
            dayClickElements.forEach(dayElt => {
                dayElt.classList.remove('day-selected');
                dayElt.classList.remove('day-selected-between');
            })
            firstSelectedDate = null;
            secondSelectedDate = null;
        }
        if (firstSelectedDate === null) {
            firstSelectedDate = dayClickElement;
            dayClickElement.classList.add('day-selected');
            console.log(`${currYear}-${(currMonth + 1).toString().padStart(2, '0')}-${(index + 1).toString().padStart(2, '0')}`);
        } else if (secondSelectedDate === null) {
            secondSelectedDate = dayClickElement;
            console.log(`${currYear}-${(currMonth + 1).toString().padStart(2, '0')}-${(index + 1).toString().padStart(2, '0')}`);
            dayClickElement.classList.add('day-selected');
            const daysBetween = Array.from(dayClickElements).slice(
                Math.min(Array.from(dayClickElements).indexOf(firstSelectedDate), Array.from(dayClickElements).indexOf(secondSelectedDate)),
                Math.max(Array.from(dayClickElements).indexOf(firstSelectedDate), Array.from(dayClickElements).indexOf(secondSelectedDate))
            );

            daysBetween.forEach(day => {
                day.classList.add('day-selected-between');
            });

        }
    });
});
}

renderCalendar();


prevNextIcon.forEach(icon => {
    icon.addEventListener('click', () => {
        currMonth = icon.id === 'previous-month' ? currMonth - 1 : currMonth + 1;

        if (currMonth < 0 || currMonth > 11) {
            date = new Date();
            currYear = date.getFullYear();
            currMonth = date.getMonth();
        } else {
            date = new Date();
        }
        renderCalendar();
    })
})

