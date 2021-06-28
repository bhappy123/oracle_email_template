<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Template Generator</title>
    <style>
    /* input, textarea{
        display: block;
        width: 80%;
        padding: 10px;
        margin-top: 8px;
        border: 4px solid skyblue;
    }
    label{
        display: block;
        margin-top: 30px;
    } */
    body{
    background: url('https://images.pexels.com/photos/2271683/pexels-photo-2271683.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940') 0px 0px;
    }
    .wrapper{
        margin-top: 40px;
        background: rgba(0, 0, 0, 1);
        padding: 40px;
        border: 1px solid #fff;
    }
    .wrapper h2{
        color: yellow;
    }
    label {
        font-size: 14px;
        margin: 2em 0 0.5em;
        color: #fff;
        text-transform: uppercase;
        width: 25%;
        cursor: pointer;
    }
    .input_wrapper{
        display: flex;
        margin-top:

    }
    form{
        padding: 2rem;
    }
    input[type="text"], input[type="tel"], input[type="email"], input[type="date"], input[type="number"], select, textarea {
    display: block;
    font-size: 1em;
    padding: 0.2em;
    background: rgba(255, 255, 255, 0.88);
    border: none;
    width: 53%;
    display: inline-block;
    margin-top: 10px;
}input[type="color"]{
    margin-top: 20px;
}
input[type="submit"]{
    display: inline-block;
    width: 100%;
    padding: 0.5em;
    margin-top: 30px;
    border: none;
    outline: none;
    cursor: pointer;
    background: #fcba03;
    color: #000;
    font-size: 22px;
    font-weight: bold;
    transition: 0.3s ease-in-out;
}
input[type="submit"]:hover{
    background: rgba(0, 0, 0, 0.72);
    color: #fcba03;
    border: 1px solid #fcba03;
}
.faq{
	background: rgba(0, 0, 0, 0.7);
	box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
	border: 1px solid rgba(255, 255, 255, 0.5);
	border-right: 1px solid rgba(255, 255, 255, 0.2);
	border-bottom: 1px solid rgba(255, 255, 255, 0.2);
	position: fixed;
    top: 16px;
    right: 16px;
    width: 300px;
    padding: 20px;
    border-radius: 20px;
		color: #ddd;
}
.qn h4{
	color: #ff0;
	margin-top: 18px;
	margin-bottom: 6px;
}
.ans p{
	margin-top: 0px;
	margin-bottom: 16px;
}
.ans p b{
	color: #f00;
	font-size: 18px;
	font-family: sans-serif;
}

    </style>
</head>

