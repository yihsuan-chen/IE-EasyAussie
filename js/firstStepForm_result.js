		var university = getQueryString("university");
		var campus = getQueryString("campus");
		var livingPlace = getQueryString("livingPlace");
		var accommodationType = getQueryString("AccomSelect");
		var number = getQueryString("number");
		var transportTimes = getQueryString("transportTimes");
		var transSelect =  getQueryString("transSelect");
		var mealOut = getQueryString("eatOutside");
		var vegan = getQueryString("vegan");

		//var totalCost = 0;

		function getQueryString(name) {
		    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
		    var reg_rewrite = new RegExp("(^|/)" + name + "/([^/]*)(/|$)", "i");
		    var r = window.location.search.substr(1).match(reg);
		    var q = window.location.pathname.substr(1).match(reg_rewrite);
		    if(r != null){
		        return unescape(r[2]);
		    }else if(q != null){
		        return unescape(q[2]);
		    }else{
		        return null;
		    }
		}

		function isRangeIn(str,maxnum,minnum ) {
    		var num = parseInt(str);
    		if(num <=maxnum && num>=minnum){
        	return true;
    }
    	return false;

}
//----------------------
	//food cost function
	function getfoodPrice(mealOut){
		var numOfDay = parseInt(mealOut);
		var price = 0;
		if(vegan != null){
			price = (numOfDay * 12 + (14 - numOfDay) * 7 + 7 * 2.5) * 0.8;
			var totalCostShow = "$" + price;
			var classSel = $('#proFoo');
			totalCostPer = price/200*100 + "%";
			classSel.html(totalCostShow);
			classSel.css("width",totalCostPer);
		}else{
			price = (numOfDay * 12 + (14 - numOfDay) * 7 + 7 * 2.5);
			var totalCostShow = "$" + price;
			var classSel = $('#proFoo');
			totalCostPer = price/200*100 + "%";
			classSel.html(totalCostShow);
			classSel.css("width",totalCostPer);
		}
	}

	//other suburbs
		// function otherSub(){
		// 	else if(isRangeIn(university,6,0) && (livingPlace === "OtherSuburb")){
		// 		var classSel = $('#proAcc');
		// 		totalCost = "$160";
		// 		totalCostPer = 160/400*100 + "%";
		// 		classSel.html(totalCost);
		// 		classSel.css("width",totalCostPer);
		// }
