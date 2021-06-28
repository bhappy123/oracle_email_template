httpRequest = new XMLHttpRequest();
const onClickCopyCode = (element) => {
  navigator.clipboard.writeText(element);
  alert("Copy Successful");
};

document.addEventListener("DOMContentLoaded", () => {
  const codes = `<body style="-ms-text-size-adjust:100%;font-family:Arial, Helvetica, sans-serif;font-size:16px;margin:0 auto !important;padding:0 !important;height:100% !important;width:100% !important;-ms-text-size-adjust: 100%;">${document.body.innerHTML}</body>`;
  makeRequest("../controller/test.php", codes);
  const codeNode = document.createTextNode(codes);
  let body = document.getElementsByTagName("body")[0];
  let newdiv = document.createElement("div");
  let newBtn = document.createElement("button");
  let preElement = document.createElement("pre");
  let newCode = document.createElement("code");
  newCode.appendChild(codeNode);
  newBtn.appendChild(document.createTextNode("Copy Code"));
  newBtn.id = "copycode";
  preElement.appendChild(newCode);
  newdiv.appendChild(newBtn);
  newdiv.appendChild(preElement);
  newdiv.id = "newid";
  body.appendChild(newdiv);

  newBtn.addEventListener("click", () => onClickCopyCode(codes));
  console.log(codes);
});

function makeRequest(url, htmlCodes) {
  httpRequest.onreadystatechange = alertContents;
  httpRequest.open("POST", url);
  httpRequest.setRequestHeader(
    "Content-Type",
    "application/x-www-form-urlencoded"
  );
  httpRequest.send("htmlCodes=" + encodeURIComponent(htmlCodes));
}

function alertContents() {
  if (httpRequest.readyState === XMLHttpRequest.DONE) {
    if (httpRequest.status === 200) {
      console.log("success");
      let body = document.getElementsByTagName("body")[0];
      let redirectUrl = document.createElement("a");
      redirectUrl.href = "../download.html";
      redirectUrl.id = "download-btn";
      redirectUrl.innerText = "download page";
      body.appendChild(redirectUrl);
    } else {
      alert("There was a problem with the request.");
    }
  }
}
