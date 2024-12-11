<?php

$fafname = 'شرکت ملورینت';
echo strlen($fafname);
echo '<br>';
echo mb_strlen($fafname);
echo '<br>';
echo mb_strtoupper($fafname);
echo '<hr>';
$fname = 'Melorinet Yazilim Limited CO';

echo $fname;
echo '<br>';
echo strlen($fname);
echo '<br>';
echo str_word_count($fname);
echo '<br>';
echo strtoupper($fname);
echo '<br>';
echo strtolower($fname);
echo '<br>';
echo str_replace('co','Company',$fname);
echo '<br>';
echo str_replace(['co','Co','cO','CO'],'Company',$fname);
echo '<br>';
echo str_replace(['co','Co','cO','CO'],['company','Company','cOmpany','COMPANY'],$fname);
echo '<br>';
echo strpos($fname,'Yazilim');
echo '<br>';
echo $fname[0];
echo '<br>';
echo substr($fname,10,7);
echo '<br>';
$fnameArray = explode(" ",$fname);
print_r($fnameArray);
echo '<br>';
// new line = \n
// tab = \t
$data = 'آذربایجان شرقی	کشکسرای
آذربایجان شرقی	سهند
آذربایجان شرقی	سیس
آذربایجان شرقی	دوزدوزان
آذربایجان شرقی	تیمورلو
آذربایجان شرقی	صوفیان
آذربایجان شرقی	سردرود
آذربایجان شرقی	هادیشهر
آذربایجان شرقی	هشترود
آذربایجان شرقی	زرنق
آذربایجان شرقی	ترکمانچای
آذربایجان شرقی	ورزقان
آذربایجان شرقی	تسوج
آذربایجان شرقی	زنوز
آذربایجان شرقی	ایلخچی
آذربایجان شرقی	شرفخانه
آذربایجان شرقی	مهربان
آذربایجان شرقی	مبارک شهر
آذربایجان شرقی	تیکمه داش
آذربایجان شرقی	باسمنج
آذربایجان شرقی	سیه رود
آذربایجان شرقی	میانه
آذربایجان شرقی	خمارلو
آذربایجان شرقی	خواجه
آذربایجان شرقی	بناب مرند
آذربایجان شرقی	قره آغاج
آذربایجان شرقی	وایقان
آذربایجان شرقی	مراغه
آذربایجان شرقی	ممقان
آذربایجان شرقی	خامنه
آذربایجان شرقی	خسروشاه
آذربایجان شرقی	لیلان
آذربایجان شرقی	نظرکهریزی
آذربایجان شرقی	اهر
آذربایجان شرقی	بخشایش
آذربایجان شرقی	آقکند
آذربایجان شرقی	جوان قلعه
آذربایجان شرقی	کلیبر
آذربایجان شرقی	مرند
آذربایجان شرقی	اسکو
آذربایجان شرقی	شندآباد
آذربایجان شرقی	شربیان
آذربایجان شرقی	گوگان
آذربایجان شرقی	بستان آباد
آذربایجان شرقی	تبریز
آذربایجان شرقی	جلفا
آذربایجان شرقی	اچاچی
آذربایجان شرقی	هریس
آذربایجان شرقی	یامچی
آذربایجان شرقی	خاروانا
آذربایجان شرقی	کوزه کنان
آذربایجان شرقی	خداجو(خراجو)
آذربایجان شرقی	آذرشهر
آذربایجان شرقی	شبستر
آذربایجان شرقی	سراب
آذربایجان شرقی	ملکان
آذربایجان شرقی	بناب
آذربایجان شرقی	هوراند
آذربایجان شرقی	کلوانق
آذربایجان شرقی	ترک
آذربایجان شرقی	عجب شیر
آذربایجان شرقی	آبش احمد
آذربایجان غربی	تازه شهر
آذربایجان غربی	نالوس
آذربایجان غربی	ایواوغلی
آذربایجان غربی	شاهین دژ
آذربایجان غربی	گردکشانه
آذربایجان غربی	باروق
آذربایجان غربی	سیلوانه
آذربایجان غربی	بازرگان
آذربایجان غربی	نازک علیا
آذربایجان غربی	ربط
آذربایجان غربی	تکاب
آذربایجان غربی	دیزج دیز
آذربایجان غربی	سیمینه
آذربایجان غربی	نوشین
آذربایجان غربی	میاندوآب
آذربایجان غربی	مرگنلر
آذربایجان غربی	سلماس
آذربایجان غربی	آواجیق
آذربایجان غربی	قطور
آذربایجان غربی	محمودآباد
آذربایجان غربی	خوی
آذربایجان غربی	نقده
آذربایجان غربی	سرو
آذربایجان غربی	خلیفان
آذربایجان غربی	پلدشت
آذربایجان غربی	میرآباد
آذربایجان غربی	اشنویه
آذربایجان غربی	زرآباد
آذربایجان غربی	بوکان
آذربایجان غربی	پیرانشهر
آذربایجان غربی	چهاربرج
آذربایجان غربی	قوشچی
آذربایجان غربی	شوط
آذربایجان غربی	ماکو
آذربایجان غربی	سیه چشمه
آذربایجان غربی	سردشت
آذربایجان غربی	کشاورز
آذربایجان غربی	فیرورق
آذربایجان غربی	محمدیار
آذربایجان غربی	ارومیه
آذربایجان غربی	مهاباد
آذربایجان غربی	قره ضیاءالدین
اردبیل	پارس آباد
اردبیل	فخراباد
اردبیل	کلور
اردبیل	نیر
اردبیل	اردبیل
اردبیل	اسلام اباد
اردبیل	تازه کندانگوت
اردبیل	مشگین شهر
اردبیل	جعفرآباد
اردبیل	نمین
اردبیل	اصلاندوز
اردبیل	مرادلو
اردبیل	خلخال
اردبیل	کوراییم
اردبیل	هیر
اردبیل	گیوی
اردبیل	گرمی
اردبیل	لاهرود
اردبیل	هشتجین
اردبیل	عنبران
اردبیل	تازه کند
اردبیل	قصابه
اردبیل	رضی
اردبیل	سرعین
اردبیل	بیله سوار
اردبیل	آبی بیگلو
اصفهان	گزبرخوار
اصفهان	زیار
اصفهان	زرین شهر
اصفهان	گلشن
اصفهان	پیربکران
اصفهان	خالدآباد
اصفهان	سجزی
اصفهان	گوگد
اصفهان	تیران
اصفهان	ونک
اصفهان	دهق
اصفهان	زواره
اصفهان	کاشان
اصفهان	ابوزیدآباد
اصفهان	اصغرآباد
اصفهان	بافران
اصفهان	شهرضا
اصفهان	خور
اصفهان	مجلسی
اصفهان	هرند
اصفهان	فولادشهر
اصفهان	کمشچه
اصفهان	کلیشادوسودرجان
اصفهان	لای بید
اصفهان	قهجاورستان
اصفهان	چرمهین
اصفهان	رزوه
اصفهان	فریدونشهر
اصفهان	طرق رود
اصفهان	نصرآباد
اصفهان	برزک
اصفهان	سفیدشهر
اصفهان	سمیرم
اصفهان	گلدشت
اصفهان	اردستان
اصفهان	جوشقان قالی
اصفهان	بویین ومیاندشت
اصفهان	کرکوند
اصفهان	درچه
اصفهان	انارک
اصفهان	دولت آباد
اصفهان	ایمانشهر
اصفهان	گرگاب
اصفهان	حسن اباد
اصفهان	سده لنجان
اصفهان	حبیب آباد
اصفهان	بهاران شهر
اصفهان	میمه
اصفهان	تودشک
اصفهان	گلشهر
اصفهان	رضوانشهر
اصفهان	داران
اصفهان	علویجه
اصفهان	نیک آباد
اصفهان	مشکات
اصفهان	آران وبیدگل
اصفهان	خوانسار
اصفهان	نجف آباد
اصفهان	منظریه
اصفهان	فرخی
اصفهان	دیزیچه
اصفهان	اژیه
اصفهان	زاینده رود
اصفهان	خورزوق
اصفهان	قهدریجان
اصفهان	شاهین شهر
اصفهان	بهارستان
اصفهان	چمگردان
اصفهان	دهاقان
اصفهان	برف انبار
اصفهان	بادرود
اصفهان	کوهپایه
اصفهان	گلپایگان
اصفهان	عسگران
اصفهان	حنا
اصفهان	کهریزسنگ
اصفهان	مهاباد
اصفهان	کامو و چوگان
اصفهان	افوس
اصفهان	زیباشهر
اصفهان	کوشک
اصفهان	نایین
اصفهان	سین
اصفهان	زازران
اصفهان	مبارکه
اصفهان	ورزنه
اصفهان	ورنامخواست
اصفهان	شاپورآباد
اصفهان	فلاورجان
اصفهان	وزوان
اصفهان	اصفهان
اصفهان	باغ بهادران
اصفهان	چادگان
اصفهان	دامنه
اصفهان	نطنز
اصفهان	محمدآباد
اصفهان	نیاسر
اصفهان	نوش آباد
اصفهان	کمه
اصفهان	جوزدان
اصفهان	قمصر
اصفهان	جندق
اصفهان	طالخونچه
اصفهان	خمینی شهر
اصفهان	باغشاد
اصفهان	دستگرد
اصفهان	ابریشم
البرز	چهارباغ
البرز	آسارا
البرز	کرج
البرز	طالقان
البرز	شهرجدیدهشتگرد
البرز	محمدشهر
البرز	مشکین دشت
البرز	نظرآباد
البرز	هشتگرد
البرز	ماهدشت
البرز	اشتهارد
البرز	کوهسار
البرز	گرمدره
البرز	تنکمان
البرز	گلسار
البرز	کمال شهر
البرز	فردیس
ایلام	آبدانان
ایلام	شباب
ایلام	موسیان
ایلام	بدره
ایلام	ایلام
ایلام	ایوان
ایلام	مهران
ایلام	آسمان آباد
ایلام	پهله
ایلام	مهر
ایلام	سراب باغ
ایلام	بلاوه
ایلام	میمه
ایلام	دره شهر
ایلام	ارکواز
ایلام	مورموری
ایلام	توحید
ایلام	دهلران
ایلام	لومار
ایلام	چوار
ایلام	زرنه
ایلام	صالح آباد
ایلام	سرابله
ایلام	ماژین
ایلام	دلگشا
بوشهر	ریز
بوشهر	برازجان
بوشهر	بندرریگ
بوشهر	اهرم
بوشهر	دوراهک
بوشهر	خورموج
بوشهر	نخل تقی
بوشهر	کلمه
بوشهر	بندردیلم
بوشهر	وحدتیه
بوشهر	بنک
بوشهر	چغادک
بوشهر	بندردیر
بوشهر	کاکی
بوشهر	جم
بوشهر	دالکی
بوشهر	بندرگناوه
بوشهر	آباد
بوشهر	آبدان
بوشهر	خارک
بوشهر	شنبه
بوشهر	بوشکان
بوشهر	انارستان
بوشهر	شبانکاره
بوشهر	سیراف
بوشهر	دلوار
بوشهر	بردستان
بوشهر	بادوله
بوشهر	عسلویه
بوشهر	تنگ ارم
بوشهر	امام حسن
بوشهر	سعد آباد
بوشهر	بندرکنگان
بوشهر	بوشهر
بوشهر	بردخون
بوشهر	آب پخش
تهران	شاهدشهر
تهران	پیشوا
تهران	جوادآباد
تهران	ارجمند
تهران	ری
تهران	نصیرشهر
تهران	رودهن
تهران	اندیشه
تهران	نسیم شهر
تهران	صباشهر
تهران	ملارد
تهران	شمشک
تهران	پاکدشت
تهران	باقرشهر
تهران	احمد آباد مستوفی
تهران	کیلان
تهران	قرچک
تهران	فردوسیه
تهران	گلستان
تهران	ورامین
تهران	فیروزکوه
تهران	فشم
تهران	پرند
تهران	آبعلی
تهران	چهاردانگه
تهران	تهران
تهران	بومهن
تهران	وحیدیه
تهران	صفادشت
تهران	لواسان
تهران	فرون اباد
تهران	کهریزک
تهران	رباطکریم
تهران	آبسرد
تهران	باغستان
تهران	صالحیه
تهران	شهریار
تهران	قدس
تهران	تجریش
تهران	شریف آباد
تهران	حسن آباد
تهران	اسلامشهر
تهران	دماوند
تهران	پردیس
چهارمحال و بختیاری	وردنجان
چهارمحال و بختیاری	گوجان
چهارمحال و بختیاری	گهرو
چهارمحال و بختیاری	سورشجان
چهارمحال و بختیاری	سرخون
چهارمحال و بختیاری	شهرکرد
چهارمحال و بختیاری	منج
چهارمحال و بختیاری	بروجن
چهارمحال و بختیاری	پردنجان
چهارمحال و بختیاری	سامان
چهارمحال و بختیاری	فرخ شهر
چهارمحال و بختیاری	صمصامی
چهارمحال و بختیاری	طاقانک
چهارمحال و بختیاری	کاج
چهارمحال و بختیاری	نقنه
چهارمحال و بختیاری	لردگان
چهارمحال و بختیاری	باباحیدر
چهارمحال و بختیاری	دستنا
چهارمحال و بختیاری	سودجان
چهارمحال و بختیاری	بازفت
چهارمحال و بختیاری	هفشجان
چهارمحال و بختیاری	سردشت
چهارمحال و بختیاری	فرادبنه
چهارمحال و بختیاری	چلیچه
چهارمحال و بختیاری	بن
چهارمحال و بختیاری	فارسان
چهارمحال و بختیاری	شلمزار
چهارمحال و بختیاری	نافچ
چهارمحال و بختیاری	دشتک
چهارمحال و بختیاری	بلداجی
چهارمحال و بختیاری	آلونی
چهارمحال و بختیاری	گندمان
چهارمحال و بختیاری	جونقان
چهارمحال و بختیاری	ناغان
چهارمحال و بختیاری	هارونی
چهارمحال و بختیاری	چلگرد
چهارمحال و بختیاری	کیان
چهارمحال و بختیاری	اردل
چهارمحال و بختیاری	سفیددشت
چهارمحال و بختیاری	مال خلیفه
خراسان جنوبی	اسلامیه
خراسان جنوبی	شوسف
خراسان جنوبی	قاین
خراسان جنوبی	عشق آباد
خراسان جنوبی	طبس مسینا
خراسان جنوبی	ارسک
خراسان جنوبی	آیسک
خراسان جنوبی	نیمبلوک
خراسان جنوبی	دیهوک
خراسان جنوبی	سربیشه
خراسان جنوبی	محمدشهر
خراسان جنوبی	بیرجند
خراسان جنوبی	فردوس
خراسان جنوبی	نهبندان
خراسان جنوبی	اسفدن
خراسان جنوبی	گزیک
خراسان جنوبی	حاجی آباد
خراسان جنوبی	سه قلعه
خراسان جنوبی	آرین شهر
خراسان جنوبی	مود
خراسان جنوبی	خوسف
خراسان جنوبی	قهستان
خراسان جنوبی	بشرویه
خراسان جنوبی	سرایان
خراسان جنوبی	خضری دشت بیاض
خراسان جنوبی	طبس
خراسان جنوبی	اسدیه
خراسان جنوبی	زهان
خراسان رضوی	بار
خراسان رضوی	نیل شهر
خراسان رضوی	جنگل
خراسان رضوی	درود
خراسان رضوی	رباط سنگ
خراسان رضوی	سلطان آباد
خراسان رضوی	فریمان
خراسان رضوی	گناباد
خراسان رضوی	کاریز
خراسان رضوی	همت آباد
خراسان رضوی	سلامی
خراسان رضوی	باجگیران
خراسان رضوی	بجستان
خراسان رضوی	چناران
خراسان رضوی	درگز
خراسان رضوی	کلات
خراسان رضوی	چکنه
خراسان رضوی	نصرآباد
خراسان رضوی	بردسکن
خراسان رضوی	مشهد
خراسان رضوی	کدکن
خراسان رضوی	نقاب
خراسان رضوی	قلندرآباد
خراسان رضوی	کاشمر
خراسان رضوی	شاندیز
خراسان رضوی	نشتیفان
خراسان رضوی	ششتمد
خراسان رضوی	شادمهر
خراسان رضوی	عشق آباد
خراسان رضوی	چاپشلو
خراسان رضوی	رشتخوار
خراسان رضوی	قدمگاه
خراسان رضوی	صالح آباد
خراسان رضوی	داورزن
خراسان رضوی	فرهادگرد
خراسان رضوی	کاخک
خراسان رضوی	مشهدریزه
خراسان رضوی	جغتای
خراسان رضوی	مزدآوند
خراسان رضوی	قوچان
خراسان رضوی	یونسی
خراسان رضوی	سنگان
خراسان رضوی	نوخندان
خراسان رضوی	کندر
خراسان رضوی	نیشابور
خراسان رضوی	احمدابادصولت
خراسان رضوی	شهراباد
خراسان رضوی	رضویه
خراسان رضوی	تربت حیدریه
خراسان رضوی	باخرز
خراسان رضوی	سفیدسنگ
خراسان رضوی	بیدخت
خراسان رضوی	تایباد
خراسان رضوی	فیروزه
خراسان رضوی	قاسم آباد
خراسان رضوی	سبزوار
خراسان رضوی	فیض آباد
خراسان رضوی	گلمکان
خراسان رضوی	لطف آباد
خراسان رضوی	شهرزو
خراسان رضوی	خرو
خراسان رضوی	تربت جام
خراسان رضوی	انابد
خراسان رضوی	ملک آباد
خراسان رضوی	بایک
خراسان رضوی	دولت آباد
خراسان رضوی	سرخس
خراسان رضوی	ریوش
خراسان رضوی	طرقبه
خراسان رضوی	خواف
خراسان رضوی	روداب
خراسان رضوی	خلیل آباد
خراسان شمالی	چناران شهر
خراسان شمالی	راز
خراسان شمالی	پیش قلعه
خراسان شمالی	قوشخانه
خراسان شمالی	شوقان
خراسان شمالی	اسفراین
خراسان شمالی	گرمه
خراسان شمالی	قاضی
خراسان شمالی	شیروان
خراسان شمالی	حصارگرمخان
خراسان شمالی	آشخانه
خراسان شمالی	تیتکانلو
خراسان شمالی	جاجرم
خراسان شمالی	بجنورد
خراسان شمالی	درق
خراسان شمالی	آوا
خراسان شمالی	زیارت
خراسان شمالی	سنخواست
خراسان شمالی	صفی آباد
خراسان شمالی	ایور
خراسان شمالی	فاروج
خراسان شمالی	لوجلی
خوزستان	هفتگل
خوزستان	بیدروبه
خوزستان	شاوور
خوزستان	حمزه
خوزستان	گتوند
خوزستان	شرافت
خوزستان	منصوریه
خوزستان	زهره
خوزستان	رامهرمز
خوزستان	بندرامام خمینی
خوزستان	کوت عبداله
خوزستان	میداود
خوزستان	چغامیش
خوزستان	ملاثانی
خوزستان	چم گلک
خوزستان	حر
خوزستان	شمس آباد
خوزستان	آبژدان
خوزستان	چویبده
خوزستان	مسجدسلیمان
خوزستان	مقاومت
خوزستان	ترکالکی
خوزستان	دارخوین
خوزستان	سردشت
خوزستان	لالی
خوزستان	کوت سیدنعیم
خوزستان	حمیدیه
خوزستان	دهدز
خوزستان	قلعه تل
خوزستان	میانرود
خوزستان	رفیع
خوزستان	اندیمشک
خوزستان	الوان
خوزستان	سالند
خوزستان	صالح شهر
خوزستان	اروندکنار
خوزستان	سرداران
خوزستان	تشان
خوزستان	رامشیر
خوزستان	شادگان
خوزستان	بندرماهشهر
خوزستان	جایزان
خوزستان	بستان
خوزستان	ویس
خوزستان	اهواز
خوزستان	فتح المبین
خوزستان	شهر امام
خوزستان	قلعه خواجه
خوزستان	حسینیه
خوزستان	گلگیر
خوزستان	مینوشهر
خوزستان	سماله
خوزستان	شوشتر
خوزستان	بهبهان
خوزستان	هندیجان
خوزستان	ابوحمیظه
خوزستان	آغاجاری
خوزستان	ایذه
خوزستان	صیدون
خوزستان	سیاه منصور
خوزستان	هویزه
خوزستان	آزادی
خوزستان	شوش
خوزستان	دزفول
خوزستان	جنت مکان
خوزستان	آبادان
خوزستان	گوریه
خوزستان	خرمشهر
خوزستان	مشراگه
خوزستان	خنافره
خوزستان	چمران
خوزستان	امیدیه
خوزستان	سوسنگرد
خوزستان	شیبان
خوزستان	الهایی
خوزستان	باغ ملک
خوزستان	صفی آباد
زنجان	سجاس
زنجان	زرین رود
زنجان	آب بر
زنجان	ارمغانخانه
زنجان	کرسف
زنجان	هیدج
زنجان	سلطانیه
زنجان	خرمدره
زنجان	نیک پی
زنجان	قیدار
زنجان	ابهر
زنجان	دندی
زنجان	حلب
زنجان	نوربهار
زنجان	گرماب
زنجان	چورزق
زنجان	زنجان
زنجان	سهرورد
زنجان	صایین قلعه
زنجان	ماه نشان
زنجان	زرین آباد
سمنان	ایوانکی
سمنان	مجن
سمنان	دامغان
سمنان	سرخه
سمنان	مهدی شهر
سمنان	شاهرود
سمنان	سمنان
سمنان	کهن آباد
سمنان	گرمسار
سمنان	کلاته خیج
سمنان	دیباج
سمنان	درجزین
سمنان	رودیان
سمنان	بسطام
سمنان	امیریه
سمنان	میامی
سمنان	شهمیرزاد
سمنان	بیارجمند
سمنان	کلاته
سمنان	آرادان
سیستان و بلوچستان	محمدی
سیستان و بلوچستان	شهرک علی اکبر
سیستان و بلوچستان	بنجار
سیستان و بلوچستان	گلمورتی
سیستان و بلوچستان	نگور
سیستان و بلوچستان	راسک
سیستان و بلوچستان	بنت
سیستان و بلوچستان	قصرقند
سیستان و بلوچستان	جالق
سیستان و بلوچستان	هیدوچ
سیستان و بلوچستان	نوک آباد
سیستان و بلوچستان	زهک
سیستان و بلوچستان	بمپور
سیستان و بلوچستان	پیشین
سیستان و بلوچستان	گشت
سیستان و بلوچستان	محمدآباد
سیستان و بلوچستان	زاهدان
سیستان و بلوچستان	زابلی
سیستان و بلوچستان	چاه بهار
سیستان و بلوچستان	زرآباد
سیستان و بلوچستان	بزمان
سیستان و بلوچستان	اسپکه
سیستان و بلوچستان	فنوج
سیستان و بلوچستان	سراوان
سیستان و بلوچستان	ادیمی
سیستان و بلوچستان	زابل
سیستان و بلوچستان	دوست محمد
سیستان و بلوچستان	ایرانشهر
سیستان و بلوچستان	سرباز
سیستان و بلوچستان	سیرکان
سیستان و بلوچستان	میرجاوه
سیستان و بلوچستان	نصرت آباد
سیستان و بلوچستان	سوران
سیستان و بلوچستان	خاش
سیستان و بلوچستان	کنارک
سیستان و بلوچستان	محمدان
سیستان و بلوچستان	نیک شهر
فارس	کازرون
فارس	کارزین (فتح آباد)
فارس	فدامی
فارس	خومه زار
فارس	سلطان شهر
فارس	فیروزآباد
فارس	دبیران
فارس	باب انار
فارس	رامجرد
فارس	سروستان
فارس	قره بلاغ
فارس	ارسنجان
فارس	دژکرد
فارس	بیرم
فارس	دهرم
فارس	شیراز
فارس	ایزدخواست
فارس	علامرودشت
فارس	اوز
فارس	وراوی
فارس	بیضا
فارس	نی ریز
فارس	کنارتخته
فارس	امام شهر
فارس	جهرم
فارس	بابامنیر
فارس	گراش
فارس	فسا
فارس	شهرپیر
فارس	حسن اباد
فارس	کامفیروز
فارس	خنج
فارس	خانه زنیان
فارس	استهبان
فارس	بوانات
فارس	لطیفی
فارس	فراشبند
فارس	زرقان
فارس	صغاد
فارس	اشکنان
فارس	قایمیه
فارس	گله دار
فارس	دوبرجی
فارس	آباده طشک
فارس	خرامه
فارس	میمند
فارس	افزر
فارس	دوزه
فارس	سیدان
فارس	کوپن
فارس	زاهدشهر
فارس	قادراباد
فارس	سده
فارس	بنارویه
فارس	سعادت شهر
فارس	شهرصدرا
فارس	سورمق
فارس	حسامی
فارس	جویم
فارس	خوزی
فارس	اردکان
فارس	قطرویه
فارس	نودان
فارس	مبارک آباددیز
فارس	داراب
فارس	نورآباد
فارس	کوار
فارس	نوبندگان
فارس	حاجی آباد
فارس	خاوران
فارس	مرودشت
فارس	کوهنجان
فارس	ششده
فارس	مزایجان
فارس	ایج
فارس	خور
فارس	نوجین
فارس	لپویی
فارس	بهمن
فارس	اهل
فارس	خشت
فارس	مهر
فارس	جنت شهر
فارس	مشکان
فارس	بالاده
فارس	قیر
فارس	قطب آباد
فارس	خانیمن
فارس	مصیری
فارس	میانشهر
فارس	صفاشهر
فارس	اقلید
فارس	عمادده
فارس	مادرسلیمان
فارس	داریان
فارس	رونیز
فارس	کره ای
فارس	لار
فارس	اسیر
فارس	هماشهر
فارس	آباده
فارس	لامرد
قزوین	سگزآباد
قزوین	بیدستان
قزوین	کوهین
قزوین	رازمیان
قزوین	خرمدشت
قزوین	آبگرم
قزوین	شال
قزوین	شریفیه
قزوین	اقبالیه
قزوین	نرجه
قزوین	ارداق
قزوین	الوند
قزوین	خاکعلی
قزوین	سیردان
قزوین	ضیاڈآباد
قزوین	بویین زهرا
قزوین	محمدیه
قزوین	محمودآبادنمونه
قزوین	معلم کلایه
قزوین	اسفرورین
قزوین	آوج
قزوین	دانسفهان
قزوین	آبیک
قزوین	قزوین
قزوین	تاکستان
قم	کهک
قم	قم
قم	سلفچگان
قم	جعفریه
قم	قنوات
قم	دستجرد
کردستان	قروه
کردستان	توپ آغاج
کردستان	سروآباد
کردستان	بویین سفلی
کردستان	زرینه
کردستان	دلبران
کردستان	سنندج
کردستان	یاسوکند
کردستان	موچش
کردستان	بانه
کردستان	مریوان
کردستان	سریش آباد
کردستان	صاحب
کردستان	دهگلان
کردستان	بابارشانی
کردستان	دیواندره
کردستان	برده رشه
کردستان	شویشه
کردستان	بیجار
کردستان	اورامان تخت
کردستان	کانی سور
کردستان	کانی دینار
کردستان	دزج
کردستان	سقز
کردستان	بلبان آباد
کردستان	پیرتاج
کردستان	کامیاران
کردستان	آرمرده
کردستان	چناره
کرمان	کهنوج
کرمان	بلوک
کرمان	پاریز
کرمان	گنبکی
کرمان	زنگی آباد
کرمان	بم
کرمان	خانوک
کرمان	کیانشهر
کرمان	جوپار
کرمان	عنبرآباد
کرمان	جوزم
کرمان	نظام شهر
کرمان	لاله زار
کرمان	کشکوییه
کرمان	زیدآباد
کرمان	هنزا
کرمان	چترود
کرمان	جبالبارز
کرمان	سیرجان
کرمان	رودبار
کرمان	کرمان
کرمان	بافت
کرمان	صفاییه
کرمان	منوجان
کرمان	اندوهجرد
کرمان	هجدک
کرمان	خورسند
کرمان	امین شهر
کرمان	بردسیر
کرمان	رفسنجان
کرمان	هماشهر
کرمان	محمدآباد
کرمان	اختیارآباد
کرمان	بروات
کرمان	ریحان
کرمان	کوهبنان
کرمان	ماهان
کرمان	دوساری
کرمان	دهج
کرمان	فاریاب
کرمان	گلزار
کرمان	بهرمان
کرمان	بلورد
کرمان	فهرج
کرمان	کاظم آباد
کرمان	جیرفت
کرمان	نجف شهر
کرمان	قلعه گنج
کرمان	باغین
کرمان	بزنجان
کرمان	زرند
کرمان	نودژ
کرمان	گلباف
کرمان	راور
کرمان	خاتون اباد
کرمان	نرماشیر
کرمان	دشتکار
کرمان	مس سرچشمه
کرمان	خواجو شهر
کرمان	رابر
کرمان	راین
کرمان	درب بهشت
کرمان	یزدان شهر
کرمان	زهکلوت
کرمان	محی آباد
کرمان	مردهک
کرمان	شهداد
کرمان	ارزوییه
کرمان	نگار
کرمان	شهربابک
کرمان	انار
کرمانشاه	سنقر
کرمانشاه	شاهو
کرمانشاه	بانوره
کرمانشاه	تازه آباد
کرمانشاه	هلشی
کرمانشاه	جوانرود
کرمانشاه	قصرشیرین
کرمانشاه	نوسود
کرمانشاه	کرند
کرمانشاه	کوزران
کرمانشاه	بیستون
کرمانشاه	حمیل
کرمانشاه	گیلانغرب
کرمانشاه	سطر
کرمانشاه	روانسر
کرمانشاه	پاوه
کرمانشاه	ازگله
کرمانشاه	کرمانشاه
کرمانشاه	میان راهان
کرمانشاه	کنگاور
کرمانشاه	سرپل ذهاب
کرمانشاه	ریجاب
کرمانشاه	باینگان
کرمانشاه	هرسین
کرمانشاه	اسلام آبادغرب
کرمانشاه	سرمست
کرمانشاه	سومار
کرمانشاه	نودشه
کرمانشاه	گهواره
کرمانشاه	رباط
کرمانشاه	صحنه
کرمانشاه	گودین
کهگیلویه وبویراحمد	گراب سفلی
کهگیلویه وبویراحمد	لنده
کهگیلویه وبویراحمد	سی سخت
کهگیلویه وبویراحمد	دهدشت
کهگیلویه وبویراحمد	یاسوج
کهگیلویه وبویراحمد	سرفاریاب
کهگیلویه وبویراحمد	دوگنبدان
کهگیلویه وبویراحمد	چیتاب
کهگیلویه وبویراحمد	لیکک
کهگیلویه وبویراحمد	دیشموک
کهگیلویه وبویراحمد	مادوان
کهگیلویه وبویراحمد	باشت
کهگیلویه وبویراحمد	پاتاوه
کهگیلویه وبویراحمد	قلعه رییسی
کهگیلویه وبویراحمد	مارگون
کهگیلویه وبویراحمد	چرام
کهگیلویه وبویراحمد	سوق
گلستان	سیمین شهر
گلستان	مزرعه
گلستان	رامیان
گلستان	فراغی
گلستان	گنبدکاووس
گلستان	کردکوی
گلستان	مراوه
گلستان	بندرترکمن
گلستان	نگین شهر
گلستان	آق قلا
گلستان	سرخنکلاته
گلستان	گالیکش
گلستان	سنگدوین
گلستان	دلند
گلستان	بندرگز
گلستان	نوده خاندوز
گلستان	مینودشت
گلستان	گرگان
گلستان	گمیش تپه
گلستان	علی اباد
گلستان	خان ببین
گلستان	کلاله
گلستان	اینچه برون
گلستان	فاضل آباد
گلستان	تاتارعلیا
گلستان	نوکنده
گلستان	آزادشهر
گلستان	انبارآلوم
گلستان	جلین
گیلان	منجیل
گیلان	شلمان
گیلان	خشکبیجار
گیلان	ماکلوان
گیلان	سنگر
گیلان	مرجقل
گیلان	لیسار
گیلان	رضوانشهر
گیلان	رحیم آباد
گیلان	لوندویل
گیلان	احمدسرگوراب
گیلان	لوشان
گیلان	اطاقور
گیلان	لشت نشاء
گیلان	فومن
گیلان	چوبر
گیلان	بازار جمعه
گیلان	کلاچای
گیلان	بندرانزلی
گیلان	املش
گیلان	رستم آباد
گیلان	لاهیجان
گیلان	توتکابن
گیلان	لنگرود
گیلان	کوچصفهان
گیلان	صومعه سرا
گیلان	اسالم
گیلان	دیلمان
گیلان	رودسر
گیلان	کیاشهر
گیلان	شفت
گیلان	رودبار
گیلان	کومله
گیلان	رشت
گیلان	ماسوله
گیلان	خمام
گیلان	ماسال
گیلان	واجارگاه
گیلان	هشتپر (تالش)
گیلان	پره سر
گیلان	بره سر
گیلان	آستارا
گیلان	رودبنه
گیلان	جیرنده
گیلان	چاف و چمخاله
گیلان	لولمان
گیلان	گوراب زرمیخ
گیلان	حویق
گیلان	سیاهکل
گیلان	چابکسر
گیلان	آستانه اشرفیه
گیلان	رانکوه
لرستان	چالانچولان
لرستان	بیران شهر
لرستان	ویسیان
لرستان	شول آباد
لرستان	پلدختر
لرستان	کوهدشت
لرستان	هفت چشمه
لرستان	بروجرد
لرستان	الشتر
لرستان	مومن آباد
لرستان	دورود
لرستان	زاغه
لرستان	چقابل
لرستان	الیگودرز
لرستان	معمولان
لرستان	کوهنانی
لرستان	نورآباد
لرستان	سپیددشت
لرستان	سراب دوره
لرستان	ازنا
لرستان	گراب
لرستان	خرم آباد
لرستان	اشترینان
لرستان	فیروزآباد
لرستان	درب گنبد
مازندران	گلوگاه
مازندران	گلوگاه
مازندران	پل سفید
مازندران	دابودشت
مازندران	چالوس
مازندران	کیاسر
مازندران	بهنمیر
مازندران	تنکابن
مازندران	کلاردشت
مازندران	ایزدشهر
مازندران	گتاب
مازندران	سلمان شهر
مازندران	ارطه
مازندران	امیرکلا
مازندران	کوهی خیل
مازندران	پایین هولار
مازندران	گزنک
مازندران	محمودآباد
مازندران	رامسر
مازندران	نوشهر
مازندران	خلیل شهر
مازندران	کیاکلا
مازندران	نور
مازندران	مرزیکلا
مازندران	فریدونکنار
مازندران	زیرآب
مازندران	امامزاده عبدالله
مازندران	هچیرود
مازندران	فریم
مازندران	هادی شهر
مازندران	نشتارود
مازندران	پول
مازندران	بهشهر
مازندران	کلارآباد
مازندران	بلده
مازندران	بابل
مازندران	جویبار
مازندران	آلاشت
مازندران	آمل
مازندران	نکا
مازندران	کتالم وسادات شهر
مازندران	بابلسر
مازندران	شیرود
مازندران	شیرگاه
مازندران	رویان
مازندران	زرگرمحله
مازندران	عباس اباد
مازندران	قایم شهر
مازندران	خوش رودپی
مازندران	مرزن آباد
مازندران	ساری
مازندران	رینه
مازندران	سرخرود
مازندران	خرم آباد
مازندران	کجور
مازندران	رستمکلا
مازندران	سورک
مازندران	چمستان
مرکزی	آستانه
مرکزی	خنجین
مرکزی	نراق
مرکزی	کمیجان
مرکزی	آشتیان
مرکزی	رازقان
مرکزی	مهاجران
مرکزی	غرق آباد
مرکزی	خنداب
مرکزی	قورچی باشی
مرکزی	خشکرود
مرکزی	ساروق
مرکزی	محلات
مرکزی	شازند
مرکزی	ساوه
مرکزی	میلاجرد
مرکزی	تفرش
مرکزی	زاویه
مرکزی	اراک
مرکزی	توره
مرکزی	نوبران
مرکزی	فرمهین
مرکزی	دلیجان
مرکزی	پرندک
مرکزی	کارچان
مرکزی	نیمور
مرکزی	هندودر
مرکزی	آوه
مرکزی	جاورسیان
مرکزی	خمین
مرکزی	مامونیه
مرکزی	داودآباد
مرکزی	شهباز
هرمزگان	بیکاء
هرمزگان	تیرور
هرمزگان	گروک
هرمزگان	قشم
هرمزگان	کوشکنار
هرمزگان	کیش
هرمزگان	سرگز
هرمزگان	بندرعباس
هرمزگان	زیارتعلی
هرمزگان	سندرک
هرمزگان	کوهستک
هرمزگان	لمزان
هرمزگان	رویدر
هرمزگان	قلعه قاضی
هرمزگان	فارغان
هرمزگان	ابوموسی
هرمزگان	هشتبندی
هرمزگان	سردشت
هرمزگان	درگهان
هرمزگان	پارسیان
هرمزگان	کنگ
هرمزگان	جناح
هرمزگان	تازیان پایین
هرمزگان	دهبارز
هرمزگان	میناب
هرمزگان	سیریک
هرمزگان	سوزا
هرمزگان	خمیر
هرمزگان	چارک
هرمزگان	حاجی اباد
هرمزگان	فین
هرمزگان	بندرجاسک
هرمزگان	گوهران
هرمزگان	هرمز
هرمزگان	دشتی
هرمزگان	بندرلنگه
هرمزگان	بستک
هرمزگان	تخت
همدان	زنگنه
همدان	دمق
همدان	سرکان
همدان	آجین
همدان	جورقان
همدان	برزول
همدان	فامنین
همدان	سامن
همدان	بهار
همدان	فرسفج
همدان	شیرین سو
همدان	مریانج
همدان	فیروزان
همدان	قروه درجزین
همدان	ازندریان
همدان	لالجین
همدان	گل تپه
همدان	گیان
همدان	ملایر
همدان	صالح آباد
همدان	تویسرکان
همدان	اسدآباد
همدان	همدان
همدان	نهاوند
همدان	رزن
همدان	جوکار
همدان	مهاجران
همدان	کبودرآهنگ
همدان	قهاوند
یزد	مروست
یزد	مهردشت
یزد	حمیدیا
یزد	تفت
یزد	اشکذر
یزد	ندوشن
یزد	یزد
یزد	عقدا
یزد	بهاباد
یزد	ابرکوه
یزد	زارچ
یزد	نیر
یزد	اردکان
یزد	هرات
یزد	بفروییه
یزد	شاهدیه
یزد	بافق
یزد	خضرآباد
یزد	میبد
یزد	مهریز
یزد	احمدآباد';
$dataArray = explode("\n",$data);
echo '<pre>';
print_r($dataArray);
echo '</pre>';