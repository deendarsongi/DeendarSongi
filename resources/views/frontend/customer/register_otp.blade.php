@extends('frontend.master')

@section('content')
<section class="aw-login-form">
    <div class="container aw-login-form-container">
      <div class="aw-login-card " style="max-width:560px; padding-bottom: 40px; !important">
        <div class="verification-container ">
            <div class="aw-form-header">
                <h2>একাউন্ট ভেরিফিকেশন করুন</h2>
            </div>
            <div class="aw-form-group-container-inner">
                <label class="form-label">আপনার ইমেইল</label>
              <div >
                <h3>{{ $customer->email }}</h3>
              </div>
              @if (session('sand_otp'))
                <p style="color: green;">{{ session('sand_otp') }}</p>
              @endif
              @if (session('email_verify_succc'))
                <p style="color: green;">{{ session('email_verify_succc') }}</p>
              @endif
              @if (session('email_verify_error'))
                <p style="color: red;">{{ session('email_verify_error') }}</p>
              @endif
            </div>
            <p>Please enter the 6-digit verification code:</p>
            <form id="verificationForm" action="{{ route('customer.register.verify.otp', $customer->id) }}" method="POST">
              @csrf
              <input type="text" name="otp[]" maxlength="1" class="code-input" >
              <input type="text" name="otp[]" maxlength="1" class="code-input" >
              <input type="text" name="otp[]" maxlength="1" class="code-input" >
              <input type="text" name="otp[]" maxlength="1" class="code-input" >
              <input type="text" name="otp[]" maxlength="1" class="code-input" >
              <input type="text" name="otp[]" maxlength="1" class="code-input" >
              <br><br>
                @error('otp.*')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
                @if (session('otp_error'))
                    <p style="color: red;">{{ session('otp_error') }}</p>
                @endif
                <div class="aw-form-group-container-inner">
                    <div class="aw-form-remember-password">
                      <div class="aw-form-label justify-content-start"  style="margin-left: 33px;">
                        <a id="resend-link" href="{{ route('resend.otp', $customer->id) }}">পুনরায় কোড পাঠান</a>
                        <span id="otpExpirationTime" data-expiration="{{ \Carbon\Carbon::parse($customer->otp_expires_at)->timestamp }}"></span>
                        <span class="countdown" id="countdownTimer">00:00</span>
                      </div>
                    </div>
                    @if (session('otp_resand_error'))
                        <p style="color: red; margin-right: 70px;">{{ session('otp_resand_error') }}</p>
                    @endif
                </div>
                <div class="aw-form-group-container-inner">
                    <div class="aw-form-group-input">
                      <button type="submit" class="aw-form-control ds-button" >কোড ভেরিফাই করুন</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </section>
@endsection

@section('footer_script')

    {{-- OTP input focus --}}
    <script>
        const inputs = document.querySelectorAll('.code-input');

        inputs.forEach((input, index) => {
        input.addEventListener('input', (e) => {
            if (e.target.value.length === 1 && index < inputs.length - 1) {
            inputs[index + 1].focus();
            }
        });

        input.addEventListener('keydown', (e) => {
            if (e.key === 'Backspace' && input.value === '' && index > 0) {
            inputs[index - 1].focus();
            }
        });
        });

        // OTP expiration time
          document.addEventListener("DOMContentLoaded", function () {
          let timerDisplay = document.getElementById("countdownTimer");
          let resendLink = document.getElementById("resend-link");
          let otpExpirationElement = document.getElementById("otpExpirationTime");

          // OTP expiration time from the server (Unix Timestamp)
          let expirationTimestamp = parseInt(otpExpirationElement.getAttribute("data-expiration"));

          function updateTimer() {
              let now = Math.floor(Date.now() / 1000); // Current time in Unix Timestamp
              let remainingTime = expirationTimestamp - now;

              if (remainingTime > 0) {
                  let minutes = Math.floor(remainingTime / 60);
                  let seconds = remainingTime % 60;
                  timerDisplay.innerText = `${minutes}:${seconds < 10 ? "0" : ""}${seconds}`;
                  setTimeout(updateTimer, 1000);
              } else {
                  timerDisplay.innerText = "00:00";
                  resendLink.style.pointerEvents = "auto";
                  resendLink.style.opacity = "1";
              }
          }

          // Disable resend button initially
          resendLink.style.pointerEvents = "none";
          resendLink.style.opacity = "0.5";

          updateTimer();
      });

    </script>
@endsection

