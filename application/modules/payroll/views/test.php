<style type="text/css">


.nav.nav-tabs li a {
  background-color: green;
  color:white;
}

.nav.nav-tabs li:not(.active) a {
  pointer-events:none;
  background-color: #2554C7;
  color:white;
}
.nav.nav-tabs li (.active) a{
  background-color: red;
  color:white;
}
ul li a{
  font-size: 12.5px;
}

td, th {	
	padding: 15px;
}
.load_hide{
	display:none;
}
</style>

<div class="row">
<div class="container salary">
<div class="tab-content">
<!--<div class="col-sm-12 col-md-11">-->
<div class="panel ">
<div class="panel-body ">
<table>
<tr>

<th class="emp_new"><strong>Employee Name</strong></th>
<!--<th><strong>Salary Type</strong></th>-->
<th class="emp_new"><strong>Month </strong></th>

<th><strong>&nbsp&nbsp&nbsp&nbsp&nbsp</strong></th>
<th class="addition" style="padding: 10px;"><strong>Basic</strong></th>
<th class="addition"><strong>HRA</strong></th>
<th class="addition"><strong>CA</strong></th>
<th class="addition"><strong>MA</strong></th>
<th class="addition"><strong>TA</strong></th>
<th class="addition"><strong>Arrear</strong></th>
<th><strong>&nbsp&nbsp&nbsp&nbsp&nbsp</strong></th>
<th class="deduction" style="padding: 10px;"><strong>PF</strong></th>
<th class="deduction"><strong>ESI</strong></th>
<th class="deduction"><strong>ADVANCE</strong></th>
<th class="deduction"><strong>LOAN</strong></th>
<th class="deduction"><strong>TDS</strong></th>
<th class="deduction"><strong>Arrear</strong></th>
<th ><strong>&nbsp&nbsp&nbsp&nbsp</strong></th>
<th class="netsal" style="padding: 10px;"><strong>Employer PF</strong></th>
<th class="netsal"><strong>Employer ESI</strong></th>
<th><strong>&nbsp&nbsp&nbsp&nbsp</strong></th>
<th class="netsal" style="padding: 10px;"><strong>Gross Salary</strong></th>
<th class="netsal"><strong>Net Salary</strong></th>
</tr>
<tr>
<td class="emp_new"><input type="text" name="" placeholder="Employee Name" class="in_emp" >
	<input type="hidden" name="" placeholder="Salary Type"  ></td>

<td class="emp_new"><input type="text" name="" placeholder="Month" class="in_emp" ></td>
<td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>
<td class="addition" ><input type="text" name="" placeholder="Basic" class="in_deduction"></td>
<td class="addition"><input type="text" name="" placeholder="HRA" class="in_deduction"></td>
<td class="addition"><input type="text" name="" placeholder="CA" class="in_deduction"></td>
<td class="addition"><input type="text" name="" placeholder="MA" class="in_deduction"></td>
<td class="addition"><input type="text" name="" placeholder="TA" class="in_deduction"></td>
<td class="addition"><input type="text" name="" placeholder="Arrear" class="in_deduction"></td>
<td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>
<td class="deduction"><input type="text" name="" placeholder="PF" class="in_deduction"></td>
<td class="deduction"><input type="text" name="" placeholder="ESI" class="in_deduction""></td>
<td class="deduction"><input type="text" name="" placeholder="ADVANCE" class="in_deduction"></td>
<td class="deduction"><input type="text" name="" placeholder="LOAN" class="in_deduction"></td>
<td class="deduction"><input type="text" name="" placeholder="TDS" class="in_deduction" ></td>
<td class="deduction"><input type="text" name="" placeholder="Arrear" class="in_deduction"></td>
<td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>
<td class="netsal"><input type="text" name="" placeholder="Employer PF" class="in_deduction"></td>
<td class="netsal"><input type="text" name="" placeholder="Employer ESI" class="in_deduction" ></td>
<th><strong>&nbsp&nbsp&nbsp&nbsp</strong></th>
<td class="netsal"><input type="text" name="" placeholder="Gross Salary" class="in_netsal"   style="width: 80px;
    padding: 5px;"></td>
