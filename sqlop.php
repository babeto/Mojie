
<?php



function sqlConnect()
{

$con= mysql_connect("localhost","siteadmin","User@123");
$database ="magic_data";

	if(!$con)
	{
        	die('could not connect:'. mysql_error());
	}
	else
	{
        	echo " connect Database succeeded!";
		return $con;
	}
}

function createDatabase()
{
	sqlconnect();

	if(mysql_query("CREATE DATABASE magic_data"))
	{
        	echo "Database created";
	}
	else
	{
        	echo "Error creating database: ". mysql_error();
	}
}


function createArticleTable()
{
	sqlConnect();
	mysql_select_db($database, $con);
	$sql = "CREATE TABLE Articles
	(
	 ID  int NOT NULL AUTO_INCREMENT,
	 Title varchar(255) NOT NULL,
	 Author varchar(255),
	 Content  text,
	 Datetime datetime,
	 PRIMARY KEY(ID)
	)";


	if(mysql_query($sql,$con))
	{
	echo "table created";
	}

	else
	{
	echo "error creating table: ".mysql_error();
	}

}

function insertArticle()
{

	sqlconnect()
	$now=date("y-m-d h:i:sa");

	mysql_select_db($database, $con);

	echo "$now";

	$sql="INSERT INTO Articles (Title, Author, Content, Datetime)
	VALUES
	('凉州词','王之焕','黄河远上白云间，一片孤城万仞山。羌笛何须怨杨柳，春风不度玉门关。', '$now')";



	if(mysql_query($sql,$con))
	{
	echo "item added";
	}
	else
	{
	echo "error adding item:".mysql_error();
	}
}

function listArticles()
{
	sqlConnect();

	mysql_select_db($database, $con);

	$result=mysql_query("SELECT * FROM Articles");

	while($row=mysql_fetch_array($result))
	{
	echo $row['Title'];
	echo "<br />";
	}
}


function sqlClose()
{
	mysql_close($con);
}

$article = array();



function newArticle($Title, $Author, $Content)
{
		

}

	


?>
