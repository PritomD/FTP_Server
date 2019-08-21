<!DOCTYPE html>
<html>
	<head>
		<title> Movies</title>
		<style>
			table {
				border-collapse: collapse;
				width: 100%;
			}
			th, td {
				padding: 8px;
				text-align: left;
				border-bottom: 1px solid #ddd;
			}
			tr:hover {background-color:#99dbb3;}
			#menu{
				width: 70%;
				height: 100%;
				//background-color: antiquewhite;
				float: right;
				text-align: right;
			}
			#menu>ul{
				list-style: none;
				padding-right: 100px;
				padding-top: 20px;
			}
			#menu>ul>li{
				display: inline-block;
				//background-color: aqua;
				margin-left: 20px;
			}
			#menu>ul>li>a{
				text-decoration: none;
				color: black;
			}
			a:hover {
				background-color: #7b7b7b;
				border:1px solid black;
				font-size:25px;
				display:block;
			}
		</style>
		
		
	</head>
	<body>
		
		
		<h1>Movie List</h1>
		<div id="menu">
			<ul>
				<li><a href="/memberlogin">BACK</a></li>
				<li><a href="/logout">LOGOUT</a></li>
			</ul></div>
			<br>
			<br>
			<table border="1" width="400px" >
				<tr>
					<th>Id</th>
					<th>Type</th>
					<th>Title</th>
					<th>Download</th>
					<!-- <th>Action</th> -->
				</tr>
				@foreach ($cont as $con)
				<tr>
					<td>{{ $con->id }}</td>
					<td>{{ $con->type }}</td>
					<td>{{ $con->title }}</td>
					<td>
						<a href="{{ $con->link }}"></a>
						<!-- <a href="<%= uList[i].link %>"</a> -->
				</td>
					
				@endforeach

				</tr>

			</table>
		</body>
	</html>