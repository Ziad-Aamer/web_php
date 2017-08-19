<html>  
<head></head>  
  
<body>  
    <table border =2>  
        <tbody><tr><td>Title</td><td>Author</td><td>Description</td></tr></tbody>  
        <?php   
            
			// => is the separator for associative arrays. In the context of that foreach loop, 
		   // it assigns the key of the array to $title and the value to $book.
            foreach ($books as $title => $book)  
            {  
			    // After the question mark you can pass key-value pairs and use them server-side.
                echo '<tr><td><a href="index.php?book='.$book->title.'">'.$book->title.'</a></td><td>'.$book->author.'</td><td>'.$book->description.'</td></tr>';  
            }  
  
        ?>  
    </table>  
  
</body>  
</html>  