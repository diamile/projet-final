function validateEmail(email) {
  var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return re.test(email);
}

function validate() {
 console.log('ok');
}

document.getElementById('validate').addEventListener('click',function(){
  console.log('ok');
});
