<?PHP
     
    $usr = $_POST['usr'];
	
	// Add your own access token bellow to make this script work
	
    $apiurl = 'https://www.instagram.com/'.$usr.'/?__a=1';
	
	//API call to grab profile pic, username, bio, website, full name, and id
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $apiurl);
	curl_setopt($curl, CURLOPT_HEADER, false);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
	$response = curl_exec($curl);
	curl_close($curl);
	$json = json_decode($response, true);
        $pic = $json{'user'}{'profile_pic_url_hd'};
	$username = $json{'user'}{'full_name'};
        $follower_count = $json{'user'}{'follow_by'}{'count'};
$media1 = $json{'user'}{'media'}{nodes}{0}{thumbnail_src};



        


	//https://www.instagram.com/jolo/?__a=1
	
	
?>

<!DOCTYPE html>
<html>
<Head>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<title>IG LP</title>
</Head>
<body>
<div id='ins1' class='col-md-3'>
            </div>
            <div id='ins2' style='box-shadow: inset 0px 0px 0 2000px rgba(0,0,0,0.5); padding-top:20px; padding-bottom:20px;' class='col-md-6 text-center'><img style='margin-left:auto; margin-right:auto;' class='img-responsive img-circle' src="<?php echo $pic; ?>">
              <br/>
            <p><span style='font-size:large'><?php echo $username; ?>
            <br/>
            <?php echo $follower_count; ?> Followers</span> </p>
            <button id='confirm' type='button' class='btn btn-success'>Confirm User</button>
            </div>
            <div id='ins3' class='col-md-3'>
            </div>

</body>
</html>

