<?php


$home_automation_custom_css = '';

	/*---------------------------Copyright Text alignment-------------------*/

$home_automation_copyright_text_alignment = get_theme_mod( 'home_automation_copyright_text_alignment','LEFT-ALIGN');

 if($home_automation_copyright_text_alignment == 'LEFT-ALIGN'){

		$home_automation_custom_css .='.copy-text p{';

			$home_automation_custom_css .='text-align:left;';

		$home_automation_custom_css .='}';


	}else if($home_automation_copyright_text_alignment == 'CENTER-ALIGN'){

		$home_automation_custom_css .='.copy-text p{';

			$home_automation_custom_css .='text-align:center;';

		$home_automation_custom_css .='}';


	}else if($home_automation_copyright_text_alignment == 'RIGHT-ALIGN'){

		$home_automation_custom_css .='.copy-text p{';

			$home_automation_custom_css .='text-align:right;';

		$home_automation_custom_css .='}';

	}
