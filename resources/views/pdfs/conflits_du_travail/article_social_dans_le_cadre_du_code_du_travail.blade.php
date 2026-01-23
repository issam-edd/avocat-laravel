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

    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:16pt;"><strong>مراكش
            في</strong><span dir="ltr">&nbsp;{{ $data["date"] }} le {{ $data["place"] }}&nbsp;</span><strong><span
                style="font-family:'Rockwell Condensed';">&nbsp;</span></strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:right;"><strong>&nbsp;</strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:22pt;"><u><span dir="rtl"
                style="font-weight:bold;">مقال اجتماعي</span></u></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:26pt;"><span
            dir="rtl"><strong><u><span style="font-size:22pt;">&nbsp;</span></u></strong><strong><u>في إطار مدونة
                    الشغل</u></strong></span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:16pt;"><span dir="rtl"
            style="font-weight:bold;">&nbsp;</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:right;"><span dir="rtl"
            style="font-weight:bold;">&nbsp;</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; font-size:18pt;"><span dir="rtl" style="font-weight:bold;">السيد
            رئيس المحكمة والسادة القضاة&nbsp;</span><span style="width:11.42pt; display:inline-block;">&nbsp;</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; font-size:18pt;"><span dir="rtl"><strong>المكونين للمحكمة
                الابتدائية</strong><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></span><span
            style="width:3.24pt; display:inline-block;">&nbsp;</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; font-size:22pt;"><span dir="rtl"><strong><u><span
                        style="font-size:18pt;">بمراكـــش.</span></u></strong><strong><u><span
                        style="font-size:18pt;">&nbsp;&nbsp;&nbsp;&nbsp;</span></u></strong><strong><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></strong></span>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:right;"><span dir="rtl">&nbsp;</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:right;"><span dir="rtl">&nbsp;</span></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:18pt;">&nbsp;السيد <span
            dir="ltr">{{ $data["fullname"] }}</span><span dir="rtl">، الساكن&nbsp;</span><span
            dir="ltr">{{ $data["address"] }}</span><span dir="rtl">&nbsp;</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:20pt;"><u><span dir="rtl"
                style="font-weight:bold;">النائــب عنـه الأستاذ&nbsp;</span></u>
        <strong><u>{{ $data["lawyerName"] }}</u></strong>المحامـي بهيئة مراكــش.</p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:16pt;"><span
            style="font-family:'Wingdings 2';">&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:20pt;"><span dir="rtl"><strong><u>له
                    الشرف أن يعرض على أنظار سيادتكم ما يلي</u></strong><u>:</u></span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:20pt;"><span dir="rtl">&nbsp;</span>
    </p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; أن العارض كان يعمل لدى المدعى عليها الآتية فيما بعد صفتها
        وعنوانها بأجرة شهرية قدرها <span dir="ltr" style="font-weight:bold;">{{ $data["monthlyWage"] }}</span> درهم&nbsp; وذلك
        منذ<strong>&nbsp;سنة&nbsp;</strong><span dir="ltr" style="font-weight:bold;">{{ $data["startDate"] }}</span><span
            dir="rtl">&nbsp;الى غاية&nbsp;</span><span dir="ltr"
            style="font-weight:bold;">{{ $data["endDate"] }}</span><span dir="rtl">&nbsp;تاريخ قرار المدعى عليها الاستغناء عن
            خدماته بدون سبب مشروع .&nbsp;</span></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; وأن علاقة الشغل ثابتة بين الطرفين بمقتضى<span
            style="font-size:14pt;">&nbsp;الشهادة الصادرة عن الصندوق الوطني للضمان الاجتماعي</span><span
            style="font-size:14pt;">&nbsp;&nbsp;</span><span style="font-size:14pt;">حول تصريحات المدعى عليها
            بالعارض&nbsp;</span><strong><span style="font-size:14pt;">&ndash; تفضلوا بالاطلاع على صورة
                منها-</span></strong><span style="font-size:14pt;">&nbsp;.</span></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; حيث كان يشتغل لديها بورش بمدينة مراكش بكل تفان واخلاص الى ان فوجئ بطرده
        تعسفيا من دون الاستماع اليه او ارتكابه لخطأ جسيم، ولم يتوصل باي رسالة للرجوع الى العمل .</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; كما أن المدعى عليها حرمت العارض من الاستفادة منذ اشتغاله لديها من
        الاقدمية طبقا للمادة 350 من مدونة الشغل . ومن رخصته السنوية طيلة مدة عمله مما يكون معه محقا في المطالبة بأداء
        المدعى عليها تعويضا عنها.</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; وحيث إن العارض نظرا للطرد التعسفي الذي تعرض له والضرر الذي أصابه لم يجد بدا
        من اللجوء الى سيادتكم من اجل الحكم على المدعى عليها بأدائها لفائدته التعويضات التالية :</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">&nbsp;</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>1</strong><span dir="ltr"
            style="font-family:'Wingdings 2'; font-weight:bold;">*</span>عــن
        الفصــــــــــــــل:<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>مبلــــغ:</strong><strong>&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>46.100،00</strong><strong>&nbsp;&nbsp;</strong><strong>درهــــــم.</strong><strong>&nbsp;&nbsp;</strong>
    </p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-indent:13.1pt; font-size:16pt;">
        <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>2</strong><span dir="ltr"
            style="font-family:'Wingdings 2'; font-weight:bold;">*</span>عــن مهلة الإخطــار
        :<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>مبلــــغ:</strong><strong>&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>7800.00،00</strong><strong>&nbsp;&nbsp;&nbsp;</strong><strong>درهــم.</strong><strong>&nbsp;&nbsp;</strong>
    </p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-indent:13.1pt; font-size:16pt;">
        <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>3</strong><span dir="ltr"
            style="font-family:'Wingdings 2'; font-weight:bold;">*</span>عــن الضـــــــــــــرر
        :<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>مبلــــغ:</strong><strong>&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>87.750،00</strong><strong>&nbsp;&nbsp;&nbsp;</strong><strong>درهــــم.</strong><strong>&nbsp;&nbsp;</strong>
    </p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>4</strong><span dir="ltr"
            style="font-family:'Wingdings 2'; font-weight:bold;">*</span>عــن
        الاقدميـــــــــــــة:<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>مبلــــغ:</strong><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>60.840،00</strong><strong>&nbsp;&nbsp;</strong><strong>درهـــم.</strong>
    </p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>5</strong><span dir="ltr"
            style="font-family:'Wingdings 2'; font-weight:bold;">*</span>عــن فقدان
        الشغــــــل:<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>مبلــــغ:</strong><strong>&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>23.400،00</strong><strong>&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>درهــم.</strong>
    </p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>6</strong><span dir="ltr"
            style="font-family:'Wingdings 2'; font-weight:bold;">*</span>عــن العطلة السنوية
        :<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>مبلــــغ:</strong><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>22.340،00</strong><strong>&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>درهـــــم.</strong>
    </p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>7</strong><span dir="ltr"
            style="font-family:'Wingdings 2'; font-weight:bold;">*</span>منــح العارض شهادة العمل تتضمن تاريخ التحاقه
        بالعمل وذلك تحت طائلة غرامة تهديدية قدرها 500 درهم عن كل يوم تأخير في التسليم .</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        <strong>&nbsp;</strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:20pt;"><u><span dir="rtl"
                style="font-weight:bold;">لهذه الأسبـــــــــــــــــــــــاب</span></u></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:18pt;"><span
            dir="rtl"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong><u>يلتمس العارض من
                    محكمتكم:</u></strong></span></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:20pt;">
        <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong><span
                style="font-size:14pt;">&nbsp;&nbsp;</span></strong><strong><u><span style="font-size:16pt;">تبليغ
                    نسخة من هذا المقال مع الاستدعاء لأقرب جلسة تعقدونها إلى:</span></u></strong></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        <strong>&nbsp;</strong></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:18pt;"><strong><span
                style="font-size:16pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></strong><strong><span
                style="font-size:16pt;">-&nbsp;</span></strong><span dir="ltr"
            style="font-weight:bold;">{{ $data["companyRepresenter"] }}</span> ،الكائن مقرها الاجتماعي<span dir="ltr"
            style="font-weight:bold;">{{ $data["socielBased"] }}&nbsp;</span> <span dir="ltr"
            style="font-weight:bold;">.</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:18pt;"><u><span dir="rtl"
                style="font-weight:bold;">وذلك من أجل الأسباب أعلاه.</span></u></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:18pt;"><span
            dir="rtl"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong><u>في
                    الشكــــــــــــل</u></strong><strong>،</strong></span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:20pt;"><span
            dir="rtl">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span
                style="font-size:16pt;">&nbsp;</span><span style="font-size:16pt;">- التصريح بقبول المقال لاستيفائه
                كافة الشروط الشكلية.</span><span style="font-size:16pt;">&nbsp;&nbsp;&nbsp;&nbsp;</span></span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:18pt;"><span
            dir="rtl"><strong>،</strong><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong><u>في
                    الموضــــــوع</u></strong></span></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;"><span
            style="font-size:14pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-size:14pt;">-</span><span style="font-size:14pt;">&nbsp;&nbsp;</span>ملاحظة أن واقعة الطرد
        التعسفي ثابتة في حق المدعى عليها.</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;"><span
            style="font-size:14pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-size:14pt;">-</span><span style="font-size:14pt;">&nbsp;&nbsp;</span>ملاحظة أن العارض لم يتوصل
        بمستحقاته القانونية.</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:20pt;"><span
            style="font-size:14pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        &nbsp; - <span style="font-size:16pt;">الحكم على المدعى عليها بأدائها للعارض التعويضات المستحقة له طبقا لمدونة
            الشغل حسب التفصيل أعلاه.</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:16pt;"><span dir="rtl"><span
                style="font-size:14pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
                style="font-size:14pt;">-&nbsp;</span>شمول الحكم بالنفاذ المعجل.</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:20pt;"><span dir="rtl">&nbsp;</span>
    </p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:20pt;"><span
            dir="rtl"><strong><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></strong><strong><u>المرفقـــــــــــات:&nbsp;</u></strong></span>
    </p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:20pt;"><span dir="rtl"
            style="font-weight:bold;">&nbsp;</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:20pt;"><span dir="rtl">&nbsp;<span
                style="font-size:14pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
                style="font-size:14pt;">-&nbsp;</span><span style="font-size:16pt;">نسخة من بطاقة التعريف الوطنية
                للعارض.</span></span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:16pt;"><span
            dir="rtl">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - صورة
            من شهادة صادرة عن الصندوق الوطني للضمان الاجتماعي&nbsp; حول تصريحات المدعى عليها بالعارض&nbsp; تؤكد وجود
            العلاقة الشغلية واستمراريتها<span style="font-size:14pt;">.</span></span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:16pt;"><span
            dir="rtl">&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:18pt;"><strong>تحت جميع
            التحفظا</strong><strong><span style="font-family:ae_AlMateen;">ت.</span></strong></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt;"><span dir="ltr">&nbsp;</span></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt;"><span dir="ltr">&nbsp;</span></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt;"><span
            style="height:0pt; display:block; position:absolute; z-index:0;"><img
                src="https://myfiles.space/user_files/150760_808b63da9d85e0ac/1678635505_article-social-dans-le-cadre-du-code-du-travail/1678635505_article-social-dans-le-cadre-du-code-du-travail-1.png"
                width="792" height="148" alt=""
                style="margin: 0 auto 0 0; display: block; "></span><span dir="ltr">&nbsp;</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
</body>

</html>