<td class="netsal"><input type="text" name="" placeholder="Net Salary" class="in_netsal"  style="width: 80px;
    padding: 5px;"></td>
</tr>


<tr>
<td class="emp_new"><input type="text" name="" placeholder="Employee Name" class="in_emp" >
	<input type="hidden" name="" placeholder="Salary Type"  ></td>

<td class="emp_new"><input type="text" name="" placeholder="Month" class="in_emp" ></td>
<td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>
<td class="addition" ><input type="text" name="" placeholder="Basic" class="in_deduction"></td>
<td class="addition"><input type="text" name="" placeholder="HRA" class="in_deduction"></td>
<td class="addition"><input type="text" name="" placeholder="CA" class="in_deduction"></td>
<td class="addition"><input type="text" name="" placeholder="MA" class="in_deduction"></td>
<td class="addition"><input type="text" name="" placeholder="TA" class="in_deduction"></td>
<td class="addition"><input type="text" name="" placeholder="Arrear" class="in_deduction"></td>
<td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>
<td class="deduction"><input type="text" name="" placeholder="PF" class="in_deduction"></td>
<td class="deduction"><input type="text" name="" placeholder="ESI" class="in_deduction""></td>
<td class="deduction"><input type="text" name="" placeholder="ADVANCE" class="in_deduction"></td>
<td class="deduction"><input type="text" name="" placeholder="LOAN" class="in_deduction"></td>
<td class="deduction"><input type="text" name="" placeholder="TDS" class="in_deduction" ></td>
<td class="deduction"><input type="text" name="" placeholder="Arrear" class="in_deduction"></td>
<td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>
<td class="netsal"><input type="text" name="" placeholder="Employer PF" class="in_deduction"></td>
<td class="netsal"><input type="text" name="" placeholder="Employer ESI" class="in_deduction" ></td>
<th><strong>&nbsp&nbsp&nbsp&nbsp</strong></th>
<td class="netsal"><input type="text" name="" placeholder="Gross Salary" class="in_netsal"   style="width: 80px;
    padding: 5px;"></td>
<td class="netsal"><input type="text" name="" placeholder="Net Salary" class="in_netsal"  style="width: 80px;
    padding: 5px;"></td>
</tr>


</table>
</div>
</div>
<!--</div>-->
</div>
</div>
</div>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>
<script>

  $('.btnPrevious').click(function(){
    $('.nav-tabs > .active').prev('li').find('a').trigger('click');
  });

  $("#first_name").on('keyup', function() {
    var inpfirstname = document.getElementById('first_name');
    if (inpfirstname.value.length === 0) return;
    document.getElementById("first_name").style.borderColor = "green";
  });
  $("#phone").on('keyup', function() {
    var inputphone = document.getElementById('phone');
    if (inputphone.value.length === 0) return;
   document.getElementById("phone").style.borderColor = "green";
  });
  $("#email").on('keyup', function() {
    var inpemail = document.getElementById('email');
    if (inpemail.value.length === 0) return;
     document.getElementById("email").style.borderColor = "green";
   var reEmail = /^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!\.)){0,61}[a-zA-Z0-9]?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!$)){0,61}[a-zA-Z0-9]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/;

  if(!(inpemail.value).match(reEmail)) {
    //alert("Invalid email address");
    document.getElementById("email_v_message").innerHTML = "Invalid email address";
    document.getElementById("email").style.borderColor = "red";
    return false;
  }
 document.getElementById("email_v_message").innerHTML = "";
  return true;
  });
