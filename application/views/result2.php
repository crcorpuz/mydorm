<?php 
	echo '<div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"></h3>
        </div>
        <div class="panel-body">';
    if (!empty($result))
	{
        echo "<hr>";
        echo '<div>
        <label>MONTHLY BILL</label><br>
        <table class="table table-bordered table-hover" width="600">
            <thead>
                <tr>
                    <th>Particulars</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td>1 Electric Fan</td>
            		<td>120.00</td>
            	</tr>
            	<tr>
            		<td>Lodging Fee</td>
            		<td>250</td>
            	</tr>
            	<tr>
            		<td>Surcharge(5%)</td>
            		<td>50</td>
            	</tr>
            	<tr>
            		<td>TOTAL</td>
            		<td>500</td>
            	</tr>
            </tbody>
  			</table></div>
  			<hr>
  			<div>
  			<label>ACCOUNT DETAILS (1st Sem 2014-2015)</label><br>
  			<div>
  				<table class="table table-bordered table-hover" width="600">
            	<thead>
                <tr>
                    <th>Month</th>
                    <th>Status</th>
                </tr>
            	</thead>
            	<tbody>
            	<tr>
            		<td>August</td>
            		<td>Paid</td>
            	</tr>
            	<tr>
            		<td>September</td>
            		<td>Paid</td>
            	</tr>
            	<tr>
            		<td>October</td>
            		<td>Not paid</td>
            	</tr>
            	<tr>
            		<td>November</td>
            		<td>Not paid</td>
            	</tr>
            	</tbody>
  				</table></div>
  			</div>
  			<hr>
  			<div class="row">
  				<form>
  				<div class="form-group">
  				<div class="col-sm-4">
  					<label for="months_to_pay">Number of Months to be Paid</label>
                    <input id="months_to_pay" name="months_to_pay" type="text" class="form-control" placeholder="Ex. 1" value="">
  					<br>
                    <label for="billing_num">Billing Number</label>
                    <input id="billing_number" name="billing_number" type="text" class="form-control"  placeholder="Ex. 0001" value="">
                    <br>
                    <label for="date_issued">Date Issued</label>
                    <input id="date_issued" name="date_issued" type="date" class="form-control">
  					<br>
                    <button type="button" class="btn btn-default">Issue</button><label>
  				</div>
  				</form>
			</div>
			</div>
  		';
  		
     }  
	else
	{
		echo "No record found.</div>";
	}
?>