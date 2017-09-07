@extends('layouts.frontend.master')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
    <style type="text/css">
        .ui-datepicker select.ui-datepicker-month,
        .ui-datepicker select.ui-datepicker-year {
            width: 48%;
            float: left;
        }
        .ui-widget-content { max-width: 360px; position: relative; }
        .ui-datepicker td span, .ui-datepicker td a { text-align: center; }
    </style>
@stop

@section('main-content')
    <h5 class="bk-org title" style="padding-left: 10px;">
        {{ entobn(Carbon\Carbon::now()->format('Y') . ' - ' . Carbon\Carbon::now()->addYear()->format('Y')) }} অর্থবছরে বেসরকারি গ্রন্থাগারে অনুদান প্রদানের জন্য আবেদন
    </h5>
    <p>&nbsp;</p>
    <table border="0" style="width: 100%; margin: 10px;">
        <tbody>
            <tr>
                <td style="width: 50%;">
                    <label for="name">গ্রন্থাগারের নাম ও ঠিকানা (পোস্ট কোড সহ)</label>
                    <input type="text" name="lib_name_address" style="width: 92%;" value="{{ old('lib_name_address') }}">
                    @if($errors->first('lib_name_address'))
                        <label style="color: darkred;">{{ $errors->first('lib_name_address') }}</label>
                    @endif
                </td>
                <td style="width: 50%;">
                    <label for="establishment_date">প্রতিষ্ঠার সাল ও তারিখ</label>
                    <input type="text" name="establishment_date" style="width: 92%;" value="{{ old('establishment_date') }}">
                    @if($errors->first('establishment_date'))
                        <label style="color: darkred;">{{ $errors->first('establishment_date') }}</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <label for="name">রেজিস্ট্রিকৃত/তালিকাভুক্ত হয়ে থাকলে তা যে দপ্তর/অফিস থেকে করা হয়েছে তার নাম</label>
                    <input type="text" name="registered_office_name" style="width: 92%;" value="{{ old('registered_office_name') }}">
                    @if($errors->first('registered_office_name'))
                        <label style="color: darkred;">{{ $errors->first('registered_office_name') }}</label>
                    @endif
                </td>
                <td style="width: 50%;">
                    <label for="registration_no">রেজিস্ট্রেশন/তালিকাভুক্তির নম্বর</label>
                    <input type="text" name="registration_no" style="width: 92%;" value="{{ old('registration_no') }}">
                    @if($errors->first('registration_no'))
                        <label style="color: darkred;">{{ $errors->first('registration_no') }}</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <label for="has_room">গ্রন্থাগারের নিজস্ব ঘর/দালান আছে কি না?</label>
                    <input type="radio" name="has_room" value="1" id="" {{ Request::input('has_room') == 1 ? 'selected' : '' }}>&nbsp;হ্যাঁ&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="has_room" value="0" id="" {{ Request::input('has_room') == 0 ? 'selected' : '' }}>&nbsp;না
                    @if($errors->first('has_room'))
                        <label style="color: darkred;">{{ $errors->first('has_room') }}</label>
                    @endif
                </td>
                <td style="width: 50%;">
                    <label for="temporary_location">কার্যক্রম কোথায় পরিচালিত হয় (নিজস্ব ঘর/দালান না থাকলে)</label>
                    <input type="text" name="temporary_location" style="width: 92%;" value="{{ old('temporary_location') }}">
                    @if($errors->first('temporary_location'))
                        <label style="color: darkred;">{{ $errors->first('temporary_location') }}</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <label for="president_name">গ্রন্থাগারের পরিচালনা কমিটির সভাপতির নাম</label>
                    <input type="text" name="president_name" style="width: 92%;" value="{{ old('president_name') }}">
                    @if($errors->first('president_name'))
                        <label style="color: darkred;">{{ $errors->first('president_name') }}</label>
                    @endif
                </td>
                <td style="width: 50%;">
                    <label for="president_addr">গ্রন্থাগারের পরিচালনা কমিটির সভাপতির ঠিকানা</label>
                    <input type="text" name="president_addr" style="width: 92%;" value="{{ old('president_addr') }}">
                    @if($errors->first('president_addr'))
                        <label style="color: darkred;">{{ $errors->first('president_addr') }}</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <label for="general_secretary_name">গ্রন্থাগারের পরিচালনা কমিটির সাধারণ সম্পাদকের নাম</label>
                    <input type="text" name="general_secretary_name" style="width: 92%;" value="{{ old('general_secretary_name') }}">
                    @if($errors->first('general_secretary_name'))
                        <label style="color: darkred;">{{ $errors->first('general_secretary_name') }}</label>
                    @endif
                </td>
                <td style="width: 50%;">
                    <label for="general_secretary_addr">গ্রন্থাগারের পরিচালনা কমিটির সাধারণ সম্পাদকের ঠিকানা</label>
                    <input type="text" name="general_secretary_addr" style="width: 92%;" value="{{ old('general_secretary_addr') }}">
                    @if($errors->first('general_secretary_addr'))
                        <label style="color: darkred;">{{ $errors->first('general_secretary_addr') }}</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <label for="bank_account_details">গ্রন্থাগারের ব্যাংক হিসাবের শিরোনাম</label>
                    <input type="text" name="bank_account_details" style="width: 92%;" value="{{ old('bank_account_details') }}">
                    @if($errors->first('bank_account_details'))
                        <label style="color: darkred;">{{ $errors->first('bank_account_details') }}</label>
                    @endif
                </td>
                <td style="width: 50%;">
                    <label for="bank_account_no">গ্রন্থাগারের ব্যাংক হিসাব নং</label>
                    <input type="text" name="bank_account_no" style="width: 92%;" value="{{ old('bank_account_no') }}">
                    @if($errors->first('bank_account_no'))
                        <label style="color: darkred;">{{ $errors->first('bank_account_no') }}</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <label for="bank_branch_name">ব্যাংকের শাখার নাম</label>
                    <input type="text" name="bank_branch_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('bank_branch_name'))
                        <label style="color: darkred;">{{ $errors->first('bank_branch_name') }}</label>
                    @endif
                </td>
                <td style="width: 50%;">
                    <label for="bank_name">ব্যাংকের নাম</label>
                    <input type="text" name="bank_name" style="width: 92%;" value="{{ old('bank_name') }}">
                    @if($errors->first('bank_name'))
                        <label style="color: darkred;">{{ $errors->first('bank_name') }}</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <label for="bank_branch_thana">ব্যাংকটি যে উপজেলায় অবস্থিত তার নাম</label>
                    <input type="text" name="bank_branch_thana" style="width: 92%;" value="{{ old('bank_branch_thana') }}">
                    @if($errors->first('bank_branch_thana'))
                        <label style="color: darkred;">{{ $errors->first('bank_branch_thana') }}</label>
                    @endif
                </td>
                <td style="width: 50%;">
                    <label for="bank_branch_district">ব্যাংকটি যে জেলায় অবস্থিত তার নাম</label>
                    <input type="text" name="bank_branch_district" style="width: 92%;" value="{{ old('bank_branch_district') }}">
                    @if($errors->first('bank_branch_district'))
                        <label style="color: darkred;">{{ $errors->first('bank_branch_district') }}</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <label for="has_constitution">গ্রন্থাগারের কোনো গঠনতন্ত্র আছে কি না?</label>
                    <input type="radio" name="has_constitution" id="">&nbsp;হ্যাঁ&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="has_constitution" id="">&nbsp;না
                    @if($errors->first('has_constitution'))
                        <label style="color: darkred;">{{ $errors->first('has_constitution') }}</label>
                    @endif
                </td>
                <td style="width: 50%;">
                    <label for="constitution_copy">গঠনতন্ত্র থাকলে তার সত্যায়িত কপি (পিডিএফ ফরমেট)</label>
                    <input type="file" name="constitution_copy" />
                    @if($errors->first('constitution_copy'))
                        <label style="color: darkred;">{{ $errors->first('constitution_copy') }}</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <label for="granter_description">সরকারি/বেসরকারি/বিদেশী সংস্থা থেকে গত বছর অনুদান পেয়ে থাকলে তার নাম ও অর্থের পরিমান </label>
                    <input type="text" name="granter_description" style="width: 92%;" value="{{ old('granter_description') }}">
                    @if($errors->first('granter_description'))
                        <label style="color: darkred;">{{ $errors->first('granter_description') }}</label>
                    @endif
                </td>
                <td style="width: 50%;">
                    <label for="cultural_ministry_grant_amount">গত বছর সাংস্কৃতিক মন্ত্রণালয় থেকে অনুদান পেলে তার পরিমান কত?</label>
                    <input type="text" name="cultural_ministry_grant_amount" style="width: 92%;" value="{{ old('cultural_ministry_grant_amount') }}">
                    @if($errors->first('cultural_ministry_grant_amount'))
                        <label style="color: darkred;">{{ $errors->first('cultural_ministry_grant_amount') }}</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <label for="grant_expenditure_report">গত অর্থবছরে প্রাপ্ত সাহায্য কিভাবে কোন কোন খাতে ব্যয় করা হয়েছে, তার ব্যয় বিবরণী</label>
                    <input type="file" name="grant_expenditure_report">
                    @if($errors->first('grant_expenditure_report'))
                        <label style="color: darkred;">{{ $errors->first('grant_expenditure_report') }}</label>
                    @endif
                </td>
                <td style="width: 50%;">
                    <label for="book_qty">বর্তমানে গ্রন্থাগারে সর্বমোট বইয়ের সংখ্যা</label>
                    <input type="text" name="book_qty" style="width: 92%;" value="{{ old('book_qty') }}">
                    @if($errors->first('book_qty'))
                        <label style="color: darkred;">{{ $errors->first('book_qty') }}</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <label for="book_reading_competition">গত এক বছরে গ্রন্থাগারে বইপাঠ প্রতিযোগিতার বিবরণ</label>
                    <input type="text" name="book_reading_competition" style="width: 92%;" value="{{ old('book_reading_competition') }}">
                    @if($errors->first('book_reading_competition'))
                        <label style="color: darkred;">{{ $errors->first('book_reading_competition') }}</label>
                    @endif
                </td>
                <td style="width: 50%;">
                    <label for="library_other_functionalities">গত এক বছরে গ্রন্থাগারের অন্যান্য কার্যক্রম</label>
                    <input type="text" name="library_other_functionalities" style="width: 92%;" value="{{ old('library_other_functionalities') }}">
                    @if($errors->first('library_other_functionalities'))
                        <label style="color: darkred;">{{ $errors->first('library_other_functionalities') }}</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <label for="yearly_collected_book_and_price">গত বছর গ্রন্থাগারে সংগৃহীত বইয়ের সংখ্যা ও তার মূল্য</label>
                    <input type="text" name="yearly_collected_book_and_price" style="width: 92%;" value="{{ old('yearly_collected_book_and_price') }}">
                    @if($errors->first('yearly_collected_book_and_price'))
                        <label style="color: darkred;">{{ $errors->first('yearly_collected_book_and_price') }}</label>
                    @endif
                </td>
                <td style="width: 50%;">
                    <label for="daily_newspaper_name">পাঠকের জন্য গ্রন্থাগারে দৈনিক পত্রিকা/সাময়িকী রাখা হলে তার নাম</label>
                    <input type="text" name="daily_newspaper_name" style="width: 92%;" value="{{ old('daily_newspaper_name') }}">
                    @if($errors->first('daily_newspaper_name'))
                        <label style="color: darkred;">{{ $errors->first('daily_newspaper_name') }}</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <label for="no_of_readers_per_day">প্রতিদিন গ্রন্থাগারে উপস্থিত পাঠকের সংখ্যা</label>
                    <input type="text" name="no_of_readers_per_day" style="width: 92%;" value="{{ old('no_of_readers_per_day') }}">
                    @if($errors->first('no_of_readers_per_day'))
                        <label style="color: darkred;">{{ $errors->first('no_of_readers_per_day') }}</label>
                    @endif
                </td>
                <td style="width: 50%;">
                    <label for="fa_hu_name">পাঠকের জন্য গ্রন্থাগারে দৈনিক পত্রিকা/সাময়িকী রাখা হলে তার নাম</label>
                    <input type="text" name="fa_hu_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="2" style="width: 100%;">
                    <label style="font-size: 1.1em;">চলতি বছর প্রস্তাবিত বাজেটে প্রত্যাশিত মোট আয়</label>
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <label for="name">ক) বেসরকারি সহায়তা</label>
                    <input type="text" name="fa_hu_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
                    @endif
                </td>
                <td style="width: 50%;">
                    <label for="fa_hu_name">খ) সরকারি অনুদান</label>
                    <input type="text" name="fa_hu_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <label for="name">গ) নিজস্ব আয়</label>
                    <input type="text" name="fa_hu_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
                    @endif
                </td>
                <td style="width: 50%;">
                    <label for="fa_hu_name">ঘ) সদস্য/পাঠক চাঁদা</label>
                    <input type="text" name="fa_hu_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="2" style="width: 100%;">
                    <label style="font-size: 1.1em;">গ্রন্থাগারের ব্যয়ের খাত</label>
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <label for="name">ক) গ্রন্থাগারিক/অন্যান্য কর্মীদের বেতন/ভাতা/সম্মানী</label>
                    <input type="text" name="fa_hu_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
                    @endif
                </td>
                <td style="width: 50%;">
                    <label for="fa_hu_name">খ) আসবাবপত্র ক্রয়</label>
                    <input type="text" name="fa_hu_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <label for="name">গ) জ্বালানী/বিদ্যুৎ খরচ</label>
                    <input type="text" name="fa_hu_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
                    @endif
                </td>
                <td style="width: 50%;">
                    <label for="fa_hu_name">ঘ) পত্রিকা ক্রয়</label>
                    <input type="text" name="fa_hu_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <label for="name">ও) বই ক্রয়</label>
                    <input type="text" name="fa_hu_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
                    @endif
                </td>
                <td style="width: 50%;">
                    <label for="fa_hu_name">চ) অন্যান্য</label>
                    <input type="text" name="fa_hu_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="2" style="width: 100%;">
                    <label style="font-size: 1.1em;">আমি এই মর্মে অঙ্গীকার করছি যে, উপর্যুক্ত তথ্যাদি সম্পূর্ণ সত্য | এ সম্পর্কে কোনো প্রশ্ন উত্থাপিত হলে আমি দায়বদ্ধ থাকিব |</label>
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <label for="name">ক) আবেদনকারীর নাম</label>
                    <input type="text" name="fa_hu_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
                    @endif
                </td>
                <td style="width: 50%;">
                    <label for="fa_hu_name">খ) আবেদনকারীর পদবী</label>
                    <input type="text" name="fa_hu_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <label for="name">গ) আবেদনকারীর সিল ও সাক্ষর</label>
                    <input type="file" name="fa_hu_name">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
                    @endif
                </td>
                <td style="width: 50%;">
                    <label for="fa_hu_name">ঘ) মোবাইল নম্বর</label>
                    <input type="text" name="fa_hu_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <hr>
                    <input type="submit" value="আবেদন করুন">
                </td>
            </tr>
        </tbody>
    </table>
@stop

@section('script')
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script>
        $( function() {
            $( "#datepicker" ).datepicker({
                dateFormat : 'mm/dd/yy',
                changeMonth: true,
                changeYear: true,
                yearRange: "{{ \Carbon\Carbon::now()->subYears(80)->format('Y') . ':' . \Carbon\Carbon::now()->format('Y') }}",
            });
        });
    </script>
@stop