document.getElementById('reviewForm').addEventListener('submit', function (event) {
    event.preventDefault();


    const userId = this.userid.value;
    const name = this.name.value;
    const email = this.email.value;
    const message = this.message.value;

    const reviewItem = document.createElement('div');
    reviewItem.className = 'reviewItem';
    reviewItem.innerHTML = `<strong> User ID : </strong>${userId}<br><br>  <strong> Name : </strong> ${name}<br><br>  <strong> Email : </strong> ${email}<br><br>  <strong> Review : </strong> ${message}`;

    reviewItem.style.color = 'white';
    reviewItem.style.width = '555px';

    document.getElementById('reviewsList').appendChild(reviewItem);

    this.reset();

    window.scrollTo(0, 0);

});
