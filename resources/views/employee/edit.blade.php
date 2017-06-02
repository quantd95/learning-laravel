<!DOCTYPE html>
<html>
<head>
	<title>Edit Employee</title>
</head>
<body>
	<div align="center">
		<form action="/update&{{ $employee->name }}" method="POST">
			<table>
				<tr>
					<td>Name: </td>
					<td><input type="text" name="name" value="{{ $employee->name }}" readonly=""></td>
				</tr>
				<tr>
					<td>Date of birth: </td>
					<td><input type="date" name="dob" value="{{ $employee->DoB }}"></td>
				</tr>
				<tr>
					<td>Address: </td>
					<td><input type="text" name="address" value="{{ $employee->address }}"></td>
				</tr>
				<tr>
					<td>Gender: </td>
					<td><input type="text" name="gender" value="{{ $employee->gender }}"></td>
				</tr>
				<tr>
					<td>Department: </td>
					<td><input type="text" name="department" value="{{ $employee->department }}"></td>
				</tr>
				<tr>
					<input type="hidden" name="_token" value="{{{ csrf_token() }}}">
					<td><input type="submit" name="btnUpdate" value="Update"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>