//hire date
$("#hiredate").on('change', function() {
  var inputhiredate = document.getElementById('hiredate');
  if (inputhiredate.value.length === 0) return;
 document.getElementById("hiredate").style.borderColor = "green";
});
$("#ohiredate").on('change', function() {
  var inputhiredate = document.getElementById('ohiredate');
  if (inputhiredate.value.length === 0) return;
 document.getElementById("ohiredate").style.borderColor = "green";
});
$("#designation").on('change', function() {
  var inputdesignaiton = document.getElementById('designation');
  if (inputdesignaiton.value.length === 0) return;
 document.getElementById("desig").innerHTML = "";
});
$("#division").on('change', function() {
  var inputdivision = document.getElementById('division');
  if (inputdivision.value.length === 0) return;
 document.getElementById("divis").innerHTML = "";
});
$("#rate_type").on('change', function() {
  var inputrate_type = document.getElementById('rate_type');
  if (inputrate_type.value.length === 0) return;
 document.getElementById("rat_tp").innerHTML = "";
});

$("#rate").on('keyup', function() {
  var inputrate = document.getElementById('rate');
  if (inputrate.value.length === 0) return;
 document.getElementById("rate").style.borderColor = "green";
});
$("#pay_frequency").on('change', function() {

  var inputpay_frequency = document.getElementById('pay_frequency');
  if (inputpay_frequency.value.length === 0) return;
document.getElementById("frequ").innerHTML = "";
});
$("#dob").on('change', function() {
  var inputdob = document.getElementById('dob');
  if (inputdob.value.length === 0) return;
 document.getElementById("dob").style.borderColor = "green";
});
$("#gender").on('change', function() {
  var inputgender = document.getElementById('gender');
  if (inputgender.value.length === 0) return;
document.getElementById("gend").innerHTML = "";
});
$("#ssn").on('keyup', function() {
  var inputssn = document.getElementById('ssn');
  if (inputssn.value.length === 0) return;
  document.getElementById("ssn").style.borderColor = "green";
});
$("#h_phone").on('keyup', function() {
  var inputh_phone = document.getElementById('h_phone');
  if (inputh_phone.value.length === 0) return;
document.getElementById("h_phone").style.borderColor = "green";
});
$("#c_phone").on('keyup', function() {
  var inputc_phone = document.getElementById('c_phone');
  if (inputc_phone.value.length === 0) return;
 document.getElementById("c_phone").style.borderColor = "green";
});
$("#e_h_phone").on('keyup', function() {
  var inpute_h_phone = document.getElementById('e_h_phone');
  if (inpute_h_phone.value.length === 0) return;
document.getElementById("e_h_phone").style.borderColor = "green";
});
$("#e_w_phone").on('keyup', function() {
  var inpute_w_phone = document.getElementById('e_w_phone');
  if (inpute_w_phone.value.length === 0) return;
  document.getElementById("e_w_phone").style.borderColor = "green";
});
$("#em_contact").on('keyup', function() {
  var inputem_contact = document.getElementById('em_contact');
  if (inputem_contact.value.length === 0) return;
  document.getElementById("em_contact").style.borderColor = "green";
});
function valid_inf() {
  var usernameInput = document.getElementById('first_name');
  var phoneInput = document.getElementById('phone');
  var emailInput = document.getElementById('email');
  var firstname = $('#first_name').val();
  var phone = $('#phone').val();
  var email = $('#email').val();
  if (firstname == "") {
    document.getElementById("first_name").style.borderColor = "red";

  }else{
    $("#first_name").on('keyup', function(){
     document.getElementById("first_name").style.borderColor = "green";
   });

  }
  if (phone == "") {
    document.getElementById("phone").style.borderColor = "red";

  }else{
    $("#phone").on('keyup', function(){
      document.getElementById("phone").style.borderColor = "green";
   });

  }
  if (email == "") {
     document.getElementById("email").style.borderColor = "red";
    return false;
  }else{
    $("#email").on('keyup', function(){
       document.getElementById("email").style.borderColor = "green";
   });
  }
 var reEmail = /^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!\.)){0,61}[a-zA-Z0-9]?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!$)){0,61}[a-zA-Z0-9]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/;

  if(email !== "" && email.match(reEmail) && phone !== "" && firstname !== ""){
   $('.nav-tabs > .active').next('li').find('a').trigger('click');
 }
} 

