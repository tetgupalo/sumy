

var logind = false;
var login, password;
var users = [
[1, 'one@gmail.com', '1234', 'Banned', 'Name1', 'Surname1'],
[2, 'two@mail.ru', 'qwerty', 'Banned', 'Name2', 'Surname2'],
[3, 'three@asdfg.ua', '123', 'Not Banned', 'Name3', 'Surname3'],
[4, 'four@qwerty.ua', 'asdfg', 'Not Banned', 'Name4', 'Surname4'],
[5, 'five@zxcv.ua', 'password', 'Not Banned', 'Name5', 'Surname5'],
[6, 'six@gov.ua', 'kakdela', 'Banned', 'Name6', 'Sname6'],
[7, 'seventh@norm.ua', 'azaza', 'Not Banned', 'Name7', 'Surname7'],
[8, 'eighth@zdarov.ua', 'tratatu', 'Not Banned', 'Name8', 'Surname8'],
[9, 'ninth@ololo.ua', '0sed', 'Banned', 'Name9', 'Surname9'],
[10, 'akim@ex.ua', '123', 'Not Banned', 'Andrew', 'Akimenko'],
[11, 'one1@gmail.com', '123234', 'Banned', 'Name11', 'Surname11'],
[12, 'two1@mail.ru', 'qw123erty', 'Banned', 'Name12', 'Surname12'],
[13, 'three1@asdfg.ua', '112323', 'Not Banned', 'Name13', 'Surname13'],
[14, 'four1@qwerty.ua', 'as23dfg', 'Not Banned', 'Name14', 'Surname14'],
[15, 'five1@zxcv.ua', 'pass123ord', 'Not Banned', 'Name15', 'Surname15'],
[16, 'six1@gov.ua', 'kakde213la', 'Banned', 'Name16', 'Sname16'],
[17, 'seventh1@norm.ua', 'az23aza', 'Not Banned', 'Name17', 'Surname17'],
[18, 'eighth1@zdarov.ua', 'tra12tatu', 'Not Banned', 'Name18', 'Surname18'],
[19, 'ninth1@ololo.ua', '0se32d', 'Banned', 'Name19', 'Surname19'],
[20, 'aaa@aaa.ua', 'pass123', 'Not Banned', 'Andrii', 'Akimenko']
];



var comments=[
['Index.html','3','first Comment','29.10.2015', '1'],
['Index.html','3','second Comment','1.11.2015', '2'],
['Index.html','3','third Comment','1.11.2015', '3'],
['Index.html','4','fourth Comment','2.11.2015', '4'],
['Index.html','5','fifth Comment','4.11.2015', '5'],
['Index.html','4','sixth Comment','6.11.2015', '6'],
['Index.html','7','seventh Comment','10.11.2015', '7'],
['Index.html','8','eighth Comment','11.11.2015', '8'],
['Index.html','9','ninth Comment','12.11.2015', '9']
];


var new_comments=[
['Index.html','11','first new Comment','12.11.2015', '11'],
['Index.html','2','second new Comment','12.11.2015', '12'],
['Index.html','8','3rd newComment','12.11.2015', '13'],
['Index.html','5','4th new Comment','12.11.2015', '14'],
['Index.html','6','5th newComment','12.11.2015', '15'],
['Index.html','6','6th new Comment','12.11.2015', '16'],
['Index.html','13','7th new Comment','12.11.2015', '17'],
['Index.html','14','8th new Comment','12.11.2015', '18'],
['Index.html','19','9th new Comment','12.11.2015', '19'],
['Index.html','17','10th new Comment','12.11.2015', '20']
];


function del(m){
	for(var i=0;i<comments.length;i++)
		if(comments[i][4]==m)
			comments.splice(i,1);
};

function del_new(m){
	for(var i=0;i<new_comments.length;i++)
		if(new_comments[i][4]==m)
			new_comments.splice(i,1);
};


function ban(m){
	var t='Not Banned';
	var f='Banned';
		for(var i=0;i<users.length;i++)
		if(users[i][0]==m)
		{
			if (users[i][3]==t)
				users[i][3]=f;
			else
				users[i][3]=t;
		}
	print_comment_adm2();
};


