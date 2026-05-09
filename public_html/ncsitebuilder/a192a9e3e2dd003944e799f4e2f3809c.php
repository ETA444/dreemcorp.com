<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript">
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "DREEMCORP's Official Website"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? (generateCanonicalUrl($sitemapUrls)."\n") : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Welcome to DREEMCORP's Official Website!"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "dreemcorp,george dreemer,official website"); ?>" />
			
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "DREEMCORP's Official Website"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Welcome to DREEMCORP's Official Website!"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="__wb_curr_url__" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="Website Builder" />
			<script src="js/common-bundle.js?ts=20260509121624" type="text/javascript"></script>
	<script src="js/a192a9e3e2dd003944e799f4e2f3809c-bundle.js?ts=20260509121624" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20260509121624" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Poppins:400&amp;subset=devanagari,latin-ext,latin" rel="stylesheet" type="text/css" />
	<link href="css/a192a9e3e2dd003944e799f4e2f3809c-bundle.css?ts=20260509121624" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
	<ga-code/><link rel="shortcut icon" href="gallery/favicons/favicon.ico" type="image/x-icon"><meta name="google-site-verification" content="" /><script type="text/javascript">
  (function (f, b) { if (!b.__SV) { var e, g, i, h; window.mixpanel = b; b._i = []; b.init = function (e, f, c) { function g(a, d) { var b = d.split("."); 2 == b.length && ((a = a[b[0]]), (d = b[1])); a[d] = function () { a.push([d].concat(Array.prototype.slice.call(arguments, 0))); }; } var a = b; "undefined" !== typeof c ? (a = b[c] = []) : (c = "mixpanel"); a.people = a.people || []; a.toString = function (a) { var d = "mixpanel"; "mixpanel" !== c && (d += "." + c); a || (d += " (stub)"); return d; }; a.people.toString = function () { return a.toString(1) + ".people (stub)"; }; i = "disable time_event track track_pageview track_links track_forms track_with_groups add_group set_group remove_group register register_once alias unregister identify name_tag set_config reset opt_in_tracking opt_out_tracking has_opted_in_tracking has_opted_out_tracking clear_opt_in_out_tracking start_batch_senders people.set people.set_once people.unset people.increment people.append people.union people.track_charge people.clear_charges people.delete_user people.remove".split( " "); for (h = 0; h < i.length; h++) g(a, i[h]); var j = "set set_once union unset remove delete".split(" "); a.get_group = function () { function b(c) { d[c] = function () { call2_args = arguments; call2 = [c].concat(Array.prototype.slice.call(call2_args, 0)); a.push([e, call2]); }; } for ( var d = {}, e = ["get_group"].concat( Array.prototype.slice.call(arguments, 0)), c = 0; c < j.length; c++) b(j[c]); return d; }; b._i.push([e, f, c]); }; b.__SV = 1.2; e = f.createElement("script"); e.type = "text/javascript"; e.async = !0; e.src = "undefined" !== typeof MIXPANEL_CUSTOM_LIB_URL ? MIXPANEL_CUSTOM_LIB_URL : "file:" === f.location.protocol && "//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//) ? "https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js" : "//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js"; g = f.getElementsByTagName("script")[0]; g.parentNode.insertBefore(e, g); } })(document, window.mixpanel || []);
 
// Near entry of your product, init Mixpanel
mixpanel.init("", {
  api_host: "https://api-eu.mixpanel.com",
  debug: true,
  track_pageview: true,
  persistence: "localStorage",
  record_sessions_percent: 100, //records 100% of all sessions
  record_heatmap_data: true,
});
</script>
	<script type="text/javascript">
	window.useTrailingSlashes = false;
	window.disableRightClick = false;
	window.currLang = 'en';
</script>
		
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->

		<script type="text/javascript">
		$(function () {
<?php $wb_form_send_success = popSessionOrGlobalVar("wb_form_send_success"); ?>
<?php if (($wb_form_send_state = popSessionOrGlobalVar("wb_form_send_state"))) { ?>
	<?php if (($wb_form_popup_mode = popSessionOrGlobalVar("wb_form_popup_mode")) && (isset($wbPopupMode) && $wbPopupMode)) { ?>
		if (window !== window.parent && window.parent.postMessage) {
			var data = {
				event: "wb_contact_form_sent",
				data: {
					state: "<?php echo str_replace('"', '\"', $wb_form_send_state); ?>",
					type: "<?php echo $wb_form_send_success ? "success" : "danger"; ?>"
				}
			};
			window.parent.postMessage(data, "<?php echo str_replace('"', '\"', popSessionOrGlobalVar("wb_target_origin")); ?>");
		}
	<?php $wb_form_send_success = false; $wb_form_send_state = null; $wb_form_popup_mode = false; ?>
	<?php } else { ?>
		wb_show_alert("<?php echo str_replace(array('"', "\r", "\n"), array('\"', "", "<br/>"), $wb_form_send_state); ?>", "<?php echo $wb_form_send_success ? "success" : "danger"; ?>");
	<?php } ?>
<?php } ?>
});    </script>
</head>


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a192a9e3e2dd003944e799f4e2f3809c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a192a9e3ddff022b00fcb8dc3a42256a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a192a9e3ddff03ecfca403351f987e1c" class="wb_element wb_element_picture" data-plugin="Picture" title="dreemcorp offical logo"><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="{{base_url}}"><img loading="lazy" alt="dreemcorp offical logo" src="gallery_gen/4a481d191fd37c40392e27297eeb524a_126x136_fit.png?ts=1778318184"></a></div></div></div><div id="a192a9e3ddff04d9ba9bfa46007e7918" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div></div></div></div></div><div id="wb_main_a192a9e3e2dd003944e799f4e2f3809c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a192aa08cfc8000fd41a9c882376b362" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a192aa08cfc8000fd41a9c882376b362_video_background" class="wb_video_background" data-video="gallery/dc-web-landing-video-bgd-001-lc.mp4" data-start="" data-end=""></div><div id="a192aa08b4400032fa553da69f183f56" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a192a9f1fd5e00868803df3281b023f6" class="wb_element" data-plugin="CustomHtml"><div style="width: 100%; height: 100%;">
<div data-replaced-tag="html" lang="en">
<div data-replaced-tag="head">
    
    
    <title>Motto Animation</title>
    <style>
        #motto {
            font-family: 'Avenir Light', sans-serif;
            font-size: 46px;
            line-height: 80px;
            color: white;
            font-weight: bold;
            white-space: nowrap;
            width: 100%;
            text-align: center;
            position: relative;
        }
        #cursor {
            display: inline-block;
            width: 2px;
            height: 44px;
            background-color: #e50004;
            animation: blink 0.7s steps(1, end) infinite;
            margin-left: 5px;
        }
        @keyframes blink {
            50% { opacity: 0; }
        }
        @media (max-width: 768px) {
            #motto {
                font-size: 35.5px;
                line-height: 64px;
            }
            #cursor {
                height: 35.5px;
            }
        }
    </style>