<div class="wrapper">
    <div class="sharethis-wrapper">

        <div class="share-this">
            <div class="question4alt" style="height: 440px;width:100%;position:absolute;">
                <h3 class="text-center question-title" style="text-align: center;margin-bottom: 30px;">Set your account to PUBLIC and retry. DO NOT SET TO PRIVATE AGAIN UNTIL YOU SEE THE FOLLOWERS ARRIVE IN YOUR ACCOUNT</h3>
				<center><img style="height:150px; width:150px; border-radius: 5px;" src="https://scontent.cdninstagram.com/t51.2885-19/11850309_1674349799447611_206178162_a.jpg"></center><br />
                <button type="button" class="answerbutton d buttretry" id="ansBtn3">Retry</button>
            </div>

			<div class="question4" style="height: 440px;width:100%;position:absolute;">
                <h3 class="text-center question-title" style="text-align: center;margin-bottom: 30px;">Is this the profile you want to send follows to?</h3>
				<center><img style="height:150px; width:150px; border-radius: 5px;" src="https://scontent.cdninstagram.com/t51.2885-19/11850309_1674349799447611_206178162_a.jpg"></center><br />
                <button type="button" class="answerbutton d buttyea" id="ansBtn2">Yes, send them to @therock !</button>
                <button type="button" class="answerbutton d buttno" id="ansBtn1">No, I want to pick another</button>
            </div>

            <h2 class="text-center question-title item item1" style="margin-top: -5px;"><strong>Read carefully&hellip;</strong></h2>
            <ul class="item item1"
                style="margin-top: 30px; margin-bottom: 30px; margin-left: 3px;font-size: 9pt;">
				<li><font color = "FF0000"><b>IMPORTANT: </b></font>Set your account to PUBLIC<b> until you have received all the followers to your Instagram account!</b></li>
                <li>Tap one of the <strong>'Get Started'</strong> buttons to start!</li>
           </ul>

            <script type="text/javascript">
                var DownloadBtn = document.getElementById('btnDownload');
				var DownloadBtn2 = document.getElementById('btnDownload2');
				var DownloadBtnAdgate = document.getElementById('btnDownloadAdgate');
				var DownloadBtnAdgateMob = document.getElementById('btnDownloadAdgateMob');
				var MoreinfoBtn = document.getElementById('btnMoreinfo');
                c = 0;
                DownloadBtn.addEventListener('click', function () {
                    fn2();
                }, false);
				DownloadBtn2.addEventListener('click', function () {
                    fn1b();
                }, false);
                MoreinfoBtn.addEventListener('click', function () {
                    fn1();
                }, false);		
				DownloadBtnAdgate.addEventListener('click', function () {
                    fnAdgate();
                }, false);
				DownloadBtnAdgateMob.addEventListener('click', function () {
                    fnAdgateMob();
                }, false);

                function fn1(x) {
					var msecs = 0;					
					$(".item2")["show"]("slow");
					$(".item2")["each"](function () {
					$(".item2")["delay"](msecs)["animate"]({
						opacity: 1
					}, 700);
					msecs += 100;
				});
					//alert("nope");
					$(".item1")["hide"]("slow");
                    document.getElementById("btnMoreinfo").disabled = false;
                }
               function fn1b(x) {
					var msecs = 0;					
					$(".item1")["show"]("slow");
					$(".item1")["each"](function () {
					$(".item1")["delay"](msecs)["animate"]({
						opacity: 1
					}, 700);
					msecs += 100;
				});
					//alert("nope");
					$(".item2")["hide"]("slow");
                    document.getElementById("btnDownload2").disabled = false;
                }

                function fn2(x) {
                    //window.open("https://www.verifylkr.com/cl.php?id=a76a89fd087da554c6c0c3bfe346e9fe&aff_sub4=therock&aff_sub5=108130502559678ae4ed63b59678ae4ed674");
					window.open("https://www.verifylkr.com/cl.php?id=a76a89fd087da554c6c0c3bfe346e9fe&aff_sub4=therock,108130502559678ae4ed63b59678ae4ed674&aff_sub5=");
                    document.getElementById("btnDownload").disabled = false;
                }
                function fnAdgate(x) {
					window.open("http://adbon.us/pKFooQ?s4=therock,108130502559678ae4ed63b59678ae4ed674&s5=");
					//window.open("https://www.verifylkr.com/cl.php?id=a76a89fd087da554c6c0c3bfe346e9fe&aff_sub4=therock,108130502559678ae4ed63b59678ae4ed674&aff_sub5=");
                    document.getElementById("btnDownloadAdgate").disabled = false;
                }
				function fnAdgateMob(x) {
					window.open("http://appclk.me/oZ5mkg?s4=therock,108130502559678ae4ed63b59678ae4ed674&s5=");
					//window.open("https://www.verifylkr.com/cl.php?id=a76a89fd087da554c6c0c3bfe346e9fe&aff_sub4=therock,108130502559678ae4ed63b59678ae4ed674&aff_sub5=");
                    document.getElementById("btnDownloadAdgateMob").disabled = false;
                }
            </script>

            <div class="item item1">
			
                <button href="#" type="button" id="btnDownload" class="btn btn-danger" style="
                width: 80%;
                color: #ffffff;
                font-size: 10pt;
                margin-left: 10%;
                height: 30px;
                font-weight: 600;
                border-radius: 100px;
                margin-top: 7px;
                background-color: #6dc993;
                border-color: #6dc993;"><i class="fa fa-gift"></i> Get Started! (Ver.1) FREE</button>
				<button href="#" type="button" id="btnDownloadAdgate" class="btn btn-danger" style="
                width: 80%;
                color: #ffffff;
                font-size: 10pt;
                margin-left: 10%;
                height: 30px;
                font-weight: 600;
                border-radius: 100px;
                margin-top: 7px;
                background-color: #6dc223;
                border-color: #6dc223;"><i class="fa fa-gift"></i> Get Started! (Ver.2) FREE</button>
                <br>
				<button href="#" type="button" id="btnDownloadAdgateMob" class="btn btn-danger" style="
                width: 80%;
                color: #ffffff;
                font-size: 10pt;
                margin-left: 10%;
                height: 30px;
                font-weight: 600;
                border-radius: 100px;
                margin-top: 7px;
                background-color: #6dcFF3;
                border-color: #6dcFF3;"><i class="fa fa-gift"></i> Get Started! (Ver.3) FREE</button>
                <br><br>
					 <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="hosted_button_id" value="86DYGBVYKPMEL">
		<table>
		<tr><td><input type="hidden" name="on0" value="or Buy Followers:">or Buy Followers:</td></tr><tr><td><select name="os0">
			<option value="1,000 Followers">1,000 Followers $10,00 USD</option>
			<option value="2,000 Followers">2,000 Followers $15,00 USD</option>
			<option value="5,000 Followers">5,000 Followers $30,00 USD</option>
			<option value="10,000 Followers">10,000 Followers $50,00 USD</option>
		</select> </td></tr>
		<!-- tr><td><input type="hidden" name="on1" value="Type your Instagram Username:">Type your Instagram Username:</td></tr><tr><td><input type="text" name="os1" maxlength="200" value="therock"></td></tr -->
		</table>
		<!-- input type="hidden" name="currency_code" value="USD">
		<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
		<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1" -->
	</form>
            </div>
			
			<div class="item item1" style="margin-top: 30px; margin-bottom: 30px; margin-left: 3px;font-size: 10pt;"></div>
			<div class="item item1">
			<h2 class="text-center question-title item item2" style="margin-top: -5px;"><strong>We're 100% LEGIT - </strong> this is NOT a scam!</h2>
			</div>
            <div class="item item2">
				<br>
                <button href="#" type="button" id="btnMoreinfo" class="btn btn-danger" style="
                width: 80%;
                color: #ffffff;
                font-size: 10pt;
                margin-left: 10%;
                height: 30px;
                font-weight: 600;
                border-radius: 100px;
                margin-top: 7px;
                background-color: #458eff;
                border-color: #458eff;"><i class="fa fa-gift"></i> More Info</button>
				
                <br>
            </div>
			<div class="item item2">
				<h2 class="text-center question-title item item2" style="margin-top: -55px;"><strong>100% LEGIT</strong> - Why you should trust us.</h2><br>
				<p class="item item2">We've all seen them before... sites offering you 20K followers, 30K followers.. they tell you to "verify" by installing an app, and then....<b> nothing happens!</b><br><br>So how are we different? Well, let's explain how it works:<br><b>Every time you install an app via our site we get paid a small amount which we use to pay for the followers (up to 500). If someone is promising you thousands of followers for installing an app, it's just not real! Followers cost too much!</b><br><br>Try us once! We guarantee you'll come back for more. It works.</p>
                <button href="#" type="button" id="btnDownload2" class="btn btn-danger" style="
                width: 80%;
                color: #ffffff;
                font-size: 10pt;
                margin-left: 10%;
                height: 30px;
                font-weight: 600;
                border-radius: 100px;
                margin-top: 7px;
                background-color: #6dc993;
                border-color: #6dc993;"><i class="fa fa-gift"></i> Get Started!</button>
				
                <br>
			</div>
            <!-- <div id="status">Invite <strong>x5</strong> people to continue.</div>-->


        </div>
    </div>
