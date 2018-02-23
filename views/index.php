<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'/>
        <title>Title</title>
    </head>
    <body>
        <h1>Header title test</h1>
        <p>Paragraph test</p>
        <?php
            if(isset($this->data)){
                print '<p>Data retrieved by Database class: ';
                print_r($this->data);
                print '.</p>';
            }
        ?>
    </body>
</html>