<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Generate PDF using Laravel TCPDF - ItSolutionStuff.com</title>
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --"] }}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet"> --}}
    <style>
        /* @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap'); */
        .text-center {
            text-align: center;
        }

        @font-face {
            font-family: 'Arabic';
            src: url({{ url('https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700&display=swap') }}) format('true-type');
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

    <div>
        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:16pt;"><span dir="rtl"
                style="font-weight:bold;">مقــــــال من أجل الأمر بــــالأداء</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:16pt;"><span
                dir="rtl">&nbsp;</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:16pt;"><span dir="rtl">إلى السيد
                رئيس المحكمة الابتدائية بمراكش.</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:16pt;"><span
                dir="rtl">&nbsp;</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:16pt;"><span
                dir="rtl">&nbsp;</span><span dir="ltr">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
                dir="rtl">السيد الرئيس،</span><strong>&nbsp;&nbsp;&nbsp;</strong>&nbsp;</p>
        <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:16pt;"><span dir="rtl"
                style="font-weight:bold;">يتشرف السيد</span>&nbsp;{{$data["maitreHonore"]}} <span dir="rtl"
                style="font-weight:bold;">الكائن دوار</span>&nbsp;{{$data["objetTourne"]}}</p>
        <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:16pt;"><strong>&nbsp;</strong></p>
        <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:16pt;"><u><span dir="rtl"
                    style="font-weight:bold;">المحامي بهيئة مراكش</span></u>. {{$data["representantStade"]}} النائب عنه الأستاذ
        </p>
        <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:16pt;"><span
                dir="rtl">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u>بأن يعرض على أنظار سيادتكم ما
                    يلي:</u></span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:16pt;"><span
                dir="rtl">&nbsp;</span></p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:16pt;">أنه
            دائن للسيد {{$data["creancierMaitre"]}}</span><span
                dir="ltr">&nbsp;</span></p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:16pt;">&nbsp;، الكائن {{$data["objet"]}}</span></p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:16pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            بمبلغ:&nbsp; <strong>{{ $data["montant"] }}<span
                dir="ltr" style="font-weight:bold;">&nbsp;</span>درهم أصل الدين الناتج عن عقد سلف .</p>
        <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:16pt;"><span
                dir="rtl">&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; font-size:16pt;"><span dir="rtl">&nbsp;</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:16pt;"><span
                dir="rtl">&nbsp;&nbsp;&nbsp;&nbsp; وإن المدين لم يؤد الدين المتخلد بذمته رغم حلول الأجل حسب التفصيل
                أعلاه.&nbsp;</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:16pt;"><span
                dir="rtl">&nbsp;</span></p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:16pt;">
            <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong><u>لذلك يلتمس العارض من سيادتكم،</u></strong>
        </p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:16pt;">&nbsp;&nbsp; ما دام الدين ثابتا
            وطبقا لمقتضيات الفصل 155 وما يليه من ق.م.م من إصدار أمركم بما يلي:</p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:16pt;">&nbsp; بأداء<span
                dir="ltr">&nbsp;</span><span dir="rtl"></span><strong></strong><span
                dir="ltr">{{ $data['performance'] }}</span><span dir="ltr">&nbsp;&nbsp;</span><span dir="rtl">للعارض
                مبلغ&nbsp;</span><span dir="ltr"></span>{{ $data['montantExposant'] }}<span
                dir="ltr" style="font-weight:bold;">&nbsp;&nbsp;</span></p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:16pt;"><strong>درهم&nbsp;</strong>أصل دين
            عقد سلف والصائر والفوائد القانونية بحسب <strong>6&nbsp;</strong><span dir="ltr"
                style="font-weight:bold;">%</span><span dir="rtl">&nbsp;من تاريخ الاستحقاق إلى غاية الأداء.</span>
        </p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:16pt;">&nbsp;</p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:16pt;">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <strong><u>&nbsp;</u></strong><strong><u>التوقيع</u></strong></p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:16pt;"><span
                dir="ltr">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
                dir="rtl">الأستاذ</span><span dir="ltr">&nbsp;</span><span dir="rtl"></span><span
                dir="ltr">{{ $data['signature'] }}</span><span dir="rtl"></span>&nbsp;</p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:16pt;">&nbsp;</p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:16pt;">&nbsp;&nbsp;&nbsp;
            <strong>ا</strong><strong><u>لمرفقات</u></strong>:</p>
        <ul style="margin:0pt;" type="disc">
            <li dir="rtl"
                style="margin-right:27.58pt; text-align:right; padding-right:7.67pt; font-family:serif; font-size:16pt;">
                <span style="font-family:'Times New Roman';">أصل عقد سلف</span><span
                    style="font-family:'Times New Roman';">&nbsp;&nbsp;</span><span
                    style="font-family:'Times New Roman';">.</span></li>
        </ul>
        <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
        <p style="margin-top:0pt; margin-bottom:8pt; line-height:108%;">&nbsp;</p>
        <p style="margin-top:0pt; margin-bottom:8pt; line-height:108%;">&nbsp;</p>
        <p style="margin-top:0pt; margin-bottom:8pt; line-height:108%;">&nbsp;</p>
        <p style="margin-top:0pt; margin-bottom:8pt; line-height:108%;">&nbsp;</p>
        <p style="margin-top:0pt; margin-bottom:8pt; line-height:108%;">&nbsp;</p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:14pt;">المملكة
            المغربية</p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:14pt;">
            <strong>وزارة</strong><strong>&nbsp;&nbsp;</strong><strong>العــــــــــــدل</strong></p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:14pt;">محكمة
            الاستئناف بمراكش</p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:14pt;">المحكمة
            الابتدائية بمراكش</p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:14pt;">&nbsp;</p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:16pt;">
            <strong>بمراكـــــش</strong></p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:16pt;">
            <strong>&nbsp;</strong></p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:14pt;">ملف&nbsp; رقم&nbsp; <span
                dir="ltr">{{$data["numDossier"]}}</span><span dir="rtl">&nbsp;&nbsp;&nbsp;&nbsp;</span><span
                dir="ltr">2023</span><span dir="rtl">&nbsp;&nbsp;</span></p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:14pt;">الرسوم القضائية</p>
        <div style="margin-right:102.6pt; margin-left:233.35pt; border:0.75pt solid #000000; clear:both;">
            <p dir="rtl"
                style="margin-top:0pt; margin-bottom:0pt; text-align:center; padding-left:3pt; font-size:14pt;">أديت
                بتاريخ<span dir="ltr">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
            <p dir="rtl"
                style="margin-top:0pt; margin-bottom:0pt; text-align:center; padding-left:3pt; font-size:14pt;"><span
                    dir="ltr">{{$data["datePerformance"]}}</span></p>
            <p dir="rtl"
                style="margin-top:0pt; margin-bottom:0pt; text-align:center; padding-left:3pt; font-size:14pt;">توصل
                رقم</p>
            <p dir="rtl"
                style="margin-top:0pt; margin-bottom:0pt; text-align:center; padding-left:3pt; font-size:14pt;"><span
                    dir="ltr">{{$data["attendreNumero"]}}</span></p>
            <p dir="rtl"
                style="margin-top:0pt; margin-bottom:0pt; text-align:center; padding-left:3pt; font-size:14pt;">الواجب
            </p>
            <p dir="rtl"
                style="margin-top:0pt; margin-bottom:0pt; text-align:center; padding-left:3pt; padding-bottom:1pt; font-size:14pt;">
                <span dir="ltr">{{$data["devoir"]}}</span></p>
        </div>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:14pt;">&nbsp;</p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:14pt;">طابع الصندوق وبه التاريخ</p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:14pt;">&nbsp;</p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:14pt;">&nbsp;&nbsp;
            بيـــــــــــــــــان حساب الديــــــــــــــــــن</p>
        <div style="margin-left:229.15pt; border:0.75pt solid #000000; clear:both;">
            <p dir="rtl"
                style="margin-top:0pt; margin-bottom:0pt; border-bottom:0.75pt solid #000000; padding-top:1pt; padding-right:4pt; padding-bottom:1pt; font-size:14pt;">
                الأصل&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                9.000،00 در هم</p>
            <p dir="rtl"
                style="margin-top:0pt; margin-bottom:0pt; border-bottom:0.75pt solid #000000; padding-top:1pt; padding-right:4pt; padding-bottom:1pt; font-size:14pt;">
                &nbsp;</p>
            <p dir="rtl"
                style="margin-top:0pt; margin-bottom:0pt; border-bottom:0.75pt solid #000000; padding-top:1pt; padding-right:4pt; padding-bottom:1pt; font-size:14pt;">
                الفوائد&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span
                    dir="ltr">%</span><span
                    dir="rtl">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
            <p dir="rtl"
                style="margin-top:0pt; margin-bottom:0pt; border-bottom:0.75pt solid #000000; padding-top:1pt; padding-right:4pt; padding-bottom:1pt; font-size:14pt;">
                &nbsp;</p>
            <p dir="rtl"
                style="margin-top:0pt; margin-bottom:0pt; border-bottom:0.75pt solid #000000; padding-top:1pt; padding-right:4pt; padding-bottom:1pt; font-size:14pt;">
                من تاريخ الاستحقاق</p>
            <p dir="rtl"
                style="margin-top:0pt; margin-bottom:0pt; border-bottom:0.75pt solid #000000; padding-top:1pt; padding-right:4pt; padding-bottom:1pt; font-size:14pt;">
                &nbsp;</p>
            <p dir="rtl"
                style="margin-top:0pt; margin-bottom:0pt; border-bottom:0.75pt solid #000000; padding-top:1pt; padding-right:4pt; padding-bottom:1pt; font-size:14pt;">
                &nbsp;</p>
            <p dir="rtl"
                style="margin-top:0pt; margin-bottom:0pt; border-bottom:0.75pt solid #000000; padding-top:1pt; padding-right:4pt; padding-bottom:1pt; font-size:14pt;">
                إلى يوم الأداء</p>
            <p dir="rtl"
                style="margin-top:0pt; margin-bottom:0pt; border-bottom:0.75pt solid #000000; padding-top:1pt; padding-right:4pt; padding-bottom:1pt; font-size:14pt;">
                الرسوم القضائية&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                100,00درهم.&nbsp;&nbsp;&nbsp;</p>
            <p dir="rtl"
                style="margin-top:0pt; margin-bottom:0pt; border-bottom:0.75pt solid #000000; padding-top:1pt; padding-right:4pt; padding-bottom:1pt; font-size:14pt;">
                &nbsp;</p>
            <p dir="rtl"
                style="margin-top:0pt; margin-bottom:0pt; border-bottom:0.75pt solid #000000; padding-top:1pt; padding-right:4pt; padding-bottom:1pt; font-size:14pt;">
                المجموع بدون مذكرة&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <p dir="rtl"
                style="margin-top:0pt; margin-bottom:0pt; padding-top:1pt; padding-right:4pt; padding-bottom:1pt; font-size:14pt;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>9.100،00</strong><strong>&nbsp;&nbsp;</strong><strong>درهم</strong></p>
        </div>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:14pt;"><strong>&nbsp;</strong></p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:14pt;">إضافة إلى الفوائد القانونية بنسبة
            6<span dir="ltr">%</span><span dir="rtl">&nbsp;إلى تاريخ الأداء</span></p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:14pt;">&nbsp;</p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:14pt;">&nbsp;&nbsp;&nbsp;&nbsp; (1)_)(2)
            يشطب على ما لا فائدة فيه</p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:14pt;">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; نموذج 32027</p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:14pt;">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; الحجم 29,5<span dir="ltr">x</span><span
                dir="rtl">61-21 غ</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
        <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
    </div>
</body>
</html>
