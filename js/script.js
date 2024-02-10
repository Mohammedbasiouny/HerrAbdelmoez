let toggleBtn = document.getElementById('toggle-btn');
let body = document.body;
let darkMode = localStorage.getItem('dark-mode');

const enableDarkMode = () =>{
   toggleBtn.classList.replace('fa-sun', 'fa-moon');
   body.classList.add('dark');
   localStorage.setItem('dark-mode', 'enabled');
}

const disableDarkMode = () =>{
   toggleBtn.classList.replace('fa-moon', 'fa-sun');
   body.classList.remove('dark');
   localStorage.setItem('dark-mode', 'disabled');
}

if(darkMode === 'enabled'){
   enableDarkMode();
}

toggleBtn.onclick = (e) =>{
   darkMode = localStorage.getItem('dark-mode');
   if(darkMode === 'disabled'){
      enableDarkMode();
   }else{
      disableDarkMode();
   }
}

let sideBar = document.querySelector('.side-bar');

document.querySelector('#menu-btn').onclick = () =>{
   sideBar.classList.toggle('active');
   body.classList.toggle('active');
}

// Lecture 
const centersByDay = {
   saturday: ["GHT الشروق", "Oxford City 1"],
   sunday: ["بروفيشنال شبرا", "حزب العمل","نيو ستار 1","ناسا المعادي"],
   monday: ["سمارت الدقي", "سمارت هرم (المجموعة الأساسية)", "سمارت هرم (كورس الإنقاذ)", "سمارت أكتوبر"],
   tuesday: ["Top Academy", "ماراثون", "نيو ستار 2", "سمارت حدايق حلوان", "ناسا المقطم"],
   wednesday: ["Oxford City 2", "تاسك", "الياسمين", "الخليفة"],
   thursday: ["ليرن الدقي", "A-One", "الفا هرم (المجموعة الأساسية)", "الفا هرم (كورس الإنقاذ)"],
   friday: ["سيدات مصر", "K"]
};

// قائمة للأيام
document.getElementById("day-select").addEventListener("change", updateCenters);

// تحديث قائمة السناتر عند تغيير اليوم
function updateCenters() {
   const selectedDay = document.getElementById("day-select").value;
   const centers = centersByDay[selectedDay];
   const centersContainer = document.getElementById("centers-container");

   // تفريغ قائمة السناتر لتحديثها
   centersContainer.innerHTML = "";

   // إنشاء روابط صفحات السناتر الجديدة وإضافتها إلى الصفحة
   centers.forEach(center => {
       const centerLink = document.createElement("a");
       centerLink.href = `centers/${center}/index.html`;
       centerLink.textContent = center;
       centerLink.classList.add("center-link");
       centersContainer.appendChild(centerLink);
   });
}