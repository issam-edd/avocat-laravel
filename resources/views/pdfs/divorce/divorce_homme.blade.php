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
            في</strong><span dir="ltr">&nbsp;&nbsp;&nbsp;&nbsp;</span><strong>Marrakech le {{ $data["date"]}}&nbsp;</strong>
    </p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:16pt;"><span dir="ltr"
            style="font-weight:bold;">&nbsp;</span></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:20pt;"><strong><u>مقال رام
                إلى التطليق</u></strong> للشقاق</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;"><span
            dir="ltr">&nbsp;</span></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        <strong>&nbsp;</strong></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;"><span
            style="width:35.4pt; display:inline-block;">&nbsp;</span><span
            style="width:35.4pt; display:inline-block;">&nbsp;</span><span
            style="width:35.4pt; display:inline-block;">&nbsp;</span><span
            style="width:35.4pt; display:inline-block;">&nbsp;</span><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>السيد
            رئيس المحكمة الابتدائية بمراكش</strong></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:16pt;">
        <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>والسادة
            القضاة المكونين لها.</strong></p>
    <p dir="rtl" style="margin-top:0pt; margin-right:201.75pt; margin-bottom:0pt; font-size:16pt;">
        <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>-قسم
            قضاء الأسرة&nbsp;</strong><span dir="ltr" style="font-weight:bold;">&nbsp;</span>-</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:14pt;">&nbsp;</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:18pt;"><strong>سيدي الرئيس
            ،</strong></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; السيد<span
            dir="ltr">{{ $data["fullname"]}}&nbsp;</span><span dir="rtl">، الساكن&nbsp;</span><span
            dir="ltr">{{ $data["address"]}}</span></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:16pt;"><strong><u>النائب
                عنه</u></strong><strong><u>&nbsp;&nbsp;</u></strong><strong><u>الأستاذ&nbsp;</u></strong>{{ $data["lawyerName"]}}
        المحامي بهيئة المحامين بمراكش.</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:16pt;">
        <strong>&nbsp;</strong></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:14pt;"><span dir="ltr"
            style="font-family:'Wingdings 2';">&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;</span></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:20pt;"><strong><u>له الشرف
                أن يعرض على أنظار سيادتكم ما يلي</u></strong><strong>:</strong></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:20pt;">
        <strong>&nbsp;</strong></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; إن العارض متزوج بالمدعى عليها&nbsp; الاتية فيما بعد صفتها وعنوانها على كتاب
        الله وسنة رسوله<span>&nbsp;حسب عقد النكاح المضمن
            بعدد&nbsp;</span><span dir="ltr">{{ $data["ContratMariageInclusNum"]}}</span><span
            dir="rtl">&nbsp;</span><span>صحيفة&nbsp;</span><span
            dir="ltr"><span>&nbsp;</span>{{ $data["journal"]}}</span><span
            dir="rtl">&nbsp;</span><span>كناش رقم&nbsp;</span><span
            dir="ltr"><span>&nbsp;</span>{{ $data["NumeroKanash"]}}</span><span
        >بتاريخ</span><span dir="ltr"><span
            >&nbsp;</span>{{ $data["Date"]}}&nbsp;</span><span
            dir="rtl">&nbsp;</span><span>بتوثيـق مراكــش&nbsp;</span>.
    </p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; وإن العارض منذ زواجه بالمدعى عليها ظل يعاملها معاملة حسنة وحاول توفير الجو
        الملائم من حيث حسن المعاشرة والإنفاق<span dir="ltr">.</span><span dir="rtl">&nbsp;إلا أنه وللأسف
            الشديد لم يكن لديها أي حس بالمسؤولية سواء اتجاه العارض أو اتجاه شؤون بيته ولم تستطع التأقلم مع الحياة
            الزوجية&nbsp;</span>.</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;"><span
            dir="ltr">&nbsp;&nbsp;&nbsp;&nbsp;</span><span>وحيث إن الزوجة
            دائمة الغياب على بيت الزوجية&nbsp;</span>.</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">&nbsp;&nbsp; وحيث
        إنها غارت بيت الزوجية بصفة نهائية ،وبقرار انفرادي دون رضا العارض أو موافقته.</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; وحيث إن العارض قد حاول مع زوجته لإقناعها باحترام واجباتها الزوجية إلا أن محاولاته
        هاته بقيت دون جدوى.</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp; وحيث إن تعامل الزوجة جعل الحياة الزوجية تصبح مستحيلة بين الطرفين.</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp; وحيث إن العارض لم يجد بدا من اللجوء إلى محكمتكم، من أجل الحكم بتطليق المدعى عليها طلقة
        بائنة للشقاق عملا بمقتضيات المادة 94 من مدونة الأسرة .</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;"><span
            style="width:35.4pt; display:inline-block;">&nbsp;</span></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:22pt;"><strong><u>لهذه
                الأسبــــــــاب</u></strong></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:18pt;">
        <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong><u>يلتمس العارض من محكمتكم الموقرة</u></strong>:</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong><u>تبليغ نسخة من هذا المقال مع الاستدعاء لأقرب جلسة تعقدونها
                إلى:</u></strong></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">&nbsp;</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:18pt;"><span
            style="font-size:16pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-size:16pt;">&nbsp;&nbsp;</span><span style="font-size:16pt;">-&nbsp;</span><strong><span
                style="font-size:16pt;">السيدة&nbsp;</span></strong><span dir="ltr"
            style="font-size:16pt; font-weight:bold;">{{ $data["Mme"]}}</span>، الساكنة <span dir="ltr"
            style="font-weight:bold;">{{ $data["MmeAddress"]}}&nbsp;</span> مراكش<strong>.</strong></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:16pt;">
        <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong><u>وذلك من أجل الأسباب
                أعلاه.</u></strong><strong><u>&nbsp;&nbsp;</u></strong></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong><u>لكـي&nbsp;</u></strong>،</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        <strong><u>&nbsp;</u></strong><strong><u>في الشــــكل :</u></strong></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;"><span
            style="width:35.4pt; display:inline-block;">&nbsp;</span> - الحكم بقبول المقال لاستيفائه كافة شروطه الشكلية
        .</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        <strong><u>&nbsp;</u></strong><strong><u>في الموضوع:</u></strong></p>
    <ul style="margin:0pt;" type="disc">
        <li dir="rtl"
            style="margin-right:50.08pt; text-align:justify; padding-right:7.67pt; font-size:16pt;">
            <span>ملا حظة مسؤولية المدعى عليها في التطليق للشقاق. .</span></li>
        <li dir="rtl"
            style="margin-right:50.08pt; text-align:justify; padding-right:7.67pt; font-size:16pt;">
            <span>الحكم بتطليق المدعى عليها من العارض للشقاق.</span></li>
    </ul>
    <p dir="rtl"
        style="margin-top:0pt; margin-right:57.75pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">&nbsp;</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:18pt;">
        <strong><u>المرفقــــــات:</u></strong></p>
    <ul style="margin:0pt;" type="disc">
        <li dir="rtl"
            style="margin-right:50.08pt; text-align:justify; padding-right:7.67pt; font-size:16pt;">
            <span>اصل عقد الزواج .</span></li>
    </ul>
    <p dir="rtl"
        style="margin-top:0pt; margin-right:35.25pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">&nbsp;</p>
    <p dir="rtl"
        style="margin-top:0pt; margin-right:35.25pt; margin-bottom:0pt; text-align:justify; font-size:18pt;"><span
            style="font-size:16pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><strong>تحت
            جميع التحفظات.</strong></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:8pt;">&nbsp;</p>
    <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
    <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>

</body>

</html>
