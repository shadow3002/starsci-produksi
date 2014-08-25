
function kuraudo(file) {
	this.xmlhttp = null;
	this.XMLHTTPREQUEST_MS_PROGIDS = new Array(
		"Msxml2.XMLHTTP.7.0",
		"Msxml2.XMLHTTP.6.0",
		"Msxml2.XMLHTTP.5.0",
		"Msxml2.XMLHTTP.4.0",
		"Msxml2.XMLHTTP.3.0",
		"Msxml2.XMLHTTP",
		"Microsoft.XMLHTTP"
	);

	this.resetData = function() {
		this.objID = null;
		this.method = "POST";
		this.URLString = "";
		this.requestFile = file;
		this.responseStatus = "";
  	};

	this.resetFunctions = function() {
  		this.onCompletion = function(){
			
		};
  		this.onError = function(){ 
		
		};
	};

	this.reset = function(){
		this.resetFunctions();
		this.resetData();
	};

	this.createAJAX = function(){
		var success = false;
		for (var i = 0; i < this.XMLHTTPREQUEST_MS_PROGIDS.length && !success; i ++) {
			try {
				this.xmlhttp = new ActiveXObject(XMLHTTPREQUEST_MS_PROGIDS[i]);
				success = true;
			} catch (ex) {
				this.xmlhttp = null;
			}
		}

		if (!this.xmlhttp) { //jika menggunakan non-IE 
			if(typeof XMLHttpRequest != "undefined") {
				this.xmlhttp = new XMLHttpRequest(); // instan object
			}else{
				this.failed = true;
			}
		}
	}

	this.runAJAX = function(urlstring) {
		if (this.failed) { //jika url gagal
			this.onFail();
		} else {
			if (this.xmlhttp) {
				var self = this;
				if (this.method == "GET") {
					this.xmlhttp.open(this.method, this.requestFile, true);
				} else {
					this.xmlhttp.open(this.method, this.requestFile, true);
					try {
						this.xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
						this.xmlhttp.setRequestHeader("Content-length", this.URLString );
						this.xmlhttp.setRequestHeader("Connection", "close");
					} catch (e) { }
				}
				this.xmlhttp.onreadystatechange = function() {
					switch (self.xmlhttp.readyState) { //jika status xml http request berubah
						case 1: break;
						case 2: break;
						case 3: break;
						case 4:
							self.response = self.xmlhttp.responseText; //response dari xml http request
							self.responseXML = self.xmlhttp.responseXML;
							self.responseStatus = self.xmlhttp.status; //respon http berupa angka
							
							if (self.responseStatus == "200") { //seleksi apakah file yang dicari ditemukan
								self.onCompletion();
							} else {
								self.onError(); // jika file tidak di temukan
							}
							self.URLString = "";
							delete self.xmlhttp['onreadystatechange'];
							self.xmlhttp=null;
							self.responseStatus=null;
							self.response=null;
							self.responseXML=null;		
							break;
					}
				}
				this.xmlhttp.send(this.URLString);
			}
		}
	}
	this.reset();
	this.createAJAX();
}

//Content

var jsCache = new Array(); //menampung segala respon content apakah sudah di load atau belum
var dynamicContent = new Array(); //variable untuk menampung segala content
var dynamicQuery = new Array(); //variabel untuk menampung kontenberquery

function showContent(divId,indexContent,url)
{
	var targetObj = document.getElementById(divId);
	if(targetObj.tagName=="INPUT" || targetObj.tagName=="TEXTAREA"){
		targetObj.value = dynamicContent[indexContent].response;
	}else{
		targetObj.innerHTML = dynamicContent[indexContent].response;
	}
	jsCache[url] = dynamicContent[indexContent].response;
	dynamicContent[indexContent] = false;
	parseJs(targetObj);
}

function request(divId,url,reLoad)
{
	if(jsCache[url]&& !reLoad){
		document.getElementById(divId).innerHTML = jsCache[url];
		parseJs(document.getElementById(divId));
		evaluateCss(document.getElementById(divId))
		return;
	}
	var indexContent = dynamicContent.length;
	dynamicContent[indexContent] = new kuraudo();
	dynamicContent[indexContent].method="POST";

	dynamicContent[indexContent].requestFile = url;
	dynamicContent[indexContent].objID = divId;
	dynamicContent[indexContent].onCompletion = function(){ 
		showContent(divId,indexContent,url);// jika onCompletion true maka fungsi showContent dilaksanakan
	}
	dynamicContent[indexContent].runAJAX();// menjalankan perintah request	
}

function parseJs(obj)
{
	var scriptTags = obj.getElementsByTagName('script');//tag type adalah script (javascript)
	var string = '';
	var jsCode = '';
	for(var no=0;no<scriptTags.length;no++){	
		if(scriptTags[no].src){
	        var head = document.getElementsByTagName("head")[0];
	        var scriptObj = document.createElement("script");
	        scriptObj.setAttribute("type", "text/javascript");
	        scriptObj.setAttribute("src", scriptTags[no].src);  	
		}else{
			if(navigator.userAgent.toLowerCase().indexOf('opera')>=0){
				jsCode = jsCode + scriptTags[no].text + '\n';
			}
			else
				jsCode = jsCode + scriptTags[no].innerHTML;	
		}
	}

	if(jsCode)installScript(jsCode);// jika script tidak dapat ditulis
}


function installScript(script)
{		
    if (!script)
        return;		
    if (window.execScript){        	
    	window.execScript(script)
    }else if(window.jQuery && jQuery.browser.safari){ // browser safari
        window.setTimeout(script,0);
    }else{      
        window.setTimeout( script,0);
    } 
}	

function evaluateCss(obj)
{
	var cssTags = obj.getElementsByTagName('style');
	var head = document.getElementsByTagName('head')[0];
	for(var no=0;no<cssTags.length;no++){
		head.appendChild(cssTags[no]);
	}	
}

function loadScript(objID,url){
	request(objID,url,1);
}