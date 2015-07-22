var Conclave=(function() {
	var buArr =[],arlen, course;
	return {
		init:function(coursetype, maxValue){
			this.addCN(coursetype,maxValue);//this.clickReg(coursetype);
		},
		addCN:function(coursetype, maxValue){
			var buarr=["holder_bu_center","holder_bu_awayR"];
			var buarr2 ="holder_bu_awayL";
			var cssShow ="";
			//alert("count == "+course.length);

			//max = 28;
			//for(var i=1;i<=buarr.length;++i){
			for(i=1; i<=maxValue;i++){
				if(i <=buarr.length){
					//alert("if == "+i+ "   =="+buarr[i-1]);
					//$("#bu"+i).removeClass().addClass(buarr[i-1]+" holder_bu");
					cssShow =buarr[i-1];
				}else if(i == maxValue){
				//		alert("else if == "+i+"--"+buarr2);
					//$("#bu"+i).removeClass().addClass(buarr2[max-i]+" holder_bu");
					cssShow =buarr2;
				}else{
					//	alert("else == "+i+" -- "+maxValue);
						cssShow ="holder_hide";
					//$("#bu"+i).removeClass().addClass("holder_hide holder_bu");
				}
			//	alert(i+" == "+cssShow)
				$("#"+coursetype+i).removeClass().addClass(cssShow+" holder_bu");
			}
		},
		clickReg:function(coursetype){
			$(".holder_bu").each(function(){
				buArr.push($(this).attr('class'))
			});
			arlen=buArr.length;
			for(var i=0;i<arlen;++i){
				buArr[i]=buArr[i].replace(" holder_bu","")
			};
			$(".holder_bu").click(function(buid){
				//alert(buid);
				var me=this,id=this.id||buid,joId=$("#"+id),joCN=joId.attr("class").replace(" holder_bu","");
				var cpos=buArr.indexOf(joCN),mpos=buArr.indexOf("holder_bu_center");
				if(cpos!=mpos){
					tomove=cpos>mpos?arlen-cpos+mpos:mpos-cpos;
					while(tomove){
						var t=buArr.shift();
						buArr.push(t);
						for(var i=1;i<=arlen;++i){
							$("#"+coursetype+i).removeClass().addClass(buArr[i-1]+" holder_bu");
						}
						--tomove;
					}
				}
			})
		},
		auto:function(){

			for(i=1;i<=1;++i){			
				$(".holder_bu").delay(4000).trigger('click',"BP"+i).delay(4000);
				console.log("called");
			}
		}
	};
})();

$(document).on('click',function(e){
	window['conclave']=Conclave;
	alert(e.target.id);
	//Conclave.clickReg(e.target.id);
});
