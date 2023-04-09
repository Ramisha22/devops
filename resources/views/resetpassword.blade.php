
@extends('template')


@section('page-layout')
@if(session ('error'))
    <div>
            <ul style="">
            <li style="">{{session ('error')}}</li>
            </ul> 
    </div>   
@endif
  <div class="">
    <div style="background-color: #caafa8;">
    <div class="container login">
      <div class="row">
        <h1 style="font-size: 59px; font-weight:500; font-family: 'DM Serif Display', serif;">login</h1>
      </div>
      <div>
      
        <form action="/login/check/{$email}/{$password}" method="POST" >
        @csrf
          <div class="form-group">
            <label class="label tcolor" >Reset Password for : <?php echo $email; ?></label>
          </div>
          <div class="form-group">
            <label class=" tcolor">Password:</label>
            <input type="password" name =" password"class="form-control" style="margin-bottom: 20px;" id="pwd"required>
            <small class="form-text text-muted invalid-feedback">
              Your password must be a valid email
            </small>
          </div>
          <div class="form-group">
            <label class=" tcolor">Confirm Password:</label>
            <input type="password" name =" cpassword"class="form-control" style="margin-bottom: 20px;" id="pwd1"required>
            <small class="form-text text-muted invalid-feedback">
              Your password does not match
            </small>
          </div>

          <button type="submit" class=" sub btn btn-default " onsubmit ="confirmPassword()"  >Submit</button>
        </form>
      </div>
    </div>
  </div>


  <script>   
    const password = document.getElementById('pwd');
    let validPassword = false;
    const cpassword = document.getElementById('pwd1');
    let match = false;

    password.addEventListener('blur', () => {

      let regex = /^[a-zA-Z]([0-9a-zA-Z]){2,10}$/;
      let str = password.value;

      if (regex.test(str)) {
        console.log('Your password is valid');
        console.log(password);
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