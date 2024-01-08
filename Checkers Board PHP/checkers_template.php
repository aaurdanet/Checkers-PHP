<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- include the CSS inside the PHP --> 
        <style>
    <?php include 'checkers_template.css'; ?>
  </style>
        
        <!-- use the <title> element to set the browser tab title to Checkers -->
    <title>Checkers</title>
    
    </head>
    <body>    
        <?php
            // define constant SIZE with the value of 8
            define('SIZE', 8);
            
            // build the HTML
            // display as an <h1> the word Checkers using class 'title'
            echo "<h1 class = 'title'>Checkers</h1>";

            // create a <div> with the id 'board'
            echo "<div id='board'>";
                // create a <table> with classes 'checkers' and 'container' 
                echo "<table class = 'checkers container'>";
                    // loop through the 8 rows (i.e. use the constant SIZE)
                    for($row = 0; $row< SIZE; $row++){
                        // create a <tr> with class 'row'
                        echo" <tr class ='row'>";
                      
                            // loop through the 8 columns (i.e. use the constant SIZE)
                            for($column = 0; $column< SIZE;$column++){
                                $total = $column + $row;
                                // If the Checkers square should be empty (i.e., no checker) create a <td> using class empty
                                if ($total % 2 == 0 ||
                                    $row % 2 != 0 && $column % 2 != 0) {
                                    echo "<td class='empty'></td>";
                                } else {
                                    // create a <td> with the appropriate checker
                                    if ($row < 3) {
                                        echo "<td>";
                                        echo "<img src='red_pawn.png' alt='red pawn'>";
                                        echo "</td>";
                                    } elseif ($row > 4) {
                                        echo "<td>";
                                        echo "<img src='black_pawn.png' alt='black pawn'>";
                                        echo "</td>";
                                    } else {
                                        echo "<td class='empty'></td>";
                                    }
                                
                                    // create a <td> 
                                }
                            } // end column
                        echo"</tr>";
                        
                
                        }  // end row
                        
                                        // create an <img> referencing src 'red_pawn.png' or 'black_pawn.png'
                        // create the closing </tr> for the row
                    
                echo"</table>";
                // create the closing </table> for the table
                
            echo"</div>";        
            // create the closing </div> for id='board'
        
        ?>
    </body>
</html>