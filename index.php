<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>php j</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<br>
		<br>
		<br>
	<!-- 		<input type="text" class="search" placeholder="search your info folder"/>
		<button class="searchbtn">search</button> -->
		<br>
		<form>
			
			folder-name:<input type="text" placeholder="create new folder" class="foldername" name="foldername"/><br>
			<button class="btn">save-folder</button><br><br>
			FILE-NAEM:<input type="text" placeholder="create new files" class="filename" name="filename"/><br>
			<button class="filebtn">save-file</button>
		</form>
		<br>
		<br>
		<div class="update-folder-name">
			old-folder-name:<input type="text" placeholder="old folder name" class="folder-old-name"/><br>
			new-folder-name:<input type="text" placeholder="new folder name" class="folder-new-name"/><br>
			<button class="folderupdatebtn">update-folder-name</button>
		</div>
		<br>
		<br>
		<br>
		<div class="update=file-name">
			old-file-name:<input type="text" placeholder="old file name" class="old-file-name"/><br>
			new-file-name:<input type="text" placeholder="new file name" class="new-file-name"/><br>
			<button class="fileupdatebtn">update-name</button>
		</div>
		<br>
		<br>
		<br>
		<div class="delete-file">
			<input type="text" class="file-name"/>
			<button class="delete-btn">delete-file</button>
		</div>
		<br>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		<script type="text/javascript">
			$(document).ready(function(){
		$(".btn").on("click",function(e){
		e.preventDefault();
		var foldername=$(".foldername").val();
		$.ajax({
			url:"create-folder.php",
			type:"POST",
			data:{foldername:foldername},
			success:function(data){
				if(data==0){
					alert("folder created");
				}else {
					alert("folder created");
				}
			}
		});
		});
		// files creat files
		$(".filebtn").on("click",function(e){
			e.preventDefault();
		var filename=$(".filename").val();
		$.ajax({
			url:"create-folder.php",
			type:"POST",
			data:{filename:filename},
			success:function(data){
				if(data==1){
					alert("file created");
				}else {
					alert("file created");
				}
			}
		});
		});
		// folder update area?
		$(".folderupdatebtn").on("click",function(e){
		e.preventDefault();
		var oldfoldername=$(".folder-old-name").val();
		var newfoldername=$(".folder-new-name").val();
		$.ajax({
		url:"update-folder.php",
		type:"POST",
		data:{oldfoldername:oldfoldername,newfoldername:newfoldername},
		success:function(data){
			if(data==1){
		alert("folder updated");
			}else {
				alert("folder not updated");
			}
			
		}
		});
		});
		//update filde name?
		$(".fileupdatebtn").on("click",function(e){
		e.preventDefault();
		var oldfilename=$(".old-file-name").val();
		var newfilename=$(".new-file-name").val();
		$.ajax({
		url:"update-folder.php",
		type:"POST",
		data:{oldfilename:oldfilename,newfilename:newfilename},
		success:function(data){
			if(data==1){
		alert("file updated");
			}else {
				alert("file not updated");
			}
			
		}
		});
		});
		/////search folder files in php glob function?
		$(".searchbtn").on("click",function(){
				var search=$("search").val();
				$.ajax({
						url:"search.php",
						type:"POST",
						data:{search:search},
						success:function(data){
								if(data==1){
								console.log(data);
								}else {
										console.log('data not search');
								}
						}
				});
		});

		// 



		$(".delete-btn").on("click",function(e){
			e.preventDefault();
			var filename=$(".file-name").val();
			$.ajax({
				url:"delete-file.php",
				type:"POST",
				data:{filename:filename},
				success:function(data){
					if(data==1){
						alert("file deleted");
					}else {
						alert("file not deleted");
					}
				}
			});


		});
		});
		</script>
	</body>
</html>