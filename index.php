<?php require_once ("config.php");?>
<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
	<meta charset="UTF-8">
	<title><?php echo "$page_name" ;?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="expires" content="0" />

	<meta name="description" content="<?php echo $sharing_description ; ?>">
	<meta name="keywords" content="<?php echo $sharing_name ; ?>">
	<meta name="author" content="<?php echo $sharing_url ; ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">		
	<meta name="google" value="notranslate">
	<meta name="robots" content="index, follow">
	<meta name="distribution" content="web">

	<meta property="og:url"                content="<?php echo $sharing_url ; ?>" />
	<meta property="og:type"               content="article" />
	<meta property="og:title"              content="<?php echo $sharing_name ; ?>" />
	<meta property="og:description"        content="<?php echo $sharing_description ; ?>" />
	<meta property="fb:app_id"              content="<?php echo $fb_app_id;?>" />
	<meta property="og:image" content="assets/fbaid.png">

	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="icon" type="image/png" href="assets/favico.png" />
	<link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">
	<script>
		var countDownDate = new Date("<?php echo $aid_timer ;?>").getTime();
		var x = setInterval(function() {
			var now = new Date().getTime();
			var distance = countDownDate - now;
			var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((distance % (1000 * 60)) / 1000);
			document.getElementById("aidtime").innerHTML = + days + " <b>  ?????? ?? </b> " + hours + "<b>  ???????? ?? </b> "
			+ minutes + "<b> ?????????? ??</b> " + seconds + " <b> ?????????? </b>" ;
			document.getElementById("aidsaid").innerHTML ="<?php echo $aid_time ;?>"  ;
			if (distance < 0) {
			clearInterval(x);
			document.getElementById("aidtime").innerHTML = "";
			document.getElementById("aidsaid").innerHTML = "<?php echo $aid_said ;?>";
			}
		}, 1000);
	</script>
</head>
<body>
<div class="container">
	<div class="subcontainer">
		<center>
			<?php if (empty ($small_ads_id)) { } else {?>
				<ins 
					class="adsbygoogle"
					style="display:inline-block;min-width:100%;max-width:970px;width:100%;height:90px"
					data-ad-client="<?php echo $small_ads_id ; ?>"
					data-ad-slot="<?php echo $small_ads_slot ; ?>">
				</ins>
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<script>(adsbygoogle = window.adsbygoogle || []).push({});</script>	 
			<?php } ?>	
			<img width="100%" src="assets/am.png" />	
			<h2><?php echo "$aid_from" ;?></h2>
				<figure><h1 class="naming"><?php if (empty ($name)) { echo "???????? ??????"; } else { echo $name; }?></h1></figure>
			<h3><?php echo "$aid_to" ;?></h3>
			<?php if (empty ($name)) {  } else { ?>
				<div class="share" >
					<div class="shareb whatsapp" >
						<a
						data-action="share/whatsapp/share"
							href="whatsapp://send?text=
								<?php echo $sharing_message;?>%0A
								<?php echo $sharing_invite;?>%0A
									????????????????????????%0A
								<?php echo $sharing_url;?>/index.php?name=<?php echo $name;?>%0A
								<?php echo $sharing_advice;?>%0A
									????????????????????????%0A
								<?php echo $sharing_url;?>
							">
							<i class="fab fa-whatsapp"></i>
								<span> ?????????? ?????? ???????????????? </span>
							<i class="fab fa-whatsapp"></i>
						</a>
					</div>
					<div class="shareb facebook" >
						<a target="_blank" href="http://m.facebook.com/sharer.php?u=<?php echo $sharing_url;?>/index.php?name=<?php echo $name;?>%0A">
							<i class="fab fa-facebook"></i>
								<span> ???????????? ?????? ???????????????? </span> 
							<i class="fab fa-facebook"></i>
						</a>
					</div>
				</div>
			<?php } ?>
			<?php if (empty ($name)) { ?>
				<img width="100%" src="assets/separator.png" />
				<form method="get" action="index.php">
					<div class="name_input">
					<p><?php echo "$aid_creat" ;?></p>
						<input class="" autocomplete="off" type="name" required="" maxlength="50" name="name" placeholder="???????? ???????? ??????">
						<button class="btn" type="submit"><i class="fas fa-check-circle"></i> ?????????? ?????????? ?????????? </button>
					</div>
					
					{code adsense}
					
				</form>
			<?php } else { } ?>
			<img width="100%" src="assets/separator.png" />
			 <p class="aid_msg" >
				 <i class="fas fa-quote-right"></i>  
					<?php echo "$aid_text" ;?> 
				 <i class="fas fa-quote-left"></i> 
					" <?php if (empty ($name)) { echo "???????? ??????"; } else { echo $name; }?> " 
			 </p>	
			<?php if (empty ($big_ads_id)) { } else {?>			
				{code adsense}			
			<?php } ?>			
			<img width="100%" src="assets/separator.png" />
			<form method="get" action="index.php">
				<div class="name_input">
				<p><?php echo "$aid_creat" ;?></p>
					<input class="" autocomplete="off" type="name" required="" maxlength="50" name="name" placeholder="???????? ???????? ??????">
					<button class="btn" type="submit"><i class="fas fa-check-circle"></i> ?????????? ?????????? ?????????? </button>
				</div>
				
				{code adsense}
				
			</form>
			<?php if (empty ($name)) {  } else { ?>
				<div class="share" >
					<div class="shareb whatsapp" >
						<a
						data-action="share/whatsapp/share"
							href="whatsapp://send?text=
								<?php echo $sharing_message;?>%0A
								<?php echo $sharing_invite;?>%0A
									????????????????????????%0A
								<?php echo $sharing_url;?>/index.php?name=<?php echo $name;?>%0A
								<?php echo $sharing_advice;?>%0A
									????????????????????????%0A
								<?php echo $sharing_url;?>
							">
							<i class="fab fa-whatsapp"></i>
								<span> ?????????? ?????? ???????????????? </span>
							<i class="fab fa-whatsapp"></i>
						</a>
					</div>
					<div class="shareb facebook" >
						<a target="_blank" href="http://m.facebook.com/sharer.php?u=<?php echo $sharing_url;?>">
							<i class="fab fa-facebook"></i>
								<span> ???????????? ?????? ???????????????? </span> 
							<i class="fab fa-facebook"></i>
						</a>
					</div>
				</div>	
				<img width="100%" src="assets/separator.png" />
			<?php } ?>
			<?php if (empty ($small_ads_id)) { } else {?>
				<ins 
					class="adsbygoogle"
					style="display:inline-block;min-width:100%;max-width:970px;width:100%;height:90px"
					data-ad-client="<?php echo $small_ads_id ; ?>"
					data-ad-slot="<?php echo $small_ads_slot ; ?>">
				</ins>
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<script>(adsbygoogle = window.adsbygoogle || []).push({});</script>	 
			<?php } ?>		
			<div class="aid" >
				<i class="far fa-clock"></i>
				<p id="aidsaid"></p>
				<p id="aidtime"></p>
			</div>
			<figure><h1 class="naming"><?php echo $aid_said_footer ; ?></h1></figure>			
			<?php if (empty ($big_ads_id)) { } else {?>			
				{code adsense}			
			<?php } ?>				
		</center>
	</div>
</div>
</body>
</html>
