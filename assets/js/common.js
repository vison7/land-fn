function submitForm() {
  const form = document.getElementById("frm-case");

  $("#contact_name").val(getCookie("xname"));
  $("#contact_email").val(getCookie("xemail"));

  const formData = new FormData(form);

  fetch(API_URL_SUBMIT_CASE +"?token="+ API_TOKEN, {
    method: "POST",
    // body: new URLSearchParams($("#frm-case").serialize()),
    body: formData,
  })
    .then((response) => response.json())
    .then((data) => {
      console.log("Success:", data);
      alert("Submit case success!");
      form.reset();
    })
    .catch((error) => {
      console.error("Error:", error);
      alert("Submit case error!");
    });

  return false;
}

function xsubmitForm() {
  const form = document.getElementById("frm-case");

  //   verify user login
  FB.api("/me?fields=id,name,email", function (response) {
    if (response.name) {
      $("#contact_name").val(getCookie("xname"));
      $("#contact_email").val(getCookie("xemail"));
      // $("#contact_name").val();

      fetch("/cases/submit", {
        method: "POST",
        body: new URLSearchParams($("#frm-case").serialize()),
      })
        .then((response) => response.json())
        .then((data) => {
          console.log("Success:", data);
        })
        .catch((error) => {
          console.error("Error:", error);
        });
    } else {
      alert("Please login again.");
    }
  });

  return false;
}
