// Create new recognition instance
const recognition = new webkitSpeechRecognition();
recognition.continuous = true;
recognition.lang = "ar-AE";
recognition.interimResults = false;
recognition.maxAlternatives = 1;

// Create new link Element
var link = document.createElement("link");
// set the attributes for link element
link.rel = "stylesheet";
link.type = "text/css";
link.href = "animation.css";
// loading start button in variable
const startBtn = document.querySelector("#start");
// add click event listener
startBtn.addEventListener("click", () => {
  speak("اهلا بك , أنَا روبوت التقييم , هل أَنتَ زائر أم مشْرِف");
  recognition.start();
});
// Creating arrays in trigger of simillar types of trigger words
const trigger = [
  ["مشرف", "زائر", "زاير"],
  // robot question
  ["الروبوتات", "نوع الروبوت", "عدد روبوتات"],
  // evaluation request
  ["تقييم", "اقيم", "تقييم "],
  // evaluation 5 and under
  ["واحد", "اثنان", "اثنين", "ثلاثه", "اربعه", "خمسه"],
  // evaluation above 5
  ["عشره", "سته", "سبعه", "ثمنية", "ثمانيه", "تسعه"],
  // welcome trigger
  ["سلام", "اهلين", "اهلا", "مَرْحَباً"],
  // how are you triggers
  ["كيف حالك", " حال يومك "],
  // what
  [" ايش هذا", " ماذا يوجد"],
  // good impressions
  ["رائع", "جميل", "متتع"],
  // who questions
  ["مين انت", "ايش اسمك", "من انت"],
  // bad impressions
  ["سيء", "ممل"],
];
const reply = [
  ["اهلا وسهلا, هل لديك استفسارات", "مَرْحَباً بك, كيف يمكنني خدْمَتُك"],
  // robot question
  [
    "يوجد ثلاثة انواع من الروبوتات هنا, 1 الروبوت المقاتل, 2 الذراع الروبوتية, 3 أَنا, روبوت التقييم",
  ],
  // evaluation request reply
  ["أَشْكُرُ لك اهتمامَك , لتقييم المكان الرجاء تحديد رقم من واحد الى عشرَه"],
  // evaluation 5 and under
  ["أسِفٌ لتخييب أمَلِك , أعِدُك بالافضل , سيتم حفظ تقييمك ووضعه فالحسبانْ"],
  // reply for evaluation above 5
  ["يسعدني ان المعرَض حاز على رضاكَ, نُرحِّبُ بكَ دوماً"],
  // welcome reply
  ["أهلا بك", "أهلا وسهلا", "مَرْحَباً", "عليكم السَّلَام"],
  // how are you reply
  [" انَا بحال جيد", "هذا يوم جيد للخدمة"],
  // what
  [
    "هذا معرض الاساليب الذكية ,  تجد هنا اذكى الروبوتات المساعدة",
    "هذا معرض  للروبوتات بشكلٍ عام",
  ],
  // good impressions
  [
    "انت شخص رائع ومتتع, من فضلك قيم المكان  من واحد الى عشرَه",
    "هذا محفز جدا اهلا بك في أي وقت",
  ],
  // who questions
  [
    "أنا روبوت التقييم , أساعدك في توصيل تقييمك للمهندسين القائمين على المعرض , وأُفيْدُك في بعض الاستفسارات",
  ],
  // bad in=mpressions
  ["الرجاء تزويدنا بملاحظاتك لتحسين جودة المعرض"],
];
const alternative = ["اعد من فضلك ", "مرة اخرى من فضلك", "حدد كلامك اكثر"];

// Create fucntion to compare sentence with triggers
function compare(triggerArray, replyArray, transcript) {
  let reply;
  let replys = [];
  // comparing triggerِArray with each word in sentence
  for (let x = 0; x < triggerArray.length; x++) {
    for (let y = 0; y < replyArray.length; y++) {
      var str = transcript;
      var hasTrigger = str.includes(triggerArray[x][y]);
      if (hasTrigger == true) {
        replys = replyArray[x];
        reply = replys[Math.floor(Math.random() * replys.length)];
        // post visitor rate to database (the trigger is based on arrays number)
        if (x == 3 || x == 4) {
          $.post("index.php", {
            rate: triggerArray[x][y],
          });
        }
      }
    }
  }
  return reply;
}

// Create function takes String and speaks it
function speak(string) {
  // Get HTML head element to append
  // link mouth animation to it
  document.getElementsByTagName("HEAD")[0].appendChild(link);

  const u = new SpeechSynthesisUtterance();
  u.volume = 2; // 0 to 1
  u.rate = 1; // 0.1 to 10
  u.pitch = 1; //0 to 2 interval
  u.text = string;
  u.lang = "ar-SA";
  speaking = window.speechSynthesis.speak(u);
  //remove mouth animation after speak finishes
  u.onend = () => {
    document.getElementsByTagName("HEAD")[0].removeChild(link);
  };
}

//
// coparing recognized transcript in compare function
recognition.onresult = (e) => {
  let transcript = e.results[e.results.length - 1][0].transcript.trim();

  if (compare(trigger, reply, transcript)) {
    // reply to trigger
    speak(compare(trigger, reply, transcript));
  } else {
    // if no triggers
    speak(alternative[Math.floor(Math.random() * alternative.length)]);
  }
};

//function supervisor() {
//   var name = document.getElementById("name");
//   if (name.innerHTML == "مشرف") {
//     recognition.onresult = (e) => {
//       var name = e.results[e.results.length - 1][0].transcript.trim();
//       $.post("index.php", {
//         name: name,
//       });
//     };
//   }
// }
// if (e.results[e.results.length - 1][0].transcript.trim().includes("مشرف")) {
//   speak("زودني بإسمك ورقمك التعريفي");
// } else if (
//   e.results[e.results.length - 2][0].transcript.trim().includes("مشرف")
// ) {
//   let name = e.results[e.results.length - 1][0].transcript.trim();
//   $.post("index.php", {
//     name: name,
//   });
//   speak("اهلا بك" + name);
// } else {}