<body>


        <div class="faq">

                <div class="qn">
										<h4>Nameing?</h4>
								</div>

								<div class="ans">
									<p>The complete Template is divided into four rows and each row contains desired ammount of columns</p>
									<p>ex: First Row has three columns and Each Column can be accessable by all the inputs containing 1 X 1 in starting</p> 
								</div>
                <div class="qn">
										<h4>How to add bullets in Snippets</h4>
								</div>

								<div class="ans">
									<p>Add <b>[*]</b> Tag before each line </p>
								</div>
                <div class="qn">
										<h4>How to make a text bold</h4>
								</div>

								<div class="ans">
									<p>Wrap the text with <b>&lt;b&gt; &lt;b/&gt;</b> Tag </p>
								</div>

								<div class="qn">
										<h4>How to make a text italic</h4>
								</div>

								<div class="ans">
									<p>Wrap the text with <b>&lt;i&gt; &lt;i/&gt;</b> Tag </p>
								</div>

        </div>

    <form action="./controller/four_x_four.php" method="post">
    <div class="globl_input wrapper">
        <h2>Global Variables</h2>

			<div class="input_wrapper">    
    		<label for="newsletter_number">Newsletter Number</label>
        <input type="text" name="newsletter_number" id="newsletter_number">
      </div>

    <div class="input_wrapper">    
    <label for="one_one_heading_color">First Row Heading Color</label>
        <input type="color" name="one_one_heading_color" id="one_one_heading_color">
          </div>
        <div class="input_wrapper">
        <label for="one_one_subheading_color">First Row SubHeading Color</label>
        <input type="color" name="one_one_subheading_color" id="one_one_subheading_color">
          </div>
        <div class="input_wrapper">
        <label for="one_one_points_color">First Row Snippets Color</label>
        <input type="color" name="one_one_points_color" id="one_one_points_color">
        </div>

        <div class="input_wrapper">    
    <label for="second_row_heading_color">Second Row Heading Color</label>
        <input type="color" name="second_row_heading_color" id="second_row_heading_color">
          </div>
        <div class="input_wrapper">
        <label for="second_row_subheading_color">Second Row SubHeading Color</label>
        <input type="color" name="second_row_subheading_color" id="second_row_subheading_color">
          </div>
        <div class="input_wrapper">
        <label for="second_row_points_color">Second Row Snippets Color</label>
        <input type="color" name="second_row_points_color" id="second_row_points_color">
        </div>


        <div class="input_wrapper">    
    <label for="third_row_heading_color">Third Row Heading Color</label>
        <input type="color" name="third_row_heading_color" id="third_row_heading_color">
          </div>
        <div class="input_wrapper">
        <label for="third_row_subheading_color">Third Row SubHeading Color</label>
        <input type="color" name="third_row_subheading_color" id="third_row_subheading_color">
          </div>
        <div class="input_wrapper">
        <label for="third_row_points_color">Third Row Snippets Color</label>
        <input type="color" name="third_row_points_color" id="third_row_points_color">
        </div>


        <div class="input_wrapper">    
    <label for="fourth_row_heading_color">Fourth Row Heading Color</label>
        <input type="color" name="fourth_row_heading_color" id="fourth_row_heading_color">
          </div>
        <div class="input_wrapper">
        <label for="fourth_row_subheading_color">Fourth Row SubHeading Color</label>
        <input type="color" name="fourth_row_subheading_color" id="fourth_row_subheading_color">
          </div>
        <div class="input_wrapper">
        <label for="fourth_row_points_color">Fourth Row Snippets Color</label>
        <input type="color" name="fourth_row_points_color" id="fourth_row_points_color">
        </div>


        <div class="input_wrapper">
        <label for="first_row_background_color">First Row Background Color</label>
        <input type="color" name="first_row_background_color" id="first_row_background_color">
        </div>

        <div class="input_wrapper">
        <label for="second_row_background_color">Second Row Background Color</label>
        <input type="color" name="second_row_background_color" id="second_row_background_color">
        </div>

        <div class="input_wrapper">
        <label for="third_row_background_color">Third Row Background Color</label>
        <input type="color" name="third_row_background_color" id="third_row_background_color">
        </div>

        <div class="input_wrapper">
        <label for="">Fourth Row Background Color</label>
        <input type="color" name="fourth_row_background_color" id="fourth_row_background_color">
        </div>

</div>

<div class="first_row_input wrapper">
<h2>FIRST ROW</h2>
        <div class="input_wrapper">
        <label for="one_one_heading_title">1 X 1 Heading Title</label>
        <input type="text" name="one_one_heading_title" id="one_one_heading_title">
</div>
        <div class="input_wrapper">
        <label for="one_one_subheading_title">1 X 1 Subheading Title</label>
        <input type="text" name="one_one_subheading_title" id="one_one_subheading_title">
</div>
        <div class="input_wrapper">
        <label for="one_one_image_url">1 X 1 Image URL</label>
        <input type="text" name="one_one_image_url" id="one_one_image_url">
</div>
        <div class="input_wrapper">
        <label for="one_one_see_more_url">1 X 1 SEE MORE URL</label>
        <input type="text" name="one_one_see_more_url" id="one_one_see_more_url">
</div>
        <div class="input_wrapper">
        <label for="one_one_points">1 X 1 Snippets</label>
        <textarea cols="30" rows="10" name="one_one_points" id="one_one_points"></textarea>
</div>
          

        <div class="input_wrapper">
        <label for="one_two_heading_title">1 X 2 Heading Title</label>
        <input type="text" name="one_two_heading_title" id="one_two_heading_title">
