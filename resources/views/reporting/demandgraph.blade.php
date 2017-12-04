
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">


      google.charts.load('current', {'packages':['corechart', 'controls']});
      google.charts.setOnLoadCallback(drawStuff2);
      google.charts.setOnLoadCallback(drawStuff);

      // $("#itemcategory").onchange(categoryselect);

var demand = {!! $demand !!};
var items = {!! $items !!};
var fourweeks = '{!! $fourweeks !!}';
//console.log('fourweeks ' + fourweeks);
//console.log('type of fourweeks ' + typeof fourweeks);
var supplierselected2 = '';
var categoryselected2 = '';
var itemselected2 = '';
var startdate2 = '';
var enddate2 = '';

//Original Draw
function drawStuff2() {

     $("#datepicker1").datepicker('setDate', new Date("'" + fourweeks + "'")); 
      //Use datepickers default date to initialize graph
      startdate2 = new Date("'" + fourweeks + "'");
      var headers = ['Week'];
      var dates= [];
      var rows = [];

      var data = new google.visualization.DataTable();
		data.addColumn('date', 'Week');

      for (var i = 0; i < demand.length; i++) {
         var dateconversion = new Date(demand[i].week);
      	if(!dates.includes(demand[i].week) && dateconversion >= startdate2) {
            dates.push(demand[i].week);
      	} 
      }

      for(var i=0; i<items.length; i++) {
      	headers.push(items[i].name);
      	data.addColumn('number', items[i].name);
      }

      
      // data.addColumn('number','Total');

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
      	//pushing.push(total);
      	rows.push(pushing);
      	pushing = [];
         total=0;
      }

      data.addRows(rows);

      var chart = new google.visualization.ColumnChart(document.getElementById('chart_div2'));


      var options = {
         isStacked: true,
         width: 700,
         height: 250,
         legend: {position:'right'},
         chartArea: { left: 60, width: "65%", height: "80%" },
         hAxis: {
             gridlines: {count: 5}
           },
         tooltip: { trigger: 'selection' },
         animation:{
           duration: 600,
           easing: 'out',
           startup: true
        }
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

      //console.log('categoryselected2 value: ' + categoryselected2);
      //console.log('categoryselected2 datetype: ' + typeof categoryselected2);
      $('#demanditem2').val("''");
      
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
            var dateconversion = new Date(demand[i].week);
				if(!dates.includes(demand[i].week) && dateconversion >= startdate2) { 
		      		dates.push(demand[i].week);
		      	}
		    }
		} else if(startdate2 === '' && enddate2 != '') {
			for (var i = 0; i < demand.length; i++) {
            var dateconversion = new Date(demand[i].week);
				if(!dates.includes(demand[i].week) && dateconversion <= enddate2) { 
		      		dates.push(demand[i].week);
		      	}
		    }
		} else if(startdate2 != '' && enddate2 != '') {
			for (var i = 0; i < demand.length; i++) {
            var dateconversion = new Date(demand[i].week);
				if(!dates.includes(demand[i].week) && dateconversion <= enddate2 && dateconversion >= startdate2) { 
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

      if(!itemsselected[0]) {
          data.addColumn('number','Total');
      }
     
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
         if(!itemsselected[0]) {
            pushing.push(total);
         }
         rows.push(pushing);
         pushing = [];
         total=0;
      }

      data.addRows(rows);

    
      var chart = new google.visualization.ColumnChart(document.getElementById('chart_div2'));
   
      var options = {
         isStacked: true,
         width: 700,
         height: 250,
         legend: {position:'right'},
         chartArea: { left: 60, width: "65%", height: "80%" },
         hAxis: {
             gridlines: {count: 5}
           },
         tooltip: { trigger: 'selection' },
         animation:{
           duration: 600,
           easing: 'out',
           startup: true
        }
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

      $('#demanditem2').val("''");

      if(isNaN(suppliernum)){
      	supplierselected2 = '';
      	suppliernum = '';
      }else {
      	supplierselected2 = suppliernum;
      }

      //console.log('supplierselected2 value: ' + supplierselected2);
      //console.log('supplierselected2 datetype: ' + typeof supplierselected2);

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
            var dateconversion = new Date(demand[i].week);
				if(!dates.includes(demand[i].week) && dateconversion >= startdate2) { 
		      		dates.push(demand[i].week);
		      	}
		    }
		} else if(startdate2 === '' && enddate2 != '') {
			for (var i = 0; i < demand.length; i++) {
            var dateconversion = new Date(demand[i].week);
				if(!dates.includes(demand[i].week) && dateconversion <= enddate2) { 
		      		dates.push(demand[i].week);
		      	}
		    }
		} else if(startdate2 != '' && enddate2 != '') {
			for (var i = 0; i < demand.length; i++) {
            var dateconversion = new Date(demand[i].week);
				if(!dates.includes(demand[i].week) && dateconversion <= enddate2 && dateconversion >= startdate2) { 
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
      if(!itemsselected[0]) {
         data.addColumn('number','Total');
      }

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
         if(!itemsselected[0]) {
            pushing.push(total);
         }
         rows.push(pushing);
         pushing = [];
         total=0;
      }

      data.addRows(rows);

    
      var chart = new google.visualization.ColumnChart(document.getElementById('chart_div2'));
      
      var options = {
         isStacked: true,
         width: 700,
         height: 250,
         legend: {position:'right'},
         chartArea: { left: 50, width: "65%", height: "80%" },
         hAxis: {
             gridlines: {count: 5}
           },
         tooltip: { trigger: 'selection' },
         animation:{
           duration: 600,
           easing: 'out',
           startup: true
        }
      };

      chart.draw(data, options);


   }

  function startselect2(start) {
  	//console.log('start: ' + start);
   //console.log('start datatype: ' + typeof start);

      var headers = ['Week'];
      var dates= [];
      var rows = [];
      var itemsselected = [];
      chosedate = new Date(start);
      startdate2 = chosedate;

    //console.log('chosedate: ' + chosedate);
    //console.log('startdate2: ' + startdate2);
      // var startdate = Date(startdate);

      var data = new google.visualization.DataTable();
		data.addColumn('date', 'Week');

		if(enddate2 === '') {
			//console.log('enddate is blank');
			for (var i = 0; i < demand.length; i++) {
            var dateconversion = new Date(demand[i].week);
				if(!dates.includes(demand[i].week) && dateconversion >= chosedate) { 
		      		dates.push(demand[i].week);
		      		//console.log(demand[i].week);
                  //console.log(typeof demand[i].week);
		      	}
		    }
		} else if(enddate2 != '') {
			//console.log('endate is selected');
			for (var i = 0; i < demand.length; i++) {
            var dateconversion = new Date(demand[i].week);
				if(!dates.includes(demand[i].week) && dateconversion <= enddate2 && dateconversion >= chosedate) { 
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
   
   if(!itemsselected[0]) {       
      data.addColumn('number','Total');
   }
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
         if(!itemsselected[0]) {
            pushing.push(total);
         }
         rows.push(pushing);
         pushing = [];
         total=0;
      }

      data.addRows(rows);

    
      var chart = new google.visualization.ColumnChart(document.getElementById('chart_div2'));
      
       var options = {
         isStacked: true,
         width: 700,
         height: 250,
         legend: {position:'right'},
         chartArea: { left: 50, width: "65%", height: "80%" },
         hAxis: {
             gridlines: {count: 5}
           },
         tooltip: { trigger: 'selection' },
         animation:{
           duration: 600,
           easing: 'out',
           startup: true
        }
      };
         // pointSize: 10

      chart.draw(data, options);


      // google.visualization.events.addListener(chart, 'onmouseout', function(entry) {
      //    chart.setSelection([]);
      // }); 

   }

function endselect2(end) {

      var headers = ['Week'];
      var dates= [];
      var rows = [];
      var itemsselected = [];
      chosedate = new Date(end);
      enddate2 = chosedate;
      // var startdate = Date(startdate);

      var data = new google.visualization.DataTable();
		data.addColumn('date', 'Week');

		if(startdate2 === '') {
			for (var i = 0; i < demand.length; i++) {
            var dateconversion = new Date(demand[i].week);
				if(!dates.includes(demand[i].week) && dateconversion <= chosedate) { 
		      		dates.push(demand[i].week);
		      	}
		    }
		} else if(startdate2 != '') {
			for (var i = 0; i < demand.length; i++) {
            var dateconversion = new Date(demand[i].week);
				if(!dates.includes(demand[i].week) && dateconversion >= startdate2 && dateconversion <= chosedate) { 
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
            
      if(!itemsselected[0]) {
         data.addColumn('number','Total');
      }

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
         if(!itemsselected[0]) {
            pushing.push(total);
         }
         rows.push(pushing);
         pushing = [];
         total=0;
      }

      data.addRows(rows);

    
      var chart = new google.visualization.ColumnChart(document.getElementById('chart_div2'));

      var options = {
         isStacked: true,
         width: 700,
         height: 250,
         legend: {position:'right'},
         chartArea: { left: 50, width: "65%", height: "80%" },
         hAxis: {
             gridlines: {count: 5}
           },
         tooltip: { trigger: 'selection' },
         animation:{
           duration: 600,
           easing: 'out',
           startup: true
        }
      };

      chart.draw(data, options);


   }

function itemselect2(item) {
     var headers = ['Week'];
      var dates= [];
      var rows = [];
      var itemsselected = [];
      var itemnum = Number(item);

      supplierselected2 = '';
      categoryselected2 = '';

      $('#demandsupplier2').val("''");
      $('#demandcategory2').val("''");

      if(isNaN(itemnum)){
         itemselected2 = '';
         itemnum = '';
      }else {
         itemselected2 = itemnum;
      }

      //console.log('supplierselected2 value: ' + supplierselected2);
      //console.log('supplierselected2 datetype: ' + typeof supplierselected2);

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
            var dateconversion = new Date(demand[i].week);
            if(!dates.includes(demand[i].week) && dateconversion >= startdate2) { 
                  dates.push(demand[i].week);
               }
          }
      } else if(startdate2 === '' && enddate2 != '') {
         for (var i = 0; i < demand.length; i++) {
            var dateconversion = new Date(demand[i].week);
            if(!dates.includes(demand[i].week) && dateconversion <= enddate2) { 
                  dates.push(demand[i].week);
               }
          }
      } else if(startdate2 != '' && enddate2 != '') {
         for (var i = 0; i < demand.length; i++) {
            var dateconversion = new Date(demand[i].week);
            if(!dates.includes(demand[i].week) && dateconversion <= enddate2 && dateconversion >= startdate2) { 
                  dates.push(demand[i].week);
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

          //console.log(itemsselected); 
      if(!itemsselected[0]) {
         data.addColumn('number','Total');
      }

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
         if(!itemsselected[0]) {
            pushing.push(total);
         }
         rows.push(pushing);
         pushing = [];
         total=0;
      }

      data.addRows(rows);

    
      var chart = new google.visualization.ColumnChart(document.getElementById('chart_div2'));
      
       var options = {
         isStacked: true,
         width: 700,
         height: 250,
         legend: {position:'right'},
         chartArea: { left: 50, width: "65%", height: "80%" },
         hAxis: {
             gridlines: {count: 5}
           },
         tooltip: { trigger: 'selection' },
         animation:{
           duration: 600,
           easing: 'out',
           startup: true
        }
      };

      chart.draw(data, options);
}

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
      $("#datepicker5").datepicker('setDate', new Date("'" + fourweeks + "'")); 
      //Use datepickers default date to initialize graph
      startdate = new Date("'" + fourweeks + "'");

      var data = new google.visualization.DataTable();
      data.addColumn('date', 'Week');

      for (var i = 0; i < spend.length; i++) {
      var dateconversion = new Date(spend[i].week);
      if(!dates.includes(spend[i].week) && dateconversion >= startdate) {
            dates.push(spend[i].week);
         } 
      }

      for(var i=0; i<items.length; i++) {
         headers.push(items[i].name);
         data.addColumn('number', items[i].name);
      }

      // data.addColumn('number','Total');

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

         // pushing.push(total);
         console.log(pushing);
         rows.push(pushing);
         //console.log(rows);
         pushing = [];
         total=0;

      }

      data.addRows(rows);

      // var totalcolumn = data.getNumberOfColumns()-2;

      // var formatter = new google.visualization.NumberFormat({
      //     prefix: '$'
      // });


      // for(var i=1;i<=totalcolumn+1;i++) {
      //    formatter.format(data,i);
      // }
      
      //console.log(totalcolumn);
      // console.log('getcolumnlabel: '+ data.getColumnLabel(183));

      var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));



      var options = {
         pointSize: 10,
         width: 700,
         height: 250,
         legend: {position:'right'},
         chartArea: { left: 60, width: "65%", height: "80%" },
         hAxis: {
             gridlines: {count: 5}
           },
         tooltip: { trigger: 'selection' },
         isStacked:true,
         // // seriesType: 'bars',
         // series: '',
         // // bar: {groupWidth: "61.8%"},
         is3D: true,
         animation:{
           duration: 1000,
           easing: 'out'
      },
      };

      // myObj = {};
      // myObj[totalcolumn] = {type : "line"};
      // options.series = myObj;

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


      var formatter = new google.visualization.NumberFormat({
          prefix: '$'
      });


      for(var i=1;i<=totalcolumn+1;i++) {
         formatter.format(data,i);
      }
    
      var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
      var options = {
         width: 700,
         height: 250,
         legend: {position:'right'},
         chartArea: { left: 60, width: "65%", height: "80%" },
         hAxis: {
             gridlines: {count: 5}
           },
         tooltip: { trigger: 'selection' },
         seriesType: 'bars',
         pointSize: 10,
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


      var formatter = new google.visualization.NumberFormat({
          prefix: '$'
      });


      for(var i=1;i<=totalcolumn+1;i++) {
         formatter.format(data,i);
      }
    
      var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
      var options = {
         width: 700,
         pointSize: 10,
         height: 250,
         legend: {position:'right'},
         chartArea: { left: 60, width: "65%", height: "80%" },
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


      var formatter = new google.visualization.NumberFormat({
          prefix: '$'
      });


      for(var i=1;i<=totalcolumn+1;i++) {
         formatter.format(data,i);
      }
    
      var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
      var options = {
         width: 700,
         pointSize: 10,
         height: 250,
         legend: {position:'right'},
         chartArea: { left: 60, width: "65%", height: "80%" },
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


      var formatter = new google.visualization.NumberFormat({
          prefix: '$'
      });


      for(var i=1;i<=totalcolumn+1;i++) {
         formatter.format(data,i);
      }

      var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
      var options = {
         width: 700,
         pointSize: 10,
         height: 250,
         legend: {position:'right'},
         chartArea: { left: 60, width: "65%", height: "80%" },
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


      var formatter = new google.visualization.NumberFormat({
          prefix: '$'
      });


      for(var i=1;i<=totalcolumn+1;i++) {
         formatter.format(data,i);
      }

//Adding some minor changes to help push
      var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
      var options = {
         width: 700,
         pointSize: 10,
          height: 250,
         legend: {position:'right'},
         chartArea: { left: 60, width: "65%", height: "80%" },
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


</script>