
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">


      google.charts.load('current', {'packages':['corechart', 'controls']});
      google.charts.setOnLoadCallback(drawStuff2);

      // $("#itemcategory").onchange(categoryselect);

var demand = {!! $demand !!};
var items = {!! $items !!};
var supplierselected2 = '';
var categoryselected2 = '';
var startdate2 = '';
var enddate2 = '';

//Original Draw
function drawStuff2() {

      var headers = ['Week'];
      var dates= [];
      var rows = [];

      var data = new google.visualization.DataTable();
		data.addColumn('date', 'Week');

      for (var i = 0; i < demand.length; i++) {
      	if(dates.includes(demand[i].week)) {
      	} else {
      		dates.push(demand[i].week);
      	}
      }

      for(var i=0; i<items.length; i++) {
      	headers.push(items[i].name);
      	data.addColumn('number', items[i].name);
      }

      //TOTALS
      data.addColumn('number','Total');

      for(var i=0; i<dates.length; i++) {
         var total = 0;
      	var pushing = [];
      	var weekformatted = new Date(dates[i]);
      	pushing.push(weekformatted);
      	for(var j=1;j<headers.length;j++) {
      		var found = false;
      		for(var k=0;k<demand.length;k++) {
      			if(demand[k].week === dates[i] && demand[k].name === headers[j]) {
      				pushing.push(Number(demand[k].demand));
                  total += Number(demand[k].demand);
      				found = true;
      			}
      		}
      		if(found === false) {
      			pushing.push(0);
      		} else {
      			found = false;
      		}
      		
      	}
      	pushing.push(total);
      	rows.push(pushing);
      	pushing = [];
         total=0;
      }

      data.addRows(rows);

      var chart = new google.visualization.LineChart(document.getElementById('chart_div2'));
      var options = {
      	width: 875,
         height: 325,
      	legend: {position:'right'},
      	chartArea: { left: 40, width: "60%", height: "70%" },
      	hAxis: {
           	 gridlines: {count: 5}
           },
         tooltip: { trigger: 'selection' },
         pointSize: 10
      };

      chart.draw(data, options);


   }
// IF CATEGORY SELECTED
function categoryselect2(category) {

	console.log('category: ' + category);
      var headers = ['Week'];
      var dates= [];
      var rows = [];
      var itemsselected = [];
      var categorynum = Number(category);
      if(isNaN(categorynum)){
      	categoryselected2 = '';
      	categorynum = '';
      }else {
      	categoryselected2 = categorynum;
      }

      console.log('categoryselected2 value: ' + categoryselected2);
      console.log('categoryselected2 datetype: ' + typeof categoryselected2);

      
   //    var categoryselect = document.getElementById("itemcategory");
	  // var category = categoryselect.value;

      var data = new google.visualization.DataTable();
		data.addColumn('date', 'Week');

		if(startdate2 === '' && enddate2 === '') {
			for (var i = 0; i < demand.length; i++) {
		      	if(!dates.includes(demand[i].week)) {
		      		dates.push(demand[i].week);
		      	}
	      	}
		} else if(startdate2 != '' && enddate2 === '') {
			for (var i = 0; i < demand.length; i++) {
				if(!dates.includes(demand[i].week) && demand[i].week >= startdate2) { 
		      		dates.push(demand[i].week);
		      	}
		    }
		} else if(startdate2 === '' && enddate2 != '') {
			for (var i = 0; i < demand.length; i++) {
				if(!dates.includes(demand[i].week) && demand[i].week <= enddate2) { 
		      		dates.push(demand[i].week);
		      	}
		    }
		} else if(startdate2 != '' && enddate2 != '') {
			for (var i = 0; i < demand.length; i++) {
				if(!dates.includes(demand[i].week) && demand[i].week <= enddate2 && demand[i].week >= startdate2) { 
		      		dates.push(demand[i].week);
		      	}
		    }
		}

      if(supplierselected2 === '') { 
	      for (var i = 0;i<items.length;i++) {
		      	if(categorynum === '') {
		      		itemsselected.push(items[i].name);
		      	} else if(items[i].category_id === categorynum) {
			      		itemsselected.push(items[i].name);
		      	}
      		}
  		} else {
  			for (var i = 0;i<items.length;i++) {
		      	if(categorynum === '') {
		      		if(items[i].supplier_id === supplierselected2) {
		      			itemsselected.push(items[i].name);
		      		}
		      	} else if(items[i].category_id === categorynum && items[i].supplier_id === supplierselected2) {
		      		itemsselected.push(items[i].name);
		      	}
      		}
  		}

      for(var i=0; i<itemsselected.length; i++) {
      	headers.push(itemsselected[i]);
      	data.addColumn('number', itemsselected[i]);
      }
            // rows.push(headers);

      data.addColumn('number','Total');

      for(var i=0; i<dates.length; i++) {
         var total = 0;
         var pushing = [];
         var weekformatted = new Date(dates[i]);
         pushing.push(weekformatted);
         for(var j=1;j<headers.length;j++) {
            var found = false;
            for(var k=0;k<demand.length;k++) {
               if(demand[k].week === dates[i] && demand[k].name === headers[j]) {
                  pushing.push(Number(demand[k].demand));
                  total += Number(demand[k].demand);
                  found = true;
               }
            }
            if(found === false) {
               pushing.push(0);
            } else {
               found = false;
            }
            
         }
         pushing.push(total);
         rows.push(pushing);
         pushing = [];
         total=0;
      }

      data.addRows(rows);

    
      var chart = new google.visualization.LineChart(document.getElementById('chart_div2'));
      var options = {
         width: 875,
         height: 325,
         legend: {position:'right'},
         chartArea: { left: 40, width: "60%", height: "70%" },
      	hAxis: {
           	 gridlines: {count: 5}
           },
         tooltip: { trigger: 'selection' },
         pointSize: 10
      };

      chart.draw(data, options);


   }