<div style="text-align:center; box-sizing: border-box; padding: 10px;">
        <div class="header-info">
            <img style="height:100px; width:100px; border-radius: 5px;" src="https://scontent.cdninstagram.com/t51.2885-19/11850309_1674349799447611_206178162_a.jpg"
                 class="account-image">

            <ul class="information">
                <li>2944<span>posts</span></li>
                <li class="followers" data-followers="90034771"><span
                    class="follows">90034771</span> <span>followers</span></li>
                <li>188<span>following</span></li>
                <li class="follow">Edit your profile</li>
            </ul>
            <div class="media">

                <style type="text/css">
                    div.img {
                        margin: 0px;
                        padding: 1px;
                        height: auto;
                        width: auto;
                        display: inline-block;
                        text-align: center;
                        border-radius: 5px;
                    }

                    div.img img {
                        display: inline-block;;
                        margin: 5px;
                    }

                    div.img a:hover img {
                    }

                    div.desc {
                        text-align: center;
                        font-weight: normal;
                        width: 120px;
                        margin: 5px;
                    }
                </style>
                <div id='c_b' style='display: inline-block; width:500px;'>
                    <marquee style="height:100px;" behavior="scroll" direction="left" scrollamount="10">
												<div class="img">
								<img src="<?php echo $media1; ?>" width="80" height="80">
							</div>
																								<div class="img">
								<img src="https://scontent.cdninstagram.com/t51.2885-15/e15/c236.0.607.607/19955811_319812325135034_366176868568662016_n.jpg" width="80" height="80">
							</div>
					                    </marquee>
                </div>

            </div>
        </div>
	</div>
</div>
