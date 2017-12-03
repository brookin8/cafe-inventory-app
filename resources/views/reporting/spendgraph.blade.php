
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">


      //google.charts.load('current', {'packages':['corechart', 'controls']});
      google.charts.setOnLoadCallback(drawStuff);

      // $("#itemcategory").onchange(categoryselect);

var spend = {!! $spend !!};
var items = {!! $items !!};
var supplierselected = '';
var categoryselected = '';
var startdate = '';
var enddate = '';
var itemchosen = '';

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

      var totalcolumn = data.getNumberOfColumns()-2;
      //console.log(totalcolumn);
      // console.log('getcolumnlabel: '+ data.getColumnLabel(183));

      var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
      var options = {
      	width: 730,
         height: 200,
         legend: {position:'right'},
         chartArea: { left: 60, width: "65%", height: "90%" },
      	hAxis: {
           	 gridlines: {count: 5}
           },
         tooltip: { trigger: 'selection' },
         isStacked:true,
         seriesType: 'bars',
         series: '',
         is3D: true,
         animation:{
           duration: 1000,
           easing: 'out'
      },
      };

      myObj = {};
      myObj[totalcolumn] = {type : "line"};
      options.series = myObj;

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

      $('#spenditem').val("''");
      //console.log('categoryselected value: ' + categoryselected);
      //console.log('categoryselected datetype: ' + typeof categoryselected);

      
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
            var dateconversion = new Date(spend[i].week);
				if(!dates.includes(spend[i].week) && dateconversion >= startdate) { 
		      		dates.push(spend[i].week);
		      	}
		    }
		} else if(startdate === '' && enddate != '') {
			for (var i = 0; i < spend.length; i++) {
            var dateconversion = new Date(spend[i].week);
				if(!dates.includes(spend[i].week) && dateconversion <= enddate) { 
		      		dates.push(spend[i].week);
		      	}
		    }
		} else if(startdate != '' && enddate != '') {
			for (var i = 0; i < spend.length; i++) {
            var dateconversion = new Date(spend[i].week);
				if(!dates.includes(spend[i].week) && dateconversion <= enddate && dateconversion >= startdate) { 
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

     var totalcolumn = data.getNumberOfColumns()-2;
    
      var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
      var options = {
         width: 730,
         height: 200,
         legend: {position:'right'},
         chartArea: { left: 60, width: "65%", height: "90%" },
      	hAxis: {
           	 gridlines: {count: 5}
           },
         tooltip: { trigger: 'selection' },
         seriesType: 'bars',
         isStacked:true,
         series: '',
          is3D: true,
         animation:{
           duration: 600,
           easing: 'out',
           startup: true
        }
      };

      myObj = {};
      myObj[totalcolumn] = {type : "line"};
      options.series = myObj;

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

      $('#spenditem').val("''");
      //console.log('supplierselected value: ' + supplierselected);
      //console.log('supplierselected datetype: ' + typeof supplierselected);

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
            var dateconversion = new Date(spend[i].week);
				if(!dates.includes(spend[i].week) && dateconversion >= startdate) { 
		      		dates.push(spend[i].week);
		      	}
		    }
		} else if(startdate === '' && enddate != '') {
			for (var i = 0; i < spend.length; i++) {
            var dateconversion = new Date(spend[i].week);
				if(!dates.includes(spend[i].week) && dateconversion <= enddate) { 
		      		dates.push(spend[i].week);
		      	}
		    }
		} else if(startdate != '' && enddate != '') {
			for (var i = 0; i < spend.length; i++) {
            var dateconversion = new Date(spend[i].week);
				if(!dates.includes(spend[i].week) && dateconversion <= enddate && dateconversion >= startdate) { 
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

      var totalcolumn = data.getNumberOfColumns()-2;
    
      var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
      var options = {
         width: 730,
         height: 200,
         legend: {position:'right'},
         chartArea: { left: 60, width: "65%", height: "90%" },
      	hAxis: {
           	 gridlines: {count: 5}
           },
         tooltip: { trigger: 'selection' },
         seriesType: 'bars',
         isStacked:true,
          series: '',
          animation:{
           duration: 600,
           easing: 'out',
           startup: true
        }
      };

      myObj = {};
      myObj[totalcolumn] = {type : "line"};
      options.series = myObj;

      chart.draw(data, options);


   }

  function startselect(start) {
  	console.log('start: ' + start);

      var headers = ['Week'];
      var dates= [];
      var rows = [];
      var itemsselected = [];
      chosedate = new Date(start);
      startdate = chosedate;

    console.log('chosedate: ' + chosedate);
    console.log('startdate: ' + startdate);
      // var startdate = Date(startdate);

      var data = new google.visualization.DataTable();
		data.addColumn('date', 'Week');

		if(enddate === '') {
			console.log('enddate is blank');
			for (var i = 0; i < spend.length; i++) {
            var dateconversion = new Date(spend[i].week);
				if(!dates.includes(spend[i].week) && dateconversion >= chosedate) { 
		      		dates.push(spend[i].week);
		      		console.log(spend[i].week);
		      	}
		    }
		} else if(enddate != '') {
			console.log('endate is selected');
			for (var i = 0; i < spend.length; i++) {
            var dateconversion = new Date(spend[i].week);
				if(!dates.includes(spend[i].week) && dateconversion <= enddate && dateconversion >= chosedate) { 
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

      var totalcolumn = data.getNumberOfColumns()-2;
    
      var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
      var options = {
         width: 730,
         height: 200,
         legend: {position:'right'},
         chartArea: { left: 60, width: "65%", height: "90%" },
      	hAxis: {
           	 gridlines: {count: 5}
           },
         tooltip: { trigger: 'selection' },
         pointSize: 10,
         seriesType: 'bars',
         isStacked:true,
         series: '',
         is3D: true,
         animation:{
           duration: 600,
           easing: 'out',
           startup: true
        }
      };

      myObj = {};
      myObj[totalcolumn] = {type : "line"};
      options.series = myObj;

      chart.draw(data, options);


   }

function endselect(end) {

      var headers = ['Week'];
      var dates= [];
      var rows = [];
      var itemsselected = [];
      chosedate = new Date(end);
      enddate = chosedate;
      // var startdate = Date(startdate);

      var data = new google.visualization.DataTable();
		data.addColumn('date', 'Week');

		if(startdate === '') {
			for (var i = 0; i < spend.length; i++) {
            var dateconversion = new Date(spend[i].week);
				if(!dates.includes(spend[i].week) && dateconversion <= chosedate) { 
		      		dates.push(spend[i].week);
		      	}
		    }
		} else if(startdate != '') {
			for (var i = 0; i < spend.length; i++) {
            var dateconversion = new Date(spend[i].week);
				if(!dates.includes(spend[i].week) && dateconversion >= startdate && dateconversion <= chosedate) { 
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

      var totalcolumn = data.getNumberOfColumns()-2;

      var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
      var options = {
         width: 730,
         height: 200,
         legend: {position:'right'},
         chartArea: { left: 60, width: "65%", height: "90%" },
      	hAxis: {
           	 gridlines: {count: 5}
           },
         tooltip: { trigger: 'selection' },
         pointSize: 10,
         seriesType: 'bars',
         isStacked:true,
          series: '',
         animation:{
           duration: 600,
           easing: 'out',
           startup: true
        }
      };

      myObj = {};
      myObj[totalcolumn] = {type : "line"};
      options.series = myObj;

      chart.draw(data, options);

   }

function itemselect(item) {
      var headers = ['Week'];
      var dates= [];
      var rows = [];
      var itemsselected = [];
      var itemnum = Number(item);

      supplierselected = '';
      categoryselected = '';

      $('#spendsupplier').val("''");
      $('#spendcategory').val("''");

      if(isNaN(itemnum)){
         itemchosen = '';
         itemnum = '';
      }else {
         itemchosen = itemnum;
      }

      //console.log('supplierselected2 value: ' + supplierselected2);
      //console.log('supplierselected2 datetype: ' + typeof supplierselected2);

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
            var dateconversion = new Date(spend[i].week);
            if(!dates.includes(spend[i].week) && dateconversion >= startdate) { 
                  dates.push(spend[i].week);
               }
          }
      } else if(startdate === '' && enddate != '') {
         for (var i = 0; i < spend.length; i++) {
            var dateconversion = new Date(spend[i].week);
            if(!dates.includes(spend[i].week) && dateconversion <= enddate) { 
                  dates.push(spend[i].week);
               }
          }
      } else if(startdate != '' && enddate != '') {
         for (var i = 0; i < spend.length; i++) {
            var dateconversion = new Date(spend[i].week);
            if(!dates.includes(spend[i].week) && dateconversion <= enddate && dateconversion >= startdate) { 
                  dates.push(spend[i].week);
               }
          }
      }

      for (var i = 0;i<items.length;i++) {
            if(items[i].id === itemnum) {
               itemsselected.push(items[i].name);
            }
         } 

      for(var i=0; i<itemsselected.length; i++) {
            headers.push(itemsselected[i]);
            data.addColumn('number', itemsselected[i]);
         }

          console.log('itemsselected: ' + itemsselected); 

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

      var totalcolumn = data.getNumberOfColumns()-2;

      var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
      var options = {
         width: 730,
         height: 200,
         legend: {position:'right'},
         chartArea: { left: 60, width: "65%", height: "90%" },
         hAxis: {
             gridlines: {count: 5}
           },
         tooltip: { trigger: 'selection' },
         pointSize: 10,
         seriesType: 'bars',
         isStacked:true,
          series: '',
         animation:{
           duration: 600,
           easing: 'out',
           startup: true
        }
      };

      myObj = {};
      myObj[totalcolumn] = {type : "line"};
      options.series = myObj;

      chart.draw(data, options);
}

</script>