<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Editable Invoice</title>
	
	<link rel='stylesheet' type='text/css' href='<?php echo Yii::app()->request->baseUrl; ?>/EditableInvoice/css/style.css' />
	<link rel='stylesheet' type='text/css' href='<?php echo Yii::app()->request->baseUrl; ?>/EditableInvoice/css/print.css' media="print" />
	<script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl; ?>/EditableInvoice/js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl; ?>/EditableInvoice/js/example.js'></script>
  
</head>

<body>

	<div id="page-wrap">

		<div id="header">TRIBELI LIMITED PURCHASE ORDER</div>
		<br  /><br  />
		<div id="identity">
		   <span id="customer-title"><?php echo $model->supplier->CompanyName;  ?>
            <br  />
c/o  <?php echo $model->supplier->ContactTitle ; ?>. <?php echo $model->supplier->ContactName; ?>
</span>	<div style="clear:both"></div>
            <span id="address">
Address:<?php echo $model->supplier->Address; ?>,<br  />
city:<?php echo $model->supplier->City; ?><br  />
    
Country:<?php  echo $model->supplier->Country; ?> <br  />
Phone: <?php echo $model->supplier->Phone; ?><br  />
    
fax:<?php echo $model->supplier->Fax; ?><br  />

website: <?php echo $model->supplier->HomePage; ?>
</span>

            <div class="logo">

              Tribeli Limited.<br />
              112 Ogudu Road.<br />
              Ogudu GRA LAGOS.<br />
            </div>
		
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer">

    

            <table id="meta">
                <tr>
                    <td class="meta-head">Order #</td>
                    <td>ORD-<?php  echo $model->Id; ?> </td>
                </tr>
                  <tr>
                    <td class="meta-head">Order Prepared by:</td>
                    <td><div class="due"><?php  echo yii::app()->user->name; ?></div></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><?php  echo $model->OrderDate; ?></td>
                </tr>
                <tr>
                    <td class="meta-head">Total Amount</td>
                    <td><div class="due">&#8358;<?php  echo number_format($model->TotalPrice); ?></div></td>
                </tr>

            </table>
		
		</div>
		
		<table id="items">
		
		  <tr>
		      <th>Item nO</th>
              <th>SKU</th>
		      <th>Product Name/Desc</th>
              <th>SiZe</th>
		      <th>Unit Cost</th>
              <th>Pack Cost</th>
		      <th>Quantity</th>
		      <th>Amount</th>
		  </tr>
        
		   <?php foreach($model->orderProducts as $product): ?>
		  <tr class="item-row" style="border-bottom:1px solid #333;">
          <td ><?php echo $product->product->ProductSKU; ?></td>
          <td><div class="delete-wpr"><?php echo $product->product->Id; ?><!--<a class="delete" href="javascript:;" title="Remove row">X</a>--></div></td>
		      <td class="description"><div class="delete-wpr"><?php echo $product->product->ProductName; ?></div></td>
		      <td ><?php echo $product->product->size; ?></td>
		      <td>&#8358;<?php echo number_format($product->product->UnitPrice);?></td>
              <td>&#8358;<?php echo number_format($product->product->PackPrice);?></td>
		      <td><?php echo $product->Quantity;?></td>
		      <td><span class="price">&#8358;<?php echo number_format($product->LineTotal);?></span></td>
		  </tr>
		  <?php endforeach; ?>
		<!--  <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><textarea>SSL Renewals</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>

		      <td class="description"><textarea>Yearly renewals of SSL certificates on main domain and several subdomains</textarea></td>
		      <td><textarea class="cost">$75.00</textarea></td>
		      <td><textarea class="qty">3</textarea></td>
		      <td><span class="price">$225.00</span></td>
		  </tr>-->
		  
		  <!--<tr id="hiderow">
		    <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
		  </tr>-->
		  
		  <!--<tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal">$875.00</div></td>
		  </tr>-->
		  <tr class="blank">

		      <td colspan="5" class="blank" > </td>
		      <td colspan="2" class="total-line">Total</td>
		      <td class="total-line"><div id="total">&#8358;<?php echo number_format($model->TotalPrice);?></div></td>
		  </tr>
       
          	 
		  <!--<tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Amount Paid</td>

		      <td class="total-value"><textarea id="paid">$0.00</textarea></td>
		  </tr>-->
		  <!--<tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><div class="due">$875.00</div></td>
		  </tr>-->
		
        
		</table>
        <div style="clear:both"></div>
     

    

            
		<div id="terms2">
		  <h4>Terms:</h4>
		 <span> NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</span></div>
		<div id="terms">
		  <img src="<?php echo Yii::app()->baseUrl; ?>/images/signature.png"/><h5>Signature</h5>
		</div>
		<!--<script>var pfHeaderImgUrl = '';var pfHeaderTagline = '';var pfdisableClickToDel = 1;var pfHideImages = 1;var pfImageDisplayStyle = 'block';var pfDisablePDF = 0;var pfDisableEmail = 1;var pfDisablePrint = 0;var pfCustomCSS = 'http://tribelinigeria.com/ordermanager/EditableInvoice/css/style.css';var pfBtVersion='1';(function(){var js, pf;pf = document.createElement('script');pf.type = 'text/javascript';if('https:' == document.location.protocol){js='https://pf-cdn.printfriendly.com/ssl/main.js'}else{js='http://cdn.printfriendly.com/printfriendly.js'}pf.src=js;document.getElementsByTagName('head')[0].appendChild(pf)})();</script><a href="http://www.printfriendly.com" style="color:#6D9F00;text-decoration:none;" class="printfriendly" onclick="window.print();return false;" title="Printer Friendly and PDF"><img style="border:none;-webkit-box-shadow:none;box-shadow:none;" src="http://cdn.printfriendly.com/button-print-blu20.png" alt="Print Friendly and PDF"/></a>-->
        
	
	</div>
	
</body>

</html>