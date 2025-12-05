@extends('frontend.master')

@section('content')
<section class="aw-faq">
    <div class="subpage-header">
      <h1>সচরাচর জিজ্ঞাসা</h1>
    </div>
    <div class="container">
      <div class="row faq-container">
        <div class="col-lg-4 faq-tab-left">
          <div class="faq-header">
            <div class="faq-content active" data-content="faqtab1">
              <div class="aw-faq-title">
                <button>ওয়েবসাইট সংক্রান্ত</button>
              </div>
            </div>
            <div class="faq-content" data-content="faqtab2">
              <div class="aw-faq-title">
                <button>বায়োডাটা সংক্রান্ত</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 faq-tab-right">
          <div class="faq-info">
            <div class="faq-collapse faqtab1">
              <div class="faq-body">
                <div class="aw-accordion-content">
                  <div class="aw-accordion-title d-flex align-items-center justify-content-spaceBetween">
                    <button>ওয়েবসাইট কিভাবে ব্যবহার করব?</button>
                    <i class="bi bi-chevron-down accordion-arrow"></i>
                  </div>
                  <div class="aw-accordion-collapse">
                    <div class="accordion-body">
                      <p>
                        বিনামূল্যে একাউন্ট তৈরী করুন এবং আমদের নূন্যতম শর্তসমূহ পূরণ
                        করে থাকলে বায়োডাটা জমা দিন। বায়োডাটা জমা না দিয়েও আপনার নিজস্ব চাহিদা
                        অনুযায়ী বৈবাহিক অবস্থা, ঠিকানা, পেশা, বয়স, শিক্ষা
                        ইত্যাদি ফিল্টারিং ব্যবহার করে উপজেলা/জেলা/বিভাগ ভিত্তিক
                        পাত্র/পাত্রী খুঁজতে পারেন। এরপর পছন্দকৃত বায়োডাটার অভিবাবকের যোগাযোগ তথ্য সংগ্রহ করে
                        ফোন কল অথবা ইমেইলের মাধ্যমে যোগাযোগ করুন। বিস্তারিত
                        জানতে <a href="#">ভিডিও দেখূন</a>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="aw-accordion-content">
                  <div class="aw-accordion-title d-flex align-items-center justify-content-spaceBetween">
                    <button>দ্বীনদারসঙ্গী ডটকম কাদের জন্য কাজ করে?</button>
                    <i class="bi bi-chevron-down accordion-arrow"></i>
                  </div>
                  <div class="aw-accordion-collapse">
                    <div class="accordion-body">
                      <p>
                        এটি শুধুমাত্র প্রেক্টিসিং মুসলিম পাত্র/পাত্রীদের নিয়ে কাজ করে। যারা বিয়ের ক্ষেত্রে পাত্র/পাত্রীর দ্বীনদারিতাকে প্রাধান্য দেয় এবং বিয়েতে সকল প্রকার হারাম সংশ্লিষ্ট কর্মকান্ড বর্জন করে সুন্নাহসম্মত বিয়ে করতে ইচ্ছুক
                      </p>
                    </div>
                  </div>
                </div>
                <div class="aw-accordion-content">
                  <div class="aw-accordion-title d-flex align-items-center justify-content-spaceBetween">
                    <button>বায়োডাটা তৈরীতে আপনাদের কোন শর্ত আছে কি?</button>
                    <i class="bi bi-chevron-down accordion-arrow"></i>
                  </div>
                  <div class="aw-accordion-collapse">
                    <div class="accordion-body">
                      <p>
                        হ্যাঁ। দ্বীনদারসঙ্গীতে বায়োডাটা তৈরীর আগে আপনার
                        নিম্নবর্ণিত শর্তসমূহ পূরণ করা আবশ্যক। অন্যথায় বায়োডাটা
                        এপ্রুভ করা হবে না।
                        <b class="faq-gender d-block">পাত্রের ক্ষেত্রে -</b>
                        <span class="aw-faq-condtiion">
                          ১. উপার্জন হালাল হতে হবে<br>
                          ২. নিয়মিত ৫ ওয়াক্ত নামাযী হতে হবে<br>
                          ৩. ওয়াজিব দাড়ি থাকতে হবে<br>
                          ৪. টাখনুর উপর পোশাক পরতে হবে<br>
                          ৫. অভিবাবকের অনুমতি নিতে হবে</span><b class="faq-gender d-block">পাত্রীর ক্ষেত্রে -
                        </b>
                        <span class="aw-faq-condtiion">
                          ১. শরয়ী ফরয পর্দানশীন হতে হবে<br>
                          ২. নিয়মিত ৫ ওয়াক্ত নামাযী হতে হবে<br>
                          ৩. স্বামীর আনুগত্য করার মানসিকতা থাকতে হবে<br>
                          8. অভিবাবকের অনুমতি নিতে হবে</span>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="aw-accordion-content">
                  <div class="aw-accordion-title d-flex align-items-center justify-content-spaceBetween">
                    <button>
                      আপনাদের সেবা কি শুধুমাত্র অবিবাহিতদের জন্য ?
                    </button>
                    <i class="bi bi-chevron-down accordion-arrow"></i>
                  </div>
                  <div class="aw-accordion-collapse">
                    <div class="accordion-body">
                      <p>
                        না। অবিবাহিত, বিবাহিত, ডিভোর্সড, বিধবা কিংবা বিপত্নীক
                        যে কেউ নূন্যতম শর্তসমূহ পূরন করে বায়োডাটা তৈরি ও জমা দিতে
                        পারবে।
                      </p>
                    </div>
                  </div>
                </div>
                <div class="aw-accordion-content">
                  <div class="aw-accordion-title d-flex align-items-center justify-content-spaceBetween">
                    <button>
                      দ্বীনদারসঙ্গী ডটকমে আমার ব্যক্তিগত তথ্য কতটা নিরাপদ থাকবে?
                    </button>
                    <i class="bi bi-chevron-down accordion-arrow"></i>
                  </div>
                  <div class="aw-accordion-collapse">
                    <div class="accordion-body">
                      <p>
                        আপনার ব্যক্তিগত তথ্যের নিরাপত্তার জন্য আপনার ও আপনার পিতা-মাতার নাম, মোবাইল নাম্বার এবং ইমেইল এড্রেস গোপন রাখা হবে। যে কেউ আপনার বায়োডাটা পড়তে পারবে কিন্ত আপনার পরিচয় জানতে পারবে না। শুধুমাত্র বিয়ের জন্য আপনার অভিভাবকের সাথে যোগাযোগ করতে আগ্রহী যে কেউ নির্দিষ্ট পরিমাণ টাকা পরিশোধ করার পর ব্যক্তিগত তথ্য দেখতে পারবে।
                      </p>
                    </div>
                  </div>
                </div>
                <div class="aw-accordion-content">
                  <div class="aw-accordion-title d-flex align-items-center justify-content-spaceBetween">
                    <button>
                      বিয়ে পরবর্তীতে আপনাদের কোনো অর্থ প্রদান করতে হয়?
                    </button>
                    <i class="bi bi-chevron-down accordion-arrow"></i>
                  </div>
                  <div class="aw-accordion-collapse">
                    <div class="accordion-body">
                      <p>
                        না। বিয়ে পরবর্তীতে আমাদের কোনো সার্ভিস চার্জ নেই
                      </p>
                    </div>
                  </div>
                </div>
                <div class="aw-accordion-content">
                  <div class="aw-accordion-title d-flex align-items-center justify-content-spaceBetween">
                    <button>
                      বিয়ে পরবর্তী কোনো জটিলতায় দ্বীনদারসঙ্গী কর্তৃপক্ষ কোন দায় নিবে কি?
                    </button>
                    <i class="bi bi-chevron-down accordion-arrow"></i>
                  </div>
                  <div class="aw-accordion-collapse">
                    <div class="accordion-body">
                      <p>
                        দ্বীনদারসঙ্গী ডটকম শুধুমাত্র দ্বীনদার পাত্র/পাত্রী সন্ধানের
                        একটি মাধ্যম হিসেবে কাজ করে। হাজারখানেক মানুষের
                        চারিত্রিক সার্টিফিকেট আমরা দিচ্ছি না। যেহুতু
                        পাত্র/পাত্রীর তথ্য সম্পর্কে সম্পূর্ণ সত্য মিথ্যা যাচাই
                        করা সম্ভব নয় সেহুতু এখান থেকে বিয়ে করে কোন সমস্যার
                        সম্মুখীন হলে তার জন্য কর্তৃপক্ষ বা এর সাথে
                        সম্পৃক্ত কেউ কোনভাবেই তার দায়ভার নিবে না।
                      </p>
                    </div>
                  </div>
                </div>
                <div class="aw-accordion-content">
                  <div class="aw-accordion-title d-flex align-items-center justify-content-spaceBetween">
                    <button>
                      আপনাদের ওয়েবসাইট ব্যবহারে কোনো অর্থ প্রদান করতে হয় কি?
                    </button>
                    <i class="bi bi-chevron-down accordion-arrow"></i>
                  </div>
                  <div class="aw-accordion-collapse">
                    <div class="accordion-body">
                      <p>
                        নির্দিষ্ট কোনো বায়োডাটার যোগাযোগ তথ্য নিতে চাইলে সীমিত অর্থ দ্বারা
                        এগুলো ক্রয় করতে হবে।
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="faq-collapse faqtab2" style="display: none">
              <div class="faq-body">
                <div class="aw-accordion-content">
                  <div class="aw-accordion-title d-flex align-items-center justify-content-spaceBetween">
                    <button>বায়োডাটা তৈরী ও জমা দিতে কত টাকা লাগে?</button>
                    <i class="bi bi-chevron-down accordion-arrow"></i>
                  </div>
                  <div class="aw-accordion-collapse">
                    <div class="accordion-body">
                      <p>
                        আপনি সম্পূর্ণ বিনামূল্যে বায়োডাটা তৈরী ও জমা দিতে
                        পারবেন।
                      </p>
                    </div>
                  </div>
                </div>
                <div class="aw-accordion-content">
                  <div class="aw-accordion-title d-flex align-items-center justify-content-spaceBetween">
                    <button>
                      বায়োডাটা তৈরী ও জমা দিতে সর্বনিম্ন কত বছর হতে হবে?
                    </button>
                    <i class="bi bi-chevron-down accordion-arrow"></i>
                  </div>
                  <div class="aw-accordion-collapse">
                    <div class="accordion-body">
                      <p>
                        পাত্রের ক্ষেত্রে সর্বনিম্ন ২১ এবং পাত্রীর ক্ষেত্রে
                        সর্বনিম্ন ১৮ বৎসর হতে হবে। এর নিচে হলে বায়োডাটা এপ্রুভ
                        করা হয় না।
                      </p>
                    </div>
                  </div>
                </div>
                <div class="aw-accordion-content">
                  <div class="aw-accordion-title d-flex align-items-center justify-content-spaceBetween">
                    <button>
                      আমার কোনো আয় না থাকলে বায়োডাটা জমা দিতে পারবো?
                    </button>
                    <i class="bi bi-chevron-down accordion-arrow"></i>
                  </div>
                  <div class="aw-accordion-collapse">
                    <div class="accordion-body">
                      <p>
                        হ্যাঁ, বিয়েতে আপনার অভিবাবকের অনুমতি থাকলে পারবেন।
                      </p>
                    </div>
                  </div>
                </div>
                <div class="aw-accordion-content">
                  <div class="aw-accordion-title d-flex align-items-center justify-content-spaceBetween">
                    <button>আমার বায়োডাটা এপ্রুভ করা হয় নি কেন?</button>
                    <i class="bi bi-chevron-down accordion-arrow"></i>
                  </div>
                  <div class="aw-accordion-collapse">
                    <div class="accordion-body">
                      <p>
                        বায়োডাটা জমা দেওয়ার পর তথ্যের সত্যতা যাচাই করে তারপর
                        এপ্রুভ করা হয়। বিভিন্ন কারণে বায়োডাটা এপ্রুভ করা হয়
                        না।
                        <span class="Bio-Not-Approved">তারমধ্যে কিছু কারণ –</span>
                        ১. বায়োডাটায় মিথ্যা তথ্য দিলে<br>
                        ২. নূন্যতম শর্ত পূরণ না করেই বায়োডাটা জমা দিলে<br>
                        ৩. অভিবাবকের মোবাইল নাম্বারের ঘরে নিজের নাম্বার দিয়ে
                        রাখলে<br>
                        ৪. প্রশ্নগুলোর উত্তর অস্পষ্টভাবে দিলে। কোন ফিল্ডে
                        "মানানসই" “হুম” বা কেমন জীবনসঙ্গী চান এখানে আল্লাহর
                        ইচ্ছা/আল্লাহ ভাল জানেন/যেকোন লিখে রাখলে<br>
                        ৫. অভিভাবককে না জানিয়ে আমাদের এখানে বায়োডাটা জমা
                        দিলে<br>
                        ৬. কর্তৃপক্ষের জিজ্ঞাসা ঘরে কোন উত্তর "না" দিয়ে
                        থাকলে<br>
                        ৭. বায়োডাটা জমা দেয়ার পর অভিভাবকের কাছে কল করে কোন
                        অসংলগ্ন কিছু পাওয়া গেলে<br>
                        ৮. কোন ফিল্ড খালি রেখে দিলে। ১ টা ফিল্ডও খালি রাখবেন
                        না<br>
                        ৯. যৈাতুক দাবি করলে<br>
                        ১০. স্পষ্ট শিরক, কুফরিতে লিপ্ত থাকলে <br>
                        ১১. মাদকদ্রব্য সেবন করলে ইত্যাদি

                      </p>
                    </div>
                  </div>
                </div>
                <div class="aw-accordion-content">
                  <div class="aw-accordion-title d-flex align-items-center justify-content-spaceBetween">
                    <button>
                      বায়োডাটা তৈরীতে কি অন্যের সাহায্য নিতে পারব?
                    </button>
                    <i class="bi bi-chevron-down accordion-arrow"></i>
                  </div>
                  <div class="aw-accordion-collapse">
                    <div class="accordion-body">
                      <p>
                        হ্যাঁ, যদি আপনি ইন্টারনেট ব্যবহারে অদক্ষ হন।
                        সেক্ষেত্রে অন্যের সাহায্য নিতে পারবেন। তবে অবশ্যই সকল
                        তথ্য আপনাকেই দিতে হবে।
                      </p>
                    </div>
                  </div>
                </div>
                <div class="aw-accordion-content">
                  <div class="aw-accordion-title d-flex align-items-center justify-content-spaceBetween">
                    <button>
                      উপার্জন হালাল/হারাম মিশ্রিত হলে বায়োডাটা জমা দিতে পারবো?
                    </button>
                    <i class="bi bi-chevron-down accordion-arrow"></i>
                  </div>
                  <div class="aw-accordion-collapse">
                    <div class="accordion-body">
                      <p>
                        না, অবশ্যই আপনার উপার্জন হালাল হতে হবে। অন্যথায়
                        বায়োডাটা এপ্রুভ করা হবে না।
                      </p>
                    </div>
                  </div>
                </div>
                <div class="aw-accordion-content">
                  <div class="aw-accordion-title d-flex align-items-center justify-content-spaceBetween">
                    <button>
                      আপনাদের শর্তসমূহের আংশিক মানলে বায়োডাটা তৈরী করতে
                      পারবো?
                    </button>
                    <i class="bi bi-chevron-down accordion-arrow"></i>
                  </div>
                  <div class="aw-accordion-collapse">
                    <div class="accordion-body">
                      <p>
                        না, দ্বীনদারসঙ্গী ডটকমে বায়োডাটা তৈরী ও জমা দিতে হলে
                        অবশ্যই নূন্যতম সকল শর্তসমূহ পূরণ করতে হবে।
                      </p>
                    </div>
                  </div>
                </div>
                <div class="aw-accordion-content">
                  <div class="aw-accordion-title d-flex align-items-center justify-content-spaceBetween">
                    <button>
                      কোন বায়োডাটায় কেউ মিথ্যা তথ্য দিয়েছে কিনা কিভাবে বুঝবো?
                    </button>
                    <i class="bi bi-chevron-down accordion-arrow"></i>
                  </div>
                  <div class="aw-accordion-collapse">
                    <div class="accordion-body">
                      <p>
                        আমরা আশা করি সবাই আল্লাহ্‌কে ভয় করে সত্য তথ্য দেয়। সব
                        মিথ্যা আসলে বুঝা সম্ভব নয়। তবে বিয়ের আগে যথাসম্ভব
                        পাত্র/পাত্রীর তথ্যের সত্যতার জন্য খোঁজখবর নিতে হবে।
                      </p>
                    </div>
                  </div>
                </div>
                <div class="aw-accordion-content">
                  <div class="aw-accordion-title d-flex align-items-center justify-content-spaceBetween">
                    <button>
                      বায়োডাটা প্রথমবার এপ্রুভ না হলে আবার জমা দিতে পারবো?
                    </button>
                    <i class="bi bi-chevron-down accordion-arrow"></i>
                  </div>
                  <div class="aw-accordion-collapse">
                    <div class="accordion-body">
                      <p>
                        হ্যাঁ, যেসকল কারণে বায়োডাটা এপ্রুভ করা হয়নি সেগুলো
                        সংশোধন করে আবার বায়োডাটা জমা দিতে পারবেন।
                      </p>
                    </div>
                  </div>
                </div>
                <div class="aw-accordion-content">
                  <div class="aw-accordion-title d-flex align-items-center justify-content-spaceBetween">
                    <button>নিজের বায়োডাটা কি অন্যজন তৈরী করতে পারবে?</button>
                    <i class="bi bi-chevron-down accordion-arrow"></i>
                  </div>
                  <div class="aw-accordion-collapse">
                    <div class="accordion-body">
                      <p>
                        না, কারণ একজন পাত্র/পাত্রী নিজের সম্পর্কে ও তার
                        চাহিদার বিষয়ে সবথেকে বেশি অবগত। প্রশ্ন উত্তরের মাধ্যমে
                        একজন পাত্র/পাত্রীর দ্বীনদারিতা সম্পর্কে সঠিকভাবে জানা
                        যায়। যদি অন্য কেউ বায়োডাটা তৈরী করে সেক্ষেত্রে নানা
                        ত্রুটি থাকতে পারে। তাই দ্বীনদারসঙ্গী ডটকম এটা কোনোভাবেই
                        অনুমতি দেয় না।
                      </p>
                    </div>
                  </div>
                </div>
                <div class="aw-accordion-content">
                  <div class="aw-accordion-title d-flex align-items-center justify-content-spaceBetween">
                    <button>বায়োডাটা এপ্রুভ হতে কতদিন লাগে ?</button>

                    <i class="bi bi-chevron-down accordion-arrow"></i>
                  </div>
                  <div class="aw-accordion-collapse">
                    <div class="accordion-body">
                      <p>
                        দ্বীনদারসঙ্গী টিম আপনার বায়োডাটার সকল তথ্য যাচাই-বাছাই
                        করে গ্রহণযোগ্য হলে ৩ কর্মদিবসের মধ্যে বায়োডাটা এপ্রুভ
                        করে
                      </p>
                    </div>
                  </div>
                </div>
                <div class="aw-accordion-content">
                  <div class="aw-accordion-title d-flex align-items-center justify-content-spaceBetween">
                    <button>
                      বায়োডাটা যেকোনো সময় ডিলিট অথবা ইডিট করতে পারবো?
                    </button>
                    <i class="bi bi-chevron-down accordion-arrow"></i>
                  </div>
                  <div class="aw-accordion-collapse">
                    <div class="accordion-body">
                      <p>
                        হ্যাঁ, আপনি চাইলে যেকোনো সময় বায়োডাটা ডিলিট অথবা ইডিট
                        করতে পারবেন।
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

