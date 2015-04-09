$(document).ready(function() {
$("#submit").click(function() {
var name = $("#name").val();
var email = $("#email").val();
var message = $("#message").val();
var contact = $("#contact").val();
var subject = $("#subject").val();
$("#returnmessage").empty(); // To empty previous error/success message.
// Checking for blank fields.
if (name == '' || email == '' || contact == '' || subject=='') {
alert("אנא מלאו את כל השדות");
} else {
alert("ארעה תקלה - אנא שלחו מייל באופן ידני לכתובת dr.rachmiel@gmail.com");
// Returns successful data submission message when the entered information is stored in database.
$.post("send_form_email.php", {
name1: name,
email1: email,
message1: message,
contact1: contact
}, function(data) {
$("#returnmessage").append(data); // Append returned message to message paragraph.
if (data == "ההודעה התקבלה, נשתדל ליצור קשר בהקדםהאפשרי") {
$("#form")[0].reset(); // To reset form fields on success.
}
});
}
});
});