<?php
$pageTitle = 'Dashboard';
include 'init.php';
include $tpl . 'header.php';
?>

<style>
   /* Style main content */
   main {
      padding: 20px;
      background-image: url(images/background.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      background-attachment: fixed;
      text-align: center;
   }

   .table-container {
      padding: 10px 0;

   }

   main h1 {
      margin-bottom: 10px;
      background-color: #d60c3e;
      border-radius: 20px;
      padding: 10px 20px;
      font-weight: 600;
   }

   table {
      width: 100%;
      border-collapse: collapse;
      background-color: rgba(255, 255, 255, 0.5);
   }

   th,
   td {
      padding: 12px;
      border-bottom: 1px solid #ddd;
      text-align: center;
   }

   th {
      background-color: rgba(0, 0, 0, 0.7);
      color: #fff;
      font-weight: 600;
   }

   td {
      font-weight: 500;
   }

   tr:nth-child(even) {
      background-color: rgba(128, 128, 128, 0.2);
   }

   tr:hover td,
   tr:hover td a {
      background-color: #d60c3e;
      color: #fff;
   }

   table a {
      text-decoration: none;
      color: blue;
   }
</style>

<main>
   <section class="table-container" id="saturday">
      <h1>مواعيد السبت</h1>
      <table>
         <tr>
            <th>Center</th>
            <th>Location</th>
         </tr>
         <tr>
            <td>GHT الشروق</td>
            <td>
               <a href="https://goo.gl/maps/aRiRhNRT1KGmeg3i8" target="_blank" rel="noopener" title="Open in Google Maps">ع٨ شارع ميلاد حنه ..المجاورة الأولي شرق بجوار كابينة الكهرباء</a>
            </td>
         </tr>
         <tr>
            <td>Oxford City</td>
            <td>
               <a href="https://goo.gl/maps/5amiTYandnziqjx28" target="_blank" rel="noopener" title="Open in Google Maps">١٦ ش احمد فخري بجوار مسجد الحمد</a>
            </td>
         </tr>
      </table>
   </section>

   <section class="table-container" id="sunday">
      <h1>مواعيد الأحد</h1>
      <table>
         <tr>
            <th>Center</th>
            <th>Location</th>
         </tr>
         <tr>
            <td>بروفيشنال شبرا</td>
            <td>
               <a href="https://goo.gl/maps/QTic9kBmgTiUgKB98" target="_blank" rel="noopener" title="Open in Google Maps">أبراج العرب بجوار صبحي كابر، شبرا</a>
            </td>
         </tr>
         <tr>
            <td>حزب العمل</td>
            <td>
               <a href="https://goo.gl/maps/xZMVQRHqCYAEdKRJ9" target="_blank" rel="noopener" title="Open in Google Maps">بجوار مدرسة الخديوية السيدة زينب</a>
            </td>
         </tr>
         <tr>
            <td>New Star</td>
            <td>
               <a href="https://goo.gl/maps/NS2qzCuZ1Bx1FFMa7" target="_blank" rel="noopener" title="Open in Google Maps">٩ شارع الجزائر بجوار كارفور اكسبرس المعادي</a>
            </td>
         </tr>
         <tr>
            <td>ناسا المعادي</td>
            <td>
               <a href="https://goo.gl/maps/pEa7jdLdNYAX2qmH7" target="_blank" rel="noopener" title="Open in Google Maps">عمارة 45 أمام سنتر المعراج التجاري خلف سيتي سنتر كارفور
                  المعراج</a>
            </td>
         </tr>
      </table>
   </section>

   <section class="table-container" id="monday">
      <h1>مواعيد الأثنين</h1>
      <table>
         <tr>
            <th>Center</th>
            <th>Location</th>
         </tr>
         <tr>
            <td>Smart Dokki</td>
            <td>
               <a href="https://goo.gl/maps/faYMUgpPBvMwyaPY9" target="_blank" rel="noopener" title="Open in Google Maps">محطة مترو أنفاق الدقي شارع حسين واصف
               </a>
            </td>
         </tr>
         <tr>
            <td>Smart Haram</td>
            <td>
               <a href="https://goo.gl/maps/v3KFnWxybjX1Y2RP8" target="_blank" rel="noopener" title="Open in Google Maps">شارع حسن محمد من فيصل</a>
            </td>
         </tr>
         <tr>
            <td>Smart October</td>
            <td>
               <a href="https://goo.gl/maps/tA4dvogQ1zMjm6v56" target="_blank" rel="noopener" title="Open in Google Maps">٦ أكتوبر الحي السابع بجوار المفاوضية وأعلي جيم ماستر</a>
            </td>
         </tr>
      </table>
   </section>

   <section class="table-container" id="tuesday">
      <h1>مواعيد الثلاثاء</h1>
      <table>
         <tr>
            <th>Center</th>
            <th>Location</th>
         </tr>
         <tr>
            <td>Top Academy</td>
            <td>
               <a href="https://maps.app.goo.gl/3D7Xbc59MJ6bDwVDA" target="_blank" rel="noopener" title="Open in Google Maps">التجمع الاول بجوار جولدن ماركت</a>
            </td>
         </tr>
         <tr>
            <td>ماراثون</td>
            <td>
               <a href="https://goo.gl/maps/hVa1a7YqT585LHwk6" target="_blank" rel="noopener" title="Open in Google Maps">امتداد الجولف أمام المدرسة المصرية للغات التجمع الخامس</a>
            </td>
         </tr>
         <tr>
            <td>New Star</td>
            <td>
               <a href="https://goo.gl/maps/NS2qzCuZ1Bx1FFMa7" target="_blank" rel="noopener" title="Open in Google Maps">٩ شارع الجزائر بجوار كارفور اكسبرس المعادي</a>
            </td>
         </tr>
         <tr>
            <td>سمارت حدائق حلوان</td>
            <td>
               <a href="https://maps.app.goo.gl/utNCLhDocFXTNuK16" target="_blank" rel="noopener" title="Open in Google Maps">حدائق حلوان بجوار أولاد رجب شارع حسن حسني</a>
            </td>
         </tr>
         <tr>
            <td>ناسا المقطم</td>
            <td>
               <a href="https://maps.app.goo.gl/5KeBCaRPrXhypYUg9" target="_blank" rel="noopener" title="Open in Google Maps">المقطم شارع الشهيد كريم بنونة</a>
            </td>
         </tr>
      </table>
   </section>

   <section class="table-container" id="wednesday">
      <h1>مواعيد الأربع</h1>
      <table>
         <tr>
            <th>Center</th>
            <th>Location</th>
         </tr>
         <tr>
            <td>Oxford City</td>
            <td>
               <a href="https://goo.gl/maps/5amiTYandnziqjx28" target="_blank" rel="noopener" title="Open in Google Maps">١٦ ش احمد فخري بجوار مسجد الحمد</a>
            </td>
         </tr>
         <tr>
            <td>TASC</td>
            <td>
               <a href="https://goo.gl/maps/MBaqegPyUSL4Wacw6" target="_blank" rel="noopener" title="Open in Google Maps">شارع البحر شيراتون
               </a>
            </td>
         </tr>
         <tr>
            <td>الياسمين</td>
            <td>
               <a href="https://goo.gl/maps/JqHU4yxvUNqZznir5" target="_blank" rel="noopener" title="Open in Google Maps">شارع الجنزوري أمام بنك مصر العباسية عبدو باشا</a>
            </td>
         </tr>
         <tr>
            <td>الخليفة</td>
            <td>
               <a href="https://goo.gl/maps/mWzPTM2zNjKMqkb56" target="_blank" rel="noopener" title="Open in Google Maps">٦١ش المقريزي بجوار صيدلية القماح</a>
            </td>
         </tr>
      </table>
   </section>

   <section class="table-container" id="thursday">
      <h1>مواعيد الخميس</h1>
      <table>
         <tr>
            <th>Center</th>
            <th>Location</th>
         </tr>
         <tr>
            <td>Learn Dokki</td>
            <td>
               <a href="https://goo.gl/maps/jkSDiRK5BdirZZj2A" target="_blank" rel="noopener" title="Open in Google Maps">٧ شارع الموسيقار علي إسماعيل بجوار مستشفى ٦ أكتوبر أعلى أسواق
                  العثيم ميدان المساحة</a>
            </td>
         </tr>
         <tr>
            <td>A-One</td>
            <td>
               <a href="https://goo.gl/maps/df4twNsMLrNNshwi8" target="_blank" rel="noopener" title="Open in Google Maps">١٢ فاطمة رشدي متفرع من شارع الهرم أو خاتم المرسلين
               </a>
            </td>
         </tr>
         <tr>
            <td>Alpha Haram</td>
            <td>
               <a href="https://goo.gl/maps/4jwVqGDrZ4TQPLDs6" target="_blank" rel="noopener" title="Open in Google Maps">مول الهرم أعلى سوبر ماركت أولاد رجب</a>
            </td>
         </tr>
      </table>
   </section>

   <section class="table-container" id="friday">
      <h1>مواعيد الجمعة</h1>
      <table>
         <tr>
            <th>Center</th>
            <th>Location</th>
         </tr>
         <tr>
            <td>سيدات مصر</td>
            <td>
               <a href="https://goo.gl/maps/kgPqXnSWKfANzGd18" target="_blank" rel="noopener" title="Open in Google Maps">ميدان المحكمة بجوار كوبري التجنيد ونادي النصر مصر الجديدة
               </a>
            </td>
         </tr>
         <tr>
            <td>Center K</td>
            <td>
               <a href="https://maps.app.goo.gl/11Dmmaq9gGJG9JyW7" target="_blank" rel="noopener" title="Open in Google Maps">جسر السويس ميدان الألف مسكن</a>
            </td>
         </tr>
      </table>
   </section>
</main>

<?php include $tpl . 'footer.php'; ?>