</div>
<div data-replaced-tag="body">
    <div id="motto"><span id="cursor"></span></div>

    <script>
        const phrases = ["Creatio perpetua.", "Perpetual creation."];
        const typingSpeed = 50;
        const pauseBeforeFlash = 2666;
        const flashDuration = 40;
        const pauseBetweenPhrases = 1111;

        let currentPhrase = 0;
        let charIndex = 0;

        function typePhrase() {
            const mottoElement = document.getElementById('motto');
            const cursorElement = document.getElementById('cursor');

            // Adjust phrase for mobile view
            let displayText = phrases[currentPhrase];
            if (window.innerWidth < 444 && currentPhrase === 0) {
                displayText = "Creatio perpetua.";
            }

            let nextChar = displayText.slice(charIndex, charIndex + 1);
            if (nextChar === '<' && displayText.substr(charIndex, 4) === '<br>') {
                nextChar = '<br>';
                charIndex += 3; // Advance index to skip the entire tag
            }

            mottoElement.innerHTML = displayText.slice(0, charIndex);
            mottoElement.appendChild(cursorElement); // Ensures cursor is always at the end of the text

            if (charIndex < displayText.length) {
                charIndex++;
                setTimeout(typePhrase, typingSpeed);
            } else {
                setTimeout(flashText, pauseBeforeFlash); // Start flashing after the shortened pause
            }
        }

        function flashText() {
            const mottoElement = document.getElementById('motto');
            let flashTimes = 10;
            function flash() {
                mottoElement.style.opacity = mottoElement.style.opacity === '0' ? '1' : '0';
                if (flashTimes > 0) {
                    flashTimes--;
                    setTimeout(flash, flashDuration);
                } else {
                    mottoElement.style.opacity = '0'; // Make text disappear on the last flash
                    setTimeout(() => {
                        currentPhrase = (currentPhrase + 1) % phrases.length;
                        charIndex = 0; // Reset the character index for the new phrase
                        mottoElement.style.opacity = '1'; // Ensure text is visible before typing starts
                        typePhrase(); // Start typing the new phrase
                    }, pauseBetweenPhrases);
                }
            }
            flash();
        }

        window.onload = typePhrase;
    </script>
