document.addEventListener("DOMContentLoaded", statusLoginCallback);

function statusLoginCallback() {
  if (getCookie("xauth")) {
    show_submit();
    document.getElementById("login-name").innerHTML = getCookie("xname");
    console.log("Check login...");
  }
}

// facebook
function fb_statusChangeCallback(response) {
  if (response.status === "connected") {
    // Logged into your webpage and Facebook.
    console.log("statusChangeCallback: login > ", response);
    fb_getInfo();
  } else {
    // Not logged into your webpage or we are unable to tell.
    // console.log("statusChangeCallback: No login");
  }
}

function fb_checkLoginState() {
  // Called when a person is finished with the Login Button.
  FB.getLoginStatus(function (response) {
    // See the onlogin handler
    fb_statusChangeCallback(response);
  });
}

window.fbAsyncInit = function () {
  FB.init({
    appId: "1029068792080458",
    cookie: true, // Enable cookies to allow the server to access the session.
    xfbml: true, // Parse social plugins on this webpage.
    version: "v20.0", // Use this Graph API version for this call.
  });

  FB.getLoginStatus(function (response) {
    // Called after the JS SDK has been initialized.
    fb_statusChangeCallback(response); // Returns the login status.
  });
};

function fb_getInfo() {
  FB.api("/me?fields=id,name,email", function (response) {
    // console.log("Successful login for: ", response);
    show_submit();

    document.getElementById("login-name").innerHTML = response.name;

    setCookie("xauth", "fb");
    setCookie("xname", response.name);
    setCookie("xemail", response.email);
  });
}
function fb_login() {
  FB.login(
    function (response) {
      fb_statusChangeCallback(response);
    },
    { scope: "public_profile,email" }
  );
}

function show_submit() {
  document
    .getElementById("submit-a-case-form")
    .setAttribute("style", "display:");
  document
    .getElementById("submit-a-case")
    .setAttribute("style", "display:none");
}

function hide_submit() {
  document
    .getElementById("submit-a-case-form")
    .setAttribute("style", "display:none");
  document.getElementById("submit-a-case").setAttribute("style", "display:");
}

// gmail
function gmail_login() {
  google.accounts.id.initialize({
    client_id:
      "109000080345-ktshji0vgf18fpg4dqtt5lhkv5l5at5r.apps.googleusercontent.com",
    callback: gmail_handleCredentialResponse,
  });

  google.accounts.id.prompt();
  google.accounts.id.prompt((notification) => {
    if (notification.isNotDisplayed() || notification.isSkippedMoment()) {
      // try next provider if OneTap is not displayed or skipped
    }
  });
}

function gmail_handleCredentialResponse(response) {
  const responsePayload = JSON.parse(decode_base64(response.credential));

  show_submit();
  console.log("Gmail:", responsePayload);

  document.getElementById("login-name").innerHTML = responsePayload.name;

  setCookie("xauth", "gm");
  setCookie("xname", responsePayload.name);
  setCookie("xemail", responsePayload.email);
}

function logout() {
  deleteCookie("xauth");
  deleteCookie("xname");
  deleteCookie("xemail");

  hide_submit();
}

function decode_base64(token) {
  const arrayToken = token.split(".");
  const s = arrayToken[1];

  var e = {},
    i,
    k,
    v = [],
    r = "",
    w = String.fromCharCode;
  var n = [
    [65, 91],
    [97, 123],
    [48, 58],
    [43, 44],
    [47, 48],
  ];

  for (z in n) {
    for (i = n[z][0]; i < n[z][1]; i++) {
      v.push(w(i));
    }
  }
  for (i = 0; i < 64; i++) {
    e[v[i]] = i;
  }

  for (i = 0; i < s.length; i += 72) {
    var b = 0,
      c,
      x,
      l = 0,
      o = s.substring(i, i + 72);
    for (x = 0; x < o.length; x++) {
      c = e[o.charAt(x)];
      b = (b << 6) + c;
      l += 6;
      while (l >= 8) {
        r += w((b >>> (l -= 8)) % 256);
      }
    }
  }
  return r;
}

// Function to set a cookie
function setCookie(name, value, days) {
  var expires = "";
  if (days) {
    var date = new Date();
    date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
    expires = "; expires=" + date.toUTCString();
  }
  document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function deleteCookie(name) {
  document.cookie = name + "=; Max-Age=-99999999; path=/";
}

// Function to get a cookie
function getCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(";");
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == " ") c = c.substring(1, c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
  }
  return null;
}
