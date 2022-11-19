function haslomaslo() {
    var x = document.getElementById("inputpass");
    var y = document.getElementById("ikonka");
    if (x.type === "password") {
      x.type = "text";
      y.src="img/eyeopen.png"
    } else {
      x.type = "password";
      y.src="img/eyeclose.png"
    }
  }
  function haslomaslo2() {
    var z = document.getElementById("powtorzpass");
    var s = document.getElementById("ikonka2");
    if (z.type === "password") {
      z.type = "text";
      s.src="img/eyeopen.png"
    } else {
      z.type = "password";
      s.src="img/eyeclose.png"
    }
  }
  function passwordChanged() {
    var strength = document.getElementById('strength');
    var strongRegex = new RegExp("^(?=.{14,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
    var mediumRegex = new RegExp("^(?=.{10,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
    var enoughRegex = new RegExp("(?=.{8,}).*", "g");
    var pwd = document.getElementById("inputpass");
    if (pwd.value.length == 0) {
        strength.innerHTML = 'Podaj hasło';
    } else if (false == enoughRegex.test(pwd.value)) {
        strength.innerHTML = 'Wpisz więcej znaków';
    } else if (strongRegex.test(pwd.value)) {
        strength.innerHTML = '<span style="color:green">Silne!</span>';
    } else if (mediumRegex.test(pwd.value)) {
        strength.innerHTML = '<span style="color:orange">Średnie :/</span>';
    } else {
        strength.innerHTML = '<span style="color:red">Słabe :c</span>';
    }
}