// second tab validation
function valid_inf2() {
  var hiredateInput = document.getElementById('hiredate');
  var ohiredateInput = document.getElementById('ohiredate');
  var divisionInput = document.getElementById('division');
  var designationInput = document.getElementById('designation');
  var rate_typeInput = document.getElementById('rate_type');
  var rateInput = document.getElementById('rate');
  var pay_frequencyInput = document.getElementById('pay_frequency');
  var hiredate = $('#hiredate').val();
  var ohiredate = $('#ohiredate').val();
  var designation = $('#designation').val();
  var division = $('#division').val();
  var rate_type = $('#rate_type').val();
  var rate = $('#rate').val();
  var pay_frequency = $('#pay_frequency').val();
  if (division == ""){
    document.getElementById("divis").style.color = "red";
    document.getElementById("divis").innerHTML ='Division Field is Required';
  }else{
    $("#division").on('keyup', function(){
       document.getElementById("divis").style.color = "green";
   });

  }
  if (designation == "") {
       document.getElementById("desig").style.color = "red";
       document.getElementById("desig").innerHTML ='Designation Field is Required';

  }else{
    $("#designation").on('keyup', function(){
        document.getElementById("designation").style.color = "green";
        document.getElementById("desig").innerHTML ='';
   });

  }

  if (hiredate == "") {
     document.getElementById("hiredate").style.borderColor = "red";
  }else{
    $("#hiredate").on('keyup', function(){
     document.getElementById("hiredate").style.borderColor = "green";
   });
  
  }
  
  if (ohiredate == "") {
     document.getElementById("ohiredate").style.borderColor = "red";

  }else{
    $("#ohiredate").on('keyup', function(){
   document.getElementById("ohiredate").style.borderColor = "green";
   });
    

  }
  if (rate_type == "") {
     document.getElementById("rat_tp").style.color = "red";
     document.getElementById("rat_tp").innerHTML ='Rate Type Field is Required';
  }else{
    $("#rate_type").on('keyup', function(){
     document.getElementById("rat_tp").innerHTML = "";
   });
    

  }
  if (rate == "") {
   document.getElementById("rate").style.borderColor = "red";

  }else{
    $("#rate").on('keyup', function(){
    document.getElementById("rate").style.borderColor = "green";
   });
    

  }
  if (pay_frequency == "") {
       document.getElementById("frequ").style.color = "red";
       document.getElementById("frequ").innerHTML ='Frequency Field is Required';
  }else{
    $("#pay_frequency").on('keyup', function(){
      document.getElementById("frequ").innerHTML ='';
   });
    

  }
  if(division !== "" && designation !== "" && hiredate !== "" && ohiredate !== "" && rate_type !== "" && rate !== "" && pay_frequency !== ""){
   $('.nav-tabs > .active').next('li').find('a').trigger('click');
 }
}

