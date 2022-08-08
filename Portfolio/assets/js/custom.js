// Collapsible function
const collapsibles = document.querySelectorAll(".collapsible");
collapsibles.forEach((item) =>
  item.addEventListener("click", function () {
    this.classList.toggle("collapsible--expanded");
  })
);

// Contact form function for sending message

const contact__form = document.getElementById("contact-form");

function sendMessage(e) {
  e.preventDefault();

  const name = document.getElementById("name"),
    email = document.getElementById("email"),
    phone = document.getElementById("phone"),
    message = document.getElementById("message");

  Email.send({
    SecureToken: "34e84280-648b-4b18-bc1a-1fad745a1542",
    To: "lukasdaugela197@gmail.com",
    From: "lukasdaugela197@gmail.com",
    Subject: "Porfolio contact message",
    Body:
      "Name: " +
      name.value +
      "<br> Email: " +
      email.value +
      "<br> Phone number: " +
      phone.value +
      "<br> Message: " +
      message.value,
  }).then((message) => alert("Message Sent Succesfully"));

  contact__form.reset();
}
contact__form.addEventListener("submit", sendMessage);
