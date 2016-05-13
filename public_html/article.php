<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<script src="maxheight.js" type="text/javascript"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-23068072-9']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body id="page1" onload="new ElementMaxHeight()">
<div class="top_bg">
<div id="main">
	<!-- header  -->
<?php
include("include/header.html");
?>
	<!-- content -->
	<div id="content">
		<div class="content_indent">
			<div class="width">
				<div class="col_1 line_y maxheight">
					<div class="indent">
					<h5 class="font_1">Articles:</h5>
					<ul style="margin-bottom:19px">
                       <li><a href="personalinjury.php">Personal Injury</a></li>
                       <li><a href="criminal.php">Criminal</a></li>
                       <li><a href="traffic.php">Traffic</a></li>
                       <li><a href="probate.php">Wills &amp; Probate</a></li>
                       <li><a href="general.php">Business &amp; General Practice</a></li>
					</ul>
					<h5 class="font_1">&nbsp;</h5>
</div>
				</div>
				<div class="col_2 maxheight">
				  <div class="indent_1 line_x">
				    <p>&nbsp;</p>
                    
                    
                         <?php
			if ($_GET['article']!='') {			  
				$article = $_GET['article'];
				if($article == '1'){include("articles/accident.html"); }
				if($article == '2'){include("articles/pinjury.html"); }
				if($article == '3'){include("articles/accidentrep.html"); }
				if($article == '4'){include("articles/uninsured.html"); }
				if($article == '5'){include("articles/workerscomp.html"); }
				if($article == '6'){include("articles/hitrun.html"); }
				if($article == '7'){include("articles/fall_down.html"); }
				if($article == '8'){include("articles/dog_bites.html"); }
				if($article == '9'){include("articles/pedestrian_accidents.html"); }
				if($article == '10'){include("articles/motorcycle_hits.html"); }
				if($article == '11'){include("articles/apartment_injuries.html"); }
				if($article == '12'){include("articles/wrongful_death.html"); }
				if($article == '13'){include("articles/medical_malpractice.html"); }
				if($article == '14'){include("articles/bicylce_injuries.html"); }
				if($article == '15'){include("articles/Personal_Injury_Fact_Sheet_Interview_Form.html"); }



				if($article == '1c'){include("articles/marijuana.html"); }
				if($article == '2c'){include("articles/intervention.html"); }
				if($article == '3c'){include("articles/distribute.html"); }
				if($article == '4c'){include("articles/assault.html"); }
				if($article == '5c'){include("articles/posession.html"); }
				if($article == '6c'){include("articles/possession2.html"); }
				if($article == '7c'){include("articles/terroristic_threats.html"); }
				if($article == '8c'){include("articles/shoplifting.html"); }
				if($article == '9c'){include("articles/expungement.html"); }
				if($article == '10c'){include("articles/sentencing.html"); }
				if($article == '11c'){include("articles/right_to_remain_silient.html"); }
				if($article == '12c'){include("articles/bad_checks.html"); }
				if($article == '13c'){include("articles/theft_movable_property.html"); }
				if($article == '14c'){include("articles/juvenile_law.html"); }
				if($article == '15c'){include("articles/receiving_stolen_property.html"); }
				if($article == '16c'){include("articles/resisting_arrest.html"); }
				if($article == '17c'){include("articles/disorderly_conduct.html"); }
				if($article == '18c'){include("articles/prostitution.html"); }
				if($article == '19c'){include("articles/New_Jersey_Municipal_Court_Criminal_Interview_Form.html"); }
				
				
				
				if($article == '1t'){include("articles/dwi.html"); }
				if($article == '2t'){include("articles/traffic_points.html"); }
				if($article == '3t'){include("articles/drving_while_suspended.html"); }
				if($article == '4t'){include("articles/arrested_dwi.html"); }
				if($article == '5t'){include("articles/drving_without_insurance.html"); }
				if($article == '6t'){include("articles/state_v_chun.html"); }				
				if($article == '7t'){include("articles/traffic_ticket_representation.html"); }
				if($article == '8t'){include("articles/speeding_and_radar.html"); }
				if($article == '9t'){include("articles/passing_school_bus.html"); }
				if($article == '10t'){include("articles/school_zone_dwi.html"); }
				if($article == '11t'){include("articles/point_assessment.html"); }
				if($article == '12t'){include("articles/leaving_scene_of_accident.html"); }
				if($article == '13t'){include("articles/dwi_blood_drawn.html"); }
				if($article == '14t'){include("articles/refuse_breath_test.html"); }
				if($article == '15t'){include("articles/reckless_driving.html"); }
				if($article == '16t'){include("articles/Less_than_4_points.html"); }
				if($article == '17t'){include("articles/driving_while_suspended.html"); }
				if($article == '18t'){include("articles/municipal_court_form_page.html"); }
							
				
				
				if($article == '1w'){include("articles/probate_contests.html"); }
				if($article == '2w'){include("articles/everyone_should_have_will.html"); }
				if($article == '3w'){include("articles/probate_questons.html"); }
				if($article == '4w'){include("articles/power_of_attorney.html"); }
				if($article == '5w'){include("articles/Living_Wills.html"); }
				if($article == '6w'){include("articles/executor_duties.html"); }				
				if($article == '7w'){include("articles/trusts_v_wills.html"); }
				if($article == '8w'){include("articles/will_estate_administration.html"); }
				if($article == '9w'){include("articles/medicaid.html"); }
				if($article == '10w'){include("articles/wills_children_guardian.html"); }
				if($article == '11w'){include("articles/removing_executor.html"); }
				if($article == '12w'){include("articles/estate_planning_divorce_separated.html"); }
				if($article == '13w'){include("articles/guardianship_disabled_persons.html"); }
				if($article == '14w'){include("articles/wills_estate_planning.html"); }
				if($article == '15w'){include("articles/codicil_to_will.html"); }
				if($article == '16w'){include("articles/elective_share_spouse.html"); }
				if($article == '17w'){include("articles/estate_planning_guardian_interview_form.html"); }
				if($article == '18w'){include("articles/Probate_Inheritance_Estate_Interview.html"); }
				if($article == '19w'){include("articles/Confidential Will Questionnaire.html"); }
				
				
				
				if($article == '1g'){include("articles/Starting_New_Business.html"); }
				if($article == '2g'){include("articles/Buying_Selling_Real_Estate.html"); }
				if($article == '3g'){include("articles/Name Change.html"); }
				if($article == '4g'){include("articles/Private_Adoption.html"); }
				if($article == '5g'){include("articles/Starting_Business.html"); }
				if($article == '6g'){include("articles/Shareholders_Agreements.html"); }				
				if($article == '7g'){include("articles/Buyer_Protection_Purchasing_Business.html"); }
				if($article == '8g'){include("articles/Termination_of_Child_Support_Emancipation.html"); }
				if($article == '9g'){include("articles/Landlords_Evicting_Tenants.html"); }
				if($article == '10g'){include("articles/Uncontested_Divorce.html"); }
				if($article == '11g'){include("articles/Restrictive_Covenants.html"); }
				if($article == '12g'){include("articles/Collecting_Money_Judgment.html"); }
				if($article == '13g'){include("articles/Restraining_Orders_Domestic_Violence.html"); }
				if($article == '14g'){include("articles/Contested_Probate_general.html"); }
				if($article == '15g'){include("articles/Non_Litigation_Information_Sheet.html"); }
				
			}
	  ?>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
				    <p><br />
			        </p>
				    <p>&nbsp;</p>
				    <p>&nbsp;</p>
				    <p>&nbsp;</p>
                    <a href="http://www.njlaws.com">Original Article Source - Kenneth Vercammen, Attorney at Law</a>
				  </div>
				  <div class="indent_3"><br />
				  <div class="clear"></div>
				  </div>
			  </div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</div>	
</div>
<!-- footer -->
<!-- footer -->
<div id="footer">
Anthony G. Bajorek, LLC &copy; 2012 | Attorney Advertising | Site Maintained By <a href="http://www.eastcypress.com">East Cypress</a> 
</div>
</body>
</html>