</div>
        <div class="input_wrapper">
        <label for="one_two_subheading_title">1 X 2 Subheading Title</label>
        <input type="text" name="one_two_subheading_title" id="one_two_subheading_title">
</div>
        <div class="input_wrapper">
        <label for="one_two_image_url">1 X 2 Image URL</label>
        <input type="text" name="one_two_image_url" id="one_two_image_url">
</div>
        <div class="input_wrapper">
        <label for="one_two_see_more_url">1 X 2 SEE MORE URL</label>
        <input type="text" name="one_two_see_more_url" id="one_two_see_more_url">
</div>

        <div class="input_wrapper">
        <label for="one_two_points">1 X 2 Snippets</label>
        <textarea cols="30" rows="10" name="one_two_points" id="one_two_points"></textarea>
</div>
          

        <div class="input_wrapper">
        <label for="one_three_heading_title">1 X 2 Heading Title</label>
        <input type="text" name="one_three_heading_title" id="one_three_heading_title">
</div>
        <div class="input_wrapper">
        <label for="one_three_subheading_title">1 X 3 Subheading Title</label>
        <input type="text" name="one_three_subheading_title" id="one_three_subheading_title">
</div>
        <div class="input_wrapper">
        <label for="one_three_image_url">1 X 3 Image URL</label>
        <input type="text" name="one_three_image_url" id="one_three_image_url">
</div>
        <div class="input_wrapper">
        <label for="one_three_see_more_url">1 X 3 SEE MORE URL</label>
        <input type="text" name="one_three_see_more_url" id="one_three_see_more_url">
</div>
        <div class="input_wrapper">
        <label for="one_three_points">1 X 3 Snippets</label>
        <textarea cols="30" rows="10" name="one_three_points" id="one_three_points"></textarea>
</div>
</div>
<!-- Second Row -->
<div class="first_row_input wrapper">
    <h2>SECOND ROW</h2>
<div class="input_wrapper">        
<label for="two_one_heading_title">2 X 1 Heading Title</label>
        <input type="text" name="two_one_heading_title" id="two_one_heading_title">
</div>
        <div class="input_wrapper">
        <label for="two_one_image_url">2 X 1 Image URL</label>
        <input type="text" name="two_one_image_url" id="two_one_image_url">
</div>
        <div class="input_wrapper">
        <label for="two_one_see_more_url">2 X 1 SEE MORE URL</label>
        <input type="text" name="two_one_see_more_url" id="two_one_see_more_url">
</div>
        <div class="input_wrapper">
        <label for="two_one_points">2 X 1 Snippets</label>
        <textarea cols="30" rows="10" name="two_one_points" id="two_one_points"></textarea>
</div>
        
        <div class="input_wrapper">
        <label for="two_two_heading_title">2 X 2 Heading Title</label>
        <input type="text" name="two_two_heading_title" id="two_two_heading_title">
</div>
        <div class="input_wrapper">
        <label for="two_two_image_url">2 X 2 Image URL</label>
        <input type="text" name="two_two_image_url" id="two_two_image_url">
</div>
        <div class="input_wrapper">
        <label for="two_two_see_more_url">2 X 2 SEE MORE URL</label>
        <input type="text" name="two_two_see_more_url" id="two_two_see_more_url">
</div>
        <div class="input_wrapper">
        <label for="two_two_points">2 X 2 Snippets</label>
        <textarea cols="30" rows="10" name="two_two_points" id="two_two_points"></textarea>
</div>
        
        <div class="input_wrapper">
        <label for="two_three_heading_title">2 X 3 Heading Title</label>
        <input type="text" name="two_three_heading_title" id="two_three_heading_title">
</div>
        <div class="input_wrapper">
        <label for="two_three_image_url">2 X 3 Image URL</label>
        <input type="text" name="two_three_image_url" id="two_three_image_url">
</div>
        <div class="input_wrapper">
        <label for="two_three_see_more_url">2 X 3 SEE MORE URL</label>
        <input type="text" name="two_three_see_more_url" id="two_three_see_more_url">
</div>
        <div class="input_wrapper">
        <label for="two_three_points">2 X 3 Snippets</label>
        <textarea cols="30" rows="10" name="two_three_points" id="two_three_points"></textarea>
