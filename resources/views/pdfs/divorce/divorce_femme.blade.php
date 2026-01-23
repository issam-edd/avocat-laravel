<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:16pt;"><strong>مراكش
            في</strong><span dir="ltr">{{ $data["place"]}} le {{ $data["place"]}}</span><strong>&nbsp;&nbsp;</strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:22pt;"><u><span dir="rtl"
                style="font-weight:bold;">مقال رام الى التطليق</span></u></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:22pt;"><u><span dir="rtl"
                style="font-weight:bold;">للشقاق&nbsp;</span></u></p>
    <p style="margin-top:0pt; margin-bottom:0pt; font-size:18pt;"><span dir="rtl" style="font-weight:bold;">السيد
            رئيس المحكمة الابتدائية بمراكش</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; font-size:18pt;"><span dir="rtl"><strong>والسادة القضاة المكونين
                لها</strong>
                {{-- <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong> --}}
            </span>
            <span style="width:30.04pt; display:inline-block;">&nbsp;</span>
        </p>
    <ul style="margin:0pt; padding-left:0pt;" type="disc">
        <li style="margin-left:25.19pt; padding-left:76.01pt; font-family:serif; font-size:22pt; font-weight:bold;">
            <span dir="rtl"><u><span style="font-family:'Times New Roman'; font-size:18pt;">قسم قضاء
                        الاسرة.</span></u><u>
                            {{-- <span    style="font-family:'Times New Roman'; font-size:18pt;">&#10046;&#10046;</span> --}}
                    </u>
                    </span>
            &#10046;&#10046;&#10046;</li>
    </ul>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:16pt;"><span dir="rtl"
            style="font-weight:bold;">سيدي الرئيس ،</span></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:18pt;">&nbsp;&nbsp;&nbsp;&nbsp; السيدة&nbsp;
        <span dir="ltr">{{ $data["fullname"]}}</span><span dir="rtl">، الساكنة&nbsp;</span><span
            dir="ltr">{{ $data["address"]}}</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:20pt;"><u><span dir="rtl"
                style="font-weight:bold;">النائــب عنـها الأستاذ&nbsp;</span></u>
        <strong>{{ $data["lawyerName"]}}</strong>المحامـي بهيئة مراكــش.</p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:16pt;"><span
            style="font-family:'Wingdings 2';">&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:20pt;"><span dir="rtl"><strong><u>لها
                    الشرف أن تعرض على أنظار سيادتكم ما يلي</u></strong><u>:</u></span></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:18pt;"><span
            style="font-size:16pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-size:16pt;">أن العارضة متزوجة بالمدعى عليه الاتية فيما بعد صفته وعنوانه على كتاب الله وسنة
            رسوله، حسب عقد زواج المضمن بعدد</span><span dir="ltr"
            style="font-size:16pt;">&nbsp;{{ $data["ContratMariageInclusNum"]}}&nbsp;</span><span
            style="font-size:16pt;">صحيفة&nbsp;</span><span dir="ltr"
            style="font-size:16pt;">&nbsp;{{ $data["journal"]}}</span><span style="font-size:16pt;">مذكــــــــــــــــــرة الحفظ
            رقم :</span><span style="font-size:16pt;">&nbsp;&nbsp;</span><span dir="ltr"><span
                style="font-size:16pt;">&nbsp;</span><span
                style="font-size:16pt;">{{ $data["NoteReservation"]}}&nbsp;</span></span><span
            style="font-size:16pt;">بتاريخ</span><span dir="ltr" style="font-size:16pt;">&nbsp;{{ $data["Date"]}}</span><span
            style="font-size:16pt;">&nbsp;</span><strong>والمرفق اصله بهذا المقال</strong><span
            style="font-size:16pt;">&nbsp;.&nbsp;</span></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; حيث أن هذه العلاقة أثمرت عن إنجاب <span
            dir="ltr">{{ $data["NbrEnfantDateNaissance"]}}</span></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">- <strong>عقدي
            الازدياد رفقته -</strong>.</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; حيث ان هذا الزواج استوفى جميع اركانه المنصوص عليها في المادة 10 من مدونة الاسرة .
    </p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; حيث ان العارضة تلجأ الى المحكمة الموقرة من اجل فك الرابطة الزوجية طبقا لمقتضيات
        مدونة الاسرة ،بعد اكتشافها ان المدعى عليه ليست لديه النية الحسنة في الارتباط وبناء العش المقدس، لكونه اخل بحقوق
        وواجبات الزوجية المنصوص عليها بالمادة 54 من مدونة الآسرة.</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp; وان العارضة حاولت جاهدة بكل الوسائل الحبية ثنيه عن تصرفاته وإقناعه باحترام ميثاق وقدسية
        عقد الزواج الذي يجمع بينهما والأخذ بعين الاعتبار كل تضحياتها المادية والمعنوية طيلة فترة ارتباطهما وكأم لطفلين ،
        إلا أن ذلك لم يزده إلا تعنتا.</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; وحيث أن هذه التصرفات أضرت بالعارضة ضررا بليغا سواء من الناحية المعنوية، أو من
        الناحية&nbsp; المادية نتيجة تركها ببيت عائلتها وامتناعه عن الإنفاق عليها وعلى ابنائها منه&nbsp; رغم يسره وتركها
        عرضة للضياع والإهمال ،الشيء الذي جعل الحياة الزوجية تصبح مستحيلة بين الطرفين .&nbsp;</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp; لذلك فان العارضة لم تجد بدا من اللجوء الى محكمتكم الموقرة من اجل الحكم بتطليقها من عصمة
        زوجها عملا بمقتضيات المادة 94 وما يليها من مدونة الأسرة.&nbsp;&nbsp;</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">&nbsp;&nbsp; وحيث
        أن النفقة واجبة على الزوج بمجرد البناء طبقا لمقتضيات <strong>المادة 194</strong> من مدونة الأسرة.&nbsp;</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">&nbsp;&nbsp; وحيث
        أن العارضة لا يسعها إلا أن تلتمس من المحكمة الموقرة الحكم لها بنفقتها ونفقة ابنائها منه&nbsp; بحسب مبلغ <span
            dir="ltr">&nbsp;</span><strong>{{ $data["PensionAlimentaireEnfants"]}}</strong>درهم شهريا&nbsp; لكل واحد منهما
        <strong>منذ&nbsp;</strong><span dir="ltr" style="font-weight:bold;">{{ $data["StartDate"]}}</span><span
            dir="rtl">&nbsp;الى غاية سقوط الفرض شرعا.</span></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:22pt;"><strong><u>لهــــذه
                الأسبــــــــاب</u></strong></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:18pt;">
        <strong>&nbsp;&nbsp;&nbsp;</strong><strong><u>تلتمس العارضة من محكمتكم الموقرة</u></strong><strong>:</strong>
    </p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:18pt;"><span
            style="font-size:16pt;">&nbsp;&nbsp;&nbsp;&nbsp;</span><strong><u>تبليغ نسخة من هذا المقال مع الاستدعاء
                لأقرب جلسة تعقدونها إلى</u></strong><span style="font-size:16pt;">:&nbsp;</span></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:18pt;">
        <strong>&nbsp;&nbsp;</strong><strong>السيد</strong><strong>&nbsp;&nbsp;</strong><span dir="ltr"
            style="font-weight:bold;">{{ $data["M"]}}</span>، الكائن<span dir="ltr"
            style="font-weight:bold;">&nbsp;{{ $data["Objet"]}}</span>.</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:18pt;"><span
            style="width:144.6pt; display:inline-block;">&nbsp;</span><strong><u>وذلك من أجل الأسباب
                أعلاه</u></strong><span style="font-size:16pt;">.</span></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        <strong>&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>لكــــــي،</strong></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:18pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong><u>في الشكــل :</u></strong></p>
    <p dir="rtl"
        style="margin-top:0pt; margin-right:14.2pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - الحكم بقبول المقال لاستيفائه كافة شروطه الشكلية .</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:18pt;">&nbsp;&nbsp;
        <strong><u>في الموضـوع</u></strong>:</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;"><span
            style="width:35.4pt; display:inline-block;">&nbsp;</span> - ملاحظة قيام العلاقة الزوجية بين العارضة والمدعى
        عليه وفق عقد الزواج المرفق أصله.</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -&nbsp; ملا حظة ان العلاقة الزوجية اثمرت عن ميلاد الابنين&nbsp;
        محمد وامير لقبهم لكحل.</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - ملاحظة استحالة استمرار العلاقة الزوجية نتيجة تصرفات الزوج.
    </p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - الحكم بتطليق العارضة من عصمة زوجها طلقة بائنة للشقاق .</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - الحكم بمستحقاتها عن الطلاق طبقا لمدونة الأسرة.</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - ملاحظة أن المدعى عليه توقف عن الإنفاق عن العارضة
        وابنائها منه منذ شهر <span dir="ltr">{{ $data["ArretePensionAlimentaire"]}}</span>.</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - ملاحظة يسر حال المدعى عليه.</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - الحكم على المدعى عليه بأدائه للعارضة نفقتها ونفقة
        أبنائها منه عن المدة من تاريخ <span dir="ltr" style="font-weight:bold;">{{ $data["StartDate"]}}</span> إلى غاية سقوط
        الفرض شرعا&nbsp; ،بحسب <strong>مبلغ&nbsp;</strong><span dir="ltr"
            style="font-weight:bold;">{{ $data["MontantJugement"]}}</span> درهم شهريا لكل واحد منهما.&nbsp;&nbsp;&nbsp;&nbsp;</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - شمول الحكم بالنفاذ المعجل.</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - جعل الصائر على المدعى عليه.</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:20pt;">
        <strong><u>المرفقـــــات:</u></strong></p>
    <p dir="rtl"
        style="margin-top:0pt; margin-right:35.25pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">&nbsp;-
        أصل عقد الزواج .&nbsp;&nbsp;&nbsp;&nbsp;</p>
    <p style="margin-top:0pt; margin-bottom:0pt; font-size:20pt;"><span
            style="height:0pt; display:block; position:absolute; z-index:1;"><img
                src="https://myfiles.space/user_files/150760_808b63da9d85e0ac/1678833842_divorce-femme/1678833842_divorce-femme-1.png"
                width="792" height="148" alt=""
                style="margin: 0 0 0 auto; display: block; "></span><span
            style="height:0pt; display:block; position:absolute; z-index:0;"><img
                src="https://myfiles.space/user_files/150760_808b63da9d85e0ac/1678833842_divorce-femme/1678833842_divorce-femme-1.png"
                width="792" height="148" alt=""
                style="margin: 0 0 0 auto; display: block; "></span><span dir="rtl"><span
                style="font-size:16pt;">&nbsp;&nbsp;&nbsp;</span><span style="font-size:16pt;">- عقود الازدياد
                الابنين.</span><span
                style="font-size:16pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><strong>تحت
                جميع التحفظات</strong></span></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt;"><span dir="ltr">&nbsp;</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
</body>

</html>
