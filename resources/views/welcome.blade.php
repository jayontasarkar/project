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
                    <input type="text" name="name" style="width: 92%;" value="{{ old('name') }}">
                    @if($errors->first('name'))
                        <label style="color: darkred;">{{ $errors->first('name') }}</label>
                    @endif
                </td>
                <td style="width: 50%;">
                    <label for="fa_hu_name">প্রতিষ্ঠার সাল ও তারিখ</label>
                    <input type="text" name="fa_hu_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <label for="name">রেজিস্ট্রিকৃত/তালিকাভুক্ত হয়ে থাকলে তা যে দপ্তর/অফিস থেকে করা হয়েছে তার নাম</label>
                    <input type="text" name="name" style="width: 92%;" value="{{ old('name') }}">
                    @if($errors->first('name'))
                        <label style="color: darkred;">{{ $errors->first('name') }}</label>
                    @endif
                </td>
                <td style="width: 50%;">
                    <label for="fa_hu_name">রেজিস্ট্রেশন/তালিকাভুক্তির নম্বর</label>
                    <input type="text" name="fa_hu_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <label for="name">গ্রন্থাগারের নিজস্ব ঘর/দালান আছে কি না?</label>
                    <input type="radio" name="has_room" id="">&nbsp;হ্যাঁ&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="has_room" id="">&nbsp;না
                    @if($errors->first('name'))
                        <label style="color: darkred;">{{ $errors->first('name') }}</label>
                    @endif
                </td>
                <td style="width: 50%;">
                    <label for="fa_hu_name">কার্যক্রম কোথায় পরিচালিত হয় (নিজস্ব ঘর/দালান না থাকলে)</label>
                    <input type="text" name="fa_hu_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <label for="name">গ্রন্থাগারের পরিচালনা কমিটির সভাপতির নাম</label>
                    <input type="text" name="fa_hu_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
                    @endif
                </td>
                <td style="width: 50%;">
                    <label for="fa_hu_name">গ্রন্থাগারের পরিচালনা কমিটির সভাপতির ঠিকানা</label>
                    <input type="text" name="fa_hu_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <label for="name">গ্রন্থাগারের পরিচালনা কমিটির সাধারণ সম্পাদকের নাম</label>
                    <input type="text" name="fa_hu_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
                    @endif
                </td>
                <td style="width: 50%;">
                    <label for="fa_hu_name">গ্রন্থাগারের পরিচালনা কমিটির সাধারণ সম্পাদকের ঠিকানা</label>
                    <input type="text" name="fa_hu_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <label for="name">গ্রন্থাগারের ব্যাংক হিসাবের শিরোনাম</label>
                    <input type="text" name="fa_hu_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
                    @endif
                </td>
                <td style="width: 50%;">
                    <label for="fa_hu_name">গ্রন্থাগারের ব্যাংক হিসাব নং</label>
                    <input type="text" name="fa_hu_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <label for="name">ব্যাংকের শাখার নাম</label>
                    <input type="text" name="fa_hu_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
                    @endif
                </td>
                <td style="width: 50%;">
                    <label for="fa_hu_name">ব্যাংকের নাম</label>
                    <input type="text" name="fa_hu_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <label for="name">ব্যাংকটি যে উপজেলায় অবস্থিত তার নাম</label>
                    <input type="text" name="fa_hu_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
                    @endif
                </td>
                <td style="width: 50%;">
                    <label for="fa_hu_name">ব্যাংকটি যে জেলায় অবস্থিত তার নাম</label>
                    <input type="text" name="fa_hu_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <label for="name">গ্রন্থাগারের কোনো গঠনতন্ত্র আছে কি না?</label>
                    <input type="radio" name="has_room" id="">&nbsp;হ্যাঁ&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="has_room" id="">&nbsp;না
                    @if($errors->first('name'))
                        <label style="color: darkred;">{{ $errors->first('name') }}</label>
                    @endif
                </td>
                <td style="width: 50%;">
                    <label for="fa_hu_name">কার্যক্রম কোথায় পরিচালিত হয় (নিজস্ব ঘর/দালান না থাকলে)</label>
                    <input type="text" name="fa_hu_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <label for="name">সরকারি/বেসরকারি/বিদেশী সংস্থা থেকে গত বছর অনুদান পেয়ে থাকলে তার নাম ও অর্থের পরিমান </label>
                    <input type="text" name="fa_hu_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
                    @endif
                </td>
                <td style="width: 50%;">
                    <label for="fa_hu_name">গত বছর সাংস্কৃতিক মন্ত্রণালয় থেকে অনুদান পেলে তার পরিমান কত?</label>
                    <input type="text" name="fa_hu_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <label for="name">গত অর্থবছরে প্রাপ্ত সাহায্য কিভাবে কোন কোন খাতে ব্যয় করা হয়েছে, তার ব্যয় বিবরণী</label>
                    <input type="file" name="fa_hu_name">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
                    @endif
                </td>
                <td style="width: 50%;">
                    <label for="fa_hu_name">বর্তমানে গ্রন্থাগারে সর্বমোট বইয়ের সংখ্যা</label>
                    <input type="text" name="fa_hu_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <label for="name">গত এক বছরে গ্রন্থাগারে বইপাঠ প্রতিযোগিতার বিবরণ</label>
                    <input type="text" name="fa_hu_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
                    @endif
                </td>
                <td style="width: 50%;">
                    <label for="fa_hu_name">গত এক বছরে গ্রন্থাগারের অন্যান্য কার্যক্রম</label>
                    <input type="text" name="fa_hu_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <label for="name">গত বছর গ্রন্থাগারে সংগৃহীত বইয়ের সংখ্যা ও তার মূল্য</label>
                    <input type="text" name="fa_hu_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
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
                <td style="width: 50%;">
                    <label for="name">প্রতিদিন গ্রন্থাগারে উপস্থিত পাঠকের সংখ্যা</label>
                    <input type="text" name="fa_hu_name" style="width: 92%;" value="{{ old('fa_hu_name') }}">
                    @if($errors->first('fa_hu_name'))
                        <label style="color: darkred;">{{ $errors->first('fa_hu_name') }}</label>
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