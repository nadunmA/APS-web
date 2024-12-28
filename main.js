const products = document.querySelectorAll(".slider .product");
var counter = 0;

function back() {

    if (counter == 0) {
        counter = products.length / 3 - 1;
    }
    else {
        counter++;
    }

    scroll();
}

function next() {

    if (counter == products.length / 3 - 1) {
        counter = 0;
    }
    else {
        counter--;
    }

    scroll();
}

function scroll() {
    products.forEach(function (product) {
        product.style.transform = `translateX(${counter * 250}px)`;
    });
}



/*our team part  Craig Ellison */

function togglepopup() {
    document.getElementById("popup-1").classList.toggle("active");
}

/*our team part  Larry William */
function togglepopup1() {
    document.getElementById("popup-2").classList.toggle("active1");
}




/* Our team js part getelement by id */

var mainCeo = document.getElementsByClassName('main-pepole');
for (var i = 0; i < mainCeo.length; i++) {
    mainCeo[i].style.fontFamily = 'sans-serif';
}

var ourTeamHeading = document.getElementsByClassName('bord-of-director');
for (var i = 0; i < ourTeamHeading.length; i++) {
    ourTeamHeading[i].style.textAlign = 'center';
    ourTeamHeading[i].style.marginTop = '100px';
    ourTeamHeading[i].style.fontSize = '35px';
    ourTeamHeading[i].style.fontFamily = 'sans-serif';
}

var popUpBox = document.getElementsByClassName('content');
for (var i = 0; i < popUpBox.length; i++) {
    popUpBox[i].style.fontFamily = 'sans-serif';
}

var popUpBoxTwo = document.getElementsByClassName('content1');
for (var i = 0; i < popUpBoxTwo.length; i++) {
    popUpBoxTwo[i].style.fontFamily = 'sans-serif';
}




/* Our team directors board js part getelement by class name */

var firstDirectors = document.getElementsByClassName('firstLineDirector');
for (var i = 0; i < firstDirectors.length; i++) {
    firstDirectors[i].style.fontFamily = 'sans-serif';
}


/* our team director bord part 2 */

var secondDirectors = document.getElementsByClassName('firstLineDirector');
for (var i = 0; i < secondDirectors.length; i++) {
    secondDirectors[i].style.fontFamily = 'sans-serif';
}




/* our awards page paragraph */
var firstAwards = document.getElementsByClassName('awardFirstLine');
for (var i = 0; i < firstAwards.length; i++) {
    firstAwards[i].style.fontFamily = 'sans-serif';
    firstAwards[i].style.fontSize = '20px';

}

var SecondAwards = document.getElementsByClassName('awardSecondLine');
for (var i = 0; i < SecondAwards.length; i++) {
    SecondAwards[i].style.fontFamily = 'sans-serif';
    SecondAwards[i].style.fontSize = '20px';
}

var ThirdAwards = document.getElementsByClassName('awardThirdLine');
for (var i = 0; i < ThirdAwards.length; i++) {
    ThirdAwards[i].style.fontFamily = 'sans-serif';
    ThirdAwards[i].style.fontSize = '20px';
}



/* FAQ part */


const faqs = document.querySelectorAll('.faqs');

faqs.forEach(faqs => {
    const icon = faqs.querySelector('.icon');
    const qAnswers = faqs.querySelector('.qAnswers');

    faqs.addEventListener('click', () => {
        icon.classList.toggle('active');
        qAnswers.classList.toggle('active');
    })
})