</div>
</div>
</div></div></div></div></div></div><div id="a192a9e3ddff08bd023a5e139397411b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a192a9e3ddff09997b8aae72daf02fba" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-custom1" data-dnid="10134">Contact</h2>
</div><div id="a192a9e3ddff0aa7af3c71dc23636a36" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom2" data-dnid="10136">To contact us, fill out the form below.</p></div><div id="a192a9e3ddff0be04ac40625c1b2a4cc" class="wb_element" data-plugin="Form"><form id="a192a9e3ddff0be04ac40625c1b2a4cc_form" class="wb_form wb_vertical_form wb_placeholder_form wb_form_ltr wb_form_vertical" method="post" enctype="multipart/form-data" action="__wb_curr_url__"><input type="hidden" name="wb_form_id" value="30f5af29"><input type="hidden" name="wb_form_uuid" value="84c02b0e"><input type="hidden" name="secure_token" value="<?php echo session_id() ? ('a192a9e3ddff0be04ac40625c1b2a4cc:' . ($_SESSION['wb_form_secure_token_a192a9e3ddff0be04ac40625c1b2a4cc'] = md5(microtime()."a192a9e3e2dd003944e799f4e2f3809c"))) : ''?>"><textarea name="message" rows="3" cols="20" class="hpc" autocomplete="off"></textarea><table><tr><th></th><td><input type="hidden" name="wb_input_0" value="Name"><div><input class="form-control form-field" type="text" value="" placeholder="Name" maxlength="255" name="wb_input_0" required="required"></div></td></tr><tr><th></th><td><input type="hidden" name="wb_input_1" value="Email"><div><input class="form-control form-field" type="email" value="" placeholder="Email" name="wb_input_1" required="required"></div></td></tr><tr class="area-row"><th></th><td><input type="hidden" name="wb_input_2" value="Message"><div><textarea class="form-control form-field form-area-field" rows="4" placeholder="Message" name="wb_input_2" required="required"></textarea></div></td></tr><tr class="form-footer"><td colspan="2" class="text-right"><button type="submit" class="btn btn-default"><span>Send</span></button></td></tr></table><?php if (isset($wbPopupMode) && $wbPopupMode): ?><input type="hidden" name="wb_popup_mode" value="1" /><?php endif; ?></form><script type="text/javascript">
			<?php $wb_form_id = sessionOrGlobalVar("wb_form_id"); if ($wb_form_id == "30f5af29") { ?>
				<?php popSessionOrGlobalVar("wb_form_id"); ?>
				var formValues = <?php echo json_encode(popSessionOrGlobalVar("post")); ?>;
				var formErrors = <?php echo json_encode(popSessionOrGlobalVar("formErrors")); ?>;
				wb_form_validateForm("30f5af29", formValues, formErrors);
			<?php } ?>
			</script><script>$(function () {
	$('#a192a9e3ddff0be04ac40625c1b2a4cc form').on('submit', function (e) {
		if (document.cookieIsAllowed && !document.cookieIsAllowed("_GRECAPTCHA")) {
			e.stopPropagation();
			$(this).find('button[type=submit]').append($('<input>').attr('type', 'hidden').attr('name', 'cookieDontAllow').val('1'));
			return true;
		}		;return true;
	});
});
</script></div></div></div></div></div><div id="wb_footer_a192a9e3e2dd003944e799f4e2f3809c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a192a9e3ddff0cc5ea046d3e60ffd19c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a192a9e3ddff0db6029a674330a518da" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom3" data-dnid="10148">Related Domains:</p>

<p class="wb-stl-custom4" data-dnid="10150" style="text-align: center;"><a href="https://www.datasafari.dev">datasafari.dev</a></p>

<p class="wb-stl-custom4" data-dnid="10150" style="text-align: center;"><a href="https://www.georgedreemer.com">georgedreemer.com</a></p>

<p class="wb-stl-custom4" data-dnid="10150" style="text-align: center;"><a href="https://www.skipschoolmakemoney.com">skipschoolmakemoney.com</a></p>
</div><div id="a192a9e3ddff0e537dfadc021ddce42c" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-custom4" data-dnid="10152">© 2024 <a data-_="Link" href="dreemcorp.com">DREEMCORP</a></p>
</div></div></div><div id="a192a9e3ddff0f095cd9b8775c999409" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"></div></div><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#footer, #footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});
			</script></div></div></div></div>{{hr_out}}</body>
</html>