// Supplier Select 

function supplierselect2(supplier) {

      var headers = ['Week'];
      var dates= [];
      var rows = [];
      var itemsselected = [];
      var suppliernum = Number(supplier);

      if(isNaN(suppliernum)){
      	supplierselected2 = '';
      	suppliernum = '';
      }else {
      	supplierselected2 = suppliernum;
      }

      console.log('supplierselected2 value: ' + supplierselected2);
      console.log('supplierselected2 datetype: ' + typeof supplierselected2);

      var data = new google.visualization.DataTable();
		data.addColumn('date', 'Week');

		if(startdate2 === '' && enddate2 === '') {
			for (var i = 0; i < demand.length; i++) {
		      	if(!dates.includes(demand[i].week)) {
		      		dates.push(demand[i].week);
		      	}
	      	}
		} else if(startdate2 != '' && enddate2 === '') {
			for (var i = 0; i < demand.length; i++) {
				if(!dates.includes(demand[i].week) && demand[i].week >= startdate2) { 
		      		dates.push(demand[i].week);
		      	}
		    }
		} else if(startdate2 === '' && enddate2 != '') {
			for (var i = 0; i < demand.length; i++) {
				if(!dates.includes(demand[i].week) && demand[i].week <= enddate2) { 
		      		dates.push(demand[i].week);
		      	}
		    }
		} else if(startdate2 != '' && enddate2 != '') {
			for (var i = 0; i < demand.length; i++) {
				if(!dates.includes(demand[i].week) && demand[i].week <= enddate2 && demand[i].week >= startdate2) { 
		      		dates.push(demand[i].week);
		      	}
		    }
		}

      if(categoryselected2 === '') { 
	      for (var i = 0;i<items.length;i++) {
		      	if(suppliernum === '') {
		      		itemsselected.push(items[i].name);
		      	} else if(items[i].supplier_id === suppliernum) {
		      		console.log('item belongs');
			      		itemsselected.push(items[i].name);
		      	}
      		}
  		} else {
  			for (var i = 0;i<items.length;i++) {
		      	if(suppliernum === '') {
		      		if(items[i].category_id === categoryselected2) {
		      			itemsselected.push(items[i].name);
		      		}
		      	} else if(items[i].category_id === categoryselected2 && items[i].supplier_id === suppliernum) {
		      		itemsselected.push(items[i].name);
		      	}
      		}
  		}

  		for(var i=0; i<itemsselected.length; i++) {
	      	headers.push(itemsselected[i]);
	      	data.addColumn('number', itemsselected[i]);
	      }

          //console.log(itemsselected); 

      data.addColumn('number','Total');

      for(var i=0; i<dates.length; i++) {
         var total = 0;
         var pushing = [];
         var weekformatted = new Date(dates[i]);
         pushing.push(weekformatted);
         for(var j=1;j<headers.length;j++) {
            var found = false;
            for(var k=0;k<demand.length;k++) {
               if(demand[k].week === dates[i] && demand[k].name === headers[j]) {
                  pushing.push(Number(demand[k].demand));
                  total += Number(demand[k].demand);
                  found = true;
               }
            }
            if(found === false) {
               pushing.push(0);
            } else {
               found = false;
            }
            
         }
         pushing.push(total);
         rows.push(pushing);
         pushing = [];
         total=0;
      }

      data.addRows(rows);

    
      var chart = new google.visualization.LineChart(document.getElementById('chart_div2'));
      var options = {
         width: 875,
         height: 325,
         legend: {position:'right'},
         chartArea: { left: 40, width: "60%", height: "70%" },
      	hAxis: {
           	 gridlines: {count: 5}
           },
         tooltip: { trigger: 'selection' },
         pointSize: 10
      };

      chart.draw(data, options);


   }

  function startselect2(start) {
  	console.log('start: ' + start);

      var headers = ['Week'];
      var dates= [];
      var rows = [];
      var itemsselected = [];
      chosedate = start;
      startdate2 = start;

    console.log('chosedate: ' + chosedate);
    console.log('startdate2: ' + startdate2);
      // var startdate = Date(startdate);

      var data = new google.visualization.DataTable();
		data.addColumn('date', 'Week');

		if(enddate2 === '') {
			//console.log('enddate is blank');
			for (var i = 0; i < demand.length; i++) {
				if(!dates.includes(demand[i].week) && demand[i].week >= chosedate) { 
		      		dates.push(demand[i].week);
		      		console.log(demand[i].week);
		      	}
		    }
		} else if(enddate2 != '') {
			//console.log('endate is selected');
			for (var i = 0; i < demand.length; i++) {
				if(!dates.includes(demand[i].week) && demand[i].week <= enddate2 && demand[i].week >= chosedate) { 
		      		dates.push(demand[i].week);
		      	}
		    }
		}


      	if(categoryselected2 === '' && supplierselected2 === '') {
			for (var i = 0;i<items.length;i++) {
			      itemsselected.push(items[i].name);
      		}
		} else if(categoryselected2 != '' && supplierselected2 === '') {
			 for (var i = 0;i<items.length;i++) {
		      	if(items[i].category_id === categoryselected2) {
		      		itemsselected.push(items[i].name);
		      	} 
      		}
		} else if(categoryselected2 === '' && supplierselected2 != '') {
			 for (var i = 0;i<items.length;i++) {
		      	if(items[i].supplier_id === supplierselected2) {
		      		itemsselected.push(items[i].name);
		      	} 
      		}
		}  else if(categoryselected2 != '' && supplierselected2 != '') {
			 for (var i = 0;i<items.length;i++) {
		      	if(items[i].supplier_id === supplierselected2 && items[i].category_id === categoryselected2) {
		      		itemsselected.push(items[i].name);
		      	} 
      		}
		}

	for(var i=0; i<itemsselected.length; i++) {
      	headers.push(itemsselected[i]);
      	data.addColumn('number', itemsselected[i]);
      }
          
   data.addColumn('number','Total');

      for(var i=0; i<dates.length; i++) {
         var total = 0;
         var pushing = [];
         var weekformatted = new Date(dates[i]);
         pushing.push(weekformatted);
         for(var j=1;j<headers.length;j++) {
            var found = false;
            for(var k=0;k<demand.length;k++) {
               if(demand[k].week === dates[i] && demand[k].name === headers[j]) {
                  pushing.push(Number(demand[k].demand));
                  total += Number(demand[k].demand);
                  found = true;
               }
            }
            if(found === false) {
               pushing.push(0);
            } else {
               found = false;
            }
            
         }
         pushing.push(total);
         rows.push(pushing);
         pushing = [];
         total=0;
      }

      data.addRows(rows);

    
      var chart = new google.visualization.LineChart(document.getElementById('chart_div2'));
      var options = {
         width: 875,
         height: 325,
         legend: {position:'right'},
         chartArea: { left: 40, width: "60%", height: "70%" },
      	hAxis: {
           	 gridlines: {count: 5}
           },
         tooltip: { trigger: 'selection' },
         pointSize: 10
      };

      chart.draw(data, options);


   }

