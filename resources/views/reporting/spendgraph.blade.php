
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">


      google.charts.load('current', {'packages':['corechart', 'controls']});
      google.charts.setOnLoadCallback(drawStuff);

      // $("#itemcategory").onchange(categoryselect);

var spend = {!! $spend !!};
var items = {!! $items !!};
var supplierselected = '';
var categoryselected = '';
var startdate = '';
var enddate = '';

//Original Draw
function drawStuff() {

      var headers = ['Week'];
      var dates= [];
      var rows = [];

      var data = new google.visualization.DataTable();
		data.addColumn('date', 'Week');

      for (var i = 0; i < spend.length; i++) {
      	if(dates.includes(spend[i].week)) {
      	} else {
      		dates.push(spend[i].week);
      	}
      }

      for(var i=0; i<items.length; i++) {
      	headers.push(items[i].name);
      	data.addColumn('number', items[i].name);
      }

      data.addColumn('number','Total');

      for(var i=0; i<dates.length; i++) {
         var total = 0;
      	var pushing = [];
      	var weekformatted = new Date(dates[i]);
      	pushing.push(weekformatted);
      	for(var j=1;j<headers.length;j++) {
      		var found = false;
      		for(var k=0;k<spend.length;k++) {
      			if(spend[k].week === dates[i] && spend[k].name === headers[j]) {
      				pushing.push(Number(spend[k].spend));
                  total += Number(spend[k].spend);
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

      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
      var options = {
      	width: 875,
         height: 325,
         legend: {position:'right'},
         chartArea: { left: 70, width: "60%", height: "80%" },
      	hAxis: {
           	 gridlines: {count: 5}
           },
         tooltip: { trigger: 'selection' },
         pointSize: 10
      };

      chart.draw(data, options);


   }

// IF CATEGORY SELECTED
function categoryselect(category) {

	console.log('category: ' + category);
      var headers = ['Week'];
      var dates= [];
      var rows = [];
      var itemsselected = [];
      var categorynum = Number(category);
      if(isNaN(categorynum)){
      	categoryselected = '';
      	categorynum = '';
      }else {
      	categoryselected = categorynum;
      }

      console.log('categoryselected value: ' + categoryselected);
      console.log('categoryselected datetype: ' + typeof categoryselected);

      
   //    var categoryselect = document.getElementById("itemcategory");
	  // var category = categoryselect.value;

      var data = new google.visualization.DataTable();
		data.addColumn('date', 'Week');

		if(startdate === '' && enddate === '') {
			for (var i = 0; i < spend.length; i++) {
		      	if(!dates.includes(spend[i].week)) {
		      		dates.push(spend[i].week);
		      	}
	      	}
		} else if(startdate != '' && enddate === '') {
			for (var i = 0; i < spend.length; i++) {
				if(!dates.includes(spend[i].week) && spend[i].week >= startdate) { 
		      		dates.push(spend[i].week);
		      	}
		    }
		} else if(startdate === '' && enddate != '') {
			for (var i = 0; i < spend.length; i++) {
				if(!dates.includes(spend[i].week) && spend[i].week <= enddate) { 
		      		dates.push(spend[i].week);
		      	}
		    }
		} else if(startdate != '' && enddate != '') {
			for (var i = 0; i < spend.length; i++) {
				if(!dates.includes(spend[i].week) && spend[i].week <= enddate && spend[i].week >= startdate) { 
		      		dates.push(spend[i].week);
		      	}
		    }
		}

      if(supplierselected === '') { 
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
		      		if(items[i].supplier_id === supplierselected) {
		      			itemsselected.push(items[i].name);
		      		}
		      	} else if(items[i].category_id === categorynum && items[i].supplier_id === supplierselected) {
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
            for(var k=0;k<spend.length;k++) {
               if(spend[k].week === dates[i] && spend[k].name === headers[j]) {
                  pushing.push(Number(spend[k].spend));
                   total += Number(spend[k].spend);
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

    
       var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
      var options = {
         width: 875,
         height: 325,
         legend: {position:'right'},
         chartArea: { left: 70, width: "60%", height: "70%" },
      	hAxis: {
           	 gridlines: {count: 5}
           },
         tooltip: { trigger: 'selection' },
         pointSize: 10
      };

      chart.draw(data, options);


   }

// Supplier Select 

function supplierselect(supplier) {

      var headers = ['Week'];
      var dates= [];
      var rows = [];
      var itemsselected = [];
      var suppliernum = Number(supplier);

      if(isNaN(suppliernum)){
      	supplierselected = '';
      	suppliernum = '';
      }else {
      	supplierselected = suppliernum;
      }

      console.log('supplierselected value: ' + supplierselected);
      console.log('supplierselected datetype: ' + typeof supplierselected);

      var data = new google.visualization.DataTable();
		data.addColumn('date', 'Week');

		if(startdate === '' && enddate === '') {
			for (var i = 0; i < spend.length; i++) {
		      	if(!dates.includes(spend[i].week)) {
		      		dates.push(spend[i].week);
		      	}
	      	}
		} else if(startdate != '' && enddate === '') {
			for (var i = 0; i < spend.length; i++) {
				if(!dates.includes(spend[i].week) && spend[i].week >= startdate) { 
		      		dates.push(spend[i].week);
		      	}
		    }
		} else if(startdate === '' && enddate != '') {
			for (var i = 0; i < spend.length; i++) {
				if(!dates.includes(spend[i].week) && spend[i].week <= enddate) { 
		      		dates.push(spend[i].week);
		      	}
		    }
		} else if(startdate != '' && enddate != '') {
			for (var i = 0; i < spend.length; i++) {
				if(!dates.includes(spend[i].week) && spend[i].week <= enddate && spend[i].week >= startdate) { 
		      		dates.push(spend[i].week);
		      	}
		    }
		}

      if(categoryselected === '') { 
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
		      		if(items[i].category_id === categoryselected) {
		      			itemsselected.push(items[i].name);
		      		}
		      	} else if(items[i].category_id === categoryselected && items[i].supplier_id === suppliernum) {
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
            for(var k=0;k<spend.length;k++) {
               if(spend[k].week === dates[i] && spend[k].name === headers[j]) {
                  pushing.push(Number(spend[k].spend));
                  total += Number(spend[k].spend);
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

    
       var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
      var options = {
         width: 875,
         height: 325,
         legend: {position:'right'},
         chartArea: { left: 70, width: "60%", height: "70%" },
      	hAxis: {
           	 gridlines: {count: 5}
           },
         tooltip: { trigger: 'selection' },
         pointSize: 10
      };

      chart.draw(data, options);


   }

  function startselect(start) {
  	console.log('start: ' + start);

      var headers = ['Week'];
      var dates= [];
      var rows = [];
      var itemsselected = [];
      chosedate = start;
      startdate = start;

    console.log('chosedate: ' + chosedate);
    console.log('startdate: ' + startdate);
      // var startdate = Date(startdate);

      var data = new google.visualization.DataTable();
		data.addColumn('date', 'Week');

		if(enddate === '') {
			console.log('enddate is blank');
			for (var i = 0; i < spend.length; i++) {
				if(!dates.includes(spend[i].week) && spend[i].week >= chosedate) { 
		      		dates.push(spend[i].week);
		      		console.log(spend[i].week);
		      	}
		    }
		} else if(enddate != '') {
			console.log('endate is selected');
			for (var i = 0; i < spend.length; i++) {
				if(!dates.includes(spend[i].week) && spend[i].week <= enddate && spend[i].week >= chosedate) { 
		      		dates.push(spend[i].week);
		      	}
		    }
		}


      	if(categoryselected === '' && supplierselected === '') {
			for (var i = 0;i<items.length;i++) {
			      itemsselected.push(items[i].name);
      		}
		} else if(categoryselected != '' && supplierselected === '') {
			 for (var i = 0;i<items.length;i++) {
		      	if(items[i].category_id === categoryselected) {
		      		itemsselected.push(items[i].name);
		      	} 
      		}
		} else if(categoryselected === '' && supplierselected != '') {
			 for (var i = 0;i<items.length;i++) {
		      	if(items[i].supplier_id === supplierselected) {
		      		itemsselected.push(items[i].name);
		      	} 
      		}
		}  else if(categoryselected != '' && supplierselected != '') {
			 for (var i = 0;i<items.length;i++) {
		      	if(items[i].supplier_id === supplierselected && items[i].category_id === categoryselected) {
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
            for(var k=0;k<spend.length;k++) {
               if(spend[k].week === dates[i] && spend[k].name === headers[j]) {
                  pushing.push(Number(spend[k].spend));
                  total += Number(spend[k].spend);
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

    
      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
      var options = {
         width: 875,
         height: 325,
         legend: {position:'right'},
         chartArea: { left: 70, width: "60%", height: "70%" },
      	hAxis: {
           	 gridlines: {count: 5}
           },
         tooltip: { trigger: 'selection' },
         pointSize: 10
      };

      chart.draw(data, options);


   }

function endselect(end) {

      var headers = ['Week'];
      var dates= [];
      var rows = [];
      var itemsselected = [];
      chosedate = end;
      enddate = end;
      // var startdate = Date(startdate);

      var data = new google.visualization.DataTable();
		data.addColumn('date', 'Week');

		if(startdate === '') {
			for (var i = 0; i < spend.length; i++) {
				if(!dates.includes(spend[i].week) && spend[i].week <= chosedate) { 
		      		dates.push(spend[i].week);
		      	}
		    }
		} else if(startdate != '') {
			for (var i = 0; i < spend.length; i++) {
				if(!dates.includes(spend[i].week) && spend[i].week >= startdate && spend[i].week <= chosedate) { 
		      		dates.push(spend[i].week);
		      	}
		    }
		}


      	if(categoryselected === '' && supplierselected === '') {
			for (var i = 0;i<items.length;i++) {
			      itemsselected.push(items[i].name);
      		}
		} else if(categoryselected != '' && supplierselected === '') {
			 for (var i = 0;i<items.length;i++) {
		      	if(items[i].category_id === categoryselected) {
		      		itemsselected.push(items[i].name);
		      	} 
      		}
		} else if(categoryselected === '' && supplierselected != '') {
			 for (var i = 0;i<items.length;i++) {
		      	if(items[i].supplier_id === supplierselected) {
		      		itemsselected.push(items[i].name);
		      	} 
      		}
		}  else if(categoryselected != '' && supplierselected != '') {
			 for (var i = 0;i<items.length;i++) {
		      	if(items[i].supplier_id === supplierselected && items[i].category_id === categoryselected) {
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
            for(var k=0;k<spend.length;k++) {
               if(spend[k].week === dates[i] && spend[k].name === headers[j]) {
                  pushing.push(Number(spend[k].spend));
                  total += Number(spend[k].spend);
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

    
      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
      var options = {
      	width: 875,
         height: 325,
         legend: {position:'right'},
         chartArea: { left: 70, width: "60%", height: "70%" },
      	hAxis: {
           	 gridlines: {count: 5}
           },
         tooltip: { trigger: 'selection' },
         pointSize: 10
      };

      chart.draw(data, options);


   }


</script>