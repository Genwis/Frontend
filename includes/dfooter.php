</div></div>
<div style='clear:both;'></div></div>
<script type='text/javascript'>
  <?php
  if($dsb==true){
  echo "var ctx = document.getElementById('chartu');
  
var user = [10, 12, 24, 23];
var sut = Math.min.apply(null,user);
var but = Math.max.apply(null,user);
//var stu = (Math.pow(10, (''+Math.max.apply(null,user)).length-1))/2;
var stut = parseInt((but-sut)/6);
var stu;
if(parseInt((''+stut)[0])>=5){
	stu = Math.pow(10, (''+stut).length);
}else{
	stu = Math.pow(10, (''+stut).length)/2;
}
var su;
if(sut-(sut%(stu*2))-stu>0){
	su=sut-(sut%(stu*2))-stu;
}else{
	su=0;
}


var idu = (''+but).length-(''+stu).length;
//bu=((but+stu)%Math.pow(10,idu))*10;
/*
if(parseInt((''+but+stu)[idu-1])>=5){
	//bu=(but+stu)%Math.pow(10,idu-2)*10;
	bu=((but+stu)%Math.pow(10,(''+stu).length));
	//console.log('pass');
}else{
	bu=((but+stu)%Math.pow(10,(''+stu).length));
}
*/


var rev = [135, 100, 175, 255, 180,220];
var srt = Math.min.apply(null,rev);
var brt = Math.max.apply(null,rev);
var strt = parseInt((brt-srt)/6);
var str;
if(parseInt((''+strt)[0])>=5){
	str = Math.pow(10, (''+strt).length);
}else{
	str = Math.pow(10, (''+strt).length)/2;
}
var sr;
if(srt-(srt%(str*2))-str >0){
sr = srt-(srt%(str*2))-str;
  }else{
	  sr=0;
  }

var chartu = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['March', 'April', 'May', 'June'],
		
        datasets: [{
            label: 'number of users',
            data: user,
            backgroundColor: [
                '#64b5f6',
                '#42a5f5',
                '#2196f3',
                '#349df1',
            ],/*
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
            ],*/
            borderWidth: 0
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:false,
					min: su,
					stepSize: stu
                }
            }],
			xAxes: [{
				gridLines:{
					display: false
				},
				barPercentage: 0.6
			}]
        },
		
		legend: {
            display: false
        }
    }
});



var ctx = document.getElementById('chartr');
var chartr = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['March', 'April', 'May', 'June','July','Agustus'],
		
        datasets: [{
            label: 'amount of revenue',
            data: rev,
            backgroundColor: [
                '#fef0b1'
            ],
			borderColor:'#fdd835',
			/*
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
            ],*/
            borderWidth: 2,
			pointBackgroundColor: '#fff',
			pointHoverBackgroundColor: '#fdd835'
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true,
					min: sr,
					stepSize: str,
					callback: function(value, index, values) {
                        return value+'jt';
                    }
                }
            }],
			xAxes: [{
				gridLines:{
					display: false
				}
			}]
        },
		
		legend: {
            display: false
        }
    }
});";
  }
  ?>

</script>
</body>
</html>