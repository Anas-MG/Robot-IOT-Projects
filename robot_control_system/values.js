// update the label value and post the new value to the php file
var gripper = document.getElementById("gripper");
var g_out = document.getElementById("gripper-oput");
g_out.innerHTML = gripper.value;
gripper.oninput = function () {
  g_out.innerHTML = this.value;
};
gripper.onchange = function () {
  $.post("db_update.php", {
    gripper: gripper.value,
  });
};

var wrist = document.getElementById("wrist");
var w_out = document.getElementById("wrist-oput");
w_out.innerHTML = wrist.value;
wrist.oninput = function () {
  w_out.innerHTML = this.value;
};
wrist.onchange = function () {
  $.post("db_update.php", {
    wrist: wrist.value,
  });
};

var elbow = document.getElementById("elbow");
var e_out = document.getElementById("elbow-oput");
e_out.innerHTML = elbow.value;
elbow.oninput = function () {
  e_out.innerHTML = this.value;
};
elbow.onchange = function () {
  $.post("db_update.php", {
    elbow: elbow.value,
  });
};

var shoulder = document.getElementById("shoulder");
var s_out = document.getElementById("shoulder-oput");
s_out.innerHTML = shoulder.value;
shoulder.oninput = function () {
  s_out.innerHTML = this.value;
};
shoulder.onchange = function () {
  $.post("db_update.php", {
    shoulder: shoulder.value,
  });
};

var arm_base = document.getElementById("arm_base");
var b_out = document.getElementById("arm_base-oput");
b_out.innerHTML = arm_base.value;
arm_base.oninput = function () {
  b_out.innerHTML = this.value;
};
arm_base.onchange = function () {
  $.post("db_update.php", {
    arm_base: arm_base.value,
  });
};

//reseting values to 90degree onclicking reset button "هنا !"
var reset = document.getElementById("reset");
var start = 0;
reset.onclick = function () {
  $.post("db_update.php", {
    gripper: "90",
    wrist: "90",
    elbow: "90",
    shoulder: "90",
    arm_base: "90",
  });
  $.post("db_update.php", { start: start });
  gripper.value = "90";
  wrist.value = "90";
  elbow.value = "90";
  shoulder.value = "90";
  arm_base.value = "90";
  setTimeout(function () {
    document.location.reload();
  }, 100);
};
//continuasly updating navigate post with the new navigations
var right = document.getElementById("right");
right.onclick = function () {
  $.post("db_update.php", {
    navigate: "right",
  });
};
var left = document.getElementById("left");
left.onclick = function () {
  $.post("db_update.php", {
    navigate: "left",
  });
};

var backward = document.getElementById("backward");
backward.onclick = function () {
  $.post("db_update.php", {
    navigate: "backward",
  });
};

var forward = document.getElementById("forward");
forward.onclick = function () {
  $.post("db_update.php", {
    navigate: "forward",
  });
};

//controlling on and off button for the main base, posting 1 when clicking when 'ON' and 0 when clicking 'OFF'
var on = document.getElementById("on");
start = 0;
function onStart() {
  if (on.value === "ON") {
    on.value = "OFF";

    start = 1;
  } else {
    on.value = "ON";
    start = 0;
  }
  on.classList.toggle("clicked");

  $.post("db_update.php", {
    start: start,
  });
}
