function myfunction()
{
	
	var st = document.getElementById("input3").value;
	var status ="status" + st;
	
	/*var mygetrequest = new XMLHttpRequest();
	mygetrequest.open("POST", "my.php", true);
	mygetrequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	mygetrequest.send(status);
		/*mygetrequest.onreadystatechange= function() {
			if (mygetrequest.readyState==4){
				if (mygetrequest.status==200 || window.location.href.indexOf("http")==-1){
				var resp = mygetrequest.responseText;
				//document.write(resp);
				}
			}
		}*/
	document.getElementById("input3").value="";
}

	function clickHandler(e) {
	setTimeout(myfunction, 10000);
	}
	
	document.addEventListener('DOMContentLoaded', function () {
	document.querySelector('button').addEventListener('click', clickHandler);
	});
	