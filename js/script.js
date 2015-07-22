/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function numberWithCommas(x) {
	return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}


function formattingTime(time) {
	var seconds = Math.round(time);
	var minutes = Math.floor(seconds / 60);
	var hours = Math.floor(minutes / 60);
	minutes = (minutes >= 10) ? minutes : "0" + minutes;
	seconds = seconds % 60;
	seconds = (seconds >= 10) ? seconds : "0" + seconds;
	hours = (hours >= 10) ? hours : "0" + hours;
	var theValueReturn = (hours === 0) ? minutes + ":" + seconds : hours + ":" + minutes + ":" + seconds;
	return theValueReturn;
}


function re(code)
{
	var name = $('#name').val();
	var sname = $('#sname').val();
	var tel = $('#tel').val();
	var data = {name:name, sname:sname, tel:tel};
	var strmsg = "��سҡ�͡ ";
			if (data.name == '' || data.sname == '' || data.tel == ''){
				if(data.name == "" ){
					strmsg += "���� ";
				}
				if(data.sname == ""){
					strmsg += "���ʡ�� ";
				}
				if(data.tel == ""){
					strmsg += "�������Ѿ�� ";
				}
				alert(strmsg);
				exit();	
			} else if(  tel.length < 9 || tel.length > 10 ){
				alert("�������Ѿ�����١��ͧ��سҵ�Ǩ�ͺ�ա����");
				exit();	
			}else if (code == undefined || code == "undefined"){
				alert("��س����͡���촷���ͧ��ê����Թ");
				exit();
			} 	
   document.location = "pdf/index.php?name="+name+"&sname="+sname+"&tel="+tel+"&code="+code+" ";
}


function validate(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[0-9]/;
  if( !regex.test(key) ) {
	alert("��س��к��������Ѿ���繵���Ţ !");
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}