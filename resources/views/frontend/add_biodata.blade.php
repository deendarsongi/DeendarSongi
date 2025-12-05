
@extends('frontend.sidebar')
@section('dashboard_content')
<div style="width: 1px;" class="dsdb-content">
    <div class="dsdb-content-inner">
    <div class="row">
        <div class="col-lg-12">
            <div class="add_biodata">
                    {{-- biodata nav --}}
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <div class="add_biodata_nav">
                            <ul class="biodata_nav_group container">
                                <li class="add_biodata_nav_item ">
                                    <a id="navStep1" class="biodata_nav_link active" href="javascript:void(0)" data-toggle-target=".form_content_1">
                                        <span><img src="{{ asset('frontend') }}/uploads/checkmark-round-white.svg" alt=""></span>
                                        <p class="nav_item_text">সাধারণ তথ্য</p>
                                        <span><i class="fa-regular fa-arrow-right-long"></i></span>
                                    </a>
                                </li>

                                <li class="add_biodata_nav_item ">
                                    <a id="navStep2" class="biodata_nav_link" href="javascript:void(0)" data-toggle-target=".form_content_2">
                                        <span><img src="{{ asset('frontend') }}/uploads/checkmark-round-white.svg" alt=""></span>
                                        <p class="nav_item_text">ঠিকানা</p>
                                        <span><i class="fa-regular fa-arrow-right-long"></i>
                                        </span></a>
                                </li>

                                <li class="add_biodata_nav_item ">
                                    <a id="navStep3" class="biodata_nav_link" href="javascript:void(0)" data-toggle-target=".form_content_3">
                                        <span><img src="{{ asset('frontend') }}/uploads/checkmark-round-white.svg" alt=""></span>
                                        <p class="nav_item_text">শিক্ষাগত যোগ্যতা</p>
                                        <span><i class="fa-regular fa-arrow-right-long"></i>
                                        </span></a>
                                </li>

                                <li class="add_biodata_nav_item ">
                                    <a id="navStep4" class="biodata_nav_link " href="javascript:void(0)" data-toggle-target=".form_content_4">
                                        <span><img src="{{ asset('frontend') }}/uploads/checkmark-round-white.svg" alt=""></span>
                                        <p class="nav_item_text">পারিবারিক তথ্য</p>
                                        <span><i class="fa-regular fa-arrow-right-long"></i>
                                        </span></a>
                                </li>

                                <li class="add_biodata_nav_item ">
                                    <a id="navStep5" class="biodata_nav_link" href="javascript:void(0)" data-toggle-target=".form_content_5">
                                        <span><img src="{{ asset('frontend') }}/uploads/checkmark-round-white.svg" alt=""></span>
                                        <p class="nav_item_text">ব্যক্তিগত তথ্য</p>
                                        <span><i class="fa-regular fa-arrow-right-long"></i>
                                        </span></a>
                                </li>

                                <li class="add_biodata_nav_item ">
                                    <a id="navStep6" class="biodata_nav_link" href="javascript:void(0)" data-toggle-target=".form_content_6">
                                        <span><img src="{{ asset('frontend') }}/uploads/checkmark-round-white.svg" alt=""></span>
                                        <p class="nav_item_text">পেশাগত তথ্য</p>
                                        <span><i class="fa-regular fa-arrow-right-long"></i>
                                        </span></a>
                                </li>

                                <li class="add_biodata_nav_item ">
                                    <a id="navStep7" class="biodata_nav_link" href="javascript:void(0)" data-toggle-target=".form_content_7">
                                        <span><img src="{{ asset('frontend') }}/uploads/checkmark-round-white.svg" alt=""></span>
                                        <p class="nav_item_text">বিবাহ সম্পর্কিত তথ্য</p><span><i class="fa-regular fa-arrow-right-long"></i>
                                        </span></a>
                                </li>

                                <li class="add_biodata_nav_item ">
                                    <a id="navStep8" class="biodata_nav_link" href="javascript:void(0)" data-toggle-target=".form_content_8">
                                        <span><img src="{{ asset('frontend') }}/uploads/checkmark-round-white.svg" alt=""></span>
                                        <p class="nav_item_text">প্রত্যাশিত জীবনসঙ্গী</p><span><i class="fa-regular fa-arrow-right-long"></i>
                                        </span></a>
                                </li>

                                <li class="add_biodata_nav_item ">
                                    <a id="navStep9" class="biodata_nav_link" href="javascript:void(0)" data-toggle-target=".form_content_9">
                                        <span><img src="{{ asset('frontend') }}/uploads/checkmark-round-white.svg" alt=""></span>
                                        <p class="nav_item_text">কর্তৃপক্ষের জিজ্ঞাসা</p><span><i class="fa-regular fa-arrow-right-long"></i>
                                        </span></a>
                                </li>

                                <li class="add_biodata_nav_item ">
                                    <a id="navStep10" class="biodata_nav_link" href="javascript:void(0)" data-toggle-target=".form_content_10">
                                        <span><img src="{{ asset('frontend') }}/uploads/checkmark-round-white.svg" alt=""></span>
                                        <p class="nav_item_text">যোগাযোগ তথ্য</p>
                                        <span><i class="fa-regular fa-arrow-right-long"></i>
                                        </span></a>
                                </li>
                            </ul>
                            <div class="container">
                                <div class="progress-bar">
                                    <div class="progress-bar-fill" id="progressFill">
                                      <span class="progress-percentage" id="progressPercentage">0%</span>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="ds-row">
                        <!-- {{-- biodata content start --}} -->
                        <div class="col-lg-6 m-auto dsdb_add_biodata_content">
                          <!-- {{-- Stap-1 --}} -->
                        <div class="add_biodata_content " id="dsdb_form_step_1" >
                            <form
                                action="{{ route('general.information.store') }}"
                                method="POST"
                                enctype="multipart/form-data"
                                id="general-information"
                                data-step="generalinfo"
                                >

                              <div class="biodata_form_content">
                                <div class="form_title">
                                  <h2>সাধারণ তথ্য</h2>
                                </div>
                                <div class="biodata_field">
                                    <div class="biodata_label">
                                      <label>
                                        বায়োডাটার ধরন
                                        <span class="must-fillup-estaristic">*</span>
                                      </label>
                                    </div>
                                    <div class="biodata_select">
                                      <select
                                        name="biodata_type"
                                        id="biodata_type"
                                        class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                        style="width: 100%"
                                        onchange="toggleBiodataType(this.value)"

                                      >
                                        @if (Auth::guard('customer')->user()->gender == '1')
                                            <option value="male" class="groomOption"  selected {{ optional($biodata)->biodata_type == 'male' ? 'selected' : '' }}>পাত্রের বায়োডাটা</option>
                                        @else
                                            <option value="female" class="brideOption" selected {{ optional($biodata)->biodata_type == 'female' ? 'selected' : '' }}>পাত্রীর বায়োডাটা</option>
                                        @endif
                                      </select>
                                      <span class="text-danger error-message" id="error-biodata_type"></span>
                                    </div>
                                  </div>

                                  <div class="biodata_field">
                                    <div class="biodata_label">
                                      <label>
                                        বৈবাহিক অবস্থা<span class="must-fillup-estaristic">*</span>
                                      </label>
                                    </div>
                                    <div class="biodata_select">
                                      <select
                                        name="married_type"
                                        id="married_type"
                                        class="select2 aw-biodata-dropdown"
                                        style="width: 100%"
                                        onchange="handleMaritalStatusChange(this.value)"
                                      >
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="single" {{ optional($biodata)->married_type == 'single' ? 'selected' : '' }}>অবিবাহিত</option>
                                        <option value="married" {{ optional($biodata)->married_type == 'married' ? 'selected' : '' }}>বিবাহিত</option>
                                        <option value="divorced" {{ optional($biodata)->married_type == 'divorced' ? 'selected' : '' }}>ডিভোর্সড</option>
                                        <option value="widow" {{ optional($biodata)->married_type == 'widow' ? 'selected' : '' }}>বিধবা</option>
                                        <option value="widower" {{ optional($biodata)->married_type == 'widower' ? 'selected' : '' }}>বিপত্নিক</option>

                                      </select>
                                      <span class="text-danger error-message" id="error-married_type"></span>
                                    </div>
                                  </div>

                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label
                                      >জন্মসন<span
                                        class="must-fillup-estaristic"
                                        >*</span
                                      ></label
                                    >
                                  </div>
                                  <div class="biodata_select">
                                    <input
                                      name="date_of_birth"
                                      id="date_of_birth"
                                      class="biodata_input input-filup-text"
                                      type="date"
                                      placeholder="dd/mm/yyyy"
                                      value="{{ optional($biodata)->date_of_birth ?? '' }}"
                                    />
                                    <span class="text-danger error-message" id="error-date_of_birth"></span>
                                  </div>
                                  <div class="input-highlighter-text">
                                    <p>
                                      অবশ্যই আসল জন্মসন দিতে হবে। জন্মনিবন্ধন
                                      বা জাতীয় পরিচয়পত্রের কমানো বয়স দিলে
                                      বায়োডাটা এপ্রুভ করা হয় না
                                    </p>
                                  </div>
                                </div>
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label
                                      >গাত্রবর্ণ<span
                                        class="must-fillup-estaristic"
                                        >*</span
                                      ></label
                                    >
                                  </div>
                                  <div class="biodata_select">
                                    <select
                                    name="face_color"
                                    id="face_color"
                                      class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                      style="width: 100%"
                                    >
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="fair" {{ optional($biodata)->face_color == 'fair' ? 'selected' : '' }}>ফর্সা</option>
                                        <option value="very_fair" {{ optional($biodata)->face_color == 'very_fair' ? 'selected' : '' }}>উজ্জ্বল ফর্সা</option>
                                        <option value="medium" {{ optional($biodata)->face_color == 'medium' ? 'selected' : '' }}>শ্যামলা</option>
                                        <option value="olive" {{ optional($biodata)->face_color == 'olive' ? 'selected' : '' }}>উজ্জ্বল শ্যামলা</option>
                                        <option value="dark" {{ optional($biodata)->face_color == 'dark' ? 'selected' : '' }}>কালো</option>
                                    </select>
                                    <span class="text-danger error-message" id="error-face_color"></span>
                                  </div>
                                </div>
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label
                                      >উচ্চতা<span
                                        class="must-fillup-estaristic"
                                        >*</span
                                      ></label
                                    >
                                  </div>
                                  <div class="biodata_select">
                                    <select
                                    name="height"
                                    id="height"
                                      class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                      style="width: 100%"
                                    >
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="below_4" {{ optional($biodata)->height == 'below_4' ? 'selected' : '' }}>৪ ফুটের কম</option>
                                        <option value="4_1" {{ optional($biodata)->height == '4_1' ? 'selected' : '' }}>৪’১”</option>
                                        <option value="4_2" {{ optional($biodata)->height == '4_2' ? 'selected' : '' }}>৪’২”</option>
                                        <option value="4_3" {{ optional($biodata)->height == '4_3' ? 'selected' : '' }}>৪’৩”</option>
                                        <option value="4_4" {{ optional($biodata)->height == '4_4' ? 'selected' : '' }}>৪’৪”</option>
                                        <option value="4_5" {{ optional($biodata)->height == '4_5' ? 'selected' : '' }}>৪’৫”</option>
                                        <option value="4_6" {{ optional($biodata)->height == '4_6' ? 'selected' : '' }}>৪’৬”</option>
                                        <option value="4_7" {{ optional($biodata)->height == '4_7' ? 'selected' : '' }}>৪’৭”</option>
                                        <option value="4_8" {{ optional($biodata)->height == '4_8' ? 'selected' : '' }}>৪’৮”</option>
                                        <option value="4_9" {{ optional($biodata)->height == '4_9' ? 'selected' : '' }}>৪’৯”</option>
                                        <option value="4_10" {{ optional($biodata)->height == '4_10' ? 'selected' : '' }}>৪’১০”</option>
                                        <option value="4_11" {{ optional($biodata)->height == '4_11' ? 'selected' : '' }}>৪’১১”</option>
                                        <option value="5_0" {{ optional($biodata)->height == '5_0' ? 'selected' : '' }}>৫’</option>
                                        <option value="5_1" {{ optional($biodata)->height == '5_1' ? 'selected' : '' }}>৫’১”</option>
                                        <option value="5_2" {{ optional($biodata)->height == '5_2' ? 'selected' : '' }}>৫’২”</option>
                                        <option value="5_3" {{ optional($biodata)->height == '5_3' ? 'selected' : '' }}>৫’৩”</option>
                                        <option value="5_4" {{ optional($biodata)->height == '5_4' ? 'selected' : '' }}>৫’৪”</option>
                                        <option value="5_5" {{ optional($biodata)->height == '5_5' ? 'selected' : '' }}>৫’৫”</option>
                                        <option value="5_6" {{ optional($biodata)->height == '5_6' ? 'selected' : '' }}>৫’৬”</option>
                                        <option value="5_7" {{ optional($biodata)->height == '5_7' ? 'selected' : '' }}>৫’৭”</option>
                                        <option value="5_8" {{ optional($biodata)->height == '5_8' ? 'selected' : '' }}>৫’৮”</option>
                                        <option value="5_9" {{ optional($biodata)->height == '5_9' ? 'selected' : '' }}>৫’৯”</option>
                                        <option value="5_10" {{ optional($biodata)->height == '5_10' ? 'selected' : '' }}>৫’১০”</option>
                                        <option value="5_11" {{ optional($biodata)->height == '5_11' ? 'selected' : '' }}>৫’১১”</option>
                                        <option value="6_0" {{ optional($biodata)->height == '6_0' ? 'selected' : '' }}>৬’</option>
                                        <option value="6_1" {{ optional($biodata)->height == '6_1' ? 'selected' : '' }}>৬’১”</option>
                                        <option value="6_2" {{ optional($biodata)->height == '6_2' ? 'selected' : '' }}>৬’২”</option>
                                        <option value="6_3" {{ optional($biodata)->height == '6_3' ? 'selected' : '' }}>৬’৩”</option>
                                        <option value="6_4" {{ optional($biodata)->height == '6_4' ? 'selected' : '' }}>৬’৪”</option>
                                        <option value="6_5" {{ optional($biodata)->height == '6_5' ? 'selected' : '' }}>৬’৫”</option>
                                        <option value="6_6" {{ optional($biodata)->height == '6_6' ? 'selected' : '' }}>৬’৬”</option>
                                        <option value="6_7" {{ optional($biodata)->height == '6_7' ? 'selected' : '' }}>৬’৭”</option>
                                        <option value="6_8" {{ optional($biodata)->height == '6_8' ? 'selected' : '' }}>৬’৮”</option>
                                        <option value="6_9" {{ optional($biodata)->height == '6_9' ? 'selected' : '' }}>৬’৯”</option>
                                        <option value="6_10" {{ optional($biodata)->height == '6_10' ? 'selected' : '' }}>৬’১০”</option>
                                        <option value="6_11" {{ optional($biodata)->height == '6_11' ? 'selected' : '' }}>৬’১১”</option>
                                        <option value="7_0" {{ optional($biodata)->height == '7_0' ? 'selected' : '' }}>৭”</option>
                                        <option value="above_7" {{ optional($biodata)->height == 'above_7' ? 'selected' : '' }}>৭ ফুটের বেশি</option>

                                    </select>
                                    <span class="text-danger error-message" id="error-height"></span>
                                  </div>
                                </div>

                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label
                                      >ওজন<span class="must-fillup-estaristic"
                                        >*</span
                                      ></label
                                    >
                                  </div>
                                  <div class="biodata_select">
                                    <select
                                      name="weight"
                                      id="weight"
                                      class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                      style="width: 100%"
                                    >
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="below_30" {{ optional($biodata)->weight == 'below_30' ? 'selected' : '' }}>৩০ কেজির কম</option>
                                        <option value="30" {{ optional($biodata)->weight == '30' ? 'selected' : '' }}>৩০ কেজি</option>
                                        <option value="31" {{ optional($biodata)->weight == '31' ? 'selected' : '' }}>৩১ কেজি</option>
                                        <option value="32" {{ optional($biodata)->weight == '32' ? 'selected' : '' }}>৩২ কেজি</option>
                                        <option value="33" {{ optional($biodata)->weight == '33' ? 'selected' : '' }}>৩৩ কেজি</option>
                                        <option value="34" {{ optional($biodata)->weight == '34' ? 'selected' : '' }}>৩৪ কেজি</option>
                                        <option value="35" {{ optional($biodata)->weight == '35' ? 'selected' : '' }}>৩৫ কেজি</option>
                                        <option value="36" {{ optional($biodata)->weight == '36' ? 'selected' : '' }}>৩৬ কেজি</option>
                                        <option value="37" {{ optional($biodata)->weight == '37' ? 'selected' : '' }}>৩৭ কেজি</option>
                                        <option value="38" {{ optional($biodata)->weight == '38' ? 'selected' : '' }}>৩৮ কেজি</option>
                                        <option value="39" {{ optional($biodata)->weight == '39' ? 'selected' : '' }}>৩৯ কেজি</option>
                                        <option value="40" {{ optional($biodata)->weight == '40' ? 'selected' : '' }}>৪০ কেজি</option>
                                        <option value="41" {{ optional($biodata)->weight == '41' ? 'selected' : '' }}>৪১ কেজি</option>
                                        <option value="42" {{ optional($biodata)->weight == '42' ? 'selected' : '' }}>৪২ কেজি</option>
                                        <option value="43" {{ optional($biodata)->weight == '43' ? 'selected' : '' }}>৪৩ কেজি</option>
                                        <option value="44" {{ optional($biodata)->weight == '44' ? 'selected' : '' }}>৪৪ কেজি</option>
                                        <option value="45" {{ optional($biodata)->weight == '45' ? 'selected' : '' }}>৪৫ কেজি</option>
                                        <option value="46" {{ optional($biodata)->weight == '46' ? 'selected' : '' }}>৪৬ কেজি</option>
                                        <option value="47" {{ optional($biodata)->weight == '47' ? 'selected' : '' }}>৪৭ কেজি</option>
                                        <option value="48" {{ optional($biodata)->weight == '48' ? 'selected' : '' }}>৪৮ কেজি</option>
                                        <option value="49" {{ optional($biodata)->weight == '49' ? 'selected' : '' }}>৪৯ কেজি</option>
                                        <option value="50" {{ optional($biodata)->weight == '50' ? 'selected' : '' }}>৫০ কেজি</option>
                                        <option value="51" {{ optional($biodata)->weight == '51' ? 'selected' : '' }}>৫১ কেজি</option>
                                        <option value="52" {{ optional($biodata)->weight == '52' ? 'selected' : '' }}>৫২ কেজি</option>
                                        <option value="53" {{ optional($biodata)->weight == '53' ? 'selected' : '' }}>৫৩ কেজি</option>
                                        <option value="54" {{ optional($biodata)->weight == '54' ? 'selected' : '' }}>৫৪ কেজি</option>
                                        <option value="55" {{ optional($biodata)->weight == '55' ? 'selected' : '' }}>৫৫ কেজি</option>
                                        <option value="56" {{ optional($biodata)->weight == '56' ? 'selected' : '' }}>৫৬ কেজি</option>
                                        <option value="57" {{ optional($biodata)->weight == '57' ? 'selected' : '' }}>৫৭ কেজি</option>
                                        <option value="58" {{ optional($biodata)->weight == '58' ? 'selected' : '' }}>৫৮ কেজি</option>
                                        <option value="59" {{ optional($biodata)->weight == '59' ? 'selected' : '' }}>৫৯ কেজি</option>
                                        <option value="60" {{ optional($biodata)->weight == '60' ? 'selected' : '' }}>৬০ কেজি</option>
                                        <option value="61" {{ optional($biodata)->weight == '61' ? 'selected' : '' }}>৬১ কেজি</option>
                                        <option value="62" {{ optional($biodata)->weight == '62' ? 'selected' : '' }}>৬২ কেজি</option>
                                        <option value="63" {{ optional($biodata)->weight == '63' ? 'selected' : '' }}>৬৩ কেজি</option>
                                        <option value="64" {{ optional($biodata)->weight == '64' ? 'selected' : '' }}>৬৪ কেজি</option>
                                        <option value="65" {{ optional($biodata)->weight == '65' ? 'selected' : '' }}>৬৫ কেজি</option>
                                        <option value="66" {{ optional($biodata)->weight == '66' ? 'selected' : '' }}>৬৬ কেজি</option>
                                        <option value="67" {{ optional($biodata)->weight == '67' ? 'selected' : '' }}>৬৭ কেজি</option>
                                        <option value="68" {{ optional($biodata)->weight == '68' ? 'selected' : '' }}>৬৮ কেজি</option>
                                        <option value="69" {{ optional($biodata)->weight == '69' ? 'selected' : '' }}>৬৯ কেজি</option>
                                        <option value="70" {{ optional($biodata)->weight == '70' ? 'selected' : '' }}>৭০ কেজি</option>
                                        <option value="71" {{ optional($biodata)->weight == '71' ? 'selected' : '' }}>৭১ কেজি</option>
                                        <option value="72" {{ optional($biodata)->weight == '72' ? 'selected' : '' }}>৭২ কেজি</option>
                                        <option value="73" {{ optional($biodata)->weight == '73' ? 'selected' : '' }}>৭৩ কেজি</option>
                                        <option value="74" {{ optional($biodata)->weight == '74' ? 'selected' : '' }}>৭৪ কেজি</option>
                                        <option value="75" {{ optional($biodata)->weight == '75' ? 'selected' : '' }}>৭৫ কেজি</option>
                                        <option value="76" {{ optional($biodata)->weight == '76' ? 'selected' : '' }}>৭৬ কেজি</option>
                                        <option value="77" {{ optional($biodata)->weight == '77' ? 'selected' : '' }}>৭৭ কেজি</option>
                                        <option value="78" {{ optional($biodata)->weight == '78' ? 'selected' : '' }}>৭৮ কেজি</option>
                                        <option value="79" {{ optional($biodata)->weight == '79' ? 'selected' : '' }}>৭৯ কেজি</option>
                                        <option value="80" {{ optional($biodata)->weight == '80' ? 'selected' : '' }}>৮০ কেজি</option>
                                        <option value="81" {{ optional($biodata)->weight == '81' ? 'selected' : '' }}>৮১ কেজি</option>
                                        <option value="82" {{ optional($biodata)->weight == '82' ? 'selected' : '' }}>৮২ কেজি</option>
                                        <option value="83" {{ optional($biodata)->weight == '83' ? 'selected' : '' }}>৮৩ কেজি</option>
                                        <option value="84" {{ optional($biodata)->weight == '84' ? 'selected' : '' }}>৮৪ কেজি</option>
                                        <option value="85" {{ optional($biodata)->weight == '85' ? 'selected' : '' }}>৮৫ কেজি</option>
                                        <option value="86" {{ optional($biodata)->weight == '86' ? 'selected' : '' }}>৮৬ কেজি</option>
                                        <option value="87" {{ optional($biodata)->weight == '87' ? 'selected' : '' }}>৮৭ কেজি</option>
                                        <option value="88" {{ optional($biodata)->weight == '88' ? 'selected' : '' }}>৮৮ কেজি</option>
                                        <option value="89" {{ optional($biodata)->weight == '89' ? 'selected' : '' }}>৮৯ কেজি</option>
                                        <option value="90" {{ optional($biodata)->weight == '90' ? 'selected' : '' }}>৯০ কেজি</option>
                                        <option value="91" {{ optional($biodata)->weight == '91' ? 'selected' : '' }}>৯১ কেজি</option>
                                        <option value="92" {{ optional($biodata)->weight == '92' ? 'selected' : '' }}>৯২ কেজি</option>
                                        <option value="93" {{ optional($biodata)->weight == '93' ? 'selected' : '' }}>৯৩ কেজি</option>
                                        <option value="94" {{ optional($biodata)->weight == '94' ? 'selected' : '' }}>৯৪ কেজি</option>
                                        <option value="95" {{ optional($biodata)->weight == '95' ? 'selected' : '' }}>৯৫ কেজি</option>
                                        <option value="96" {{ optional($biodata)->weight == '96' ? 'selected' : '' }}>৯৬ কেজি</option>
                                        <option value="97" {{ optional($biodata)->weight == '97' ? 'selected' : '' }}>৯৭ কেজি</option>
                                        <option value="98" {{ optional($biodata)->weight == '98' ? 'selected' : '' }}>৯৮ কেজি</option>
                                        <option value="99" {{ optional($biodata)->weight == '99' ? 'selected' : '' }}>৯৯ কেজি</option>
                                        <option value="100" {{ optional($biodata)->weight == '100' ? 'selected' : '' }}>১০০ কেজি</option>
                                        <option value="above_100" {{ optional($biodata)->weight == 'above_100' ? 'selected' : '' }}>১০০ কেজির বেশি</option>
                                    </select>
                                    <span class="text-danger error-message" id="error-weight"></span>
                                  </div>
                                </div>
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label
                                      >শারীরিক গঠন<span
                                        class="must-fillup-estaristic"
                                        >*</span
                                      ></label
                                    >
                                  </div>
                                  <div class="biodata_select">
                                    <select
                                    name="body_shape"
                                    id="body_shape"
                                      class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                      style="width: 100%"
                                    >
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="slim" {{ optional($biodata)->body_shape == 'slim' ? 'selected' : '' }}>চিকন</option>
                                        <option value="average" {{ optional($biodata)->body_shape == 'average' ? 'selected' : ''  }}>স্বাভাবিক</option>
                                        <option value="fat" {{ optional($biodata)->body_shape == 'fat' ? 'selected' : ''  }}>মোটা</option>
                                    </select>
                                    <span class="text-danger error-message" id="error-body_shape"></span>
                                  </div>
                                </div>
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label
                                      >রক্তের গ্রুপ<span
                                        class="must-fillup-estaristic"
                                        >*</span
                                      ></label
                                    >
                                  </div>
                                  <div class="biodata_select">
                                    <select
                                      name="blood_group"
                                      id="blood_group"
                                      class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                      style="width: 100%"

                                    >
                                      <option value="">নির্বাচন করুন</option>
                                      <option value="A+" {{ optional($biodata)->blood_group == 'A+' ? 'selected' : '' }}>A+</option>
                                      <option value="A-" {{ optional($biodata)->blood_group == 'A-' ? 'selected' : '' }}>A-</option>
                                      <option value="B+" {{ optional($biodata)->blood_group == 'B+' ? 'selected' : '' }}>B+</option>
                                      <option value="B-" {{ optional($biodata)->blood_group == 'B-' ? 'selected' : '' }}>B-</option>
                                      <option value="AB+" {{ optional($biodata)->blood_group == 'AB+' ? 'selected' : '' }}>AB+</option>
                                      <option value="AB-" {{ optional($biodata)->blood_group == 'AB-' ? 'selected' : '' }}>AB-</option>
                                      <option value="O+" {{ optional($biodata)->blood_group == 'O+' ? 'selected' : '' }}>O+</option>
                                      <option value="O-" {{ optional($biodata)->blood_group == 'O-' ? 'selected' : '' }}>O-</option>
                                      <option value="unknown" {{ optional($biodata)->blood_group == 'unknown' ? 'selected' : '' }}>জানা নেই</option>
                                    </select>
                                    <span class="text-danger error-message" id="error-blood_group"></span>
                                  </div>
                                </div>
                                <div
                                  style="justify-content: end"
                                  class="add_biodata_submit buttons"
                                >
                                  <button
                                    type="submit"
                                    id="save_next1"
                                    class="nextBtn  ds-button">
                                    Save & Next
                                  </button>
                                </div>
                              </div>
                            </form>

                        </div>

                          <!-- {{-- Stap-2 --}} -->
                            @php
                                $permanentAddress = '';
                                $currentAddress = '';
                            @endphp
                            @if($biodata)
                                @php
                                    $permanentAddress = implode(', ', array_filter([
                                        $biodata->permanent_upazila,
                                        $biodata->permanent_district,
                                        $biodata->permanent_division,
                                        $biodata->permanent_country,
                                    ]));

                                   if ($biodata->same_address != 1) {
                                        $currentAddress = implode(', ', array_filter([
                                            $biodata->current_upazila,
                                            $biodata->current_district,
                                            $biodata->current_division,
                                            $biodata->current_country,
                                        ]));
                                   }
                                @endphp
                            @endif

                        <div class="add_biodata_content " id="dsdb_form_step_2" >
                            <form
                                action="{{ route('address.information.store') }}"
                                method="POST"
                                id="address-information"
                                data-step="address"
                                >

                                <div class="biodata_form_content">
                                    <div class="form_title">
                                        <h2>ঠিকানা</h2>
                                    </div>
                                <div class="biodata_field">
                                    <div class="biodata_label">
                                    <label>স্থায়ী ঠিকানা<span class="must-fillup-estaristic">*</span></label
                                    >
                                    </div>
                                    <div class="biodata_select address-container" id="permanent-address-wrapper">
                                        <input value="{{ $permanentAddress }}" type="text" style="cursor: pointer; " class="input-filup-text address-input" width="100%"  id="permanent-address" name="permanent_address"  placeholder="নির্বাচন করুন"  onclick="openAddressPicker('permanent-address', 'clear-permanent-address')" readonly>
                                        <span id="clear-permanent-address" style="padding: 10px; display: none;" class="clear-icon" onclick="clearAddress('permanent-address', 'clear-permanent-address')">
                                            <i class="fa-solid fa-xmark"></i>
                                        </span>
                                        <span class="arrow-icon" onclick="openAddressPicker()">
                                            <i class="fa-solid fa-caret-down"></i>
                                        </span>

                                        <div id="address-picker-modal" class="modal">
                                            <div class="modal-content">
                                                <span class="close-btn" onclick="closeAddressPicker()"><i class="fa-solid fa-xmark"></i></span>
                                                <div id="address-steps"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="text-danger error-message" id="error-permanent_address"></span>


                                    <div class="input-highlighter-text" id="permanent-ads-extra-input" style="display: none;">
                                        <input value="{{ optional($biodata)->permanent_ads_extra ?? '' }}"  type="text" style="margin-top: 15px; " class="input-filup-text" name="permanent_ads_extra" placeholder="এলাকার নাম লিখুন">
                                        <span class="text-danger error-message" id="error-permanent_ads_extra"></span>
                                        <p style="margin: 5px 0 0 10px;" id="address-guideline">গ্রাম বা এলাকার নাম লিখুন। যেমনঃ সয়াধানগড়া, ওয়ার্ড-০৪ ।</p>
                                    </div>
                                </div>


                                <div class="biodata_field">
                                    <div class="biodata_label">
                                        <label>বর্তমান ঠিকানা<span class="must-fillup-estaristic">*</span></label>
                                    </div>
                                    <div class="location_checkbox_container">
                                        <label>
                                        <input type="checkbox" name="location_picker_checkbox" class="location_checkbox" id="location_checkbox" value="1" {{ optional($biodata)->same_address == 1 ? 'checked' : '' }} >
                                        স্থায়ী ও বর্তমান ঠিকানা একই
                                        </label>
                                    </div>
                                    <div id="current-address-wrapper" class="address-container">
                                        <input value="{{ $currentAddress }}" type="text" style="cursor: pointer;" class="input-filup-text address-input" width="100%"  id="current-address" name="current_address" placeholder="নির্বাচন করুন" onclick="openAddressPicker('current-address', 'clear-current-address')" readonly>
                                        <span id="clear-current-address" style="padding: 10px; display: none;" class="clear-icon" onclick="clearAddress('current-address', 'clear-current-address')">
                                            <i class="fa-solid fa-xmark"></i>
                                        </span>
                                        <span class="arrow-icon" onclick="openAddressPicker()">
                                            <i class="fa-solid fa-caret-down"></i>
                                        </span>
                                    </div>
                                    <span class="text-danger error-message" id="error-current_address"></span>

                                    <div class="input-highlighter-text" id="current-ads-extra-input" style="display: none;">
                                        <input value="{{ optional($biodata)->same_address != 1 ?($biodata->current_ads_extra ?? '') : '' }}" type="text" style="margin-top: 15px; " class="input-filup-text" id="current-ads-extra" name="current_ads_extra"  placeholder="এলাকার নাম লিখুন">
                                        <span class="text-danger error-message" id="error-current_ads_extra"></span>
                                        <p style="margin: 5px 0 0 10px;" id="address-guideline"> গ্রাম বা এলাকার নাম লিখুন। যেমনঃ সয়াধানগড়া, ওয়ার্ড-০৪ ।</p>
                                    </div>
                                </div>
                                <div class="biodata_field">
                                    <div class="biodata_label">
                                    <label
                                        >আপনার জন্ম ও বেড়ে ওঠা কোথায়?<span
                                        class="must-fillup-estaristic"
                                        >*</span
                                        ></label
                                    >
                                    </div>
                                    <div class="biodata_select">
                                    <input
                                        type="text"
                                        name="born_raised"
                                        id="born-raised"
                                        value="{{ optional($biodata)->born_raised ?? '' }}"
                                        class="input-filup-text"
                                    />
                                    <span class="text-danger error-message" id="error-born_raised"></span>
                                    </div>
                                </div>

                                <div class="add_biodata_submit buttons">
                                    <button
                                    type="button"
                                    id="back2 "
                                    class="prevBtn back ds-button-border"
                                    >
                                    Back
                                    </button>
                                    <button
                                    type="submit"
                                    id="save_next2"
                                    class="nextBtn save_next ds-button"
                                    >
                                    Save & Next
                                    </button>
                                </div>
                                </div>
                            </form>
                            {{-- Biodata Alert --}}
                            <div id="general-alert" class=" alert-box biotada-alert" style="display: none">
                                <i class="fa-solid fa-circle-check"></i>
                                <span></span>
                                <div class="suc-progress-bar"></div>
                            </div>
                        </div>


                    <!-- {{-- Stap-3 --}} -->
                        <div class="add_biodata_content" id="dsdb_form_step_3" >
                            <form action="{{ route('education.information.store') }}"
                            method="POST"
                            id="education-information"
                            data-step="education"
                            >

                            <div class="biodata_form_content">
                                <div class="form_title">
                                <h2>শিক্ষাগত যোগ্যতা</h2>
                                </div>
                                <div class="biodata_field">
                                <div class="biodata_label">
                                    <label>
                                    কোন মাধ্যমে পড়াশোনা করেছেন?
                                    <span class="must-fillup-estaristic">*</span>
                                    </label>
                                </div>
                                <div class="biodata_select">
                                    <select
                                    name="education_type"
                                    id="education"
                                    onchange="handleFirstDropdownChange(this)"
                                    class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                    style="width: 100%"
                                    >
                                    <option value="">নির্বাচন করুন</option>
                                    <option value="general" {{ optional($biodata)->education_type == 'general' ? 'selected' : '' }}>জেনারেল</option>
                                    <option value="qawmi" {{ optional($biodata)->education_type == 'qawmi' ? 'selected' : '' }}>ক্বওমী</option>
                                    </select>
                                    <span class="text-danger error-message" id="error-education_type"></span>
                                </div>
                                </div>

                                <div class="biodata_field" id="highest_education_field-01" style="display: none">
                                <div class="biodata_label">
                                    <label>আপনার সর্বোচ্চ শিক্ষাগত যোগ্যতা?<span class="must-fillup-estaristic">*</span></label>
                                </div>
                                <div class="biodata_select">
                                    <select
                                    name="highest_education_general"
                                    id="highest_education_general"
                                        onchange="handleFirstDropdownChange(this); "
                                    class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                    style="width: 100%"
                                    >
                                    <option value="">নির্বাচন করুন</option>
                                    <option value="below_ssc" {{ optional($biodata)->highest_education == 'below_ssc' ? 'selected' : '' }}>এসএসসি’র নিচে</option>

                                    <option value="ssc" {{ optional($biodata)->highest_education == 'ssc' ? 'selected' : '' }}>এসএসসি</option>

                                    <option value="hsc" {{ optional($biodata)->highest_education == 'hsc' ? 'selected' : '' }}>এইচএসসি</option>

                                    <option value="diploma_ongoing" {{ optional($biodata)->highest_education == 'diploma_ongoing' ? 'selected' : '' }}>ডিপ্লোমা চলমান</option>

                                    <option value="diploma" {{ optional($biodata)->highest_education == 'diploma' ? 'selected' : '' }}>ডিপ্লোমা</option>

                                    <option value="honours_ongoing" {{ optional($biodata)->highest_education == 'honours_ongoing' ? 'selected' : '' }}>অনার্স চলমান</option>

                                    <option value="honours" {{ optional($biodata)->highest_education == 'honours' ? 'selected' : '' }}>অনার্স</option>

                                    <option value="masters" {{ optional($biodata)->highest_education == 'masters' ? 'selected' : '' }}>মাস্টার্স</option>
                                    </select>
                                    <span class="text-danger error-message" id="error-highest_education_general"></span>
                                </div>
                                </div>
                                <div class="biodata_field" id="highest_education_field-02" style="display: none;">
                                <div class="biodata_label">
                                    <label>আপনার সর্বোচ্চ শিক্ষাগত যোগ্যতা<span class="must-fillup-estaristic">*</span></label>
                                </div>
                                <div class="biodata_select">
                                    <select
                                    name="highest_education_qawmi"
                                    id="highest_education_qawmi"
                                    class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                    style="width: 100%"
                                        onchange="handleFirstDropdownChange(this); "
                                    >
                                    <option value="">নির্বাচন করুন</option>

                                    <option value="prathomik_deeni_shikkha" {{ optional($biodata)->highest_education == 'prathomik_deeni_shikkha' ? 'selected' : '' }}>প্রাথমিক দ্বীনি শিক্ষা</option>

                                    <option value="ibtidaiyah" {{ optional($biodata)->highest_education == 'ibtidaiyah' ? 'selected' : '' }}>ইবতিদাইয়্যাহ</option>

                                    <option value="mutawasita" {{ optional($biodata)->highest_education == 'mutawasita' ? 'selected' : '' }}>মুতাওয়াসসিতাহ</option>

                                    <option value="sanabia_uluiya" {{ optional($biodata)->highest_education == 'sanabia_uluiya' ? 'selected' : '' }}>সানাবিয়া উলইয়া</option>

                                    <option value="fazilat" {{ optional($biodata)->highest_education == 'fazilat' ? 'selected' : '' }}>ফযীলত</option>

                                    <option value="taqmeel" {{ optional($biodata)->highest_education == 'taqmeel' ? 'selected' : '' }}>তাকমীল</option>

                                    <option value="takhassus" {{ optional($biodata)->highest_education == 'takhassus' ? 'selected' : '' }}>তাখাসসুস</option>
                                    </select>
                                    <span class="text-danger error-message" id="error-highest_education_qawmi"></span>
                                </div>
                                </div>
                                <!-- Under SSC START-->
                                <div class="under-ssc-field">
                                <div class="biodata_field">
                                    <div class="biodata_label">
                                    <label>সর্বোচ্চ কোন ক্লাস পর্যন্ত পড়েছেন? <span class="must-fillup-estaristic">*</span></label>
                                    </div>
                                    <div class="biodata_select">
                                    <select
                                        name="under_ssc_class"
                                        class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                        style="width: 100%">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="class_10" {{ optional($biodata)->under_ssc_class == 'class_10' ? 'selected' : '' }}>দশম</option>

                                        <option value="class_9" {{ optional($biodata)->under_ssc_class == 'class_9' ? 'selected' : '' }}>নবম</option>

                                        <option value="class_8" {{ optional($biodata)->under_ssc_class == 'class_8' ? 'selected' : '' }}>অষ্টম</option>

                                        <option value="class_7" {{ optional($biodata)->under_ssc_class == 'class_7' ? 'selected' : '' }}>সপ্তম</option>

                                        <option value="class_6" {{ optional($biodata)->under_ssc_class == 'class_6' ? 'selected' : '' }}>ষষ্ঠ</option>

                                        <option value="class_5" {{ optional($biodata)->under_ssc_class == 'class_5' ? 'selected' : '' }}>পঞ্চম</option>

                                        <option value="class_4" {{ optional($biodata)->under_ssc_class == 'class_4' ? 'selected' : '' }}>চতুর্থ</option>

                                        <option value="class_3" {{ optional($biodata)->under_ssc_class == 'class_3' ? 'selected' : '' }}>তৃতীয়</option>

                                        <option value="class_2" {{ optional($biodata)->under_ssc_class == 'class_2' ? 'selected' : '' }}>দ্বিতীয়</option>

                                        <option value="class_1" {{ optional($biodata)->under_ssc_class == 'class_1' ? 'selected' : '' }}>প্রথম</option>
                                    </select>
                                        <span class="text-danger error-message" id="error-under_ssc_class"></span>
                                    </div>
                                    </div>
                                </div>
                                <!-- Under SSC END-->
                                <!-- SSC START-->
                                <div class="ssc-field">
                                {{-- ssc_field --}}
                                    <div class="biodata_field">
                                    <div class="biodata_label">
                                        <label
                                        >কত সালে এসএসসি/দাখিল বা সমমান পাস করেছেন?<span
                                            class="must-fillup-estaristic"
                                            >*</span
                                        ></label
                                        >
                                    </div>
                                    <div class="biodata_select">
                                        <div class="biodata_select">
                                        <input
                                            type="text"
                                            name="ssc_passing_year"
                                            class="input-filup-text"
                                            value=" {{ optional($biodata)->highest_education == 'ssc' ? optional($biodata)->ssc_passing_year : '' }}"
                                        />
                                        <span class="text-danger error-message" id="error-ssc_passing_year"></span>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="biodata_field">
                                    <div class="biodata_label">
                                        <label>বিভাগ <span class="must-fillup-estaristic">*</span></label>
                                    </div>
                                    <div class="biodata_select">
                                        <select
                                        name="ssc_education_category"
                                        class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                        style="width: 100%"
                                        >
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="science" {{ (optional($biodata)->highest_education == 'ssc' && optional($biodata)->ssc_education_category == 'science') ? 'selected' : '' }}>বিজ্ঞান</option>

                                        <option value="humanities" {{ (optional($biodata)->highest_education == 'ssc' && optional($biodata)->ssc_education_category == 'humanities') ? 'selected' : '' }}>মানবিক</option>

                                        <option value="business" {{ (optional($biodata)->highest_education == 'ssc' && optional($biodata)->ssc_education_category == 'business') ? 'selected' : '' }}>ব্যবসা</option>

                                        <option value="vocational" {{ (optional($biodata)->highest_education == 'ssc' && optional($biodata)->ssc_education_category == 'vocational') ? 'selected' : '' }}>ভোকেশনাল</option>
                                        </select>
                                        <span class="text-danger error-message" id="error-ssc_education_category"></span>
                                    </div>
                                    </div>
                                    <div class="biodata_field">
                                        <div class="biodata_label">
                                        <label>ফলাফল<span class="must-fillup-estaristic">*</span></label>
                                        </div>
                                        <div class="biodata_select">
                                        <select
                                            name="ssc_result"
                                            class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                            style="width: 100%"
                                        >
                                            <option value="">নির্বাচন করুন</option>
                                            <option value="A+" {{ (optional($biodata)->highest_education == 'ssc' && optional($biodata)->ssc_result == 'A+') ? 'selected' : '' }}>A+</option>

                                            <option value="A-" {{ (optional($biodata)->highest_education == 'ssc' && optional($biodata)->ssc_result == 'A-') ? 'selected' : '' }}>A-</option>

                                            <option value="B+" {{ (optional($biodata)->highest_education == 'ssc' && optional($biodata)->ssc_result == 'B+') ? 'selected' : '' }}>B+</option>

                                            <option value="B-" {{ (optional($biodata)->highest_education == 'ssc' && optional($biodata)->ssc_result == 'B-') ? 'selected' : '' }}>B-</option>

                                            <option value="C" {{ (optional($biodata)->highest_education == 'ssc' && optional($biodata)->ssc_result == 'C') ? 'selected' : '' }}>C</option>

                                            <option value="D" {{ (optional($biodata)->highest_education == 'ssc' && optional($biodata)->ssc_result == 'D') ? 'selected' : '' }}>D</option>
                                        </select>
                                        <span class="text-danger error-message" id="error-ssc_result"></span>
                                        </div>
                                        </div>

                                {{-- ssc_field --}}
                                    <div class="biodata_field">
                                        <div class="biodata_label">
                                        <label
                                            >এইচএসসি/ আলিম বা সমমান কোন বর্ষে পড়ছেন?<span
                                            class="must-fillup-estaristic"
                                            >*</span
                                            ></label
                                        >
                                        </div>
                                        <div class="biodata_select">
                                        <div class="biodata_select">
                                            <input
                                            type="text"
                                            name="hsc_ongoing_year"
                                            class="input-filup-text"
                                                value="{{ optional($biodata)->hsc_ongoing_year ?? '' }}"
                                            />
                                            <span class="text-danger error-message" id="error-hsc_ongoing_year"></span>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <!--SSC END-->
                                <!-- HSC START-->
                                <div class="hsc-field">
                                {{-- ssc_field --}}
                                    <div class="biodata_field">
                                        <div class="biodata_label">
                                            <label
                                            >কত সালে এসএসসি/দাখিল বা সমমান পাস করেছেন?<span
                                                class="must-fillup-estaristic"
                                                >*</span
                                            ></label
                                            >
                                        </div>
                                        <div class="biodata_select">
                                            <div class="biodata_select">
                                            <input
                                                type="text"
                                                name="hsc_ssc_passing_year"
                                                class="input-filup-text"
                                                value="{{ optional($biodata)->highest_education == 'hsc' ? optional($biodata)->ssc_passing_year : '' }}"
                                            />
                                            <span class="text-danger error-message" id="error-hsc_ssc_passing_year"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="biodata_field">
                                        <div class="biodata_label">
                                            <label>বিভাগ <span class="must-fillup-estaristic">*</span></label>
                                        </div>
                                        <div class="biodata_select">
                                            <select
                                            name="hsc_ssc_education_category"
                                            class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                            style="width: 100%"
                                            >
                                            <option value="">নির্বাচন করুন</option>
                                            <option value="science" {{ (optional($biodata)->highest_education == 'hsc' && optional($biodata)->ssc_education_category == 'science') ? 'selected' : '' }}>বিজ্ঞান</option>
                                            <option value="humanities" {{ (optional($biodata)->highest_education == 'hsc' && optional($biodata)->ssc_education_category == 'humanities') ? 'selected' : '' }}>মানবিক</option>
                                            <option value="business" {{ (optional($biodata)->highest_education == 'hsc' && optional($biodata)->ssc_education_category == 'business') ? 'selected' : '' }}>ব্যবসা</option>
                                            <option value="vocational" {{ (optional($biodata)->highest_education == 'hsc' && optional($biodata)->ssc_education_category == 'vocational') ? 'selected' : '' }}>ভোকেশনাল</option>
                                            </select>
                                            <span class="text-danger error-message" id="error-hsc_ssc_education_category"></span>
                                        </div>
                                    </div>
                                    <div class="biodata_field">
                                        <div class="biodata_label">
                                        <label>ফলাফল<span class="must-fillup-estaristic">*</span></label>
                                        </div>
                                        <div class="biodata_select">
                                        <select
                                            name="hsc_ssc_result"
                                            class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                            style="width: 100%"
                                        >
                                            <option value="">নির্বাচন করুন</option>
                                            <option value="A+" {{ (optional($biodata)->highest_education == 'hsc' && optional($biodata)->ssc_result == 'A+') ? 'selected' : '' }}>A+</option>
                                            <option value="A-" {{ (optional($biodata)->highest_education == 'hsc' && optional($biodata)->ssc_result == 'A-') ? 'selected' : '' }}>A-</option>
                                            <option value="B+" {{ (optional($biodata)->highest_education == 'hsc' && optional($biodata)->ssc_result == 'B+') ? 'selected' : '' }}>B+</option>
                                            <option value="B-" {{ (optional($biodata)->highest_education == 'hsc' && optional($biodata)->ssc_result == 'B-') ? 'selected' : '' }}>B-</option>
                                            <option value="C" {{ (optional($biodata)->highest_education == 'hsc' && optional($biodata)->ssc_result == 'C') ? 'selected' : '' }}>C</option>
                                            <option value="D" {{ (optional($biodata)->highest_education == 'hsc' && optional($biodata)->ssc_result == 'D') ? 'selected' : '' }}>D</option>
                                        </select>
                                        <span class="text-danger error-message" id="error-hsc_ssc_result"></span>
                                        </div>
                                    </div>
                                {{-- ssc_field --}}

                                {{-- hsc_field --}}
                                    <div class="biodata_field">
                                        <div class="biodata_label">
                                            <label
                                            >কত সালে এইচএসসি/আলিম বা সমমান পাস করেছেন?<span
                                                class="must-fillup-estaristic"
                                                >*</span
                                            ></label
                                            >
                                        </div>
                                        <div class="biodata_select">
                                            <div class="biodata_select">
                                            <input
                                                type="text"
                                                name="hsc_passing_year"
                                                class="input-filup-text"
                                                value="{{ optional($biodata)->highest_education == 'hsc' ? optional($biodata)->hsc_passing_year : '' }}"
                                            />
                                            <span class="text-danger error-message" id="error-hsc_passing_year"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="biodata_field">
                                        <div class="biodata_label">
                                            <label>বিভাগ <span class="must-fillup-estaristic">*</span></label>
                                        </div>
                                        <div class="biodata_select">
                                            <select
                                            name="hsc_education_category"
                                            class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                            style="width: 100%"
                                            >
                                            <option value="">নির্বাচন করুন</option>
                                            <option value="science" {{ (optional($biodata)->highest_education == 'hsc' && optional($biodata)->hsc_education_category == 'science') ? 'selected' : '' }}>বিজ্ঞান</option>

                                            <option value="humanities" {{ (optional($biodata)->highest_education == 'hsc' && optional($biodata)->hsc_education_category == 'humanities') ? 'selected' : '' }}>মানবিক</option>

                                            <option value="business" {{ (optional($biodata)->highest_education == 'hsc' && optional($biodata)->hsc_education_category == 'business') ? 'selected' : '' }}>ব্যবসা</option>

                                            <option value="vocational" {{ (optional($biodata)->highest_education == 'hsc' && optional($biodata)->hsc_education_category == 'vocational') ? 'selected' : '' }}>ভোকেশনাল</option>
                                            </select>
                                            <span class="text-danger error-message" id="error-hsc_education_category"></span>
                                        </div>
                                    </div>
                                    <div class="biodata_field">
                                            <div class="biodata_label">
                                            <label>ফলাফল<span class="must-fillup-estaristic">*</span></label>
                                            </div>
                                        <div class="biodata_select">
                                            <select
                                                name="hsc_result"
                                                class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                                style="width: 100%"
                                            >
                                                <option value="">নির্বাচন করুন</option>
                                                <option value="A+" {{ (optional($biodata)->highest_education == 'hsc' && optional($biodata)->hsc_result == 'A+') ? 'selected' : '' }}>A+</option>
                                                <option value="A-" {{ (optional($biodata)->highest_education == 'hsc' && optional($biodata)->hsc_result == 'A-') ? 'selected' : '' }}>A-</option>
                                                <option value="B+" {{ (optional($biodata)->highest_education == 'hsc' && optional($biodata)->hsc_result == 'B+') ? 'selected' : '' }}>B+</option>
                                                <option value="B-" {{ (optional($biodata)->highest_education == 'hsc' && optional($biodata)->hsc_result == 'B-') ? 'selected' : '' }}>B-</option>
                                                <option value="C" {{ (optional($biodata)->highest_education == 'hsc' && optional($biodata)->hsc_result == 'C') ? 'selected' : '' }}>C</option>
                                                <option value="D" {{ (optional($biodata)->highest_education == 'hsc' && optional($biodata)->hsc_result == 'D') ? 'selected' : '' }}>D</option>
                                            </select>
                                            <span class="text-danger error-message" id="error-hsc_result"></span>
                                        </div>
                                    </div>
                                {{-- hsc_field --}}
                                </div>
                                <!--HSC END-->
                                <!-- DIPLOMA_ONGOING START-->
                                <div class="diploma_ongoing-field">
                                {{-- ssc_field --}}
                                    <div class="biodata_field">
                                        <div class="biodata_label">
                                            <label
                                            >কত সালে এসএসসি/দাখিল বা সমমান পাস করেছেন?<span
                                                class="must-fillup-estaristic"
                                                >*</span
                                            ></label
                                            >
                                        </div>
                                        <div class="biodata_select">
                                            <div class="biodata_select">
                                            <input
                                                type="text"
                                                name="diploma_ongoing_ssc_passing_year"
                                                class="input-filup-text"
                                                value="{{ optional($biodata)->highest_education == 'diploma_ongoing' ? optional($biodata)->ssc_passing_year : '' }}"
                                            />
                                            <span class="text-danger error-message" id="error-diploma_ongoing_ssc_passing_year"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="biodata_field">
                                        <div class="biodata_label">
                                            <label>বিভাগ <span class="must-fillup-estaristic">*</span></label>
                                        </div>
                                        <div class="biodata_select">
                                            <select
                                            name="diploma_ongoing_ssc_education_category"
                                            class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                            style="width: 100%"
                                            >
                                            <option value="">নির্বাচন করুন</option>
                                            <option value="science" {{ (optional($biodata)->highest_education == 'diploma_ongoing' && optional($biodata)->ssc_education_category == 'science') ? 'selected' : '' }}>বিজ্ঞান</option>
                                            <option value="humanities" {{ (optional($biodata)->highest_education == 'diploma_ongoing' && optional($biodata)->ssc_education_category == 'humanities') ? 'selected' : '' }}>মানবিক</option>
                                            <option value="business" {{ (optional($biodata)->highest_education == 'diploma_ongoing' && optional($biodata)->ssc_education_category == 'business') ? 'selected' : '' }}>ব্যবসা</option>
                                            <option value="vocational" {{ (optional($biodata)->highest_education == 'diploma_ongoing' && optional($biodata)->ssc_education_category == 'vocational') ? 'selected' : '' }}>ভোকেশনাল</option>
                                            </select>
                                            <span class="text-danger error-message" id="error-diploma_ongoing_ssc_education_category"></span>
                                        </div>
                                    </div>
                                    <div class="biodata_field">
                                        <div class="biodata_label">
                                        <label>ফলাফল<span class="must-fillup-estaristic">*</span></label>
                                        </div>
                                        <div class="biodata_select">
                                        <select
                                            name="diploma_ongoing_ssc_result"
                                            class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                            style="width: 100%"
                                        >
                                            <option value="">নির্বাচন করুন</option>
                                            <option value="A+" {{ (optional($biodata)->highest_education == 'diploma_ongoing' && optional($biodata)->ssc_result == 'A+') ? 'selected' : '' }}>A+</option>
                                            <option value="A-" {{ (optional($biodata)->highest_education == 'diploma_ongoing' && optional($biodata)->ssc_result == 'A-') ? 'selected' : '' }}>A-</option>
                                            <option value="B+" {{ (optional($biodata)->highest_education == 'diploma_ongoing' && optional($biodata)->ssc_result == 'B+') ? 'selected' : '' }}>B+</option>
                                            <option value="B-" {{ (optional($biodata)->highest_education == 'diploma_ongoing' && optional($biodata)->ssc_result == 'B-') ? 'selected' : '' }}>B-</option>
                                            <option value="C" {{ (optional($biodata)->highest_education == 'diploma_ongoing' && optional($biodata)->ssc_result == 'C') ? 'selected' : '' }}>C</option>
                                            <option value="D" {{ (optional($biodata)->highest_education == 'diploma_ongoing' && optional($biodata)->ssc_result == 'D') ? 'selected' : '' }}>D</option>
                                        </select>
                                        <span class="text-danger error-message" id="error-diploma_ongoing_ssc_result"></span>
                                        </div>
                                    </div>
                                {{-- ssc_field --}}
                                    <div class="biodata_field">
                                        <div class="biodata_label">
                                        <label
                                            >কোন বিষয়ে ডিপ্লোমা পড়ছেন?<span
                                            class="must-fillup-estaristic"
                                            >*</span
                                            ></label
                                        >
                                        </div>
                                        <div class="biodata_select">
                                        <div class="biodata_select">
                                            <input
                                            type="text"
                                            name="diploma_ongoing_subject"
                                            class="input-filup-text"
                                            value="{{ optional($biodata)->diploma_ongoing_subject ?? '' }}"
                                            />
                                            <span class="text-danger error-message" id="error-diploma_ongoing_subject"></span>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="biodata_field">
                                        <div class="biodata_label">
                                        <label
                                            >কোন বর্ষে পড়ছেন?<span
                                            class="must-fillup-estaristic"
                                            >*</span
                                            ></label
                                        >
                                        </div>
                                        <div class="biodata_select">
                                        <div class="biodata_select">
                                            <input
                                            type="text"
                                            name="diploma_ongoing_year"
                                            class="input-filup-text"
                                                value="{{ optional($biodata)->diploma_ongoing_year ?? '' }}"
                                            />
                                            <span class="text-danger error-message" id="error-diploma_ongoing_year"></span>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="biodata_field">
                                        <div class="biodata_label">
                                        <label
                                            >শিক্ষাপ্রতিষ্ঠানের নাম<span
                                            class="must-fillup-estaristic"
                                            >*</span
                                            ></label
                                        >
                                        </div>
                                        <div class="biodata_select">
                                        <div class="biodata_select">
                                            <input
                                            type="text"
                                            name="diploma_ongoing_institut"
                                            class="input-filup-text"
                                                value="{{ optional($biodata)->diploma_ongoing_institut ?? '' }}"
                                            />
                                            <span class="text-danger error-message" id="error-diploma_ongoing_institut"></span>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <!--DIPLOMA_ONGOING END-->
                                <!-- DIPLOMA START-->
                                <div class="diploma-field">
                                    {{-- ssc_field --}}
                                        <div class="biodata_field">
                                            <div class="biodata_label">
                                                <label
                                                >কত সালে এসএসসি/দাখিল বা সমমান পাস করেছেন<span
                                                    class="must-fillup-estaristic"
                                                    >*</span
                                                ></label
                                                >
                                            </div>
                                            <div class="biodata_select">
                                                <div class="biodata_select">
                                                <input
                                                    type="text"
                                                    name="diploma_ssc_passing_year"
                                                    class="input-filup-text"
                                                    value="{{ optional($biodata)->highest_education == 'diploma' ? optional($biodata)->ssc_passing_year : '' }}"
                                                />
                                                <span class="text-danger error-message" id="error-diploma_ssc_passing_year"></span>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="biodata_field">
                                            <div class="biodata_label">
                                                <label>বিভাগ <span class="must-fillup-estaristic">*</span></label>
                                            </div>
                                            <div class="biodata_select">
                                                <select
                                                name="diploma_ssc_education_category"
                                                class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                                style="width: 100%"
                                                >
                                                <option value="">নির্বাচন করুন</option>
                                                <option value="science" {{ (optional($biodata)->highest_education == 'diploma' && optional($biodata)->ssc_education_category == 'science') ? 'selected' : '' }}>বিজ্ঞান</option>
                                                <option value="humanities" {{ (optional($biodata)->highest_education == 'diploma' && optional($biodata)->ssc_education_category == 'humanities') ? 'selected' : '' }}>মানবিক</option>
                                                <option value="business" {{ (optional($biodata)->highest_education == 'diploma' && optional($biodata)->ssc_education_category == 'business') ? 'selected' : '' }}>ব্যবসা</option>
                                                <option value="vocational" {{ (optional($biodata)->highest_education == 'diploma' && optional($biodata)->ssc_education_category == 'vocational') ? 'selected' : '' }}>ভোকেশনাল</option>
                                                </select>
                                                <span class="text-danger error-message" id="error-diploma_ssc_education_category"></span>
                                            </div>
                                            </div>
                                            <div class="biodata_field">
                                                <div class="biodata_label">
                                                <label>ফলাফল<span class="must-fillup-estaristic">*</span></label>
                                                </div>
                                                <div class="biodata_select">
                                                <select
                                                    name="diploma_ssc_result"
                                                    class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                                    style="width: 100%"
                                                >
                                                    <option value="">নির্বাচন করুন</option>
                                                    <option value="A+" {{ (optional($biodata)->highest_education == 'diploma' && optional($biodata)->ssc_result == 'A+') ? 'selected' : '' }}>A+</option>
                                                    <option value="A-" {{ (optional($biodata)->highest_education == 'diploma' && optional($biodata)->ssc_result == 'A-') ? 'selected' : '' }}>A-</option>
                                                    <option value="B+" {{ (optional($biodata)->highest_education == 'diploma' && optional($biodata)->ssc_result == 'B+') ? 'selected' : '' }}>B+</option>
                                                    <option value="B-" {{ (optional($biodata)->highest_education == 'diploma' && optional($biodata)->ssc_result == 'B-') ? 'selected' : '' }}>B-</option>
                                                    <option value="C" {{ (optional($biodata)->highest_education == 'diploma' && optional($biodata)->ssc_result == 'C') ? 'selected' : '' }}>C</option>
                                                    <option value="D" {{ (optional($biodata)->highest_education == 'diploma' && optional($biodata)->ssc_result == 'D') ? 'selected' : '' }}>D</option>
                                                </select>
                                                <span class="text-danger error-message" id="error-diploma_ssc_result"></span>
                                                </div>
                                                </div>

                                    {{-- ssc_field --}}
                                    {{-- diploma_field --}}
                                        <div class="biodata_field">
                                            <div class="biodata_label">
                                                <label>কোন বিষয়ে ডিপ্লোমা পাস করেছেন?
                                                    <span class="must-fillup-estaristic">*</span>
                                                </label>
                                            </div>
                                            <div class="biodata_select">
                                                <div class="biodata_select">
                                                <input
                                                    type="text"
                                                    name="diploma_passing_subject"
                                                    class="input-filup-text"
                                                    value="{{ optional($biodata)->highest_education == 'diploma' ? optional($biodata)->diploma_passing_subject : '' }}"
                                                />
                                                <span class="text-danger error-message" id="error-diploma_passing_subject"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="biodata_field">
                                            <div class="biodata_label">
                                                <label> ডিপ্লোমা পাসের সন
                                                    <span class="must-fillup-estaristic">*</span
                                                ></label>
                                            </div>
                                            <div class="biodata_select">
                                                <div class="biodata_select">
                                                <input
                                                    type="text"
                                                    name="diploma_passing_year"
                                                    class="input-filup-text"
                                                    value="{{ optional($biodata)->highest_education == 'diploma' ? optional($biodata)->diploma_passing_year : '' }}"
                                                />
                                                <span class="text-danger error-message" id="error-diploma_passing_year"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="biodata_field">
                                            <div class="biodata_label">
                                                <label>শিক্ষাপ্রতিষ্ঠানের নাম
                                                    <span class="must-fillup-estaristic">*</span
                                                ></label>
                                            </div>
                                            <div class="biodata_select">
                                                <div class="biodata_select">
                                                <input
                                                    type="text"
                                                    name="diploma_passing_institut"
                                                    class="input-filup-text"
                                                    value="{{ optional($biodata)->highest_education == 'diploma' ? optional($biodata)->diploma_passing_institut : '' }}"
                                                />
                                                <span class="text-danger error-message" id="error-diploma_passing_institut"></span>
                                                </div>
                                            </div>
                                        </div>
                                    {{-- diploma_field --}}
                                </div>
                                <!--DIPLOMA END-->
                                <!-- HONOURS_ONGOING START-->
                                <div class="honours_ongoing-field">
                                    {{-- ssc_field --}}
                                        <div class="biodata_field">
                                            <div class="biodata_label">
                                                <label
                                                >কত সালে এসএসসি/দাখিল বা সমমান পাস করেছেন<span
                                                    class="must-fillup-estaristic"
                                                    >*</span
                                                ></label
                                                >
                                            </div>
                                            <div class="biodata_select">
                                                <div class="biodata_select">
                                                <input
                                                    type="text"
                                                    name="honours_ongoing_ssc_passing_year"
                                                    class="input-filup-text"
                                                    value="{{ optional($biodata)->highest_education == 'honours_ongoing' ? optional($biodata)->ssc_passing_year : '' }}"
                                                />
                                                <span class="text-danger error-message" id="error-honours_ongoing_ssc_passing_year"></span>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="biodata_field">
                                            <div class="biodata_label">
                                                <label>বিভাগ <span class="must-fillup-estaristic">*</span></label>
                                            </div>
                                            <div class="biodata_select">
                                                <select
                                                name="honours_ongoing_ssc_education_category"
                                                class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                                style="width: 100%"
                                                >
                                                <option value="">নির্বাচন করুন</option>
                                                <option value="science" {{ (optional($biodata)->highest_education == 'honours_ongoing' && optional($biodata)->ssc_education_category == 'science') ? 'selected' : '' }}>বিজ্ঞান</option>
                                                <option value="humanities" {{ (optional($biodata)->highest_education == 'honours_ongoing' && optional($biodata)->ssc_education_category == 'humanities') ? 'selected' : '' }}>মানবিক</option>
                                                <option value="business" {{ (optional($biodata)->highest_education == 'honours_ongoing' && optional($biodata)->ssc_education_category == 'business') ? 'selected' : '' }}>ব্যবসা</option>
                                                <option value="vocational" {{ (optional($biodata)->highest_education == 'honours_ongoing' && optional($biodata)->ssc_education_category == 'vocational') ? 'selected' : '' }}>ভোকেশনাল</option>
                                                </select>
                                                <span class="text-danger error-message" id="error-honours_ongoing_ssc_education_category"></span>
                                            </div>
                                            </div>
                                            <div class="biodata_field">
                                                <div class="biodata_label">
                                                <label>ফলাফল<span class="must-fillup-estaristic">*</span></label>
                                                </div>
                                                <div class="biodata_select">
                                                <select
                                                    name="honours_ongoing_ssc_result"
                                                    class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                                    style="width: 100%"
                                                >
                                                    <option value="">নির্বাচন করুন</option>
                                                    <option value="A+" {{ (optional($biodata)->highest_education == 'honours_ongoing' && optional($biodata)->ssc_result == 'A+') ? 'selected' : '' }}>A+</option>
                                                    <option value="A-" {{ (optional($biodata)->highest_education == 'honours_ongoing' && optional($biodata)->ssc_result == 'A-') ? 'selected' : '' }}>A-</option>
                                                    <option value="B+" {{ (optional($biodata)->highest_education == 'honours_ongoing' && optional($biodata)->ssc_result == 'B+') ? 'selected' : '' }}>B+</option>
                                                    <option value="B-" {{ (optional($biodata)->highest_education == 'honours_ongoing' && optional($biodata)->ssc_result == 'B-') ? 'selected' : '' }}>B-</option>
                                                    <option value="C" {{ (optional($biodata)->highest_education == 'honours_ongoing' && optional($biodata)->ssc_result == 'C') ? 'selected' : '' }}>C</option>
                                                    <option value="D" {{ (optional($biodata)->highest_education == 'honours_ongoing' && optional($biodata)->ssc_result == 'D') ? 'selected' : '' }}>D</option>
                                                </select>
                                                <span class="text-danger error-message" id="error-honours_ongoing_ssc_result"></span>
                                                </div>
                                                </div>

                                    {{-- ssc_field --}}
                                    <div class="biodata_field">
                                        <div class="biodata_label">
                                        <label>এসএসসি’র পর কোন মাধ্যমে পড়েছেন?<span class="must-fillup-estaristic">*</span></label>
                                        </div>
                                        <div class="biodata_select">
                                        <select
                                            name="after_ssc_education"
                                            id="after_ssc_education_01"
                                            class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                            style="width: 100%"
                                        >
                                            <option value="">নির্বাচন করুন</option>
                                            <option value="hsc_education" {{ (optional($biodata)->highest_education == 'honours_ongoing' && optional($biodata)->after_ssc_education == 'hsc_education') ? 'selected' : '' }}>এইচএসসি</option>
                                            <option value="diploma_education" {{ (optional($biodata)->highest_education == 'honours_ongoing' && optional($biodata)->after_ssc_education == 'diploma_education') ? 'selected' : '' }}>ডিপ্লোমা</option>
                                        </select>
                                            <span class="text-danger error-message" id="error-after_ssc_education"></span>
                                        </div>
                                        </div>
                                        <div class="after-ssc-field-01">
                                        {{-- hsc_field --}}
                                            <div class="biodata_field">
                                                <div class="biodata_label">
                                                    <label
                                                    >কত সালে এইচএসসি/আলিম বা সমমান পাস করেছেন<span
                                                        class="must-fillup-estaristic"
                                                        >*</span
                                                    ></label
                                                    >
                                                </div>
                                                <div class="biodata_select">
                                                    <div class="biodata_select">
                                                    <input
                                                        type="text"
                                                        name="honours_ong_hsc_passing_year"
                                                        class="input-filup-text"
                                                        value="{{ optional($biodata)->highest_education == 'honours_ongoing' ? optional($biodata)->hsc_passing_year : '' }}"
                                                    />
                                                    <span class="text-danger error-message" id="error-honours_ong_hsc_passing_year"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="biodata_field">
                                                <div class="biodata_label">
                                                    <label>বিভাগ <span class="must-fillup-estaristic">*</span></label>
                                                </div>
                                                <div class="biodata_select">
                                                    <select
                                                    name="honours_ong_hsc_edu_category"
                                                    class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                                    style="width: 100%"
                                                    >
                                                    <option value="">নির্বাচন করুন</option>
                                                    <option value="science" {{ (optional($biodata)->highest_education == 'honours_ongoing' && optional($biodata)->hsc_education_category == 'science') ? 'selected' : '' }}>বিজ্ঞান</option>
                                                    <option value="humanities" {{ (optional($biodata)->highest_education == 'honours_ongoing' && optional($biodata)->hsc_education_category == 'humanities') ? 'selected' : '' }}>মানবিক</option>
                                                    <option value="business" {{ (optional($biodata)->highest_education == 'honours_ongoing' && optional($biodata)->hsc_education_category == 'business') ? 'selected' : '' }}>ব্যবসা</option>
                                                    <option value="vocational" {{ (optional($biodata)->highest_education == 'honours_ongoing' && optional($biodata)->hsc_education_category == 'vocational') ? 'selected' : '' }}>ভোকেশনাল</option>
                                                    </select>
                                                    <span class="text-danger error-message" id="error-honours_ong_hsc_edu_category"></span>
                                                </div>
                                            </div>
                                            <div class="biodata_field">
                                                    <div class="biodata_label">
                                                    <label>ফলাফল<span class="must-fillup-estaristic">*</span></label>
                                                    </div>
                                                <div class="biodata_select">
                                                    <select
                                                        name="honours_ong_hsc_result"
                                                        class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                                        style="width: 100%"
                                                    >
                                                        <option value="">নির্বাচন করুন</option>
                                                        <option value="A+" {{ (optional($biodata)->highest_education == 'honours_ongoing' && optional($biodata)->hsc_result == 'A+') ? 'selected' : '' }}>A+</option>
                                                        <option value="A-" {{ (optional($biodata)->highest_education == 'honours_ongoing' && optional($biodata)->hsc_result == 'A-') ? 'selected' : '' }}>A-</option>
                                                        <option value="B+" {{ (optional($biodata)->highest_education == 'honours_ongoing' && optional($biodata)->hsc_result == 'B+') ? 'selected' : '' }}>B+</option>
                                                        <option value="B-" {{ (optional($biodata)->highest_education == 'honours_ongoing' && optional($biodata)->hsc_result == 'B-') ? 'selected' : '' }}>B-</option>
                                                        <option value="C" {{ (optional($biodata)->highest_education == 'honours_ongoing' && optional($biodata)->hsc_result == 'C') ? 'selected' : '' }}>C</option>
                                                        <option value="D" {{ (optional($biodata)->highest_education == 'honours_ongoing' && optional($biodata)->hsc_result == 'D') ? 'selected' : '' }}>D</option>
                                                    </select>
                                                    <span class="text-danger error-message" id="error-honours_ong_hsc_result"></span>
                                                </div>
                                            </div>
                                        {{-- hsc_field --}}
                                    </div>
                                    <div class="after-ssc-field-02">
                                        {{-- diploma_field --}}
                                            <div class="biodata_field">
                                                <div class="biodata_label">
                                                    <label>কোন বিষয়ে ডিপ্লোমা পাস করেছেন?
                                                        <span class="must-fillup-estaristic">*</span>
                                                    </label>
                                                </div>
                                                <div class="biodata_select">
                                                    <div class="biodata_select">
                                                    <input
                                                        type="text"
                                                        name="honours_ong_diploma_passing_subject"
                                                        class="input-filup-text"
                                                        value="{{ optional($biodata)->highest_education == 'honours_ongoing' ? optional($biodata)->diploma_passing_subject : '' }}"
                                                    />
                                                    <span class="text-danger error-message" id="error-honours_ong_diploma_passing_subject"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="biodata_field">
                                                <div class="biodata_label">
                                                    <label> ডিপ্লোমা পাসের সন
                                                        <span class="must-fillup-estaristic">*</span
                                                    ></label>
                                                </div>
                                                <div class="biodata_select">
                                                    <div class="biodata_select">
                                                    <input
                                                        type="text"
                                                        name="honours_ong_diploma_passing_year"
                                                        class="input-filup-text"
                                                        value="{{ optional($biodata)->highest_education == 'honours_ongoing' ? optional($biodata)->diploma_passing_year : '' }}"
                                                    />
                                                    <span class="text-danger error-message" id="error-honours_ong_diploma_passing_year"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="biodata_field">
                                                <div class="biodata_label">
                                                    <label>শিক্ষাপ্রতিষ্ঠানের নাম
                                                        <span class="must-fillup-estaristic">*</span
                                                    ></label>
                                                </div>
                                                <div class="biodata_select">
                                                    <div class="biodata_select">
                                                    <input
                                                        type="text"
                                                        name="honours_ong_diploma_passing_institut"
                                                        class="input-filup-text"
                                                        value="{{ optional($biodata)->highest_education == 'honours_ongoing' ? optional($biodata)->diploma_passing_institut : '' }}"
                                                    />
                                                    <span class="text-danger error-message" id="error-honours_ong_diploma_passing_institut"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        {{-- diploma_field --}}
                                    </div>
                                    <div class="biodata_field">
                                        <div class="biodata_label">
                                        <label
                                            >কোন বিষয়ে অনার্স/ ফাজিল পড়ছেন?<span
                                            class="must-fillup-estaristic"
                                            >*</span
                                            ></label
                                        >
                                        </div>
                                        <div class="biodata_select">
                                        <div class="biodata_select">
                                            <input
                                            type="text"
                                            name="honours_ongoing_subject"
                                            class="input-filup-text"
                                                value="{{ optional($biodata)->honours_ongoing_subject ?? '' }}"
                                            />
                                            <span class="text-danger error-message" id="error-honours_ongoing_subject"></span>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="biodata_field">
                                        <div class="biodata_label">
                                        <label
                                            >কোন বর্ষে পড়ছেন?<span
                                            class="must-fillup-estaristic"
                                            >*</span
                                            ></label
                                        >
                                        </div>
                                        <div class="biodata_select">
                                        <div class="biodata_select">
                                            <input
                                            type="text"
                                            name="honours_ongoing_year"
                                            class="input-filup-text"
                                                value="{{ optional($biodata)->honours_ongoing_year ?? '' }}"
                                            />
                                            <span class="text-danger error-message" id="error-honours_ongoing_year"></span>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="biodata_field">
                                        <div class="biodata_label">
                                        <label
                                            >শিক্ষাপ্রতিষ্ঠানের নাম<span
                                            class="must-fillup-estaristic"
                                            >*</span
                                            ></label
                                        >
                                        </div>
                                        <div class="biodata_select">
                                        <div class="biodata_select">
                                            <input
                                            type="text"
                                            name="honours_ongoing_institut"
                                            class="input-filup-text"
                                                value="{{ optional($biodata)->honours_ongoing_institut ?? '' }}"
                                            />
                                            <span class="text-danger error-message" id="error-honours_ongoing_institut"></span>
                                        </div>
                                        </div>
                                    </div>

                                </div>
                                <!--HONOURS_ONGOING END-->
                                <!-- HONOURS START-->
                                <div class="honours-field">
                                    {{-- ssc_field --}}
                                        <div class="biodata_field">
                                            <div class="biodata_label">
                                                <label
                                                >কত সালে এসএসসি/দাখিল বা সমমান পাস করেছেন?<span
                                                    class="must-fillup-estaristic"
                                                    >*</span
                                                ></label
                                                >
                                            </div>
                                            <div class="biodata_select">
                                                <div class="biodata_select">
                                                <input
                                                    type="text"
                                                    name="honours_ssc_passing_year"
                                                    class="input-filup-text"
                                                    value="{{ optional($biodata)->highest_education == 'honours' ? optional($biodata)->ssc_passing_year : '' }}"
                                                />
                                                <span class="text-danger error-message" id="error-honours_ssc_passing_year"></span>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="biodata_field">
                                            <div class="biodata_label">
                                                <label>বিভাগ <span class="must-fillup-estaristic">*</span></label>
                                            </div>
                                            <div class="biodata_select">
                                                <select
                                                name="honours_ssc_education_category"
                                                class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                                style="width: 100%"
                                                >
                                                <option value="">নির্বাচন করুন</option>
                                                <option value="science" {{ (optional($biodata)->highest_education == 'honours' && optional($biodata)->ssc_education_category == 'science') ? 'selected' : '' }}>বিজ্ঞান</option>
                                                <option value="humanities" {{ (optional($biodata)->highest_education == 'honours' && optional($biodata)->ssc_education_category == 'humanities') ? 'selected' : '' }}>মানবিক</option>
                                                <option value="business" {{ (optional($biodata)->highest_education == 'honours' && optional($biodata)->ssc_education_category == 'business') ? 'selected' : '' }}>ব্যবসা</option>
                                                <option value="vocational" {{ (optional($biodata)->highest_education == 'honours' && optional($biodata)->ssc_education_category == 'vocational') ? 'selected' : '' }}>ভোকেশনাল</option>
                                                </select>
                                                <span class="text-danger error-message" id="error-honours_ssc_education_category"></span>
                                            </div>
                                            </div>
                                            <div class="biodata_field">
                                                <div class="biodata_label">
                                                <label>ফলাফল<span class="must-fillup-estaristic">*</span></label>
                                                </div>
                                                <div class="biodata_select">
                                                <select
                                                    name="honours_ssc_result"
                                                    class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                                    style="width: 100%"
                                                >
                                                    <option value="">নির্বাচন করুন</option>
                                                    <option value="A+" {{ (optional($biodata)->highest_education == 'honours' && optional($biodata)->ssc_result == 'A+') ? 'selected' : '' }}>A+</option>
                                                    <option value="A-" {{ (optional($biodata)->highest_education == 'honours' && optional($biodata)->ssc_result == 'A-') ? 'selected' : '' }}>A-</option>
                                                    <option value="B+" {{ (optional($biodata)->highest_education == 'honours' && optional($biodata)->ssc_result == 'B+') ? 'selected' : '' }}>B+</option>
                                                    <option value="B-" {{ (optional($biodata)->highest_education == 'honours' && optional($biodata)->ssc_result == 'B-') ? 'selected' : '' }}>B-</option>
                                                    <option value="C" {{ (optional($biodata)->highest_education == 'honours' && optional($biodata)->ssc_result == 'C') ? 'selected' : '' }}>C</option>
                                                    <option value="D" {{ (optional($biodata)->highest_education == 'honours' && optional($biodata)->ssc_result == 'D') ? 'selected' : '' }}>D</option>
                                                </select>
                                                <span class="text-danger error-message" id="error-honours_ssc_result"></span>
                                                </div>
                                                </div>

                                    {{-- ssc_field --}}
                                    <div class="biodata_field">
                                        <div class="biodata_label">
                                        <label>এসএসসি’র পর কোন মাধ্যমে পড়েছেন?<span class="must-fillup-estaristic">*</span></label>
                                        </div>
                                        <div class="biodata_select">
                                        <select
                                            name="honours_after_ssc_education"
                                            id="after_ssc_education_02"
                                            class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                            style="width: 100%"
                                        >
                                            <option value="">নির্বাচন করুন</option>
                                            <option value="hsc_education" {{ (optional($biodata)->highest_education == 'honours' && optional($biodata)->after_ssc_education == 'hsc_education') ? 'selected' : '' }}>এইচএসসি</option>
                                            <option value="diploma_education" {{ (optional($biodata)->highest_education == 'honours' && optional($biodata)->after_ssc_education == 'diploma_education') ? 'selected' : '' }}>ডিপ্লোমা</option>
                                        </select>
                                            <span class="text-danger error-message" id="error-honours_after_ssc_education"></span>
                                        </div>
                                        </div>
                                    <div class="after-ssc-field-01">
                                        {{-- hsc_field --}}
                                            <div class="biodata_field">
                                                <div class="biodata_label">
                                                    <label
                                                    >কত সালে এইচএসসি/আলিম বা সমমান পাস করেছেন<span
                                                        class="must-fillup-estaristic"
                                                        >*</span
                                                    ></label
                                                    >
                                                </div>
                                                <div class="biodata_select">
                                                    <div class="biodata_select">
                                                    <input
                                                        type="text"
                                                        name="honours_hsc_passing_year"
                                                        class="input-filup-text"
                                                        value="{{ optional($biodata)->highest_education == 'honours' ? optional($biodata)->hsc_passing_year : '' }}"
                                                    />
                                                    <span class="text-danger error-message" id="error-honours_hsc_passing_year"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="biodata_field">
                                                <div class="biodata_label">
                                                    <label>বিভাগ <span class="must-fillup-estaristic">*</span></label>
                                                </div>
                                                <div class="biodata_select">
                                                    <select
                                                    name="honours_hsc_edu_category"
                                                    class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                                    style="width: 100%"
                                                    >
                                                    <option value="">নির্বাচন করুন</option>
                                                    <option value="science" {{ (optional($biodata)->highest_education == 'honours' && optional($biodata)->hsc_education_category == 'science') ? 'selected' : '' }}>বিজ্ঞান</option>
                                                    <option value="humanities" {{ (optional($biodata)->highest_education == 'honours' && optional($biodata)->hsc_education_category == 'humanities') ? 'selected' : '' }}>মানবিক</option>
                                                    <option value="business" {{ (optional($biodata)->highest_education == 'honours' && optional($biodata)->hsc_education_category == 'business') ? 'selected' : '' }}>ব্যবসা</option>
                                                    <option value="vocational" {{ (optional($biodata)->highest_education == 'honours' && optional($biodata)->hsc_education_category == 'vocational') ? 'selected' : '' }}>ভোকেশনাল</option>
                                                    </select>
                                                    <span class="text-danger error-message" id="error-honours_hsc_edu_category"></span>
                                                </div>
                                            </div>
                                            <div class="biodata_field">
                                                    <div class="biodata_label">
                                                    <label>ফলাফল<span class="must-fillup-estaristic">*</span></label>
                                                    </div>
                                                <div class="biodata_select">
                                                    <select
                                                        name="honours_hsc_result"
                                                        class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                                        style="width: 100%"
                                                    >
                                                        <option value="">নির্বাচন করুন</option>
                                                        <option value="A+" {{ (optional($biodata)->highest_education == 'honours' && optional($biodata)->hsc_result == 'A+') ? 'selected' : '' }}>A+</option>
                                                        <option value="A-" {{ (optional($biodata)->highest_education == 'honours' && optional($biodata)->hsc_result == 'A-') ? 'selected' : '' }}>A-</option>
                                                        <option value="B+" {{ (optional($biodata)->highest_education == 'honours' && optional($biodata)->hsc_result == 'B+') ? 'selected' : '' }}>B+</option>
                                                        <option value="B-" {{ (optional($biodata)->highest_education == 'honours' && optional($biodata)->hsc_result == 'B-') ? 'selected' : '' }}>B-</option>
                                                        <option value="C" {{ (optional($biodata)->highest_education == 'honours' && optional($biodata)->hsc_result == 'C') ? 'selected' : '' }}>C</option>
                                                        <option value="D" {{ (optional($biodata)->highest_education == 'honours' && optional($biodata)->hsc_result == 'D') ? 'selected' : '' }}>D</option>
                                                    </select>
                                                    <span class="text-danger error-message" id="error-honours_hsc_result"></span>
                                                </div>
                                            </div>
                                        {{-- hsc_field --}}
                                    </div>
                                    <div class="after-ssc-field-02">
                                        {{-- diploma_field --}}
                                            <div class="biodata_field">
                                                <div class="biodata_label">
                                                    <label>কোন বিষয়ে ডিপ্লোমা পাস করেছেন?
                                                        <span class="must-fillup-estaristic">*</span>
                                                    </label>
                                                </div>
                                                <div class="biodata_select">
                                                    <div class="biodata_select">
                                                    <input
                                                        type="text"
                                                        name="honours_diploma_passing_subject"
                                                        class="input-filup-text"
                                                        value="{{ optional($biodata)->highest_education == 'honours' ? optional($biodata)->diploma_passing_subject : '' }}"
                                                    />
                                                    <span class="text-danger error-message" id="error-honours_diploma_passing_subject"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="biodata_field">
                                                <div class="biodata_label">
                                                    <label> ডিপ্লোমা পাসের সন
                                                        <span class="must-fillup-estaristic">*</span
                                                    ></label>
                                                </div>
                                                <div class="biodata_select">
                                                    <div class="biodata_select">
                                                    <input
                                                        type="text"
                                                        name="honours_diploma_passing_year"
                                                        class="input-filup-text"
                                                        value="{{ optional($biodata)->highest_education == 'honours' ? optional($biodata)->diploma_passing_year : '' }}"
                                                    />
                                                    <span class="text-danger error-message" id="error-honours_diploma_passing_year"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="biodata_field">
                                                <div class="biodata_label">
                                                    <label>শিক্ষাপ্রতিষ্ঠানের নাম
                                                        <span class="must-fillup-estaristic">*</span
                                                    ></label>
                                                </div>
                                                <div class="biodata_select">
                                                    <div class="biodata_select">
                                                    <input
                                                        type="text"
                                                        name="honours_diploma_passing_institut"
                                                        class="input-filup-text"
                                                        value="{{ optional($biodata)->highest_education == 'honours' ? optional($biodata)->diploma_passing_institut : '' }}"
                                                    />
                                                    <span class="text-danger error-message" id="error-honours_diploma_passing_institut"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        {{-- diploma_field --}}
                                    </div>
                                        {{-- honours_field --}}
                                            <div class="biodata_field">
                                                <div class="biodata_label">
                                                    <label
                                                    >কোন বিষয়ে অনার্স/ ফাজিল পাস করেছেন?<span
                                                        class="must-fillup-estaristic"
                                                        >*</span
                                                    ></label
                                                    >
                                                </div>
                                                <div class="biodata_select">
                                                    <div class="biodata_select">
                                                    <input
                                                        type="text"
                                                        name="honours_passing_subject"
                                                        class="input-filup-text"
                                                        value="{{ optional($biodata)->highest_education == 'honours' ? optional($biodata)->honours_passing_subject : '' }}"
                                                    />
                                                    <span class="text-danger error-message" id="error-honours_passing_subject"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="biodata_field">
                                                <div class="biodata_label">
                                                    <label
                                                    >অনার্স/ ফাজিল পাসের সন<span
                                                        class="must-fillup-estaristic"
                                                        >*</span
                                                    ></label
                                                    >
                                                </div>
                                                <div class="biodata_select">
                                                    <div class="biodata_select">
                                                    <input
                                                        type="text"
                                                        name="honours_passing_year"
                                                        class="input-filup-text"
                                                        value="{{ optional($biodata)->highest_education == 'honours' ? optional($biodata)->honours_passing_year : '' }}"
                                                    />
                                                    <span class="text-danger error-message" id="error-honours_passing_year"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="biodata_field">
                                                <div class="biodata_label">
                                                    <label
                                                    >শিক্ষাপ্রতিষ্ঠানের নাম<span
                                                        class="must-fillup-estaristic"
                                                        >*</span
                                                    ></label
                                                    >
                                                </div>
                                                <div class="biodata_select">
                                                    <div class="biodata_select">
                                                    <input
                                                        type="text"
                                                        name="honours_passing_institut"
                                                        class="input-filup-text"
                                                        value="{{ optional($biodata)->highest_education == 'honours' ? optional($biodata)->honours_passing_institut : '' }}"
                                                    />
                                                    <span class="text-danger error-message" id="error-honours_passing_institut"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        {{-- honours_field --}}
                                </div>
                                <!--HONOURS END-->
                                <!-- MASTERS START-->
                                <div class="masters-field">
                                    {{-- ssc_field --}}
                                        <div class="biodata_field">
                                            <div class="biodata_label">
                                                <label
                                                >কত সালে এসএসসি/দাখিল বা সমমান পাস করেছেন<span
                                                    class="must-fillup-estaristic"
                                                    >*</span
                                                ></label
                                                >
                                            </div>
                                            <div class="biodata_select">
                                                <div class="biodata_select">
                                                <input
                                                    type="text"
                                                    name="masters_ssc_passing_year"
                                                    class="input-filup-text"
                                                    value="{{ optional($biodata)->highest_education == 'masters' ? optional($biodata)->ssc_passing_year : '' }}"
                                                />
                                                <span class="text-danger error-message" id="error-masters_ssc_passing_year"></span>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="biodata_field">
                                            <div class="biodata_label">
                                                <label>বিভাগ <span class="must-fillup-estaristic">*</span></label>
                                            </div>
                                            <div class="biodata_select">
                                                <select
                                                name="masters_ssc_education_category"
                                                class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                                style="width: 100%"
                                                >
                                                <option value="">নির্বাচন করুন</option>
                                                <option value="science" {{ (optional($biodata)->highest_education == 'masters' && optional($biodata)->ssc_education_category == 'science') ? 'selected' : '' }}>বিজ্ঞান</option>
                                                <option value="humanities" {{ (optional($biodata)->highest_education == 'masters' && optional($biodata)->ssc_education_category == 'humanities') ? 'selected' : '' }}>মানবিক</option>
                                                <option value="business" {{ (optional($biodata)->highest_education == 'masters' && optional($biodata)->ssc_education_category == 'business') ? 'selected' : '' }}>ব্যবসা</option>
                                                <option value="vocational" {{ (optional($biodata)->highest_education == 'masters' && optional($biodata)->ssc_education_category == 'vocational') ? 'selected' : '' }}>ভোকেশনাল</option>
                                                </select>
                                                <span class="text-danger error-message" id="error-masters_ssc_education_category"></span>
                                            </div>
                                            </div>
                                            <div class="biodata_field">
                                                <div class="biodata_label">
                                                <label>ফলাফল<span class="must-fillup-estaristic">*</span></label>
                                                </div>
                                                <div class="biodata_select">
                                                <select
                                                    name="masters_ssc_result"
                                                    class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                                    style="width: 100%"
                                                >
                                                    <option value="">নির্বাচন করুন</option>
                                                    <option value="A+" {{ (optional($biodata)->highest_education == 'masters' && optional($biodata)->ssc_result == 'A+') ? 'selected' : '' }}>A+</option>
                                                    <option value="A-" {{ (optional($biodata)->highest_education == 'masters' && optional($biodata)->ssc_result == 'A-') ? 'selected' : '' }}>A-</option>
                                                    <option value="B+" {{ (optional($biodata)->highest_education == 'masters' && optional($biodata)->ssc_result == 'B+') ? 'selected' : '' }}>B+</option>
                                                    <option value="B-" {{ (optional($biodata)->highest_education == 'masters' && optional($biodata)->ssc_result == 'B-') ? 'selected' : '' }}>B-</option>
                                                    <option value="C" {{ (optional($biodata)->highest_education == 'masters' && optional($biodata)->ssc_result == 'C') ? 'selected' : '' }}>C</option>
                                                    <option value="D" {{ (optional($biodata)->highest_education == 'masters' && optional($biodata)->ssc_result == 'D') ? 'selected' : '' }}>D</option>
                                                </select>
                                                <span class="text-danger error-message" id="error-masters_ssc_result"></span>
                                                </div>
                                                </div>
                                    {{-- ssc_field --}}
                                    <div class="biodata_field">
                                        <div class="biodata_label">
                                        <label>এসএসসি’র পর কোন মাধ্যমে পড়েছেন?<span class="must-fillup-estaristic">*</span></label>
                                        </div>
                                        <div class="biodata_select">
                                        <select
                                            name="masters_after_ssc_education"
                                            id="after_ssc_education_03"
                                            class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                            style="width: 100%"
                                        >
                                            <option value="">নির্বাচন করুন</option>
                                            <option value="hsc_education" {{ (optional($biodata)->highest_education == 'masters' && optional($biodata)->after_ssc_education == 'hsc_education') ? 'selected' : '' }}>এইচএসসি</option>
                                            <option value="diploma_education" {{ (optional($biodata)->highest_education == 'masters' && optional($biodata)->after_ssc_education == 'diploma_education') ? 'selected' : '' }}>ডিপ্লোমা</option>
                                        </select>
                                            <span class="text-danger error-message" id="error-masters_after_ssc_education"></span>
                                        </div>
                                        </div>
                                    <div class="after-ssc-field-01">
                                        {{-- hsc_field --}}
                                            <div class="biodata_field">
                                                <div class="biodata_label">
                                                    <label
                                                    >কত সালে এইচএসসি/আলিম বা সমমান পাস করেছেন<span
                                                        class="must-fillup-estaristic"
                                                        >*</span
                                                    ></label
                                                    >
                                                </div>
                                                <div class="biodata_select">
                                                    <div class="biodata_select">
                                                    <input
                                                        type="text"
                                                        name="masters_hsc_passing_year"
                                                        class="input-filup-text"
                                                        value="{{ optional($biodata)->highest_education == 'masters' ? optional($biodata)->hsc_passing_year : '' }}"
                                                    />
                                                    <span class="text-danger error-message" id="error-masters_hsc_passing_year"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="biodata_field">
                                                <div class="biodata_label">
                                                    <label>বিভাগ <span class="must-fillup-estaristic">*</span></label>
                                                </div>
                                                <div class="biodata_select">
                                                    <select
                                                    name="masters_hsc_edu_category"
                                                    class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                                    style="width: 100%"
                                                    >
                                                    <option value="">নির্বাচন করুন</option>
                                                    <option value="science" {{ (optional($biodata)->highest_education == 'masters' && optional($biodata)->hsc_education_category == 'science') ? 'selected' : '' }}>বিজ্ঞান</option>
                                                    <option value="humanities" {{ (optional($biodata)->highest_education == 'masters' && optional($biodata)->hsc_education_category == 'humanities') ? 'selected' : '' }}>মানবিক</option>
                                                    <option value="business" {{ (optional($biodata)->highest_education == 'masters' && optional($biodata)->hsc_education_category == 'business') ? 'selected' : '' }}>ব্যবসা</option>
                                                    <option value="vocational" {{ (optional($biodata)->highest_education == 'masters' && optional($biodata)->hsc_education_category == 'vocational') ? 'selected' : '' }}>ভোকেশনাল</option>
                                                    </select>
                                                    <span class="text-danger error-message" id="error-masters_hsc_edu_category"></span>
                                                </div>
                                            </div>
                                            <div class="biodata_field">
                                                    <div class="biodata_label">
                                                    <label>ফলাফল<span class="must-fillup-estaristic">*</span></label>
                                                    </div>
                                                <div class="biodata_select">
                                                    <select
                                                        name="masters_hsc_result"
                                                        class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                                        style="width: 100%"
                                                    >
                                                        <option value="">নির্বাচন করুন</option>
                                                        <option value="A+" {{ (optional($biodata)->highest_education == 'masters' && optional($biodata)->hsc_result == 'A+') ? 'selected' : '' }}>A+</option>
                                                        <option value="A-" {{ (optional($biodata)->highest_education == 'masters' && optional($biodata)->hsc_result == 'A-') ? 'selected' : '' }}>A-</option>
                                                        <option value="B+" {{ (optional($biodata)->highest_education == 'masters' && optional($biodata)->hsc_result == 'B+') ? 'selected' : '' }}>B+</option>
                                                        <option value="B-" {{ (optional($biodata)->highest_education == 'masters' && optional($biodata)->hsc_result == 'B-') ? 'selected' : '' }}>B-</option>
                                                        <option value="C" {{ (optional($biodata)->highest_education == 'masters' && optional($biodata)->hsc_result == 'C') ? 'selected' : '' }}>C</option>
                                                        <option value="D" {{ (optional($biodata)->highest_education == 'masters' && optional($biodata)->hsc_result == 'D') ? 'selected' : '' }}>D</option>
                                                    </select>
                                                    <span class="text-danger error-message" id="error-masters_hsc_result"></span>
                                                </div>
                                            </div>
                                        {{-- hsc_field --}}
                                    </div>
                                    <div class="after-ssc-field-02">
                                        {{-- diploma_field --}}
                                            <div class="biodata_field">
                                                <div class="biodata_label">
                                                    <label>কোন বিষয়ে ডিপ্লোমা পাস করেছেন?
                                                        <span class="must-fillup-estaristic">*</span>
                                                    </label>
                                                </div>
                                                <div class="biodata_select">
                                                    <div class="biodata_select">
                                                    <input
                                                        type="text"
                                                        name="masters_diploma_passing_subject"
                                                        class="input-filup-text"
                                                        value="{{ optional($biodata)->highest_education == 'masters' ? optional($biodata)->diploma_passing_subject : '' }}"
                                                    />
                                                    <span class="text-danger error-message" id="error-masters_diploma_passing_subject"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="biodata_field">
                                                <div class="biodata_label">
                                                    <label> ডিপ্লোমা পাসের সন
                                                        <span class="must-fillup-estaristic">*</span
                                                    ></label>
                                                </div>
                                                <div class="biodata_select">
                                                    <div class="biodata_select">
                                                    <input
                                                        type="text"
                                                        name="masters_diploma_passing_year"
                                                        class="input-filup-text"
                                                        value="{{ optional($biodata)->highest_education == 'masters' ? optional($biodata)->diploma_passing_year : '' }}"
                                                    />
                                                    <span class="text-danger error-message" id="error-masters_diploma_passing_year"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="biodata_field">
                                                <div class="biodata_label">
                                                    <label>শিক্ষাপ্রতিষ্ঠানের নাম
                                                        <span class="must-fillup-estaristic">*</span
                                                    ></label>
                                                </div>
                                                <div class="biodata_select">
                                                    <div class="biodata_select">
                                                    <input
                                                        type="text"
                                                        name="masters_diploma_passing_institut"
                                                        class="input-filup-text"
                                                        value="{{ optional($biodata)->highest_education == 'masters' ? optional($biodata)->diploma_passing_institut : '' }}"
                                                    />
                                                    <span class="text-danger error-message" id="error-masters_diploma_passing_institut"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        {{-- diploma_field --}}
                                    </div>
                                        {{-- honours_field --}}
                                            <div class="biodata_field">
                                                <div class="biodata_label">
                                                    <label
                                                    >কোন বিষয়ে অনার্স/ ফাজিল পাস করেছেন?<span
                                                        class="must-fillup-estaristic"
                                                        >*</span
                                                    ></label
                                                    >
                                                </div>
                                                <div class="biodata_select">
                                                    <div class="biodata_select">
                                                    <input
                                                        type="text"
                                                        name="masters_honours_passing_subject"
                                                        class="input-filup-text"
                                                        value="{{ optional($biodata)->highest_education == 'masters' ? optional($biodata)->honours_passing_subject : '' }}"
                                                    />
                                                    <span class="text-danger error-message" id="error-masters_honours_passing_subject"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="biodata_field">
                                                <div class="biodata_label">
                                                    <label
                                                    >অনার্স/ ফাজিল পাসের সন<span
                                                        class="must-fillup-estaristic"
                                                        >*</span
                                                    ></label
                                                    >
                                                </div>
                                                <div class="biodata_select">
                                                    <div class="biodata_select">
                                                    <input
                                                        type="text"
                                                        name="masters_honours_passing_year"
                                                        class="input-filup-text"
                                                        value="{{ optional($biodata)->highest_education == 'masters' ? optional($biodata)->honours_passing_year : '' }}"
                                                    />
                                                    <span class="text-danger error-message" id="error-masters_honours_passing_year"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="biodata_field">
                                                <div class="biodata_label">
                                                    <label
                                                    >শিক্ষাপ্রতিষ্ঠানের নাম<span
                                                        class="must-fillup-estaristic"
                                                        >*</span
                                                    ></label
                                                    >
                                                </div>
                                                <div class="biodata_select">
                                                    <div class="biodata_select">
                                                    <input
                                                        type="text"
                                                        name="masters_honours_passing_institut"
                                                        class="input-filup-text"
                                                        value="{{ optional($biodata)->highest_education == 'masters' ? optional($biodata)->honours_passing_institut : '' }}"
                                                    />
                                                    <span class="text-danger error-message" id="error-masters_honours_passing_institut"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        {{-- honours_field --}}
                                    <div class="biodata_field">
                                        <div class="biodata_label">
                                        <label
                                            >কোন বিষয়ে মাস্টার্স/ কামিল পাস করেছেন?<span
                                            class="must-fillup-estaristic"
                                            >*</span
                                            ></label
                                        >
                                        </div>
                                        <div class="biodata_select">
                                        <div class="biodata_select">
                                            <input
                                            type="text"
                                            name="masters_passing_subject"
                                            class="input-filup-text"
                                                value="{{ optional($biodata)->masters_passing_subject ?? '' }}"
                                            />
                                            <span class="text-danger error-message" id="error-masters_passing_subject"></span>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="biodata_field">
                                        <div class="biodata_label">
                                        <label
                                            >মাস্টার্স/ কামিল পাসের সন<span
                                            class="must-fillup-estaristic"
                                            >*</span
                                            ></label
                                        >
                                        </div>
                                        <div class="biodata_select">
                                        <div class="biodata_select">
                                            <input
                                            type="text"
                                            name="masters_passing_year"
                                            class="input-filup-text"
                                                value="{{ optional($biodata)->masters_passing_year ?? '' }}"
                                            />
                                            <span class="text-danger error-message" id="error-masters_passing_year"></span>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="biodata_field">
                                        <div class="biodata_label">
                                        <label
                                            >শিক্ষাপ্রতিষ্ঠানের নাম<span
                                            class="must-fillup-estaristic"
                                            >*</span
                                            ></label
                                        >
                                        </div>
                                        <div class="biodata_select">
                                        <div class="biodata_select">
                                            <input
                                            type="text"
                                            name="masters_passing_institut"
                                            class="input-filup-text"
                                                value="{{ optional($biodata)->masters_passing_institut ?? '' }}"
                                            />
                                            <span class="text-danger error-message" id="error-masters_passing_institut"></span>
                                        </div>
                                        </div>
                                    </div>

                                </div>
                                <!--MASTERS END-->


                                <!-- IBTIDAIYAH START-->
                                <div class="ibtidaiyah_field">
                                    <div class="biodata_field">
                                    <div class="biodata_label">
                                        <label
                                        >কত সালে ইবতিদাইয়্যাহ পাস করেছেন?<span
                                            class="must-fillup-estaristic"
                                            >*</span
                                        ></label
                                        >
                                    </div>
                                    <div class="biodata_select">
                                        <div class="biodata_select">
                                        <input
                                            type="text"
                                            name="ibtidaiyah_passing_year"
                                            class="input-filup-text"
                                            value="{{ optional($biodata)->ibtidaiyah_passing_year ?? '' }}"
                                        />
                                            <span class="text-danger error-message" id="error-ibtidaiyah_passing_year"></span>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="biodata_field">
                                    <div class="biodata_label">
                                        <label>ফলাফল<span class="must-fillup-estaristic">*</span></label>
                                    </div>
                                    <div class="biodata_select">
                                        <select
                                        name="ibtidaiyah_result"
                                        class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                        style="width: 100%"
                                        >
                                            <option value="">নির্বাচন করুন</option>
                                            <option value="mumtaz" {{ optional($biodata)->ibtidaiyah_result == 'mumtaz' ? 'selected' : '' }}>মুমতায</option>
                                            <option value="jayyid_jiddan" {{ optional($biodata)->ibtidaiyah_result == 'jayyid_jiddan' ? 'selected' : '' }}>জায়্যিদ জিদ্দান</option>
                                            <option value="jayyid" {{ optional($biodata)->ibtidaiyah_result == 'jayyid' ? 'selected' : '' }}>জায়্যিদ</option>
                                            <option value="maqbul" {{ optional($biodata)->ibtidaiyah_result == 'maqbul' ? 'selected' : '' }}>মাকবুল</option>
                                        </select>
                                        <span class="text-danger error-message" id="error-ibtidaiyah_result"></span>
                                    </div>
                                    </div>
                                        <div class="biodata_field">
                                        <div class="biodata_label">
                                            <label
                                            >মাদ্রারাসার নাম<span
                                                class="must-fillup-estaristic"
                                                >*</span
                                            ></label
                                            >
                                        </div>
                                        <div class="biodata_select">
                                            <div class="biodata_select">
                                            <input
                                                type="text"
                                                name="ibtidaiyah_madrasa_name"
                                                class="input-filup-text"
                                                value="{{ optional($biodata)->ibtidaiyah_madrasa_name ?? '' }}"
                                            />
                                                <span class="text-danger error-message" id="error-ibtidaiyah_madrasa_name"></span>
                                            </div>
                                        </div>
                                        </div>
                                </div>
                                <!--IBTIDAIYAH END-->
                                <!-- MUTAWASITA START-->
                                <div class="mutawasita_field">
                                <div class="biodata_field">
                                    <div class="biodata_label">
                                    <label
                                        >কত সালে মুতাওয়াসসিতাহ পাস করেছেন?<span
                                        class="must-fillup-estaristic"
                                        >*</span
                                        ></label
                                    >
                                    </div>
                                    <div class="biodata_select">
                                    <div class="biodata_select">
                                        <input
                                        type="text"
                                        name="mutawasita_passing_year"
                                        class="input-filup-text"
                                            value="{{ optional($biodata)->mutawasita_passing_year ?? '' }}"
                                        />
                                        <span class="text-danger error-message" id="error-mutawasita_passing_year"></span>
                                    </div>
                                    </div>
                                </div>
                                <div class="biodata_field">
                                    <div class="biodata_label">
                                    <label>ফলাফল<span class="must-fillup-estaristic">*</span></label>
                                    </div>
                                    <div class="biodata_select">
                                    <select
                                        name="mutawasita_result"
                                        class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                        style="width: 100%"
                                    >
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="mumtaz" {{ optional($biodata)->mutawasita_result == 'mumtaz' ? 'selected' : '' }}>মুমতায</option>
                                        <option value="jayyid_jiddan" {{ optional($biodata)->mutawasita_result == 'jayyid_jiddan' ? 'selected' : '' }}>জায়্যিদ জিদ্দান</option>
                                        <option value="jayyid" {{ optional($biodata)->mutawasita_result == 'jayyid' ? 'selected' : '' }}>জায়্যিদ</option>
                                        <option value="maqbul" {{ optional($biodata)->mutawasita_result == 'maqbul' ? 'selected' : '' }}>মাকবুল</option>
                                    </select>
                                        <span class="text-danger error-message" id="error-mutawasita_result"></span>
                                    </div>
                                    </div>
                                    <div class="biodata_field">
                                        <div class="biodata_label">
                                        <label
                                            >মাদ্রারাসার নাম<span
                                            class="must-fillup-estaristic"
                                            >*</span
                                            ></label
                                        >
                                        </div>
                                        <div class="biodata_select">
                                        <div class="biodata_select">
                                            <input
                                            type="text"
                                            name="mutawasita_madrasa_name"
                                            class="input-filup-text"
                                                value="{{ optional($biodata)->mutawasita_madrasa_name ?? '' }}"
                                            />
                                            <span class="text-danger error-message" id="error-mutawasita_madrasa_name"></span>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <!--MUTAWASITA END-->
                                <!-- SANABIA_ULUIYA START-->
                                <div class="sanabia_uluiya_field">
                                    <div class="biodata_field">
                                    <div class="biodata_label">
                                        <label
                                        >কত সালে সানাবিয়া উলইয়া পাস করেছেন?<span
                                            class="must-fillup-estaristic"
                                            >*</span
                                        ></label
                                        >
                                    </div>
                                    <div class="biodata_select">
                                        <div class="biodata_select">
                                        <input
                                            type="text"
                                            name="sanabia_passing_year"
                                            class="input-filup-text"
                                            value="{{ optional($biodata)->sanabia_passing_year ?? '' }}"
                                        />
                                            <span class="text-danger error-message" id="error-sanabia_passing_year"></span>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="biodata_field">
                                    <div class="biodata_label">
                                        <label>ফলাফল<span class="must-fillup-estaristic">*</span></label>
                                    </div>
                                    <div class="biodata_select">
                                        <select
                                        name="sanabia_result"
                                        class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                        style="width: 100%"
                                        >
                                            <option value="">নির্বাচন করুন</option>
                                            <option value="mumtaz" {{ optional($biodata)->sanabia_result == 'mumtaz' ? 'selected' : '' }}>মুমতায</option>
                                            <option value="jayyid_jiddan" {{ optional($biodata)->sanabia_result == 'jayyid_jiddan' ? 'selected' : '' }}>জায়্যিদ জিদ্দান</option>
                                            <option value="jayyid" {{ optional($biodata)->sanabia_result == 'jayyid' ? 'selected' : '' }}>জায়্যিদ</option>
                                            <option value="maqbul" {{ optional($biodata)->sanabia_result == 'maqbul' ? 'selected' : '' }}>মাকবুল</option>
                                        </select>
                                        <span class="text-danger error-message" id="error-sanabia_result"></span>
                                    </div>
                                    </div>
                                        <div class="biodata_field">
                                        <div class="biodata_label">
                                            <label
                                            >মাদ্রারাসার নাম<span
                                                class="must-fillup-estaristic"
                                                >*</span
                                            ></label
                                            >
                                        </div>
                                        <div class="biodata_select">
                                            <div class="biodata_select">
                                            <input
                                                type="text"
                                                name="sanabia_madrasa_name"
                                                class="input-filup-text"
                                                value="{{ optional($biodata)->sanabia_madrasa_name ?? '' }}"
                                            />
                                                <span class="text-danger error-message" id="error-sanabia_madrasa_name"></span>
                                            </div>
                                        </div>
                                        </div>

                                </div>
                                <!--SANABIA_ULUIYA END-->
                                <!-- FAZILAT START-->
                                <div class="fazilat_field">
                                <div class="biodata_field">
                                    <div class="biodata_label">
                                    <label
                                        >কত সালে ফযীলত পাস করেছেন?<span
                                        class="must-fillup-estaristic"
                                        >*</span
                                        ></label
                                    >
                                    </div>
                                    <div class="biodata_select">
                                    <div class="biodata_select">
                                        <input
                                        type="text"
                                        name="fazilat_passing_year"
                                        class="input-filup-text"
                                            value="{{ optional($biodata)->fazilat_passing_year ?? '' }}"
                                        />
                                        <span class="text-danger error-message" id="error-fazilat_passing_year"></span>
                                    </div>
                                    </div>
                                </div>
                                <div class="biodata_field">
                                    <div class="biodata_label">
                                    <label>ফলাফল<span class="must-fillup-estaristic">*</span></label>
                                    </div>
                                    <div class="biodata_select">
                                    <select
                                        name="fazilat_result"
                                        class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                        style="width: 100%"
                                    >
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="mumtaz" {{ optional($biodata)->fazilat_result == 'mumtaz' ? 'selected' : '' }}>মুমতায</option>
                                        <option value="jayyid_jiddan" {{ optional($biodata)->fazilat_result == 'jayyid_jiddan' ? 'selected' : '' }}>জায়্যিদ জিদ্দান</option>
                                        <option value="jayyid" {{ optional($biodata)->fazilat_result == 'jayyid' ? 'selected' : '' }}>জায়্যিদ</option>
                                        <option value="maqbul" {{ optional($biodata)->fazilat_result == 'maqbul' ? 'selected' : '' }}>মাকবুল</option>
                                    </select>
                                        <span class="text-danger error-message" id="error-fazilat_result"></span>
                                    </div>
                                    </div>
                                    <div class="biodata_field">
                                        <div class="biodata_label">
                                        <label
                                            >মাদ্রারাসার নাম<span
                                            class="must-fillup-estaristic"
                                            >*</span
                                            ></label
                                        >
                                        </div>
                                        <div class="biodata_select">
                                        <div class="biodata_select">
                                            <input
                                            type="text"
                                            name="fazilat_madrasa_name"
                                            class="input-filup-text"
                                                value="{{ optional($biodata)->fazilat_madrasa_name ?? '' }}"
                                            />
                                            <span class="text-danger error-message" id="error-fazilat_madrasa_name"></span>
                                        </div>
                                        </div>
                                    </div>

                                </div>
                                <!--FAZILAT END-->
                                <!-- TAQMEEL START-->
                                <div class="taqmeel_field">
                                    {{-- taqmeel_field --}}
                                        <div class="biodata_field">
                                            <div class="biodata_label">
                                            <label
                                            >কত সালে তাকমীল পাস করেছেন?<span
                                                class="must-fillup-estaristic"
                                                >*</span
                                            ></label
                                            >
                                            </div>
                                            <div class="biodata_select">
                                            <div class="biodata_select">
                                            <input
                                                type="text"
                                                name="taqmeel_passing_year"
                                                class="input-filup-text"
                                                value="{{ optional($biodata)->highest_education == 'taqmeel' ? optional($biodata)->taqmeel_passing_year : '' }}"
                                            />
                                            <span class="text-danger error-message" id="error-taqmeel_passing_year"></span>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="biodata_field">
                                            <div class="biodata_label">
                                            <label>ফলাফল<span class="must-fillup-estaristic">*</span></label>
                                            </div>
                                            <div class="biodata_select">
                                            <select
                                            name="taqmeel_result"
                                            class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                            style="width: 100%"
                                            >
                                            <option value="">নির্বাচন করুন</option>
                                            <option value="mumtaz" {{ (optional($biodata)->highest_education == 'taqmeel' && optional($biodata)->taqmeel_result == 'mumtaz') ? 'selected' : '' }}>মুমতায</option>
                                            <option value="jayyid_jiddan" {{ (optional($biodata)->highest_education == 'taqmeel' && optional($biodata)->taqmeel_result == 'jayyid_jiddan') ? 'selected' : '' }}>জায়্যিদ জিদ্দান</option>
                                            <option value="jayyid" {{ (optional($biodata)->highest_education == 'taqmeel' && optional($biodata)->taqmeel_result == 'jayyid') ? 'selected' : '' }}>জায়্যিদ</option>
                                            <option value="maqbul" {{ (optional($biodata)->highest_education == 'taqmeel' && optional($biodata)->taqmeel_result == 'maqbul') ? 'selected' : '' }}>মাকবুল</option>
                                            </select>
                                            <span class="text-danger error-message" id="error-taqmeel_result"></span>
                                            </div>
                                        </div>
                                        <div class="biodata_field">
                                            <div class="biodata_label">
                                                <label
                                                >মাদ্রারাসার নাম<span
                                                    class="must-fillup-estaristic"
                                                    >*</span
                                                ></label
                                                >
                                            </div>
                                            <div class="biodata_select">
                                                <div class="biodata_select">
                                                <input
                                                    type="text"
                                                    name="taqmeel_madrasa_name"
                                                    class="input-filup-text"
                                                    value="{{ optional($biodata)->highest_education == 'taqmeel' ? optional($biodata)->taqmeel_madrasa_name : '' }}"
                                                />
                                                <span class="text-danger error-message" id="error-taqmeel_madrasa_name"></span>
                                                </div>
                                            </div>
                                        </div>
                                    {{-- taqmeel_field --}}
                                </div>
                                <!--TAQMEEL END-->
                                <!-- TAKHASSUS START-->
                                <div class="takhassus_field">
                                    {{-- taqmeel_field --}}
                                        <div class="biodata_field">
                                            <div class="biodata_label">
                                            <label
                                            >কত সালে তাকমীল পাস করেছেন?<span
                                                class="must-fillup-estaristic"
                                                >*</span
                                            ></label
                                            >
                                            </div>
                                            <div class="biodata_select">
                                            <div class="biodata_select">
                                            <input
                                                type="text"
                                                name="takhassus_taqmeel_passing_year"
                                                class="input-filup-text"
                                                value="{{ optional($biodata)->highest_education == 'takhassus' ? optional($biodata)->taqmeel_passing_year : '' }}"
                                            />
                                            <span class="text-danger error-message" id="error-takhassus_taqmeel_passing_year"></span>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="biodata_field">
                                            <div class="biodata_label">
                                            <label>ফলাফল<span class="must-fillup-estaristic">*</span></label>
                                            </div>
                                            <div class="biodata_select">
                                            <select
                                            name="takhassus_taqmeel_result"
                                            class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                            style="width: 100%"
                                            >
                                            <option value="">নির্বাচন করুন</option>
                                            <option value="mumtaz" {{ (optional($biodata)->highest_education == 'takhassus' && optional($biodata)->taqmeel_result == 'mumtaz') ? 'selected' : '' }}>মুমতায</option>
                                            <option value="jayyid_jiddan" {{ (optional($biodata)->highest_education == 'takhassus' && optional($biodata)->taqmeel_result == 'jayyid_jiddan') ? 'selected' : '' }}>জায়্যিদ জিদ্দান</option>
                                            <option value="jayyid" {{ (optional($biodata)->highest_education == 'takhassus' && optional($biodata)->taqmeel_result == 'jayyid') ? 'selected' : '' }}>জায়্যিদ</option>
                                            <option value="maqbul" {{ (optional($biodata)->highest_education == 'takhassus' && optional($biodata)->taqmeel_result == 'maqbul') ? 'selected' : '' }}>মাকবুল</option>
                                            </select>
                                            <span class="text-danger error-message" id="error-takhassus_taqmeel_result"></span>
                                            </div>
                                        </div>
                                        <div class="biodata_field">
                                            <div class="biodata_label">
                                                <label
                                                >মাদ্রারাসার নাম<span
                                                    class="must-fillup-estaristic"
                                                    >*</span
                                                ></label
                                                >
                                            </div>
                                            <div class="biodata_select">
                                                <div class="biodata_select">
                                                <input
                                                    type="text"
                                                    name="takhassus_taqmeel_madrasa_name"
                                                    class="input-filup-text"
                                                    value="{{ optional($biodata)->highest_education == 'takhassus' ? optional($biodata)->taqmeel_madrasa_name : '' }}"
                                                />
                                                <span class="text-danger error-message" id="error-takhassus_taqmeel_madrasa_name"></span>
                                                </div>
                                            </div>
                                        </div>
                                    {{-- taqmeel_field --}}
                                    <div class="biodata_field">
                                    <div class="biodata_label">
                                        <label
                                        >কোন বিষয়ে তাখাসসুস পাস করেছেন?<span
                                            class="must-fillup-estaristic"
                                            >*</span
                                        ></label
                                        >
                                    </div>
                                    <div class="biodata_select">
                                        <div class="biodata_select">
                                        <input
                                            type="text"
                                            name="takhassus_passing_subject"
                                            class="input-filup-text"
                                            value="{{ optional($biodata)->takhassus_passing_subject ?? '' }}"
                                        />
                                            <span class="text-danger error-message" id="error-takhassus_passing_subject"></span>
                                        </div>
                                    </div>
                                        </div>
                                        <div class="biodata_field">
                                    <div class="biodata_label">
                                        <label
                                        > তাখাসসুস পাসের সন<span
                                            class="must-fillup-estaristic"
                                            >*</span
                                        ></label
                                        >
                                    </div>
                                    <div class="biodata_select">
                                        <div class="biodata_select">
                                        <input
                                            type="text"
                                            name="takhassus_passing_year"
                                            class="input-filup-text"
                                            value="{{ optional($biodata)->takhassus_passing_year ?? '' }}"
                                        />
                                            <span class="text-danger error-message" id="error-takhassus_passing_year"></span>
                                        </div>
                                    </div>
                                        </div>
                                        <div class="biodata_field">
                                    <div class="biodata_label">
                                        <label>ফলাফল<span class="must-fillup-estaristic">*</span></label>
                                    </div>
                                    <div class="biodata_select">
                                        <select
                                        name="takhassus_result"
                                        class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                        style="width: 100%"
                                        >
                                            <option value="">নির্বাচন করুন</option>
                                            <option value="mumtaz" {{ optional($biodata)->takhassus_result == 'mumtaz' ? 'selected' : '' }}>মুমতায</option>
                                            <option value="jayyid_jiddan" {{ optional($biodata)->takhassus_result == 'jayyid_jiddan' ? 'selected' : '' }}>জায়্যিদ জিদ্দান</option>
                                            <option value="jayyid" {{ optional($biodata)->takhassus_result == 'jayyid' ? 'selected' : '' }}>জায়্যিদ</option>
                                            <option value="maqbul" {{ optional($biodata)->takhassus_result == 'maqbul' ? 'selected' : '' }}>মাকবুল</option>
                                        </select>
                                        <span class="text-danger error-message" id="error-takhassus_result"></span>
                                    </div>
                                    </div>
                                        <div class="biodata_field">
                                        <div class="biodata_label">
                                            <label
                                            >মাদ্রারাসার নাম<span
                                                class="must-fillup-estaristic"
                                                >*</span
                                            ></label
                                            >
                                        </div>
                                        <div class="biodata_select">
                                            <div class="biodata_select">
                                            <input
                                                type="text"
                                                name="takhassus_madrasa_name"
                                                class="input-filup-text"
                                                value="{{ optional($biodata)->takhassus_madrasa_name ?? '' }}"
                                            />
                                                <span class="text-danger error-message" id="error-takhassus_madrasa_name"></span>
                                            </div>
                                        </div>
                                        </div>
                                </div>
                                <!--TAKHASSUS END-->
                                <div class="biodata_field">
                                    <div class="biodata_label">
                                        <label>দ্বীনি যোগ্যতা</label>
                                    </div>
                                    <div class="biodata_select">
                                        <select
                                        name="religious_qualifi"
                                        class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                        style="width: 100%"
                                        >
                                            <option value="">নির্বাচন করুন</option>
                                            <option value="hafez" {{ optional($biodata)->religious_qualifi == 'hafez' ? 'selected' : '' }}>হাফেজ</option>

                                            <option value="Mawlana" {{ optional($biodata)->religious_qualifi == 'Mawlana' ? 'selected' : '' }}>মাওলানা</option>

                                            <option value="mufti" {{ optional($biodata)->religious_qualifi == 'mufti' ? 'selected' : '' }}>মুফতি</option>

                                            <option value="muufassir" {{ optional($biodata)->religious_qualifi == 'muufassir' ? 'selected' : '' }}>মুফাসিসর</option>
                                        </select>
                                        <span class="text-danger error-message" id="error-religious_qualifi"></span>
                                    </div>
                                    </div>
                                <div class="biodata_field">
                                    <div class="biodata_label">
                                    <label
                                        >অন্যান্য শিক্ষাগত যোগ্যতা</label
                                    >
                                    </div>
                                    <div class="biodata_select">
                                    <div class="biodata_select">
                                        <input
                                        type="text"
                                        name="other_educational"
                                        class="input-filup-text"
                                            value="{{ optional($biodata)->other_educational ?? '' }}"
                                        />
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="add_biodata_submit buttons">
                                    <button
                                    type="button"
                                    id="back3 "
                                    class="prevBtn back ds-button-border"
                                    >
                                    Back
                                    </button>
                                    <button
                                    type="submit"
                                    id="save_next3"
                                    class="nextBtn save_next ds-button"
                                    >
                                    Save & Next
                                    </button>
                                </div>
                            </form>
                            {{-- biodata alert --}}
                            <div id="address-alert" class=" alert-box biotada-alert" style="display: none">
                                <i class="fa-solid fa-circle-check"></i>
                                <span></span>
                                <div class="suc-progress-bar"></div>
                            </div>
                        </div>
                          <!-- {{-- Stap-4 --}} -->
                        <div class="add_biodata_content" id="dsdb_form_step_4" >
                            <form action="{{ route('family.information.store') }}"
                              method="POST"
                              id="family-information"
                                data-step="family"
                              >
                              <div class="biodata_form_content">
                                <div class="form_title">
                                  <h2>পারিবারিক তথ্য</h2>
                                </div>
                                <div class="biodata_field">
                                    <div class="biodata_label">
                                      <label
                                        >পরিবারের ধরন<span
                                          class="must-fillup-estaristic"
                                          >*</span
                                        ></label
                                      >
                                    </div>
                                    <div class="biodata_select">
                                      <select
                                        name="family_type"
                                        class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                        style="width: 100%"
                                      >
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="single_family" {{ optional($biodata)->family_type == 'single_family' ? 'selected' : '' }}>একক পরিবার</option>
                                        <option value="joint_family" {{ optional($biodata)->family_type == 'joint_family' ? 'selected' : '' }}>যৌথ পরিবার</option>
                                      </select>
                                      <span class="text-danger error-message" id="error-family_type"></span>
                                    </div>
                                  </div>
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label
                                      >আপনার পিতার নাম<span
                                        class="must-fillup-estaristic"
                                        >*</span
                                      ></label
                                    >
                                  </div>
                                  <div class="biodata_select">
                                    <input
                                      type="text"
                                      name="father_name"
                                      id="familyInfo"
                                      class="input-filup-text"
                                      value="{{ optional($biodata)->father_name ?? '' }}"
                                    />
                                    <span class="text-danger error-message" id="error-father_name"></span>
                                  </div>
                                  <div class="input-highlighter-text">
                                    <p>
                                      নামটি শুধুমাত্র কর্তৃপক্ষ বাদে
                                      অন্য কারও কাছে প্রকাশ করা হবে না
                                    </p>
                                  </div>

                                  <div class="biodata_select"></div>
                                </div>
                                <div class="biodata_field">
                                    <div class="biodata_label">
                                      <label>
                                        পিতার বর্তমান অবস্থা?
                                        <span class="must-fillup-estaristic">*</span>
                                      </label>
                                    </div>
                                    <div class="biodata_select">
                                      <select
                                        class="select2 aw-biodata-dropdown"
                                        style="width: 100%"
                                        name="father_current_condition"
                                      >
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="alive" {{ optional($biodata)->father_current_condition == 'alive' ? 'selected' : '' }}>জীবিত</option>
                                        <option value="dead" {{ optional($biodata)->father_current_condition == 'dead' ? 'selected' : '' }}>মৃত</option>
                                      </select>
                                      <span class="text-danger error-message" id="error-father_current_condition"></span>
                                    </div>
                                  </div>
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label
                                      >পিতার পেশা<span
                                        class="must-fillup-estaristic"
                                        >*</span
                                      ></label
                                    >
                                  </div>
                                  <div class="biodata_select">
                                    <div class="biodata_select">
                                      <input
                                        type="text"
                                        name="father_profession"
                                        class="input-filup-text"
                                        value="{{ optional($biodata)->father_profession ?? '' }}"
                                      />
                                      <span class="text-danger error-message" id="error-father_profession"></span>
                                    </div>
                                  </div>
                                  <div class="input-highlighter-text">
                                    <p>
                                      পিতার পেশা সম্পর্কে বিস্তারিত লিখবেন।
                                    </p>
                                  </div>
                                </div>
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label
                                      >আপনার মাতার নাম<span
                                        class="must-fillup-estaristic"
                                        >*</span
                                      ></label
                                    >
                                  </div>
                                  <div class="biodata_select">
                                    <input
                                      type="text"
                                      name="mother_name"
                                      class="input-filup-text"
                                      value="{{ optional($biodata)->mother_name ?? '' }}"
                                    />
                                    <span class="text-danger error-message" id="error-mother_name"></span>
                                  </div>
                                  <div class="input-highlighter-text">
                                    <p>
                                      নামটি শুধুমাত্র কর্তৃপক্ষ বাদে
                                      অন্য কারও কাছে প্রকাশ করা হবে না
                                    </p>
                                  </div>

                                  <div class="biodata_select"></div>
                                </div>
                                <div class="biodata_field">
                                    <div class="biodata_label">
                                      <label>
                                        মাতার বর্তমান অবস্থা
                                        <span class="must-fillup-estaristic">*</span>
                                      </label>
                                    </div>
                                    <div class="biodata_select">
                                      <select
                                        class="select2 aw-biodata-dropdown"
                                        style="width: 100%"
                                        name="mother_current_condition"
                                      >
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="alive" {{ optional($biodata)->mother_current_condition == 'alive' ? 'selected' : '' }}>জীবিত</option>
                                        <option value="dead" {{ optional($biodata)->mother_current_condition == 'dead' ? 'selected' : '' }}>মৃত</option>
                                      </select>
                                      <span class="text-danger error-message" id="error-mother_current_condition"></span>
                                    </div>
                                  </div>
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label
                                      >মাতার পেশা<span
                                        class="must-fillup-estaristic"
                                        >*</span
                                      ></label
                                    >
                                  </div>
                                  <div class="biodata_select">
                                    <input
                                      type="text"
                                      name="mother_profession"
                                      id=""
                                      class="input-filup-text"
                                      value="{{ optional($biodata)->mother_profession ?? '' }}"
                                    />
                                    <span class="text-danger error-message" id="error-mother_profession"></span>
                                  </div>
                                </div>
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label>
                                      আপনার ভাই কয়জন?
                                      <span class="must-fillup-estaristic">*</span>
                                    </label>
                                  </div>
                                  <div class="biodata_select brother-selection-field">
                                    <select
                                      name="brother_count"
                                      id="brother_count"
                                      class="select2 aw-biodata-dropdown"
                                      style="width: 100%"
                                      onchange="toggleBrotherInfo(this.value)"
                                    >
                                      <option value="">নির্বাচন করুন</option>
                                      <option value="1" {{ optional($biodata)->brother_count == '1' ? 'selected' : '' }}>১ জন</option>

                                      <option value="2" {{ optional($biodata)->brother_count == '2' ? 'selected' : '' }}>২ জন</option>

                                      <option value="3" {{ optional($biodata)->brother_count == '3' ? 'selected' : '' }}>৩ জন</option>

                                      <option value="4" {{ optional($biodata)->brother_count == '4' ? 'selected' : '' }}>৪ জন</option>

                                      <option value="5" {{ optional($biodata)->brother_count == '5' ? 'selected' : '' }}>৫ জন</option>

                                      <option value="6" {{ optional($biodata)->brother_count == '6' ? 'selected' : '' }}>৬ জন</option>

                                      <option value="7" {{ optional($biodata)->brother_count == '7' ? 'selected' : '' }}>৭ জন</option>

                                      <option value="8" {{ optional($biodata)->brother_count == '8' ? 'selected' : '' }}>৮ জন</option>

                                      <option value="9" {{ optional($biodata)->brother_count == '9' ? 'selected' : '' }}>৯ জন</option>

                                      <option value="10" {{ optional($biodata)->brother_count == '10' ? 'selected' : '' }}>১০ জন</option>

                                      <option value="none" {{ optional($biodata)->brother_count == 'none' ? 'selected' : '' }}>ভাই নেই</option>
                                    </select>
                                    <span class="text-danger error-message" id="error-brother_count"></span>
                                  </div>
                                </div>
                                <div class="biodata_field brother-info-field" style="display: none;">
                                  <div class="biodata_label">
                                    <label>
                                      ভাইদের সম্পর্কে তথ্য
                                      <span class="must-fillup-estaristic">*</span>
                                    </label>
                                  </div>
                                  <div class="biodata_select">
                                    <textarea
                                      name="brother_info"
                                      id="brother_info"
                                      class="input-filup-text"
                                    >{{ optional($biodata)->brother_info ?? '' }}</textarea>
                                    <span class="text-danger error-message" id="error-brother_info"></span>
                                  </div>
                                  <div class="input-highlighter-text">
                                    <p>
                                      ভাইদের শিক্ষাগত যোগ্যতা, বৈবাহিক ও বর্তমান অবস্থা ইত্যাদি সম্পর্কে লিখবেন
                                    </p>
                                  </div>
                                </div>
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label>
                                      আপনার বোন কয়জন?
                                      <span class="must-fillup-estaristic">*</span>
                                    </label>
                                  </div>
                                  <div class="biodata_select sister-selection-field">
                                    <select
                                      name="sister_count"
                                      id="sister_count"
                                      class="select2 aw-biodata-dropdown"
                                      style="width: 100%"
                                      onchange="toggleSisterInfo(this.value)"
                                    >
                                      <option value="">নির্বাচন করুন</option>
                                      <option value="1" {{ optional($biodata)->sister_count == '1' ? 'selected' : '' }}>১ জন</option>
                                      <option value="2" {{ optional($biodata)->sister_count == '2' ? 'selected' : '' }}>২ জন</option>
                                      <option value="3" {{ optional($biodata)->sister_count == '3' ? 'selected' : '' }}>৩ জন</option>
                                      <option value="4" {{ optional($biodata)->sister_count == '4' ? 'selected' : '' }}>৪ জন</option>
                                      <option value="5" {{ optional($biodata)->sister_count == '5' ? 'selected' : '' }}>৫ জন</option>
                                      <option value="6" {{ optional($biodata)->sister_count == '6' ? 'selected' : '' }}>৬ জন</option>
                                      <option value="7" {{ optional($biodata)->sister_count == '7' ? 'selected' : '' }}>৭ জন</option>
                                      <option value="8" {{ optional($biodata)->sister_count == '8' ? 'selected' : '' }}>৮ জন</option>
                                      <option value="9" {{ optional($biodata)->sister_count == '9' ? 'selected' : '' }}>৯ জন</option>
                                      <option value="10" {{ optional($biodata)->sister_count == '10' ? 'selected' : '' }}>১০ জন</option>
                                      <option value="none" {{ optional($biodata)->sister_count == 'none' ? 'selected' : '' }}>বোন নেই</option>
                                    </select>
                                    <span class="text-danger error-message" id="error-sister_count"></span>
                                  </div>
                                </div>

                                <div class="biodata_field sister-info-field" style="display: none;">
                                  <div class="biodata_label">
                                    <label>
                                      বোনদের সম্পর্কে তথ্য
                                      <span class="must-fillup-estaristic">*</span>
                                    </label>
                                  </div>
                                  <div class="biodata_select">
                                    <textarea
                                      name="sister_info"
                                      id="sister_info"
                                      class="input-filup-text"
                                    >{{ optional($biodata)->sister_info ?? '' }}</textarea>
                                    <span class="text-danger error-message" id="error-sister_info"></span>
                                  </div>
                                  <div class="input-highlighter-text">
                                    <p>
                                      বোনদের শিক্ষাগত যোগ্যতা, বৈবাহিক ও বর্তমান অবস্থা ইত্যাদি সম্পর্কে লিখবেন
                                    </p>
                                  </div>
                                </div>


                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label
                                      >চাচা ও মামাদের সম্পর্কে তথ্য<span
                                        class="must-fillup-estaristic"
                                        >*</span
                                      ></label
                                    >
                                  </div>
                                  <div class="biodata_select">
                                    <textarea
                                      name="uncles_info"
                                      class="input-filup-text"
                                    >{{ optional($biodata)->uncles_info ?? '' }}</textarea>
                                    <span class="text-danger error-message" id="error-uncles_info"></span>
                                  </div>
                                  <div class="input-highlighter-text">
                                    <p>
                                      তাদের পেশা ও বর্তমান অবস্থা ইত্যাদি সম্পর্কে
                                      লিখবেন
                                    </p>
                                  </div>
                                </div>
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label
                                      >পরিবারের অর্থনৈতিক অবস্থা<span
                                        class="must-fillup-estaristic"
                                        >*</span
                                      ></label
                                    >
                                  </div>
                                  <div class="biodata_select">
                                    <select
                                      name="family_financial_info"
                                      class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                      style="width: 100%"
                                      id=""
                                    >
                                      <option value="">নির্বাচন করুন</option>
                                      <option value="upper_class" {{ optional($biodata)->family_financial_info == 'upper_class' ? 'selected' : '' }}>উচ্চবিত্ত</option>

                                      <option value="upper_middle_class" {{ optional($biodata)->family_financial_info == 'upper_middle_class' ? 'selected' : '' }}>উচ্চ মধ্যবিত্ত</option>

                                      <option value="middle_class" {{ optional($biodata)->family_financial_info == 'middle_class' ? 'selected' : '' }}>মধ্যবিত্ত</option>

                                      <option value="lower_middle_class" {{ optional($biodata)->family_financial_info == 'lower_middle_class' ? 'selected' : '' }}> নিম্ন মধ্যবিত্ত</option>

                                      <option value="lower_class" {{ optional($biodata)->family_financial_info == 'lower_class' ? 'selected' : '' }}>নিম্নবিত্ত</option>
                                    </select>
                                    <span class="text-danger error-message" id="error-family_financial_info"></span>
                                  </div>
                                </div>
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label
                                      >অর্থনৈতিক ও সামাজিক অবস্থার বিবরন<span
                                        class="must-fillup-estaristic"
                                        >*</span
                                      ></label
                                    >
                                  </div>
                                  <div class="biodata_select">
                                    <textarea
                                      name="social_status_info"
                                      class="input-filup-text"
                                    >{{ optional($biodata)->social_status_info ?? '' }}</textarea>
                                    <span class="text-danger error-message" id="error-social_status_info"></span>
                                  </div>
                                  <div class="input-highlighter-text">
                                    <p>
                                      জমি, বাড়িঘর, পরিবারের আর্থিক আয়ের উৎস কি
                                      কি এবং সমাজে আপনাদের অবস্থান ইত্যাদি সম্পর্কে বিস্তারিত লিখবেন
                                    </p>
                                  </div>
                                </div>
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label>পরিবারের কোনো সদস্য কি মাজার/পীর/সুফিবাদের সাথে জড়িত?<span
                                      class="must-fillup-estaristic"
                                      >*</span
                                    ></label>
                                  </div>
                                  <div class="biodata_select">
                                    <input
                                      type="text"
                                      name="family_members_info"
                                      class="input-filup-text"
                                      value="{{ optional($biodata)->family_members_info ?? '' }}"
                                    />
                                    <span class="text-danger error-message" id="error-family_members_info"></span>
                                  </div>
                                </div>
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label
                                      >পরিবারের দ্বীনি অবস্থা কেমন?<span
                                        class="must-fillup-estaristic"
                                        >*</span
                                      ></label
                                    >
                                  </div>
                                  <div class="biodata_select">
                                    <textarea
                                      name="family_religious_status"
                                      id=""
                                      class="input-filup-text"
                                    >{{ optional($biodata)->family_religious_status ?? '' }}</textarea>
                                    <span class="text-danger error-message" id="error-family_religious_status"></span>
                                  </div>
                                  <div class="input-highlighter-text">
                                    <p>
                                     বাসায় পর্দা করার পরিবেশ আছে কিনা, দ্বীন পালনের ক্ষেত্রে পরিবারের সদস্যরা কতটা সচেতন ইত্যাদি বিষয়ে লিখবেন
                                    </p>
                                  </div>
                                </div>
                                <div class="add_biodata_submit buttons">
                                  <button
                                    type="button"
                                    id="back4 "
                                    class="prevBtn back ds-button-border"
                                  >
                                    Back
                                  </button>
                                  <button
                                    type="submit"
                                    id="save_next4"
                                    class="nextBtn save_next ds-button"
                                  >
                                    Save & Next
                                  </button>
                                </div>
                              </div>
                            </form>
                            {{-- biodata alert --}}
                            <div id="education-alert" class=" alert-box biotada-alert" style="display: none">
                                <i class="fa-solid fa-circle-check"></i>
                                <span></span>
                                <div class="suc-progress-bar"></div>
                            </div>
                        </div>
                          <!-- {{-- Stap-5 --}} -->
                        <div class="add_biodata_content" id="dsdb_form_step_5" >
                            <form
                              action="{{ route('parsonal.information.store') }}"
                              method="POST"
                              enctype="multipart/form-data"
                              id="parsonal-information"
                              data-step="parsonal">

                              <div class="biodata_form_content">
                                <div class="form_title">
                                  <h2>ব্যক্তিগত তথ্য</h2>
                                </div>
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label>নিয়মিত পাঁচ ওয়াক্ত সালাত আদায় করেন? কত সময় যাবৎ করছেন?<span
                                      class="must-fillup-estaristic"
                                      >*</span
                                    ></label>
                                  </div>
                                  <div class="biodata_select">
                                    <input
                                      type="text"
                                      name="salat_year"
                                      class="input-filup-text"
                                      value="{{ optional(optional($biodata)->subBiodata)->salat_year ?? '' }}"
                                    />
                                    <span class="text-danger error-message" id="error-salat_year"></span>
                                  </div>
                                </div>
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label>মাহরাম/গাইরে-মাহরাম মেনে চলেন কি?<span
                                      class="must-fillup-estaristic"
                                      >*</span
                                    ></label>
                                  </div>
                                  <div class="biodata_select">
                                    <input
                                      type="text"
                                      name="mahram_non_mahram"
                                      class="input-filup-text"
                                      value="{{ optional( optional($biodata)->subBiodata)->mahram_non_mahram ?? '' }}"
                                    />
                                    <span class="text-danger error-message" id="error-mahram_non_mahram"></span>
                                  </div>
                                </div>
                                    {{-- female --}}
                                    <div class="biodata_field ds-bride-detail-field">
                                    <div class="biodata_label">
                                        <label>কবে থেকে পরিপূর্ণ শরয়ী পর্দা করছেন? <span
                                        class="must-fillup-estaristic"
                                        >*</span
                                        ></label>
                                    </div>
                                    <div class="biodata_select">
                                        <input
                                        type="text"
                                        name="full_islamic_veil"
                                        class="input-filup-text"
                                        value="{{ optional(optional($biodata)->subBiodata)->full_islamic_veil ?? '' }}"
                                        />
                                        <span class="text-danger error-message" id="error-full_islamic_veil"></span>
                                    </div>
                                    <div class="input-highlighter-text">
                                        <p>
                                    যেমনঃ আনুমানিক চার বছর ধরে
                                        </p>
                                    </div>
                                    </div>
                                {{-- female --}}
                                <div class="biodata_field">
                                    <div class="biodata_label">
                                      <label>শুদ্ধভাবে কুরআন তিলাওয়াত করতে পারেন? <span
                                        class="must-fillup-estaristic"
                                        >*</span
                                      ></label>
                                    </div>
                                    <div class="biodata_select">
                                      <input
                                        type="text"
                                        name="quran_recitation"
                                        class="input-filup-text"
                                        value="{{ optional(optional($biodata)->subBiodata)->quran_recitation ?? '' }}"
                                      />
                                      <span class="text-danger error-message" id="error-quran_recitation"></span>
                                    </div>
                                  </div>
                                   {{-- male --}}
                                    <div class="biodata_field ds-groom-detail-field">
                                        <div class="biodata_label">
                                        <label>ওয়াজিব দাড়ি রেখেছেন কি? কত সময় যাবৎ রেখেছেন? <span
                                            class="must-fillup-estaristic"
                                            >*</span
                                        ></label>
                                        </div>
                                        <div class="biodata_select">
                                        <input
                                            type="text"
                                            name="obligatory_beard"
                                            class="input-filup-text"
                                            value="{{ optional(optional($biodata)->subBiodata)->obligatory_beard ?? '' }}"
                                        />
                                        <span class="text-danger error-message" id="error-obligatory_beard"></span>
                                        </div>
                                        <div class="input-highlighter-text">
                                        <p>
                                            যদি হরমোনজনিত কারণে দাড়ি কম ওঠে সেটা উল্লেখ করতে পারেন।
                                        </p>
                                        </div>
                                    </div>

                                    <div class="biodata_field ds-groom-detail-field">
                                        <div class="biodata_label">
                                        <label>টাখনুর উপর পোশাক পরেন?<span
                                            class="must-fillup-estaristic"
                                            >*</span
                                        ></label>
                                        </div>
                                        <div class="biodata_select">
                                        <input
                                            type="text"
                                            name="ankle_dress"
                                            class="input-filup-text"
                                            value="{{ optional(optional($biodata)->subBiodata)->ankle_dress ?? '' }}"
                                        />
                                        <span class="text-danger error-message" id="error-ankle_dress"></span>
                                        </div>
                                    </div>
                            {{-- male --}}
                                <div class="biodata_field">
                                    <div class="biodata_label">
                                      <label>ঘরের বাহিরে কোন ধরনের পোশাক পরেন? <span
                                        class="must-fillup-estaristic"
                                        >*</span
                                      ></label>
                                    </div>
                                    <div class="biodata_select">
                                      <input
                                        type="text"
                                        name="outside_outside_clothes"
                                        class="input-filup-text"
                                        value="{{ optional(optional($biodata)->subBiodata)->outside_outside_clothes ?? '' }}"
                                      />
                                      <span class="text-danger error-message" id="error-outside_outside_clothes"></span>
                                    </div>
                                  </div>
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label>কোন আকীদা/মাযহাব অনুসরন করেন? <span
                                      class="must-fillup-estaristic"
                                      >*</span
                                    ></label>
                                  </div>
                                  <div class="biodata_select">
                                    <select
                                      name="any_creed_sect"
                                      class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                      style="width: 100%"
                                    >
                                      <option value="">নির্বাচন করুন</option>
                                      <option value="salafi_ahlul" {{ optional(optional($biodata)->subBiodata)->any_creed_sect == 'salafi_ahlul' ? 'selected' : '' }}>সালাফি/আহলুল হাদিস</option>

                                      <option value="hanafi" {{ optional(optional($biodata)->subBiodata)->any_creed_sect == 'hanafi' ? 'selected' : '' }}>হানাাফি</option>

                                      <option value="maleki" {{ optional(optional($biodata)->subBiodata)->any_creed_sect == 'maleki' ? 'selected' : '' }}>মালেকি</option>

                                      <option value="shafyi" {{ optional(optional($biodata)->subBiodata)->any_creed_sect == 'shafyi' ? 'selected' : '' }}>শাফিঈ</option>

                                      <option value="hamboli" {{ optional(optional($biodata)->subBiodata)->any_creed_sect == 'hamboli' ? 'selected' : '' }}>হাম্বলি</option>
                                    </select>
                                    <span class="text-danger error-message" id="error-any_creed_sect"></span>
                                  </div>
                                </div>

                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label>আপনার পছন্দের অন্তত তিনটি ইসলামী বইয়ের নাম লিখুন<span
                                      class="must-fillup-estaristic"
                                      >*</span
                                    ></label>
                                  </div>
                                  <div class="biodata_select">
                                    <input
                                      type="text"
                                      name="favorite_islamic_book"
                                      class="input-filup-text"
                                      value="{{ optional(optional($biodata)->subBiodata)->favorite_islamic_book ?? '' }}"
                                    />
                                    <span class="text-danger error-message" id="error-favorite_islamic_book"></span>
                                  </div>
                                  <div class="input-highlighter-text">
                                    <p>
                                     পড়ে শেষ করেছেন এমন ইসলামী বইয়ের নাম লিখবেন
                                    </p>
                                  </div>
                                </div>
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label>আপনার পছন্দের অন্তত তিনজন আলেমের নাম লিখুন<span
                                      class="must-fillup-estaristic"
                                      >*</span
                                    ></label>
                                  </div>
                                  <div class="biodata_select">
                                    <input
                                      type="text"
                                      name="favorite_islamic_scholar"
                                      class="input-filup-text"
                                      value="{{ optional(optional($biodata)->subBiodata)->favorite_islamic_scholar ?? '' }}"
                                    />
                                    <span class="text-danger error-message" id="error-favorite_islamic_scholar"></span>
                                  </div>
                                </div>

                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label>শারীরিক বা মানসিক বড় কোনো রোগ আছে কি?<span
                                      class="must-fillup-estaristic"
                                      >*</span
                                    ></label>
                                  </div>
                                  <div class="biodata_select">
                                    <input
                                      type="text"
                                      name="physical_mental_condition"
                                      class="input-filup-text"
                                      value="{{ optional(optional($biodata)->subBiodata)->physical_mental_condition ?? '' }}"
                                    />
                                    <span class="text-danger error-message" id="error-physical_mental_condition"></span>
                                  </div>
                                </div>
                                    {{-- male --}}
                                        <div class="biodata_field ds-groom-detail-field">
                                            <div class="biodata_label">
                                            <label>কোন নেশাদার দ্রব্য খান/পান করেন?<span
                                                class="must-fillup-estaristic"
                                                >*</span
                                            ></label>
                                            </div>
                                            <div class="biodata_select">
                                            <input
                                                type="text"
                                                name="eat_drink_intoxicating"
                                                class="input-filup-text"
                                                value="{{ optional(optional($biodata)->subBiodata)->eat_drink_intoxicating ?? '' }}"
                                            />
                                            <span class="text-danger error-message" id="error-eat_drink_intoxicating"></span>
                                            </div>
                                        </div>
                                    {{-- male --}}
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label>নাটক/সিনেমা/সিরিয়াল/গান/খেলা এসব দেখেন বা শুনেন?<span
                                      class="must-fillup-estaristic"
                                      >*</span
                                    ></label>
                                  </div>
                                  <div class="biodata_select">
                                    <input
                                      type="text"
                                      name="watch_listen_movies_songs"
                                      class="input-filup-text"
                                      value="{{ optional(optional($biodata)->subBiodata)->watch_listen_movies_songs ?? '' }}"
                                    />
                                    <span class="text-danger error-message" id="error-watch_listen_movies_songs"></span>
                                  </div>
                                </div>
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label>দ্বীন প্রচার বা প্রতিষ্ঠায় কোনো মেহনতে যুক্ত আছেন?<span
                                      class="must-fillup-estaristic"
                                      >*</span
                                    ></label>
                                  </div>
                                  <div class="biodata_select">
                                    <input
                                      type="text"
                                      name="involved_establish_religion"
                                      class="input-filup-text"
                                      value="{{ optional(optional($biodata)->subBiodata)->involved_establish_religion ?? '' }}"
                                    />
                                    <span class="text-danger error-message" id="error-involved_establish_religion"></span>
                                  </div>
                                  <div class="input-highlighter-text">
                                    <p>
                                   যেমনঃ কোনো দাওয়াহ গ্রুপ, সংগঠন ইত্যাদি
                                    </p>
                                  </div>
                                </div>

                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label>মাজার সম্পর্কে আপনার ধারনা বা বিশ্বাস কি?<span
                                      class="must-fillup-estaristic"
                                      >*</span
                                    ></label>
                                  </div>
                                  <div class="biodata_select">
                                    <input
                                      type="text"
                                      name="beliefs_shrine"
                                      class="input-filup-text"
                                      value="{{ optional(optional($biodata)->subBiodata)->beliefs_shrine ?? '' }}"
                                    />
                                    <span class="text-danger error-message" id="error-beliefs_shrine"></span>
                                  </div>
                                </div>
                                
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label
                                      > নিজের সম্পর্কে বিস্তারিত তথ্য<span
                                        class="must-fillup-estaristic"
                                        >*</span
                                      ></label
                                    >
                                  </div>
                                  <div class="biodata_select">
                                    <textarea
                                      name="about_yourself"
                                      class="input-filup-text"
                                    >{{ optional(optional($biodata)->subBiodata)->about_yourself ?? '' }}</textarea>
                                    <span class="text-danger error-message" id="error-about_yourself"></span>
                                  </div>
                                  <div class="input-highlighter-text">
                                    <p>
                                     নিজের ব্যক্তিত্ব, শখ, পছন্দ, অপছন্দ, দৈনন্দিন জীবনযাপনের ধরন, রুচিবোধ, স্বপ্ন ও জীবনের চ্যালেঞ্জসমূহ ইত্যাদি বিষয়ে বিস্তারিত লিখবেন। অপরপক্ষের জন্য এগুলো জানা খুবই গুরুত্বপূর্ণ
                                    </p>
                                  </div>
                                </div>
                              <div class="biodata_field">
                                <div class="biodata_label">
                                  <label>
                                    বাড়িতে কি কি দায়িত্ব পালন করে থাকেন?</label
                                  >
                                </div>
                                <div class="biodata_select">
                                  <textarea
                                    name="home_responsibilities"
                                    class="input-filup-text"
                                  >{{ optional(optional($biodata)->subBiodata)->home_responsibilities ?? '' }}</textarea>
                                </div>
                              </div>
                                {{-- female --}}
                                    <div class="biodata_field ds-bride-detail-field">
                                        <div class="biodata_label">
                                        <label>নারী-পুরুষ সমঅধিকার বিষয়টাকে আপনি কিভাবে দেখেন?<span
                                            class="must-fillup-estaristic"
                                            >*</span
                                        ></label>
                                        </div>
                                        <div class="biodata_select">
                                        <input
                                            type="text"
                                            name="gender_equality"
                                            class="input-filup-text"
                                            value="{{ optional(optional($biodata)->subBiodata)->gender_equality ?? '' }}"
                                        />
                                        <span class="text-danger error-message" id="error-gender_equality"></span>
                                        </div>
                                    </div>
                                {{-- female --}}
                              <div class="biodata_field">
                                <div class="biodata_label">
                                  <label>দুনিয়াবী কোনো যোগ্যতা থাকলে লিখুন</label>
                                </div>
                                <div class="biodata_select">
                                  <input
                                    type="text"
                                    name="religious_worldly_qualifi"
                                    class="input-filup-text"
                                    value="{{ optional(optional($biodata)->subBiodata)->religious_worldly_qualifi ?? '' }}"
                                  />
                                </div>
                              </div>
                               <div class="biodata_field">
                                    <div class="biodata_label">
                                      <label>আপনার ক্ষেত্রে প্রযোজ্য হয় এমন অপশন গুলো সিলেক্ট করুন</label>
                                    </div>

                                    <div class="biodata_select">
                                      <select id="select-gear" name="options_apply_you[]" class="demo-default" multiple  placeholder="নির্বাচন করুন...">
                                        @php
                                            $selectedOptions = explode(',', optional(optional($biodata)->subBiodata)->options_apply_you);
                                        @endphp
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="orphan" {{ in_array('orphan', $selectedOptions) ? 'selected' : '' }}>এতিম</option>

                                        <option value="disabled" {{ in_array('disabled', $selectedOptions) ? 'selected' : '' }}>প্রতিবন্ধী</option>

                                        <option value="newmuslim" {{ in_array('newmuslim', $selectedOptions) ? 'selected' : '' }}>নওমুসলিম</option>

                                        <option value="tie" {{ in_array('tie', $selectedOptions) ? 'selected' : '' }}>বন্ধা</option>

                                        <option value="interested_month" {{ in_array('interested_month', $selectedOptions) ? 'selected' : '' }}>মাসনায় আগ্রহী</option>
                                        </select>
                                    </div>
                                    <div class="input-highlighter-text">
                                      <p>
                                      এটি দেওয়া আবশ্যক নয়। আপনার ক্ষেত্রে প্রযোজ্য না হলে এড়িয়ে যান
                                      </p>
                                    </div>
                                  </div>
                                  {{-- male --}}
                                    <div class="biodata_field ds-groom-detail-field">
                                        <div class="biodata_label">
                                            <label>পাত্রের মোবাইল নাম্বার<span
                                            class="must-fillup-estaristic"
                                            >*</span
                                            ></label>
                                        </div>
                                        <div class="biodata_select">
                                            <input
                                            type="text"
                                            name="male_phone"
                                            class="input-filup-text"
                                            value="{{ optional(optional($biodata)->subBiodata)->male_phone ?? '' }}"
                                            />
                                            <span class="text-danger error-message" id="error-male_phone"></span>
                                        </div>
                                        <div class="input-highlighter-text">
                                            <p>
                                                বায়োডাটা ভেরিফিকেশনের জন্য আপনার নিজস্ব হোয়াটসঅ্যাপ নাম্বার নেওয়া হচ্ছে। দ্বীনদারসঙ্গী কর্তৃপক্ষ বাদে কারও কাছে প্রকাশ করা হবে না
                                            </p>
                                        </div>
                                    </div>
                                  {{-- male --}}
                                    {{-- female --}}
                                        <div class="biodata_field ds-bride-detail-field">
                                        <div class="biodata_label">
                                            <label>পাত্রীর মোবাইল নাম্বার<span
                                            class="must-fillup-estaristic"
                                            >*</span
                                            ></label>
                                        </div>
                                        <div class="biodata_select">
                                            <input
                                            type="text"
                                            name="female_phone"
                                            class="input-filup-text"
                                            value="{{ optional(optional($biodata)->subBiodata)->female_phone ?? '' }}"
                                            />
                                            <span class="text-danger error-message" id="error-female_phone"></span>
                                        </div>
                                        <div class="input-highlighter-text">
                                            <p>
                                            বায়োডাটা ভেরিফিকেশনের জন্য আপনার নিজস্ব হোয়াটসঅ্যাপ নাম্বার নেওয়া হচ্ছে। দ্বীনদারসঙ্গী কর্তৃপক্ষ বাদে কারও কাছে প্রকাশ করা হবে না
                                            </p>
                                        </div>
                                        </div>
                                    {{-- female --}}
                                <div class="add_biodata_submit buttons">
                                  <button
                                    type="button"
                                    id="back5 "
                                    class="prevBtn back ds-button-border"
                                  >
                                    Back
                                  </button>
                                  <button
                                    type="submit"
                                    id="save_next5"
                                    class="nextBtn save_next ds-button"
                                  >
                                    Save & Next
                                  </button>
                                </div>
                              </div>
                            </form>
                            {{-- biodata alert --}}
                            <div id="family-alert" class=" alert-box biotada-alert" style="display: none">
                                <i class="fa-solid fa-circle-check"></i>
                                <span></span>
                                <div class="suc-progress-bar"></div>
                            </div>
                        </div>
                          <!-- {{-- Stap-6 --}} -->
                        <div class="add_biodata_content" id="dsdb_form_step_6" >
                            <form
                              action="{{ route('professional.information.store') }}"
                              method="POST"
                              enctype="multipart/form-data"
                              id="profession-information"
                              data-step="professional"
                              >

                              <div class="biodata_form_content">
                                <div class="form_title">
                                  <h2>পেশাগত তথ্য</h2>
                                </div>
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label
                                      >পেশা<span
                                        class="must-fillup-estaristic"
                                        >*</span
                                      ></label
                                    >
                                  </div>
                                  <div class="biodata_select">
                                    <select
                                      name="profession"
                                      class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                      style="width: 100%"
                                    >
                                        <option value="">নির্বাচন করুন</option>

                                        <option value="imam" {{ optional(optional($biodata)->subBiodata)->profession == 'imam' ? 'selected' : '' }}>ইমাম</option>

                                        <option value="businessman" {{ optional(optional($biodata)->subBiodata)->profession == 'businessman' ? 'selected' : '' }}>ব্যবসায়ী</option>

                                        <option value="teacher" {{ optional(optional($biodata)->subBiodata)->profession == 'teacher' ? 'selected' : '' }}>শিক্ষক</option>

                                        <option value="madrasa_teacher" {{ optional(optional($biodata)->subBiodata)->profession == 'madrasa_teacher' ? 'selected' : '' }}>মাদরাসা শিক্ষক</option>

                                        <option value="entrepreneur" {{ optional(optional($biodata)->subBiodata)->profession == 'entrepreneur' ? 'selected' : '' }}>উদ্যোক্তা</option>

                                        <option value="freelancer" {{ optional(optional($biodata)->subBiodata)->profession == 'freelancer' ? 'selected' : '' }}>ফ্রিল্যান্সার</option>

                                        <option value="doctor" {{ optional(optional($biodata)->subBiodata)->profession == 'doctor' ? 'selected' : '' }}>ডাক্তার</option>

                                        <option value="engineer" {{ optional(optional($biodata)->subBiodata)->profession == 'engineer' ? 'selected' : '' }}>ইঞ্জিনিয়ার</option>

                                        <option value="govt_job" {{ optional(optional($biodata)->subBiodata)->profession == 'govt_job' ? 'selected' : '' }}>সরকারী চাকুরি</option>

                                        <option value="private_job" {{ optional(optional($biodata)->subBiodata)->profession == 'private_job' ? 'selected' : '' }}>বেসরকারী চাকুরি</option>

                                        <option value="writer" {{ optional(optional($biodata)->subBiodata)->profession == 'writer' ? 'selected' : '' }}>লেখক</option>

                                        <option value="journalist" {{ optional(optional($biodata)->subBiodata)->profession == 'journalist' ? 'selected' : '' }}>সাংবাদিক</option>

                                        <option value="accountant" {{ optional(optional($biodata)->subBiodata)->profession == 'accountant' ? 'selected' : '' }}>হিসাবরক্ষক</option>

                                        <option value="student" {{ optional(optional($biodata)->subBiodata)->profession == 'student' ? 'selected' : '' }}>শিক্ষার্থী</option>

                                        <option value="expatriate" {{ optional(optional($biodata)->subBiodata)->profession == 'expatriate' ? 'selected' : '' }}>প্রবাসী</option>

                                        <option value="farmer" {{ optional(optional($biodata)->subBiodata)->profession == 'farmer' ? 'selected' : '' }}>কৃষক</option>

                                        <option value="housewife" {{ optional(optional($biodata)->subBiodata)->profession == 'housewife' ? 'selected' : '' }}>গৃহিনী</option>

                                        <option value="other" {{ optional(optional($biodata)->subBiodata)->profession == 'other' ? 'selected' : '' }}>অন্যান্য</option>

                                        <option value="unemployed" {{ optional(optional($biodata)->subBiodata)->profession == 'unemployed' ? 'selected' : '' }}>পেশা নেই</option>
                                    </select>
                                    <span class="text-danger error-message" id="error-profession"></span>
                                  </div>
                                </div>
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label
                                      >পেশা সম্পর্কিত বিস্তারিত তথ্য<span
                                        class="must-fillup-estaristic"
                                        >*</span
                                      ></label
                                    >
                                  </div>
                                  <div class="biodata_select">
                                    <textarea
                                      name="profession_details"
                                      class="input-filup-text"
                                    >{{ optional(optional($biodata)->subBiodata)->profession_details ?? '' }}</textarea>
                                  </div>
                                  <span class="text-danger error-message" id="error-profession_details"></span>
                                  <div class="input-highlighter-text">
                                    <p>
                                     কাজের ধরন,কাজের সময়সূচি এবং পেশাগত ক্ষেত্রে ভবিষ্যৎ পরিকল্পনা ইত্যাদি সম্পর্কে লিখবেন।
                                    </p>
                                  </div>
                                </div>
                                {{-- male --}}
                                <div class="biodata_field ds-groom-detail-field">
                                  <div class="biodata_label">
                                    <label>কর্মস্থল<span
                                      class="must-fillup-estaristic"
                                      >*</span></label>
                                  </div>
                                  <div class="biodata_select">
                                    <input
                                      type="text"
                                      name="workplace"
                                      class="input-filup-text"
                                      value="{{ optional(optional($biodata)->subBiodata)->workplace ?? '' }}"
                                    />
                                    <span class="text-danger error-message" id="error-workplace"></span>
                                  </div>
                                  <div class="input-highlighter-text">
                                    <p>
                                      কোন কোম্পানি, প্রতিষ্ঠান বা সংস্থায় কাজ করেন এবং সেটা কোথায় অবস্থিত এ বিষয়ে লিখুন
                                    </p>
                                  </div>
                                </div>

                                <div class="biodata_field ds-groom-detail-field">
                                  <div class="biodata_label">
                                    <label>আপনি কি সুদ বা হারাম আয়ের সাথে কোনোভাবে জড়িত?<span
                                      class="must-fillup-estaristic"
                                      >*</span></label>
                                  </div>
                                  <div class="biodata_select">
                                    <input
                                      type="text"
                                      name="income_verify"
                                      class="input-filup-text"
                                      value="{{ optional(optional($biodata)->subBiodata)->income_verify ?? '' }}"
                                    />
                                    <span class="text-danger error-message" id="error-income_verify"></span>
                                  </div>
                                </div>
                                {{-- male --}}
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label>মাসিক আয়</label>
                                  </div>
                                  <div class="biodata_select">
                                    <input
                                      type="text"
                                      name="monthly_income"
                                      class="input-filup-text" placeholder="২০,০০০ টাকা"
                                      value="{{ optional(optional($biodata)->subBiodata)->monthly_income ?? '' }}"
                                    />
                                    <span class="text-danger error-message" id="error-monthly_income"></span>
                                  </div>
                                </div>
                                <div class="add_biodata_submit buttons">
                                  <button
                                    type="button"
                                    id="back6"
                                    class="prevBtn back ds-button-border"
                                  >
                                    Back
                                  </button>
                                  <button
                                    type="submit"
                                    id="save_next6"
                                    class="nextBtn save_next ds-button"
                                  >
                                    Save & Next
                                  </button>
                                </div>
                              </div>
                            </form>
                            {{-- biodata alert --}}
                            <div id="parsonal-alert" class=" alert-box biotada-alert" style="display: none">
                                <i class="fa-solid fa-circle-check"></i>
                                <span></span>
                                <div class="suc-progress-bar"></div>
                            </div>
                        </div>
                          <!-- {{-- Stap-7 --}} -->
                        <div class="add_biodata_content"  id="dsdb_form_step_7" >
                            <form
                              action="{{ route('marriage.information.store') }}"
                              method="POST"
                              enctype="multipart/form-data"
                              id="marriage-information"
                              data-step="marriage"
                              >

                              <div class="biodata_form_content">
                                <div class="form_title">
                                  <h2>বিবাহ সম্পর্কিত তথ্য</h2>
                                </div>
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label>বিয়েতে আপনার অভিভাবকের সম্মতি আছে কিনা?<span
                                      class="must-fillup-estaristic"
                                      >*</span></label>
                                  </div>
                                  <div class="biodata_select">
                                    <input
                                      type="text"
                                      name="parents_consent"
                                      class="input-filup-text"
                                      value="{{ optional(optional($biodata)->subBiodata)->parents_consent ?? '' }}"
                                    />
                                    <span class="text-danger error-message" id="error-parents_consent"></span>
                                  </div>
                                </div>
                                <!-- married, divorced, widow,bipotnik section Start-->
                                {{-- married --}}
                                <div class="biodata_field ds-married-detail-field" style="display: none;">
                                    <div class="biodata_label">
                                      <label>বর্তমানে আপনার স্ত্রী ও সন্তানের সংখ্যা কত?<span
                                        class="must-fillup-estaristic"
                                        >*</span></label>
                                    </div>
                                    <div class="biodata_select">
                                      <input
                                        type="text"
                                        name="currently_wife_children"
                                        class="input-filup-text"
                                        value="{{ optional(optional($biodata)->subBiodata)->currently_wife_children ?? '' }}"
                                      />
                                      <span class="text-danger error-message" id="error-currently_wife_children"></span>
                                    </div>
                                  </div>
                                  <div class="biodata_field ds-married-detail-field" style="display: none;">
                                    <div class="biodata_label">
                                      <label
                                        >বিবাহিত অবস্থায় আবার কেন বিয়ে করতে চান?<span
                                          class="must-fillup-estaristic"
                                          >*</span
                                        ></label
                                      >
                                    </div>
                                    <div class="biodata_select">
                                      <textarea
                                        name="married_again"
                                        class="input-filup-text"
                                      >{{ optional(optional($biodata)->subBiodata)->married_again ?? '' }}</textarea>
                                    </div>
                                    <span class="text-danger error-message" id="error-married_again"></span>
                                  </div>
                                  {{-- married --}}
                                  {{-- divorced --}}
                                  <div class="biodata_field ds-divorced-detail-field" style="display: none;">
                                    <div class="biodata_label">
                                      <label
                                        >আপনার ডিভোর্সের সময়কাল ও কারণ লিখুন<span
                                          class="must-fillup-estaristic"
                                          >*</span
                                        ></label
                                      >
                                    </div>
                                    <div class="biodata_select">
                                      <textarea
                                        name="divorce_reason"
                                        class="input-filup-text"
                                      >{{ optional(optional($biodata)->subBiodata)->divorce_reason ?? '' }}</textarea>
                                    </div>
                                    <span class="text-danger error-message" id="error-divorce_reason"></span>
                                    <div class="input-highlighter-text">
                                        <p>
                                         আপনাদের দাম্পত্যজীবন কত বছরের ছিল, সন্তান আছে কি না, থাকলে তাদের বয়স সহ উল্লেখ করবেন
                                        </p>
                                      </div>
                                  </div>
                                  {{-- divorced --}}
                                  {{-- widow --}}
                                  <div class="biodata_field ds-widow-detail-field" style="display: none;">
                                    <div class="biodata_label">
                                      <label
                                        >আপনার স্বামীর মৃত্যুসাল সহ মৃত্যুর কারন লিখুন<span
                                          class="must-fillup-estaristic"
                                          >*</span
                                        ></label
                                      >
                                    </div>
                                    <div class="biodata_select">
                                      <textarea
                                        name="husband_death_year"
                                        class="input-filup-text"
                                      >{{ optional(optional($biodata)->subBiodata)->husband_death_year ?? '' }}</textarea>
                                    </div>
                                    <span class="text-danger error-message" id="error-husband_death_year"></span>
                                    <div class="input-highlighter-text">
                                        <p>
                                          আপনাদের দাম্পত্যজীবন কত বছরের ছিল, সন্তান আছে কি না, থাকলে তাদের বয়স সহ উল্লেখ করবেন
                                        </p>
                                      </div>
                                  </div>
                                  <div class="biodata_field ds-widow-detail-field" style="display: none;">
                                    <div class="biodata_label">
                                      <label
                                        >নতুন সম্পর্কের জন্য আপনি পুরোপুরি প্রস্তুত?<span
                                          class="must-fillup-estaristic"
                                          >*</span
                                        ></label
                                      >
                                    </div>
                                    <div class="biodata_select">
                                      <textarea
                                        name="wife_new_relationship"
                                        class="input-filup-text"
                                      >{{ optional(optional($biodata)->subBiodata)->wife_new_relationship ?? '' }}</textarea>
                                    </div>
                                    <span class="text-danger error-message" id="error-wife_new_relationship"></span>
                                  </div>
                                  {{-- widow --}}
                                  {{-- widower --}}
                                  <div class="biodata_field ds-widower-detail-field" style="display: none;">
                                    <div class="biodata_label">
                                      <label
                                        >আপনার স্ত্রীর মৃত্যুসাল সহ মৃত্যুর কারন লিখুন<span
                                          class="must-fillup-estaristic"
                                          >*</span
                                        ></label
                                      >
                                    </div>
                                    <div class="biodata_select">
                                      <textarea
                                        name="wife_death_year"
                                        class="input-filup-text"
                                      >{{ optional(optional($biodata)->subBiodata)->wife_death_year ?? '' }}</textarea>
                                    </div>
                                    <span class="text-danger error-message" id="error-wife_death_year"></span>
                                    <div class="input-highlighter-text">
                                        <p>
                                          আপনাদের দাম্পত্যজীবন কত বছরের ছিল, সন্তান আছে কি না, থাকলে তাদের বয়স সহ উল্লেখ করবেন
                                        </p>
                                      </div>
                                  </div>
                                  <div class="biodata_field ds-widower-detail-field" style="display: none;">
                                    <div class="biodata_label">
                                      <label
                                        >নতুন সম্পর্কের জন্য আপনি পুরোপুরি প্রস্তুত?<span
                                          class="must-fillup-estaristic"
                                          >*</span
                                        ></label
                                      >
                                    </div>
                                    <div class="biodata_select">
                                      <textarea
                                        name="husband_new_relationship"
                                        class="input-filup-text"
                                      >{{ optional(optional($biodata)->subBiodata)->husband_new_relationship ?? '' }}</textarea>
                                    </div>
                                    <span class="text-danger error-message" id="error-husband_new_relationship"></span>
                                  </div>
                                   {{-- widower --}}
                                <!-- married, divorced, bidhoba,bipotnik section End-->
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label
                                      >বিয়ে কেন করছেন? বিয়ে সম্পর্কে আপনার ধারণা কি?<span
                                        class="must-fillup-estaristic"
                                        >*</span
                                      ></label
                                    >
                                  </div>
                                  <div class="biodata_select">
                                    <textarea
                                      name="why_getting_married"
                                      class="input-filup-text"
                                    >{{ optional(optional($biodata)->subBiodata)->why_getting_married ?? '' }}</textarea>
                                  </div>
                                  <span class="text-danger error-message" id="error-why_getting_married"></span>
                                </div>
                            {{-- female --}}
                                <div class="biodata_field ds-bride-detail-field">
                                    <div class="biodata_label">
                                      <label
                                        >স্বামীর আনুগত্য করার মানসিকতা রাখেন?<span class="must-fillup-estaristic"
                                          >*</span
                                        ></label
                                      >
                                    </div>
                                    <div class="biodata_select">
                                      <select
                                        name="obedience_husband"
                                        class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                        style="width: 100%"
                                      >
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="yes" {{ optional(optional($biodata)->subBiodata)->obedience_husband == 'yes' ? 'selected' : '' }}>হ্যা</option>
                                        <option value="no" {{ optional(optional($biodata)->subBiodata)->obedience_husband == 'no' ? 'selected' : '' }}>না</option>
                                      </select>
                                      <span class="text-danger error-message" id="error-obedience_husband"></span>
                                    </div>
                                  </div>
                                <div class="biodata_field ds-bride-detail-field">
                                  <div class="biodata_label">
                                    <label>বিয়ের পর চাকরি/পড়াশোনা চালিয়ে যেতে চান?<span
                                      class="must-fillup-estaristic"
                                      >*</span></label>
                                  </div>
                                  <div class="biodata_select">
                                    <input
                                      type="text"
                                      name="job_after_marriage"
                                      class="input-filup-text"
                                      value="{{ optional(optional($biodata)->subBiodata)->job_after_marriage ?? '' }}"
                                    />
                                    <span class="text-danger error-message" id="error-job_after_marriage"></span>
                                  </div>
                                </div>
                                <div class="biodata_field ds-bride-detail-field">
                                  <div class="biodata_label">
                                    <label
                                      >পরিবার ও স্বামীর প্রতি আপনার কী কী দায়িত্ব থাকতে পারে?<span
                                        class="must-fillup-estaristic"
                                        >*</span
                                      ></label
                                    >
                                  </div>
                                  <div class="biodata_select">
                                    <textarea
                                      name="husband_responsibilities"
                                      class="input-filup-text"
                                    >{{ optional(optional($biodata)->subBiodata)->husband_responsibilities ?? '' }}</textarea>
                                  </div>
                                  <span class="text-danger error-message" id="error-husband_responsibilities"></span>
                                </div>
                            {{-- female --}}
                            {{-- male --}}
                                <div class="biodata_field ds-groom-detail-field">
                                  <div class="biodata_label">
                                    <label>বিয়ের পর স্ত্রীকে পর্দায় রাখতে পারবেন?<span
                                      class="must-fillup-estaristic"
                                      >*</span></label>
                                  </div>
                                  <div class="biodata_select">
                                    <input
                                      type="text"
                                      name="after_marriage_veil"
                                      class="input-filup-text"
                                      value="{{ optional(optional($biodata)->subBiodata)->after_marriage_veil ?? '' }}"
                                    />
                                    <span class="text-danger error-message" id="error-after_marriage_veil"></span>
                                  </div>
                                </div>
                                <div class="biodata_field ds-groom-detail-field">
                                  <div class="biodata_label">
                                    <label>বিয়ের পর স্ত্রীকে চাকরি/পড়াশোনা করতে দিতে চান?<span
                                      class="must-fillup-estaristic"
                                      >*</span></label>
                                  </div>
                                  <div class="biodata_select">
                                    <input
                                      type="text"
                                      name="wife_after_marriage_job"
                                      class="input-filup-text"
                                      value="{{ optional(optional($biodata)->subBiodata)->wife_after_marriage_job ?? '' }}"
                                    />
                                    <span class="text-danger error-message" id="error-wife_after_marriage_job"></span>
                                  </div>
                                </div>

                                <div class="biodata_field ds-groom-detail-field">
                                  <div class="biodata_label">
                                    <label>বিয়ের পর স্ত্রীকে নিয়ে কোথায় থাকবেন?<span
                                      class="must-fillup-estaristic"
                                      >*</span></label>
                                  </div>
                                  <div class="biodata_select">
                                    <input
                                      type="text"
                                      name="wife_after_marriage_live"
                                      class="input-filup-text"
                                      value="{{ optional(optional($biodata)->subBiodata)->wife_after_marriage_live ?? '' }}"
                                    />
                                    <span class="text-danger error-message" id="error-wife_after_marriage_live"></span>
                                  </div>
                                </div>
                                <div class="biodata_field ds-groom-detail-field">
                                  <div class="biodata_label">
                                    <label
                                      >পরিবার ও স্ত্রীর প্রতি আপনার কী কী দায়িত্ব থাকতে পারে?<span
                                        class="must-fillup-estaristic"
                                        >*</span
                                      ></label
                                    >
                                  </div>
                                  <div class="biodata_select">
                                    <textarea
                                      name="wife_responsibilities"
                                      class="input-filup-text"
                                    >{{ optional(optional($biodata)->subBiodata)->wife_responsibilities ?? '' }}</textarea>
                                  </div>
                                  <span class="text-danger error-message" id="error-wife_responsibilities"></span>
                                </div>
                                <div class="biodata_field ds-groom-detail-field">
                                  <div class="biodata_label">
                                    <label>বিয়ে উপলক্ষে পাত্রীপক্ষের কাছে যৌতুক/উপহার আশা করবেন?<span
                                      class="must-fillup-estaristic"
                                      >*</span></label>
                                  </div>
                                  <div class="biodata_select">
                                    <input
                                      type="text"
                                      name="expect_wedding_gift"
                                      class="input-filup-text"
                                      value="{{ optional(optional($biodata)->subBiodata)->expect_wedding_gift ?? '' }}"
                                    />
                                    <span class="text-danger error-message" id="error-expect_wedding_gift"></span>
                                  </div>
                                </div>
                                {{-- male --}}
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label>মোহর এর ব্যাপারে আপনার মন্তব্য কি?<span
                                      class="must-fillup-estaristic"
                                      >*</span></label>
                                  </div>
                                  <div class="biodata_select">
                                    <input
                                      type="text"
                                      name="about_mohar"
                                      class="input-filup-text"
                                      value="{{ optional(optional($biodata)->subBiodata)->about_mohar ?? '' }}"
                                    />
                                    <span class="text-danger error-message" id="error-about_mohar"></span>
                                  </div>
                                </div>
                            {{-- female --}}
                                <div class="biodata_field ds-bride-detail-field">
                                  <div class="biodata_label">
                                    <label>ছাত্র/বেকার পাত্রকে বিয়ে করতে আগ্রহী আছেন?<span
                                      class="must-fillup-estaristic"
                                      >*</span></label>
                                  </div>
                                  <div class="biodata_select">
                                    <input
                                      type="text"
                                      name="student_unemployed"
                                      class="input-filup-text"
                                      value="{{ optional(optional($biodata)->subBiodata)->student_unemployed ?? '' }}"
                                    />
                                    <span class="text-danger error-message" id="error-student_unemployed"></span>
                                  </div>
                                </div>
                                <div class="biodata_field ds-bride-detail-field">
                                  <div class="biodata_label">
                                    <label>২য় স্ত্রী (মাসনা) হতে আগ্রহী আছেন?<span
                                      class="must-fillup-estaristic"
                                      >*</span></label>
                                  </div>
                                  <div class="biodata_select">
                                    <input
                                      type="text"
                                      name="second_wife"
                                      class="input-filup-text"
                                      value="{{ optional(optional($biodata)->subBiodata)->second_wife ?? '' }}"
                                    />
                                    <span class="text-danger error-message" id="error-second_wife"></span>
                                  </div>
                                </div>
                                {{-- female --}}
                                {{-- male --}}
                                <div class="biodata_field ds-groom-detail-field">
                                  <div class="biodata_label">
                                    <label>বিধবা/তালাকপ্রাপ্তা পাত্রীকে বিয়ে করতে আগ্রহী আছেন?<span
                                      class="must-fillup-estaristic"
                                      >*</span></label>
                                  </div>
                                  <div class="biodata_select">
                                    <input
                                      type="text"
                                      name="widow_divorced_woman"
                                      class="input-filup-text"
                                      value="{{ optional(optional($biodata)->subBiodata)->widow_divorced_woman ?? '' }}"
                                    />
                                    <span class="text-danger error-message" id="error-widow_divorced_woman"></span>
                                  </div>
                                </div>
                                {{-- male --}}
                                {{-- female --}}
                                <div class="biodata_field ds-bride-detail-field">
                                  <div class="biodata_label">
                                    <label
                                      >পাত্র নির্বাচনে পরিবার কোন বিষয়গুলো ছাড় দেয়ার মানসিকতা রাখে?<span class="must-fillup-estaristic"
                                        >*</span
                                      ></label
                                    >
                                  </div>
                                  <div class="biodata_select">
                                    <select
                                      name="compromise_wife"
                                      class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                      style="width: 100%"
                                    >
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="except_deen" {{ optional(optional($biodata)->subBiodata)->compromise_wife == 'except_deen' ? 'selected' : '' }}>দ্বীনদারীতা ব্যতীত সব বিষয়েই ছাড় দিতে রাজি</option>

                                        <option value="financial" {{ optional(optional($biodata)->subBiodata)->compromise_wife == 'financial' ? 'selected' : '' }}>আর্থিক অবস্থা</option>

                                        <option value="complexion" {{ optional(optional($biodata)->subBiodata)->compromise_wife == 'complexion' ? 'selected' : '' }}>গাত্রবর্ণ</option>

                                        <option value="family" {{ optional(optional($biodata)->subBiodata)->compromise_wife == 'family' ? 'selected' : '' }}>বংশ</option>

                                        <option value="address" {{ optional(optional($biodata)->subBiodata)->compromise_wife == 'address' ? 'selected' : '' }}>ঠিকানা</option>

                                        <option value="financial_complexion" {{ optional(optional($biodata)->subBiodata)->compromise_wife == 'financial_complexion' ? 'selected' : '' }}>আর্থিক অবস্থা ও গাত্রবর্ণ</option>

                                        <option value="complexion_address" {{ optional(optional($biodata)->subBiodata)->compromise_wife == 'complexion_address' ? 'selected' : '' }}>গাত্রবর্ণ ও ঠিকানা</option>

                                        <option value="family_complexion" {{ optional(optional($biodata)->subBiodata)->compromise_wife == 'family_complexion' ? 'selected' : '' }}>বংশ ও গাত্রবর্ণ</option>

                                        <option value="financial_address" {{ optional(optional($biodata)->subBiodata)->compromise_wife == 'financial_address' ? 'selected' : '' }}>আর্থিক অবস্থা ও ঠিকানা</option>

                                        <option value="family_financial" {{ optional(optional($biodata)->subBiodata)->compromise_wife == 'family_financial' ? 'selected' : '' }}>বংশ ও আর্থিক অবস্থা</option>

                                        <option value="no_compromise" {{ optional(optional($biodata)->subBiodata)->compromise_wife == 'no_compromise' ? 'selected' : '' }}>ছাড় দিতে রাজি নয়</option>
                                    </select>
                                    <span class="text-danger error-message" id="error-compromise_wife"></span>
                                  </div>
                                </div>
                                {{-- female --}}
                                {{-- male --}}
                                <div class="biodata_field ds-groom-detail-field">
                                    <div class="biodata_label">
                                      <label
                                        >পাত্রী নির্বাচনে কোন বিষয়গুলো ছাড় দেয়ার মানসিকতা রাখেন?<span class="must-fillup-estaristic"
                                          >*</span
                                        ></label
                                      >
                                    </div>
                                    <div class="biodata_select">
                                      <select
                                        name="compromise_husband"
                                        class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                        style="width: 100%"
                                      >
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="except_deen" {{ optional(optional($biodata)->subBiodata)->compromise_husband == 'except_deen' ? 'selected' : '' }}>দ্বীনদারীতা ব্যতীত সব বিষয়েই ছাড় দিতে রাজি</option>

                                        <option value="financial" {{ optional(optional($biodata)->subBiodata)->compromise_husband == 'financial' ? 'selected' : '' }}>আর্থিক অবস্থা</option>

                                        <option value="complexion" {{ optional(optional($biodata)->subBiodata)->compromise_husband == 'complexion' ? 'selected' : '' }}>গাত্রবর্ণ</option>

                                        <option value="family" {{ optional(optional($biodata)->subBiodata)->compromise_husband == 'family' ? 'selected' : '' }}>বংশ</option>

                                        <option value="address" {{ optional(optional($biodata)->subBiodata)->compromise_husband == 'address' ? 'selected' : '' }}>ঠিকানা</option>

                                        <option value="financial_complexion" {{ optional(optional($biodata)->subBiodata)->compromise_husband == 'financial_complexion' ? 'selected' : '' }}>আর্থিক অবস্থা ও গাত্রবর্ণ</option>

                                        <option value="complexion_address" {{ optional(optional($biodata)->subBiodata)->compromise_husband == 'complexion_address' ? 'selected' : '' }}>গাত্রবর্ণ ও ঠিকানা</option>

                                        <option value="family_complexion" {{ optional(optional($biodata)->subBiodata)->compromise_husband == 'family_complexion' ? 'selected' : '' }}>বংশ ও গাত্রবর্ণ</option>

                                        <option value="financial_address" {{ optional(optional($biodata)->subBiodata)->compromise_husband == 'financial_address' ? 'selected' : '' }}>আর্থিক অবস্থা ও ঠিকানা</option>

                                        <option value="family_financial" {{ optional(optional($biodata)->subBiodata)->compromise_husband == 'family_financial' ? 'selected' : '' }}>বংশ ও আর্থিক অবস্থা</option>

                                        <option value="no_compromise" {{ optional(optional($biodata)->subBiodata)->compromise_husband == 'no_compromise' ? 'selected' : '' }}>ছাড় দিতে রাজি নয়</option>
                                      </select>
                                      <span class="text-danger error-message" id="error-compromise_husband"></span>
                                    </div>
                                  </div>
                                  {{-- male --}}
                                <div class="add_biodata_submit buttons">
                                  <button
                                    type="button"
                                    id="back7"
                                    class="prevBtn back ds-button-border"
                                  >
                                    Back
                                  </button>
                                  <button
                                    type="submit"
                                    id="save_next7"
                                    class="nextBtn save_next ds-button"
                                  >
                                    Save & Next
                                  </button>
                                </div>
                              </div>
                            </form>
                            {{-- biodata alert --}}
                            <div id="profession-alert" class=" alert-box biotada-alert" style="display: none">
                                <i class="fa-solid fa-circle-check"></i>
                                <span></span>
                                <div class="suc-progress-bar"></div>
                            </div>
                        </div>

                          <!---- Stap-8 -- -->
                        <div class="add_biodata_content" id="dsdb_form_step_8" >
                            <form
                              action="{{ route('expectation.information.store') }}"
                              method="POST"
                              enctype="multipart/form-data"
                              id="expectation-information"
                                data-step="expectation"
                              >

                              <div class="biodata_form_content">
                                <div class="form_title">
                                  <h2>প্রত্যাশিত জীবনসঙ্গী</h2>
                                </div>
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label for="age-range" >
                                        বয়স
                                      <span class="must-fillup-estaristic"
                                        >*</span
                                      ></label
                                    >
                                  </div>
                                  <div class="biodata_select">
                                    <input type="text" id="age-range"  class="age-range-slider" />
                                    <input type="hidden"
                                    name="expect_age"
                                    id="expect_age"
                                    value="{{ optional(optional($biodata)->subBiodata)->expect_age ?? '' }}"
                                    >
                                    <span class="text-danger error-message" id="error-expect_age"></span>
                                  </div>
                                </div>
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label>বৈবাহিক অবস্থা<span
                                      class="must-fillup-estaristic"
                                      >*</span></label>
                                  </div>
                                  <div class="biodata_select">
                                    <select id="expect-marital-type" name="expect_marital_type[]" class="demo-default" multiple  placeholder="নির্বাচন করুন...">
                                        @php
                                            $explode_marital_type = explode(',', optional(optional($biodata)->subBiodata)->expect_marital_type);
                                        @endphp
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="unmarried" {{ in_array('unmarried', $explode_marital_type) ? 'selected' : '' }}>অবিবাহিত</option>

                                        <option value="married" {{ in_array('married', $explode_marital_type) ? 'selected' : '' }}>বিবাহিত</option>

                                        <option value="divorced" {{ in_array('divorced', $explode_marital_type) ? 'selected' : '' }}>ডিভোর্সড</option>

                                        <option value="widow" {{ in_array('widow', $explode_marital_type) ? 'selected' : '' }}>বিধবা</option>

                                        <option value="widower" {{ in_array('widower', $explode_marital_type) ? 'selected' : '' }}>বিপত্নিক</option>

                                        <option value="interested_in_polygamy" {{ in_array('interested_in_polygamy', $explode_marital_type) ? 'selected' : '' }}>মাসনা হতে আগ্রহী</option>
                                    </select>
                                    <span class="text-danger error-message" id="error-expect_marital_type"></span>
                                  </div>
                                </div>

                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label>জেলা<span
                                      class="must-fillup-estaristic"
                                      >*</span></label>
                                  </div>
                                  <div class="biodata_select">
                                    <input
                                      type="text"
                                      name="expect_district"
                                      class="input-filup-text" placeholder="সিরাজগঞ্জ, রাজশাহী, ঢাকা"
                                      value="{{ optional(optional($biodata)->subBiodata)->expect_district ?? '' }}"
                                    />
                                    <span class="text-danger error-message" id="error-expect_district"></span>
                                  </div>
                                </div>
                                <div class="input-highlighter-text">
                                  <p>
                                    কমা ব্যবহার করে নির্দিষ্ট জেলা গুলো উল্লেখ করুন।
                                  </p>
                                </div>
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label
                                      >গাত্রবর্ণ<span class="must-fillup-estaristic"
                                        >*</span
                                      ></label
                                    >
                                  </div>
                                  <div class="biodata_select">

                                    <select id="expect-skin-colors" name="expect_skin_colors[]" class="demo-default" multiple  placeholder="নির্বাচন করুন...">
                                        @php
                                            $explode_skin_colors = explode(',', optional(optional($biodata)->subBiodata)->expect_skin_colors);
                                        @endphp
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="dark" {{ in_array('dark', $explode_skin_colors) ? 'selected' : '' }}>কালো</option>

                                        <option value="brown" {{ in_array('brown', $explode_skin_colors) ? 'selected' : '' }}>শ্যামলা</option>

                                        <option value="light_brown" {{ in_array('light_brown', $explode_skin_colors) ? 'selected' : '' }}>উজ্জ্বল শ্যামলা</option>

                                        <option value="fair" {{ in_array('fair', $explode_skin_colors) ? 'selected' : '' }}>ফর্সা</option>

                                        <option value="very_fair" {{ in_array('very_fair', $explode_skin_colors) ? 'selected' : '' }}>উজ্জ্বল ফর্সা</option>
                                    </select>
                                    <span class="text-danger error-message" id="error-expect_skin_colors"></span>
                                  </div>
                                </div>

                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label>উচ্চতা<span
                                      class="must-fillup-estaristic"
                                      >*</span></label>
                                  </div>
                                  <div class="biodata_select">
                                    <input
                                      type="text"
                                      name="expect_height"
                                      class="input-filup-text" placeholder=" ৪’১” - ৭’২” "
                                      value="{{ optional(optional($biodata)->subBiodata)->expect_height ?? '' }}"
                                    />
                                    <span class="text-danger error-message" id="error-expect_height"></span>
                                  </div>
                                </div>
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label
                                      >শারীরিক গঠন<span class="must-fillup-estaristic"
                                        >*</span
                                      ></label
                                    >
                                  </div>
                                  <div class="biodata_select">
                                     <select id="expect-body-type" name="expect_body_type[]" class="demo-default" multiple  placeholder="নির্বাচন করুন...">
                                        @php
                                            $explode_body_type = explode(',', optional(optional($biodata)->subBiodata)->expect_body_type);
                                        @endphp
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="thin" {{ in_array('thin', $explode_body_type) ? 'selected' : '' }}>চিকন</option>

                                        <option value="average" {{ in_array('average', $explode_body_type) ? 'selected' : '' }}>স্বাভাবিক</option>

                                        <option value="fat" {{ in_array('fat', $explode_body_type) ? 'selected' : '' }}>মোটা</option>
                                    </select>
                                    <span class="text-danger error-message" id="error-expect_body_type"></span>
                                  </div>
                                </div>
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label>শিক্ষাগত যোগ্যতা<span
                                      class="must-fillup-estaristic"
                                      >*</span></label>
                                  </div>
                                  <div class="biodata_select">
                                    <input
                                      type="text"
                                      name="expect_education"
                                      class="input-filup-text"
                                      value="{{ optional(optional($biodata)->subBiodata)->expect_education ?? '' }}"
                                    />
                                    <span class="text-danger error-message" id="error-expect_education"></span>
                                  </div>
                                </div>
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label>আকীদা/মাযহাব<span
                                      class="must-fillup-estaristic"
                                      >*</span></label>
                                  </div>
                                  <div class="biodata_select">
                                    <input
                                      type="text"
                                      name="expect_creed_sect"
                                      class="input-filup-text"
                                      value="{{ optional(optional($biodata)->subBiodata)->expect_creed_sect ?? '' }}"
                                    />
                                    <span class="text-danger error-message" id="error-expect_creed_sect"></span>
                                  </div>
                                </div>
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label>পেশা<span
                                      class="must-fillup-estaristic"
                                      >*</span></label>
                                  </div>
                                  <div class="biodata_select">
                                    <input
                                      type="text"
                                      name="expect_profession"
                                      class="input-filup-text"
                                      value="{{ optional(optional($biodata)->subBiodata)->expect_profession ?? '' }}"
                                    />
                                    <span class="text-danger error-message" id="error-expect_profession"></span>
                                  </div>
                                </div>
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label>অর্থনৈতিক অবস্থা<span
                                      class="must-fillup-estaristic"
                                      >*</span></label>
                                  </div>
                                  <div class="biodata_select">

                                    <select id="expect-economic-status" name="expect_economic_status[]" class="demo-default" multiple  placeholder="নির্বাচন করুন...">
                                        @php
                                            $explode_economic_status = explode(',', optional(optional($biodata)->subBiodata)->expect_economic_status);
                                        @endphp
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="upper_class" {{ in_array('upper_class', $explode_economic_status) ? 'selected' : '' }}>উচ্চবিত্ত</option>

                                        <option value="upper_middle_class" {{ in_array('upper_middle_class', $explode_economic_status) ? 'selected' : '' }}>উচ্চ মধ্যবিত্ত</option>

                                        <option value="middle_class" {{ in_array('middle_class', $explode_economic_status) ? 'selected' : '' }}>মধ্যবিত্ত</option>

                                        <option value="lower_middle_class" {{ in_array('lower_middle_class', $explode_economic_status) ? 'selected' : '' }}>নিম্ন মধ্যবিত্ত</option>

                                        <option value="lower_class" {{ in_array('lower_class', $explode_economic_status) ? 'selected' : '' }}>নিম্নবিত্ত</option>
                                    </select>
                                    <span class="text-danger error-message" id="error-expect_economic_status"></span>
                                  </div>
                                </div>
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label
                                      >জীবনসঙ্গীর যেসকল বৈশিষ্ট্য বা গুণাবলী আশা করেন?<span
                                        class="must-fillup-estaristic"
                                        >*</span
                                      ></label
                                    >
                                  </div>
                                  <div class="biodata_select">
                                    <textarea
                                      name="expect_life_partner"
                                      class="input-filup-text"
                                    > {{ optional(optional($biodata)->subBiodata)->expect_life_partner ?? '' }}</textarea>
                                  </div>
                                  <span class="text-danger error-message" id="error-expect_life_partner"></span>
                                </div>
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label
                                      >বিশেষ কিছু যদি জানাতে চান?</label
                                    >
                                  </div>
                                  <div class="biodata_select">
                                    <textarea
                                      name="expect_something_special"
                                      class="input-filup-text"
                                    >{{ optional(optional($biodata)->subBiodata)->expect_something_special ?? '' }}</textarea>
                                  </div>
                                  <span class="text-danger error-message" id="error-expect_something_special"></span>
                                </div>
                                <div class="add_biodata_submit buttons">
                                  <button
                                    type="button"
                                    id="back8"
                                    class="prevBtn back ds-button-border"
                                  >
                                    Back
                                  </button>
                                  <button
                                    type="submit"
                                    id="save_next8"
                                    class="nextBtn save_next ds-button"
                                  >
                                    Save & Next
                                  </button>
                                </div>
                              </div>
                            </form>
                            {{-- biodata alert --}}
                            <div id="marriage-alert" class=" alert-box biotada-alert" style="display: none">
                                <i class="fa-solid fa-circle-check"></i>
                                <span></span>
                                <div class="suc-progress-bar"></div>
                            </div>
                        </div>
                          <!-- {{-- Stap-9 --}} -->
                        <div class="add_biodata_content"  id="dsdb_form_step_9" >
                            <form
                              action="{{ route('inquiries.information.store') }}"
                              method="POST"
                              id="inquiries-information"
                              data-step="inquiries"
                              >

                              <div class="biodata_form_content">
                                <div class="form_title">
                                  <h2>কর্তৃপক্ষের জিজ্ঞাসা</h2>
                                </div>
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label
                                      >বায়োডাটা জমা দিতে অভিভাবকের অনুমতি নিয়েছেন?<span class="must-fillup-estaristic"
                                        >*</span
                                      ></label
                                    >
                                  </div>
                                  <div class="biodata_select">
                                    <select
                                      name="guardian_permission"
                                      class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                      style="width: 100%"
                                    ><option value="">নির্বাচন করুন</option>
                                      <option value="yes" {{ optional(optional($biodata)->subBiodata)->guardian_permission == 'yes' ? 'selected' : '' }}>হ্যা</option>

                                      <option value="no" {{ optional(optional($biodata)->subBiodata)->guardian_permission == 'no' ? 'selected' : '' }}>না</option>
                                    </select>
                                    <span class="text-danger error-message" id="error-guardian_permission"></span>
                                  </div>
                                </div>
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label
                                      >আল্লাহ'র শপথ করে সাক্ষ্য দিন, যে তথ্যগুলো দিয়েছেন তা সবই সত্য<span class="must-fillup-estaristic"
                                        >*</span
                                      ></label
                                    >
                                  </div>
                                  <div class="biodata_select">
                                    <select
                                      name="information_true"
                                      class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                      style="width: 100%"
                                    >
                                    <option value="">নির্বাচন করুন</option>
                                      <option value="yes" {{ optional(optional($biodata)->subBiodata)->information_true == 'yes' ? 'selected' : '' }}>হ্যা</option>

                                      <option value="no" {{ optional(optional($biodata)->subBiodata)->information_true == 'no' ? 'selected' : '' }}>না</option>
                                    </select>
                                    <span class="text-danger error-message" id="error-information_true"></span>
                                  </div>
                                </div>
                                <div class="biodata_field">
                                  <div class="biodata_label">
                                    <label
                                      >কোনো মিথ্যা তথ্য দিয়ে থাকলে তার দুনিয়াবী ও আখিরাতের দায়ভার কর্তৃপক্ষ নিবে না। আপনি কি এতে সম্মতি দিচ্ছেন?<span class="must-fillup-estaristic"
                                        >*</span
                                      ></label
                                    >
                                  </div>
                                  <div class="biodata_select">
                                    <select
                                      name="responsibility"
                                      class="select2 aw-biodata-dropdown select2-hidden-accessible"
                                      style="width: 100%"
                                      id=""
                                    ><option value="">নির্বাচন করুন</option>
                                      <option value="yes" {{ optional(optional($biodata)->subBiodata)->responsibility == 'yes' ? 'selected' : '' }}>হ্যা</option>

                                      <option value="no" {{ optional(optional($biodata)->subBiodata)->responsibility == 'no' ? 'selected' : '' }}>না</option>
                                    </select>
                                    <span class="text-danger error-message" id="error-responsibility"></span>
                                  </div>
                                </div>
                                <div class="add_biodata_submit buttons">
                                  <button
                                    type="button"
                                    id="back9"
                                    class="prevBtn back ds-button-border"
                                  >
                                    Back
                                  </button>
                                  <button
                                    type="submit"
                                    id="save_next9"
                                    class="nextBtn save_next ds-button"
                                  >
                                    Save & Next
                                  </button>
                                </div>
                              </div>
                            </form>
                            {{-- biodata alert --}}
                            <div id="expectation-alert" class=" alert-box biotada-alert" style="display: none">
                                <i class="fa-solid fa-circle-check"></i>
                                <span></span>
                                <div class="suc-progress-bar"></div>
                            </div>
                        </div>
                          <!-- {{-- Stap-10 --}} -->
                        <div class="add_biodata_content" id="dsdb_form_step_10" >
                            <form
                              action="{{ route('contact.information.store') }}"
                              method="POST"
                              id="contact-information"
                              data-step="contact" >

                              <div class="biodata_form_content">
                                <div class="form_title">
                                  <h2>যোগাযোগ তথ্য</h2>
                                </div>
                                {{-- male --}}
                                  <div class="biodata_field ds-groom-detail-field">
                                    <div class="biodata_label">
                                      <label>পাত্রের নাম<span
                                        class="must-fillup-estaristic"
                                        >*</span></label>
                                    </div>
                                    <div class="biodata_select">
                                      <input
                                        type="text"
                                        name="husband_name"
                                        class="input-filup-text" placeholder="পূর্ণ নাম লিখুন"
                                        value="{{ optional(optional($biodata)->subBiodata)->husband_name ?? '' }}"
                                      />
                                       <span class="text-danger error-message" id="error-husband_name"></span>
                                    </div>
                                  </div>
                                  {{-- male --}}
                                  {{-- female --}}
                                  <div class="biodata_field ds-bride-detail-field">
                                    <div class="biodata_label">
                                      <label>পাত্রীর নাম<span
                                        class="must-fillup-estaristic"
                                        >*</span></label>
                                    </div>
                                    <div class="biodata_select">
                                      <input
                                        type="text"
                                        name="wife_name"
                                        class="input-filup-text" placeholder="পূর্ণ নাম লিখুন"
                                        value="{{ optional(optional($biodata)->subBiodata)->wife_name ?? '' }}"
                                      />
                                       <span class="text-danger error-message" id="error-wife_name"></span>
                                    </div>
                                  </div>
                                  {{-- female --}}
                                  <div class="biodata_field">
                                    <div class="biodata_label">
                                      <label>অভিভাবকের মোবাইল নাম্বার<span
                                        class="must-fillup-estaristic"
                                        >*</span></label>
                                    </div>
                                    <div class="biodata_select">
                                      <input
                                        type="text"
                                        name="guardian_mobile"
                                        class="input-filup-text" placeholder="018600-00000"
                                        value="{{ optional(optional($biodata)->subBiodata)->guardian_mobile ?? '' }}"
                                      />
                                       <span class="text-danger error-message" id="error-guardian_mobile"></span>
                                    </div>
                                  </div>
                                  <div class="input-highlighter-text">
                                    <p>
                                      আপনার পরিবারের সাথে যোগাযোগ করতে ইচ্ছুক ব্যক্তিকে এই নাম্বার দেওয়া হবে। এছাড়াও বায়োডাটা ভেরিফিকেশনের জন্য এই নাম্বারে কল করা হবে। তাই অভিভাবক ব্যতীত নিজের অথবা অন্য কারও নাম্বার দেওয়া হতে সতর্ক থাকুন।
                                    </p>
                                  </div>
                                  <div class="biodata_field">
                                    <div class="biodata_label">
                                      <label>অভিভাবকের সাথে সম্পর্ক<span
                                        class="must-fillup-estaristic"
                                        >*</span></label>
                                    </div>
                                    <div class="biodata_select">
                                      <input
                                        type="text"
                                        name="guardian_relation"
                                        class="input-filup-text" placeholder="বাবা"
                                        value="{{ optional(optional($biodata)->subBiodata)->guardian_relation ?? '' }}"
                                      />
                                       <span class="text-danger error-message" id="error-guardian_relation"></span>
                                    </div>
                                  </div>
                                  <div class="biodata_field">
                                    <div class="biodata_label">
                                      <label>যে ই-মেইলে বায়োডাটা পেতে চান<span
                                        class="must-fillup-estaristic"
                                        >*</span></label>
                                    </div>
                                    <div class="biodata_select">
                                      <input
                                        type="text"
                                        name="receive_biodata_email"
                                        class="input-filup-text" placeholder="myadress@gmail.com"
                                        value="{{ optional(optional($biodata)->subBiodata)->receive_biodata_email ?? '' }}"
                                      />
                                       <span class="text-danger error-message" id="error-receive_biodata_email"></span>
                                    </div>
                                  </div>
                                <div class="add_biodata_submit buttons">
                                  <button
                                    type="button"
                                    id="back10"
                                    class="prevBtn back ds-button-border"
                                  >
                                    Back
                                  </button>
                                  <button
                                    type="submit"
                                    id="save_next10"
                                    class="nextBtn ds-button"
                                  >
                                    Save & Next
                                  </button>
                                </div>
                            </form>
                            {{-- biodata alert --}}
                            <div id="inquiries-alert" class=" alert-box biotada-alert" style="display: none">
                                <i class="fa-solid fa-circle-check"></i>
                                <span></span>
                                <div class="suc-progress-bar"></div>
                            </div>
                            {{-- biodata alert --}}
                            <div id="contact-alert" class=" alert-box biotada-alert" style="display: none">
                                <i class="fa-solid fa-circle-check"></i>
                                <span></span>
                                <div class="suc-progress-bar"></div>
                            </div>
                        </div>
                          <!-- {{-- ////// --}} -->
                        </div>
                        <!-- {{-- biodata content end --}} -->
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
        const initialStepFromServer = {{ $currentStep ?? 0 }};

        $(function () {
            if (typeof initialStepFromServer !== 'undefined' && initialStepFromServer >= 10) {
                goToStep(0);
                $('.biodata_nav_link').removeClass('active');
            } else {
                goToStep(initialStepFromServer || 0);
            }
        });

        // $(function () {
        //     let validatedStep = (typeof initialStepFromServer !== 'undefined' && initialStepFromServer > 0) ? 0 : 0;
        //     goToStep(validatedStep);
        //     // $('.biodata_nav_link').removeClass('active');
        // });
    </script>
    <script>
        $('#select-gear').selectize({ sortField: 'text' })
        $('#expect-marital-type').selectize({ sortField: 'text' })
        $('#expect-skin-colors').selectize({ sortField: 'text' })
        $('#expect-body-type').selectize({ sortField: 'text' })
        $('#expect-economic-status').selectize({ sortField: 'text' })
    </script>

@endsection


