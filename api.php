<?php
 /**
 * api.php is a sample API file to be called via AJAX to
 * deliver the contents of 2 JSON files, one of which orders the
 * data by age, the other by teaching tools.
 *
 * The page can be called via AJAX either via GET or POST, using a variable
 * named "cat":
 *
 * <code>
 * api.php?cat=box
 * </code>
 *
 * In the example above, the parameter cat is loaded with the string "age"
 * which will indicate to the API to load the JSON file containing
 * box office results.
 *
 * @package edTechBloggers
 * @author Karen Nelson
 * @version 1.01 2015/02/23
 * @link https://github.com/karenn/edTechBloggers
 * =
 * @see index.html
 * @todo none
 */

if(isset($_REQUEST['cat']))
{//check to be sure data has been transmitted via GET or POST
	switch($_REQUEST['cat'])
	{//determine contents of 'cat'
		case "age":
			include('data/edTechBloggersAge.json'); //"age" orders by age results
			break;
		default:
			include('data/edTechBloggersTools.json'); //default orders by teaching tools
	}
}else{//if not data sent, inform calling application
	echo "Incorrect parameter sent";
}
