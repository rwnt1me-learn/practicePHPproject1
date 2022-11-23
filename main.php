<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Site </title>
    <link rel="stylesheet" href="style6.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>     
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="/img/3.png">'; ?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут: 
                    <?php echo $name, ' ', '<br>'; echo 'Моя фамилия:', ' ', $surname . '<br>'; 
                          echo 'Живу в г.', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    с хвостиком </p>
                    <p>Что я умею?</p>
                    <p> - научился работать с переменными </p>
                    <p> - изучил простые операции с ними </p>
                    <p> - ещё владею основами Python и JS </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c, ' ', $b1; ?> <br>
                                       
                    <?php
                        $a = 20;
                        $b = 20;
                        $c = $a + $b;
                        echo 'Число'.' '. $c;
                    ?>   <br>                
                     <?php
                        echo $d;
                    ?> 

            </div>

            <div class="article">
                <p class="text">
                    Моя любимая цитата: Если проблему можно решить с помощью денег, то это не проблема. Это просто расходы. Г. Форд.<br>
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>