function endselect2(end) {

      var headers = ['Week'];
      var dates= [];
      var rows = [];
      var itemsselected = [];
      chosedate = end;
      enddate2 = end;
      // var startdate = Date(startdate);

      var data = new google.visualization.DataTable();
		data.addColumn('date', 'Week');

		if(startdate2 === '') {
			for (var i = 0; i < demand.length; i++) {
				if(!dates.includes(demand[i].week) && demand[i].week <= chosedate) { 
		      		dates.push(demand[i].week);
		      	}
		    }
		} else if(startdate2 != '') {
			for (var i = 0; i < demand.length; i++) {
				if(!dates.includes(demand[i].week) && demand[i].week >= startdate2 && demand[i].week <= chosedate) { 
		      		dates.push(demand[i].week);
		      	}
		    }
		}


      	if(categoryselected2 === '' && supplierselected2 === '') {
			for (var i = 0;i<items.length;i++) {
			      itemsselected.push(items[i].name);
      		}
		} else if(categoryselected2 != '' && supplierselected2 === '') {
			 for (var i = 0;i<items.length;i++) {
		      	if(items[i].category_id === categoryselected2) {
		      		itemsselected.push(items[i].name);
		      	} 
      		}
		} else if(categoryselected2 === '' && supplierselected2 != '') {
			 for (var i = 0;i<items.length;i++) {
		      	if(items[i].supplier_id === supplierselected2) {
		      		itemsselected.push(items[i].name);
		      	} 
      		}
		}  else if(categoryselected2 != '' && supplierselected2 != '') {
			 for (var i = 0;i<items.length;i++) {
		      	if(items[i].supplier_id === supplierselected2 && items[i].category_id === categoryselected2) {
		      		itemsselected.push(items[i].name);
		      	} 
      		}
		}



		for(var i=0; i<itemsselected.length; i++) {
	      	headers.push(itemsselected[i]);
	      	data.addColumn('number', itemsselected[i]);
	      }
            

      data.addColumn('number','Total');

      for(var i=0; i<dates.length; i++) {
         var total = 0;
         var pushing = [];
         var weekformatted = new Date(dates[i]);
         pushing.push(weekformatted);
         for(var j=1;j<headers.length;j++) {
            var found = false;
            for(var k=0;k<demand.length;k++) {
               if(demand[k].week === dates[i] && demand[k].name === headers[j]) {
                  pushing.push(Number(demand[k].demand));
                  total += Number(demand[k].demand);
                  found = true;
               }
            }
            if(found === false) {
               pushing.push(0);
            } else {
               found = false;
            }
            
         }
         pushing.push(total);
         rows.push(pushing);
         pushing = [];
         total=0;
      }

      data.addRows(rows);

    
      var chart = new google.visualization.LineChart(document.getElementById('chart_div2'));
      var options = {
         width: 875,
         height: 325,
         legend: {position:'right'},
         chartArea: { left: 40, width: "60%", height: "70%" },
      	hAxis: {
           	 gridlines: {count: 5}
           },
         tooltip: { trigger: 'selection' },
         pointSize: 10
      };

      chart.draw(data, options);


   }


</script>