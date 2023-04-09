


function myFunction() {
      var x = document.getElementById("dropdown");
          x.style.display = "block";    
      var x = document.getElementById("dropdown2");
          x.style.display = "none";
          
}
function myFunction1() {
      var x = document.getElementById("dropdown");
      x.style.display = "none";
}
function myFunction2() {
      var x = document.getElementById("dropdown");
          x.style.display = "none";
      var x = document.getElementById("dropdown2");
          x.style.display = "block";
}

function myFunction3() {
      var x = document.getElementById("dropdown2");
          x.style.display = "none";
}

const emai = document.getElementById('eml');
let validEmai = false;
emai.addEventListener('blur', () => {
    let regex = /^([a-z0-9-]+)@([a-z0-9-]+).([a-z]{2,8})(.[a-z]{2,8})?$/;
    let str = emai.value;

    if (regex.test(str)) {
      console.log('Your email is valid');
      emai.classList.remove('is-invalid');
      validEmai = true;
    }
    else {
      console.log('Your email is not valid');
      emai.classList.add('is-invalid');
      validEmai = false;
    }
    $(document).ready(function () {
        cartload();
    });

  
})