// living cost 
		$(document).ready(function(){
			// otherSub();
			//var totalCost = 0;
			if(isRangeIn(university,6,0) && (livingPlace === "CityLiving")){
				var classSel = $('#proAcc');
				totalCost = "$294";
				totalCostPer = 294/400*100 + "%";
				classSel.html(totalCost);
				classSel.css("width",totalCostPer);	
			}else if(isRangeIn(university,6,0) && (livingPlace === "OtherSuburb")){//living cost other sub
				var classSel = $('#proAcc');
				totalCost = "$160";
				var classSell = $('#proTr');//undefined
				totalCostPer = 160/400*100 + "%";
				classSel.html(totalCost);
				classSel.css("width",totalCostPer);
				totalCostT = "$53";
				totalCostPerR = 53/100*100 + "%";
				classSell.html(totalCostT);
				classSell.css("width",totalCostPerR);
			}else if(university === "2" && livingPlace === "campusSuburb"){
				var classSel = $('#proAcc');
				totalCost = "$294";
				totalCostPer = 294/400*100 + "%";
				classSel.html(totalCost);
				classSel.css("width",totalCostPer);
			}else if(university === "0" && campus === "Clayton" && livingPlace === "campusSuburb"){
				var classSel = $('#proAcc');
				totalCost = "$191";
				totalCostPer = 191/400*100 + "%";
				classSel.html(totalCost);
				classSel.css("width",totalCostPer);
			}else if(university === "0" && campus === "Caufield" && livingPlace === "campusSuburb"){
				var classSel = $('#proAcc');
				totalCost = "$223";
				totalCostPer = 223/400*100 + "%";
				classSel.html(totalCost);
				classSel.css("width",totalCostPer);
			}else if(university === "1" && campus === "Parkville" && livingPlace === "campusSuburb"){
				var classSel = $('#proAcc');
				totalCost = "$260";
				totalCostPer = 260/400*100 + "%";
				classSel.html(totalCost);
				classSel.css("width",totalCostPer);
			}else if(university === "1" && campus === "Burnley" && livingPlace === "campusSuburb"){
				var classSel = $('#proAcc');
				totalCost = "$275";
				totalCostPer = 275/400*100 + "%";
				classSel.html(totalCost);
				classSel.css("width",totalCostPer);
			}else if(university === "3" && campus === "Hawthorn" && livingPlace === "campusSuburb"){
				var classSel = $('#proAcc');
				totalCost = "$225";
				totalCostPer = 225/400*100 + "%";
				classSel.html(totalCost);
				classSel.css("width",totalCostPer);
			}else if(university === "4" && campus === "Kew" && livingPlace === "campusSuburb"){
				var classSel = $('#proAcc');
				totalCost = "$212";
				totalCostPer = 212/400*100 + "%";
				classSel.html(totalCost);
				classSel.css("width",totalCostPer);
			}else if(university === "5" && campus === "Footscray" && livingPlace === "campusSuburb"){
				var classSel = $('#proAcc');
				totalCost = "$191";
				totalCostPer = 191/400*100 + "%";
				classSel.html(totalCost);
				classSel.css("width",totalCostPer);
			}else if(university === "6" && campus === "Burwood" && livingPlace === "campusSuburb"){
				var classSel = $('#proAcc');
				totalCost = "$222";
				totalCostPer = 222/400*100 + "%";
				classSel.html(totalCost);
				classSel.css("width",totalCostPer);
			}
			var transCost, totalCostPer;
			if(isRangeIn(transportTimes,7,0) && (transSelect === "onFoot/bicycle")){
				var classSel = $('#proTr');
				totalCost = "$3";
				totalCostPer = 3/100*100 + "%";
				classSel.html(totalCost);
				classSel.css("width",totalCostPer);
			}else if(transportTimes === "01" && transSelect === "Public"){
				var classSel = $('#proTr');
				totalCost = "$8.8";
				totalCostPer = 8.8/100*100 + "%";
				classSel.html(totalCost);
				classSel.css("width",totalCostPer);
			}else if(transportTimes === "02" && transSelect === "Public"){
				var classSel = $('#proTr');
				totalCost = "$17.6";
				totalCostPer = 17.6/100*100 + "%";
				classSel.html(totalCost);
				classSel.css("width",totalCostPer);
			}else if(transportTimes === "03" && transSelect === "Public"){
				var classSel = $('#proTr');
				totalCost = "$26.4";
				totalCostPer = 26.4/100*100 + "%";
				classSel.html(totalCost);
				classSel.css("width",totalCostPer);
			}else if(transportTimes === "04" && transSelect === "Public"){
				var classSel = $('#proTr');
				totalCost = "$35.2";
				totalCostPer = 35.2/100*100 + "%";
				classSel.html(totalCost);
				classSel.css("width",totalCostPer);
			}else if(transportTimes === "05" && transSelect === "Public"){
				var classSel = $('#proTr');
				totalCost = "$44";
				totalCostPer = 44/100*100 + "%";
				classSel.html(totalCost);
				classSel.css("width",totalCostPer);
			}else if(transportTimes === "06" && transSelect === "Public"){
				var classSel = $('#proTr');
				totalCost = "$48";
				totalCostPer = 48/100*100 + "%";
				classSel.html(totalCost);
				classSel.css("width",totalCostPer);
			}else if(transportTimes === "07" && transSelect === "Public"){
				var classSel = $('#proTr');
				totalCost = "$53";
				totalCostPer = 53/100*100 + "%";
				classSel.html(totalCost);
				classSel.css("width",totalCostPer);
			}//drive own car
			switch(university){
				case "0":
				var Times = new Array(7);
				Times = ["01","02","03","04","05","06","07"];
				for(var i=0;i<Times.length;i++){
					if(livingPlace==="CityLiving" 
						&& transportTimes === Times[i] 
						&& transSelect === "car" 
						&& campus === "Clayton"){
					var distUni = 18.2425055464779;
					var totalCost = Math.round((9*1.47)/100 * distUni * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/60*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
				}else if(livingPlace === "campusSuburb" 
					&& transportTimes === Times[i]
					&& transSelect === "car" 
					&& campus === "Clayton"){
					var distUni = 1.69453897336965;
					var totalCost = Math.round((9*1.47)/100 * distUni * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/60*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
				}else if(livingPlace === "CityLiving" 
					&& transportTimes === Times[i]
					&& transSelect === "car" 
					&& campus === "Caufield"){
					var distUni = 9.5394788512802;
					var totalCost = Math.round((9*1.47)/100 * distUni * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/60*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
				}else if(livingPlace === "campusSuburb" 
					&& transportTimes === Times[i]
					&& transSelect === "car" 
					&& campus === "Caufield"){
					var distUni = 1.69567285562098;
					var totalCost = Math.round((9*1.47)/100 * distUni * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/60*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
					//taxi
				}else if(livingPlace==="campusSuburb" 
						&& transportTimes === Times[i] 
						&& transSelect === "taxi" 
						&& campus === "Clayton"){
					var distUni = 18.2425055464779;
					var totalCost = Math.round((4.7 + (distUni-1)*1.71) * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/200*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
				}else if(livingPlace==="CityLiving" 
						&& transportTimes === Times[i] 
						&& transSelect === "taxi" 
						&& campus === "Clayton"){
					var distUni = 1.69453897336965;
					var totalCost = Math.round((4.7 + (distUni-1)*1.71) * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/200*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
				}else if(livingPlace === "CityLiving" 
					&& transportTimes === Times[i] 
					&& transSelect === "taxi"
					&& campus === "Caufield"){
					var distUni = 9.5394788512802;
					var totalCost = Math.round((4.7 + (distUni-1)*1.71) * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/200*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
				}else if(livingPlace === "campusSuburb" 
					&& transportTimes === Times[i] 
					&& transSelect === "taxi"
					&& campus === "Caufield"){
					var distUni = 1.69567285562098;
					var totalCost = Math.round((4.7 + (distUni-1)*1.71) * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/200*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
				}
			}
				break;
				case "1":
				var Times = new Array(7);
				Times = ["01","02","03","04","05","06","07"];
				for(var i=0;i<Times.length;i++){
					if(livingPlace==="CityLiving" 
						&& transportTimes === Times[i] 
						&& transSelect === "car" 
						&& campus === "Parkville"){
					var distUni = 2.17743261433064;
					var totalCost = Math.round((9*1.47)/100 * distUni * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/60*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
				}else if(livingPlace === "campusSuburb" 
					&& transportTimes === Times[i] 
					&& transSelect === "car"
					&& campus === "Parkville"){
					var distUni = 1.48112368435675;
					var totalCost = Math.round((9*1.47)/100 * distUni * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/60*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
				}else if(livingPlace === "CityLiving" 
					&& transportTimes === Times[i] 
					&& transSelect === "car"
					&& campus === "Burnley"){
					var distUni = 4.33723818299731;
					var totalCost = Math.round((9*1.47)/100 * distUni * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/60*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
				}else if(livingPlace === "campusSuburb" 
					&& transportTimes === Times[i] 
					&& transSelect === "car"
					&& campus === "Burnley"){
					var distUni = 0.899;
					var totalCost = Math.round((9*1.47)/100 * distUni * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/60*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
				}//taxi
				else if(livingPlace==="campusSuburb" 
						&& transportTimes === Times[i] 
						&& transSelect === "taxi" 
						&& campus === "Parkville"){
					var distUni = 1.48112368435675;
					console.log(distUni);
					var totalCost = Math.round((4.7 + (distUni-1)*1.71) * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/200*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
				}else if(livingPlace==="CityLiving" 
						&& transportTimes === Times[i] 
						&& transSelect === "taxi" 
						&& campus === "Parkville"){
					var distUni = 2.17743261433064;
					var totalCost = Math.round((4.7 + (distUni-1)*1.71) * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/200*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
				}else if(livingPlace === "CityLiving" 
					&& transportTimes === Times[i] 
					&& transSelect === "taxi"
					&& campus === "Burnley"){
					var distUni = 4.33723818299731;
					var totalCost = Math.round((4.7 + (distUni-1)*1.71) * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/200*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
				}else if(livingPlace === "campusSuburb" 
					&& transportTimes === Times[i] 
					&& transSelect === "taxi"
					&& campus === "Burnley"){
					var distUni = 0.899;
					var totalCost = Math.round((4.7 + (distUni-1)*1.71) * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/200*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
				}
			}
				break;
				case "2":
				var Times = new Array(7);
				Times = ["01","02","03","04","05","06","07"];
				for(var i=0;i<Times.length;i++){
					if(livingPlace==="CityLiving" 
						&& transportTimes === Times[i] 
						&& transSelect === "car" 
						&& campus === "CBD"){
					var distUni = 0.944991080296229;
					var totalCost = Math.round((9*1.47)/100 * distUni * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/60*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
				}else if(livingPlace === "campusSuburb" 
					&& transportTimes === Times[i] 
					&& transSelect === "car" 
					&& campus === "CBD"){
					var distUni = 0.944991080296229;
					var totalCost = Math.round((9*1.47)/100 * distUni * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/60*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
				}
				//taxi
				else if(livingPlace==="campusSuburb" 
						&& transportTimes === Times[i] 
						&& transSelect === "taxi" 
						&& campus === "CBD"){
					var distUni = 0.944991080296229;
					console.log(distUni);
					var totalCost = Math.round((4.7 + (distUni-1)*1.71) * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/200*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
				}else if(livingPlace==="CityLiving" 
						&& transportTimes === Times[i] 
						&& transSelect === "taxi" 
						&& campus === "CBD"){
					var distUni = 0.944991080296229;
					var totalCost = Math.round((4.7 + (distUni-1)*1.71) * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/200*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
				}

			}
				break;
				case "3":
				var Times = new Array(7);
				Times = ["01","02","03","04","05","06","07"];
				for(var i=0;i<Times.length;i++){
					if(livingPlace === "CityLiving" 
						&& transportTimes === Times[i] 
						&& transSelect === "car" 
						&& campus === "Hawthorn"){
					var distUni = 4.66506453065787;
					var totalCost = Math.round((9*1.47)/100 * distUni * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/60*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
				}else if(livingPlace === "campusSuburb" 
					&& transportTimes === Times[i] 
					&& transSelect === "car"
					&& campus === "Hawthorn"){
					var distUni = 5.67651681344064;
					var totalCost = Math.round((9*1.47)/100 * distUni * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/60*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
				}
				//taxi
				else if(livingPlace==="CityLiving" 
						&& transportTimes === Times[i] 
						&& transSelect === "taxi" 
						&& campus === "Hawthorn"){
					var distUni = 4.66506453065787;
					console.log(distUni);
					var totalCost = Math.round((4.7 + (distUni-1)*1.71) * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/200*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
				}else if(livingPlace==="campusSuburb" 
						&& transportTimes === Times[i] 
						&& transSelect === "taxi" 
						&& campus === "Hawthorn"){
					var distUni = 5.67651681344064;
					var totalCost = Math.round((4.7 + (distUni-1)*1.71) * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/200*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
				}
			}
				break;
				case "4":
				var Times = new Array(7);
				Times = ["01","02","03","04","05","06","07"];
				for(var i=0;i<Times.length;i++){
					if(livingPlace==="CityLiving" 
						&& transportTimes === Times[i] 
						&& transSelect === "car" 
						&& campus === "Kew"){
					var distUni = 5.93388514593176;
					var totalCost = Math.round((9*1.47)/100 * distUni * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/60*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
				}else if(livingPlace === "campusSuburb" 
					&& transportTimes === Times[i]
					&& transSelect === "car" 
					&& campus === "Kew"){
					var distUni = 1.71893210051601;
					var totalCost = Math.round((9*1.47)/100 * distUni * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/60*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
				}
				//taxi
				else if(livingPlace==="CityLiving" 
						&& transportTimes === Times[i] 
						&& transSelect === "taxi" 
						&& campus === "Kew"){
					var distUni = 5.93388514593176;
					console.log(distUni);
					var totalCost = Math.round((4.7 + (distUni-1)*1.71) * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/200*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
				}else if(livingPlace==="campusSuburb" 
						&& transportTimes === Times[i] 
						&& transSelect === "taxi" 
						&& campus === "Kew"){
					var distUni = 1.71893210051601;
					var totalCost = Math.round((4.7 + (distUni-1)*1.71) * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/200*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
				}
			}
				break;
				case "5":
				var Times = new Array(7);
				Times = ["01","02","03","04","05","06","07"];
				for(var i=0;i<Times.length;i++){
					if(livingPlace==="CityLiving" 
						&& transportTimes === Times[i] 
						&& transSelect === "car" 
						&& campus === "Footscray"){
					var distUni = 6.90629992953754;
					var totalCost = Math.round((9*1.47)/100 * distUni * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/60*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
				}else if(livingPlace === "campusSuburb" 
					&& transportTimes === Times[i] 
					&& transSelect === "car"
					&& campus === "Footscray"){
					var distUni = 0.769709218841199;
					var totalCost = Math.round((9*1.47)/100 * distUni * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/60*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
				}
				//taxi
				else if(livingPlace==="CityLiving" 
						&& transportTimes === Times[i] 
						&& transSelect === "taxi" 
						&& campus === "Footscray"){
					var distUni = 6.90629992953754;
					console.log(distUni);
					var totalCost = Math.round((4.7 + (distUni-1)*1.71) * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/200*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
				}else if(livingPlace==="campusSuburb" 
						&& transportTimes === Times[i] 
						&& transSelect === "taxi" 
						&& campus === "Footscray"){
					var distUni = 0.769709218841199;
					var totalCost = Math.round((4.7 + (distUni-1)*1.71) * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/200*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
				}
			}
				break;
				case "6":
				var Times = new Array(7);
				Times = ["01","02","03","04","05","06","07"];
				for(var i=0;i<Times.length;i++){
					if(livingPlace==="CityLiving" 
						&& transportTimes === Times[i] 
						&& transSelect === "car" 
						&& campus === "Burwood"){
					var distUni = 13.305448086167;
					var totalCost = Math.round((9*1.47)/100 * distUni * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/60*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
				}else if(livingPlace === "campusSuburb" 
					&& transportTimes === Times[i] 
					&& transSelect === "car" 
					&& campus === "Burwood"){
					var distUni = 3.27666327093518;
					var totalCost = Math.round((9*1.47)/100 * distUni * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/60*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
				}
				//taxi
				else if(livingPlace==="CityLiving" 
						&& transportTimes === Times[i] 
						&& transSelect === "taxi" 
						&& campus === "Burwood"){
					var distUni = 13.305448086167;
					console.log(distUni);
					var totalCost = Math.round((4.7 + (distUni-1)*1.71) * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/200*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
				}else if(livingPlace==="campusSuburb" 
						&& transportTimes === Times[i] 
						&& transSelect === "taxi" 
						&& campus === "Burwood"){
					var distUni = 3.27666327093518;
					var totalCost = Math.round((4.7 + (distUni-1)*1.71) * 2 * parseInt(Times[i]));
					var totalCostShow = "$" + totalCost;
					var classSel = $('#proTr');
					totalCostPer = totalCost/200*100 + "%";
					classSel.html(totalCostShow);
					classSel.css("width",totalCostPer);
				}
			}
				break;
				
				default:
				break;
		    }

		    /*food loop*/
		    getfoodPrice(mealOut);
		});
