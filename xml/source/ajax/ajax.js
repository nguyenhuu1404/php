// JavaScript Document

function create_obj(){
	td=navigator.appName;
	if(td == "Microsoft Internet Explorer"){
		obj= new ActiveXObject("Microsoft.XMLHTTP");	
	}else{
		obj= new XMLHttpRequest();	
	}
	return obj;
}

var http=create_obj();

function getdata(id){
	http.open("get","get.php?data="+id,true);
	http.onreadystatechange=process;
	http.send(null);
}

function process(){
	if(http.readyState == 4 && http.status == 200){
		kq=http.responseXML;
		title=kq.getElementsByTagName("title").item(0).firstChild.nodeValue;
		info=kq.getElementsByTagName("info").item(0).firstChild.nodeValue;
		img=kq.getElementsByTagName("img").item(0).firstChild.nodeValue;
		document.getElementById("title").innerHTML=title;
		document.getElementById("img").innerHTML="<img src='"+img+"' width='150' />";
		document.getElementById("info").innerHTML=info;
	}
}