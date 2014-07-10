$(document).ready(function() 
{
	setInterval(function() 
	{
		$('.voting-results').load('votes.php');
	}, 500);

	$('body').on('click', '#bugs-bunny',function(e) 
	{
		e.preventDefault();
		$.ajax(
		{
			data: 'candidate=bugsbunny&voter=' + $('#registerid').val(),
			dataType: 'html',
			error: function(response) 
			{
				console.log('something went terribly wrong');
			},
			success: function(response) 
			{
				$('#vote-success').html(response);
				$('#vote_buttons').hide();
			},
			type: 'POST',
			url: 'register.php'
		});
	});

	$('body').on('click', '#woody',function(e) 
	{
		e.preventDefault();
		$.ajax(
		{
			data: 'candidate=woody&voter=' + $('#registerid').val(),
			dataType: 'html',
			error: function(response) 
			{
				console.log('something went terribly wrong');
			},
			success: function(response) 
			{
				$('#vote-success').html(response);
				$('#vote_buttons').hide();
			},
			type: 'POST',
			url: 'register.php'
		});
	});

	$('body').on('click', '#woody-woodpecker',function(e) 
	{
		e.preventDefault();
		$.ajax(
		{
			data: 'candidate=woodywoodpecker&voter=' + $('#registerid').val(),
			dataType: 'html',
			error: function(response) 
			{
				console.log('something went terribly wrong');
			},
			success: function(response) 
			{
				$('#vote-success').html(response);
				$('#vote_buttons').hide();
			},
			type: 'POST',
			url: 'register.php'
		});
	});
});