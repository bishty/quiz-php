  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="ecommerce.css" />
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet" />
      <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet" />

      <title>Quiz</title>
      <style>
          body {
              background-color: wheat;
          }

          .main1 {
              background-color: skyblue;
              padding: 23px;
          }

          .btn {
              background-color: #4CAF50;
              border: none;
              color: black;
              padding: 15px 32px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 16px;
              margin: 4px 2px;
              cursor: pointer;
          }
          
      </style>
  </head>

  <body>

  
      <h1 style="text-align: center;"> PHP Quiz</h1>;


      <?php

        $Ques = array(
            0 => array(
                "ques" => "Question 1. Which has block level scope ?",
                "op1" => "1.var",
                "op2" => "2.let",
                "op3" => "3.const",
                "op4" => "4.none",
                "correct" => "op1"
            ),
            1 => array(
                "ques" => "Question 2. What is full form of PHP ?",
                "op1" => "1.Preprocessor HyperText",
                "op2" => "2.Personal home page",
                "op3" => "3.Pay house Payment",
                "op4" => "4.none",
                "correct" => "op1"
            ),
            2 => array(
                "ques" => "Question 3. What is full form of PHP ?",
                "op1" => "1.Preprocessor HyperText",
                "op2" => "2.Personal home page",
                "op3" => "3.Pay house Payment",
                "op4" => "4.none",
                "correct" => "op1"
            ),
            3 => array(
                "ques" => "Question 4. Who is known as the father of PHP?",
                "op1" => "1.Rasmus Lerdorf",
                "op2" => "2.Willam Makepiece",
                "op3" => "3.List Barely",
                "op4" => "4.none",
                "correct" => "op1"
            ),
            4 => array(
                "ques" => "Question 5. Which of the following is not true?",
                "op1" => "1.PHP applications can not be compile",
                "op2" => "2.PHP can be used to develop web applications",
                "op3" => "3.PHP makes a website dynamic",
                "op4" => "4.PHP can not be embedded into html.",
                "correct" => "op4"
            ),
            5 => array(
                "ques" => "Question 6. Which of the following function returns a text in title case from a variable?",
                "op1" => "1.ucwords(var)",
                "op2" => "2.towords(var)",
                "op3" => "3.upper(var)",
                "op4" => "4.ucwords(var",
                "correct" => "op1"
            ),
            6 => array(
                "ques" => "Question 7. Which of the following variables is not a predefined variable?",
                "op1" => "1.Preprocessor HyperText",
                "op2" => "2.ask",
                "op3" => "3.post",
                "op4" => "4.none",
                "correct" => "op2"
            ),
            7 => array(
                "ques" => "Question 8. Which of the following method sends input to a script via a URL?",
                "op1" => "1.Get",
                "op2" => "2.Personal home page",
                "op3" => "3.Pay house Payment",
                "op4" => "4.none",
                "correct" => "op1"
            ),
            8 => array(
                "ques" => "Question 9. When you need to obtain the ASCII value of a character which of the following function you apply in PHP?",
                "op1" => "1.asc()",
                "op2" => "2.chr( );",
                "op3" => "3.ord();",
                "op4" => "4.none",
                "correct" => "op1"
            ),
            9 => array(
                "ques" => "Question 10. Which of the following method sends input to a script via a URL?",
                "op1" => "1.Get",
                "op2" => "2.Post",
                "op3" => "3.Both",
                "op4" => "4.none",
                "correct" => "op1"
            ),
        );

        echo ("<form style='padding:5%' action='result.php'  method='POST'>");
        echo ("<div class='main1'>");


        foreach ($Ques as $key1 => $v1) {
            foreach ($v1 as $key2 => $v2) {
                if ($key2 == 'ques') {
                    echo ("<h4> $v2</h4><br>");
                } elseif ($key2 == 'correct') {
                    echo ("");
                } else {

                    echo ("<input type='radio'  name='$key1' value= '".$key2."'>");
                    echo " $v2";
                    echo "<br>";
                }
            }
        }
        echo ("</div>");
        echo ("<center><button type='submit' class='btn'>submit</button></center> ");
        echo ("</form>");
        ?>

  </body>

  </html>