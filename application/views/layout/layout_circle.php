<!--LAYOUT CIRCLE START-->
<div class="circle_flag"></div>
<div class="circle_creator_area"><span class="circle_creator"></span> <span language_id="created_a" language_location="circle" >created a</span></div>
<div class="circle_of_strength" language_id="circle_of_strength" language_location="circle" >Circle of Strength</div>
<div class="circle_divider"></div>
<div class="circle_area_wrapper">
	<div class="circle_area">
		<img src="<?php echo base_url(); ?>img/assets/dotted-circle-small.png"/>
		<div class="circle_goal"><span language_id="we_will_text" language_location="circle" ><b>We Will - </b></span><br /><span class="goal_text"></span></div>
	</div>
</div>
<div class="gallery_item_btn">
	<div class="rollover_content">
		<a class="view_circle_btn pink_btn all_cap" language_id="view" language_location="circle">view</a>
		<div class="roll_over_text" language_id="create_your_own_circle_choose_goal" language_location="circle">Create your own Circle of Strength.<br/>Choose the <a class="same_goal_btn rollover_link">same goal</a> or <a class="create_a_new_one_btn rollover_link">create a new one.</a></div>
	</div>
</div>

<div class='share_circle'>
	<div class='share_text all_cap' language_id="share" language_location="circle">share</div>
	<div class='circle_fb_share_btn facebook_share_btn'><img src='<?php echo base_url(); ?>img/icons/facebook.png'/></div>
	<div class='circle_tw_share_btn twitter_share_btn'><img src='<?php echo base_url(); ?>img/icons/twitter.png'/></div>
</div>

<script type="text/javascript">
	translator.translateItems("circle");

	var sameGoal = '<a class="same_goal_btn rollover_link">' + sameGoalText + '</a>';
	var createANewOne = '<a class="create_a_new_one_btn rollover_link">' + createANewOneText + '</a>';

	var rollOverText = $(".roll_over_text").html().replace("[samegoal]", sameGoal);
	rollOverText = rollOverText.replace("[createanewone]", createANewOne);

	$(".roll_over_text").html(rollOverText);

	$('.same_goal_btn').click(function(e){
    		var circleContainer = $($(e.currentTarget).parents('.circle_container'));
    		$(circleContainer.find('.gallery_item_btn')).unbind('click');
    		currentSameGoal = $(circleContainer.find('.goal_text')).html();
    		currentSameGoalID = circleContainer.attr('goal_id');
    		currentSameGoalType = circleContainer.attr('goal_type');

    		$('body').trigger('SAME_GOAL_BUTTON_CLICKED');
    	})
	$('.create_a_new_one_btn').click(function(e){
		var circleContainer = $($(e.currentTarget).parents('.circle_container'));
		$(circleContainer.find('.gallery_item_btn')).unbind('click');
		$('body').trigger('CREATE_NEW_CIRCLE_BUTTON_CLICKED');
	})

</script>