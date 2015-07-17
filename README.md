# MultiCurl

A php cli tool to explore the web

Usage : multicurl.php --action ACTION [OPTIONS]
        ACTION :
             - google : Needs parameter query, will find for query on google
             - simple : Needs parameter query, will curl query
        OPTIONS :
             - query       : It might be an URL (or an array of URL) or a word (or an array of word) to search in google
                             Query can also be defined using standard input
                             Ex : echo "google.fr" | ./multicurl.php --action simple
                             Is the same as : ./multicurl.php --action simple --query google.fr
             - regexp      : Will filter output using regexp (default only display links)
                             Ex :  ./multicurl.php --action simple --query test.com --regexp \'/(.*)?\<div id="footer"\>(.*)?\<\/div\>(.*)?/\'
             - rep_search  : Will replace pattern ...
             - rep_by      : ... by this pattern (in output)
             - preg_search : Will replace pattern (using regexp) ...
             - preg_by     : ... by this pattern (in output)
             - multiply    : Multiply output by n
             - verbose | v : Display more informations
             - help    | h : Display this help
            
Exemple : 
  ./multicurl.php --action google --query test
  ./multicurl.php --action google --query test | ./multicurl.php --action simple
  ./multicurl.php --action google --query 'inurl:.php?id=' --rep_search '.php?id=' --rep_by '.php?id=a' | ./multicurl.php --action simple --regexp \'/(.*)?mysql_error(.*)?/\'