</div>
</div>


<!-- Third row -->

<div class="first_row_input wrapper">
    <h2>THIRD ROW</h2>
 <div class="input_wrapper">
<label for="three_one_header_title">3 X 1 Header Title</label>
<input type="text" name="three_one_header_title" id="three_one_header_title">
</div>
 <div class="input_wrapper">
<label for="three_one_points">3 X 1 Snippets</label>
<textarea cols="30" rows="10" type="text" name="three_one_points" id="three_one_points"></textarea>
</div>

 <div class="input_wrapper">
<label for="three_one_see_more_url">3 X 1 See more Url</label>
<input type="text" name="three_one_see_more_url" id="three_one_see_more_url">
</div>

 <div class="input_wrapper">
<label for="three_one_img_url">3 X 1 Image url Url</label>
<input type="text" name="three_one_img_url" id="three_one_img_url">
</div>
 <div class="input_wrapper">
<label for="three_two_img_url">3 X 2 Image url Url</label>
<input type="text" name="three_two_img_url" id="three_two_img_url">
</div>

 <div class="input_wrapper">
<label for="three_two_action_img_url">3 X 2 Image url Url</label>
<input type="text" name="three_two_action_img_url" id="three_two_action_img_url">
</div>
 <div class="input_wrapper">
<label for="three_two_see_more_url">3 X 2 See More Url</label>
<input type="text" name="three_two_see_more_url" id="three_two_see_more_url">
</div>
 <div class="input_wrapper">
<label for="three_three_img_url">3 X 3 Image url Url</label>
<input type="text" name="three_three_img_url" id="three_three_img_url">
</div>
 <div class="input_wrapper">
<label for="three_three_action_img_url">3 X 2 Image url Url</label>
<input type="text" name="three_three_action_img_url" id="three_three_action_img_url">
</div>
 <div class="input_wrapper">
<label for="three_three_see_more_url">3 X 3 See More Url</label>
<input type="text" name="three_three_see_more_url" id="three_three_see_more_url">
</div>
</div>
<!-- Third row -->



<!-- Fourt Row -->

<div class="fourth_row_input wrapper">
    <h2>FOURTH ROW</h2>
 <div class="input_wrapper">
<label for="four_one_header">4 X 1 Header</label>
<input type="text" name="four_one_header" id="four_one_header">
</div>
 <div class="input_wrapper">
<label for="four_one_points">4 X 1 Snippets</label>
<textarea cols="30" rows="10" type="text" type="text" name="four_one_points" id="four_one_points"></textarea>
</div>
 <div class="input_wrapper">
<label for="four_one_img_url">4 X 1 Image URL</label>
<input type="text" name="four_one_img_url" id="four_one_img_url">
</div>
 <div class="input_wrapper">
<label for="four_one_image_link">4 X 1 Image Link</label>
<input type="text" name="four_one_image_link" id="four_one_image_link">
</div>
 <div class="input_wrapper">
<label for="four_one_see_more_url">4 X 1 see more url</label>
<input type="text" name="four_one_see_more_url" id="four_one_see_more_url">
</div>

 <div class="input_wrapper">
<label for="four_two_header">4 X 2 Header</label>
<input type="text" name="four_two_header" id="four_two_header">
</div>
 <div class="input_wrapper">
<label for="four_two_points">4 X 2 Snippets</label>
<textarea cols="30" rows="10" type="text" type="text" name="four_two_points" id="four_two_points"></textarea>
</div>
 <div class="input_wrapper">
<label for="four_two_img_url">4 X 2 Image URL</label>
<input type="text" name="four_two_img_url" id="four_two_img_url">
</div>
 <div class="input_wrapper">
<label for="four_two_image_link">4 X 2 Image Link</label>
<input type="text" name="four_two_image_link" id="four_two_image_link">
</div>
 <div class="input_wrapper">
<label for="four_two_see_more_url">4 X 2 see more url</label>
<input type="text" name="four_two_see_more_url" id="four_two_see_more_url">
</div>
</div>

<!-- Fourt Row -->


        <input name="one_one_submit" type="submit" value="submit" />

    </form>
</body>

</html>