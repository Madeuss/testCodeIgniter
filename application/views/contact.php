<style>

.container-contact{
	margin:100px auto;
	position: fixed;
	width: 100%;
	height: calc(100% - 100px);
	display: flex;
	justify-content: center;
	align-items: center;
	padding:20px 100px;
	font-family: 'Quicksand', sans-serif;
	font-size: 1.5rem;
}

.container-contact:after{
	content: '';
	position: absolute;
	width: 100%;
	height: calc(100% - 100px);
	left: 0;
	top: 0;
	background: url("public/img/bg-contact.jpg") no-repeat center;
	background-size: cover;
	filter: blur(200px);
	z-index: -1;
}
.contact-box{
	max-width: 850px;
	max-height: 600px;
	display: grid;
	grid-template-columns: repeat(2, 1fr);
	justify-content: center;
	align-items: center;
	text-align: center;
	background-color: #fff;
	box-shadow: 0px 0px 19px 5px rgba(0,0,0,0.19);
}

.left{
	background: url("public/img/bg-contact.jpg") no-repeat center;
	background-size: cover;
	width: 100%;
	height: 100%;
}

.right{
	padding: 25px 40px;
}

h2{
	position: relative;
	padding: 0 0 10px;
	margin-bottom: 10px;
}

h2:after{
	content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    height: 4px;
    width: 60px;
    border-radius: 2px;
    background-color: #ffd55d;
}

.field{
	width: 100%;
	border: 2px solid rgba(0, 0, 0, 0);
	outline: none;
	background-color: rgba(230, 230, 230, 0.6);
	padding: 0.5rem 1rem;
	font-size: 1.1rem;
	margin-bottom: 22px;
	transition: .3s;
	font-family: 'Quicksand', sans-serif;
	font-size: 1.5rem;
}

.field:hover{
	background-color: rgba(0, 0, 0, 0.1);
}

textarea{
	min-height: 150px;
}
#ask{
	float: left;
	font-size: 1.7rem;
	color: rgb(97, 96, 96);
	font-weight: 400;
}
.any-file{
	width: 0.1px;
	height: 0.1px;
	opacity: 0;
	overflow: hidden;
	position: absolute;
	z-index: -1;
}
.any-file + label{
	float: left;
	width: 8em;
	border-radius: 5px;
	font-size: 1.25em;
    font-weight: 800;
	color: white;
	background-image: linear-gradient(to right, #ffd55d, #ffd55d, #fcde8d);
	background-size: 200%;
	display: inline-block;
	cursor: pointer;
}
.any-file:focus + label,
.any-file + label:hover {
	background-position: right;
}
/*To know which is on focus*/
.any-file:focus + label{
	outline: 1px solid #95affd;
	outline: -webkit-focus-ring-color auto 5px;
}
/*Case os FastClick*/ 
.inputfile + label * {
	pointer-events: none;
}
.btn-contact{
	width: 100%;
	margin: 15px auto;
	padding: 0.5rem 1rem;
	background-image: linear-gradient(to right, #008fd1, #76c5f0, #008fd1);
	background-size: 200%;
	color: #fff;
	font-size: 1.5rem;
	border: none;
	border-radius: 7px;
	outline: none;
	cursor: pointer;
	transition: .3s;
	font-weight: 400;
}

.btn-contact:hover{
	background-position: right;
	font-weight: 600;
}

.field:focus{
    border: 2px solid rgba(30,85,250,0.47);
    background-color: #fff;
}

@media screen and (max-width: 880px){
	.contact-box{
		grid-template-columns: 1fr;
	}
	.left{
		height: 200px;
	}
	.any-file{
		width: 1px;
	}
	.container-contact{
		position: relative;
	}
}
</style>	

	<div class="container-contact">
		<div class="contact-box">
			<div class="left"></div>
			<form class="right" name="form">
				<h2>Contact Us</h2>
				<input type="text" class="field" name="name" placeholder="Your Name" required>
				<input type="text" class="field" name="email" placeholder="Your Email" required>
				<input type="text" class="field" name="phone" placeholder="Phone" required>
				<textarea class="field" name="" placeholder="Message" required></textarea>
				<label id="ask">Deseja Inserir Algum Documento?</label>
					<input type="file" class="any-file" name="file" id="file" data-multiple-caption="{count} files selected" multiple>
					<label for="file"><strong>Choose a File...</strong></label>
				<button class="btn-contact" type="submit" onclick="ValidateEmail(document.form.email)">Send</button>
			</form>
		</div>
	</div>
	
	<!--<script src="<?php echo base_url(); ?>public/js/file.name.js"></script>-->

<!--<script>
		var inputs = document.querySelectorAll( '.any-file' );
Array.prototype.forEach.call( inputs, function( input )
{
	var label	 = input.nextElementSibling,
		labelVal = label.innerHTML;

	input.addEventListener( 'change', function( e )
	{
		var fileName = '';
		if( this.files && this.files.length > 1 )
			fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
        
        else
			fileName = e.target.value.split( '\' ).pop();
        
	    if( fileName )
			label.querySelector( 'span' ).innerHTML = fileName;
        
        else
			label.innerHTML = labelVal;
        
    });
});
	</script> -->