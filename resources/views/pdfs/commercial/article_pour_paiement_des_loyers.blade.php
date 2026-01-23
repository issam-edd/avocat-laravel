<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Generate PDF using Laravel TCPDF - ItSolutionStuff.com</title>
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --"] "]}}}}
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
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:18pt;">
            <strong><span style=" font-size:14pt;">مراكش في</span></strong><span
                dir="ltr">&nbsp;Marrakech le {{ $data["date"]}}</span><strong><span
                    >&nbsp;</span></strong></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:12pt;">
            <strong><span >&nbsp;</span></strong></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:20pt;">
            <strong><u><span >مقـال</span></u></strong> افتتاحي<strong><u><span
                        >&nbsp;&nbsp;</span></u></strong><strong><u><span
                        >رام</span></u></strong><strong><u><span
                        >&nbsp;&nbsp;</span></u></strong><strong><u><span
                        >إلى أداء&nbsp;</span></u></strong></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:20pt;">
            <strong><u><span >واجبات الكراء مع الافراغ</span></u></strong></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:20pt;">
            <strong><span >&nbsp;</span></strong></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:16pt;">
            <strong><span
                    >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></strong><strong><span
                    >إلى السيد رئيس المحكمة</span></strong><strong><span
                    >&nbsp;&nbsp;&nbsp;&nbsp;</span></strong></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:16pt;">
            <strong><span
                    >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></strong><strong><span
                    >والسادة القضاة المكونين للمحكمة التجارية</span></strong></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-right:40.5pt; margin-bottom:0pt; line-height:normal; font-size:16pt;">
            <strong><span
                    >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></strong><strong><span
                    >- بمراكش-</span></strong></p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:14pt;"><span
                >&nbsp;</span></p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:18pt;"><strong><span
                    style=" font-size:14pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></strong><strong><span
                    >سـيدي الـرئيس</span></strong><strong><span
                    style=" font-size:16pt;">&nbsp;،</span></strong></p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:16pt;"><strong><span
                    >&nbsp;&nbsp;&nbsp;&nbsp;</span></strong><strong><span
                    >السيد&nbsp;</span></strong><span
                dir="ltr">&nbsp;</span><strong><span >{{ $data["Mr"]}}</span></strong>،
            الساكن<span dir="ltr"
                style=" font-weight:bold;">{{ $data["Consonant"]}}&nbsp;</span>.<strong><span
                    >&nbsp;</span></strong></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:18pt;">
            <strong><u><span >النائب عنه الأستاذ&nbsp;</span></u></strong><span
                dir="ltr">&nbsp;</span><strong><u><span
                        >{{ $data["lawyerName"]}}</span></u></strong>المحامي بهيئة مراكش<span
                >.</span></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:18pt;"><span
                >&nbsp;</span><span dir="ltr"
                style="font-family:'Wingdings 2';">&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;</span><span
                >&nbsp;</span></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:18pt;">
            <strong><u><span >له الشرف أن يعرض على أنظار سيادتكم ما
                        يلي:</span></u></strong></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:18pt;">
            <strong><span >&nbsp;</span></strong></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:16pt;"><span
                dir="ltr" >&nbsp;</span><span
                >&nbsp;&nbsp;</span><span dir="ltr"
                >&nbsp;&nbsp;</span><span
                >إنه&nbsp;</span><span >يملك
                المحل&nbsp;</span><span >&nbsp;</span><span
                >التجاري</span><span dir="ltr"
                >{{ $data["TheShop"]}}&nbsp;</span><span
                >&nbsp;المستخرج من المنزل الكائن</span><span dir="ltr"><span
                    >&nbsp;&nbsp;</span><span
                    >{{ $data["ObjectHome"]}}&nbsp;</span></span><span
                >&nbsp;</span><span >وان
                المدعى عليها الاتية فيما بعد صفتها وعنوانها تشغل المحل المذكور على سبيل الكراء التجاري، وذلك بسومة شهرية
                قدرها</span><span dir="ltr"
                style=" font-weight:bold;">&nbsp;{{ $data["MonthlyFee"]}}&nbsp;</span><span
                >،</span><span >وذلك حسب
                العقد المبرم بين الطرفين بتاريخ&nbsp;</span><span dir="ltr"
                >.{{ $data["DateContract"]}}</span></p>
        <ul style="margin:0pt;" type="disc">
            <li dir="rtl"
                style="margin-right:46.33pt; text-align:justify; line-height:normal; padding-right:7.67pt; font-size:16pt; font-weight:bold;">
                <span >تفظلوا بالاطلاع على صورة طبق الاصل من عقد الكراء-</span>
            </li>
        </ul>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:16pt;"><span
                >&nbsp;&nbsp;&nbsp;&nbsp;</span><span
                >وان المدعى عليها لم تؤد واجبات الكراء منذ&nbsp;</span><span
                dir="ltr">&nbsp;</span><strong><span
                    >{{ $data["StartDate"]}}</span></strong><span
                >الى غاية متم شهر&nbsp;</span><span dir="ltr"
                >&nbsp;{{ $data["EndDate"]}}</span><span
                >مما جعل ذمتها عامرة بواجبات الكراء</span><span
                >&nbsp;تفوق&nbsp;</span><span dir="ltr"
                >{{ $data["NumberMonths"]}}</span> <span
                >اي ما مجموعه&nbsp;</span><span dir="ltr"
                >{{ $data["TotalAmount"]}}</span><span
                >.</span></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:16pt;"><span
                dir="ltr"><strong><span
                        >&nbsp;</span></strong><strong><span
                        >{{ $data["MonthlyFee"]}}</span></strong></span> درهم <strong><span
                    >&times;&nbsp;</span></strong><span dir="ltr"
                >{{ $data["NumberMonths"]}}</span>=<span dir="ltr">&nbsp;</span><span
                >{{ $data["TotalAmount"]}}&nbsp;</span></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:16pt;"><span
                >&nbsp;&nbsp;&nbsp;&nbsp;</span><span
                >إضافة الى مبلغ&nbsp;</span><span
                dir="ltr">&nbsp;</span><strong><span
                    >{{ $data["AddAmount"]}}</span></strong>درهم<span
                >&nbsp;المتبقي عن شهر&nbsp;</span><span dir="ltr"
                style=" font-weight:bold;">{{ $data["RemainingMonth"]}}</span>.</p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:16pt;"><span
                >&nbsp;&nbsp;&nbsp;&nbsp;</span><strong><span
                    >ليكون ما مجموعه هو :</span></strong></p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:16pt;"><strong><span
                    >&nbsp;&nbsp;&nbsp;&nbsp;</span></strong><span
                dir="ltr">&nbsp;&nbsp;</span><strong><span
                    >{{ $data["AddAmount"]}}</span></strong>درهم +<span
                dir="ltr">&nbsp;{{ $data["TotalAmount"]}}<span
                    >&nbsp;</span></strong>درهم =<span dir="ltr"
                style=" font-weight:bold;">&nbsp;{{ $data["TotalAll"]}}</span> درهم .<span
                >&nbsp;</span></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:16pt;"><span
                >&nbsp;&nbsp;&nbsp;&nbsp;</span><span
                >وان العارض قد حاول بشتى الوسائل الحبية استخلاص واجبات الكراء
                المتخلدة&nbsp;</span><span >&nbsp;</span><span
                >بذمة المدعى عليها إلا أن جميع محاولاته باءت بالفشل، بما في ذلك
                الانذار الموجه إليها والذي بلغت به بتاريخ</span><span dir="ltr"
                >,{{ $data["CommunicatedDate"]}}&nbsp;</span><span
                >&nbsp;</span><span
                >والتي&nbsp;</span><span >رفضت
                مستخدمة المدعى عليها</span><span >&nbsp;&nbsp;</span><span
                >السيدة ايمان نصيلة التوصل به والتوقيع</span><span
                >&nbsp;&nbsp;</span><span >حسب
                الملاحظة المدلى بها من طرف المفوض القضائي</span><span >.</span>
        </p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:16pt;"><span
                >&nbsp;&nbsp;&nbsp;</span><span
                >ومرور 15 يوما المحددة كمهلة لا براء ذمتها من هاته الواجبات حسبما
                يستفاد من محضر التبليغ المنجز من طرف المفوض القضائي السيد عبد الدائم الشواش.&nbsp;</span><strong><span
                    >&ndash; رفقته اصل محضر تبليغ إنذار بأداء الكراء
                    &ndash;&nbsp;</span></strong></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:16pt;"><span
                >&nbsp;&nbsp;&nbsp;</span><span
                >كما ان العارض قام بإنذار المدعى من اجل افراغ المحل المذكور
                بمقتضى الانذار الموجه اليها بتاريخ</span><span dir="ltr"
                >{{ $data["AccordanceDate"]}}&nbsp;</span><span
                >،والذي&nbsp;</span><span >رفض
                التوصل به</span><span >&nbsp;&nbsp;</span><span
                >السيد&nbsp;</span><span dir="ltr"><span
                    >&nbsp;&nbsp;</span><span
                    >{{ $data["ObjectHome"]}}</span></span><span
                >باعتباره الممثل القانوني للشركة .</span><strong><span
                    >&nbsp;&ndash; رفقته اصل محضر تبليغ إنذار بالإفراغ
                    &ndash;&nbsp;</span></strong></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:16pt;"><span
                >&nbsp;&nbsp;</span><span
                >وحيث ان الانذار بالإفراغ مستوف للشروط المنصوص عليها في الفصل 26
                من القانون 16-49 مما يوجب المصادقة على الانذار بالإفراغ</span><span
                >&nbsp;&nbsp;</span><span
                >من المحل&nbsp;</span><span
                >&nbsp;</span><span
                >التجاري</span><span dir="ltr"
                >{{ $data["TheShop"]}}&nbsp;</span><span
                >&nbsp;المستخرج من المنزل الكائن&nbsp;</span><span
                dir="ltr"><span >&nbsp;&nbsp;</span><span
                    >{{ $data["ObjectHouse"]}}</span></span><span
                >هي ومن يقوم مقامها ولو بإذنها من المحل التجاري المكترى.</span>
        </p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:16pt;"><span
                >&nbsp;&nbsp;&nbsp;&nbsp;</span><span
                >مما لم يجد معه بدا من اللجوء الى سيادتكم قصـد الحكم علـى المدعى
                عليها بأدائها له واجباته المستحقة له والحكم بالإفراغ .</span></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:16pt;"><span
                >&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:24pt;"><u><span
                    >لهــذه الأسبـــــــاب</span></u></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:18pt;"><span
                dir="ltr"
                style=" font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>يلتمس
            العـارض<strong><u><span
                        >&nbsp;&nbsp;</span></u></strong><strong><u><span
                        >من سيـادتكم</span></u></strong><strong><span
                    >&nbsp;:</span></strong></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:normal; font-size:16pt;">
            <strong><u><span >تبليغ نسخة من هذا المقال مع الاستدعاء لأقرب جلسة
                        تعقدونها إلى</span></u></strong><span >:&nbsp;</span></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:16pt;">
            <strong><span >&nbsp;&nbsp;&nbsp;&nbsp;</span></strong><strong><span
                    >&nbsp;</span></strong><span dir="ltr"
                style="font-family:'Wingdings 2'; font-weight:bold;"></span>شركة<span dir="ltr"
                style=" font-weight:bold;">{{ $data["Company"]}}&nbsp;</span>، <strong><span
                    >في شخص ممثلها القانوني ،الكائن مقرها
                    الاجتماعي&nbsp;</span></strong><span dir="ltr"
                style=" font-weight:bold;">{{ $data["SocialHeadquarters"]}}</span>&nbsp;</p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:16pt;">
            <strong><span >&nbsp;</span></strong></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:16pt;">
            <strong><u><span >وذلك ومن</span></u></strong><strong><u><span
                        >&nbsp;&nbsp;</span></u></strong><strong><u><span
                        >اجل الأسباب</span></u></strong><strong><u><span
                        >&nbsp;&nbsp;</span></u></strong><strong><u><span
                        >أعلاه</span></u></strong></p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:16pt;"><span
                dir="ltr" style=" font-weight:bold;">&nbsp;</span> <strong><u><span
                        >لكـــي</span></u></strong><span
                >:</span></p>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:18pt;">
            <strong><span
                    >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></strong><strong><u><span
                        >فـي الشـكــل&nbsp;</span></u></strong><strong><span
                    >:</span></strong></p>
        <ul style="margin:0pt;" type="disc">
            <li dir="rtl"
                style="margin-right:60.07pt; text-align:right; line-height:normal; padding-right:0.43pt; font-size:16pt;">
                <span >تصرحوا بقبول المقال لاستيفائه كافة شروطه
                    الشكلية.</span><span
                    >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></li>
        </ul>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:18pt;">
            <strong><span >&nbsp;&nbsp;&nbsp;</span></strong><strong><u><span
                        >في الموضوع :</span></u></strong></p>
        <ul style="margin:0pt;" type="disc">
            <li dir="rtl"
                style="margin-right:52.82pt; text-align:justify; line-height:normal; padding-right:0.43pt; font-size:16pt;">
                <span >ملاحظة أن الطلب وجيـه ومعـلل.</span></li>
            <li dir="rtl"
                style="margin-right:52.82pt; line-height:normal; padding-right:0.43pt; font-size:16pt;">
                <span >الحكم على المدعى عليها بأدائها للعارض واجبات كراء
                    المحل&nbsp;</span><span >&nbsp;</span><span
                    >التجاري&nbsp;</span><span dir="ltr"><span
                        >&nbsp;&nbsp;&nbsp;</span><span
                        >.{{ $data["TheShop"]}}</span></span><span
                    >وذلك بحسب سومة كرائية شهرية قدرها</span><span
                    dir="ltr"><span >&nbsp;{{ $data["MonthlyFee"]}}</span><strong><span
                            >&nbsp;</span></strong></span> <strong><span
                        >درهم</span></strong><span
                    >&nbsp;عن المدة من&nbsp;</span><span
                    dir="ltr">&nbsp;</span><strong><span
                        >{{ $data["StartDate"]}}</span></strong><span
                    >الى متم</span><strong><span
                        >&nbsp;</span></strong><span
                    dir="ltr">&nbsp;</span><strong><span
                        >{{ $data["EndDate"]}}</span></strong><span
                    >أي</span><span dir="ltr"
                    >{{ $data["NumberMonths"]}}&nbsp;</span><span
                    >&nbsp;إضافة الى مبلغ</span><span dir="ltr"><span
                        >&nbsp;</span><strong><span
                            >{{ $data["AddAmount"]}}&nbsp;</span></strong></span><span
                    >المتبقي عن</span><strong><span
                        >&nbsp;شهر</span></strong><span dir="ltr"
                    style=" font-weight:bold;">{{ $data["RemainingMonth"]}}&nbsp;</span><span
                    >&nbsp;</span><span
                    >.</span></li>
        </ul>
        <p dir="rtl"
            style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:16pt;">
            <strong><span >ليكون ما مجموعه هو :</span></strong></p>
        <ul style="margin:0pt;" type="disc">
            <li dir="rtl"
                style="margin-right:47.57pt; text-align:right; line-height:normal; padding-right:0.43pt; font-size:16pt;">
                <strong><span >&nbsp;</span></strong><span
                    dir="ltr">&nbsp;&nbsp;</span><strong><span
                        >{{ $data["AddAmount"]}}</span></strong>درهم +<span
                    dir="ltr">&nbsp;{{ $data["TotalAmount"]}}nbsp;</span></strong>درهم =<span dir="ltr"
                    style=" font-weight:bold;">&nbsp;{{ $data["TotalAll"]}}</span> درهم .<span
                    >&nbsp;</span></li>
            <li dir="rtl"
                style="margin-right:47.57pt; text-align:right; line-height:normal; padding-right:0.43pt; font-size:16pt;">
                <span >الحكم بالتعويض عن التماطل قدره:&nbsp;</span><span
                    dir="ltr">&nbsp;&nbsp;</span><strong><span
                        >{{ $data["CompensationProcrastination"]}}</span></strong>درهم<span
                    >&nbsp;.&nbsp;</span></li>
            <li dir="rtl"
                style="margin-right:47.57pt; text-align:right; line-height:normal; padding-right:0.43pt; font-size:16pt;">
                <span >الحكم بافراغ المدعى عليها من المحل&nbsp;</span><span
                    >&nbsp;</span><span
                    >التجاري&nbsp;</span><span dir="ltr"><span
                        >&nbsp;</span><span
                        >{{ $data["TheShop"]}}</span></span><span
                    >هي او من يقوم مقامها او يحتل باسمها تحت طائلة غرامة تهديدية
                    قدرها&nbsp;</span><span dir="ltr"
                    style=" font-weight:bold;">{{ $data["ThreateningFine"]}}</span>درهم<span
                    >&nbsp;عن كل يوم يتأخر فيه عن التنفيذ .</span></li>
            <li dir="rtl"
                style="margin-right:47.57pt; text-align:right; line-height:normal; padding-right:0.43pt; font-size:16pt;">
                <span >شمول الحكم بالنفاذ المعجل .</span></li>
            <li dir="rtl"
                style="margin-right:47.57pt; text-align:right; line-height:normal; padding-right:0.43pt; font-size:16pt;">
                <span >تحديد مدة الاكراه البدني في الاقصى&nbsp;</span><span
                    dir="ltr" >.</span></li>
            <li dir="rtl"
                style="margin-right:47.57pt; text-align:right; line-height:normal; padding-right:0.43pt; font-size:16pt;">
                <span >تحميل المدعى عليها&nbsp;</span><span
                    >&nbsp;</span><span
                    >الصائر.&nbsp;</span><span
                    >&nbsp;&nbsp;&nbsp;</span><span
                    >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
                    >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </li>
        </ul>
        <p dir="rtl"
            style="margin-top:0pt; margin-right:48pt; margin-bottom:0pt; line-height:normal; font-size:16pt;">
            <strong><span >تحت جميع التحفظات</span></strong><span
                >.</span></p>
        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:18pt;">
            <strong><u><span >المرفقــــــات:</span></u></strong></p>
        <ul style="margin:0pt;" type="disc">
            <li dir="rtl"
                style="margin-right:43.28pt; text-align:right; line-height:normal; padding-right:4.72pt; font-size:18pt; font-weight:bold;">
                <span style=" font-size:16pt; font-weight:normal;">صورة طبق
                    الأصل</span><span
                    style=" font-size:16pt; font-weight:normal;">&nbsp;&nbsp;</span><span
                    style=" font-size:16pt; font-weight:normal;">لعقد كراء.</span></li>
            <li dir="rtl"
                style="margin-right:42.36pt; line-height:normal; padding-right:5.64pt; font-size:16pt;">
                <span style="height:0pt; text-align:right; display:block; position:absolute; z-index:0;"><img
                        src="https://myfiles.space/user_files/150760_808b63da9d85e0ac/1678925626_article-pour-paiement-des-loyers/1678925626_article-pour-paiement-des-loyers-1.png"
                        width="793" height="148" alt=""
                        style="margin: 0 auto 0 0; display: block; "></span><span
                    >2 اصول المحاضر المنجزة من طرف المفوض القضائي .</span></li>
        </ul>
        <p style="margin-top:0pt; margin-bottom:10pt;">&nbsp;</p>
        <div style="clear:both;">
            <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:12pt;"><span
                    dir="rtl" style=" font-weight:bold;">&nbsp;&nbsp;</span></p>
            <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:12pt;"><span
                    dir="rtl" style=" font-weight:bold;">&nbsp;</span></p>
            <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:12pt;"><span
                    dir="rtl" style=" font-weight:bold;">&nbsp;</span></p>
            <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:12pt;"><span
                    dir="rtl" style=" font-weight:bold;">&nbsp;</span></p>
            <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:normal; font-size:12pt;"><span
                    >&nbsp;</span></p>
            <p style="margin-top:0pt; margin-bottom:10pt;">&nbsp;</p>
        </div>
    </div>
</body>

</html>
