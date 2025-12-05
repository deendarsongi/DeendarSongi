@extends('frontend.sidebar')

@section('dashboard_content')
    <div class="dsdb-content">
        <div class="ds-public-biodata-container">
            <div class="ds-container">
                <div class="dsb-content-inner">

                    <div class="row">
                        <div class="row preview-bio">
                            <div class="col-lg-6 col-md-6 col-12">
                                <h2 class="preview-bio-header">আমার বায়োডাটা</h2>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 bio-edit-btn">
                                <a href="{{ route('add.biodata') }}" class="bio-button">এডিট বায়োডাটা</a>
                            </div>
                        </div>
                        {{-- General Info--}}
                        <div class="col-12 col-lg-4">
                            <div class="dsb-each-bio-general">
                                <div class="each-bio-general-head-content">
                                    <div class="bio-head-img">
                                        @if (Auth::guard('customer')->user()->gender == 1)
                                            <img src="{{ asset('frontend') }}/uploads/man.svg" alt="">
                                        @else
                                            <img src="{{ asset('frontend') }}/uploads/Woman.svg" alt="" />
                                        @endif
                                    </div>
                                    <h2 class="bio-head-bio-number-box"><span class="biodata-number">{{ $biodata->biodata_id }}</span></h2>
                                </div>
                                <div class="each-bio-general-bottom-content">
                                    <div class="each-bio-info-item">
                                        <label for="">বায়োডাটার ধরন</label>
                                        <p>{{ __('biodata.biodata_type.' . $biodata->biodata_type) }}</p>
                                    </div>
                                    <div class="each-bio-info-item">
                                        <label for="">বৈবাহিক অবস্থা</label>
                                        <p> {{ __('biodata.married_type.' . $biodata->married_type) }} </p>
                                    </div>
                                    <div class="each-bio-info-item">
                                        <label for="">বয়স</label>
                                        <p> {{ formatDateToBangla($biodata->date_of_birth)['age'] }} </p>
                                    </div>
                                    <div class="each-bio-info-item">
                                        <label for="">উচ্চতা</label>
                                        <p>{{ __('biodata.height.' . $biodata->height) }}</p>
                                    </div>
                                    <div class="each-bio-info-item">
                                        <label for="">গাত্রবর্ণ</label>
                                        <p>{{ __('biodata.face_color.' . $biodata->face_color) }}</p>
                                    </div>

                                    <div class="each-bio-info-item">
                                        <label for="">ওজন</label>
                                        <p>{{ __('biodata.weight.' . $biodata->weight) }}</p>
                                    </div>
                                    <div class="each-bio-info-item">
                                        <label for="">শারীরিক গঠন</label>
                                        <p>{{ __('biodata.body_shape.' . $biodata->body_shape) }}</p>
                                    </div>
                                    <div class="each-bio-info-item">
                                        <label for="">রক্তের গ্রুপ</label>
                                        <p>{{ __('biodata.blood_group.' . $biodata->blood_group) }}</p>
                                    </div>
                                    @if ($biodata->professionalinfo_validate == true)
                                        <div class="each-bio-info-item">
                                            <label for="">পেশা</label>
                                            <p>{{ __('biodata.profession.' . optional($biodata->subBiodata)->profession) }}</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        {{-- End --}}

                        {{-- Address Info--}}
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

                                    $currentAddress = implode(', ', array_filter([
                                        $biodata->current_upazila,
                                        $biodata->current_district,
                                        $biodata->current_division,
                                        $biodata->current_country,
                                    ]));
                                @endphp
                            @endif
                        {{-- ,,, --}}
                        <div class="col-12 col-lg-8">
                            <div class="dsb-each-bio-field">
                                <div class="dsb-ebf-inner">
                                    <div class="dsb-ebf-head">
                                        <h3>ঠিকানা</h3>
                                        <img src="{{ asset('frontend') }}/uploads/ornament.svg" alt="">
                                    </div>
                                    @if ($biodata->address_validate == true)
                                    <div class="dsb-ebf-content">
                                        <div class="dsb-ebf-item">
                                            <label for="">স্থায়ী ঠিকানা</label>
                                            <p><span>{{ $permanentAddress }}</span></p>
                                        </div>
                                        <div class="dsb-ebf-item">
                                            <label for="">বর্তমান ঠিকানা</label>
                                            <p><span>{{ $currentAddress }}</span></p>
                                        </div>
                                        <div class="dsb-ebf-item dsb-ebf-text-item">
                                            <label for="">আপনার জন্ম ও বেড়ে ওঠা কোথায়?</label>
                                            <p><span>{{ optional($biodata)->born_raised ?? '' }}</span></p>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            {{-- End --}}
                            {{-- Education Info --}}
                            <div class="dsb-each-bio-field">
                                <div class="dsb-ebf-inner">
                                    <div class="dsb-ebf-head">
                                        <h3>শিক্ষাগত যোগ্যতা</h3>
                                        <img src="{{ asset('frontend') }}/uploads/ornament.svg" alt="">
                                    </div>
                                    @if ($biodata->education_validate == true)
                                    <div class="dsb-ebf-content">
                                        <div class="dsb-ebf-item">
                                            <label for="">কোন মাধ্যমে পড়াশোনা করেছেন?</label>
                                            <p><span>{{ __('biodata.education_type.' . optional($biodata)->education_type) }}</span></p>
                                        </div>
                                        <div class="dsb-ebf-item dsb-ebf-text-item">
                                            <label for=""> আপনার সর্বোচ্চ শিক্ষাগত যোগ্যতা?</label>
                                            <p><span>{{ __('biodata.highest_education.' . optional($biodata)->highest_education) }}</span></p>
                                        </div>
                                        {{-- Highest Education Base --}}
                                        {{-- Below_ssc --}}
                                        @if ($biodata->highest_education == 'below_ssc')
                                            <div class="dsb-ebf-item">
                                            <label for="">সর্বোচ্চ কোন ক্লাস পর্যন্ত পড়েছেন?</label>
                                            <p><span>{{ __('biodata.under_ssc_class.' . optional($biodata)->under_ssc_class) }}</span></p>
                                        </div>
                                        @endif
                                        {{-- end --}}

                                        {{-- ssc --}}
                                        @if (in_array($biodata->highest_education, ['ssc', 'hsc', 'diploma_ongoing','diploma', 'honours_ongoing', 'honours', 'masters' ]))
                                            <div class="dsb-ebf-item">
                                                <label for="">কত সালে এসএসসি/দাখিল বা সমমান পাস করেছেন?</label>
                                                <p><span>{{ optional($biodata)->ssc_passing_year ?? '' }}</span></p>
                                            </div>
                                            <div class="dsb-ebf-item">
                                                <label for="">বিভাগ</label>
                                                <p><span>{{ __('biodata.education_category.' . optional($biodata)->ssc_education_category) }}</span></p>
                                            </div>
                                            <div class="dsb-ebf-item">
                                                <label for="">ফলাফল</label>
                                                <p><span>{{ optional($biodata)->ssc_result ?? '' }}</span></p>
                                            </div>
                                            @if ($biodata->highest_education == 'ssc')
                                                <div class="dsb-ebf-item">
                                                    <label for="">এইচএসসি/ আলিম বা সমমান কোন বর্ষে পড়ছেন?</label>
                                                    <p><span>{{ optional($biodata)->hsc_ongoing_year ?? '' }}</span></p>
                                                </div>
                                            @endif
                                        @endif
                                        {{-- end --}}
                                        {{-- Hsc --}}
                                        @if ($biodata->highest_education == 'hsc')
                                            <div class="dsb-ebf-item">
                                                <label for="">কত সালে এইচএসসি/আলিম বা সমমান পাস করেছেন?</label>
                                                <p><span>{{ optional($biodata)->hsc_passing_year ?? '' }}</span></p>
                                            </div>
                                            <div class="dsb-ebf-item">
                                                <label for="">বিভাগ</label>
                                                <p><span>{{ __('biodata.education_category.' . optional($biodata)->hsc_education_category) }}</span></p>
                                            </div>
                                            <div class="dsb-ebf-item">
                                                <label for="">ফলাফল</label>
                                                <p><span>{{ optional($biodata)->hsc_result ?? '' }}</span></p>
                                            </div>
                                        @endif
                                        {{-- End --}}

                                        {{-- DIPLOMA_ONGOING --}}
                                        @if ($biodata->highest_education == 'diploma_ongoing')
                                            <div class="dsb-ebf-item">
                                                <label for="">কোন বিষয়ে ডিপ্লোমা পড়ছেন?</label>
                                                <p><span>{{ optional($biodata)->diploma_ongoing_subject ?? '' }}</span></p>
                                            </div>
                                            <div class="dsb-ebf-item">
                                                <label for="">কোন বর্ষে পড়ছেন?</label>
                                                <p><span>{{ optional($biodata)->diploma_ongoing_year ?? '' }}</span></p>
                                            </div>
                                            <div class="dsb-ebf-item">
                                                <label for="">শিক্ষাপ্রতিষ্ঠানের নাম</label>
                                                <p><span>{{ optional($biodata)->diploma_ongoing_institut ?? '' }}</span></p>
                                            </div>
                                        @endif
                                        {{-- End --}}

                                        {{-- DIPLOMA --}}
                                        @if ($biodata->highest_education == 'diploma')
                                            <div class="dsb-ebf-item">
                                                <label for="">কোন বিষয়ে ডিপ্লোমা পাস করেছেন?</label>
                                                <p><span>{{ optional($biodata)->diploma_passing_subject ?? '' }}</span></p>
                                            </div>
                                            <div class="dsb-ebf-item">
                                                <label for="">ডিপ্লোমা পাসের সন</label>
                                                <p><span>{{ optional($biodata)->diploma_passing_year ?? '' }}</span></p>
                                            </div>
                                            <div class="dsb-ebf-item">
                                                <label for="">শিক্ষাপ্রতিষ্ঠানের নাম</label>
                                                <p><span>{{ optional($biodata)->diploma_passing_institut ?? '' }}</span></p>
                                            </div>
                                        @endif
                                        {{-- End --}}

                                        {{-- Honours_ongoing/Honours/Masters  --}}
                                        @if (in_array($biodata->highest_education, ['honours_ongoing', 'honours', 'masters' ]))
                                            <div class="dsb-ebf-item">
                                                <label for="">এসএসসি’র পর কোন মাধ্যমে পড়েছেন?</label>
                                                <p><span>{{ __('biodata.education_category.' . optional($biodata)->after_ssc_education) }}</span></p>
                                            </div>
                                            {{-- hsc --}}
                                            @if ($biodata->after_ssc_education == 'hsc_education')
                                                <div class="dsb-ebf-item">
                                                <label for="">কত সালে এইচএসসি/আলিম বা সমমান পাস করেছেন?</label>
                                                <p><span>{{ optional($biodata)->hsc_passing_year ?? '' }}</span></p>
                                                </div>
                                                <div class="dsb-ebf-item">
                                                    <label for="">বিভাগ</label>
                                                    <p><span>{{ __('biodata.education_category.' . optional($biodata)->hsc_education_category) }}</span></p>
                                                </div>
                                                <div class="dsb-ebf-item">
                                                    <label for="">ফলাফল</label>
                                                    <p><span>{{ optional($biodata)->hsc_result ?? '' }}</span></p>
                                                </div>
                                            @endif
                                            {{-- end --}}
                                            {{-- diploma --}}
                                            @if ($biodata->after_ssc_education == 'diploma_education')
                                                <div class="dsb-ebf-item">
                                                    <label for="">কোন বিষয়ে ডিপ্লোমা পাস করেছেন?</label>
                                                    <p><span>{{ optional($biodata)->diploma_passing_subject ?? '' }}</span></p>
                                                </div>
                                                <div class="dsb-ebf-item">
                                                    <label for="">ডিপ্লোমা পাসের সন</label>
                                                    <p><span>{{ optional($biodata)->diploma_passing_year ?? '' }}</span></p>
                                                </div>
                                                <div class="dsb-ebf-item">
                                                    <label for="">শিক্ষাপ্রতিষ্ঠানের নাম</label>
                                                    <p><span>{{ optional($biodata)->diploma_passing_institut ?? '' }}</span></p>
                                                </div>
                                            @endif
                                            {{-- End --}}

                                            {{-- Honours_ongoing --}}
                                                @if ($biodata->highest_education == 'honours_ongoing')
                                                    <div class="dsb-ebf-item">
                                                        <label for="">কোন বিষয়ে অনার্স/ ফাজিল পড়ছেন?</label>
                                                        <p><span>{{ optional($biodata)->honours_ongoing_subject ?? '' }}</span></p>
                                                    </div>
                                                    <div class="dsb-ebf-item">
                                                        <label for="">কোন বর্ষে পড়ছেন?</label>
                                                        <p><span>{{ optional($biodata)->honours_ongoing_year ?? '' }}</span></p>
                                                    </div>
                                                    <div class="dsb-ebf-item">
                                                        <label for="">শিক্ষাপ্রতিষ্ঠানের নাম</label>
                                                        <p><span>{{ optional($biodata)->honours_ongoing_institut ?? '' }}</span></p>
                                                    </div>
                                                @endif
                                            {{-- End --}}

                                            {{-- Honours/Masters --}}
                                            @if (in_array($biodata->highest_education, ['honours', 'masters' ]))
                                                 <div class="dsb-ebf-item">
                                                    <label for="">কোন বিষয়ে অনার্স/ ফাজিল পাস করেছেন?</label>
                                                    <p><span>{{ optional($biodata)->honours_passing_subject ?? '' }}</span></p>
                                                </div>
                                                <div class="dsb-ebf-item">
                                                    <label for="">অনার্স/ ফাজিল পাসের সন</label>
                                                    <p><span>{{ optional($biodata)->honours_passing_year ?? '' }}</span></p>
                                                </div>
                                                <div class="dsb-ebf-item">
                                                    <label for="">শিক্ষাপ্রতিষ্ঠানের নাম</label>
                                                    <p><span>{{ optional($biodata)->honours_passing_institut ?? '' }}</span></p>
                                                </div>
                                            @endif
                                            {{-- End --}}

                                            {{-- Masters --}}
                                                @if ($biodata->highest_education == 'masters')
                                                    <div class="dsb-ebf-item">
                                                        <label for="">কোন বিষয়ে মাস্টার্স/ কামিল পাস করেছেন?</label>
                                                        <p><span>{{ optional($biodata)->masters_passing_subject ?? '' }}</span></p>
                                                    </div>
                                                    <div class="dsb-ebf-item">
                                                        <label for="">মাস্টার্স/ কামিল পাসের সন</label>
                                                        <p><span>{{ optional($biodata)->masters_passing_year ?? '' }}</span></p>
                                                    </div>
                                                    <div class="dsb-ebf-item">
                                                        <label for="">শিক্ষাপ্রতিষ্ঠানের নাম</label>
                                                        <p><span>{{ optional($biodata)->masters_passing_institut ?? '' }}</span></p>
                                                    </div>
                                                @endif
                                            {{-- End --}}
                                        @endif
                                        {{-- End --}}

                                        {{-- IBTIDAIYAH  --}}
                                            @if ($biodata->highest_education == 'ibtidaiyah')
                                                <div class="dsb-ebf-item">
                                                    <label for="">কত সালে ইবতিদাইয়্যাহ পাস করেছেন?</label>
                                                    <p><span>{{ optional($biodata)->ibtidaiyah_passing_year ?? '' }}</span></p>
                                                </div>
                                                <div class="dsb-ebf-item">
                                                    <label for="">ফলাফল</label>
                                                    <p><span>{{ __('biodata.qawmi_result.' . optional($biodata)->ibtidaiyah_result) }}</span></p>
                                                </div>
                                                <div class="dsb-ebf-item">
                                                    <label for="">মাদ্রারাসার নাম</label>
                                                    <p><span>{{ optional($biodata)->ibtidaiyah_madrasa_name ?? '' }}</span></p>
                                                </div>
                                            @endif
                                        {{-- Ennd --}}

                                        {{-- mutawasita  --}}
                                            @if ($biodata->highest_education == 'mutawasita')
                                                <div class="dsb-ebf-item">
                                                    <label for="">কত সালে মুতাওয়াসসিতাহ পাস করেছেন?</label>
                                                    <p><span>{{ optional($biodata)->mutawasita_passing_year ?? '' }}</span></p>
                                                </div>
                                                <div class="dsb-ebf-item">
                                                    <label for="">ফলাফল</label>
                                                    <p><span>{{ __('biodata.qawmi_result.' . optional($biodata)->mutawasita_result) }}</span></p>
                                                </div>
                                                <div class="dsb-ebf-item">
                                                    <label for="">মাদ্রারাসার নাম</label>
                                                    <p><span>{{ optional($biodata)->mutawasita_madrasa_name ?? '' }}</span></p>
                                                </div>
                                            @endif
                                        {{-- Ennd --}}

                                        {{-- sanabia_uluiya  --}}
                                            @if ($biodata->highest_education == 'sanabia_uluiya')
                                                <div class="dsb-ebf-item">
                                                    <label for="">কত সালে সানাবিয়া উলইয়া পাস করেছেন?</label>
                                                    <p><span>{{ optional($biodata)->sanabia_passing_year ?? '' }}</span></p>
                                                </div>
                                                <div class="dsb-ebf-item">
                                                    <label for="">ফলাফল</label>
                                                    <p><span>{{ __('biodata.qawmi_result.' . optional($biodata)->sanabia_result) }}</span></p>
                                                </div>
                                                <div class="dsb-ebf-item">
                                                    <label for="">মাদ্রারাসার নাম</label>
                                                    <p><span>{{ optional($biodata)->sanabia_madrasa_name ?? '' }}</span></p>
                                                </div>
                                            @endif
                                        {{-- Ennd --}}

                                        {{-- fazilat  --}}
                                            @if ($biodata->highest_education == 'fazilat')
                                                <div class="dsb-ebf-item">
                                                    <label for="">কত সালে ফযীলত পাস করেছেন?</label>
                                                    <p><span>{{ optional($biodata)->fazilat_passing_year ?? '' }}</span></p>
                                                </div>
                                                <div class="dsb-ebf-item">
                                                    <label for="">ফলাফল</label>
                                                    <p><span>{{ __('biodata.qawmi_result.' . optional($biodata)->fazilat_result) }}</span></p>
                                                </div>
                                                <div class="dsb-ebf-item">
                                                    <label for="">মাদ্রারাসার নাম</label>
                                                    <p><span>{{ optional($biodata)->fazilat_madrasa_name ?? '' }}</span></p>
                                                </div>
                                            @endif
                                        {{-- Ennd --}}

                                        {{-- taqmeel  --}}
                                            @if (in_array($biodata->highest_education, ['taqmeel', 'takhassus' ]))
                                                <div class="dsb-ebf-item">
                                                    <label for="">কত সালে তাকমীল পাস করেছেন?</label>
                                                    <p><span>{{ optional($biodata)->taqmeel_passing_year ?? '' }}</span></p>
                                                </div>
                                                <div class="dsb-ebf-item">
                                                    <label for="">ফলাফল</label>
                                                    <p><span>{{ __('biodata.qawmi_result.' . optional($biodata)->taqmeel_result) }}</span></p>
                                                </div>
                                                <div class="dsb-ebf-item">
                                                    <label for="">মাদ্রারাসার নাম</label>
                                                    <p><span>{{ optional($biodata)->taqmeel_madrasa_name ?? '' }}</span></p>
                                                </div>
                                            @endif
                                        {{-- Ennd --}}

                                        {{-- takhassus  --}}
                                            @if ($biodata->highest_education == 'takhassus')
                                                <div class="dsb-ebf-item">
                                                    <label for="">কোন বিষয়ে তাখাসসুস পাস করেছেন?</label>
                                                    <p><span>{{ optional($biodata)->takhassus_passing_subject ?? '' }}</span></p>
                                                </div>
                                                <div class="dsb-ebf-item">
                                                    <label for="">তাখাসসুস পাসের সন</label>
                                                    <p><span>{{ optional($biodata)->takhassus_passing_year ?? '' }}</span></p>
                                                </div>
                                                <div class="dsb-ebf-item">
                                                    <label for="">ফলাফল</label>
                                                    <p><span>{{ __('biodata.qawmi_result.' . optional($biodata)->takhassus_result) }}</span></p>
                                                </div>
                                                <div class="dsb-ebf-item">
                                                    <label for="">মাদ্রারাসার নাম</label>
                                                    <p><span>{{ optional($biodata)->takhassus_madrasa_name ?? '' }}</span></p>
                                                </div>
                                            @endif
                                        {{-- End --}}

                                        {{-- Highest Education Base --}}

                                        @if (!empty(optional($biodata)->religious_qualifi))
                                            <div class="dsb-ebf-item dsb-ebf-text-item">
                                                <label for="">দ্বীনি যোগ্যতা</label>
                                                <p><span>{{ __('biodata.religious_qualifi.' . optional($biodata)->religious_qualifi) }}</span></p>
                                            </div>
                                        @endif

                                        @if (!empty(optional($biodata)->other_educational))
                                            <div class="dsb-ebf-item dsb-ebf-text-item">
                                               <label for="">অন্যান্য শিক্ষাগত যোগ্যতা</label>
                                                <p><span>{{ optional($biodata)->other_educational ?? '' }}</span></p>
                                            </div>
                                        @endif

                                    </div>
                                    @endif
                                </div>
                            </div>
                            {{-- End --}}
                            {{-- Family Info--}}
                            <div class="dsb-each-bio-field">
                                <div class="dsb-ebf-inner">
                                    <div class="dsb-ebf-head">
                                        <h3>পারিবারিক তথ্য</h3>
                                        <img src="{{ asset('frontend') }}/uploads/ornament.svg" alt="">
                                    </div>
                                    @if ($biodata->familyinfo_validate == true)
                                    <div class="dsb-ebf-content">
                                        <div class="dsb-ebf-item">
                                            <label for="">পরিবারের ধরন</label>
                                            <p><span>{{ __('biodata.family_type.' . optional($biodata)->family_type) }}</span></p>
                                        </div>
                                        <div class="dsb-ebf-item dsb-ebf-text-item">
                                            <label for="">আপনার পিতার নাম</label>
                                            <p><span>{{ optional($biodata)->father_name ?? '' }}</span></p>
                                        </div>
                                        <div class="dsb-ebf-item ">
                                            <label for="">পিতার বর্তমান অবস্থা</label>
                                            <p><span>{{ __('biodata.father_current_condition.' . optional($biodata)->father_current_condition) }}</span></p>
                                        </div>
                                        <div class="dsb-ebf-item ">
                                            <label for="">পিতার পেশা</label>
                                            <p><span>{{ optional($biodata)->father_profession }}</span></p>
                                        </div>
                                        <div class="dsb-ebf-item dsb-ebf-text-item">
                                            <label for="">আপনার মাতার নাম</label>
                                            <p><span>{{ optional($biodata)->mother_name }}</span></p>
                                        </div>
                                        <div class="dsb-ebf-item dsb-ebf-text-item">
                                            <label for="">মাতার বর্তমান অবস্থা</label>
                                            <p><span>{{ __('biodata.father_current_condition.' . optional($biodata)->mother_current_condition) }}</span></p>
                                        </div>
                                        <div class="dsb-ebf-item dsb-ebf-text-item">
                                            <label for="">মাতার পেশা</label>
                                            <p><span>{{ optional($biodata)->mother_profession }}</span></p>
                                        </div>
                                        <div class="dsb-ebf-item dsb-ebf-text-item">
                                            <label for="">আপনার ভাই কয়জন?</label>
                                            <p><span> {{ __('biodata.brother_count.' . optional($biodata)->brother_count) }}</span></p>
                                        </div>
                                        @if ($biodata->brother_count !== 'none')
                                            <div class="dsb-ebf-item dsb-ebf-text-area">
                                            <label for="">ভাইদের সম্পর্কে তথ্য?</label>
                                            <p><span>{{ optional($biodata)->brother_info }}</span></p>
                                        </div>
                                        @endif
                                        <div class="dsb-ebf-item dsb-ebf-text-item">
                                            <label for="">আপনার বোন কয়জন?</label>
                                            <p><span>{{ __('biodata.sister_count.' . optional($biodata)->sister_count) }}</span></p>
                                        </div>
                                        @if ($biodata->sister_count !== 'none')
                                            <div class="dsb-ebf-item dsb-ebf-text-area">
                                            <label for="">বোনদের সম্পর্কে তথ্য?</label>
                                            <p><span>{{ optional($biodata)->sister_info }}</span></p>
                                        </div>
                                        @endif

                                        <div class="dsb-ebf-item dsb-ebf-text-area">
                                            <label for="">চাচা ও মামাদের সম্পর্কে তথ্য</label>
                                            <p><span>{{ optional($biodata)->uncles_info }}</span></p>
                                        </div>
                                        <div class="dsb-ebf-item dsb-ebf-text-item">
                                            <label for="">পরিবারের অর্থনৈতিক অবস্থা</label>
                                            <p><span>{{ __('biodata.family_financial_info.' . optional($biodata)->family_financial_info) }}</span></p>
                                        </div>
                                        <div class="dsb-ebf-item dsb-ebf-text-area">
                                            <label for="">অর্থনৈতিক ও সামাজিক অবস্থার বিবরন</label>
                                            <p><span>{{ optional($biodata)->social_status_info }}</span></p>
                                        </div>
                                        <div class="dsb-ebf-item dsb-ebf-text-item">
                                            <label for="">পরিবারের কোনো সদস্য কি মাজার/পীর/সুফিবাদের সাথে জড়িত?</label>
                                            <p><span>{{ optional($biodata)->family_members_info }}</span></p>
                                        </div>
                                        <div class="dsb-ebf-item dsb-ebf-text-area">
                                            <label for="">পরিবারের দ্বীনি অবস্থা কেমন?</label>
                                            <p><span>{{ optional($biodata)->family_religious_status }}</span></p>
                                        </div>

                                    </div>
                                    @endif
                                </div>
                            </div>
                            {{-- End --}}
                            {{-- Personal Info --}}
                            <div class="dsb-each-bio-field">
                                <div class="dsb-ebf-inner">
                                    <div class="dsb-ebf-head">
                                        <h3>ব্যক্তিগত তথ্য</h3>
                                        <img src="{{ asset('frontend') }}/uploads/ornament.svg" alt="">
                                    </div>
                                    @if ($biodata->personalinfo_validate == true)
                                    <div class="dsb-ebf-content">
                                        <div class="dsb-ebf-item">
                                            <label for="">নিয়মিত পাঁচ ওয়াক্ত সালাত আদায় করেন? কত সময় যাবৎ করছেন?</label>
                                            <p><span>{{ optional($biodata)->subBiodata->salat_year ?? '' }}</span></p>
                                        </div>
                                        <div class="dsb-ebf-item dsb-ebf-text-item">
                                            <label for="">মাহরাম/গাইরে-মাহরাম মেনে চলেন কি?</label>
                                            <p><span>{{ optional($biodata)->subBiodata->mahram_non_mahram ?? '' }}</span></p>
                                        </div>
                                        {{-- female --}}
                                        @if ($biodata->biodata_type == 'female')
                                            <div class="dsb-ebf-item dsb-ebf-text-item">
                                                <label for="">কবে থেকে পরিপূর্ণ শরয়ী পর্দা করছেন?</label>
                                                <p><span>{{ optional($biodata)->subBiodata->full_islamic_veil ?? '' }}</span></p>
                                            </div>
                                        @endif
                                        {{-- end --}}
                                        <div class="dsb-ebf-item ">
                                            <label for="">দৃষ্টি সংযত রেখে চলেন?</label>
                                            <p><span>{{ optional($biodata)->subBiodata->keep_your_eyes_peeled ?? '' }}</span></p>
                                        </div>
                                        <div class="dsb-ebf-item dsb-ebf-text-item">
                                            <label for="">শুদ্ধভাবে কুরআন তিলাওয়াত করতে পারেন? </label>
                                            <p><span>{{ optional($biodata)->subBiodata->quran_recitation ?? '' }}</span></p>
                                        </div>
                                        {{-- male --}}
                                        @if ($biodata->biodata_type == 'male')
                                            <div class="dsb-ebf-item dsb-ebf-text-item">
                                                <label for="">ওয়াজিব দাড়ি রেখেছেন কি? কত সময় যাবৎ রেখেছেন?</label>
                                                <p><span>{{ optional($biodata)->subBiodata->obligatory_beard ?? '' }}</span></p>
                                            </div>
                                            <div class="dsb-ebf-item dsb-ebf-text-item">
                                                <label for="">টাখনুর উপর পোশাক পরেন?</label>
                                                <p><span>{{ optional($biodata)->subBiodata->ankle_dress ?? '' }}</span></p>
                                            </div>
                                        @endif
                                        {{-- end --}}
                                        <div class="dsb-ebf-item dsb-ebf-text-item">
                                            <label for="">ঘরের বাহিরে কোন ধরনের পোশাক পরেন?</label>
                                            <p><span>{{ optional($biodata)->subBiodata->outside_outside_clothes ?? '' }}</span></p>
                                        </div>
                                        <div class="dsb-ebf-item dsb-ebf-text-item">
                                            <label for="">আইয়ামে বীজের সিয়াম রাখেন?</label>
                                            <p><span>{{ optional($biodata)->subBiodata->fasting_seeds ?? '' }}</span></p>
                                        </div>
                                        <div class="dsb-ebf-item dsb-ebf-text-item">
                                            <label for="">কোন আকীদা/মাযহাব অনুসরন করেন?</label>
                                            <p><span>{{ __('biodata.any_creed_sect.' . optional($biodata)->subBiodata->any_creed_sect) }}</span></p>
                                        </div>
                                        <div class="dsb-ebf-item dsb-ebf-text-item">
                                            <label for="">আপনার দ্বীনী জ্ঞান অর্জনের উৎস কী?</label>
                                            <p><span>{{ optional($biodata)->subBiodata->religious_knowledge_source ?? '' }}</span></p>
                                        </div>
                                        <div class="dsb-ebf-item dsb-ebf-text-item">
                                            <label for="">আপনার পছন্দের অন্তত তিনটি ইসলামী বইয়ের নাম লিখুন</label>
                                            <p><span>{{ optional($biodata)->subBiodata->favorite_islamic_book ?? '' }}</span></p>
                                        </div>

                                        <div class="dsb-ebf-item dsb-ebf-text-item">
                                            <label for="">আপনার পছন্দের অন্তত তিনজন আলেমের নাম লিখুন</label>
                                            <p><span>{{ optional($biodata)->subBiodata->favorite_islamic_scholar ?? '' }}</span></p>
                                        </div>
                                        <div class="dsb-ebf-item dsb-ebf-text-item">
                                            <label for="">শারীরিক বা মানসিক বড় কোনো রোগ আছে কি?</label>
                                            <p><span>{{ optional($biodata)->subBiodata->physical_mental_condition ?? '' }}</span></p>
                                        </div>
                                        {{-- male --}}
                                        @if ($biodata->biodata_type == 'male')
                                            <div class="dsb-ebf-item dsb-ebf-text-item">
                                                <label for="">কোন নেশাদার দ্রব্য খান/পান করেন?</label>
                                                <p><span>{{ optional($biodata)->subBiodata->eat_drink_intoxicating ?? '' }}</span></p>
                                            </div>
                                        @endif
                                        {{-- end --}}
                                        <div class="dsb-ebf-item dsb-ebf-text-item">
                                            <label for="">নাটক/সিনেমা/সিরিয়াল/গান/খেলা এসব দেখেন বা শুনেন?</label>
                                            <p><span>{{ optional($biodata)->subBiodata->watch_listen_movies_songs ?? '' }}</span></p>
                                        </div>
                                        <div class="dsb-ebf-item dsb-ebf-text-item">
                                            <label for="">দ্বীন প্রচার বা প্রতিষ্ঠায় কোনো মেহনতে যুক্ত আছেন?</label>
                                            <p><span>{{ optional($biodata)->subBiodata->involved_establish_religion ?? '' }}</span></p>
                                        </div>
                                        <div class="dsb-ebf-item dsb-ebf-text-item">
                                            <label for="">কোনো রাজনৈতিক দর্শন থাকলে লিখুন</label>
                                            <p><span>{{ optional($biodata)->subBiodata->political_philosophy ?? '' }}</span></p>
                                        </div>
                                        <div class="dsb-ebf-item dsb-ebf-text-item">
                                            <label for="">মাজার সম্পর্কে আপনার ধারনা বা বিশ্বাস কি?</label>
                                            <p><span>{{ optional($biodata)->subBiodata->beliefs_shrine ?? '' }}</span></p>
                                        </div>
                                        <div class="dsb-ebf-item dsb-ebf-text-item">
                                            <label for="">আপনার পরবর্তী প্রজন্ম নিয়ে কি ধরনের চিন্তা ভাবনা রয়েছে?</label>
                                            <p><span>{{ optional($biodata)->subBiodata->about_next_generation ?? '' }}</span></p>
                                        </div>
                                        <div class="dsb-ebf-item dsb-ebf-text-area">
                                            <label for="">নিজের সম্পর্কে বিস্তারিত তথ্য</label>
                                            <p><span>{{ optional($biodata)->subBiodata->about_yourself ?? '' }}</span></p>
                                        </div>
                                        @if (!empty(optional($biodata->subBiodata)->home_responsibilities))
                                            <div class="dsb-ebf-item dsb-ebf-text-item">
                                                <label for="">বাড়িতে কি কি দায়িত্ব পালন করে থাকেন?</label>
                                                <p><span>{{ $biodata->subBiodata->home_responsibilities }}</span></p>
                                            </div>
                                        @endif

                                        {{-- female --}}
                                        @if ($biodata->biodata_type == 'female')
                                            <div class="dsb-ebf-item dsb-ebf-text-item">
                                                <label for="">নারী-পুরুষ সমঅধিকার বিষয়টাকে আপনি কিভাবে দেখেন?</label>
                                                <p><span>{{ optional($biodata)->subBiodata->gender_equality ?? '' }}</span></p>
                                            </div>
                                        @endif
                                        {{-- end --}}
                                        @if (!empty(optional($biodata->subBiodata)->religious_worldly_qualifi))
                                            <div class="dsb-ebf-item dsb-ebf-text-item">
                                                <label for="">দুনিয়াবী কোনো যোগ্যতা থাকলে লিখুন</label>
                                                <p><span>{{ $biodata->subBiodata->religious_worldly_qualifi }}</span></p>
                                            </div>
                                        @endif
                                        @if (!empty(optional($biodata->subBiodata)->options_apply_you))
                                            @php
                                                $selected = explode(',', optional($biodata->subBiodata)->options_apply_you ?? '');
                                                $labels = collect(__('biodata.options_apply_you'))->only($selected)->values()->implode(' /  ');
                                            @endphp
                                            <div class="dsb-ebf-item dsb-ebf-text-item">
                                                <label for="">আমার ক্ষেত্রে প্রযোজ্য </label>
                                                <p><span>{{ $labels }}</span></p>
                                            </div>
                                        @endif

                                        {{-- male --}}
                                        @if ($biodata->biodata_type == 'male')
                                            <div class="dsb-ebf-item dsb-ebf-text-item">
                                                <label for="">পাত্রের মোবাইল নাম্বার</label>
                                                <p><span>{{ optional($biodata)->subBiodata->male_phone ?? '' }}</span></p>
                                            </div>
                                        @endif
                                        {{-- end --}}
                                        {{-- female --}}
                                        @if ($biodata->biodata_type == 'female')
                                            <div class="dsb-ebf-item dsb-ebf-text-item">
                                                <label for="">পাত্রীর মোবাইল নাম্বার</label>
                                                <p><span>{{ optional($biodata)->subBiodata->female_phone ?? '' }}</span></p>
                                            </div>
                                        @endif
                                        {{-- end --}}
                                    </div>
                                    @endif
                                </div>
                            </div>
                            {{-- End --}}
                            {{-- professional info --}}
                            <div class="dsb-each-bio-field">
                                <div class="dsb-ebf-inner">
                                    <div class="dsb-ebf-head">
                                        <h3>পেশাগত তথ্য</h3>
                                        <img src="{{ asset('frontend') }}/uploads/ornament.svg" alt="">
                                    </div>
                                    @if ($biodata->professionalinfo_validate == true)
                                    <div class="dsb-ebf-content">
                                        <div class="dsb-ebf-item">
                                            <label for="">পেশা</label>
                                            <p><span>{{ __('biodata.profession.' . optional($biodata->subBiodata)->profession) }}</span></p>
                                        </div>
                                        <div class="dsb-ebf-item dsb-ebf-text-area">
                                            <label for="">পেশা সম্পর্কিত বিস্তারিত তথ্য</label>
                                            <p><span>{{ optional($biodata)->subBiodata->profession_details ?? '' }}</span></p>
                                        </div>
                                        {{-- male --}}
                                        @if ($biodata->biodata_type == 'male')
                                            <div class="dsb-ebf-item ">
                                                <label for="">কর্মস্থল</label>
                                                <p><span>{{ optional($biodata)->subBiodata->workplace ?? '' }}</span></p>
                                            </div>
                                            <div class="dsb-ebf-item dsb-ebf-text-item">
                                                <label for="">আপনি কি সুদ বা হারাম আয়ের সাথে কোনোভাবে জড়িত?</label>
                                                <p><span>{{ optional($biodata)->subBiodata->income_verify ?? '' }}</span></p>
                                            </div>
                                        @endif
                                        {{-- end --}}
                                        <div class="dsb-ebf-item dsb-ebf-text-item">
                                            <label for="">মাসিক আয়</label>
                                            <p><span>{{ optional($biodata)->subBiodata->monthly_income ?? '' }}</span></p>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            {{-- end --}}
                            {{-- marriage info --}}
                            <div class="dsb-each-bio-field">
                                <div class="dsb-ebf-inner">
                                    <div class="dsb-ebf-head">
                                        <h3>বিবাহ সম্পর্কিত তথ্য</h3>
                                        <img src="{{ asset('frontend') }}/uploads/ornament.svg" alt="">
                                    </div>
                                    @if ($biodata->marriageinfo_validate == true)
                                    <div class="dsb-ebf-content">
                                        <div class="dsb-ebf-item">
                                            <label for="">বিয়েতে আপনার অভিভাবকের সম্মতি আছে কিনা?</label>
                                            <p><span>{{ optional($biodata)->subBiodata->parents_consent ?? '' }}</span></p>
                                        </div>
                                        {{-- married --}}
                                        @if ($biodata->married_type == 'married')
                                            <div class="dsb-ebf-item dsb-ebf-text-area">
                                                <label for="">বর্তমানে আপনার স্ত্রী ও সন্তানের সংখ্যা কত?</label>
                                                <p><span>{{ optional($biodata)->subBiodata->currently_wife_children ?? '' }}</span></p>
                                            </div>
                                            <div class="dsb-ebf-item dsb-ebf-text-area">
                                                <label for="">বিবাহিত অবস্থায় আবার কেন বিয়ে করতে চান?</label>
                                                <p><span>{{ optional($biodata)->subBiodata->married_again ?? '' }}</span></p>
                                            </div>
                                        @endif
                                        {{-- end --}}
                                        {{-- divorced --}}
                                        @if ($biodata->married_type == 'divorced')
                                            <div class="dsb-ebf-item dsb-ebf-text-area">
                                                <label for="">আপনার ডিভোর্সের সময়কাল ও কারণ লিখুন</label>
                                                <p><span>{{ optional($biodata)->subBiodata->divorce_reason ?? '' }}</span></p>
                                            </div>
                                        @endif
                                        {{-- end --}}
                                        {{-- widow --}}
                                        @if ($biodata->married_type == 'widow')
                                            <div class="dsb-ebf-item dsb-ebf-text-area">
                                                <label for="">আপনার স্বামীর মৃত্যুসাল সহ মৃত্যুর কারন লিখুন</label>
                                                <p><span>{{ optional($biodata)->subBiodata->husband_death_year ?? '' }}</span></p>
                                            </div>
                                            <div class="dsb-ebf-item dsb-ebf-text-area">
                                                <label for="">নতুন সম্পর্কের জন্য আপনি পুরোপুরি প্রস্তুত?</label>
                                                <p><span>{{ optional($biodata)->subBiodata->wife_new_relationship ?? '' }}</span></p>
                                            </div>
                                        @endif
                                        {{-- end --}}
                                        {{-- widower --}}
                                        @if ($biodata->married_type == 'widower')
                                            <div class="dsb-ebf-item dsb-ebf-text-area">
                                                <label for="">আপনার স্ত্রীর মৃত্যুসাল সহ মৃত্যুর কারন লিখুন</label>
                                                <p><span>{{ optional($biodata)->subBiodata->wife_death_year ?? '' }}</span></p>
                                            </div>
                                            <div class="dsb-ebf-item dsb-ebf-text-area">
                                                <label for="">নতুন সম্পর্কের জন্য আপনি পুরোপুরি প্রস্তুত?</label>
                                                <p><span>{{ optional($biodata)->subBiodata->husband_new_relationship ?? '' }}</span></p>
                                            </div>
                                        @endif
                                        {{-- end --}}
                                        <div class="dsb-ebf-item dsb-ebf-text-area">
                                            <label for="">বিয়ে কেন করছেন? বিয়ে সম্পর্কে আপনার ধারণা কি?</label>
                                            <p><span>{{ optional($biodata)->subBiodata->why_getting_married ?? '' }}</span></p>
                                        </div>

                                        {{-- female --}}
                                        @if ($biodata->biodata_type == 'female')
                                            <div class="dsb-ebf-item">
                                                <label for="">স্বামীর আনুগত্য করার মানসিকতা রাখেন?</label>
                                                <p><span>{{ __('biodata.whate' . optional($biodata)->subBiodata->obedience_husband) }}</span></p>
                                            </div>
                                            <div class="dsb-ebf-item">
                                                <label for="">বিয়ের পর চাকরি/পড়াশোনা চালিয়ে যেতে চান?</label>
                                                <p><span>{{ optional($biodata)->subBiodata->job_after_marriage ?? '' }}</span></p>
                                            </div>
                                            <div class="dsb-ebf-item">
                                                <label for="">পরিবার ও স্বামীর প্রতি আপনার কী কী দায়িত্ব থাকতে পারে?</label>
                                                <p><span>{{ optional($biodata)->subBiodata->husband_responsibilities ?? '' }}</span></p>
                                            </div>
                                        @endif
                                        {{-- end --}}

                                        {{-- male --}}
                                        @if ($biodata->biodata_type == 'male')
                                            <div class="dsb-ebf-item ">
                                                <label for="">বিয়ের পর স্ত্রীকে পর্দায় রাখতে পারবেন?</label>
                                                <p><span>{{ optional($biodata)->subBiodata->after_marriage_veil ?? '' }}</span></p>
                                            </div>
                                            <div class="dsb-ebf-item dsb-ebf-text-item">
                                                <label for="">বিয়ের পর স্ত্রীকে চাকরি/পড়াশোনা করতে দিতে চান?</label>
                                                <p><span>{{ optional($biodata)->subBiodata->wife_after_marriage_job ?? '' }}</span></p>
                                            </div>
                                            <div class="dsb-ebf-item dsb-ebf-text-area">
                                                <label for="">বিয়ের পর স্ত্রীকে নিয়ে কোথায় থাকবেন?</label>
                                                <p><span>{{ optional($biodata)->subBiodata->wife_after_marriage_live ?? '' }}</span></p>
                                            </div>
                                            <div class="dsb-ebf-item dsb-ebf-text-area">
                                                <label for="">পরিবার ও স্ত্রীর প্রতি আপনার কী কী দায়িত্ব থাকতে পারে?</label>
                                                <p><span>{{ optional($biodata)->subBiodata->wife_responsibilities ?? '' }}</span></p>
                                            </div>
                                            <div class="dsb-ebf-item dsb-ebf-text-area">
                                                <label for="">বিয়ে উপলক্ষে পাত্রীপক্ষের কাছে যৌতুক/উপহার আশা করবেন?</label>
                                                <p><span>{{ optional($biodata)->subBiodata->expect_wedding_gift ?? '' }}</span></p>
                                            </div>
                                        @endif
                                        {{-- end --}}

                                        <div class="dsb-ebf-item ">
                                            <label for="">মোহর এর ব্যাপারে আপনার মন্তব্য কি?</label>
                                            <p><span>{{ optional($biodata)->subBiodata->about_mohar ?? '' }}</span></p>
                                        </div>

                                         {{-- female --}}
                                        @if ($biodata->biodata_type == 'female')
                                            <div class="dsb-ebf-item">
                                                <label for="">ছাত্র/বেকার পাত্রকে বিয়ে করতে আগ্রহী আছেন?</label>
                                                <p><span>{{ optional($biodata)->subBiodata->student_unemployed ?? '' }}</span></p>
                                            </div>
                                            <div class="dsb-ebf-item">
                                                <label for="">২য় স্ত্রী (মাসনা) হতে আগ্রহী আছেন?</label>
                                                <p><span>{{ optional($biodata)->subBiodata->second_wife ?? '' }}</span></p>
                                            </div>
                                            <div class="dsb-ebf-item dsb-ebf-text-item">
                                                <label for="">পাত্র নির্বাচনে কোন বিষয়গুলো ছাড় দেয়ার মানসিকতা রাখেন?</label>
                                                <p><span>{{ __('biodata.compromise_options.' . optional($biodata->subBiodata)->compromise_wife) }}</span></p>
                                            </div>
                                        @endif
                                        {{-- end --}}

                                        {{-- male --}}
                                        @if ($biodata->biodata_type == 'male')
                                            <div class="dsb-ebf-item">
                                                <label for="">বিধবা/তালাকপ্রাপ্তা পাত্রীকে বিয়ে করতে আগ্রহী আছেন?</label>
                                                <p><span>{{ optional($biodata)->subBiodata->widow_divorced_woman ?? '' }}</span></p>
                                            </div>
                                            <div class="dsb-ebf-item dsb-ebf-text-item">
                                                <label for="">পাত্রী নির্বাচনে কোন বিষয়গুলো ছাড় দেয়ার মানসিকতা রাখেন?</label>
                                                <p><span>{{ __('biodata.compromise_options.' . optional($biodata->subBiodata)->compromise_husband) }}</span></p>
                                            </div>
                                        @endif
                                        {{-- end --}}

                                    </div>
                                    @endif
                                </div>
                            </div>
                            {{-- end --}}
                            {{-- expectation info --}}
                            <div class="dsb-each-bio-field">
                                <div class="dsb-ebf-inner">
                                    <div class="dsb-ebf-head">
                                        <h3>প্রত্যাশিত জীবনসঙ্গী</h3>
                                        <img src="{{ asset('frontend') }}/uploads/ornament.svg" alt="">
                                    </div>
                                    @if ($biodata->expectationinfo_validate == true)
                                    <div class="dsb-ebf-content">
                                        <div class="dsb-ebf-item">
                                            <label for="">বয়স</label>
                                            <p><span>{{ optional($biodata)->subBiodata->expect_age ?? '' }}</span></p>
                                        </div>

                                        @php
                                            $selected = explode(',', optional($biodata->subBiodata)->expect_marital_type ?? '');
                                            $married_type = collect(__('biodata.married_type'))->only($selected)->values()->implode(', ');
                                        @endphp
                                        <div class="dsb-ebf-item dsb-ebf-text-item">
                                            <label for="">বৈবাহিক অবস্থা</label>
                                            <p><span>{{ $married_type }}</span></p>
                                        </div>
                                        <div class="dsb-ebf-item ">
                                            <label for="">জেলা</label>
                                            <p><span>{{ optional($biodata)->subBiodata->expect_district ?? '' }}</span></p>
                                        </div>

                                        @php
                                            $selected = explode(',', optional($biodata->subBiodata)->expect_skin_colors ?? '');
                                            $expect_skin_colors = collect(__('biodata.face_color'))->only($selected)->values()->implode(', ');
                                        @endphp
                                        <div class="dsb-ebf-item dsb-ebf-text-item">
                                            <label for="">গাত্রবর্ণ</label>
                                            <p><span>{{ $expect_skin_colors }}</span></p>
                                        </div>
                                        <div class="dsb-ebf-item dsb-ebf-text-item">
                                            <label for="">উচ্চতা</label>
                                            <p><span>{{ optional($biodata)->subBiodata->expect_height ?? '' }}</span></p>
                                        </div>

                                         @php
                                            $selected = explode(',', optional($biodata->subBiodata)->expect_body_type ?? '');
                                            $expect_body_type = collect(__('biodata.body_shape'))->only($selected)->values()->implode(', ');
                                        @endphp
                                        <div class="dsb-ebf-item dsb-ebf-text-item">
                                            <label for="">শারীরিক গঠন</label>
                                            <p><span>{{ $expect_body_type }}</span></p>
                                        </div>
                                        <div class="dsb-ebf-item dsb-ebf-text-item">
                                            <label for="">শিক্ষাগত যোগ্যতা</label>
                                            <p><span>{{ optional($biodata)->subBiodata->expect_education ?? '' }}</span></p>
                                        </div>
                                        <div class="dsb-ebf-item dsb-ebf-text-item">
                                            <label for="">আকীদা/মাযহাব</label>
                                            <p><span>{{ optional($biodata)->subBiodata->expect_creed_sect ?? '' }}</span></p>
                                        </div>
                                        <div class="dsb-ebf-item dsb-ebf-text-item">
                                            <label for="">পেশা</label>
                                            <p><span>{{ optional($biodata)->subBiodata->expect_profession ?? '' }}</span></p>
                                        </div>

                                         @php
                                            $selected = explode(',', optional($biodata->subBiodata)->expect_economic_status ?? '');
                                            $economic_status = collect(__('biodata.family_financial_info'))->only($selected)->values()->implode(', ');
                                        @endphp
                                        <div class="dsb-ebf-item dsb-ebf-text-item">
                                            <label for="">অর্থনৈতিক অবস্থা</label>
                                            <p><span>{{ $economic_status }}</span></p>
                                        </div>
                                        <div class="dsb-ebf-item dsb-ebf-text-area">
                                            <label for="">জীবনসঙ্গীর যেসকল বৈশিষ্ট্য বা গুণাবলী আশা করেন?</label>
                                            <p><span>{{ optional($biodata)->subBiodata->expect_life_partner ?? '' }}</span></p>
                                        </div>
                                        @if (!empty(optional($biodata->subBiodata)->expect_something_special))
                                            <div class="dsb-ebf-item dsb-ebf-text-area">
                                            <label for="">বিশেষ কিছু যদি জানাতে চান?</label>
                                            <p><span>{{ optional($biodata)->subBiodata->expect_something_special ?? '' }}</span></p>
                                        </div>
                                        @endif
                                    </div>
                                    @endif
                                </div>
                            </div>
                            {{-- end --}}
                            {{-- inquiries info --}}
                            <div class="dsb-each-bio-field">
                                <div class="dsb-ebf-inner">
                                    <div class="dsb-ebf-head">
                                        <h3>কর্তৃপক্ষের জিজ্ঞাসা</h3>
                                        <img src="{{ asset('frontend') }}/uploads/ornament.svg" alt="">
                                    </div>
                                    @if ($biodata->inquiriesinfo_validate == true)
                                    <div class="dsb-ebf-content">
                                        <div class="dsb-ebf-item">
                                            <label for="">বায়োডাটা জমা দিতে অভিভাবকের অনুমতি নিয়েছেন?</label>
                                            <p><span>{{ __('biodata.whate.' . optional($biodata->subBiodata)->guardian_permission) }}</span></p>
                                        </div>
                                        <div class="dsb-ebf-item dsb-ebf-text-item">
                                            <label for="">আল্লাহ'র শপথ করে সাক্ষ্য দিন, যে তথ্যগুলো দিয়েছেন তা সবই সত্য</label>
                                            <p><span>{{ __('biodata.whate.' . optional($biodata->subBiodata)->information_true) }}</span></p>
                                        </div>
                                        <div class="dsb-ebf-item ">
                                            <label for="">কোনো মিথ্যা তথ্য দিয়ে থাকলে তার দুনিয়াবী ও আখিরাতের দায়ভার কর্তৃপক্ষ নিবে না। আপনি কি এতে সম্মতি দিচ্ছেন?</label>
                                            <p><span>{{ __('biodata.whate.' . optional($biodata->subBiodata)->responsibility) }}</span></span></p>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            {{-- end --}}
                            {{-- contact info --}}
                            <div class="dsb-each-bio-field">
                                <div class="dsb-ebf-inner">
                                    <div class="dsb-ebf-head">
                                        <h3>যোগাযোগ তথ্য </h3>
                                        <img src="{{ asset('frontend') }}/uploads/ornament.svg" alt="">
                                    </div>
                                    @if ($biodata->contactinfo_validate == true)
                                    <div class="dsb-ebf-content">

                                        <div class="dsb-contact-info-container">
                                            <div class="dsb-contact-info-content">
                                                {{-- male --}}
                                                @if ($biodata->biodata_type == 'male')
                                                    <div class="dsb-ebf-item">
                                                        <label for="">পাত্রের নাম</label>
                                                        <p><span>{{ optional($biodata)->subBiodata->husband_name ?? '' }}</span></p>
                                                    </div>
                                                @endif
                                                {{-- end --}}
                                                {{-- female --}}
                                                @if ($biodata->biodata_type == 'female')
                                                    <div class="dsb-ebf-item">
                                                        <label for="">পাত্রীর নাম</label>
                                                        <p><span>{{ optional($biodata)->subBiodata->wife_name ?? '' }}</span></p>
                                                    </div>
                                                @endif
                                                {{-- end --}}

                                                <div class="dsb-ebf-item dsb-ebf-text-item">
                                                    <label for="">অভিভাবকের মোবাইল নাম্বার</label>
                                                    <p><span>{{ optional($biodata)->subBiodata->guardian_mobile ?? '' }}</span></p>
                                                </div>
                                                <div class="dsb-ebf-item ">
                                                    <label for="">অভিভাবকের সাথে সম্পর্ক</label>
                                                    <p><span>{{ optional($biodata)->subBiodata->guardian_relation ?? '' }}</span></p>
                                                </div>
                                                <div class="dsb-ebf-item ">
                                                    <label for="">যে ই-মেইলে বায়োডাটা পেতে চান</label>
                                                    <p><span>{{ optional($biodata)->subBiodata->receive_biodata_email ?? '' }}</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            {{-- end --}}
                            @if ($biodata->contactinfo_validate == true)
                            <form action="{{ route('submit.biodata') }}" method="POST">
                                @csrf
                                <div class="add_biodata_submit buttons"
                                style="justify-content: center;">
                                    <button
                                        type="submit"
                                        class="nextBtn ds-button"
                                        style="width: 230px;"
                                    >
                                        Submit Biodata
                                    </button>
                                </div>
                                @if(session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif

                            </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer_script')
@if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'সাবমিশন সফল!',
            text: '{{ session('success') }}',
            confirmButtonText: 'ঠিক আছে'
        });
    </script>
@endif
@endsection
