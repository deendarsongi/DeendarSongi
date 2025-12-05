
@extends('frontend.sidebar')
@section('dashboard_content')
<div class="dsdb-content">
    <div class="dsdb-content-inner">
      <div class="dsdb-sub-header">
        <h2>একাউন্ট সেটিংস</h2>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="dsdb-settings-container">
            <div class="dsdb-biodata-settings-container">
                <div class="form_title"><h2>বায়োডাটা হাইড রাখুন</h2></div>
              <form action="" method="post">
                <div class="biodata-settings-general-content">
                  <div class="delete-biodata-content">
                    <p>
                    নিচের সুইচ অফ করার মাধ্যমে আপনার বায়োডাটা সাময়িক সময়ের জন্য হাইড রাখতে পারবেন
                    </p>
                    <div class="toggle-container">
                        <div class="toggle-switch" id="toggleSwitch">
                            <div class="toggle-button">
                                <span id="toggleText"></span>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            
            <div class="dsdb-biodata-settings-container">
                <div class="form_title"><h2>বায়োডাটা ডিলিট করুন</h2></div>
                <div class="biodata-settings-general-content">
                  <div class="delete-biodata-content">
                    <p>
                      "ডিলিট বায়োডাটা" বাটনে ক্লিক করার মাধ্যমে আপনার
                      বায়োডাটা সম্পূর্ণরূপে ডিলিট হয়ে যাবে। বায়োডাটার
                      তথ্যসমূহ পুনরুদ্ধার করা সম্ভব হবে না।
                    </p>
                    <div class="delete-biodata-submit delete">
                      <a data-link="{{ route('delete.biodata') }}" class="ds-general-btn w-100 ds-button">ডিলিট বায়োডাটা</a>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('footer_script')
  <script>
    $('.delete a').click(function(){
        var link = $(this).attr('data-link');
        Swal.fire({
        title: "আপনি কি নিশ্চিত?",
        text: "এই বায়োডাটা মুছে ফেলা হবে এবং আর ফিরে পাওয়া যাবে না!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "হ্যাঁ, ডিলিট করুন!"
        }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = link;
        }
    });
    });
</script>
@if (session('delete_biodata'))
    <script>
        Swal.fire({
        title: "Deleted!",
        text: "আপনার বায়োডাটা সফলভাবে ডিলিট হয়েছে।",
        icon: "success"
        });
    </script>
@endif
@endsection
