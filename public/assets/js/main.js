

function isValidEmailAddress(emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
}

function init_icon(){
	$('.etape_check_1').css('color','#333')
	$('.faCheck1').addClass($('.faCheck1').attr('data-fa')).css('color','#333').removeClass('far fa-check-circle animated  bounceIn');

	$('.etape_check_3').css('color','#333')
	$('.faCheck3').addClass($('.faCheck3').attr('data-fa')).css('color','#333').removeClass('far fa-check-circle animated  bounceIn');    

	$('.etape_check_4').css('color','#333')
	$('.faCheck4').addClass($('.faCheck4').attr('data-fa')).css('color','#333').removeClass('fa-check-circle animated  bounceIn');
	
	$('.etape_check_5').css('color','#333')
	$('.faCheck5').addClass($('.faCheck5').attr('data-fa')).css('color','#333').removeClass('far fa-check-circle animated  bounceIn');		
}
function init_border(){	
	$("#departement").css("border-color","#d0dfff");
	$(".group-etes label").css("border-color","#d0dfff");
	$(".group-surface label").css("border-color","#d0dfff");
	$(".group-energie label").css("border-color","#d0dfff");
	$(".group-superficie label").css("border-color","#d0dfff");
	$(".group-personnes label").css("border-color","#d0dfff");
	$(".group-revenue label").css("border-color","#d0dfff");
}

