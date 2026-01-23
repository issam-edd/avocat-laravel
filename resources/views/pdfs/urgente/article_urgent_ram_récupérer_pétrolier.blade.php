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
            في</strong><span dir="ltr">&nbsp;&nbsp;</span><strong>Marrakech le
            {{ $data["date"] }}</strong><strong>&nbsp;&nbsp;</strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:20pt;"><u><span dir="rtl"
                style="font-weight:bold;">مقال استعجالي&nbsp;</span></u></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:20pt;"><u><span dir="rtl"
                style="font-weight:bold;">رام الى استرجاع ناقلة.</span></u></p>
    <p style="margin-top:0pt; margin-bottom:0pt; font-size:18pt;"><span dir="rtl"><span
                style="font-size:16pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><strong>السيد
                رئيس المحكمة الابتدائية</strong><strong>&nbsp;&nbsp;&nbsp;</strong></span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; font-size:18pt;"><span dir="rtl"><strong><u>بمراكش
                    .</u></strong><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></span>
    </p>
    <p style="margin-top:0pt; margin-bottom:0pt;"><span dir="rtl">&nbsp;</span></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:18pt;">
        <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong><u>لفائــــــدة</u></strong><strong>&nbsp;:</strong><span
            style="font-size:12pt;">&nbsp;</span><span dir="ltr"><span style="font-size:16pt;">&nbsp;</span><span
                style="font-size:16pt;">{{ $data["benefit"] }}</span></span><span style="font-size:16pt;">،
            الساكنــــــة</span><span dir="ltr" style="font-size:16pt;">{{ $data["address"] }}&nbsp;</span><span
            style="font-size:16pt;">.</span><span style="font-size:16pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:18pt;"><strong><u>النائب
                عنها الأستاذ&nbsp;</u></strong><span
            dir="ltr">&nbsp;</span><strong><u>{{ $data["lawyerName"] }}</u></strong>المحامي بهيئة مراكش.</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:18pt;"><span dir="ltr"
            style="font-weight:bold;">&nbsp;&nbsp;</span>
        <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong><u>&nbsp;</u></strong><strong><u>ضـــــــــد</u></strong>&nbsp;
        :<span dir="ltr" style="font-size:16pt; font-weight:bold;">&nbsp;</span><span
            style="font-size:16pt;">شركة&nbsp;</span><span dir="ltr"
            style="font-size:16pt;">&nbsp;{{ $data["company"] }}</span><span style="font-size:16pt;">&nbsp;في شخص ممثلها القانوني
            ،الكائــن</span><span dir="ltr" style="font-size:16pt;">{{ $data["object"] }}&nbsp;</span>.</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:14pt;">&nbsp;<span
            dir="ltr" style="font-family:'Wingdings 2';">&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;&#9884;</span><span dir="rtl">&nbsp;</span>
    </p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:16pt;">
        <strong>ي</strong><strong><u>شرفها أن تعرض على أنظار سيادتكم ما يلي</u></strong><strong>:</strong></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; أنه سبق لها أن استفادت من قرض بنكي ممنوح لها من طرف&nbsp; صوفاك كريدي شركة
        مساهمة ، من اجل شراء سيارة من نوع <span dir="ltr"><span dir="ltr">&nbsp;</span>{{ $data["carType"] }}</span><span
            dir="rtl">ذات اللوحة عدد&nbsp;</span><span dir="ltr">&nbsp;{{ $data["numberPlate"] }}</span><span
            dir="rtl">بقيمة&nbsp;</span><span dir="ltr" style="font-weight:bold;">{{ $data["worth"] }}</span> يتم ارجاعه
        عن طريق اقساط شهرية حسب مبلغ <span dir="ltr">&nbsp;</span><strong>{{ $data["monthlyAmount"] }}</strong> درهم، أدت منها
        كتسبيق مبلغ <span dir="ltr">&nbsp;</span><strong>{{ $data["advanceAmount"] }}</strong>درهم .</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:16pt;">- <strong>تفضلوا
            بالاطلاع على صورة من عقد القرض-</strong></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp; وان المدعى عليها استصدرت امرا عن السيد رئيس المحكمة الابتدائية المدنية <span
            dir="ltr"><span dir="ltr">&nbsp;&nbsp;</span>{{ $data["civilCourt"] }}&nbsp;</span><span dir="rtl">تحت
            عدد&nbsp;</span><span dir="ltr">&nbsp;{{ $data["civilCourtUnderNumber"] }}</span><span dir="rtl">في
            الملف&nbsp;</span><span dir="ltr">&nbsp;{{ $data["civilCourtFile"] }}</span><span dir="rtl">بتاريخ</span><span
            dir="ltr">{{ $data["civilCourtDate"] }}&nbsp;</span><span dir="rtl">&nbsp;قضى بفسخ عقد الائتمان الايجاري
            عدد&nbsp;</span><span dir="ltr">{{ $data["RentalCreditNumber"] }}</span><span dir="rtl">&nbsp;وارجاع الناقلة
            من نوع&nbsp;</span><span dir="ltr">&nbsp;{{ $data["tankerType"] }}&nbsp;</span><span dir="rtl">&nbsp;والمسجلة
            بالمغرب تحت رقم</span><span dir="ltr">{{ $data["RegistredUnderNo"] }}&nbsp;</span><span dir="rtl">.</span></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:16pt;">- <strong>تفضلوا
            بالاطلاع على صورة من الامر الاستعجالي &ndash;</strong></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:16pt;"><span dir="ltr">&nbsp;</span><span
            dir="rtl">&nbsp;&nbsp;</span>وان العارضة بتاريخ <span dir="ltr"><span
                dir="ltr">&nbsp;</span>{{ $data["Cdate"] }}</span><span dir="rtl">&nbsp;وعلى مستوى طريق عكراش الولجة سلا ،
            تفاجأت</span>&nbsp; بالمدعى عليها في شخص السيد هشام حماوي&nbsp; بصفته عون التحصيل&nbsp; يطلب منها&nbsp; ان
        تسلمه السيارة وترافقه الى مقر الشركة من اجل تسوية وضعية السيارة المحجوزعليها ،وايداعها بالمراب الخاص، حسب ما هو
        ثابت من المحضر المنجز من طرف المفوض القضائي السيد عبد الله بنعويشة.</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - <strong>تفضلوا بالاطلاع على صورة من محضر استرجاع السيارة &ndash;</strong></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:16pt;"><span
            dir="ltr">&nbsp;&nbsp;&nbsp;</span><span dir="rtl">وان العارضة بادرت الى الطعن بالاستئناف ضد
            مقتضيات الامر الذي قضى بفسخ عقد الائتمان الايجاري عدد&nbsp;</span></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:16pt;"><span
            dir="ltr">{{ $data["annulRentalCredit"] }}</span><span dir="rtl">، واستصـــــــــــدرت قرار تحت عدد : 1626 في
            الملف عدد :&nbsp;</span><span dir="ltr">&nbsp;{{ $data["AFileNumber"] }}</span><span
            dir="rtl">&nbsp;بتاريخ&nbsp;</span><span dir="ltr">&nbsp;{{ $data["Adate"] }}</span><span dir="rtl">عن
            محكمــــة الاستئناف بالدار البيضاء قضى بإلغاء الامر المستأنف فيما قضى به ،والحكـــم من جديد بعدم قبول
            الطلب.&nbsp;</span></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:16pt;">&nbsp;-
        <strong>تفضلوا بالاطلاع على صورة من القرار-</strong></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:16pt;">&nbsp;&nbsp;&nbsp;&nbsp; مما يبقى معه
        الامر بفسخ&nbsp; عقد الائتمان الايجاري مع استرجاع السيارة نوع <span dir="ltr"><span
                dir="ltr">&nbsp;</span>{{ $data["vehicleType"] }}</span><span dir="rtl">&nbsp;ذات اللوحة
            عدد&nbsp;</span><span dir="ltr">&nbsp;{{ $data["paintingNumber"] }}</span><span dir="rtl">غير دي موضوع
            .</span></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:16pt;">&nbsp;&nbsp; وحيث ان العارضة واعمالا
        للشروط&nbsp; المقررة بموجب القانون 31.08 الــــذي ينص على تدابير حماية المستهلك وحسب الشكليات الموضحة في الشروط
        الخاصة والعامــــــــــة لعقد الائتمان الايجاري عدد&nbsp; :75479630 ،وطبقا لمقتضيات&nbsp; المادة 202 من القانون
        31.08&nbsp; والتي&nbsp; تنص <strong>:&quot; في حالة نزاع بين المورد والمستهلك ،ورغم وجود اي شرط مخالف فان
            الاختصاص القضائي النوعي ينعقد حصريا للمحكمة الابتدائية .</strong></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:16pt;"><strong>تعتبر المحكمة المختصة مكانيا
            ،محكمة موطن او محل اقامة المستهلك او محكمة المحل الذي وقع فيه الفعل المتسبب في الضرر باختيار هذا
            الاخير&quot;.</strong></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;">
        &nbsp;&nbsp;&nbsp; مما تلتمس معه القول والحكم باسترجاع السيارة من نوع<span
            dir="ltr">{{ $data["vehicleType"] }}&nbsp;</span><span dir="rtl">&nbsp;ذات اللوحة عدد&nbsp;</span><span
            dir="ltr">&nbsp;{{ $data["paintingNumber"] }}</span><span dir="rtl">&nbsp;تحت طائلة غرامة تهديدية
            قدرها&nbsp;</span><span dir="ltr" style="font-weight:bold;">&nbsp;{{ $data["threatAmount"] }}</span> درهم عن كل
        يوم تأخير، مع النفاذ المعجل والصائر .</p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:24pt;"><span
            style="font-size:16pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><u>لهــذه الأسبـــــــاب</u></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:18pt;"><span
            dir="ltr" style="font-weight:bold;">&nbsp;</span>تلتمس
        العـارضة<strong><u>&nbsp;&nbsp;</u></strong><strong><u>من سيـادتكم</u></strong><strong>&nbsp;:</strong></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:16pt;"><strong><u>التفضل
                بتبليغ نسخة من هذا المقال مع الاستدعاء لأقرب جلسة تعقدونها للبث في القضية الاستعجالية الى المدعى عليها
                اعلاه بعنوانها اعلاه وعند الاقتضاء البث في غيبة الاطراف نظرا لحالة الاستعجال القصوى .</u></strong></p>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:18pt;">
        <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong><u>فـي الشـكــل&nbsp;</u></strong><strong>:</strong></p>
    <ul style="margin:0pt;" type="disc">
        <li dir="rtl"
            style="margin-right:60.07pt; text-align:right; padding-right:0.43pt; font-size:16pt;">
            <span>تصرحوا بقبول المقال لاستيفائه كافة شروطه الشكلية.</span><span
            >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></li>
    </ul>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:18pt;">
        <strong>&nbsp;&nbsp;&nbsp;</strong><strong><u>في الموضوع :</u></strong></p>
    <ul style="margin:0pt;" type="disc">
        <li dir="rtl"
            style="margin-right:52.82pt; text-align:right; padding-right:0.43pt; font-size:16pt;">
            <span>ملاحظة أن الطلب وجيـه ومعـلل، ويتسم بالجدية والاستعجال.</span>
        </li>
        <li dir="rtl"
            style="margin-right:47.57pt; text-align:right; padding-right:0.43pt; font-size:16pt;">
            <span>الحكم على المدعى عليها بإرجاعها للعارضة السيارة من
                نـــــــــــــــــــــــــوع&nbsp;</span><span dir="ltr"><span
                >&nbsp;&nbsp;</span><span
                >{{ $data["vehicleType"] }}</span></span><span
            >&nbsp;ذات اللوحة عدد&nbsp;</span><span dir="ltr"
            >{{ $data["paintingNumber"] }}</span><span
            >، تحت طائلة غرامة تهديدية قدرها&nbsp;</span><span
                dir="ltr" style="font-family:'Times New Roman'; font-weight:bold;">{{ $data["threatAmount"] }}</span>
            درهم<span>&nbsp;عن كل يوم تأخير.</span></li>
        <li dir="rtl"
            style="margin-right:47.57pt; text-align:right; padding-right:0.43pt; font-size:16pt;">
            <span>البث في غيبة الاطراف نظرا لحالة الاستعجال القصوى.</span></li>
        <li dir="rtl"
            style="margin-right:47.57pt; text-align:right; padding-right:0.43pt; font-size:16pt;">
            <span>شمول الحكم بالنفاذ المعجل .</span></li>
        <li dir="rtl"
            style="margin-right:47.57pt; text-align:right; padding-right:0.43pt; font-size:16pt;">
            <span>تحميل المدعى عليها الصائر .</span></li>
    </ul>
    <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:18pt;"><span
            style="height:0pt; text-align:right; display:block; position:absolute; z-index:0;"><img
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAxgAAACUCAYAAAAQ549aAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAMOSURBVHhe7dcxAQAADMOg+TfdmcgJLrgBAABEBAMAAMgIBgAAkBEMAAAgIxgAAEBGMAAAgIxgAAAAGcEAAAAyggEAAGQEAwAAyAgGAACQEQwAACAjGAAAQEYwAACAjGAAAAAZwQAAADKCAQAAZAQDAADICAYAAJARDAAAICMYAABARjAAAICMYAAAABnBAAAAMoIBAABkBAMAAMgIBgAAkBEMAAAgIxgAAEBGMAAAgIxgAAAAGcEAAAAyggEAAGQEAwAAyAgGAACQEQwAACAjGAAAQEYwAACAjGAAAAAZwQAAADKCAQAAZAQDAADICAYAAJARDAAAICMYAABARjAAAICMYAAAABnBAAAAMoIBAABkBAMAAMgIBgAAkBEMAAAgIxgAAEBGMAAAgIxgAAAAGcEAAAAyggEAAGQEAwAAyAgGAACQEQwAACAjGAAAQEYwAACAjGAAAAAZwQAAADKCAQAAZAQDAADICAYAAJARDAAAICMYAABARjAAAICMYAAAABnBAAAAMoIBAABkBAMAAMgIBgAAkBEMAAAgIxgAAEBGMAAAgIxgAAAAGcEAAAAyggEAAGQEAwAAyAgGAACQEQwAACAjGAAAQEYwAACAjGAAAAAZwQAAADKCAQAAZAQDAADICAYAAJARDAAAICMYAABARjAAAICMYAAAABnBAAAAMoIBAABkBAMAAMgIBgAAkBEMAAAgIxgAAEBGMAAAgIxgAAAAGcEAAAAyggEAAGQEAwAAyAgGAACQEQwAACAjGAAAQEYwAACAjGAAAAAZwQAAADKCAQAAZAQDAADICAYAAJARDAAAICMYAABARjAAAICMYAAAABnBAAAAMoIBAABkBAMAAMgIBgAAkBEMAAAgIxgAAEBGMAAAgIxgAAAAGcEAAAAyggEAAGQEAwAAyAgGAACQEQwAACAjGAAAQEYwAACAjGAAAAAZwQAAADKCAQAAZAQDAADICAYAAJARDAAAICMYAABARjAAAICMYAAAABnBAAAAMoIBAABkBAMAAMgIBgAAkBEMAAAgsj1DOcNh4pRr6AAAAABJRU5ErkJggg=="
                width="792" height="148" alt=""
                style="margin: 0 auto 0 0; display: block; "></span><strong><u>المرفقات :</u></strong></p>
    <p dir="rtl" style="margin-top:0pt; margin-right:4.5pt; margin-bottom:0pt; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - نسخة من عقد القرض.</p>
    <p dir="rtl" style="margin-top:0pt; margin-right:4.5pt; margin-bottom:0pt; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - نسخة من محضر استرجاع السيارة.</p>
    <p dir="rtl"
        style="margin-top:0pt; margin-right:4.5pt; margin-bottom:0pt; text-align:justify; font-size:16pt;"><span
            dir="ltr">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            dir="rtl">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>- نسخة من الامر الاستعجالي عدد :<span
            dir="ltr"><span dir="ltr">&nbsp;</span>{{ $data["urgentMatterNumber"] }}</span><span
            dir="rtl">&nbsp;في الملف&nbsp;</span><span dir="ltr">{{ $data["uFile"] }}</span></p>
    <p dir="rtl" style="margin-top:0pt; margin-right:4.5pt; margin-bottom:0pt; font-size:16pt;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - نسخة من القرار عدد :<span
            dir="ltr">{{ $data["decisionNumber"] }}</span><span dir="rtl">&nbsp;في الملف عدد :</span><span
            dir="ltr">{{ $data["dFile"] }}&nbsp;</span><span dir="rtl">.</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; font-size:20pt;"><u><span dir="rtl"
                style="font-weight:bold;">تحت جميع التحفظات</span></u></p>
</body>

</html>
