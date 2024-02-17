function validate(){
	var login=document.regform.logins.value;
	var pasw=document.regform.parole.value;
debugger;
if (login===""||login.lenght===0||pasw===""||pasw.lengh===0){
	alert("Jāizpilda ar zvaigznīti atzīmētie lauki!");
	document.regform.logins.focus();
	return false;
      }
      else{
       //  alert("Lietotāja vārds un parole ir ievadīti.");
       }
}