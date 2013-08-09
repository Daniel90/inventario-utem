function calendar_load(date_input,value)
{

	// configurations
	//days of the week
	var header= new Array();
	header[1]='Dom';
	header[2]='Lun';
	header[3]='Mar';
	header[4]='Mie';
	header[5]='Jue';
	header[6]='Vie';
	header[7]='Sab';

	var dateFormat='d/m/y'; // d/m/y 
	
	//
	
	
	
	$('wrapper').style.visibility='visible';
	var date = new Date(value);
	if(dateFormat=='d/m/y')
	{
		var vals=value.split('/');
		date.setDate(vals[0]);
		date.setMonth(vals[1]-1);
		date.setYear(vals[2]);
	}
	
	
	var day =date.getDate();
	var month=date.getMonth()+1;
	var year=date.getFullYear();
	if(!checkdate (month, day, year))
	{
		date = new Date();
		day =date.getDate();
		month=date.getMonth()+1;
		year=date.getFullYear();
	}
	
	var table = new Element('table',{
										id:date_input+'_table',
										cellspacing:'0'											
									});
	
	var thead= new Element('thead');
	
	var tr = new Element('tr');
	for (k=1;k<8;k++)
	{
		var th = new Element('th');
		th.update(header[k]);
		tr.insert(th);
	}
	thead.insert(tr);
	table.insert(thead);
	
	var today=new Date();
	
	var days=daysInMonth(month,year);
	
	wdate=date;
	wdate.setDate(1);
	
	var week=date.getDay();
	var tr= new Element('tr');
	if (week>=1)
	{	
		var td= new Element('td',{'colspan':week,'class':'padding'});
		tr.insert(td);
	}	
	for (n=1;n<=days;n++)
	{
		week++;
		if (week==8)
		{
			table.insert(tr);
			
			tr= new Element('tr');
			week=1;
		}
		var nclass="";
		if (today.getDate()==n && (today.getMonth()+1)==month && (today.getFullYear())==year )
		{nclass="today";}	
		
		var savedate=month+"/"+n+"/"+year;
		
		td =new Element('td',{'class':nclass,
							  onClick: "changeDate('"+date_input+"','"+ savedate +"');"});
		td.update(n);
		tr.insert(td);
		
	}
	if (week<7)
	{
		td= new Element('td',{colspan:(7-week),'class':'padding'});
		tr.insert(td);
	}
	table.insert(tr);
	var div= new Element('div',{id:date_input+'_controls',align:'center',style:'position:relative;'});
	
	var previous= calculate_month(month,year,'previous',dateFormat);
	
	var href= new Element('a',{	href:"javascript:void(0);",onClick:"calendar_load('"+date_input+"','"+previous+"');"})
	href.update('<< ');
	div.insert(href);
	
	var span= new Element('span');
	span.update(month+'/'+year);
	div.insert(span);
	
	var next= calculate_month(month,year,'next',dateFormat);
	
	var href= new Element('a',{ href:"javascript:void(0);",onClick:"calendar_load('"+date_input+"','"+next+"');"})
	href.update(' >>');
	div.insert(href);
	
	$(date_input+'_calendar').innerHTML='';
	$(date_input+'_calendar').insert(div);
	
	var divtable= new Element('div',{align:'center'});
	divtable.insert(table)
	
	$(date_input+'_calendar').insert(divtable);
	$(date_input+'_calendar').innerHTML='<input type="hidden" id=\''+date_input+'_format\' value=\''+dateFormat+'\'/>'+$(date_input+'_calendar').innerHTML;
	return false;
}


function calculate_month(actualMonth,actualYear,operation,dateFormat)
{
	if (operation=='next')
	{
		actualMonth++;
		if (actualMonth==13)
		{
			actualMonth=1;
			actualYear++;
		}	
	
	}
	else //  previous
	{
		actualMonth--;
		if (actualMonth==0)
		{
			actualMonth=12;
			actualYear--;
		}	
		
	}	
	
	var date;
	if (dateFormat=='d/m/y')
	{date='1/'+actualMonth+'/'+actualYear;}	
	else
	{date=actualMonth+'/1/'+actualYear;}	
	return date;
}

function checkdate (month, day, year) {
    var myDate = new Date();
    myDate.setFullYear( year,(month-1),day );
    var ret=month >= 1 && month <= 12 && year >= 1 && year <= 3000 && ((myDate.getMonth()+1) == month && day<32);
    return ret;
}

function changeDate(element,originalDate)
{
	var date = new Date(originalDate);
	var day =date.getDate();
	var month=date.getMonth()+1;
	var year=date.getFullYear();
	
	
	if ($F(element+'_format')=='d/m/y')
	{
		$(element).value=day+'/'+month+'/'+year;
	}
	else
	{
		$(element).value=month+'/'+day+'/'+year;
	}
	
	$(element+'_calendar').innerHTML="";
	$('wrapper').style.visibility='hidden';
	return false;
}
function daysInMonth(month,year){
	days=[0,31,29,31,30,31,30,31,31,30,31,30,31]; 
	last=0;
	if (month==2)
	{
		date=new Date(year,1,29)
		seeMonth=date.getMonth();
		if((seeMonth+1)!=month){last=28}
	}
	else
	{
		last=days[month]
	}
	return last;
}  

