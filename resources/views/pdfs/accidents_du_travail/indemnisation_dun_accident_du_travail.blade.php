<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Generate PDF using Laravel TCPDF - ItSolutionStuff.com</title>
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet"> --}}
    <style>
        /* @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap'); */
        .text-center {
            text-align: center;
        }

        @font-face {
            font-family: 'Arabic';
            src: url({{ url('https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap') }}) format('true-type');
            font-weight: 400;
            font-style: normal;
        }

        p {
            direction: rtl;
            text-indent: 1px
        }

        /* body { font-family: DejaVu Sans, serif; } */
        body {
            font-family: DejaVu Sans, sans-serif;
        }
    </style>
</head>

<body>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:16pt;"><strong>في {{ $data["date"] }}
            {{ $data["place"] }}</strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt; font-size:14pt;"><span dir="rtl">&nbsp;</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:20pt;"><u><span dir="rtl"
                style="font-weight:bold;">مقال يرمي الى التعويض عن</span></u></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:20pt;"><u><span dir="rtl"
                style="font-weight:bold;">حادثة شغل</span></u></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:16pt;"><strong>&nbsp;</strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:18pt;"><span dir="rtl"
            style="font-weight:bold;">إلى السيد رئيس المحكمة الابتدائية</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:18pt;"><u><span dir="rtl"
                style="font-weight:bold;">بمراكش.</span></u></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:18pt;"><span dir="rtl"
            style="font-weight:bold;">سيدي الرئيس،</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:18pt;"><span dir="rtl">&nbsp; إن
            <span style="font-size:16pt;">السيد {{ $data["fullname"] }} ، الساكن {{ $data["address"] }}</span></span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:18pt;"><span
            dir="rtl"><strong><u>النائب عنه الأستاذ
                    {{ $data["lawyerName"] }}</u></strong><strong><u>&nbsp;&nbsp;</u></strong><strong><u>المحامي بهيئة
                    مراكش</u></strong><strong><u><span style="font-size:16pt;">.</span></u></strong></span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:14pt;"><span
            style="font-family:'Wingdings 2';">&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;</span><span dir="rtl">&nbsp;</span></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:18pt;"><strong><u>له الشرف
                بأن يعرض على أنظار سيادتكم ما يلي:</u></strong><span
            style="font-size:14pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:14pt;"><span dir="ltr"
            style="font-weight:bold;">&nbsp;</span></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:18pt;"><span
            dir="ltr">&nbsp;&nbsp;&nbsp;</span><span dir="rtl">&nbsp;&nbsp;&nbsp;</span>أ<span
            style="font-size:16pt;">نه بتاريخ {{ $data["accedentDate"] }} تعرض لحادثة شغل أثناء عمله لدى مشغلته شركة
           {{$data["company"]}}-&nbsp;</span><strong><span style="font-size:16pt;">تجدون رفقته نسخة من التصريح -.</span></strong>
    </p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; وحيث أن هذا الحادث قد خلف للعارض أضرارا جسمانية بليغة كما تثبت ذلك الشواهد
        الطبية، وشهادة الشفاء.</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; وحيث أن العارض ظل عاجزا عن العمل طيلة فترة العجز المؤقت المحدد بتلك
        الشواهد.</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; وحيث لإثبات علاقة الشغل ومادية الحادثة فإن العارض يدلي لسيادتكم بتصريح
        المشغلة بالحادثة لدى شركة التأمين.</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">&nbsp;&nbsp;&nbsp;
        وحيث أن المشغلة تؤمن مسؤوليتها عن حوادث الشغل لدى شركة التأمين أكسا<span dir="ltr">&nbsp;</span><span
            dir="rtl">&nbsp;التأمين المغرب.</span></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp; وحيث أن العارض قد راسل شركة التامين أكسا التأمين المغرب من أجل إجراء صلح</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">- <strong>تجدون
            رفقته نسخة من الطلب-.</strong></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">&nbsp;&nbsp;&nbsp;
        وحيث تبعا لذلك فإن العارض يلتمس التصريح باعتبار الحادثة التي وقعت له بتاريخ {{ $data["accedentDate"] }} بمثابة حادثة شغل مع
        الحكم لفائدته بالتعويضات المستحقة اثر هذه الحادثة والحكم على مشغلته شركة {{ $data["company"] }}،في شخص ممثلها بأدائها له
        التعويضات مع إحلال مؤمنتها شركة التأمين <strong>&nbsp;</strong>{{ $data["assurance"]}} محلها في الأداء مع النفاذ المعجل
        والفوائد القانونية وتحميل المدعى عليها الصائر.</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">&nbsp;</p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:22pt;"><u><span dir="rtl"
                style="font-weight:bold;">لهذه الأسبـــاب</span></u></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:18pt;"><span
            dir="rtl"><strong>&nbsp;&nbsp;&nbsp;</strong><strong><u>يلتمس العارض من
                    محكمتكم&nbsp;</u></strong><strong>:</strong> &nbsp;&nbsp;&nbsp;&nbsp;</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:18pt;"><span
            dir="rtl">&nbsp;&nbsp;&nbsp;&nbsp; <strong><u>الأمر بتبليغ نسخة من هذا المقال
                    إلى</u></strong><strong>:</strong><strong>&nbsp;&nbsp;</strong></span></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><span dir="ltr"
            style="font-weight:bold;">*</span>{{ $data["company"]}}<strong>&nbsp;في شخص ممثلها
            القانوني،</strong><strong>&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>{{ $data["companyRepresenter"] }}</strong></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:16pt;"><span
            dir="ltr"><strong>*</strong><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></span>شركة التامين
       {{ $data["assurance"] }}، الكائن مقرها الاجتماعي {{ $data["assuranceAddress"] }}</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:20pt;"><strong><u>وذلك من
                أجـــل&nbsp;</u></strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:18pt;"><span
            dir="rtl"><strong><u>&nbsp;</u></strong><strong><u>في الشكـــل</u></strong><u><span
                    style="font-size:16pt;">:</span></u><span
                style="font-size:16pt;">&nbsp;&nbsp;&nbsp;&nbsp;</span></span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:18pt;"><span
            style="font-size:16pt;">&nbsp;&nbsp;</span><span dir="rtl"><span style="font-size:16pt;">التصريح بقبول
                الدعوى لاستيفائها كافة الشروط المتطلبة قانونا</span>.</span><span dir="ltr">-</span><span
            dir="rtl">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:18pt;"><span dir="rtl"><span
                style="font-size:16pt;">&nbsp;</span><strong><u>في الموضـوع:</u></strong><span
                style="font-size:16pt;">&nbsp;</span></span></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:16pt;"><span dir="ltr">&nbsp;</span><span
            dir="rtl">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span dir="ltr">&nbsp;</span><span
            dir="rtl">&nbsp;- التصـريح باعتبار الحادثة التي تعرض لها العارض بتاريخ</span>&nbsp; {{ $data["accedentDate"]}}
        حادثــــة شغل.<span dir="ltr">&nbsp;</span></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:16pt;">&nbsp;&nbsp;&nbsp; <span
            dir="ltr">&nbsp;</span><span dir="rtl">&nbsp;&nbsp;&nbsp;</span>- معاينة أنه أصيب جراء الحادثة
        بأضرار بدنية بليغة كما يتضح من خلال الشواهد الطبية.</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:16pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        - الحكم لفائدته بالتعويضات التي يستحقها طبقا للقانون
        12-18.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:16pt;"><span
            dir="ltr">&nbsp;</span><span dir="rtl">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>- الحكم بإحلال
        شركة التأمين&nbsp; {{ $data["assurance"] }} في شخص ممثلها القانوني محل المشغلة في أداء
        التعويضات.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - شمول الحكم بالنفاذ المعجل.<span
            style="width:59.51pt; display:inline-block;">&nbsp;</span></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:18pt;">
        <strong>&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong><u>المرفقــات</u></strong>:</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;"><span
            style="width:35.4pt; display:inline-block;">&nbsp;</span>{{$data["attachements"]}}</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">&nbsp;</p>
    <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
</body>

</html>
