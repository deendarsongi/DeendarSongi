@extends('frontend.master')
@section('content')
<section class="aw-biodatas">
    <div class="aw-biodatas-container">
      <div class="aw-biodatas-sidebar">
        <div class="biodats-sidebar-closebar">
          <button>
            <i class="bi bi-x-square-fill biodats-sidebar-close-btn"></i>
          </button>
        </div>
        <div class="aw-biodatas-fillter-top">
          <div class="aw-tab-btn1 aw-fillter-btn">
            <input
              type="radio"
              id="bio-search-tab1"
              name="search-bio-type"
              checked
            />
            <label for="bio-search-tab1" class="bio-search-each-tab">ফিল্টারসমূহ</label>
            <div class="aw-bio-tab1">
              <div class="aw-search-content-container">
                <div class="aw-general-accordion-group">
                  <input
                    type="checkbox"
                    class="awb-group-trigger"
                    id="awb-group-trigger-0"
                    checked
                  />
                  <div class="aw-group-trigger-title">
                    <label
                      for="awb-group-trigger-0"
                      class="awb-group-trigger-title"
                      >সাধারণ তথ্য</label
                    >
                    <i
                      class="bi bi-chevron-down awb-group-trigger-icon"
                    ></i>
                  </div>
                  <div class="aw-general-accordion-content">
                    <div class="awb-each-field">
                      <div class="awb-ef-label">
                        <label for="">আমি খুঁজছি</label>
                      </div>
                      <div class="-awb-ef-input">
                        <select
                          class="select2 aw-biodata-dropdown"
                          name="lookingfor"
                        >
                          <option value="no_selected">সকল</option>
                          <option value="male-biodata">
                            পাত্রের বায়োডাটা
                          </option>
                          <option value="female-biodata">
                            পাত্রীর বায়োডাটা
                          </option>
                        </select>
                      </div>
                    </div>
                    <div class="awb-each-field">
                      <div class="awb-ef-label">
                        <label for="">বৈবাহিক অবস্থা</label>
                      </div>
                      <div class="-awb-ef-input">
                        <select
                          class="select2 aw-biodata-dropdown"
                          name="marital-status"
                        >
                          <option value="no_selected">সকল</option>
                          <option value="unmarried">অবিবাহিত</option>
                          <option value="married">বিবাহিত</option>
                          <option value="devorced">ডিভোর্সড</option>
                          <option value="widow">বিধবা</option>
                          <option value="widower">বিপত্নীক</option>
                        </select>
                      </div>
                    </div>
                    <div class="awb-each-field">
                      <div class="awb-ef-label">
                        <label for="">বয়স</label>
                        <input
                          type="range"
                          class="age-range-slider"
                          name="my_range"
                          value=""
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="aw-general-accordion-group">
                  <input
                    type="checkbox"
                    class="awb-group-trigger"
                    id="awb-group-trigger-2"
                  />
                  <div class="aw-group-trigger-title">
                    <label
                      for="awb-group-trigger-2"
                      class="awb-group-trigger-title"
                      >ঠিকানা</label
                    >
                    <i
                      class="bi bi-chevron-down awb-group-trigger-icon"
                    ></i>
                  </div>
                  <div class="aw-general-accordion-content">
                    <div class="awb-each-field">
                      <div class="awb-ef-label">
                        <label for="">স্থায়ী ঠিকানা</label>
                      </div>
                      <div class="awb-ef-input">
                        <div class="aw-search-content mb-0">
                          <div class="aw-search-option-input">
                            <div class="aw-location-dropdown">
                              <a
                                href="#"
                                class="aw-location-dropdown-trigger"
                                >ঠিকানা নির্বাচন করুন</a
                              >
                              <div
                                class="awl-wrap aw-location-panel-wrap"
                              ></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="aw-general-accordion-content">
                    <div class="awb-each-field">
                      <div class="awb-ef-label">
                        <label for="">বর্তমান ঠিকানা</label>
                      </div>
                      <div class="awb-ef-input">
                        <div class="aw-search-content mb-0">
                          <div class="aw-search-option-input">
                            <div class="aw-location-dropdown">
                              <a
                                href="#"
                                class="aw-location-dropdown-trigger"
                                >ঠিকানা নির্বাচন করুন</a
                              >
                              <div
                                class="awl-wrap aw-location-panel-wrap"
                              ></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="aw-general-accordion-group">
                  <input
                    type="checkbox"
                    class="awb-group-trigger"
                    id="awb-group-trigger-3"
                  />
                  <div class="aw-group-trigger-title">
                    <label
                      for="awb-group-trigger-3"
                      class="awb-group-trigger-title"
                      >শিক্ষা</label
                    >
                    <i
                      class="bi bi-chevron-down awb-group-trigger-icon"
                    ></i>
                  </div>
                  <div class="aw-general-accordion-content">
                    <div class="awb-each-field">
                      <div class="awb-ef-label">
                        <label for="">পড়ালেখার মাধ্যম</label>
                      </div>
                      <div class="awb-ef-input">
                        <div class="ds-profile-search-checkbox">
                          <div class="ds-biodata-row">
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="e1" class="dsb-field-checkbox">
                                  <input type="checkbox" id="e1" /> জেনারেল
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="e3" class="dsb-field-checkbox">
                                  <input type="checkbox" id="e3" /> কওমী
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="aw-general-accordion-content">
                    <div class="awb-each-field">
                      <div class="awb-ef-label">
                        <label for="">দ্বীনি যোগ্যতা</label>
                      </div>
                      <div class="awb-ef-input">
                        <div class="ds-profile-search-checkbox">
                          <div class="ds-biodata-row">
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="dq1" class="dsb-field-checkbox">
                                  <input type="checkbox" id="dq1" /> হাফেজ
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="dq2" class="dsb-field-checkbox">
                                  <input type="checkbox" id="dq2" /> মাওলানা
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="dq3" class="dsb-field-checkbox">
                                  <input type="checkbox" id="dq3" /> মুফতি
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="dq4" class="dsb-field-checkbox">
                                  <input type="checkbox" id="dq4" />
                                  মুফাসিসর
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="aw-general-accordion-group">
                  <input
                    type="checkbox"
                    class="awb-group-trigger"
                    id="awb-group-trigger-4"
                  />
                  <div class="aw-group-trigger-title">
                    <label
                      for="awb-group-trigger-4"
                      class="awb-group-trigger-title"
                      >পেশা</label
                    >
                    <i
                      class="bi bi-chevron-down awb-group-trigger-icon"
                    ></i>
                  </div>
                  <div class="aw-general-accordion-content">
                    <div class="awb-each-field">
                      <div class="awb-ef-label">
                        <label for="">পেশা</label>
                      </div>
                      <div class="awb-ef-input">
                        <div class="ds-profile-search-checkbox">
                          <div class="ds-biodata-row">
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="p1" class="dsb-field-checkbox">
                                  <input type="checkbox" id="p1" /> ইমাম
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="p20" class="dsb-field-checkbox">
                                  <input type="checkbox" id="p20" /> মুয়াজ্জিন
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="p2" class="dsb-field-checkbox">
                                  <input type="checkbox" id="p2" /> ব্যবসায়ী
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="p3" class="dsb-field-checkbox">
                                  <input type="checkbox" id="p3" /> শিক্ষক
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="p4" class="dsb-field-checkbox">
                                  <input type="checkbox" id="p4" />মাদরাসা শিক্ষক
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="p5" class="dsb-field-checkbox">
                                  <input type="checkbox" id="p5" />
                                  উদ্যোক্তা
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="p6" class="dsb-field-checkbox">
                                  <input type="checkbox" id="p6" />
                                  ফ্রিল্যান্সার
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="p7" class="dsb-field-checkbox">
                                  <input type="checkbox" id="p7" /> ডাক্তার
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="p8" class="dsb-field-checkbox">
                                  <input type="checkbox" id="p8" />
                                  ইঞ্জিনিয়ার
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="p9" class="dsb-field-checkbox">
                                  <input type="checkbox" id="p9" /> সরকারী
                                  চাকুরি
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="p10" class="dsb-field-checkbox">
                                  <input type="checkbox" id="p10" />
                                  বেসরকারী চাকুরি
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="p11" class="dsb-field-checkbox">
                                  <input type="checkbox" id="p11" />
                                  লেখক
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="p12" class="dsb-field-checkbox">
                                  <input type="checkbox" id="p12" />
                                  সাংবাদিক
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="p13" class="dsb-field-checkbox">
                                  <input type="checkbox" id="p13" />
                                  হিসাবরক্ষক
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="p14" class="dsb-field-checkbox">
                                  <input type="checkbox" id="p14" />
                                  শিক্ষার্থী
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="p21" class="dsb-field-checkbox">
                                  <input type="checkbox" id="p21" />
                                  MBBS/BDS শিক্ষার্থী
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="p15" class="dsb-field-checkbox">
                                  <input type="checkbox" id="p15" /> প্রবাসী
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="p16" class="dsb-field-checkbox">
                                  <input type="checkbox" id="p16" /> কৃষক
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="p17" class="dsb-field-checkbox">
                                  <input type="checkbox" id="p17" /> গৃহিণী
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="p18" class="dsb-field-checkbox">
                                  <input type="checkbox" id="p18" />
                                  অন্যান্য
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="p19" class="dsb-field-checkbox">
                                  <input type="checkbox" id="p19" />
                                  পেশা নেই
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="aw-general-accordion-group">
                  <input
                    type="checkbox"
                    class="awb-group-trigger"
                    id="awb-group-trigger-5"
                  />
                  <div class="aw-group-trigger-title">
                    <label
                      for="awb-group-trigger-5"
                      class="awb-group-trigger-title"
                      >ব্যক্তিগত</label
                    >
                    <i
                      class="bi bi-chevron-down awb-group-trigger-icon"
                    ></i>
                  </div>
                  <div class="aw-general-accordion-content">
                    <div class="awb-each-field">
                      <div class="awb-ef-label">
                        <label for="">উচ্চতা</label>
                        <input
                          type="range"
                          class="height-range-slider"
                          name="my_range"
                          value=""
                        />
                      </div>
                    </div>
                    <div class="awb-each-field">
                      <div class="awb-ef-label">
                        <label for="">গাত্রবর্ণ</label>
                      </div>
                      <div class="awb-ef-input">
                        <div class="ds-profile-search-checkbox">
                          <div class="ds-biodata-row">
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="sc1" class="dsb-field-checkbox">
                                  <input type="checkbox" id="sc1" /> কালো
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="sc2" class="dsb-field-checkbox">
                                  <input type="checkbox" id="sc2" /> শ্যামলা
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="sc3" class="dsb-field-checkbox">
                                  <input type="checkbox" id="sc3" /> উজ্জ্বল
                                  শ্যামলা
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="sc4" class="dsb-field-checkbox">
                                  <input type="checkbox" id="sc4" /> ফর্সা
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="sc5" class="dsb-field-checkbox">
                                  <input type="checkbox" id="sc5" /> উজ্জ্বল
                                  ফর্সা
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="awb-each-field">
                      <div class="awb-ef-label">
                        <label for="">বিশেষ ক্যাটাগরি</label>
                      </div>
                      <div class="awb-ef-input">
                        <div class="ds-profile-search-checkbox">
                          <div class="ds-biodata-row">
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="c8" class="dsb-field-checkbox">
                                  <input type="checkbox" id="c8" /> ফরেন সিটিজেন
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="c1" class="dsb-field-checkbox">
                                  <input type="checkbox" id="c1" /> নওমুসলিম
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="c2" class="dsb-field-checkbox">
                                  <input type="checkbox" id="c2" /> এতিম
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="c3" class="dsb-field-checkbox">
                                  <input type="checkbox" id="c3" />
                                  প্রতিবন্ধি
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="c4" class="dsb-field-checkbox">
                                  <input type="checkbox" id="c4" /> বন্ধা
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="c5" class="dsb-field-checkbox">
                                  <input type="checkbox" id="c5" /> মাসনা
                                  হতে আগ্রহী
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="c6" class="dsb-field-checkbox">
                                  <input type="checkbox" id="c6" /> শর্ট ডিভোর্সি
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="c7" class="dsb-field-checkbox">
                                  <input type="checkbox" id="c7" /> স্বল্প উচ্চতার
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="aw-general-accordion-group">
                  <input
                    type="checkbox"
                    class="awb-group-trigger"
                    id="awb-group-trigger-6"
                  />
                  <div class="aw-group-trigger-title">
                    <label
                      for="awb-group-trigger-6"
                      class="awb-group-trigger-title"
                      >পারিবারিক অবস্থা</label
                    >
                    <i
                      class="bi bi-chevron-down awb-group-trigger-icon"
                    ></i>
                  </div>
                  <div class="aw-general-accordion-content">
                    <div class="awb-each-field">
                      <div class="awb-ef-label">
                        <label for="">পরিবারের ধরন</label>
                      </div>
                      <div class="awb-ef-input">
                        <div class="ds-profile-search-checkbox">
                          <div class="ds-biodata-row">
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="fs1" class="dsb-field-checkbox">
                                  <input type="checkbox" id="fs1" /> যৌথ
                                  পরিবার
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="fs2" class="dsb-field-checkbox">
                                  <input type="checkbox" id="fs2" /> একক
                                  পরিবার
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="awb-each-field">
                      <div class="awb-ef-label">
                        <label for="">অর্থনৈতিক অবস্থা</label>
                      </div>
                      <div class="awb-ef-input">
                        <div class="ds-profile-search-checkbox">
                          <div class="ds-biodata-row">
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="es1" class="dsb-field-checkbox">
                                  <input type="checkbox" id="es1" />
                                  উচ্চবিত্ত
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="es2" class="dsb-field-checkbox">
                                  <input type="checkbox" id="es2" /> উচ্চ
                                  মধ্যবিত্ত
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="es3" class="dsb-field-checkbox">
                                  <input type="checkbox" id="es3" />
                                  মধ্যবিত্ত
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="es4" class="dsb-field-checkbox">
                                  <input type="checkbox" id="es4" /> নিম্ন
                                  মধ্যবিত্ত
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="es5" class="dsb-field-checkbox">
                                  <input type="checkbox" id="es5" />
                                  নিম্নবিত্ত
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="aw-general-accordion-group">
                  <input
                    type="checkbox"
                    class="awb-group-trigger"
                    id="awb-group-trigger-7"
                  />
                  <div class="aw-group-trigger-title">
                    <label
                      for="awb-group-trigger-7"
                      class="awb-group-trigger-title"
                      >অন্যান্য</label
                    >
                    <i
                      class="bi bi-chevron-down awb-group-trigger-icon"
                    ></i>
                  </div>
                  <div class="aw-general-accordion-content">
                    <div class="awb-each-field">
                      <div class="awb-ef-label">
                        <label for="">আকীদা/মাযহাব</label>
                      </div>
                      <div class="awb-ef-input">
                        <div class="ds-profile-search-checkbox">
                          <div class="ds-biodata-row">
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="ef1" class="dsb-field-checkbox">
                                  <input type="checkbox" id="ef1" />সালাফি/আহলে হাদিস
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="ef2" class="dsb-field-checkbox">
                                  <input type="checkbox" id="ef2" />
                                  হানাফি
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="ef3" class="dsb-field-checkbox">
                                  <input type="checkbox" id="ef3" /> মালেকি
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="ef4" class="dsb-field-checkbox">
                                  <input type="checkbox" id="ef4" />
                                  শাফিঈ
                                </label>
                              </div>
                            </div>
                            <div class="ds-biodata-col">
                              <div class="dsb-each-field">
                                <label for="ef5" class="dsb-field-checkbox">
                                  <input type="checkbox" id="ef5" />
                                  হাম্বলি
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="ds-search-fields">
                  <button
                    type="reset"
                    class="ds-search-all-items-clear-btn search-all-items-btn ds-button-border"
                  >
                    ডাটা মুছুন
                  </button>
                  <button
                    type="submit"
                    class="ds-search-all-items-submit-btn ds-button"
                  >
                    খুঁজুন
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="aw-tab-btn2 aw-fillter-btn">
            <input
              type="radio"
              id="bio-search-tab2"
              name="search-bio-type"
            />
            <label for="bio-search-tab2" class="bio-search-each-tab">বায়োডাটা নাম্বার</label>
            <div class="aw-bio-tab2">
              <div class="aw-search-content-container">
                <div class="awb-each-field">
                  <div class="awb-ef-label">
                    <label for="">বায়োডাটা নাম্বার লিখুন</label>
                  </div>
                  <div class="awb-ef-input">
                    <input type="text" placeholder="DSB1489" />
                  </div>
                </div>
                <div class="ds-search-fields">
                  <button
                    type="reset"
                    class="ds-search-all-items-clear-btn search-all-items-btn ds-button-border"
                  >
                    ডাটা মুছুন
                  </button>
                  <button
                    type="submit"
                    class="ds-search-all-items-submit-btn ds-button"
                  >
                   খুঁজুন
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="aw-biodatas-content">
        <div class="aw-profile-search-content">
          <div class="awb-head">
            <div class="awb-title-group">
              <h1>বায়োডাটা সমূহ</h1>
              <p>সর্বমোট {{ $biodatas->where('status', 'approved')->count() }} টি বায়োডাটা পাওয়া গিয়েছে</p>
            </div>
          </div>
          <div class="aw-biodata-profile-container">
            <div class="aw-row">
                @foreach ($biodatas as $biodata)
                 @if ($biodata->status == 'approved')
                 @php
                    $age = \Carbon\Carbon::parse($biodata->date_of_birth)->diffInYears(\Carbon\Carbon::now());
                    $bnDigits = ['০','১','২','৩','৪','৫','৬','৭','৮','৯'];
                    $enDigits = ['0','1','2','3','4','5','6','7','8','9'];
                    $ageBangla = str_replace($enDigits, $bnDigits, $age);
                @endphp
              <div class="col-12 col-md-6 col-xxl-4">
                <div class="awbc-each-biodata-card">
                    <div class="awbc-each-biodata-content">
                        <div class="awbc-profile-group">
                     <div class="biodata-profile-image">
                    @if (Auth::guard('customer')->user()->gender == 1)
                        <img src="{{ asset('frontend') }}/uploads/man.svg" alt="">
                    @else
                        <img src="{{ asset('frontend') }}/uploads/Woman.svg" alt="" />
                    @endif
                  </div>
                    </div>
                    <div class="awbc-biodata-info-group">
                        <div class="biodata-info-item">
                            <div class="biodata-number-box">
                    <span class="biodata-number">{{ $biodata->biodata_id }}</span>
                  </div>
                        </div>
                        <div class="biodata-info-item">
                            <p>{{ $ageBangla }} বছর</p>
                            <span class="bidoata-info-divider"></span>
                            <p>{{ __('biodata.height.' . $biodata->height) }}</p>
                            <span class="bidoata-info-divider"></span>
                            <p>{{ __('biodata.face_color.' . $biodata->face_color) }}</p>
                        </div>
                        <div class="biodata-info-item">
                            <p>{{ __('biodata.profession.' . $biodata->subBiodata->profession) }}</p>
                        </div>
                    </div>
                    <div class="biodata-like-viewcard">
                      <a href=""><img
                        src="{{ asset('frontend') }}/uploads/love.svg"
                        alt="like icon"
                        class="biodata-love"
                      /></a>
                      <a href=""><img
                        class="biodata-love-fill"
                        src="{{ asset('frontend') }}/uploads/love-fill.svg"
                        alt=""
                      /></a>
                    </div>
                    </div>
                    <div class="biodata-detail-btn-box">
                        <div class="awbc-biodata-detail-button">
                        <a href="{{ route('biodata.detail', ['id' => $biodata->id]) }}" target="_blank" class="">বিস্তারিত <span class="biodata-detail-arrow"><img
                            class=""
                            src="{{ asset('frontend') }}/uploads/Right-Arrow.svg"
                            alt=""
                        /></span></a>
                        </div>
                    </div>
                </div>
              </div>
                @endif
            @endforeach
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection
