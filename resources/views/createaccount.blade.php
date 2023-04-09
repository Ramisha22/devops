@extends('template')


@section('page-layout') 
    @if(session ('error'))
    <div>
            <ul style="background-color:azure">
            <li style="background-color:azure">{{session ('error')}}</li>
            </ul> 
    </div>   
    @endif
    <div class="">
    <div style="background-color: #caafa8;">
    <div class="container login" style="height: 750px;">
      <div class="row">
        <h1 style="font-size: 59px; font-weight:500; font-family: 'DM Serif Display', serif;">Create Account</h1>
      </div>
      <div>
        <form action="/createaccount" method="POST">
        @csrf
          <div class="form-group">
            <label class="label tcolor">First Name:</label>
            <input type="text" name="name"  for="name"class="form-control" id="fname"required>
            <small id="namevalid" class="form-text text-muted invalid-feedback">
              Your first name must be 2-10 characters long and should not start with a number
            </small>
          </div>
          <div class="form-group">
            <label class="label tcolor">Last Name:</label>
            <input type="text" name="lastname" class="form-control" id="lname"required>
            <small id="namevalid" class="form-text text-muted invalid-feedback">
              Your last name must be 2-10 characters long and should not start with a number
            </small>
          </div>
          <div class="form-group">
            <label class="label tcolor">Email address:</label>
            <input type="email"name="email" class="form-control" style="margin-bottom: 13px;" id="email"required>
            <small id="emailvalid" class="form-text text-muted invalid-feedback">
              Your email must be a valid email
            </small>
          </div>
          <div class="form-group">
            <label class=" tcolor" >Password:</label>
            <input type="password" name="pwd" class="form-control" style="margin-bottom: 13px;" id="pwd"required>
            <small id="passwordvalid" class="form-text text-muted invalid-feedback">
              Your password must be a valid password
            </small>

          </div>
          <button type="submit" class=" sub btn btn-default">Create Account</button>
        </form>

      </div>
    </div>
</div>
  <script>
    const fname = document.getElementById('fname');
    const lname = document.getElementById('lname');
    const email = document.getElementById('email');
    const password = document.getElementById('pwd');
    let validEmail = false;
    let validPassword = false;
    let validFname = false;
    let validLname = false;


    fname.addEventListener('blur', () => {

      let regex = /^[a-zA-Z]([0-9a-zA-Z]){2,10}$/;
      let str = fname.value;

      if (regex.test(str)) {
        console.log('Your name is valid');

        fname.classList.remove('is-invalid');
        validFname = true;
      }
      else {
        console.log('Your name is not valid');

        fname.classList.add('is-invalid');
        validFname = false;

      }
    })
    lname.addEventListener('blur', () => {

      let regex = /^[a-zA-Z]([0-9a-zA-Z]){2,10}$/;
      let str = lname.value;

      if (regex.test(str)) {
        console.log('Your name is valid');
        lname.classList.remove('is-invalid');
        validLname = true;
      }
      else {
        console.log('Your name is not valid');
        lname.classList.add('is-invalid');
        validLname = false;

      }
    })

    email.addEventListener('blur', () => {

      let regex = /^([a-z0-9-]+)@([a-z0-9-]+).([a-z]{2,8})(.[a-z]{2,8})?$/;
      let str = email.value;

      if (regex.test(str)) {
        console.log('Your email is valid');
        email.classList.remove('is-invalid');
        validEmail = true;
      }
      else {
        console.log('Your email is not valid');
        email.classList.add('is-invalid');
        validEmail = false;
      }
    })

   

    password.addEventListener('blur', () => {

      let regex = /^[a-zA-Z]([0-9a-zA-Z]){2,10}$/;
      let str = password.value;

      if (regex.test(str)) {
        console.log('Your password is valid');
        password.classList.remove('is-invalid');
        validPassword = true;
      }
      else {
        console.log('Your phone is not password');
        password.classList.add('is-invalid');
        validPassword = false;

      }
    })
    
  </script>
@endsection