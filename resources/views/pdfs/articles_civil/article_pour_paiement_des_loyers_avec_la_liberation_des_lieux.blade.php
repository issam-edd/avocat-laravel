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
    <div>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:16pt;">
            <strong><span >مراكش في</span></strong><span
                dir="ltr">&nbsp;Marrakech le</span><strong><span
                    >&nbsp;&nbsp;</span></strong><strong><span
                    >{{ $data["date"]}}</span></strong><strong><span
                    >&nbsp;&nbsp;</span></strong></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:20pt;">
            <strong><u><span >مقـال</span></u></strong><strong><u><span
                        >&nbsp;&nbsp;</span></u></strong><strong><u><span
                        >رام</span></u></strong><strong><u><span
                        >&nbsp;&nbsp;</span></u></strong><strong><u><span
                        >إلى أداء&nbsp;</span></u></strong></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:20pt;">
            <strong><u><span >واجبات الكراء مع الإفراغ.</span></u></strong></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-right:21.6pt; margin-bottom:0pt; line-height:normal; font-size:16pt;">
            <strong><span
                    >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></strong><strong><span
                    >إلى السيد رئيس المحكمة</span></strong><span dir="ltr"
                style="font-weight:bold;">&nbsp;</span> <strong><span
                    >&nbsp;&nbsp;&nbsp;</span></strong><span dir="ltr"
                style="font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <span dir="ltr"
                style="font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>والسادة
            القضاة<span dir="ltr" style="font-weight:bold;">&nbsp;</span>المكونين
            للمحكمة الابتدائية <span dir="ltr">&nbsp;</span><strong><span
                    >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></strong><strong><span
                    >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></strong><strong><span
                    >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></strong>&nbsp;
            <span dir="ltr" style="font-weight:bold;">&nbsp;</span></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-right:40.5pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:16pt;">
            <strong><span
                    >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></strong><span
                dir="ltr"
                style="font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong><span
                    >-</span></strong><strong><u><span
                        >&nbsp;بسوق السبت أولاد
                        النمة</span></u></strong><strong><span
                    >-</span></strong><span dir="ltr"
                style="font-weight:bold;">&nbsp;</span><span
                style="width:20.53pt; display:inline-block;">&nbsp;</span><span dir="ltr"><strong><span
                        >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></strong><strong><span
                        >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></strong><strong><span
                        >&nbsp;</span></strong><strong><span
                        >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></strong><strong><span
                        >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></strong><strong><span
                        >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></strong><strong><span
                        >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></strong></span><span
                style="font-size:14pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:18pt;"><strong><span
                    style="font-size:14pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></strong><strong><span
                    >سـيدي</span></strong><strong><span
                    >&nbsp;&nbsp;</span></strong><strong><span
                    >الـرئيس</span></strong><strong><span
                    style="font-size:16pt;">&nbsp;،</span></strong></p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:16pt;"><strong><span
                    >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></strong><strong><span
                    >&nbsp;&nbsp;&nbsp;&nbsp;</span></strong><span
                >السيد&nbsp;</span><span dir="ltr"
                >{{ $data["clientFullname"]}}</span><span
                >&nbsp;،&nbsp;</span><span
                >الساكن&nbsp;</span><span dir="ltr"
                >{{ $data["clientAddress"]}}</span><span
                >.</span></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:18pt;">
            <strong><u><span >النائب عنه الأستاذ&nbsp;</span></u></strong><span
                dir="ltr">&nbsp;</span><strong><u><span
                        >{{ $data["lawyerName"]}}</span></u></strong>المحامي بهيئة
            مراكش<strong><u><span >، الجاعل محل المخابرة مع كتابة
                        الضبط</span></u></strong><strong><u><span
                        >&nbsp;&nbsp;&nbsp;&nbsp;</span></u></strong><span
                >.</span></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:18pt;"><span
                dir="ltr" style="font-family:'Wingdings 2';">&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;</span></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:18pt;">
            <strong><u><span >له الشرف أن يعرض على أنظار سيادتكم ما
                        يلي:</span></u></strong></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:16pt;"><span
                dir="ltr" >&nbsp;</span><span
                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
                >&nbsp;&nbsp;</span><span dir="ltr"
                >&nbsp;&nbsp;</span><span
                >أن&nbsp;</span><span
                >المدعى عليه يعتمر المنزل الكائن ب</span><span dir="ltr"
                >&nbsp;{{ $data["homeAddress"]}}</span><span
                >&nbsp;</span><span dir="ltr"
                >&nbsp;</span><span >، و
                الذي عبارة عن</span><span >&nbsp;&nbsp;</span><span
                dir="ltr" >{{ $data["homeDescription"]}}</span><span
                >&nbsp;</span><span dir="ltr"
                >&nbsp;</span><span
                >.</span></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:16pt;"><span
                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
                >&nbsp;&nbsp;&nbsp;&nbsp;</span><span
                >وحيث</span><span dir="ltr"
                >&nbsp;</span><span >أن
                المدعى عليه امتنع عن أداء واجبات كراء المحل موضوع الدعوى منذ</span><span dir="ltr"
                >&nbsp;</span><span
                >&nbsp;</span><span dir="ltr"
                >{{ $data["startDate"]}}</span><span
                >&nbsp;&nbsp;</span><span
                >إلى</span><span
                >&nbsp;&nbsp;</span><span dir="ltr"
                >{{ $data["endDate"]}}</span><span
                >&nbsp;</span><span >أي ما
                مجموعه</span><span >&nbsp;&nbsp;</span><span dir="ltr"
                >{{ $data["totalPeriod"]}}</span>&times; <span
                >&nbsp;</span><span dir="ltr"
                >{{ $data["pricePerMonth"]}}</span>= <span
                >&nbsp;</span><span dir="ltr"
                >{{ $data["priceTotal"]}}</span>.</p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:16pt;"><span
                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
                >فضلا على عدم أدام واجبات</span><span dir="ltr"
                >&nbsp;{{ $data["ManquantFonctions"]}}&nbsp;</span><span
                >&nbsp;&nbsp;</span><span
                >طيلة الفترة من&nbsp;</span><span
                dir="ltr"></span><strong><span >
                    {{ $data["StartPeriod"]}}</span></strong><span
                >الى متم</span><span dir="ltr"
                style="font-weight:bold;">{{ $data["EndPeriod"]}}</span><span
                >&nbsp;&nbsp;</span><span
                >بحسب&nbsp;</span><span dir="ltr"><span
                    >{{ $data["AmountJrMonth"]}}</span></span></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:16pt;"><span
                >&nbsp;&nbsp;&nbsp;</span><span
                >&nbsp;&nbsp;&nbsp;&nbsp;</span><span
                >وحيث سبق للعارض أن وجه إنذار إلى المدعى عليه يطالب فيه بأداء
                واجبات الكراء عن الفترة&nbsp;</span><span dir="ltr"><span
                    >&nbsp;</span><span
                    >{{ $data["PeriodeExecuterFunction"]}}</span></span><span
                >حسب سومة كرائية قدرها&nbsp;</span><span dir="ltr"
                >{{ $data["AccordingBadMark"]}}</span><span
                >&nbsp;درهم&nbsp;</span><span
                >.&nbsp;</span><strong><span
                    >- تفضلوا بالاطلاع على اصل الانذار-</span></strong></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:16pt;"><span
                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
                >وحيث ان المدعى عليه بادر بالجواب على الانذار عن طريق المفوض
                القضائي السيد&nbsp;</span><span dir="ltr"><span
                    >&nbsp;</span><span
                    >{{ $data["CommissaireJudiciaire"]}}</span></span><span
                >، يزعم فيه انه لم يعد يعتمر المنزل موضوع الدعوى
                منذ&nbsp;</span><span dir="ltr"
                >&nbsp;{{ $data["InhabitedDate"]}}</span><span
                >،وان ذمته المالية خالية من المبالغ المطالب بها ،وهو ما يشكل
                اقرارا وقرينة قاطعة على قيام العلاقة الكرائية بين الطرفين .</span></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:16pt;"><span
                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
                >وحيث ان المدعي عليه لا زال يعتمر المنزل موضوع
                الدعوى.&nbsp;</span></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:16pt;"><span
                >&nbsp;&nbsp;</span><span
                >&nbsp;&nbsp;</span><span
                >&nbsp;&nbsp;</span><span
                >وحيث أن المدعى عليه لم يؤد واجبات الكراء مما يكون معه العارض
                محقا في المطالبة بمبالغ الكراء عن المدة المذكورة أي ما قدره</span><span
                >&nbsp;&nbsp;</span><span dir="ltr"
                style="font-weight:bold;">{{ $data["MontantLocation"]}}</span>.<strong><span
                    >&nbsp;</span></strong><span
                >وواجبات استهلاك الماء والكهرباء البالغة</span><strong><span
                    >&nbsp;</span></strong><span
                dir="ltr">&nbsp;</span><strong><span
                    >{{ $data["ExtensiveWaterElec"]}}</span></strong>درهم.</p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:16pt;"><span
                >&nbsp;</span><span
                >&nbsp;&nbsp;&nbsp;&nbsp;</span><span
                >وحيث انه بذلك فان العارض يلجأ إلى سيادتكم قصد الحكم على المدعى
                عليه بأدائه لفائدته واجبات كراء المحل موضوع النزاع عن الفترة المذكورة ،وكذا مستحقات استهلاك الماء
                والكهرباء، مع تعويض عن التماطل محدد في</span><span dir="ltr"><span
                    >&nbsp;{{ $data["CompensationIdle"]}}</span><strong><span
                        >&nbsp;</span></strong></span>درهم <strong><span
                    >.</span></strong></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:24pt;"><u><span
                    >لهــذه الأسبـــــــاب</span></u></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:20pt;"><span
                dir="ltr" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>يلتمس
            العـارض<strong><u><span
                        style="font-size:18pt;">&nbsp;&nbsp;</span></u></strong><strong><u><span
                        style="font-size:18pt;">من
                        سيـادتكم</span></u></strong><strong><span
                    style="font-size:18pt;">&nbsp;:</span></strong></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:18pt;">
            <strong><span
                    >&nbsp;&nbsp;&nbsp;&nbsp;</span></strong><strong><u><span
                        >تبليغ نسخة من هذا المقال مع الاستدعاء لأقرب جلسة
                        تعقدونها إلى</span></u></strong><span >:&nbsp;</span></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:18pt;"><span
                dir="ltr" >&nbsp;</span></p>
        <ul style="margin:0pt;" type="disc">
            <li dir="rtl"
                style="margin-right:30.58pt; text-align:right; line-height:normal; padding-right:7.67pt; font-size:16pt; font-weight:bold;">
                <span >السيد</span><span dir="ltr"><span
                        >&nbsp;&nbsp;</span><span
                        >{{ $data["SessionHoldingTo"]}}&nbsp;</span></span><span
                    >،الساكن</span><span
                    >&nbsp;</span><span dir="ltr"><span
                        >&nbsp;</span><span
                        >{{ $data["Inhabitant"]}}</span></span><span
                    >السبت اولاد النمة أو بمقر عمله&nbsp;</span><span
                    dir="ltr" >{{ $data["HisWorkplace"]}}</span></li>
        </ul>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:20pt;">
            <strong><u><span >وذلك ومن</span></u></strong><strong><u><span
                        >&nbsp;&nbsp;</span></u></strong><strong><u><span
                        >اجل الأسباب</span></u></strong><strong><u><span
                        >&nbsp;&nbsp;</span></u></strong><strong><u><span
                        >أعلاه</span></u></strong></p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:18pt;"><span
                dir="ltr" style="font-size:16pt; font-weight:bold;">&nbsp;</span>
            <strong><u><span >لكـــي</span></u></strong><span
                style="font-size:16pt;">:</span></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:20pt;"><span
                style="font-size:16pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><strong><u><span
                        >فـي الشـكـــل</span></u></strong><u><span
                    style="font-size:16pt;">&nbsp;</span></u><span
                style="font-size:16pt;">:</span></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:16pt;"><span
                >&nbsp;&nbsp;&nbsp;</span><span
                >-</span><span
                >&nbsp;&nbsp;</span><span
                >تصرحوا بقبول المقال لاستيفائه كافة شروطه الشكلية.</span></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:20pt;"><span
                style="font-size:16pt;">&nbsp;&nbsp;&nbsp;</span><strong><u><span
                        >في الموضوع :</span></u></strong></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:16pt;"><span
                >&nbsp;&nbsp;</span><span
                >&nbsp;</span><span
                >-&nbsp;</span><span
                >&nbsp;</span><span
                >ملاحظة أن الطلب وجيـه ومعـلل.</span></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:16pt;"><span
                >&nbsp;&nbsp;</span><span
                >&nbsp;</span><span
                >-&nbsp;</span><span
                >&nbsp;</span><span
                >معاينة أن المدعى عليه يكتري من العارض المحل موضوع
                النزاع.</span><u><span >&nbsp;</span></u></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:16pt;"><span
                >&nbsp;&nbsp;&nbsp;</span><span
                >- معاينة أن المدعى عليه امتنع عن أداء واجبات الكراء رغم إنذاره
                من طرف العارض.</span></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:16pt;"><span
                >&nbsp;&nbsp;&nbsp;</span><span
                >- الحكم تبعا لذلك على المدعى عليها بأدائها لفائدة العارض
                واجبات&nbsp;</span><span dir="ltr"><span
                    >&nbsp;&nbsp;</span><span
                    >{{ $data["ManquantFonctions"]}}</span></span><span
                >عن الفترة الممتدة منذ&nbsp;</span><span dir="ltr"
                >&nbsp;{{ $data["PeriodeExecuterFunction"]}}</span><span
                >أي ما مجموعه&nbsp;</span><span dir="ltr"
                >{{ $data["MontantLocation"]}}</span><span
                >.</span></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:16pt;"><span
                >&nbsp;&nbsp;&nbsp;</span><span
                >- الحكم للعارض بواجبات&nbsp;</span><span dir="ltr"><span
                    >&nbsp;</span><span
                    >{{ $data["ManquantFonctions"]}}</span></span><span
                >طيلة الفترة من&nbsp;</span><span dir="ltr"><span
                    >&nbsp;&nbsp;</span><span
                    >{{ $data["StartPeriod"]}}</span></span><span
                >الى متم&nbsp;</span><span dir="ltr"
                >{{ $data["EndPeriod"]}}</span><span
                >&nbsp;بحسب&nbsp;</span><span dir="ltr"
                >{{ $data["AmountJrMonth"]}}</span><span
                >.</span></p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:16pt;"><span
                >&nbsp;</span><span
                >&nbsp;- الحكم لفائدة العارض بتعويض عن التماطل</span><span
                >&nbsp;&nbsp;</span><span
                >قدره:&nbsp;</span><span
                dir="ltr">&nbsp;</span><strong><span
                    >{{ $data["CompensationIdle"]}}</span></strong>درهم<span
                >&nbsp;.</span></p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:16pt;"><span
                >&nbsp;&nbsp;</span><span
                >- القول</span><span
                >&nbsp;&nbsp;</span><span
                >والحكم بفسخ عقدة الكراء وبإفراغ المدعى عليه من العين المكراة من
                شخصه وكل من يقوم مقامها او بإذنها تحت طائلة غرامة تهديدية قدرها&nbsp;</span><span dir="ltr"
                >{{ $data["FineOfDelay"]}}</span><span
                >درهم عن كل يوم تأخير.</span></p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:16pt;"><span
                >&nbsp;</span><span
                >&nbsp;- تحديد الإكراه البدني في الأقصى.</span></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:16pt;"><span
                >&nbsp;&nbsp;</span><span
                >-&nbsp;</span><span
                >&nbsp;</span><span >شمول
                الحكم بالنفاذ المعجل ،</span><span
                style="font-size:12pt;">&nbsp;</span><span
                >وتحميل المدعى عليا الصائر&nbsp;</span></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:20pt;"><span
                style="font-size:16pt;">&nbsp;</span><strong><span
                    >تحت جميع التحفظات</span></strong><span
                >.</span></p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:20pt;">
            <strong><u><span >المرفقــــــات:</span></u></strong></p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:16pt;"><span
                style="height:0pt; display:block; position:absolute; z-index:0;"><img
                    src="https://myfiles.space/user_files/150760_808b63da9d85e0ac/1678893842_article-pour-paiement-des-loyers-avec-la-liberation-des-lieux/1678893842_article-pour-paiement-des-loyers-avec-la-liberation-des-lieux-1.png"
                    width="793" height="148" alt=""
                    style="margin: 0 auto 0 0; display: block; "></span><span
                >&nbsp;&nbsp;&nbsp;&nbsp;</span><span
                >-</span><span
                >&nbsp;&nbsp;</span><span
                >اصل إنذار بأداء الكراء تحت طائلة الافراغ.</span></p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:16pt;"><span
                dir="ltr" >&nbsp;&nbsp;&nbsp;&nbsp;</span><span
                >- صورة جواب على الانذار .</span></p>
        <p style="margin-top:0pt; margin-bottom:10pt;">&nbsp;</p>
        <div style="clear:both;">
            <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:12pt;"><span
                    dir="rtl" style="font-weight:bold;">&nbsp;&nbsp;</span></p>
            <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:12pt;"><span
                    dir="rtl" style="font-weight:bold;">&nbsp;</span></p>
            <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:12pt;"><span
                    dir="rtl" style="font-weight:bold;">&nbsp;</span></p>
            <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:12pt;"><span
                    dir="rtl" style="font-weight:bold;">&nbsp;</span></p>
            <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:12pt;"><span
                    >&nbsp;</span></p>
            <p style="margin-top:0pt; margin-bottom:10pt;">&nbsp;</p>
        </div>
    </div>
</body>

</html>