$(document).ready(function() {
	var eligble = 0;
	var mur_flag = 0;
	var surface_length = 0;
	var today = new Date()
	// var tomorrow = new Date(today)
	// tomorrow.setDate(tomorrow.getDate() + 1)
	var date = today.getDate()
	var month = today.getMonth() + 1
	var year = today.getFullYear()
	
	// var t_date = tomorrow.getDate()
	// var t_month = tomorrow.getMonth()
	// var t_year = tomorrow.getFullYear()
	// $('#MAJ_tarif b').text(date + '/' + month + '/' + year + ' ~ ' + t_date + '/' + t_month + '/' + t_year)
	$('#MAJ_tarif b').text(date + '/' + month + '/' + year)
	

	$('.pers').on('click',function(e){
		var dpt = $('#departement').val();

		if (surface_length == 1 && $( ".group-surface input:checked").val().indexOf('Murs') > -1) {
			mur_flag = 1
			if($(this).find('input').attr("id") == "personnes_1"){
				$(".bareme").text("14 790");
			}
			else if($(this).find('input').attr("id") == "personnes_2"){
				$(".bareme").text("21 630");
			}
			else if($(this).find('input').attr("id") == "personnes_3"){
				$(".bareme").text("26 013");
			}
			else if($(this).find('input').attr("id") == "personnes_4"){
				$(".bareme").text("30 389");
			}
			else if($(this).find('input').attr("id") == "personnes_5"){
				$(".bareme").text("34 784");
			}
			else if($(this).find('input').attr("id") == "personnes_6"){
				$(".bareme").text("+4 385");
			}
		} else {
			if(dpt == "75" || dpt == "77" || dpt == "78" || dpt == "91" || dpt == "92" || dpt == "93" || dpt == "94" || dpt == "95"){
				if($(this).find('input').attr("id") == "personnes_1"){
					$(".bareme").text("24 918");
				}
				else if($(this).find('input').attr("id") == "personnes_2"){
					$(".bareme").text("36 572");
				}
				else if($(this).find('input').attr("id") == "personnes_3"){
					$(".bareme").text("42 924");
				}
				else if($(this).find('input').attr("id") == "personnes_4"){
					$(".bareme").text("51 289");
				}
				else if($(this).find('input').attr("id") == "personnes_5"){
					$(".bareme").text("58 674");
				}
				else if($(this).find('input').attr("id") == "personnes_6"){
					$(".bareme").text("66 051");
				}
			}
			else{
				
				if($(this).find('input').attr("id") == "personnes_1"){
					$(".bareme").text("18 960");
				}
				else if($(this).find('input').attr("id") == "personnes_2"){
					$(".bareme").text("27 729");
				}
				else if($(this).find('input').attr("id") == "personnes_3"){
					$(".bareme").text("33 346");
				}
				else if($(this).find('input').attr("id") == "personnes_4"){
					$(".bareme").text("38 958");
				}
				else if($(this).find('input').attr("id") == "personnes_5"){
					$(".bareme").text("44 592");
				}
				else if($(this).find('input').attr("id") == "personnes_6"){
					$(".bareme").text("50 209");
				}
			}
		}
		
		
		$(".revenuApprox").show();
	});
	
	
    $('.nextStep').on('click',function(e){
		surface_length = $( ".group-surface input:checked").length
		var err = 0
		$("#departement").attr("style","");
		
		if($('#departement').val() === ""){
			$("html, body").animate({ scrollTop: 0 }, "slow");
			$("#departement").css("border-color","red");
			err=1;
		}
		if($('.group-etes').find('input:checked').val() == undefined){
			$("html, body").animate({ scrollTop: 0 }, "slow");
			$(".group-etes label").css("border-color","red");
			err=1;
		}
		if($('.group-surface').find('input:checked').val() == undefined){
			$("html, body").animate({ scrollTop: 0 }, "slow");
			$(".group-surface label").css("border-color","red");
			err=1;
		}
		if($('.group-energie').find('input:checked').val() == undefined){
			$("html, body").animate({ scrollTop: 0 }, "slow");
			$(".group-energie label").css("border-color","red");
			err=1;
		}
		
		
		if(err == 0){
			e.preventDefault();
			$("html, body").animate({ scrollTop: 0 }, "slow");
			$('#carousel').carousel('next');
			
		}
        return false;
	});
	
	$('.prevStep1').click(function(){
		init_border()
		$('#carousel').carousel(0);
	})
	$('.prevStep2').click(function(){
		init_border()
		$('#carousel').carousel(1);
		clearTimeout(check1_time)
		clearTimeout(check2_time)
		clearTimeout(check3_time)
		clearTimeout(check4_time)
		clearTimeout(check5_time)
		init_icon()
	})
	$('.prevStep3').click(function(){
		init_border()
		init_icon()
		$('#carousel').carousel(1);
	})

	$(".nextStep2").click(function(e) {
		var err = 0
		if($('.group-superficie').find('input:checked').val() === undefined){
			$("html, body").animate({ scrollTop: 0 }, "slow");
			$(".group-superficie label").css("border-color","red");
			err=1;
		}
		if($('.group-personnes').find('input:checked').val() === undefined){
			$("html, body").animate({ scrollTop: 0 }, "slow");
			$(".group-personnes label").css("border-color","red");
			err=1;
		}else if($('.group-revenue').find('input:checked').val() === undefined){
			$("html, body").animate({ scrollTop: 0 }, "slow");
			$(".group-revenue label").css("border-color","red");
			err=1;
		}

		if (err == 0) {
			e.preventDefault();
			$("html, body").animate({ scrollTop: 0 }, "slow");
			$('#carousel').carousel('next');
			
		check1_time = setTimeout(function(){
				$('.etape_check_1').css('color','#48484b')
				$('.faCheck1').removeClass($('.faCheck1').attr('data-fa')).css('color','#2cd032').addClass('far fa-check-circle animated  bounceIn');
			}, 1000)
			// setTimeout(function(){
			// 	$('.etape_check_2').css('color','#48484b')
			// 	$('.faCheck2').removeClass($('.faCheck2').attr('data-fa')).css('color','#2cd032').addClass('far fa-check-circle animated  bounceIn');
			// }, 2100)
		check2_time = setTimeout(function(){
				$('.etape_check_3').css('color','#48484b')
				$('.faCheck3').removeClass($('.faCheck3').attr('data-fa')).css('color','#2cd032').addClass('far fa-check-circle animated  bounceIn');    
			}, 2100)
			
		check3_time = setTimeout(function(){
				$('.etape_check_4').css('color','#48484b')
				$('.faCheck4').removeClass($('.faCheck4').attr('data-fa')).css('color','#2cd032').addClass('far fa-check-circle animated  bounceIn');
				$('#MAJ_tarif').fadeIn();
			}, 3200)
		check4_time = setTimeout(function(){
				$('.etape_check_5').css('color','#48484b')
				$('.faCheck5').removeClass($('.faCheck5').attr('data-fa')).css('color','#2cd032').addClass('far fa-check-circle animated  bounceIn');
				
			}, 4000);
		check5_time = setTimeout(function(){
			$('#carousel').carousel('next');
			$('#form').height('');
			$('.step3num').addClass('active');
		}, 5000)
			
		}

	});
	
    $(".send").click(function() {
        $('#nom').attr("style","");
		$('#phone').attr("style","");
		$('#email').attr("style","");
        var err = 0;

        if ($('#nom').val() === "") {
            $('#nom').css('border-color','red');
            err = 1;
        }

        if ($('#phone').val() === "") {
            $('#phone').css('border-color','red');
            err = 1;
        }

        if (($('#phone').val() === "" || $('#phone').val() == "0000000000" || $('#phone').val() == "0606060606" || $('#phone').val() == "1234567890" || $('#phone').val() == "0600000000" || $('#phone').val() == "0000000000") || $('#phone').val().length != 10) {
            $('#phone').css('border-color','red');
            err = 1;
        }

        if ($('#email').val() === "") {
            $('#email').css('border-color','red');
            err = 1;
        }else if (!isValidEmailAddress($('#email').val())) {
            $('#email').css('border-color','red');
            err = 1;
		}
		
		if ($('#terms').find('input:checked').val() == undefined) {
			$('#terms label').css('border-color', 'red');
			err = 1;
		}

        if (err === 0) {
            var pathname = window.location.pathname;
            $('.nextStep3').html('Envoi en cours...');
			$('.nextStep3').removeClass('send');
			$('.nextStep3').attr('disabled', 'disabled');
			
			var surface = "";
			$( ".group-surface input:checked").each(function( index ) {
				surface += $(this).val()+", ";
			});

			var etes = $('.group-etes').find('input:checked').val();
			var energie = $('.group-energie').find('input:checked').val();
			var superficie = $('.group-superficie').find('input:checked').val();
			var revenue = $('.group-revenue').find('input:checked').val()+" de "+$('.baremeFirst').text()+"€";
			var personnes = $('.group-personnes').find('input:checked').val();
			var site_url = $('#location').val()
			if (site_url.indexOf('http') == -1) {
				site_url = 'locahost'
			}
			if (etes.indexOf('Prop') > -1 ) {
				// if(!mur_flag){
					if (personnes == 1 && revenue.indexOf('Moins') > -1) {
						eligble = 1
					}else if(personnes == 2 && revenue.indexOf('Moins') > -1){
						eligble = 1
					}else if(personnes == 3 && revenue.indexOf('Moins') > -1){
						eligble = 1
					}else if(personnes == 4 && revenue.indexOf('Moins') > -1){
						eligble = 1
					}else if(personnes == 5 && revenue.indexOf('Moins') > -1){
						eligble = 1
					}else if(personnes.indexOf('Plus') > -1){
						eligble = 1
					}
				// }else{

				// }
			}
						
            $.ajax({
                type: 'GET',
                url: '/save_info',
                data: "dpt="+$("#departement").val()+"&nom=" + $('#nom').val() + "&prenom=" + $('#prenom').val() + "&email=" + $('#email').val() + "&tel=" + $('#phone').val() + "&surface=" + surface + "&etes=" + etes+"&energie=" + energie+"&superficie=" + superficie+"&revenue=" + revenue+"&personnes="+personnes + "&site_url="+site_url+"&eligble="+eligble,
				success: function(response) {
					console.log(eligble)
					if (eligble) {
						$('#carousel').carousel('next');
					} else {
						$('#eligble').removeClass('item');
						$('#carousel').carousel('next');
						$('#eligble').addClass('item')
					}
					
                }
            });
      		
        }
    });

});