// third tab validation
function valid_inf3() {
  
 $('.nav-tabs > .active').next('li').find('a').trigger('click');

}
function valid_class() {
  
 $('.nav-tabs > .active').next('li').find('a').trigger('click');

}
// third tab validation
function valid_inf4() {
  
 
 $('.nav-tabs > .active').next('li').find('a').trigger('click');

}
function valid_inf5() {
  var dobInput = document.getElementById('dob');
  var genderInput = document.getElementById('gender');
  var ssnInput = document.getElementById('ssn');
  var dob = $('#dob').val();
  var gender = $('#gender').val();
  var ssn = $('#ssn').val();
  if (dob == "") {
    document.getElementById("dob").style.borderColor = "red";
  }else{
    $("#dob").on('keyup', function(){
     document.getElementById("dob").style.borderColor = "green";
   });
    

  }
  if (gender == "") {
  document.getElementById("gend").style.color = "red";
  document.getElementById("gend").innerHTML ='Gender Field is Required';

  }else{
    $("#gender").on('keyup', function(){
   document.getElementById("gend").innerHTML ='';
   });
    

  }
  if (ssn == "") {
    document.getElementById("ssn").style.borderColor = "red";

  }else{
    $("#ssn").on('keyup', function(){
     document.getElementById("ssn").style.borderColor = "green";
   });
    

  }
  if(dob !== "" && gender !== "" && ssn !== ""){
   $('.nav-tabs > .active').next('li').find('a').trigger('click');
 }

}
function valid_inf6() {
  
  var h_phoneInput = document.getElementById('h_phone');
  var c_phoneInput = document.getElementById('c_phone');
  var h_phone = $('#h_phone').val();
  var c_phone = $('#c_phone').val();
  if (h_phone == "") {
    document.getElementById("h_phone").style.borderColor = "red";
  }else{
    $("#h_phone").on('keyup', function(){
     document.getElementById("h_phone").style.borderColor = "green";
   });

  }
  if (c_phone == "") {
  document.getElementById("c_phone").style.borderColor = "red";
  }else{
    $("#c_phone").on('keyup', function(){
     document.getElementById("c_phone").style.borderColor = "green";
   });

  }
  if(h_phone !== "" && c_phone !== ""){
   $('.nav-tabs > .active').next('li').find('a').trigger('click');
 }

}
function valid_inf7() {
 var em_contactInput = document.getElementById('em_contact');
 var em_contact = $('#em_contact').val();
 var e_h_phoneInput = document.getElementById('e_h_phone');
 var e_h_phone = $('#e_h_phone').val();
 var e_w_phoneInput = document.getElementById('e_w_phone');
 var e_w_phone = $('#e_w_phone').val();
 if (em_contact == "") {
  document.getElementById("em_contact").style.borderColor = "red";
}else{
  $("#em_contact").on('keyup', function(){
    document.getElementById("em_contact").style.borderColor = "green";
 });

}
if (e_h_phone == "") {
  document.getElementById("e_h_phone").style.borderColor = "red";
}else{
  $("#e_h_phone").on('keyup', function(){
    document.getElementById("e_h_phone").style.borderColor = "green";
 });

}
if (e_w_phone == "") {
   document.getElementById("e_w_phone").style.borderColor = "red";
}else{
  $("#e_w_phone").on('keyup', function(){
   document.getElementById("e_w_phone").style.borderColor = "green";
 });

}
if(em_contact !== "" && e_h_phone !== "" && e_w_phone !== ""){
  $('.nav-tabs > .active').next('li').find('a').trigger('click');
}

}

function valid_inf8() {
  
 document.getElementById("emp_form").submit();

}

</script>

<script type="text/javascript">
// $(function() {
//     $('input[name="working_period[]"]').daterangepicker();
// });
// </script>


<script type="text/javascript">


  $(document).ready(function() {
   
// choose text for the show/hide link - can contain HTML (e.g. an image)
var showText='<span class="btn btn-primary" >Add More</span>';
var hideText='<span class="btn btn-danger" >Close</span>';

// initialise the visibility check
var is_visible = false;

// append show/hide links to the element directly preceding the element with a class of "toggle"
$('.toggle').prev().append(' <a href="#" class="toggleLink">'+showText+'</a>');

// hide all of the elements with a class of 'toggle'
$('.toggle').hide();

// capture clicks on the toggle links
$('a.toggleLink').click(function() {
 
// switch visibility
is_visible = !is_visible;

// change the link depending on whether the element is shown or hidden
$(this).html( (!is_visible) ? showText : hideText);

// toggle the display - uncomment the next line for a basic "accordion" style
//$('.toggle').hide();$('a.toggleLink').html(showText);
$(this).parent().next('.toggle').toggle('slow');

// return false so any link destination is not followed
return false;

});
});

function pf_status_fun()
{
	var radioValue = $("input[name='pf_status']:checked").val();
	if(radioValue == 1)
	{
		$("#pf_uan_div").css("display","block");
		$("#pf_uan").focus();
	}
	else
	{
		$("#pf_uan_div").css("display","none");
	}
	
}

function esi_status_fun()
{
	 var radioValue = $("input[name='esi_status']:checked").val();
	 
	if(radioValue == 1)
	{
		$("#esi_ip_number_div").css("display","block");
		$("#esi_ip_number").focus();
	}
	else
	{
		$("#esi_ip_number_div").css("display","none");
	} 
	
}

</script>