function new_comment(com){
	if(!logind)
		alert('Ви повинні авторизуватись!')
	else{
		var date = new Date();
		d = date.getDate();
		y = date.getFullYear();
		m = date.getMonth() + 1;
		var newz = [];
		newz.push('Index.html');
		for(var i=0; i<users.length;i++)
			if(users[i][1] == login)
				newz.push(users[i][0])
		newz.push(com);
		newz.push(d+'.'+m+'.'+y);
		newz.push(parseInt(comments[comments.length-1][4]) + 1)
		comments.push(newz);
	}
};


function print_comment(){
	var result='<table align="left" width="100%">';
	for (var i=0; i<comments.length; i++)
		result=result+'<tr><td width="15%">'+users[comments[i][1]-1][1]+'</td><td>'+comments[i][2]+'</td><td width="10%">'+comments[i][3]+'</td></tr>';
	result=result+'</table>';
	document.getElementById('comments').innerHTML=result;
};


function print_new_comment_adm(){
	var result='<table align="left" width="100%">';
	for (var i=0; i<new_comments.length; i++)
		result=result+'<tr><td width="15%">'+users[new_comments[i][1]-1][1]+'</td><td>'+new_comments[i][2]+'</td><td width="10%">'+new_comments[i][3]+'</td><td width="15%"><button onclick="del_new('+new_comments[i][4]+'); print_new_comment_adm(); return false">Видалити</button><button onclick="new_push('+i+'); del_new('+new_comments[i][4]+'); print_comment_adm(); print_new_comment_adm(); return false">Додати</button></td></tr>';
	result=result+'</table>';
	document.getElementById('sas-new-comments').innerHTML=result;
}


function print_comment_adm(){
	var result='<table align="left" width="100%">';
	for (var i=0; i<comments.length; i++)
		result=result+'<tr><td width="15%">'+users[comments[i][1]-1][1]+'</td><td>'+comments[i][2]+'</td><td width="10%">'+comments[i][3]+'</td><td width="10%"><button onclick="del('+comments[i][4]+'); print_comment_adm(); return false">Видалити коментар</button></td></tr>';
	result=result+'</table>';
	document.getElementById('comments').innerHTML=result;
};


function print_comment_adm2(){
	var s='<table id="tablet"  border=1><tbody><tr><th>User ID</th><th>E-mail</th><th>Password</th><th>Status</th><th>Name</th><th>Surname</th><th width="162">Ban Button</th></tr>';
	for ( var i=0;i<users.length;i++)
		s=s+'<tr><td>' 
		+ users[i][0] 
		+'</td><td>'
		+ users[i][1]
		+'</td><td>'
		+ users[i][2]
		+'</td><td>'
		+ users[i][3]
		+'</td><td>' 
		+ users[i][4]
		+'</td><td>' 
		+ users[i][5]
		+'</td><td><button onclick="ban('+users[i][0]
		+')">Додати/видалити з чорного списку</button></td></tr>';
		s=s+'</tbody></table>';
		document.getElementById('sas-comments').innerHTML=s;
}


function new_push(i){
	comments.push(new_comments[i])
}


function not_banned(n){
	for(var i=0;i<users.length;i++)
	if((users[i][3]=='Not Banned')&&(users[i][1]==n))
		return true;
	else if((users[i][3]=='Banned')&&(users[i][1]==n))
		return false;
	alert('Users wasn\'t found');
};

function loggining(){
	login = document.getElementById('form1').log.value;
	password = document.getElementById('form1').pass.value;
	var pict='<div><h6>&nbsp;</h6><img alt="Admin" src="photo.jpg"></div>'
	for(var i=0; i<users.length; i++){
		if(login=='akim@ex.ua' && password=='123'){
			alert('Вы авторизувались як адміністратор');
			logind = true;
			document.getElementById('SAS1').style.display = 'inline';
			document.getElementById('SAS2').style.display = 'inline';
			document.getElementById('form1').log.value = '';
			document.getElementById('form1').pass.value = '';
			return;
		}
		if((login == users[i][1]) && (password == users[i][2]) && !not_banned(login)){
			alert('Ваш акаунт заблокований');
			document.getElementById('form1').log.value = '';
			document.getElementById('form1').pass.value = '';
			return;
		}
		if((login == users[i][1]) && (password == users[i][2]) && not_banned(login)){
			logind = true;
			alert('Ви успішно авторизувались. Ласкаво просимо');
			document.getElementById('form1').log.value = '';
			document.getElementById('form1').pass.value = '';
			return;
		}
	}
	if(!logind)
		document.getElementById('form1').log.value = '';
		document.getElementById('form1').pass.value = '';
		alert('Такого користувача немає в базі');
}
