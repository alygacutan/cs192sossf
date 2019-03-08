<!--
MIT License

Copyright (c) 2019 Kenneth Santos

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.
s
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

This is a course requirement for CS 192 Software Engineering II under the 
supervision of Asst. Prof. Ma. Rowena C. Solamo of the Department of Computer 
Science, College of Engineering, University of the Philippines, Diliman for 
the AY 2018-2019
 -->

 <!-- 
Code History
v1.0 - Feb 25, 2019 - Initial file - HTML [Kenneth Santos]
v2.0 - Feb 25, 2019 - Organized file and folder structure for next sprint update [Kenneth Santos]

File Creation Date: Feb 25,2019
Development Group: SOSSF Group 
Client Group: N/A
Purpose: The PHP File for printing.
 -->

<?php

//for viewall.php, search.php
function view($record) {
	echo "<tr>
			<td><a href='view.php?id={$record["establishmentID"]}'>{$record["name"]}</a></td>
			<td>{$record["tags"]}</td>
			<td>{$record["addedBy"]}</td>
			<td><a href='delete.php?id={$record["establishmentID"]}'>Delete</a></td>
		  </tr>";
	//		<td><a href=''>Edit</a>, <a href='delete.php?id={$record["establishmentID"]}'>Delete</a></td>
	//	  </tr>";
}

?>